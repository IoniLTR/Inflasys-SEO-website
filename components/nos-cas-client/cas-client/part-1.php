<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION
   -----------------------------------
 <?php
   $cas_client_bg = "uploads/default.webp";
   $cas_client_subtitle = "Cas client SEO";
   $cas_client_title = "Accompagnement SEO d'un fonds d'investissement";
   
   require_once '../../../components/nos-cas-client/cas-client/part-1.php';
   ?>
-------------------------------------------------------------- */
?>

<style>
    .cas-client-1 {
        position: relative;
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        
        /* --- ALIGNEMENT STANDARDISE --- */
        padding: 140px 130px 4vw 130px; 
        max-width: 2560px;
        margin: 0 auto;
        /* ------------------------------ */

        background-color: #0A1A2F;
        overflow: hidden;
        color: #ffffff;
        font-family: 'Poppins', sans-serif;
    }

    .cas-client-1-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }

    /* Overlay sombre dégradé */
    .cas-client-1::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(10, 26, 47, 0.9) 0%, rgba(10, 26, 47, 0.4) 100%);
        z-index: 1;
    }

    .cas-client-1-content {
        position: relative;
        z-index: 10;
        max-width: 900px;
    }

    .cas-client-1-subtitle {
        font-size: 1.2rem;
        color: #3DA8FF; /* Bleu Clair */
        margin: 0 0 15px 0;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .cas-client-1-title {
        font-size: clamp(2.5rem, 5vw, 4.5rem);
        font-weight: 700;
        line-height: 1.1;
        color: #ffffff;
        margin: 0;
    }

    @media (max-width: 1024px) {
        .cas-client-1 {
            min-height: 50vh;
            /* Marges Mobile Standard */
            padding: 140px 20px 60px 20px;
        }
    }
</style>

<section class="cas-client-1">
    <img src="<?php echo $images_url?><?php echo htmlspecialchars($cas_client_bg, ENT_QUOTES, 'UTF-8'); ?>" 
         alt="Background Cas Client" 
         class="cas-client-1-img"
         onerror="this.src='https://placehold.co/1920x1080/0A1A2F/FFF?text=Cas+Client'">
    
    <div class="cas-client-1-content">
        <p class="cas-client-1-subtitle"><?php echo htmlspecialchars($cas_client_subtitle, ENT_QUOTES, 'UTF-8'); ?></p>
        <h1 class="cas-client-1-title"><?php echo htmlspecialchars($cas_client_title, ENT_QUOTES, 'UTF-8'); ?></h1>
    </div>
</section>