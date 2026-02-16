<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflasys – Structures gonflables sur mesure : Industrie & Défense</title>
    <meta name="description" content="Inflasys conçoit des structures gonflables industrielles sur mesure : murs acoustiques, hangars, tentes de secours PMA, leurres militaires furtifs infrarouge.">
</head>

<body class="main-index">
  
  <?php 
  require_once '../components/header.php'; 
  ?>
  
<!-- ----------------- PARTIE 1 ----------------- -->
<?php
$hero_title_line1 = "Ingéniérie";
$hero_title_line2 = "et gonflables";
$hero_title_line3 = "augmentés";


$hero_services = [
    "Ingénierie",
    "Hangar",
    "Acoustique",
    "Cibles & Leurres"
];


$hero_image_path = "uploads/ingenierie-hangar-acoustique-cibles-&-leurres.webp";
$hero_image_alt = "Structure gonflable industrielle Inflasys";

require_once $base_path . 'components/accueil/part-1.php'; ?>
<!-- ----------------- PARTIE 2 ----------------- -->
<?php /*
$logos_section_title = "Ils nous ont fait confiance";

// Liste des fichiers (Assure-toi que ces fichiers existent bien dans le dossier uploads)
$logos_list = [
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"
];
require_once $base_path . 'components/accueil/part-2.php'; */ ?>
<!-- ----------------- PARTIE 3 ----------------- -->
<?php
$expertises = [
    [
        "title" => "Ingénierie gonflables",
        "desc"  => "Inflasys conçoit des structures gonflables industrielles sur mesure grâce à un bureau d’études spécialisé en architecture gonflable. Chaque projet intègre calculs techniques, conception avancée et solutions adaptées aux environnements industriels complexes.",
        "img"   => "uploads/ingenierie-gonflable.webp"
    ],
    [
        "title" => "Gonflables industrielles et chantiers",
        "desc"  => "Nous développons des structures gonflables pour les chantiers, tunnels, zones de maintenance et sites logistiques. Hangars, abris et tentes gonflables assurent protection, sécurité et rapidité de déploiement sur le terrain.",
        "img"   => "uploads/hangar-gonflable.webp"
    ],
    [
        "title" => "Gonflables acoustiques",
        "desc"  => "Inflasys propose des solutions gonflables acoustiques pour la réduction des nuisances sonores industrielles et urbaines. Murs anti-bruit et capotages gonflables permettent de limiter efficacement les émissions sonores.",
        "img"   => "uploads/acoustique-gonflable.webp"
    ],
    [
        "title" => "Leurres gonflables militaires",
        "desc"  => "Pour la défense, Inflasys conçoit des leurres gonflables militaires à haute fidélité visuelle et thermique. Chars et infrastructures factices reproduisent les signatures infrarouges réelles pour l’entraînement et la dissimulation.",
        "img"   => "uploads/cibles-&-leurres-gonflable.webp"
    ]
];
 require_once $base_path . 'components/accueil/part-3.php'; ?>
<!-- ----------------- PARTIE 4 ----------------- -->
<?php // require_once $base_path . 'components/accueil/part-4.php'; ?>
<!-- ----------------- PARTIE 5 ----------------- -->
<?php // require_once $base_path . 'components/accueil/part-5.php'; ?>
<!-- ----------------- PARTIE 6 ----------------- -->
<?php /*
$reviews_title = "Ils ont aimé travailler avec nous";

// 10 Témoignages
$reviews = [
    ["name" => "Jean Dupont", 
    "job" => "Resp. Logistique - Airbus", 
    "text" => "La réactivité d'Airtechnic pour nos hangars temporaires a été exemplaire.", 
    "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"
    ],
    ["name" => "Marie Curie", "job" => "Chef de Projet - Vinci", "text" => "Le mur acoustique gonflable a permis de réduire les nuisances sonores de 20dB.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Col. Moutarde", "job" => "Armée de Terre", "text" => "Le réalisme des leurres gonflables est impressionnant. Thermique et radar conformes.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Sophie Martin", "job" => "Dir. Usine - Renault", "text" => "Maintenance facilitée grâce aux tentes de décontamination. Service client au top.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Luc Besson", "job" => "Prod - EuropaCorp", "text" => "Structures gonflables sur mesure pour nos décors de cinéma. Rendu parfait.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Paul Atréides", "job" => "Logistique - Arrakis", "text" => "Résistance aux vents de sable incroyable. Nos camps de base sont sécurisés.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Sarah Connor", "job" => "Sécurité - Cyberdyne", "text" => "Les leurres ont parfaitement détourné l'attention. Mission accomplie.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Tony Stark", "job" => "CEO - Stark Ind.", "text" => "Technologie gonflable impressionnante, déploiement en un temps record.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Bruce Wayne", "job" => "PDG - Wayne Ent.", "text" => "Discrétion et efficacité pour nos abris temporaires. Je recommande.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Ellen Ripley", "job" => "Officier - Nostromo", "text" => "Le sas de décontamination nous a sauvé la mise. Fiabilité absolue.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
];
require_once $base_path . 'components/accueil/part-6.php'; */?>

<style>
  /* =========================================================
   MICRO-AJUSTEMENTS (très petits écrans)
   ========================================================= */
@media (max-width: 480px){
  .tout-voir-button{
    padding: 6.6vw;
  }
}
</style>

<?php require_once $base_path . 'components/footer.php'; ?>

</body>
</html>