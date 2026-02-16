<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoring temps réel & capteurs multi-mesures | Inflasys</title>

    <meta name="description" content="Solutions de monitoring temps réel pour structures gonflables : capteurs pression, température, GPS, inertiel, tension, différentiel, luminosité, acoustique. Acquisition multi-capteurs et aide à la décision.">

</head>

 

<body>

<?php require_once '../../../components/header.php'; ?>

 

<!-- ----------------- PARTIE 1 ----------------- -->

<?php

// HERO

$hero_title     = "Monitoring temps réel & capteurs multi-mesures";

$hero_text      = "Inflasys conçoit des solutions de <strong>monitoring temps réel</strong> pour structures gonflables et systèmes associés.

Nous intégrons des <strong>capteurs multiples</strong>, une <strong>acquisition de données</strong> fiable et des <strong>interfaces de supervision</strong> afin de faciliter la <strong>prise de décision</strong> (sécurité, exploitation, maintenance, performance).";

 

$hero_btn_label = "Nous contacter";

$hero_btn_link  = "contact";

$hero_img_src   = "uploads/ingenierie/mesure-temps-reel/mesure_temps_reel.webp";

$hero_img_alt   = "Monitoring temps réel multi-capteurs pour structures gonflables";

 

require_once $base_path . 'components/categories/sous-categories/part-1.php';

?>

 

<!-- ----------------- PARTIE 2 ----------------- -->

<?php

// DEFINITION

$concevoir_product_title = "Des systèmes de mesure sur mesure, orientés usage terrain";

$concevoir_product_title_paragraphe = "Un bon monitoring ne se limite pas à collecter des mesures : il doit fournir une <strong>lecture claire</strong> et des <strong>indicateurs actionnables</strong>.

Nous concevons des architectures <strong>multi-capteurs</strong> adaptées à vos contraintes (autonomie, environnement, précision, maintenance) et aux objectifs : <strong>sécurité</strong>, <strong>performance</strong>, <strong>qualité</strong> et <strong>traçabilité</strong>.";

 

$concevoir_product_img_src = "uploads/ingenierie/mesure-temps-reel/mesure_temps_reel_2.webp";

$concevoir_product_img_alt = "Schéma : capteurs, acquisition, supervision et indicateurs";

 

// ACCORDÉON

$concevoir_product_steps = [

    [

        "title"      => "Acquisition multi-capteurs",

        "paragraphs" => [

            "Collecte synchronisée (ou quasi synchronisée) de plusieurs grandeurs, avec horodatage et traçabilité."

        ]

    ],

    [

        "title"      => "Supervision & alertes",

        "paragraphs" => [

            "Tableaux de bord, seuils, alertes et historiques pour piloter l’exploitation et la maintenance."

        ]

    ],

    [

        "title"      => "Indicateurs pour la décision",

        "paragraphs" => [

            "Transformation des mesures en indicateurs simples : état, tendance, anomalies, événements."

        ]

    ],

    [

        "title"      => "Intégration sur mesure",

        "paragraphs" => [

            "Architecture adaptable : capteurs, boîtiers, alimentation, communications et interface opérateur."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-2.php';

?>

 

<!-- ----------------- PARTIE 3 ----------------- -->

<?php

// BLOCS

$part2_title = "Du capteur à la décision : une chaîne complète";

$part2_texts = [

    "Nous couvrons l’ensemble de la chaîne : <strong>capteurs</strong> → <strong>acquisition</strong> → <strong>exploitation</strong> → <strong>prise de décision</strong>.

Le système est conçu pour rester <strong>robuste</strong>, <strong>lisible</strong> et exploitable sur le terrain."

];

 

$part2_blocks = [

    [

        "img"   => "uploads/ingenierie/mesure-temps-reel/mesure_temps_reel_3.webp",

        "title" => "Capteurs & instrumentation",

        "text"  => "Sélection, implantation et intégration des capteurs selon la structure et l’usage."

    ],

    [

        "img"   => "uploads/ingenierie/mesure-temps-reel/mesure_temps_reel_4.webp",

        "title" => "Acquisition & synchronisation",

        "text"  => "Horodatage, stockage, filtrage et exports pour exploitation et traçabilité."

    ],

    [

        "img"   => "uploads/ingenierie/mesure-temps-reel/mesure_temps_reel_5.webp",

        "title" => "Supervision",

        "text"  => "Interface opérateur : états, tendances, alertes et historiques."

    ],

    [

        "img"   => "uploads/ingenierie/mesure-temps-reel/mesure_temps_reel_6.webp",

        "title" => "Indicateurs & alertes",

        "text"  => "Seuils, détection d’événements et indicateurs actionnables pour la décision."

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-3.php';

?>

 

<!-- ----------------- PARTIE 4 ----------------- -->

<?php /*

// LOGOS (neutre)

$cat_logos_title = "Capteurs typiquement intégrés (selon projet)";

$cat_logos_list  = [

    "uploads/Logo/clients/2630401.svg",

    "uploads/Logo/clients/2630401.svg",

    "uploads/Logo/clients/2630401.svg",

    "uploads/Logo/clients/2630401.svg",

    "uploads/Logo/clients/2630401.svg",

    "uploads/Logo/clients/2630401.svg",

];

 

require_once $base_path . 'components/categories/sous-categories/part-4.php';

*/ ?>

 

<!-- ----------------- PARTIE 5 ----------------- -->

<?php

// DETAILS CAPTEURS

$concevoir_product_2_title = "Exemples de mesures disponibles (selon configuration)";

$concevoir_product_2_left_text = "Nous intégrons des capteurs adaptés à la structure et aux objectifs. Les exemples ci-dessous couvrent la plupart des besoins courants : contrôle de pression, gestion thermique, stabilité, état mécanique, environnement, et performance acoustique.

Les architectures sont modulaires : vous choisissez uniquement ce qui est utile.";

 

$concevoir_product_2_btn_label = "Définir votre besoin";

$concevoir_product_2_btn_link  = "contact";

 

$concevoir_product_2_steps = [

    [

        "title"      => "Pression & pression différentielle",

        "paragraphs" => [

            "Pression des boudins, suivi de consigne, et capteurs de pression différentielle pour surveiller des écarts ou des flux."

        ]

    ],

    [

        "title"      => "Températures (boudins / volumes)",

        "paragraphs" => [

            "Température interne des boudins et température d’un volume (ex : hangar) pour corrélation pression/comportement et confort d’exploitation."

        ]

    ],

    [

        "title"      => "Position & mouvement",

        "paragraphs" => [

            "GPS pour localisation/traçabilité, accéléromètre et centrale inertielle pour chocs, vibrations, dérive et événements."

        ]

    ],

    [

        "title"      => "Efforts & tension",

        "paragraphs" => [

            "Mesure de tension sur sangles/ancrages et points critiques pour suivre les efforts en exploitation."

        ]

    ],

    [

        "title"      => "Environnement (lumière / acoustique)",

        "paragraphs" => [

            "Capteur de luminosité pour corrélations d’usage, capteur acoustique pour mesures et suivi d’atténuation selon protocole."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-5.php';

?>

 

<!-- ----------------- PARTIE 6 ----------------- -->

<?php /*

// RÉALISATIONS (si tu as des pages projet, ce bloc peut fonctionner tel quel)

$part8_title   = "Études & projets récents";

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

$target_dir = '/../../nos-realisations';

 

$dirs = glob($target_dir . '/*', GLOB_ONLYDIR);

if ($dirs) {

    $dirs = array_reverse($dirs);

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

 

$part8_all_link  = "nos-realisations";

$part8_all_label = "Tout voir";

 

require_once $base_path . 'components/categories/sous-categories/part-6.php';

 */ ?>

 

<!-- ----------------- PARTIE 7 ----------------- -->

<?php

// PROCESS

$accompagner_solution_title = "Notre méthode : capteurs, intégration, supervision";

$accompagner_solution_title_paragraphe = "Nous cadrons d’abord les objectifs (sécurité, exploitation, performance), puis définissons un plan de mesure, intégrons les capteurs et livrons une supervision claire avec indicateurs et alertes.";

 

$accompagner_solution_btn_label = "Parler à un expert";

$accompagner_solution_btn_link  = "contact";

 

$accompagner_solution_steps = [

    [

        "title"      => "1) Cadrage & architecture",

        "paragraphs" => [

            "Objectifs, contraintes terrain, autonomie, environnement, besoins de traçabilité et seuils."

        ]

    ],

    [

        "title"      => "2) Intégration multi-capteurs",

        "paragraphs" => [

            "Choix capteurs, implantation, acquisition, tests et calibration si nécessaire."

        ]

    ],

    [

        "title"      => "3) Supervision & exploitation",

        "paragraphs" => [

            "Tableaux de bord, alertes, exports, rapports et recommandations d’usage."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-7.php';

?>

 

<!-- ----------------- PARTIE 8 ----------------- -->

<?php /*

// USE CASES

$part10_title   = "Usages typiques";

$part10_pattern = "uploads/Picto/pattern-1.webp";

 

$avis = [

    [

        "name" => "Sécurité d’exploitation",

        "role" => "Pression / efforts",

        "text" => "Surveiller pression et tensions pour sécuriser la tenue, anticiper les écarts et déclencher des alertes.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

    [

        "name" => "Performance",

        "role" => "Thermique / environnement",

        "text" => "Suivre températures et conditions d’environnement pour optimiser confort, performance et procédures.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

    [

        "name" => "Traçabilité",

        "role" => "Position / événements",

        "text" => "Tracer localisation et événements (chocs, dérive) pour analyse, maintenance et retour d’expérience.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-8.php';

 */ ?>

 

<!-- ----------------- PARTIE 9 ----------------- -->

<?php

$part11_subtitle = $part11_subtitle ?? "Contact";

$part11_title    = $part11_title ?? "Construisons votre système de monitoring";

$part11_text     = $part11_text ?? "Vous avez un besoin de <strong>monitoring temps réel</strong> avec <strong>capteurs multiples</strong> (pression, température, GPS, inertiel, tension, acoustique, etc.) ?

<strong>Contactez-nous</strong> : nous cadrons le périmètre, les capteurs utiles, l’architecture et les livrables (supervision, alertes, rapports).";

 

require_once $base_path . 'components/categories/sous-categories/part-9.php';

?>

 

<?php require_once '../../../components/footer.php'; ?>

</body>

</html>