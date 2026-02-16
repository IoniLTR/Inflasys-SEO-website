<?php 
// --- VARIABLES DE CONFIGURATION ---
$realisations_title = "Nos dernières réalisations";
$realisations_btn_text = "Tout Voir";
$realisations_link_all = "nos-realisations/";

// --- LOGIQUE DYNAMIQUE : RÉCUPÉRATION DES 4 DERNIERS PROJETS ---

// 1. Définition de la fonction d'extraction (si elle n'existe pas déjà)
if (!function_exists('getHomeRealisationData')) {
    function getHomeRealisationData($filePath) {
        $content = file_get_contents($filePath);
        $data = ['title' => 'Projet', 'img_path' => 'uploads/default.webp'];
        
        // Extraction Titre ($titre_projet)
        if (preg_match('/\$titre_projet\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) {
            $data['title'] = $matches[1];
        }

        // Extraction Image ($image_mockup)
        // Cas A : concaténation avec $base_url
        if (preg_match('/\$image_mockup\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/s', $content, $matches)) {
            $data['img_path'] = $matches[1];
        } 
        // Cas B : lien direct ou variable simple
        elseif (preg_match('/\$image_mockup\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) {
            $data['img_path'] = $matches[1];
        }

        return $data;
    }
}

$projets = [];
// Chemin relatif vers le dossier 'nos-realisations' (on remonte de components/accueil/ vers la racine)
$target_dir = __DIR__ . '/../../nos-realisations'; 

// Scan des dossiers
$dirs = glob($target_dir . '/*', GLOB_ONLYDIR);

if ($dirs) {
    // On inverse pour avoir les derniers ajouts en premier
    $dirs = array_reverse($dirs); 
    
    $count = 0;
    foreach ($dirs as $dir) {
        // On s'arrête strictement à 4 projets
        if ($count >= 4) break; 
        
        $indexFile = $dir . '/index.php';
        if (file_exists($indexFile)) {
            $folderName = basename($dir);
            
            // Extraction des données du fichier
            $data = getHomeRealisationData($indexFile);
            
            // Gestion URL Image (si elle commence par http, on ne rajoute pas base_url, sinon oui)
            $fullImgUrl = (strpos($data['img_path'], 'http') === 0) 
                ? $data['img_path'] 
                : $base_url . $data['img_path'];

            // Remplissage du tableau
            $projets[] = [
                "title" => $data['title'],
                "img"   => $fullImgUrl,
                // Lien vers le dossier du projet
                "link"  => $base_url . "nos-realisations/" . $folderName . "/"
            ];
            $count++;
        }
    }
}
?>

<style>
/* ==========================================================================
   CSS PART-4
   ========================================================================== */
.index-4 {
    display: flex;
    flex-direction: column;
    background-color: #ffffff;
    width: 100%;
    /* Alignement Header */
    padding: 5.55vw 130px;
    max-width: 2560px;
    margin: 0 auto;
}

.index-4 h2 {
    font-size: 2.78vw;
    font-weight: 700;
    color: #0A1A2F;
    margin: 0;
    padding: 0 0 3.47vw 0;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.content-index-4 {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 1.39vw;
    flex-wrap: wrap;
}

.content-image-text-index-4 {
    display: flex;
    flex-direction: column;
    width: calc(50% - 1.39vw); /* 2 par ligne */
    position: relative;
    overflow: hidden;
    border-radius: 4px;
    background: #0A1A2F; /* Fond pour chargement */
    text-decoration: none; /* Important pour le lien */
}

.content-image-text-index-4 img {
    width: 100%;
    height: 100%;
    aspect-ratio: 16/9;
    object-fit: cover;
    transition: transform 0.5s ease, opacity 0.5s ease;
    opacity: 0.9;
}

.content-image-text-index-4:hover img {
    transform: scale(1.05);
    opacity: 0.6; /* Assombrir pour lisibilité texte */
}

/* Le H3 correspond ici au titre du projet */
.content-image-text-index-4 h3 {
    font-size: 1.67vw;
    font-weight: 700;
    color: white;
    position: absolute;
    left: 2vw;
    bottom: 2vw;
    transition: transform 0.3s ease, opacity 0.3s ease;
    transform: translateY(20px);
    opacity: 0;
    z-index: 2;
    margin: 0; /* Reset marge par défaut */
}

.content-image-text-index-4:hover h3 {
    transform: translateY(0);
    opacity: 1;
}

/* --- BOUTON STYLE TECH (Identique Part 9 & Header) --- */
.button-voir-tout-index-4 {
    display: flex;
    justify-content: flex-end;
    width: 100%;
    padding-top: 3vw;
}

.tout-voir-button {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* Dégradé Bleu Clair -> Bleu Foncé */
    background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #0A1A2F 50%, #0A1A2F 100%);
    background-size: 210% 100%;
    background-position: left;
    transition: background-position 0.6s ease;
    padding: 0.8vw 1.5vw;
    border-radius: 50px;
    color: #fff;
    font-size: 1.042vw;
    font-weight: 600;
    text-transform: uppercase;
    text-decoration: none;
    gap: 1vw;
    width: fit-content;
    min-width: 180px;
}

.tout-voir-button:hover {
    background-position: right;
}

.icon-voir {
    background: #fff;
    border-radius: 50%;
    width: 2vw;
    height: 2vw;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
    color: #0A1A2F;
}

.tout-voir-button:hover .icon-voir {
    background: #0A1A2F;
    color: #fff;
}

.icon-voir svg {
    width: 1.2vw;
    height: 1.2vw;
    stroke: currentColor;
    stroke-width: 2;
    transition: transform 0.3s;
}

.tout-voir-button:hover .icon-voir svg {
    transform: rotate(45deg);
}


/* ---------- RESPONSIVE ---------- */
@media (max-width: 1024px) {
    .index-4 {
        padding: 60px 20px;
    }
    
    .index-4 h2 {
        font-size: 32px;
    }
    
    .content-image-text-index-4 {
        width: 100%; /* 1 par ligne en mobile */
        margin-bottom: 20px;
    }
    
    .content-image-text-index-4 h3 {
        font-size: 20px;
        opacity: 1;
        transform: translateY(0); /* Toujours visible en tactile */
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    }
    
    .button-voir-tout-index-4 {
        justify-content: center;
    }

    .tout-voir-button {
        font-size: 14px;
        padding: 12px 24px;
        width: 100%;
        justify-content: center;
    }
    
    .icon-voir {
        width: 30px;
        height: 30px;
    }
    
    .icon-voir svg {
        width: 18px;
        height: 18px;
    }
}
</style>

<section class="index-4">
    <h2><?php echo $realisations_title; ?></h2>
    <div class="content-index-4">
        <?php if (!empty($projets)): ?>
            <?php foreach($projets as $projet): ?>
                <a href="<?php echo htmlspecialchars($projet['link']); ?>" class="content-image-text-index-4">
                    <img src="<?php echo htmlspecialchars($projet['img']); ?>" alt="<?php echo htmlspecialchars($projet['title']); ?>" loading="lazy">
                    <h3><?php echo htmlspecialchars($projet['title']); ?></h3>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucune réalisation trouvée pour le moment.</p>
        <?php endif; ?>
    </div>

    <div class="button-voir-tout-index-4">
        <a href="<?php echo $realisations_link_all; ?>" class="tout-voir-button" aria-label="<?php echo $realisations_btn_text; ?>">
            <div><?php echo $realisations_btn_text; ?></div>
            <div class="icon-voir">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
            </div>
        </a>
    </div>
</section>
<div style="width: 80vw; height: 1px; background-color: #3DA8FF; margin: 0 auto; opacity: 0.2;"></div>