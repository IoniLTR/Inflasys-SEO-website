<?php
/* --- CONFIGURATION DE LA PAGE MAINTENANCE / 404 --- */
$maint_title_line1 = "Site en";
$maint_title_line2 = "développement";
$maint_title_line3 = "pour 2026";

$maint_desc = "Nous travaillons actuellement sur notre nouvelle plateforme digitale pour mieux vous servir. Retrouvez-nous très prochainement.";

// Image de fond ou illustration (à adapter avec ton dossier uploads)
$maint_image_path = "uploads/default.webp"; 
$maint_image_alt = "Site en construction";

// Lien du bouton (ex: mailto ou lien vers une page contact externe)
$btn_link = "contact";
$btn_text = "Nous contacter";

// Inclusion du header si nécessaire (décommenter si ton architecture le requiert)
require_once '../../components/header.php'; 
?>
<html>
    <body>
<style>
    /* =========================================
       STYLE GLOBAL & LAYOUT (Inspiré de Index-1)
       ========================================= */
    body {
        margin: 0;
        padding: 0;
        background-color: #0A1A2F;
        font-family: sans-serif; /* Ou ta police personnalisée */
    }

    .maintenance-hero {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        min-height: 100vh;
        background-color: #0A1A2F;
        padding: 0 130px; 
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        position: relative;
        overflow: hidden;
        box-sizing: border-box;
    }

    .content-maintenance {
        display: flex;
        flex-direction: column;
        width: 45%;
        z-index: 2;
        justify-content: center;
    }

    /* TITRE (Style H1 Index-1) */
    .maintenance-hero h1 {
        font-size: 4.5vw;
        font-weight: 700;
        color: #ffffff;
        margin: 0;
        padding-bottom: 1.5vw;
        line-height: 1.1;
        letter-spacing: -0.02em;
        text-transform: uppercase;
    }

    .maintenance-hero h1 span {
        color: #3DA8FF; /* Bleu clair */
    }

    /* DESCRIPTION */
    .maintenance-desc {
        color: #9CA3AF;
        font-size: 1.1vw;
        line-height: 1.6;
        margin-bottom: 3vw;
        max-width: 80%;
    }

    /* IMAGE DROITE (Style Polygon Index-1) */
    .maintenance-img-wrapper {
        width: 50vw;
        height: 100vh;
        position: absolute;
        right: 0;
        top: 0;
        clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
        background-color: #050e1a; /* Fond de repli */
    }

    .maintenance-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.6; /* Légèrement assombri pour le style */
        mix-blend-mode: overlay; /* Effet d'incrustation optionnel */
    }

    /* =========================================
       BOUTON (Style Tech - Inspiré de Index-4)
       ========================================= */
    .maintenance-btn-wrapper {
        display: flex;
        justify-content: flex-start;
        width: 100%;
    }

    .tech-button {
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
        border: 1px solid #3DA8FF; /* Ajout d'une bordure fine pour le contraste */
    }

    .tech-button:hover {
        background-position: right;
    }

    .icon-tech {
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

    .tech-button:hover .icon-tech {
        background: #0A1A2F;
        color: #fff;
    }

    .icon-tech svg {
        width: 1.2vw;
        height: 1.2vw;
        stroke: currentColor;
        stroke-width: 2;
        transition: transform 0.3s;
    }

    .tech-button:hover .icon-tech svg {
        transform: rotate(-45deg); /* Rotation inverse pour effet d'envoi */
    }

    /* =========================================
       RESPONSIVE (Max 1024px)
       ========================================= */
    @media (max-width: 1024px) {
        .maintenance-hero {
            flex-direction: column;
            align-items: flex-start;
            padding: 100px 20px 40px 20px;
            justify-content: flex-start;
        }

        .content-maintenance {
            width: 100%;
            margin-bottom: 40px;
        }

        .maintenance-hero h1 {
            font-size: 42px;
            padding-bottom: 20px;
        }

        .maintenance-desc {
            font-size: 16px;
            max-width: 100%;
            margin-bottom: 40px;
        }

        /* Image en bas ou cachée selon préférence, ici adaptée style mobile */
        .maintenance-img-wrapper {
            position: relative;
            width: 100%;
            height: 40vh;
            clip-path: none;
            border-radius: 20px;
            right: auto;
            top: auto;
            margin-top: 20px;
        }

        /* Ajustements Bouton Mobile */
        .tech-button {
            font-size: 14px;
            padding: 12px 24px;
            width: 100%;
            justify-content: center;
        }
        
        .icon-tech {
            width: 30px;
            height: 30px;
        }
        
        .icon-tech svg {
            width: 18px;
            height: 18px;
        }
    }
</style>

<section class="maintenance-hero">
    <div class="content-maintenance">
        <h1>
            <div><?php echo $maint_title_line1; ?></div>
            <div><?php echo $maint_title_line2; ?></div>
            <div><span><?php echo $maint_title_line3; ?></span></div>
        </h1>
        
        <p class="maintenance-desc">
            <?php echo $maint_desc; ?>
        </p>

        <div class="maintenance-btn-wrapper">
            <a href="<?php echo $base_url ?><?php echo $btn_link; ?>" class="tech-button">
                <div><?php echo $btn_text; ?></div>
                <div class="icon-tech">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </div>
            </a>
        </div>
    </div>
    
    <div class="maintenance-img-wrapper">
        <img src="<?php echo $root_url ?><?php echo $maint_image_path; ?>" alt="<?php echo $maint_image_alt; ?>" />
    </div>
</section>
<?php
require_once '../../components/footer.php'; 
?>
</body>
</html>