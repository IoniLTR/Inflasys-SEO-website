<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflasys realisation</title>
    <meta name="description" content="">
</head>

<body class="main-index">
    <?php require_once '../../../components/header.php'; ?>

<!-- ----------------- PARTIE 1 ----------------- -->
   <?php
   $titre_projet = "Armelle Crêperie";
   $categorie_projet = "Restauration";
   $image_mockup = "uploads/default.webp";
   $alt_image = "Projet Aquareal";
   
   require_once $base_path . 'components/nos-realisations/realisation/part-1.php';
   ?>
<!-- ----------------- PARTIE 2 ----------------- -->
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

   require_once $base_path . 'components/nos-realisations/realisation/part-2.php';
   ?>
<!-- ----------------- PARTIE 3 ----------------- -->
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

   require_once $base_path . 'components/nos-realisations/realisation/part-3.php';
   ?>
<!-- ----------------- PARTIE 4 ----------------- -->
  <?php
   // CONFIGURATION TEXTES
   $part11_kicker         = "Contactez nos équipes";
   $part11_title          = "Discutons de vos besoins";
   
   $part11_paragraph_html = "Vous cherchez <strong>une agence web</strong> de confiance pour votre projet ? <strong>Contactez-nous</strong> et découvrez comment nous pouvons vous aider.";

   require_once $base_path . 'components/nos-realisations/realisation/part-4.php';
   ?>

<?php require_once '../../../components/footer.php'; ?>
</body>
