<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflasys – Custom Inflatable Structures: Industry & Defense</title>
    <meta name="description" content="Inflasys designs custom industrial inflatable structures: acoustic walls, hangars, emergency PMA tents, stealth military inflatable decoys with infrared signatures.">
</head>

<body class="main-index">
  
  <?php 
  require_once '../components/header.php'; 
  ?>
  
<!-- ----------------- PART 1 ----------------- -->
<?php
$hero_title_line1 = "Engineering";
$hero_title_line2 = "and inflatable";
$hero_title_line3 = "enhanced systems";


$hero_services = [
    "Engineering",
    "Hangars",
    "Acoustics",
    "Targets & Decoys"
];


$hero_image_path = "uploads/ingenierie-hangar-acoustique-cibles-&-leurres.webp";
$hero_image_alt = "Inflasys industrial inflatable structure";

require_once $base_path . 'components/accueil/part-1.php'; ?>
<!-- ----------------- PART 2 ----------------- -->
<?php /*
$logos_section_title = "They trusted us";

// List of files (Make sure these files exist in the uploads folder)
$logos_list = [
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"
];
require_once $base_path . 'components/accueil/part-2.php';  */ ?>
<!-- ----------------- PART 3 ----------------- -->
<?php
$expertises = [
    [
        "title" => "Inflatable Engineering",
        "desc"  => "Inflasys designs custom industrial inflatable structures through a dedicated engineering office specialized in inflatable architecture. Each project integrates technical calculations, advanced design, and solutions tailored to complex industrial environments.",
        "img"   => "uploads/ingenierie-gonflable.webp"
    ],
    [
        "title" => "Industrial & Construction Inflatables",
        "desc"  => "We develop inflatable structures for construction sites, tunnels, maintenance areas, and logistics platforms. Inflatable hangars, shelters, and tents provide protection, safety, and rapid deployment in the field.",
        "img"   => "uploads/hangar-gonflable.webp"
    ],
    [
        "title" => "Acoustic Inflatable Solutions",
        "desc"  => "Inflasys offers inflatable acoustic solutions for reducing industrial and urban noise pollution. Inflatable noise barriers and acoustic enclosures effectively limit sound emissions.",
        "img"   => "uploads/acoustique-gonflable.webp"
    ],
    [
        "title" => "Military Inflatable Decoys",
        "desc"  => "For defense applications, Inflasys designs high-fidelity military inflatable decoys with realistic visual and thermal signatures. Decoy vehicles and infrastructures replicate real infrared signatures for training and concealment.",
        "img"   => "uploads/cibles-&-leurres-gonflable.webp"
    ]
];
 require_once $base_path . 'components/accueil/part-3.php'; ?>
<!-- ----------------- PART 4 ----------------- -->
<?php // require_once $base_path . 'components/accueil/part-4.php'; ?>
<!-- ----------------- PART 5 ----------------- -->
<?php // require_once $base_path . 'components/accueil/part-5.php'; ?>
<!-- ----------------- PART 6 ----------------- -->
<?php  /*
$reviews_title = "They enjoyed working with us";

// 10 Testimonials
$reviews = [
    ["name" => "Jean Dupont", 
    "job" => "Logistics Manager - Airbus", 
    "text" => "Airtechnic’s responsiveness for our temporary hangars was outstanding.", 
    "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"
    ],
    ["name" => "Marie Curie", "job" => "Project Manager - Vinci", "text" => "The inflatable acoustic wall reduced noise pollution by 20dB.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Col. Mustard", "job" => "French Army", "text" => "The realism of the inflatable decoys is impressive. Thermal and radar signatures are accurate.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Sophie Martin", "job" => "Plant Director - Renault", "text" => "Maintenance operations were simplified thanks to the decontamination tents. Excellent customer service.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Luc Besson", "job" => "Production - EuropaCorp", "text" => "Custom inflatable structures for our movie sets. Perfect result.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Paul Atreides", "job" => "Logistics - Arrakis", "text" => "Incredible resistance to sandstorms. Our base camps are secure.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Sarah Connor", "job" => "Security - Cyberdyne", "text" => "The decoys successfully diverted attention. Mission accomplished.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Tony Stark", "job" => "CEO - Stark Industries", "text" => "Impressive inflatable technology, deployed in record time.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Bruce Wayne", "job" => "CEO - Wayne Enterprises", "text" => "Discreet and efficient solutions for our temporary shelters. Highly recommended.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Ellen Ripley", "job" => "Officer - Nostromo", "text" => "The decontamination airlock saved us. Absolute reliability.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
];
require_once $base_path . 'components/accueil/part-6.php'; */ ?>

<style>
  /* =========================================================
   MICRO-ADJUSTMENTS (very small screens)
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
