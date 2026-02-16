<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflasys sous cat</title>
    <meta name="description" content="">
</head>

<body>
    <?php require_once '../../../components/header.php'; ?>

<!-- ----------------- PARTIE 1 ----------------- -->
   <?php
   $hero_title     = "Conception de Logo : Clé de l'Identité de Marque";
   $hero_text      = "Plus qu’une image, <strong>un logo est la représentation visuelle de votre marque</strong> qui <strong>communique instantanément vos valeurs et votre identité</strong> au public.";
   
   $hero_btn_label = 'Nous contacter';
   $hero_btn_link  = 'contact';
   $hero_img_src   = 'uploads/default.webp';
   $hero_img_alt   = 'Contrôleur Airtechnic en action';

   require_once $base_path . 'components/categories/sous-categories/part-1.php';
   ?>
<!-- ----------------- PARTIE 2 ----------------- -->
<?php
   // TITRE DE LA SECTION
   $concevoir_product_title = "Qu'est-ce que la conception de logo ?";
   
   // PARAGRAPHE D'INTRO
   $concevoir_product_title_paragraphe = "La conception de logo est le <strong>processus de création d'un symbole graphique qui représente une entreprise ou une marque</strong>. Il sert de <strong>signature visuelle</strong>, encapsulant l'essence de l'entreprise à travers des éléments tels que les <strong>formes</strong>, les <strong>couleurs</strong>, les <strong>typographies</strong> et les <strong>images</strong>.";
   // IMAGE D'ILLUSTRATION (ex: ingénieur sur logiciel CAD ou atelier)
   $concevoir_product_img_src = "uploads/default.webp";
   $concevoir_product_img_alt = "Modélisation 3D d'une structure industrielle";

   // ÉTAPES (accordéon) - Contenu TECHNIQUE
   $concevoir_product_steps = [
       [
           "title"      => "Identité de Marque Forte",
           "paragraphs" => [
               "Un logo efficace contribue à construire une <strong>identité de marque forte</strong>, permettant à votre entreprise d'être <strong>reconnue</strong> et <strong>distinguée </strong>par les consommateurs."
           ]
       ],
        [
           "title"      => "Communication Instantanée",
           "paragraphs" => [
               "<strong>Le logo transmet rapidement des informations clés sur votre entreprise</strong>, telles que le secteur d'activité, les valeurs et la personnalité de la marque."
           ]
       ],
       [
           "title"      => "Professionnalisme et Crédibilité",
           "paragraphs" => [
               "Un logo professionnel renforce la <strong>crédibilité</strong> de votre entreprise, <strong>inspirant confiance et fiabilité auprès des clients potentiels.</strong>"
           ]
       ],
       [
           "title"      => "Avantage Concurrentiel",
           "paragraphs" => [
               "Dans un marché saturé, <strong>un logo unique et mémorable procure un</strong> <strong>avantage concurrentiel</strong>, aidant à attirer et retenir l'attention des clients."
           ]
       ],
   ];

   require_once $base_path . 'components/categories/sous-categories/part-2.php';
   ?>
<!-- ----------------- PARTIE 3 ----------------- -->
<?php
   // TITRE + TEXTES INTRO
   $part2_title = "Étapes essentielles pour concevoir un logo";
   
   // ICI : Vous pouvez utiliser <strong>, <b>, <br> dans l'intro
   $part2_texts = [
       "Concevoir un logo impactant demande de suivre certaines étapes clés pour garantir qu’il soit à la fois unique et mémorable. De l’analyse de la marque et du public cible au choix des formes, couleurs et typographies, chaque décision influence la perception de l’identité visuelle. Un bon logo doit pouvoir résumer l’essence de l’entreprise en un coup d’œil.",
   ];

   // BLOCS (image + titre + texte)
   // ICI : Vous pouvez utiliser <strong>, <b>, <br> dans le texte des blocs
   $part2_blocks = [
       [
           "img" => "uploads/default.webp",
           "title" => "Recherche et Analyse",
           "text"  => "<strong>Comprendre l'identité de la marque</strong>, son <strong>public cible</strong> et les <strong>tendances du marché</strong> est crucial pour orienter le processus de conception."
       ],
       [
           "img" => "uploads/default.webp",
           "title" => "Brainstorming et Esquisses",
           "text"  => "Générer des <strong>idées créatives</strong> et <strong>réaliser des esquisses préliminaires pour explorer différents concepts</strong> et directions visuelles."
       ],
       [
           "img" => "uploads/default.webp",
           "title" => "Sélection des Éléments Visuels",
           "text"  => "Choisir les <strong>couleurs</strong>, les <strong>polices</strong> et les <strong>symboles </strong>qui reflètent le mieux la personnalité et les valeurs de la marque."
       ],
       [
           "img" => "uploads/default.webp",
           "title" => "Réalisation des Concepts",
           "text"  => "<strong>Créer des versions numériques des concepts les plus prometteurs</strong> pour une évaluation plus approfondie."
       ]
   ];

   require_once $base_path . 'components/categories/sous-categories/part-3.php';
   ?>
<!-- ----------------- PARTIE 4 ----------------- -->
   <?php
$cat_logos_title = "Ils nous ont fait confiance";
$cat_logos_list  = [
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"
];

   require_once $base_path . 'components/categories/sous-categories/part-4.php';
   ?>
<!-- ----------------- PARTIE 5 ----------------- -->
<?php
   // TITRE DE LA SECTION
   $concevoir_product_2_title = "Erreurs à éviter en conception de logo";
   
   // TEXTE DE GAUCHE (Remplace l'image)
   $concevoir_product_2_left_text = "En concevant un logo, éviter des erreurs comme un design trop complexe, des couleurs mal choisies ou une typographie peu lisible est crucial. <strong>Un bon logo doit rester simple, adapté aux différents supports</strong> et représenter fidèlement la marque.";

   // BOUTON CONTACT
   $concevoir_product_2_btn_label = "Nous contacter";
   $concevoir_product_2_btn_link  = "contact";

   // ÉTAPES (accordéon)
   $concevoir_product_2_steps = [
       [
           "title"      => "Complexité Excessive",
           "paragraphs" => [
               "Un logo trop complexe peut être difficile à reconnaître et à mémoriser<strong>. La simplicité est clé pour une identification rapide.</strong>"
           ]
       ],
       [
           "title"      => "Imitation de la Concurrence",
           "paragraphs" => [
               "Copier des éléments de logos existants peut <strong>nuire à votre originalité, et donc à la reconnaissance de votre marque, et risque de mener à des problèmes juridiques.</strong>"
           ]
       ],
       [
           "title"      => "Ignorer l'Évolutivité",
           "paragraphs" => [
               "Ne pas considérer comment le logo s'affiche à différentes tailles peut <strong>affecter sa lisibilité et son impact visuel.</strong>"
             ]
       ],
        [
           "title"      => "Mauvais Choix de Couleurs",
           "paragraphs" => [
               "Utiliser des couleurs inappropriées peut <strong>envoyer le mauvais message et ne pas</strong> <strong>résonner avec le public cible</strong>."
            ]
        ],
        [
           "title"      => "Négliger le Feedback",
           "paragraphs" => [
               "Éviter de solliciter des avis peut conduire à des erreurs non détectées. <strong>Le feedback est essentiel pour un design réussi.</strong>"
          ]
        ],
   ];

   require_once $base_path . 'components/categories/sous-categories/part-5.php';
   ?>
<!-- ----------------- PARTIE 6 ----------------- -->
<?php /*
   // TITRE
   $part8_title = "Quelques unes de nos réalisations";

   // IMAGE PATTERN
   $part8_pattern = "uploads/Picto/pattern-1.webp"; 

   // --- LOGIQUE DYNAMIQUE : RÉCUPÉRATION DES 2 DERNIERS PROJETS ---
   
   if (!function_exists('getRealisationDataForSubCat')) {
       function getRealisationDataForSubCat($filePath) {
           $content = file_get_contents($filePath);
           $data = ['title' => 'Projet', 'img_path' => 'uploads/default.webp'];
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
   $part8_all_link  = "nos-realisations";
   $part8_all_label = "Tout voir";

  require_once $base_path . 'components/categories/sous-categories/part-6.php';
*/ ?>
<!-- ----------------- PARTIE 7 ----------------- -->
<?php
   // TITRE DE LA SECTION
   $accompagner_solution_title = "Faites-vous accompagner dans la conception de votre logo pour des résultats optimaux";
   
   $accompagner_solution_title_paragraphe = "Travailler avec des professionnels du design offre plusieurs <strong>avantages</strong> majeurs :";
   
   // BOUTON CTA
   $accompagner_solution_btn_label = "Nous contacter";
   $accompagner_solution_btn_link  = "contact";

   // ÉTAPES
   $accompagner_solution_steps = [
       [
           "title"      => "Expertise Créative",
           "paragraphs" => [
               "Des designers expérimentés apportent une <strong>vision artistique et des compétences techniques pour créer un logo unique</strong>."
           ]
       ],
       [
           "title"      => "Compréhension Stratégique",
           "paragraphs" => [
               "Ils alignent le design sur vos <strong>objectifs commerciaux</strong> et votre <strong>stratégie de marque.</strong>"
           ]
       ],
       [
           "title"      => "Processus Collaboratif",
           "paragraphs" => [
               "Un accompagnement personnalisé favorise une <strong>communication ouverte, assurant que le résultat final répond à vos attentes.</strong>"
             ]
       ],
        [
           "title"      => "Support Continu",
           "paragraphs" => [
               "Les professionnels offrent souvent un <strong>suivi pour adapter le logo aux besoins futurs ou aux évolutions du marché.</strong>"
          ]
       ],
   ];

   require_once $base_path . 'components/categories/sous-categories/part-7.php';
?>
<!-- ----------------- PARTIE 8 ----------------- -->
 <?php
   // TITRE DU BLOC
   $part10_title = "Ils ont aimé travailler avec nous";

   // PATTERN (image décorative)
   $part10_pattern = "uploads/Picto/pattern-1.webp"; 

   // AVIS
   $avis = [
       [
           "name" => "Jean-Marc P.",
           "role" => "Directeur Technique - Grand Port Maritime",
           "text" => "L'automatisation de la pression nous a permis de sécuriser le stockage vrac face aux vents marins violents. Installation exemplaire.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Sylvie D.",
           "role" => "Resp. Maintenance - Site Seveso",
           "text" => "La redondance des systèmes Airtechnic répond parfaitement à nos exigences de sécurité pour le confinement de zone.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Marc L.",
           "role" => "Architecte Structure",
           "text" => "Une collaboration fluide avec le bureau d'études pour intégrer les contraintes esthétiques et techniques.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Thomas W.",
           "role" => "Chef de projet événementiel",
           "text" => "Rapidité de déploiement impressionnante et fiabilité totale du système de pilotage durant tout l'événement.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Cabinet Ingénierie X",
           "role" => "Partenaire BTP",
           "text" => "Nous prescrivons systématiquement leurs solutions pour les ouvrages temporaires de grande portée.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ]
   ];

   require_once $base_path . 'components/categories/sous-categories/part-8.php';
?>
<!-- ----------------- PARTIE 9 ----------------- -->
<?php
// Variables par défaut
$part11_subtitle = $part11_subtitle ?? "Contactez nos équipes";
$part11_title    = $part11_title ?? "Discutons de vos besoins";

$part11_text     = $part11_text ?? "Vous cherchez une <strong>agence web</strong> de confiance pour votre projet&nbsp;?<strong> Contactez-nous</strong> et découvrez comment nous pouvons vous aider.";

   require_once $base_path . 'components/categories/sous-categories/part-9.php';
   ?>

<?php require_once '../../../components/footer.php'; ?>
</body>
</html>