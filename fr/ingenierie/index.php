<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ingénierie & Systèmes | Inflasys</title>

    <meta name="description" content="Ingénierie & systèmes Inflasys : bureau d’études (ingénierie, acquisition & data), notes de calcul (vent/stabilité) avec instrumentation, développements spécifiques (drones & interfaces) et monitoring temps réel multi-capteurs.">

</head>

 

<body>

    <?php require_once '../../components/header.php'; ?>

 

<!-- ----------------- PARTIE 1 ----------------- -->

   <?php

   $cat_hero_title     = $cat_hero_title ?? "Ingénierie & Systèmes";

   $cat_hero_text      = $cat_hero_text ?? "Inflasys combine structures gonflables, ingénierie et systèmes embarqués pour livrer des solutions documentées, mesurables et exploitables. Cette page présente nos 4 domaines : Bureau d’études & data, notes de calcul & vent, développements spécifiques et monitoring temps réel multi-capteurs.";

   $cat_hero_btn_label = $cat_hero_btn_label ?? "Nous contacter";

   $cat_hero_btn_link  = $cat_hero_btn_link ??  "contact/";

   $cat_hero_img_src   = $cat_hero_img_src ?? "uploads/ingenierie/ingenierie_gonflable.webp";

   $cat_hero_img_alt   = $cat_hero_img_alt ?? "Ingénierie et systèmes Inflasys : calculs, instrumentation, monitoring, développements";

   require_once $base_path . 'components/categories/part-1.php';

   ?>

 

<!-- ----------------- PARTIE 2 ----------------- -->

<?php

$part2_title = $part2_title ?? "4 domaines complémentaires, une même logique : concevoir, mesurer, décider";

 

$part2_texts = $part2_texts ?? [

    "<strong>Nos prestations sont construites pour réduire l’incertitude et accélérer la décision.</strong>",

    "Selon vos objectifs (validation technique, optimisation, exploitation, développement sur mesure), nous activons un ou plusieurs domaines pour produire des livrables clairs : notes de calcul, plans de mesure, supervision, interfaces et rapports.",

    "Cette approche est compatible avec des contextes <strong>industriels</strong>, <strong>institutionnels</strong> et <strong>dual-use</strong>."

];

 

$part2_blocks = $part2_blocks ?? [

    [

        "img"  => "uploads/ingenierie/ingenierie_gonflable_2.webp",

        "title"=> "1) Bureau d’études – Ingénierie, acquisition & data",

        "text" => "<strong>Conception, instrumentation, acquisition et analyse</strong> pour valider des hypothèses, documenter un comportement réel et accélérer les itérations."

    ],

    [

        "img"  => "uploads/ingenierie/ingenierie_gonflable_3.webp",

        "title"=> "2) Notes de calcul & résistance au vent",

        "text" => "<strong>Vent, stabilité, ancrages, marges</strong> : notes de calcul dédiées, complétées si besoin par <strong>instrumentation embarquée</strong> (traction, déplacement, pression)."

    ],

    [

        "img"  => "uploads/ingenierie/ingenierie_gonflable_4.webp",

        "title"=> "3) Développements spécifiques – Drones & interfaces",

        "text" => "<strong>Solutions sur mesure</strong> pour drones terrestres et marins, interfaces opérateur et applications dédiées, adaptées aux contraintes terrain."

    ],

    [

        "img"  => "uploads/ingenierie/ingenierie_gonflable_5.webp",

        "title"=> "4) Monitoring temps réel & multi-capteurs",

        "text" => "Supervision <strong>temps réel</strong> multi-capteurs (pression, température, GPS, inertiel, tension, acoustique…) avec <strong>indicateurs</strong> et <strong>alertes</strong> pour la prise de décision."

    ],

];

 

   require_once $base_path . 'components/categories/part-2.php';

   ?>

 

<!-- ----------------- PARTIE 3 ----------------- -->

   <?php /*

$cat_logos_title = $cat_logos_title ?? "Environnements & usages couverts";

$cat_logos_list  = $cat_logos_list ?? [

    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",

    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"

];

   require_once $base_path . 'components/categories/part-3.php';

    */ ?>

 

<!-- ----------------- PARTIE 4 ----------------- -->

   <?php

$part4_title = $part4_title ?? "Pourquoi structurer un projet par la mesure et la preuve ?";

$part4_btn_label = $part4_btn_label ?? "Nous contacter";

$part4_btn_link  = $part4_btn_link ?? "contact/";

$part4_paragraphs = $part4_paragraphs ?? [

    "Sur des systèmes réels (structures gonflables, systèmes embarqués, plateformes mobiles), <strong>la décision technique doit être justifiée</strong> : par le calcul, par l’essai ou par l’observation en exploitation.",

    "Notre approche vise à produire des <strong>livrables exploitables</strong> : notes de calcul, protocoles, rapports d’essais, tableaux de bord, historiques, et recommandations opérationnelles.",

    "En combinant <strong>bureau d’études</strong>, <strong>instrumentation</strong>, <strong>monitoring</strong> et <strong>développement logiciel</strong>, nous réduisons les itérations inutiles et sécurisons les choix (architecture, ancrages, limites d’exploitation, maintenance).",

    "Résultat : des solutions <strong>plus robustes</strong>, <strong>mieux documentées</strong> et <strong>plus simples à déployer</strong> dans la durée."

];

   require_once $base_path . 'components/categories/part-4.php';

   ?>

 

<!-- ----------------- PARTIE 5 ----------------- -->

   <?php

$work_title = $work_title ?? "Notre méthodologie technique (de l’exigence à la validation)";

$work_img_src = $work_img_src ?? "uploads/ingenierie/ingenierie_gonflable_6.webp";

$work_img_alt = $work_img_alt ?? "Méthodologie d’ingénierie et validation";

 

$work_steps = $work_steps ?? [

    [

        "number" => "1",

        "title" => "Cadrage",

        "paragraphs" => [

            "Définition des objectifs, contraintes terrain, environnement, niveau de preuve attendu et livrables.",

            "Identification des variables critiques : vent, pression, température, efforts, mouvements, disponibilité, sécurité d’exploitation."

        ]

    ],

    [

        "number" => "2",

        "title" => "Conception & dimensionnement",

        "paragraphs" => [

            "Production des notes de calcul et choix d’architecture (capteurs, acquisition, interfaces, alimentation, communications).",

            "Définition des seuils, indicateurs et critères d’acceptation."

        ]

    ],

    [

        "number" => "3",

        "title" => "Instrumentation & validation",

        "paragraphs" => [

            "Mise en place des capteurs (traction, déplacement, pression, températures, inertiel, acoustique, etc.) et acquisition horodatée.",

            "Analyse des mesures, synthèse actionnable, recommandations et itérations si nécessaire."

        ]

    ],

];

   require_once $base_path . 'components/categories/part-5.php';

   ?>

 

<!-- ----------------- PARTIE 6 ----------------- -->

   <?php

$part6_title = $part6_title ?? "Compétences mobilisées selon le besoin";

$part6_intro_strong = $part6_intro_strong ?? "Un projet « engineering & systems » nécessite de croiser calcul, instrumentation, logiciel et usage terrain pour produire une solution réellement exploitable.";

$part6_paragraphs = $part6_paragraphs ?? [

    "Nos interventions combinent <strong>ingénierie structurelle</strong> (hypothèses, cas de charge, ancrages, marges), <strong>capteurs & acquisition</strong> (plan de mesure, intégration, traçabilité) et <strong>analyse de données</strong> (indicateurs, anomalies, recommandations).",

    "Selon le périmètre, nous réalisons aussi des <strong>interfaces opérateur</strong> et des <strong>applications dédiées</strong> pour la supervision, l’exploitation et l’aide à la décision."

];

   require_once $base_path . 'components/categories/part-6.php';

   ?>

 

<!-- ----------------- PARTIE 7 ----------------- -->

   <?php

$part7_title = $part7_title ?? "Délais & périmètres : une approche modulaire";

$part7_intro_strong = $part7_intro_strong ?? "Le périmètre dépend du niveau de preuve recherché : calcul seul, validation instrumentée, ou monitoring temps réel avec supervision.";

$part7_paragraphs = $part7_paragraphs ?? [

    "Un besoin peut être couvert par une <strong>note de calcul</strong> (vent/stabilité/ancrages) ou par une chaîne complète incluant <strong>instrumentation</strong>, <strong>acquisition</strong>, <strong>analyse</strong> et <strong>supervision</strong>.",

    "Les architectures sont conçues pour être <strong>évolutives</strong> : ajout de capteurs, adaptation des seuils, nouveaux tableaux de bord, intégration d’une interface ou d’une application métier.",

    "<strong>Nous cadrons systématiquement le périmètre et les livrables</strong> avant réalisation, afin de garantir une trajectoire claire (contenu, délais, critères d’acceptation)."

];

   require_once $base_path . 'components/categories/part-7.php';

   ?>

 

<!-- ----------------- PARTIE 8 ----------------- -->

<?php /*
$part8_title = $part8_title ?? "Quelques unes de nos réalisations";
$part8_pattern = $part8_pattern ?? $base_url . "uploads/Picto/pattern-1.webp";

// --- LOGIQUE DYNAMIQUE : RÉCUPÉRATION DES 2 DERNIERS PROJETS ---

if (!function_exists('getRealisationDataForCat')) {
   function getRealisationDataForCat($filePath) {
       $content = file_get_contents($filePath);
       $data = ['title' => 'Projet', 'img_path' => 'uploads/default.webp'];
       if (preg_match('/\$titre_projet\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) $data['title'] = $matches[1];
       if (preg_match('/\$image_mockup\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/s', $content, $matches)) $data['img_path'] = $matches[1];
       elseif (preg_match('/\$image_mockup\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) $data['img_path'] = $matches[1];
       return $data;
   }
}

$part8_projects = [];
$target_dir = $base_path . 'nos-realisations'; // Chemin relatif
$dirs = glob($target_dir . '/*', GLOB_ONLYDIR);
$dirs = array_reverse($dirs); // Les plus récents en premier

$count = 0;
foreach ($dirs as $dir) {
   if ($count >= 2) break;
   $indexFile = $dir . '/index.php';
   if (file_exists($indexFile)) {
       $folderName = basename($dir);
       $data = getRealisationDataForCat($indexFile);
       $fullImgUrl = (strpos($data['img_path'], 'http') === 0) ? $data['img_path'] : $base_url . $data['img_path'];

       $part8_projects[] = [
           "href"  => $base_url . "nos-realisations/" . $folderName . "/",
           "img"   => $fullImgUrl,
           "title" => $data['title']
       ];
       $count++;
   }
}

$part8_all_link = $part8_all_link ?? "nos-realisations/";
require_once $base_path . 'components/categories/part-8.php';
*/ ?>

 

<!-- ----------------- PARTIE 9 ----------------- -->

   <?php

$why_title = $why_title ?? "Pourquoi choisir Inflasys pour ces sujets ?";

$why_paragraph = $why_paragraph ?? "Parce que nous traitons ces projets comme des systèmes complets : <strong>calcul + mesures + exploitation</strong>. L’objectif est de livrer une solution qui fonctionne sur le terrain, et qui se pilote dans la durée.";

$why_btn_label = $why_btn_label ?? "Nous contacter";

$why_btn_link  = $why_btn_link ?? "contact/";

 

$why_cards = $why_cards ?? [

    ["text" => "Approche structurée : cadrage, livrables, critères d’acceptation", "img" => "uploads/Picto/pattern-1.webp"],

    ["text" => "Mesures multi-capteurs et acquisition traçable", "img" => "uploads/Picto/pattern-1.webp"],

    ["text" => "Notes de calcul : vent, stabilité, ancrages, marges", "img" => "uploads/Picto/pattern-1.webp"],

    ["text" => "Supervision & alertes pour la prise de décision", "img" => "uploads/Picto/pattern-1.webp"],

    ["text" => "Développements spécifiques : interfaces & applications dédiées", "img" => "uploads/Picto/pattern-1.webp"],

];

   require_once $base_path . 'components/categories/part-9.php';

   ?>

 

<!-- ----------------- PARTIE 10 ----------------- -->

<?php /*
$cat_reviews_title = $cat_reviews_title ?? "Ils ont aimé travailler avec nous";

// EXACTEMENT 5 TÉMOIGNAGES
$cat_reviews = [
    ["name" => "Jean Dupont", "job" => "Airbus", "text" => "Réactivité exemplaire pour nos hangars temporaires.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Marie Curie", "job" => "Vinci", "text" => "Le mur acoustique a réduit le bruit de 20dB. Bluffant.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Col. Moutarde", "job" => "Armée", "text" => "Leurres tactiques hyper réalistes. Conformes aux attentes.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Sophie Martin", "job" => "Renault", "text" => "Maintenance facilitée grâce aux tentes rapides. Top.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Luc Besson", "job" => "EuropaCorp", "text" => "Structures gonflables sur mesure pour nos décors. Parfait.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"]
];
   require_once $base_path . 'components/categories/part-10.php';
 */ ?>

<!-- ----------------- PARTIE 11 ----------------- -->

<?php

$part11_subtitle = $part11_subtitle ?? "Contactez nos équipes";

$part11_title    = $part11_title ?? "Discutons de votre besoin";

$part11_text     = $part11_text ?? "Vous avez un projet nécessitant un <strong>bureau d’études</strong>, une <strong>note de calcul</strong>, une <strong>validation instrumentée</strong>, un <strong>monitoring temps réel</strong> ou un <strong>développement spécifique</strong> ? <strong>Contactez-nous</strong> : nous cadrons le périmètre et proposons une trajectoire réaliste.";

 

   require_once $base_path . 'components/categories/part-11.php';

?>

 

<?php require_once '../../components/footer.php'; ?>

</body>

</html>