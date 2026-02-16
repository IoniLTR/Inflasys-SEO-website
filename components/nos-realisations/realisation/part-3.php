<?php
/* --------------------------------------------------------------
   CONFIGURATION & VARIABLES
   -------------------------------------------------------------- 
   <?php
   $img_banner_top = "uploads/default.webp";
   $titre_contexte = "Le contexte";
   $texte_contexte = "Afin d’accompagner la croissance de l’entreprise et l’ouverture des 3ème et 4ème crêperies Armelle (à Rennes et Paris), l’entreprise a souhaité créer un site internet qui permettrait de communiquer sur son identité décalée tout en permettant aux internautes de localiser les différentes crêperies, consulter leurs cartes ou encore réserver.";
   $titre_objectifs = "Les objectifs";
   $texte_objectifs = "Armelle souhaitait un site à l’image de ses crêperies : joyeux, chaleureux et décomplexé. Nous avons donc travaillé sur un site qui soit ergonomique et donne facilement accès aux différents éléments clés tout en proposant une expérience visuelle originale et marquante. Nous avons complété la charte graphique avec de nombreuses illustrations et fait en sorte que le client puisse ajouter de nouveaux restaurants, fournisseurs ou offres d’emplois en toute autonomie.";
   $img_detail_1 = "uploads/default.webp";
   $img_detail_2 = "uploads/default.webp";
   $img_detail_3 = "uploads/default.webp";
   
   $part1_btn_label = "Retour aux projets";
   $part1_btn_link = "nos-realisations/";

   require_once '../../../components/nos-realisations/realisation/part-3.php';
   ?>
-------------------------------------------------------------- */
?>
<style>
    /* --- CONTENEUR --- */
    .real-gallery {
        background-color: #0A1A2F; /* Bleu Foncé */
        color: #ffffff;
        font-family: 'Poppins', sans-serif;
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
    }

    /* Images */
    .real-gallery img {
        width: 100%;
        height: auto;
        display: block;
        /* Padding latéral pour les images si on veut qu'elles ne touchent pas les bords, 
           sinon on retire le padding ici et on le met sur les blocs textes.
           Pour le style Airtechnic, on garde souvent les images en "Container" */
        padding-left: 130px;
        padding-right: 130px;
        padding-top: 4vw;
        padding-bottom: 4vw;
    }

    /* Blocs Textes */
    .real-text-block {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        /* Marges Standards */
        padding: 6.94vw 130px;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }

    .real-text-block h2 {
        width: 35%;
        font-size: clamp(2rem, 3vw, 3.5rem);
        margin: 0;
        font-weight: 700;
        color: #ffffff;
    }

    .real-text-block p {
        width: 55%;
        font-size: 1.25rem;
        line-height: 1.6;
        color: #9CA3AF;
        margin: 0;
    }

    /* Bloc Action */
    .real-action {
        display: flex;
        justify-content: center;
        padding: 6.94vw 130px;
        background-color: #0A1A2F;
    }

    /* Bouton (Même classe que part-2 pour consistance) */
    .real-btn {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #ffffff 50%, #ffffff 100%);
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
        min-width: 220px;
    }

    .real-btn:hover { background-position: right; color: #0A1A2F; }

    .real-btn-icon {
        background: #ffffff;
        border-radius: 50%;
        width: 2vw; height: 2vw;
        display: flex; align-items: center; justify-content: center;
        transition: 0.3s; color: #0A1A2F;
    }

    .real-btn:hover .real-btn-icon { background: #0A1A2F; color: #ffffff; }

    .real-btn-icon svg { width: 1.2vw; height: 1.2vw; stroke: currentColor; stroke-width: 2; transition: transform 0.3s; }
    .real-btn:hover .real-btn-icon svg { transform: rotate(45deg); }


    /* --- RESPONSIVE --- */
    @media (max-width: 1024px) {
        .real-gallery img { padding: 40px 20px; }
        .real-text-block { flex-direction: column; padding: 60px 20px; gap: 20px; }
        .real-text-block h2 { width: 100%; margin-bottom: 20px; font-size: 28px; }
        .real-text-block p { width: 100%; font-size: 16px; }
        
        .real-action { padding: 60px 20px; }
        .real-btn { width: 100%; font-size: 14px; padding: 12px 24px; justify-content: center; }
        .real-btn-icon { width: 30px; height: 30px; }
        .real-btn-icon svg { width: 18px; height: 18px; }
    }
</style>

<section class="real-gallery">
    
    <img src="<?php echo $images_url?><?php echo htmlspecialchars($img_banner_top); ?>" alt="Bannière projet">
    
    <div class="real-text-block">
        <h2><?php echo htmlspecialchars($titre_contexte); ?></h2>
        <p><?php echo nl2br(htmlspecialchars($texte_contexte)); ?></p>
    </div>
    
    <div class="real-text-block">
        <h2><?php echo htmlspecialchars($titre_objectifs); ?></h2>
        <p><?php echo nl2br(htmlspecialchars($texte_objectifs)); ?></p>
    </div>
    
    <img src="<?php echo $images_url?><?php echo htmlspecialchars($img_detail_1); ?>" alt="Détail 1">
    <img src="<?php echo $images_url?><?php echo htmlspecialchars($img_detail_2); ?>" alt="Détail 2">
    <img src="<?php echo $images_url?><?php echo htmlspecialchars($img_detail_3); ?>" alt="Détail 3">
    
    <div class="real-action">
         <a href="<?php echo $base_url?><?= htmlspecialchars($part1_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="real-btn">
            <div><?= htmlspecialchars($part1_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
            <div class="real-btn-icon">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </div>
         </a>
    </div>

</section>