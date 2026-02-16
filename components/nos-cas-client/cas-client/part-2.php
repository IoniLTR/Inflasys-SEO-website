<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION
   -----------------------------------
   <?php
   // Variables du fil d'ariane
   $breadcrumb_home_label = "Accueil";
   $breadcrumb_home_link = "/";
   $breadcrumb_list_label = "Nos réalisations";
   $breadcrumb_list_link = "nos-realisations/";
   $breadcrumb_current = "Hangar Airbus A320";

   // Contenu
   $cas_intro_title = "Déployer une structure de maintenance temporaire en zone ventée (110km/h)";
   $cas_intro_subtitle = "Le Client";
   $cas_intro_text = "Un acteur majeur de l'aéronautique avait besoin d'une solution urgente pour la maintenance non programmée d'un appareil, sans immobiliser ses hangars principaux.";
   
   require_once '../../../components/nos-cas-client/cas-client/part-2.php';
   ?>
-------------------------------------------------------------- */
?>

<style>
    .cas-client-2 {
        /* --- ALIGNEMENT STANDARDISE --- */
        padding: 6.94vw 130px;
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        /* ------------------------------ */

        background-color: #ffffff;
        color: #0A1A2F;
    }

    /* --- FIL D'ARIANE --- */
    .cas-client-ariane {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 10px;
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 60px;
        color: #9CA3AF;
    }

    .cas-client-ariane a {
        color: #0A1A2F;
        text-decoration: none;
        transition: color 0.3s;
    }

    .cas-client-ariane a:hover {
        color: #3DA8FF;
    }

    .cas-client-ariane svg {
        width: 14px;
        height: 14px;
        stroke: #9CA3AF;
        stroke-width: 2;
        fill: none;
    }

    .cas-client-ariane div:last-child {
        font-weight: 700;
        color: #3DA8FF; /* Élément courant en bleu clair */
    }

    /* --- TITRE --- */
    .cas-client-2-title {
        font-size: clamp(2rem, 4vw, 3.5rem);
        font-weight: 700;
        line-height: 1.1;
        margin: 0 0 80px 0;
        max-width: 1200px;
        color: #0A1A2F;
    }

    /* --- BLOC DETAILS --- */
    .cas-client-2-details {
        width: 50%;
        margin-left: 50%; /* Décalage à droite */
        padding-left: 2vw;
        border-left: 4px solid #3DA8FF; /* Ligne décorative */
    }

    .cas-client-2-details h3 {
        font-size: 1.2rem;
        font-weight: 700;
        margin: 0 0 20px 0;
        color: #0A1A2F;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .cas-client-2-details p {
        font-size: 1.1rem;
        line-height: 1.6;
        font-weight: 400;
        color: #4B5563;
        margin: 0;
    }

    @media (max-width: 1024px) {
        .cas-client-2 { 
            /* Marges Mobile Standard */
            padding: 60px 20px; 
        }
        .cas-client-2-details {
            width: 100%;
            margin-left: 0;
            padding-left: 20px;
            margin-top: 40px;
        }
        .cas-client-2-title { margin-bottom: 40px; }
    }
</style>

<section class="cas-client-2">
    
    <div class="cas-client-ariane">
        <a href="<?php echo $base_url?><?php echo htmlspecialchars($breadcrumb_home_link); ?>"><?php echo htmlspecialchars($breadcrumb_home_label); ?></a>
        <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
        
        <a href="<?php echo $base_url?><?php echo htmlspecialchars($breadcrumb_list_link); ?>"><?php echo htmlspecialchars($breadcrumb_list_label); ?></a>
        <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
        
        <div><?php echo htmlspecialchars($breadcrumb_current); ?></div>
    </div>

    <h2 class="cas-client-2-title"><?php echo htmlspecialchars($cas_intro_title); ?></h2>

    <div class="cas-client-2-details">
        <h3><?php echo htmlspecialchars($cas_intro_subtitle); ?></h3>
        <p><?php echo nl2br(htmlspecialchars($cas_intro_text)); ?></p>
    </div>

</section>