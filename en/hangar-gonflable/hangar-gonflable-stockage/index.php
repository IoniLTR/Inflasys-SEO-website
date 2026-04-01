<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflatable Storage Hangars | Inflasys</title>
    <meta name="description" content="Design and manufacture of custom inflatable hangars: ventilated with permanent blowers or airtight. Quick-to-deploy solutions for storage, industry, and logistics.">
</head>

<body>
    <?php require_once '../../../components/header.php'; ?>

<?php
   $hero_title     = "Inflatable Storage Hangars";
   $hero_text      = "Inflasys designs and manufactures <strong>custom inflatable hangars</strong> for industrial, logistical, and operational uses. Our solutions are available in <strong>ventilated (permanent blower)</strong> or <strong>airtight (sealed inflation)</strong> versions, depending on your operational constraints.";
   
   $hero_btn_label = "Contact us";
   $hero_btn_link  = "contact/";
   $hero_img_src   = "uploads/hangar-gonflable/hangar_gonflable.webp";
   $hero_img_alt   = "Inflasys inflatable storage hangar";

   require_once $base_path . 'components/categories/sous-categories/part-1.php';
   ?>
<?php
   // TITRE DE LA SECTION
   $concevoir_product_title = "Why choose an inflatable hangar?";
   
   // PARAGRAPHE D'INTRO
   $concevoir_product_title_paragraphe = "Inflatable hangars allow for the <strong>quick creation of protected volumes</strong> without heavy infrastructure. They offer a flexible solution for storage, equipment protection, or setting up temporary spaces.";
   
   // IMAGE D'ILLUSTRATION
   $concevoir_product_img_src = "uploads/hangar-gonflable/hangar_gonflable_2.webp";
   $concevoir_product_img_alt = "Inflatable hangar deployment";

   // ÉTAPES (accordéon) - Contenu TECHNIQUE
   $concevoir_product_steps = [
       [
           "title"      => "Flexible Solution",
           "paragraphs" => [
               "They offer a flexible solution for <strong>storage</strong>, <strong>equipment protection</strong>, or setting up temporary spaces in various environments."
           ]
       ],
        [
           "title"      => "Precise Adaptation",
           "paragraphs" => [
               "Their design allows for <strong>precise adaptation to terrain constraints</strong> (wind, access, dimensions, operations)."
           ]
       ],
       [
           "title"      => "Effective Alternative",
           "paragraphs" => [
               "They are an <strong>effective alternative to rigid structures</strong> in many contexts, offering the same level of protection."
           ]
       ],
       [
           "title"      => "Quick Creation",
           "paragraphs" => [
               "Inflatable hangars allow for the <strong>quick creation of protected volumes</strong> without the need for heavy and permanent infrastructure."
           ]
       ],
   ];

   require_once $base_path . 'components/categories/sous-categories/part-2.php';
   ?>
<?php
   // TITRE + TEXTES INTRO
   $part2_title = "Two technologies adapted to your constraints";
   
   // ICI : Vous pouvez utiliser <strong>, <b>, <br> dans l'intro
   $part2_texts = [
       "<strong>Each inflatable hangar project requires a custom approach.</strong>",
       "We offer two main architectures: ventilated hangars with permanent blowers, or airtight structures with closed overpressure.<br><br>The choice depends on your constraints: duration of use, autonomy, environment, safety, and maintenance."
   ];

   // BLOCS (image + titre + texte)
   // ICI : Vous pouvez utiliser <strong>, <b>, <br> dans le texte des blocs
   $part2_blocks = [
       [
           "img" => "uploads/hangar-gonflable/hangar_gonflable_2.webp",
           "title" => "Ventilated hangars",
           "text"  => "<strong>Permanent blower</strong> ensuring the stability of the structure. A robust solution adapted to intensive use."
       ],
       [
           "img" => "uploads/hangar-gonflable/hangar_gonflable_3.webp",
           "title" => "Airtight hangars",
           "text"  => "<strong>Closed-circuit inflated</strong> structure, limiting energy dependence and simplifying operations."
       ],
       [
           "img" => "uploads/hangar-gonflable/hangar_gonflable_4.webp",
           "title" => "Custom design",
           "text"  => "Dimensions, access, openings, terrain constraints: each hangar is <strong>adapted to your needs</strong>."
       ],
       [
           "img" => "uploads/hangar-gonflable/hangar_gonflable_5.webp",
           "title" => "Quick deployment",
           "text"  => "Quick and dismantlable installation, suitable for <strong>temporary or evolving environments</strong>."
       ]
   ];

   require_once $base_path . 'components/categories/sous-categories/part-3.php';
   ?>
<?php /*
$cat_logos_title = "Application areas";
$cat_logos_list  = [
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"
];

   require_once $base_path . 'components/categories/sous-categories/part-4.php';
   */ ?>
<?php
   // TITRE DE LA SECTION
   $concevoir_product_2_title = "Our approach: study, design, manufacturing";
   
   // TEXTE DE GAUCHE (Remplace l'image)
   $concevoir_product_2_left_text = "Each hangar is designed to meet real-world usage. Our hangars can integrate specific openings, vehicle access, or adapted ventilation systems. <strong>They are designed to be robust, easy to operate, and compatible</strong> with industrial or logistical constraints.";

   // BOUTON CONTACT
   $concevoir_product_2_btn_label = "Contact us";
   $concevoir_product_2_btn_link  = "contact/";

   // ÉTAPES (accordéon)
   $concevoir_product_2_steps = [
       [
           "title"      => "1. Scoping the needs",
           "paragraphs" => [
               "<strong>Analysis of constraints:</strong> dimensions, environment, usage, duration. Choice between ventilated or airtight structure."
           ]
       ],
       [
           "title"      => "2. Design",
           "paragraphs" => [
               "Sizing, architecture, access, anchors, and materials. <strong>Validation of technical choices.</strong>"
           ]
       ],
       [
           "title"      => "3. Manufacturing & implementation",
           "paragraphs" => [
               "Custom manufacturing and deployment preparation. <strong>Quick installation and commissioning.</strong>"
             ]
       ],
        [
           "title"      => "4. Flexibility & scalability",
           "paragraphs" => [
               "Inflatable hangars can be moved, modified, or resized according to the evolution of your needs. <strong>They provide great operational flexibility.</strong>"
            ]
        ]
   ];

   require_once $base_path . 'components/categories/sous-categories/part-5.php';
   ?>
<?php /*
   // TITRE
   $part8_title = "Some of our projects";

   // IMAGE PATTERN
   $part8_pattern = "uploads/Picto/pattern-1.webp"; 

   // --- LOGIQUE DYNAMIQUE : RÉCUPÉRATION DES 2 DERNIERS PROJETS ---
   
   if (!function_exists('getRealisationDataForSubCat')) {
       function getRealisationDataForSubCat($filePath) {
           $content = file_get_contents($filePath);
           $data = ['title' => 'Project', 'img_path' => 'uploads/default.webp'];
           if (preg_match('/\$titre_projet\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) $data['title'] = $matches[1];
           if (preg_match('/\$image_mockup\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/s', $content, $matches)) $data['img_path'] = $matches[1];
           elseif (preg_match('/\$image_mockup\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) $data['img_path'] = $matches[1];
           return $data;
       }
   }

   $part8_projects = [];
   // ATTENTION : On remonte de 2 niveaux ici (../../)
   $target_dir = '/../../nos-realisations'; 
   
   $dirs = glob($target_dir . '/*', GLOB_ONLYDIR);
   if ($dirs) {
       $dirs = array_reverse($dirs); // Les plus récents en premier
       $count = 0;
       foreach ($dirs as $dir) {
           if ($count >= 2) break;
           $indexFile = $dir . '/index.php';
           if (file_exists($indexFile)) {
               $folderName = basename($dir);
               $data = getRealisationDataForSubCat($indexFile);
               $fullImgUrl = (strpos($data['img_path'], 'http') === 0) ? $data['img_path'] : base_url . $data['img_path'];

               $part8_projects[] = [
                   "href"  => base_url . "nos-realisations/" . $folderName . "/",
                   "img"   => $fullImgUrl,
                   "title" => $data['title']
               ];
               $count++;
           }
       }
   }

   // BOUTON TOUT VOIR
   $part8_all_link  = "nos-realisations/";
   $part8_all_label = "See all";

  require_once $base_path . 'components/categories/sous-categories/part-6.php';
*/ ?>
<?php
   // TITRE DE LA SECTION
   $accompagner_solution_title = "Why choose Inflasys?";
   
   $accompagner_solution_title_paragraphe = "We combine <strong>inflatable expertise, engineering, and a field approach</strong> to offer reliable and tailored solutions:";
   
   // BOUTON CTA
   $accompagner_solution_btn_label = "Contact us";
   $accompagner_solution_btn_link  = "contact/";

   // ÉTAPES
   $accompagner_solution_steps = [
       [
           "title"      => "Custom design",
           "paragraphs" => [
               "We adapt the dimensions, access points, and compartments to your <strong>specific operational constraints</strong>."
           ]
       ],
       [
           "title"      => "Two technologies: ventilated or airtight",
           "paragraphs" => [
               "Choice between ventilated structures for intensive use or <strong>airtight structures for maximum autonomy</strong>."
           ]
       ],
       [
           "title"      => "Quick deployment",
           "paragraphs" => [
               "Quick and dismantlable installation, suitable for <strong>temporary or evolving environments</strong>."
             ]
       ],
        [
           "title"      => "Adapted to industrial constraints",
           "paragraphs" => [
               "Our structures are robust, easy to operate, and compatible with <strong>demanding industrial or logistical contexts</strong>."
          ]
       ],
   ];

   require_once $base_path . 'components/categories/sous-categories/part-7.php';
?>
<?php /*
   // TITRE DU BLOC
   $part10_title = "Client feedback";

   // PATTERN (image décorative)
   $part10_pattern = "uploads/Picto/pattern-1.webp"; 

   // AVIS
   $avis = [
       [
           "name" => "Industry",
           "role" => "Storage",
           "text" => "A quick-to-implement solution perfectly suited to our needs.",
           "logo" => "uploads/Logo/clients/Chanel-logo.png"
       ],
       [
           "name" => "Logistics",
           "role" => "Operations",
           "text" => "Very flexible and simple to use in the field.",
           "logo" => "uploads/Logo/clients/Chanel-logo.png"
       ],
       [
           "name" => "Col. Mustard",
           "role" => "Army",
           "text" => "Hyper-realistic tactical decoys. Met expectations.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Sophie Martin",
           "role" => "Renault",
           "text" => "Maintenance facilitated by quick tents. Great.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Luc Besson",
           "role" => "EuropaCorp",
           "text" => "Custom inflatable structures for our sets. Perfect.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ]
   ];

   require_once $base_path . 'components/categories/sous-categories/part-8.php';
*/ ?>
<?php
// Variables par défaut
$part11_subtitle = "Contact us";
$part11_title    = "Let's discuss your inflatable hangar project";

$part11_text     = "Do you need a <strong>ventilated or airtight inflatable hangar</strong>? <strong>Contact us</strong> to define a solution adapted to your usage.";

   require_once $base_path . 'components/categories/sous-categories/part-9.php';
   ?>

<?php require_once '../../../components/footer.php'; ?>
</body>
</html>