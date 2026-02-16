<?php
/* --------------------------------------------------------------
<?php
    $all_cas_client_part_1 = [
        [
            'title' => "Création d'une campagne d'architecte",
            'desc'  => "Airtechnic accompagne une architecte d'intérieur pour qu’elle puisse générer 15 prospects mensuels malgré un marché en crise.",
            'img'   => "uploads/default.webp", // Remplace par ta vraie image
            'link'  => "nos-cas-clients/cas-clients/"
        ],
        [
            'title' => "Structure Gonflable Industrielle",
            'desc'  => "Installation d'un hangar temporaire de 500m2 pour un site de production automobile.",
            'img'   => "uploads/default.webp",
            'link'  => "nos-cas-clients/cas-clients/"
        ]
    ];
    require_once '../../components/nos-cas-client/part-1.php';
    ?>
-------------------------------------------------------------- */
?>

<style>
    /* --- LAYOUT PRINCIPAL --- */
    .hero-section_realisations {
        position: relative;
        width: 100%;
        height: 100vh;
        min-height: 700px;
        overflow: hidden;
        background-color: #0A1A2F;
        font-family: 'Poppins', sans-serif;
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
        background: rgba(10, 26, 47, 0.5);
        z-index: 1;
        pointer-events: none;
    }

    /* --- CONTENU TEXTE (Alignement Strict) --- */
    .container-standard {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        padding-left: 130px; 
        padding-right: 130px;
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
    }

    .spacer-small { height: 20px; }

    .subtitle_realisations {
        font-size: 1.1vw;
        line-height: 1.6;
        color: #9CA3AF;
        font-weight: 300;
        margin-bottom: 40px;
        max-width: 650px;
    }
    @media (min-width: 1920px) { .subtitle_realisations { font-size: 20px; } }

    /* --- NOUVEAU BOUTON (Style Catégorie) --- */
    .contactez-button {
        display: flex;
        justify-content: space-between;
        align-items: center;
        
        /* Dégradé : Bleu Clair -> Blanc */
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
        stroke: currentColor;
        stroke-width: 2;
        transition: transform 0.3s;
        fill: none; /* Important pour ce SVG stroke */
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
        padding-left: 130px;
        padding-right: 130px;
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
        background: #3DA8FF;
        transform: scale(1.3);
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 1024px) {
        .container-standard, .pagination-container {
            padding-left: 20px;
            padding-right: 20px;
        }
        .container-standard { padding-top: 80px; }
        .heading-big { font-size: 3rem; }
        .subtitle_realisations { font-size: 1rem; }
        
        /* Ajustement Mobile Bouton */
        .contactez-button {
            width: 100%;
            justify-content: center;
            padding: 12px 24px;
            font-size: 14px;
        }
        .icon-voir-home { width: 30px; height: 30px; }
        .icon-voir-home svg { width: 18px; height: 18px; }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (typeof Swiper !== 'undefined') {
            const swiperReals = new Swiper('.swiper-realisations', {
                loop: true,
                speed: 1000,
                observer: true,
                observeParents: true,
                effect: 'fade',
                fadeEffect: { crossFade: true },
                autoplay: {
                    delay: 5000,
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
                            <img src="<?php echo $images_url?><?= htmlspecialchars($imgSrc) ?>" class="reals-img" alt="Fond">
                            
                            <div class="realisations-bg-filter"></div>
                            
                            <div class="container-standard">
                                <div class="max-width-content">
                                    <div class="heading-big"><?= $item['title'] ?></div>
                                    <div class="spacer-small"></div>
                                    <p class="subtitle_realisations"><?= $item['desc'] ?></p>
                                    
                                    <div class="realisations-btn-wrapper">
                                        <?php 
                                            $hero_btn_link = $item['link'] ?? '#'; 
                                            $hero_btn_label = "Voir le projet";
                                        ?>
                                        <a href="<?php echo $base_url?><?= htmlspecialchars($hero_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="contactez-button" aria-label="<?= htmlspecialchars($hero_btn_label, ENT_QUOTES, 'UTF-8') ?>">
                                            <div><?= htmlspecialchars($hero_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
                                            <div class="icon-voir-home">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M7 7h10v10"></path>
                                                    <path d="M7 17 17 7"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
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