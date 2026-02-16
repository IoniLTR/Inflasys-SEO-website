<?php
// ======================================================
//  PART 5 - HOME : récupère la PARTIE 2 des pages cas-clients
//  - Langue gérée via $current_lang et $base_url
//  - Style identique (classes conservées)
// ======================================================

// Sécurité : si le header n’a pas été inclus
if (!isset($base_path)) {
    $base_path = dirname(__DIR__, 2) . '/';
}
if (!isset($current_lang)) {
    $current_lang = 'fr';
}
if (!isset($base_url) && isset($root_url)) {
    $base_url = $root_url . $current_lang . '/';
}
if (!isset($images_url) && isset($root_url)) {
    $images_url = $root_url;
}

$labels = [
    'fr' => [
        'see_all' => 'Tout Voir',
    ],
    'en' => [
        'see_all' => 'See all',
    ]
];
$ui = $labels[$current_lang] ?? $labels['fr'];

// Tags “pill” par section (tu peux ajuster les libellés)
$section_meta = [
    [
        'slug' => 'cas-clients-ingenierie',
        'tag'  => ($current_lang === 'en') ? 'Engineering' : 'Ingénierie',
    ],
    [
        'slug' => 'cas-clients-hangar',
        'tag'  => ($current_lang === 'en') ? 'Hangar' : 'Hangar',
    ],
    [
        'slug' => 'cas-clients-acoustique',
        'tag'  => ($current_lang === 'en') ? 'Acoustics' : 'Acoustique',
    ],
    [
        'slug' => 'cas-clients-cible-leurres',
        'tag'  => ($current_lang === 'en') ? 'Targets & Decoys' : 'Cibles & Leurres',
    ],
];

/**
 * Extrait une sous-chaîne à partir de la position d’un “[” en comptant les crochets.
 * Retourne la chaîne complète de tableau PHP: "[ ... ]" ou null.
 */
function extract_php_array_from_pos(string $content, int $startPos): ?string {
    $len = strlen($content);
    $depth = 0;
    $inString = false;
    $stringQuote = '';
    $escape = false;

    for ($i = $startPos; $i < $len; $i++) {
        $ch = $content[$i];

        if ($inString) {
            if ($escape) {
                $escape = false;
                continue;
            }
            if ($ch === '\\') {
                $escape = true;
                continue;
            }
            if ($ch === $stringQuote) {
                $inString = false;
                $stringQuote = '';
                continue;
            }
            continue;
        }

        if ($ch === '"' || $ch === "'") {
            $inString = true;
            $stringQuote = $ch;
            continue;
        }

        if ($ch === '[') {
            if ($depth === 0) {
                $begin = $i;
            }
            $depth++;
            continue;
        }

        if ($ch === ']') {
            $depth--;
            if ($depth === 0) {
                $end = $i;
                return substr($content, $begin, ($end - $begin + 1));
            }
            continue;
        }
    }

    return null;
}

/**
 * Lit le fichier d’une page cas-clients et récupère :
 * - $all_cas_client_part_2_title
 * - $all_cas_client_part_2 (array)
 */
function read_part2_data(string $filePath): array {
    if (!file_exists($filePath)) {
        return [
            'title' => null,
            'items' => [],
            'error' => 'file_not_found',
        ];
    }

    $content = file_get_contents($filePath);
    if ($content === false) {
        return [
            'title' => null,
            'items' => [],
            'error' => 'file_unreadable',
        ];
    }

    // Title
    $title = null;
    if (preg_match('/\\$all_cas_client_part_2_title\\s*=\\s*([\'"])(.*?)\\1\\s*;/', $content, $m)) {
        $title = $m[2];
    }

    // Array extraction: find "$all_cas_client_part_2 = ["
    $items = [];
    $pos = strpos($content, '$all_cas_client_part_2');
    if ($pos !== false) {
        $eqPos = strpos($content, '=', $pos);
        if ($eqPos !== false) {
            $bracketPos = strpos($content, '[', $eqPos);
            if ($bracketPos !== false) {
                $arrayString = extract_php_array_from_pos($content, $bracketPos);
                if ($arrayString) {
                    // Eval en retour d'array (contenu local, contrôlé par toi)
                    $evaluated = null;
                    try {
                        $evaluated = eval('return ' . $arrayString . ';');
                    } catch (\Throwable $e) {
                        $evaluated = null;
                    }

                    if (is_array($evaluated)) {
                        $items = $evaluated;
                    }
                }
            }
        }
    }

    return [
        'title' => $title,
        'items' => is_array($items) ? $items : [],
        'error' => null,
    ];
}

/**
 * Normalise un item de la PARTIE 2 vers le format attendu par part-5 :
 * - tag (pill) fourni par la section
 * - title (grand)
 * - img (préfixée)
 * - link (préfixée + slash final)
 */
function normalize_item(array $raw, string $tag, string $baseUrl, string $imagesUrl): array {
    $title = $raw['title'] ?? '';
    $img   = $raw['img'] ?? 'uploads/default.webp';
    $link  = $raw['link'] ?? '';

    // img : si c’est un chemin relatif, on préfixe
    if (is_string($img) && $img !== '') {
        if (strpos($img, 'http://') !== 0 && strpos($img, 'https://') !== 0) {
            $img = ltrim($img, '/');
            $img = $imagesUrl . $img;
        }
    } else {
        $img = $imagesUrl . "uploads/default.webp";
    }

    // link : si relatif, on préfixe $baseUrl
    if (is_string($link) && $link !== '') {
        if (strpos($link, 'http://') !== 0 && strpos($link, 'https://') !== 0) {
            $link = ltrim($link, '/');
            $link = $baseUrl . $link;
        }
        // slash final propre
        if (substr($link, -1) !== '/') $link .= '/';
    } else {
        $link = $baseUrl;
    }

    return [
        'tag'   => $tag,
        'title' => $title,
        'img'   => $img,
        'link'  => $link,
    ];
}

// Build sections from cas pages PARTIE 2
$sections = [];
foreach ($section_meta as $meta) {
    $slug = $meta['slug'];
    $tag  = $meta['tag'];

    $filePath = $base_path . $current_lang . '/' . $slug . '/index.php';
    $data = read_part2_data($filePath);

    $sectionTitle = $data['title'] ?: (($current_lang === 'en') ? 'Case Studies' : 'Cas clients');

    // On prend 2 items (comme ton design)
    $rawItems = array_slice($data['items'], 0, 2);
    $items = [];
    foreach ($rawItems as $ri) {
        if (is_array($ri)) {
            $items[] = normalize_item($ri, $tag, $base_url, $images_url);
        }
    }

    // Lien "Tout voir" = la page cas-clients de la section
    $allLink = $base_url . $slug . '/';

    $sections[] = [
        'title'   => $sectionTitle,
        'allLink' => $allLink,
        'items'   => $items,
    ];
}
?>

<style>
.index-5 {
    display: flex;
    flex-direction: column;
    background-color: #ffffff;
    width: 100%;
    /* Alignement Header : 130px */
    padding: 5.55vw 130px;
    max-width: 2560px;
    margin: 0 auto;
}

.index-5 h2 {
    color: #0A1A2F;
    font-size: 2.78vw;
    font-weight: 700;
    margin-bottom: 3.47vw;
    text-transform: uppercase;
}

.index-5-content {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 1.04vw;
}

.link-article-index-5 {
    display: flex;
    flex-direction: column;
    width: 47.5%;
    position: relative;
    overflow: hidden;
    border-radius: 4px;
    background: #000;
}

.link-article-index-5 img {
    transition: transform 0.5s ease, opacity 0.5s ease;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.8;
}

.link-article-index-5:hover img {
    transform: scale(1.05);
    opacity: 0.5;
}

.content-text-1-index-5 {
    position: absolute;
    top: 1.5vw;
    right: 1.5vw;
    background: rgba(10, 26, 47, 0.8);
    padding: 0.5vw 1vw;
    border-radius: 50px;
    z-index: 2;
}
.content-text-1-index-5 div {
    font-size: 0.9vw;
    font-weight: 600;
    color: #3DA8FF;
    text-transform: uppercase;
}

.content-text-2-index-5 {
    position: absolute;
    bottom: 1.5vw;
    left: 1.5vw;
    display: flex;
    align-items: center;
    gap: 1vw;
    transform: translateY(20px);
    transition: transform 0.3s ease;
}

.link-article-index-5:hover .content-text-2-index-5 {
    transform: translateY(0);
}

.content-text-2-index-5 h3 {
    font-size: 1.8vw;
    font-weight: 700;
    color: white;
    margin: 0;
}

.icon-arrow-svg {
    width: 2.5vw;
    height: 2.5vw;
    color: #3DA8FF;
    transition: transform 0.3s;
}
.link-article-index-5:hover .icon-arrow-svg {
    transform: translate(5px, -5px);
}

.link-all-index-5 {
    background-color: #3DA8FF;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1.39vw;
    flex-direction: row;
    width: 5%;
    min-width: 60px;
    border-radius: 4px;
    writing-mode: vertical-rl;
    text-orientation: mixed;
    color: #0A1A2F;
    text-transform: uppercase;
    overflow: hidden;
    font-weight: 700;
    transition: background-color 0.3s;
}

.link-all-index-5:hover {
    background-color: #0A1A2F;
    color: #fff;
}

.link-all-index-5 div {
    font-size: 1.2vw;
    margin-top: 1vw;
}

.link-all-index-5 svg {
    width: 2vw;
    height: 2vw;
    transform: rotate(90deg);
    margin-bottom: 1vw;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .index-5 { padding: 60px 20px; }
    .index-5 h2 { font-size: 28px; }
    .index-5-content { flex-direction: column; gap: 30px; }
    .link-article-index-5 { width: 100%; height: 300px; }
    .content-text-1-index-5 div { font-size: 12px; }
    .content-text-2-index-5 { transform: none; }
    .content-text-2-index-5 h3 { font-size: 20px; }
    .icon-arrow-svg { width: 30px; height: 30px; }
    .link-all-index-5 { width: 100%; writing-mode: horizontal-tb; flex-direction: row; padding: 15px; order: 3; gap: 10px; }
    .link-all-index-5 svg { transform: none; width: 24px; height: 24px; margin: 0; }
    .link-all-index-5 div { font-size: 16px; margin: 0; }
}
</style>

<?php
// Rendu : 4 sections identiques à ton ancien fichier, mais dynamiques
$separateur_html = '<div style="width: 80vw; height: 1px; background-color: #3DA8FF; margin: 0 auto; opacity: 0.2;"></div>';

foreach ($sections as $i => $sec):
?>
<section class="index-5">
    <h2><?php echo htmlspecialchars($sec['title']); ?></h2>

    <div class="index-5-content">
        <?php if ($i % 2 === 0): ?>
            <!-- Layout : bouton à gauche (comme ta section 1 & 3) -->
            <a class="link-all-index-5" href="<?php echo $sec['allLink']; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 7h10v10"></path><path d="M7 17 17 7"></path>
                </svg>
                <div><?php echo $ui['see_all']; ?></div>
            </a>

            <?php foreach($sec['items'] as $item): ?>
                <a class="link-article-index-5" href="<?php echo $item['link']; ?>">
                    <div class="content-text-1-index-5"><div><?php echo htmlspecialchars($item['tag']); ?></div></div>
                    <img src="<?php echo $item['img']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                    <div class="content-text-2-index-5">
                        <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                        <svg class="icon-arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 7h10v10"></path><path d="M7 17 17 7"></path>
                        </svg>
                    </div>
                </a>
            <?php endforeach; ?>

        <?php else: ?>
            <!-- Layout : bouton à droite (comme ta section 2 & 4) -->
            <?php foreach($sec['items'] as $item): ?>
                <a class="link-article-index-5" href="<?php echo $item['link']; ?>">
                    <div class="content-text-1-index-5"><div><?php echo htmlspecialchars($item['tag']); ?></div></div>
                    <img src="<?php echo $item['img']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                    <div class="content-text-2-index-5">
                        <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                        <svg class="icon-arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 7h10v10"></path><path d="M7 17 17 7"></path>
                        </svg>
                    </div>
                </a>
            <?php endforeach; ?>

            <a class="link-all-index-5" href="<?php echo $sec['allLink']; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 7h10v10"></path><path d="M7 17 17 7"></path>
                </svg>
                <div><?php echo $ui['see_all']; ?></div>
            </a>
        <?php endif; ?>
    </div>
</section>

<?php
    if ($i < count($sections) - 1) echo $separateur_html;
endforeach;
?>
