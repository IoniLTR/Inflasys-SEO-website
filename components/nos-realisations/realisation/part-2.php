<?php
/* --------------------------------------------------------------
   CONFIGURATION & VARIABLES
   --------------------------------------------------------------
   <?php
   $secteur_titre = "Secteur";
   $secteur_valeur = "Restauration";

   $annee_titre = "Année";
   $annee_valeur = "2025";

   $outils_titre = "Outils utilisés";
   $outils_liste = ['Figma', 'Webflow', 'Make', 'Zenchef'];

   $livrables_titre = "Livrables";
   $livrables_liste = ['Wireframe', 'Maquette', 'Site internet', '42 illustration'];
   
   $description_projet = "Ambiance chaleureuse et musique groovy, Armelle vous embarque dans une Bretagne décomplexée. Produits bretons et carte de saison, le tout 100% maison.";
   $part1_btn_label = "VOIR LE SITE";
   $part1_btn_link = "https://www.ze-com.com/";

   require_once '../../../components/nos-realisations/realisation/part-2.php';
   ?>
-------------------------------------------------------------- */
?>

<style>
    /* --- CONFIGURATION GÉNÉRALE --- */
    .real-specs {
        background-color: #ffffff; /* Fond Blanc */
        color: #0A1A2F;
        display: flex;
        justify-content: space-between;
        
        /* --- MARGES STANDARDS --- */
        padding: 6.94vw 130px;
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        
        font-family: 'Poppins', sans-serif;
        gap: 60px;
    }

    /* --- COLONNE GAUCHE (SPECS) --- */
    .real-specs-grid {
        width: 35%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px 20px;
        align-content: start;
    }

    .real-spec-item h4 {
        font-size: 1rem;
        font-weight: 700;
        color: #0A1A2F;
        margin: 0 0 10px 0;
        text-transform: uppercase;
    }

    .real-spec-item div,
    .real-spec-item p {
        font-size: 1.1rem;
        color: #4B5563; /* Gris texte */
        margin: 0;
        line-height: 1.5;
    }

    /* --- BOUTON CORRIGÉ (Variante pour fond clair) --- */
    /* Gradient : Bleu Clair (#3DA8FF) -> Bleu Foncé (#0A1A2F) */
    .real-btn-light {
        grid-column: 1 / -1;
        margin-top: 20px;
        
        display: flex;
        justify-content: space-between;
        align-items: center;
        
        /* ICI LA CORRECTION : On termine sur du Bleu Foncé, pas du blanc */
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

    .real-btn-light:hover {
        background-position: right; /* Devient Bleu Foncé au survol */
    }

    /* Icône dans le cercle */
    .real-btn-icon-light {
        background: #ffffff; /* Cercle blanc sur fond bleu */
        border-radius: 50%;
        width: 2vw; height: 2vw;
        display: flex; align-items: center; justify-content: center;
        transition: 0.3s; 
        color: #0A1A2F; /* Flèche bleue */
    }

    /* Au survol : le cercle devient foncé (ton sur ton) ou blanc */
    .real-btn-light:hover .real-btn-icon-light {
        background: #0A1A2F; /* Cercle foncé */
        color: #ffffff;      /* Flèche blanche */
        border: 1px solid rgba(255,255,255,0.2); /* Optionnel : léger contour */
    }

    .real-btn-icon-light svg {
        width: 1.2vw; height: 1.2vw; 
        stroke: currentColor; stroke-width: 2; 
        transition: transform 0.3s;
    }

    .real-btn-light:hover .real-btn-icon-light svg {
        transform: rotate(45deg);
    }

    /* --- COLONNE DROITE (TEXTE) --- */
    .real-specs-text {
        width: 60%;
        display: flex;
        align-items: center;
    }

    .real-specs-text div {
        font-size: clamp(1.5rem, 2.5vw, 2.5rem);
        font-weight: 500;
        line-height: 1.4;
        color: #0A1A2F;
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 1024px) {
        .real-specs {
            flex-direction: column;
            padding: 60px 20px; /* Marges Mobile */
            gap: 40px;
        }

        .real-specs-grid, .real-specs-text { width: 100%; }
        
        .real-btn-light {
            width: 100%;
            justify-content: center;
            font-size: 14px;
            padding: 12px 24px;
        }
        .real-btn-icon-light { width: 30px; height: 30px; }
        .real-btn-icon-light svg { width: 18px; height: 18px; }
    }
</style>

<section class="real-specs">
   
   <div class="real-specs-grid">
         
         <div class="real-spec-item">
            <h4><?php echo htmlspecialchars($secteur_titre); ?></h4>
            <div><?php echo htmlspecialchars($secteur_valeur); ?></div>
         </div>

         <div class="real-spec-item">
            <h4><?php echo htmlspecialchars($annee_titre); ?></h4>
            <div><?php echo htmlspecialchars($annee_valeur); ?></div>
         </div>

         <div class="real-spec-item">
            <h4><?php echo htmlspecialchars($outils_titre); ?></h4>
            <?php foreach($outils_liste as $outil): ?>
                <p><?php echo htmlspecialchars($outil); ?></p>
            <?php endforeach; ?>
         </div>

         <div class="real-spec-item">
            <h4><?php echo htmlspecialchars($livrables_titre); ?></h4>
            <?php foreach($livrables_liste as $livrable): ?>
                <p><?php echo htmlspecialchars($livrable); ?></p>
            <?php endforeach; ?>
         </div>

         <a href="<?php echo $base_url?><?= htmlspecialchars($part1_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="real-btn-light" target="_blank">
            <div><?= htmlspecialchars($part1_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
            <div class="real-btn-icon-light">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </div>
         </a>
   </div>

   <div class="real-specs-text">
      <div><?php echo nl2br(htmlspecialchars($description_projet)); ?></div>
   </div>
</section>