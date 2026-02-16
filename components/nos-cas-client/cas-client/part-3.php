<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION
   -----------------------------------
   <?php
   $oar_blocks = [
       [
           'title' => "Défi Technique",
           'text' => "Le site, situé en bord de piste, est exposé à des rafales fréquentes. La structure devait résister sans ancrage profond (interdiction de percer le tarmac)."
       ],
       [
           'title' => "Solution Airtechnic",
           'text' => "Conception d'un hangar gonflable avec lestage par eau intégré dans les parois et système de pilotage de pression dynamique asservi à un anémomètre."
       ],
       [
           'title' => "Bénéfices",
           'text' => "Installation réalisée en 48h. Aucune interruption du trafic aérien. Stabilité parfaite validée lors d'un épisode orageux (90km/h relevés)."
       ]
   ];

   require_once '../../../components/nos-cas-client/cas-client/part-3.php';
   ?>
-------------------------------------------------------------- */
?>

<style>
    .cas-client-3 {
        background-color: #0A1A2F; /* Bleu Foncé */
        color: #ffffff;
        
        /* --- ALIGNEMENT STANDARDISE --- */
        padding: 6.94vw 130px;
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        /* ------------------------------ */

        font-family: 'Poppins', sans-serif;
    }

    .cas-client-3-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 60px 0;
        border-bottom: 1px solid rgba(61, 168, 255, 0.2); /* Ligne Bleu Clair très fine */
    }

    .cas-client-3-row:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    
    .cas-client-3-row:first-child {
        padding-top: 0;
    }

    .cas-client-3-row h3 {
        width: 35%;
        font-size: 2rem;
        font-weight: 700;
        margin: 0;
        line-height: 1.2;
        flex-shrink: 0;
        color: #3DA8FF; /* Titres en Bleu Clair */
    }

    .cas-client-3-row p {
        width: 60%;
        font-size: 1.125rem;
        font-weight: 400;
        line-height: 1.6;
        margin: 0;
        color: #E5E7EB; /* Blanc cassé */
    }

    @media (max-width: 1024px) {
        .cas-client-3 { 
            /* Marges Mobile Standard */
            padding: 60px 20px; 
        }
        .cas-client-3-row {
            flex-direction: column;
            gap: 20px;
        }
        .cas-client-3-row h3 { width: 100%; font-size: 1.6rem; }
        .cas-client-3-row p { width: 100%; }
    }
</style>

<section class="cas-client-3">
    <?php foreach ($oar_blocks as $block): ?>
    <div class="cas-client-3-row">
        <h3><?php echo htmlspecialchars($block['title']); ?></h3>
        <p><?php echo nl2br(htmlspecialchars($block['text'])); ?></p>
    </div>
    <?php endforeach; ?>
</section>