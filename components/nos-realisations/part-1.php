<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
   <?php

    //LOGIQUE DYNAMIQUE : SCAN DES RÉALISATIONS

    
     // Fonction utilitaire pour extraire les variables PHP d'un fichier sans l'exécuter.
     // On cherche les variables correspondant aux sélecteurs CSS demandés :
     // - $titre_projet       (correspond à .real-hero-content h1 div)
     // - $description_projet (correspond à .real-specs-text div)
     // - $image_mockup       (correspond à .real-hero img src)
     
    function getRealisationData($filePath) {
        $content = file_get_contents($filePath);
        $data = [
            'title' => 'Projet sans titre',
            'desc'  => '',
            'img_path' => 'uploads/default.webp' // Fallback
        ];

        // 1. Extraction du TITRE ($titre_projet)
        if (preg_match('/\$titre_projet\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) {
            $data['title'] = $matches[1];
        }

        // 2. Extraction de la DESCRIPTION ($description_projet)
        if (preg_match('/\$description_projet\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) {
            $data['desc'] = $matches[1];
        }

        // 3. Extraction de l'IMAGE ($image_mockup)
        // Cas A : $image_mockup = "uploads/img.webp";
        if (preg_match('/\$image_mockup\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/s', $content, $matches)) {
            $data['img_path'] = $matches[1];
        } 
        // Cas B : $image_mockup = "http://..."; (lien direct)
        elseif (preg_match('/\$image_mockup\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) {
            $data['img_path'] = $matches[1];
        }

        return $data;
    }

    // Initialisation des tableaux de données
    $all_cas_client_part_1 = []; // Pour le Slider (Part 1)
    $projects = [];              // Pour la Grille (Part 2)

    // Scan des sous-dossiers dans le dossier courant
    $dirs = glob(__DIR__ . '/*', GLOB_ONLYDIR);

    foreach ($dirs as $dir) {
        $indexFile = $dir . '/index.php';

        // On ne traite que les dossiers contenant un index.php
        if (file_exists($indexFile)) {
            $folderName = basename($dir); // ex: armelle-creperie
            
            // Extraction des données
            $data = getRealisationData($indexFile);

            // Reconstitution de l'URL de l'image (si ce n'est pas déjà une URL absolue)
            $fullImgUrl = (strpos($data['img_path'], 'http') === 0) 
                ? $data['img_path'] 
                : $data['img_path'];

            // 1. Remplissage pour le Slider (Part 1)
            $all_cas_client_part_1[] = [
                'title' => $data['title'],
                'desc'  => $data['desc'],
                'img'   => $fullImgUrl
            ];

            // 2. Remplissage pour la Grille (Part 2)
            $projects[] = [
                'title'       => $data['title'],
                'image'       => $fullImgUrl,
                'description' => $data['desc'],
                // Lien vers le dossier (ex: nos-realisations/nom-dossier/)
                'link'        => 'nos-realisations/' . $folderName . '/'
            ];
        }
    }
require_once '../../components/nos-realisations/part-1.php';
?>
-------------------------------------------------------------- */
?>

<style>
    /* Import Police */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

    /* --- LAYOUT PRINCIPAL --- */
    .hero-section_realisations {
        position: relative;
        width: 100%;
        height: 100vh;
        min-height: 700px;
        overflow: hidden;
        background-color: #0A1A2F; /* Bleu foncé Charte */
        font-family: 'Poppins', sans-serif;
        margin-top: 0;
    }

    .swiper-realisations {
        width: 100%;
        height: 100%;
    }
    
    .swiper-slide {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .slide-wrapper_realisations {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
    }

    /* --- IMAGES & FILTRES --- */
    .reals-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }

    .realisations-bg-filter {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* Gradient technique : Foncé à gauche vers transparent */
        background: linear-gradient(90deg, rgba(10, 26, 47, 0.95) 0%, rgba(10, 26, 47, 0.7) 50%, rgba(10, 26, 47, 0.2) 100%);
        z-index: 1;
        pointer-events: none;
    }

    /* --- CONTENU TEXTE (Alignement Strict Header) --- */
    .container-standard {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 2560px; /* Largeur max écran */
        margin: 0 auto;
        padding-left: 130px;  /* MARGE HEADER STRICTE */
        padding-right: 130px; /* MARGE HEADER STRICTE */
        box-sizing: border-box;
    }

    .max-width-content {
        max-width: 850px;
    }

    /* --- TYPO --- */
    .heading-big {
        font-size: clamp(2.5rem, 5vw, 4.5rem);
        font-weight: 700;
        line-height: 1.1;
        margin-bottom: 24px;
        color: white;
        text-transform: uppercase;
    }

    .spacer-small { height: 20px; }

    .subtitle_realisations {
        font-size: 1.1vw;
        line-height: 1.6;
        color: #9CA3AF; /* Gris moyen charte */
        font-weight: 300;
        margin-bottom: 40px;
        max-width: 650px;
        border-left: 3px solid #3DA8FF; /* Accent bleu clair */
        padding-left: 1.5rem;
    }
    
    @media (min-width: 1920px) { 
        .subtitle_realisations { font-size: 20px; } 
    }

    /* --- BOUTON (Style Gradient Airtechnic) --- */
    .contactez-button {
        display: flex;
        justify-content: space-between;
        align-items: center;
        
        /* Dégradé : Bleu Clair (#3DA8FF) -> Blanc */
        background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #ffffff 50%, #ffffff 100%);
        background-size: 210% 100%;
        background-position: left;
        
        transition: background-position 0.6s ease, color 0.6s ease;
        padding: 0.8vw 1.5vw;
        border-radius: 50px;
        
        color: #fff; /* Texte blanc par défaut */
        font-size: 1.042vw;
        font-weight: 600;
        text-transform: uppercase;
        text-decoration: none;
        gap: 1vw;
        width: fit-content;
        min-width: 180px;
        margin-top: 1vw;
        cursor: pointer;
    }

    .contactez-button:hover {
        background-position: right;
        color: #0A1A2F; /* Texte devient bleu foncé au survol */
    }

    /* Cercle de l'icône */
    .icon-voir-home {
        background: #ffffff; /* Fond blanc par défaut */
        border-radius: 50%;
        width: 2vw;
        height: 2vw;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
        color: #0A1A2F; /* Icône bleue par défaut */
    }

    /* Au survol du bouton, le cercle devient foncé */
    .contactez-button:hover .icon-voir-home {
        background: #0A1A2F; 
        color: #ffffff;
    }

    .icon-voir-home svg {
        width: 1.2vw;
        height: 1.2vw;
        stroke: currentColor; /* Utilise stroke pour ce type d'icone */
        stroke-width: 2;
        transition: transform 0.3s;
        fill: none;
    }

    .contactez-button:hover .icon-voir-home svg {
        transform: rotate(45deg);
    }

    /* --- PAGINATION (POINTS) --- */
    .overlay_realisations {
        position: absolute;
        bottom: 50px;
        left: 0;
        width: 100%;
        z-index: 10;
        pointer-events: none;
    }

    .pagination-container {
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        padding-left: 130px; /* MARGE HEADER STRICTE */
        padding-right: 130px; /* MARGE HEADER STRICTE */
        box-sizing: border-box;
    }

    .swiper-pagination {
        position: static !important;
        display: flex;
        gap: 12px;
        pointer-events: auto;
    }

    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: rgba(255, 255, 255, 0.4);
        opacity: 1;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
        margin: 0 !important;
    }

    .swiper-pagination-bullet-active {
        background: #3DA8FF; /* Bleu clair actif */
        transform: scale(1.3);
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 1024px) {
        .container-standard, .pagination-container {
            padding-left: 20px; /* Adaptation Tablette */
            padding-right: 20px;
        }
        
        .heading-big { font-size: 3rem; }
        .subtitle_realisations { font-size: 1rem; }
        
        /* Ajustement Mobile Bouton */
        .contactez-button {
            width: 100%;
            justify-content: center;
            padding: 12px 24px;
            font-size: 14px;
            margin-top: 20px;
        }
        .icon-voir-home { width: 30px; height: 30px; }
        .icon-voir-home svg { width: 18px; height: 18px; }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initialisation unique
        if (!document.querySelector('.swiper-realisations').swiper) {
            const swiperReals = new Swiper('.swiper-realisations', {
                loop: true,
                speed: 1000,
                observer: true,
                observeParents: true,
                effect: 'fade',
                fadeEffect: { crossFade: true },
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    type: 'bullets',
                },
                keyboard: { enabled: true },
            });
        }
    });
</script>

<section class="hero-section_realisations">
    
    <div class="swiper swiper-realisations">
        <div class="swiper-wrapper">
            
            <?php if(isset($all_cas_client_part_1) && is_array($all_cas_client_part_1)): ?>
                <?php foreach ($all_cas_client_part_1 as $item): ?>
                    
                    <div class="swiper-slide">
                        <div class="slide-wrapper_realisations">
                            
                            <?php $imgSrc = !empty($item['img']) ? $item['img'] : 'uploads/default.webp'; ?>
                            <img src="<?php echo $images_url?><?= htmlspecialchars($imgSrc) ?>" class="reals-img" alt="<?= htmlspecialchars($item['title']) ?>" loading="lazy">
                            
                            <div class="realisations-bg-filter"></div>
                            
                            <div class="container-standard">
                                <div class="max-width-content">
                                    <div class="heading-big"><?= $item['title'] ?></div>
                                    <div class="spacer-small"></div>
                                    <p class="subtitle_realisations"><?= $item['desc'] ?></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>

        </div>
        
        <div class="overlay_realisations">
            <div class="pagination-container">
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </div>
</section>