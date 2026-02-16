<?php
/* --------------------------------------------------------------
   VARIABLES À DÉFINIR DANS LA PAGE
   --------------------------------------------------------------
  <?php
    // Configuration du titre de section
    $section_title = "Voir aussi nos autres articles";

    // --- INITIALISATION AUTOMATIQUE ---
    $articles_data = [];
    
    // On remonte d'un niveau pour scanner le dossier "nos-articles/"
    $dossier_racine = __DIR__ . '/../'; 
    $sous_dossiers = glob($dossier_racine . '*', GLOB_ONLYDIR);
    
    // Optionnel : On mélange les dossiers pour afficher des articles différents à chaque fois
    // Si tu préfères les plus récents, enlève cette ligne et le glob triera par nom par défaut
    shuffle($sous_dossiers); 

    $compteur = 0;
    $current_dir = realpath(__DIR__); // Chemin absolu de l'article actuel pour l'exclusion

    // --- SCAN ET EXTRACTION ---
    foreach ($sous_dossiers as $dossier) {
        
        // 1. Limite stricte à 3 articles
        if ($compteur >= 3) {
            break;
        }

        // 2. Exclusion de l'article courant (pour ne pas proposer la page qu'on lit déjà)
        if (realpath($dossier) === $current_dir) {
            continue;
        }

        $fichier_article = $dossier . '/index.php';

        if (file_exists($fichier_article)) {
            $contenu = file_get_contents($fichier_article);

            // -- A. Extraction des données (Mêmes Regex que ton index principal) --

            // Titre
            preg_match('/\$article_title\s*=\s*["\'](.*?)["\'];/', $contenu, $titre_match);
            $titre = $titre_match[1] ?? 'Titre non défini';

            // Auteur (On prend juste le prénom pour matcher ton style "ARTHUR")
            preg_match('/\$author_firstname\s*=\s*["\'](.*?)["\'];/', $contenu, $prenom_match);
            $auteur = strtoupper($prenom_match[1] ?? 'Inflasys');

            // Tag / Catégorie
            preg_match('/\$article_tag\s*=\s*["\'](.*?)["\'];/', $contenu, $tag_match);
            $tag_brut = $tag_match[1] ?? 'DIVERS';
            // Nettoyage : "Article SEO" devient "SEO"
            $category = strtoupper(str_replace('Article ', '', $tag_brut));

            // Image
            preg_match('/\$article_bg_img\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/', $contenu, $img_match);
            $image_complete = ($img_match[1] ?? 'uploads/default.webp');

            // Description (Excerpt) - On prend le premier paragraphe trouvé dans $article_blocks
            preg_match('/\'content\'\s*=>\s*["\'](.*?)["\']/', $contenu, $desc_match);
            $excerpt = html_entity_decode($desc_match[1] ?? 'Lire la suite...');

            // Lien
            $lien = "nos-articles/" . basename($dossier) . "/";

            // -- B. Formatage pour le composant part-3.php --
            // Les clés ici (img, category, author...) correspondent à ce que ton part-3.php utilise dans sa boucle foreach.
            $articles_data[] = [
                'img'      => $image_complete,
                'category' => $category,
                'author'   => $auteur,
                'title'    => $titre,
                'excerpt'  => $excerpt,
                'link'     => $lien
            ];

            $compteur++;
        }
    }

    // Configuration du Bouton "Tout voir"
    $part4_btn_label = "TOUT VOIR";
    $part4_btn_link = "nos-articles/";
    
    require_once $base_path . 'components/nos-articles/articles/part-3.php';
    ?>
-------------------------------------------------------------- */

$section_title = $section_title ?? "Voir aussi nos autres articles";
$articles_data = $articles_data ?? [];
$part4_btn_label = $part4_btn_label ?? "TOUT VOIR";
$part4_btn_link = $part4_btn_link ?? "#";
?>

<style>
    /* ==========================================================================
       CSS ARTICLE PART-3
       ========================================================================== */
    .art-related {
        /* --- MARGES STANDARDS CATEGORIE --- */
        padding: 6.94vw 130px;
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        
        background-color: #F9FAFB; /* Gris clair */
        font-family: 'Poppins', sans-serif;
    }

    .art-related h2 {
        font-size: 2.22vw;
        font-weight: 700;
        margin-bottom: 4vw;
        color: #0A1A2F;
    }

    /* --- GRILLE --- */
    .art-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2vw;
        margin-bottom: 4vw;
    }

    /* --- CARTE --- */
    .art-card {
        display: flex;
        flex-direction: column;
        text-decoration: none;
        color: inherit;
        background: transparent;
        transition: transform 0.3s ease;
    }
    
    .art-card:hover { transform: translateY(-5px); }

    .art-card-img-wrap {
        position: relative;
        width: 100%;
        aspect-ratio: 16/9;
        overflow: hidden;
        border-radius: 4px;
        margin-bottom: 1.5vw;
        border: 1px solid #E5E7EB;
    }

    .art-card-img {
        width: 100%; height: 100%; object-fit: cover;
        transition: transform 0.5s ease;
    }
    .art-card:hover .art-card-img { transform: scale(1.05); }

    .art-card-badge {
        position: absolute; top: 10px; left: 10px;
        background-color: #0A1A2F; color: #fff;
        padding: 4px 10px; font-size: 0.75rem; font-weight: 600;
        text-transform: uppercase; border-radius: 2px; z-index: 2;
    }

    .art-card-meta { font-size: 0.8rem; color: #9CA3AF; text-transform: uppercase; margin-bottom: 0.5vw; font-weight: 500; }
    
    .art-card-title {
        font-size: 1.4vw; font-weight: 700; color: #0A1A2F; line-height: 1.3; margin: 0 0 10px 0; transition: color 0.3s;
    }
    .art-card:hover .art-card-title { color: #3DA8FF; }

    .art-card-excerpt {
        font-size: 1vw; color: #4B5563; line-height: 1.5; margin-bottom: 20px;
        display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;
    }

    /* --- BOUTON LIRE PLUS --- */
    .art-card-readmore {
        font-size: 0.9vw; font-weight: 700; text-transform: uppercase; color: #0A1A2F;
        display: flex; align-items: center; gap: 5px; margin-top: auto;
    }
    .art-card-readmore svg { width: 1.2vw; height: 1.2vw; transition: transform 0.3s; }
    .art-card:hover .art-card-readmore svg { transform: translate(3px, -3px); }

    /* --- BOUTON FINAL (TOUT VOIR) - STYLE CATEGORIE --- */
    .art-footer-btn-wrapper {
        display: flex;
        justify-content: flex-end;
    }

    .art-btn-all {
        display: flex;
        align-items: center;
        /* Gradient */
        background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #0A1A2F 50%, #0A1A2F 100%);
        background-size: 210% 100%;
        background-position: left;
        color: #ffffff;
        padding: 0.8vw 1.5vw;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.042vw;
        text-transform: uppercase;
        gap: 1vw;
        transition: background-position 0.6s ease;
    }

    .art-btn-all:hover { background-position: right; }

    .art-btn-icon {
        background: #fff; border-radius: 50%; width: 2vw; height: 2vw;
        display: flex; align-items: center; justify-content: center;
        transition: 0.3s; color: #0A1A2F;
    }
    .art-btn-all:hover .art-btn-icon { background: #0A1A2F; color: #fff; }

    .art-btn-icon svg { width: 1.2vw; height: 1.2vw; stroke: currentColor; stroke-width: 2; transition: transform 0.3s; }
    .art-btn-all:hover .art-btn-icon svg { transform: rotate(45deg); }


    /* --- RESPONSIVE --- */
    @media (max-width: 1024px) {
        .art-related { padding: 60px 20px; }
        .art-related h2 { font-size: 28px; }
        
        .art-grid { grid-template-columns: repeat(2, 1fr); gap: 30px; }
        
        .art-card-title { font-size: 20px; }
        .art-card-excerpt { font-size: 14px; }
        .art-card-readmore { font-size: 14px; }
        .art-card-readmore svg { width: 18px; height: 18px; }

        .art-footer-btn-wrapper { justify-content: center; }
        .art-btn-all { font-size: 14px; padding: 12px 24px; }
        .art-btn-icon { width: 30px; height: 30px; }
        .art-btn-icon svg { width: 18px; height: 18px; }
    }

    @media (max-width: 768px) {
        .art-grid { grid-template-columns: 1fr; }
    }
</style>

<section class="art-related">
    
    <h2><?php echo htmlspecialchars($section_title); ?></h2>

    <div class="art-grid">
        <?php foreach($articles_data as $article): ?>
        <a href="<?php echo $base_url ?><?php echo htmlspecialchars($article['link']); ?>" class="art-card">
            
            <div class="art-card-img-wrap">
                <span class="art-card-badge"><?php echo htmlspecialchars($article['category']); ?></span>
                <img src="<?php echo $images_url ?><?php echo htmlspecialchars($article['img']); ?>" alt="" class="art-card-img" loading="lazy">
            </div>

            <div class="art-card-meta">
                Par <?php echo htmlspecialchars($article['author']); ?>
            </div>
            
            <h3 class="art-card-title"><?php echo htmlspecialchars($article['title']); ?></h3>
            
            <div class="art-card-excerpt">
                <?php echo htmlspecialchars($article['excerpt']); ?>
            </div>

            <div class="art-card-readmore">
                Lire l'article
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </div>

        </a>
        <?php endforeach; ?>
    </div>

    <div class="art-footer-btn-wrapper">
        <a href="<?php echo $base_url ?><?= htmlspecialchars($part4_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="art-btn-all">
            <div><?= htmlspecialchars($part4_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
            <div class="art-btn-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </div>
        </a>
    </div>

</section>