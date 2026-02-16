<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION
   -----------------------------------
   <?php
   $titre_projet = "Armelle Crêperie";
   $categorie_projet = "Restauration";
   $image_mockup = "uploads/default.webp";
   $alt_image = "Projet Aquareal";
   
   require_once '../../../components/nos-realisations/realisation/part-1.php';
   ?>
-------------------------------------------------------------- */
?>

<style>
    /* ==========================================================================
       CSS REALISATION PART-1
       ========================================================================== */
    .real-hero {
        position: relative;
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: flex-end; /* Texte en bas */
        
        /* --- MARGES STANDARDS --- */
        padding: 140px 130px 4vw 130px;
        max-width: 2560px;
        margin: 0 auto;
        
        background-color: #0A1A2F;
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
        color: #ffffff;
    }

    /* Image de fond */
    .real-hero > img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        z-index: 0;
        opacity: 0.6; /* Assombri pour lisibilité */
    }

    /* Overlay dégradé */
    .real-hero::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(10, 26, 47, 0.9) 0%, rgba(10, 26, 47, 0.2) 100%);
        z-index: 1;
        pointer-events: none;
    }

    .real-hero-content {
        position: relative;
        z-index: 10;
        max-width: 1200px;
    }

    .real-hero-cat {
        font-size: 1.2rem;
        color: #3DA8FF; /* Bleu Clair */
        margin-bottom: 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .real-hero-content h1 {
        margin: 0;
        line-height: 1.1;
    }

    .real-hero-content h1 div {
        font-size: clamp(2.5rem, 5vw, 4.5rem);
        font-weight: 700;
        color: #ffffff;
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 1024px) {
        .real-hero {
            min-height: 50vh;
            padding: 140px 20px 60px 20px; /* Marges Mobile */
        }
    }
</style>

<section class="real-hero">
   <img src="<?php echo $images_url?><?php echo htmlspecialchars($image_mockup); ?>" alt="<?php echo htmlspecialchars($alt_image); ?>">
   
   <div class="real-hero-content">
       <p class="real-hero-cat"><?php echo htmlspecialchars($categorie_projet); ?></p>
       <h1><div><?php echo htmlspecialchars($titre_projet); ?></div></h1>
   </div>
</section>