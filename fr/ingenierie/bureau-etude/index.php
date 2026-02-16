<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bureau d’études – Ingénierie, acquisition de données & notes de calcul | Inflasys</title>

    <meta name="description" content="Bureau d’études Inflasys : ingénierie des structures gonflables, notes de calcul, instrumentation et acquisition de données, analyse et exploitation des mesures pour validation, optimisation et suivi.">

</head>

 

<body>

<?php require_once '../../../components/header.php'; ?>

 

<!-- ----------------- PARTIE 1 ----------------- -->

<?php

// HERO

$hero_title     = "Bureau d’études : ingénierie & data pour structures gonflables";

$hero_text      = "Inflasys propose un <strong>bureau d’études</strong> dédié aux structures gonflables : <strong>conception</strong>, <strong>dimensionnement</strong> et <strong>validation par la mesure</strong>.

Nous intervenons sur la <strong>réalisation de notes de calcul</strong>, la <strong>mise en place de systèmes d’acquisition de données</strong> et l’<strong>analyse des résultats</strong> pour sécuriser vos projets et optimiser les performances.";

 

$hero_btn_label = "Nous contacter";

$hero_btn_link  = "contact";

$hero_img_src   = "uploads/ingenierie/bureau-etude/bureau_etude.webp";

$hero_img_alt   = "Bureau d’études Inflasys – ingénierie et analyse de données";

 

require_once $base_path . 'components/categories/sous-categories/part-1.php';

?>

 

<!-- ----------------- PARTIE 2 ----------------- -->

<?php

// SECTION "PRODUIT / DÉFINITION"

$concevoir_product_title = "Que fait notre bureau d’études ?";

$concevoir_product_title_paragraphe = "Notre bureau d’études accompagne la <strong>conception et la validation</strong> des structures gonflables et systèmes associés.

Nous produisons des <strong>notes de calcul</strong>, définissons des <strong>plans d’essais</strong>, instrumentons si nécessaire (pression, efforts, températures, déplacements, vibrations), puis réalisons une <strong>analyse de données</strong> pour confirmer les hypothèses et améliorer le design.";

 

$concevoir_product_img_src = "uploads/ingenierie/bureau-etude/bureau_etude_2.webp";

$concevoir_product_img_alt = "Schéma : calcul, instrumentation, acquisition et analyse de données";

 

// ÉTAPES (accordéon)

$concevoir_product_steps = [

    [

        "title"      => "Notes de calcul & dimensionnement",

        "paragraphs" => [

            "Vérifications de stabilité, pressions internes, sollicitations, assemblages, et marges de sécurité selon le contexte d’utilisation."

        ]

    ],

    [

        "title"      => "Instrumentation & acquisition de données",

        "paragraphs" => [

            "Définition du protocole de mesure, choix des capteurs, intégration sur structure, collecte et traçabilité des données."

        ]

    ],

    [

        "title"      => "Analyse & exploitation des mesures",

        "paragraphs" => [

            "Nettoyage des données, indicateurs clés, détection d’anomalies, corrélation avec les hypothèses et recommandations."

        ]

    ],

    [

        "title"      => "Optimisation & itérations",

        "paragraphs" => [

            "Amélioration des conceptions par boucles courtes : correction, optimisation de masse, robustesse, répétabilité et qualité."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-2.php';

?>

 

<!-- ----------------- PARTIE 3 ----------------- -->

<?php

// BLOCS (image + titre + texte)

$part2_title = "Une approche complète : calcul + mesure + décision";

 

$part2_texts = [

    "Pour fiabiliser une structure gonflable, il ne suffit pas de concevoir : il faut <strong>dimensionner</strong>, <strong>mesurer</strong> et <strong>valider</strong>.

    Notre approche combine des livrables d’ingénierie et des mesures terrain afin de réduire les risques, accélérer les itérations et documenter la conformité."

];

 

$part2_blocks = [

    [

        "img"   => "uploads/ingenierie/bureau-etude/bureau_etude_3.webp",

        "title" => "Calcul & modélisation",

        "text"  => "Hypothèses, cas de charge, dimensionnement, vérifications et justification technique."

    ],

    [

        "img"   => "uploads/ingenierie/bureau-etude/bureau_etude_4.webp",

        "title" => "Capteurs & instrumentation",

        "text"  => "Pression, température, effort, déplacement : choix des capteurs et intégration sur structure."

    ],

    [

        "img"   => "uploads/ingenierie/bureau-etude/bureau_etude_5.webp",

        "title" => "Acquisition & supervision",

        "text"  => "Collecte, horodatage, enregistrement, visualisation et export des données pour exploitation."

    ],

    [

        "img"   => "uploads/ingenierie/bureau-etude/bureau_etude_6.webp",

        "title" => "Analyse de données",

        "text"  => "Indicateurs, tendances, comparaisons, détection d’écarts et recommandations d’amélioration."

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-3.php';

?>

 

<!-- ----------------- PARTIE 4 ----------------- -->

<?php /*

// Bandeau logos (neutre) – à personnaliser si tu as des références

$cat_logos_title = "Domaines d’intervention";

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

// SECTION 2 (texte gauche + accordéon)

$concevoir_product_2_title = "Ce que vous obtenez : livrables et valeur";

 

$concevoir_product_2_left_text = "Nous produisons des livrables utilisables pour vos équipes, vos partenaires et vos donneurs d’ordre :

<strong>notes de calcul</strong>, <strong>dossiers techniques</strong>, <strong>protocoles d’essais</strong> et <strong>rapports d’analyse</strong>.

L’objectif est d’apporter une <strong>preuve technique</strong> claire, de réduire l’incertitude et d’améliorer la performance des structures.";

 

$concevoir_product_2_btn_label = "Demander un devis";

$concevoir_product_2_btn_link  = "contact";

 

$concevoir_product_2_steps = [

    [

        "title"      => "Note de calcul",

        "paragraphs" => [

            "Document de justification : hypothèses, cas de charge, résultats, marges et conclusions."

        ]

    ],

    [

        "title"      => "Plan d’instrumentation",

        "paragraphs" => [

            "Choix capteurs, implantation, fréquence d’échantillonnage, et protocole de collecte."

        ]

    ],

    [

        "title"      => "Rapport d’essais",

        "paragraphs" => [

            "Déroulé des essais, conditions, résultats mesurés, écarts et interprétation."

        ]

    ],

    [

        "title"      => "Analyse & recommandations",

        "paragraphs" => [

            "Synthèse actionnable : améliorations de design, ajustements process, points de vigilance."

        ]

    ],

    [

        "title"      => "Traçabilité & archivage",

        "paragraphs" => [

            "Organisation des données, exports, et capitalisation pour versions futures et audits."

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

$accompagner_solution_title = "Notre méthode : de l’hypothèse à la validation";

$accompagner_solution_title_paragraphe = "Nous travaillons en cycles courts : cadrage du besoin, hypothèses et calcul, instrumentation si nécessaire, collecte et analyse, puis recommandations. L’objectif est d’obtenir une décision technique claire et documentée.";

 

$accompagner_solution_btn_label = "Parler à un ingénieur";

$accompagner_solution_btn_link  = "contact";

 

$accompagner_solution_steps = [

    [

        "title"      => "1) Cadrage & exigences",

        "paragraphs" => [

            "Usage, environnement, contraintes, objectifs et critères d’acceptation."

        ]

    ],

    [

        "title"      => "2) Calcul & conception",

        "paragraphs" => [

            "Hypothèses, cas de charge, dimensionnement et préparation des livrables."

        ]

    ],

    [

        "title"      => "3) Mesure & analyse",

        "paragraphs" => [

            "Instrumentation, acquisition, traitement des données et validation."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-7.php';

?>

 

<!-- ----------------- PARTIE 8 ----------------- -->

<?php /*

// AVIS (optionnel) : neutre et institutionnel

$part10_title   = "Exemples d’usage";

$part10_pattern = "uploads/Picto/pattern-1.webp";

 

$avis = [

    [

        "name" => "Dimensionnement",

        "role" => "Note de calcul",

        "text" => "Documenter les hypothèses, les résultats et les marges pour sécuriser la décision technique.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

    [

        "name" => "Validation",

        "role" => "Essais & mesures",

        "text" => "Instrumenter et mesurer pour confirmer les performances et détecter les écarts.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

    [

        "name" => "Optimisation",

        "role" => "Analyse de data",

        "text" => "Exploiter les données pour améliorer la robustesse, la répétabilité et la qualité du système.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-8.php';

*/ ?>

 

<!-- ----------------- PARTIE 9 ----------------- -->

<?php

$part11_subtitle = $part11_subtitle ?? "Contact";

$part11_title    = $part11_title ?? "Discutons de votre étude";

 

$part11_text     = $part11_text ?? "Vous avez un besoin en <strong>note de calcul</strong>, <strong>instrumentation</strong>, <strong>acquisition de données</strong> ou <strong>analyse</strong> sur une structure gonflable ?

<strong>Contactez-nous</strong> : nous cadrons le périmètre et proposons une méthode et des livrables adaptés.";

 

require_once $base_path . 'components/categories/sous-categories/part-9.php';

?>

 

<?php require_once '../../../components/footer.php'; ?>

</body>

</html>