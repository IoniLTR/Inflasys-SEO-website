<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Notes de calcul & résistance au vent – Instrumentation embarquée | Inflasys</title>

    <meta name="description" content="Notes de calcul pour structures gonflables : résistance au vent, stabilité et ancrages. Mise en place de systèmes de mesures embarqués (traction, déplacement, pression, température) et rapports d’essais.">

</head>

 

<body>

<?php require_once '../../../components/header.php'; ?>

 

<!-- ----------------- PARTIE 1 ----------------- -->

<?php

// HERO

$hero_title     = "Notes de calcul & résistance au vent – Structures gonflables";

$hero_text      = "Nous réalisons des <strong>notes de calcul</strong> dédiées aux structures gonflables, avec un focus sur la <strong>résistance au vent</strong>, la <strong>stabilité</strong> et les <strong>systèmes d’ancrage</strong>.

Nous pouvons compléter ces études par des <strong>mesures embarquées</strong> (traction, déplacement, pression, etc.) pour valider les hypothèses et documenter la performance.";

 

$hero_btn_label = "Nous contacter";

$hero_btn_link  = "contact";

$hero_img_src   = "uploads/ingenierie/conception-complexe/conception_complexe.webp";

$hero_img_alt   = "Notes de calcul résistance au vent et instrumentation pour structures gonflables";

 

require_once $base_path . 'components/categories/sous-categories/part-1.php';

?>

 

<!-- ----------------- PARTIE 2 ----------------- -->

<?php

// SECTION "PRODUIT / DÉFINITION"

$concevoir_product_title = "À quoi sert une note de calcul sur une structure gonflable ?";

$concevoir_product_title_paragraphe = "Une note de calcul permet de <strong>justifier techniquement</strong> la tenue d’une structure gonflable dans ses conditions d’usage :

<strong>vent</strong>, <strong>stabilité</strong>, <strong>efforts</strong>, <strong>ancrages</strong> et <strong>marges de sécurité</strong>.

Selon les contraintes du projet, nous complétons l’étude par une <strong>instrumentation embarquée</strong> afin de mesurer les efforts et de confirmer le comportement réel.";

 

$concevoir_product_img_src = "uploads/ingenierie/conception-complexe/conception_complexe_2.webp";

$concevoir_product_img_alt = "Schéma : vent, ancrages, pressions internes et mesures embarquées";

 

// ÉTAPES (accordéon)

$concevoir_product_steps = [

    [

        "title"      => "Dimensionnement vent & stabilité",

        "paragraphs" => [

            "Analyse des sollicitations liées au vent, stabilité globale, effets de rafales et cas de charge représentatifs."

        ]

    ],

    [

        "title"      => "Ancrages & interfaces",

        "paragraphs" => [

            "Vérification des ancrages, points d’attache, sangles, interfaces sol et reprise d’efforts."

        ]

    ],

    [

        "title"      => "Pressions & tenue structurelle",

        "paragraphs" => [

            "Pressions internes, rigidité, zones critiques, assemblages et marges de sécurité."

        ]

    ],

    [

        "title"      => "Validation par la mesure (option)",

        "paragraphs" => [

            "Capteurs embarqués (traction, déplacement, pression) pour confirmer les hypothèses et documenter la tenue."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-2.php';

?>

 

<!-- ----------------- PARTIE 3 ----------------- -->

<?php

// BLOCS (image + titre + texte)

$part2_title = "Calcul + mesures : sécuriser et documenter la performance";

 

$part2_texts = [

    "Nos études combinent <strong>justification technique</strong> et, si nécessaire, <strong>validation par essais instrumentés</strong>.

L’objectif : réduire l’incertitude, sécuriser les décisions (ancrages, limites d’exploitation, procédures) et fournir des livrables exploitables."

];

 

$part2_blocks = [

    [

        "img"   => "uploads/ingenierie/conception-complexe/conception_complexe_3.webp",

        "title" => "Résistance au vent",

        "text"  => "Cas de charge, stabilité, effets de rafales et recommandations de limites d’exploitation."

    ],

    [

        "img"   => "uploads/ingenierie/conception-complexe/conception_complexe_4.webp",

        "title" => "Ancrages & traction",

        "text"  => "Dimensionnement des ancrages et mesure des efforts de traction sur points critiques."

    ],

    [

        "img"   => "uploads/ingenierie/conception-complexe/conception_complexe_5.webp",

        "title" => "Déplacements & déformations",

        "text"  => "Mesure des déplacements (flèche, déformation, dérive) pour valider le comportement réel."

    ],

    [

        "img"   => "uploads/ingenierie/conception-complexe/conception_complexe_6.webp",

        "title" => "Pression & tenue",

        "text"  => "Suivi de pression interne et analyse de la tenue structurelle selon les conditions d’usage."

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-3.php';

?>

 

<!-- ----------------- PARTIE 4 ----------------- -->

<?php /*

// Bandeau logos (neutre) – à personnaliser

$cat_logos_title = "Mesures embarquées possibles";

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

$concevoir_product_2_title = "Capteurs & instrumentation : ce que l’on mesure";

 

$concevoir_product_2_left_text = "Les structures gonflables peuvent être instrumentées pour observer leur comportement réel.

Nous définissons un <strong>plan de mesure</strong> (capteurs, emplacements, fréquence d’échantillonnage, durée) puis livrons un <strong>rapport</strong> avec indicateurs et recommandations.";

 

$concevoir_product_2_btn_label = "Demander une étude";

$concevoir_product_2_btn_link  = "contact";

 

$concevoir_product_2_steps = [

    [

        "title"      => "Traction / efforts",

        "paragraphs" => [

            "Mesure des efforts sur sangles, ancrages et points d’attache (zones critiques)."

        ]

    ],

    [

        "title"      => "Déplacement / dérive",

        "paragraphs" => [

            "Mesure des déplacements et déformations (flèche, dérive latérale, tenue d’implantation)."

        ]

    ],

    [

        "title"      => "Pression interne",

        "paragraphs" => [

            "Suivi de la pression et de ses variations selon le vent, la température et l’usage."

        ]

    ],

    [

        "title"      => "Température (option)",

        "paragraphs" => [

            "Mesure de température pour corréler pression, comportement matière et conditions d’environnement."

        ]

    ],

    [

        "title"      => "Acquisition & traçabilité",

        "paragraphs" => [

            "Horodatage, enregistrement, export des données et synthèse actionnable pour prise de décision."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-5.php';

?>

 

<!-- ----------------- PARTIE 6 ----------------- -->

<?php /*

// RÉALISATIONS (si tu as des pages projet, ce bloc peut fonctionner tel quel)

$part8_title   = "Études & essais récents";

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

$accompagner_solution_title = "Notre méthode : calcul, instrumentation, rapport";

$accompagner_solution_title_paragraphe = "Nous partons des conditions d’usage (site, vent, ancrages, exploitation), réalisons la note de calcul, puis instrumentons si nécessaire pour confirmer le comportement réel et formaliser des recommandations.";

 

$accompagner_solution_btn_label = "Parler à un ingénieur";

$accompagner_solution_btn_link  = "contact";

 

$accompagner_solution_steps = [

    [

        "title"      => "1) Cadrage & données d’entrée",

        "paragraphs" => [

            "Gabarit, matériaux, usage, environnement, contraintes vent, règles d’exploitation."

        ]

    ],

    [

        "title"      => "2) Note de calcul & recommandations",

        "paragraphs" => [

            "Cas de charge, vérifications, ancrages, marges et limites d’exploitation proposées."

        ]

    ],

    [

        "title"      => "3) Mesures embarquées & rapport",

        "paragraphs" => [

            "Plan de mesure, capteurs, acquisition, analyse et synthèse actionnable."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-7.php';

?>

 

<!-- ----------------- PARTIE 8 ----------------- -->

<?php /*

// AVIS (optionnel)

$part10_title   = "Exemples d’application";

$part10_pattern = "uploads/Picto/pattern-1.webp";

 

$avis = [

    [

        "name" => "Stabilité",

        "role" => "Vent & ancrages",

        "text" => "Justifier les ancrages et les limites d’exploitation avec une approche documentée.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

    [

        "name" => "Validation",

        "role" => "Mesures embarquées",

        "text" => "Mesurer traction, déplacements et pression pour confirmer le comportement réel.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

    [

        "name" => "Optimisation",

        "role" => "Amélioration design",

        "text" => "Exploiter les données pour améliorer robustesse, répétabilité et procédures d’usage.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-8.php';

*/ ?>

 

<!-- ----------------- PARTIE 9 ----------------- -->

<?php

$part11_subtitle = $part11_subtitle ?? "Contact";

$part11_title    = $part11_title ?? "Lançons votre note de calcul";

 

$part11_text     = $part11_text ?? "Vous avez besoin d’une <strong>note de calcul</strong> (vent, stabilité, ancrages) ou d’un système de <strong>mesures embarquées</strong> (traction, déplacement, pression) ?

<strong>Contactez-nous</strong> : nous cadrons le périmètre, les livrables et le plan de validation.";

 

require_once $base_path . 'components/categories/sous-categories/part-9.php';

?>

 

<?php require_once '../../../components/footer.php'; ?>

</body>

</html>

