<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Engineering Office – Design, Data Acquisition & Calculation Reports | Inflasys</title>

    <meta name="description" content="Inflasys engineering office: inflatable structure engineering, calculation reports, instrumentation and data acquisition, analysis and processing of measurements for validation, optimization and monitoring.">

</head>

 

<body>

<?php require_once '../../../components/header.php'; ?>

 

<!-- ----------------- PARTIE 1 ----------------- -->

<?php

// HERO

$hero_title     = "Engineering Office: Engineering & Data for Inflatable Structures";

$hero_text      = "Inflasys provides a dedicated <strong>engineering office</strong> for inflatable structures: <strong>design</strong>, <strong>dimensioning</strong> and <strong>validation through measurement</strong>.

We support the <strong>production of calculation reports</strong>, the <strong>deployment of data acquisition systems</strong> and the <strong>analysis of results</strong> to secure your projects and optimize performance.";

 

$hero_btn_label = "Contact us";

$hero_btn_link  = "contact";

$hero_img_src   = "uploads/ingenierie/bureau-etude/bureau_etude.webp";

$hero_img_alt   = "Inflasys Engineering Office – engineering and data analysis";

 

require_once $base_path . 'components/categories/sous-categories/part-1.php';

?>

 

<!-- ----------------- PARTIE 2 ----------------- -->

<?php

// SECTION "PRODUIT / DÉFINITION"

$concevoir_product_title = "What does our engineering office do?";

$concevoir_product_title_paragraphe = "Our engineering office supports the <strong>design and validation</strong> of inflatable structures and associated systems.

We produce <strong>calculation reports</strong>, define <strong>test plans</strong>, instrument if needed (pressure, loads, temperatures, displacements, vibrations), then perform <strong>data analysis</strong> to confirm assumptions and improve the design.";

 

$concevoir_product_img_src = "uploads/ingenierie/bureau-etude/bureau_etude_2.webp";

$concevoir_product_img_alt = "Diagram: calculations, instrumentation, acquisition and data analysis";

 

// ÉTAPES (accordéon)

$concevoir_product_steps = [

    [

        "title"      => "Calculation reports & structural sizing",

        "paragraphs" => [

            "Stability checks, internal pressures, loads, joints/assemblies, and safety margins based on the operating context."

        ]

    ],

    [

        "title"      => "Instrumentation & data acquisition",

        "paragraphs" => [

            "Definition of the measurement protocol, sensor selection, integration on the structure, data collection and traceability."

        ]

    ],

    [

        "title"      => "Measurement analysis & processing",

        "paragraphs" => [

            "Data cleaning, key indicators, anomaly detection, correlation with assumptions and recommendations."

        ]

    ],

    [

        "title"      => "Optimization & iterations",

        "paragraphs" => [

            "Improving designs through short loops: correction, mass optimization, robustness, repeatability and quality."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-2.php';

?>

 

<!-- ----------------- PARTIE 3 ----------------- -->

<?php

// BLOCS (image + titre + texte)

$part2_title = "A complete approach: calculation + measurement + decision-making";

 

$part2_texts = [

    "To make an inflatable structure reliable, it’s not enough to design it: you must <strong>size</strong>, <strong>measure</strong> and <strong>validate</strong>.

    Our approach combines engineering deliverables with field measurements to reduce risk, accelerate iterations and document compliance."

];

 

$part2_blocks = [

    [

        "img"   => "uploads/ingenierie/bureau-etude/bureau_etude_3.webp",

        "title" => "Calculation & modeling",

        "text"  => "Assumptions, load cases, sizing, checks and technical justification."

    ],

    [

        "img"   => "uploads/ingenierie/bureau-etude/bureau_etude_4.webp",

        "title" => "Sensors & instrumentation",

        "text"  => "Pressure, temperature, load, displacement: sensor selection and integration on the structure."

    ],

    [

        "img"   => "uploads/ingenierie/bureau-etude/bureau_etude_5.webp",

        "title" => "Data acquisition & monitoring",

        "text"  => "Collection, timestamping, logging, visualization and data export for analysis."

    ],

    [

        "img"   => "uploads/ingenierie/bureau-etude/bureau_etude_6.webp",

        "title" => "Data analytics",

        "text"  => "Indicators, trends, comparisons, deviation detection and improvement recommendations."

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-3.php';

?>

 

<!-- ----------------- PARTIE 4 ----------------- -->

<?php /*

// Bandeau logos (neutre) – à personnaliser si tu as des références

$cat_logos_title = "Areas of expertise";

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

$concevoir_product_2_title = "What you get: deliverables and value";

 

$concevoir_product_2_left_text = "We deliver usable outputs for your teams, partners and contracting authorities:

<strong>calculation reports</strong>, <strong>technical files</strong>, <strong>test protocols</strong> and <strong>analysis reports</strong>.

The goal is to provide clear <strong>technical evidence</strong>, reduce uncertainty and improve the performance of structures.";

 

$concevoir_product_2_btn_label = "Request a quote";

$concevoir_product_2_btn_link  = "contact";

 

$concevoir_product_2_steps = [

    [

        "title"      => "Calculation report",

        "paragraphs" => [

            "Justification document: assumptions, load cases, results, margins and conclusions."

        ]

    ],

    [

        "title"      => "Instrumentation plan",

        "paragraphs" => [

            "Sensor selection, placement, sampling rate, and collection protocol."

        ]

    ],

    [

        "title"      => "Test report",

        "paragraphs" => [

            "Test procedure, conditions, measured results, deviations and interpretation."

        ]

    ],

    [

        "title"      => "Analysis & recommendations",

        "paragraphs" => [

            "Actionable summary: design improvements, process adjustments, key watchpoints."

        ]

    ],

    [

        "title"      => "Traceability & archiving",

        "paragraphs" => [

            "Data organization, exports, and capitalization for future versions and audits."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-5.php';

?>

 

<!-- ----------------- PARTIE 6 ----------------- -->

<?php /*

// RÉALISATIONS (si tu as des pages projet, ce bloc peut fonctionner tel quel)

$part8_title   = "Recent studies & projects";

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

$part8_all_label = "View all";

 

require_once $base_path . 'components/categories/sous-categories/part-6.php';

*/ ?>

 

<!-- ----------------- PARTIE 7 ----------------- -->

<?php

// PROCESS

$accompagner_solution_title = "Our method: from assumptions to validation";

$accompagner_solution_title_paragraphe = "We work in short cycles: scope definition, assumptions and calculations, instrumentation if needed, collection and analysis, then recommendations. The goal is to provide a clear, documented technical decision.";

 

$accompagner_solution_btn_label = "Talk to an engineer";

$accompagner_solution_btn_link  = "contact";

 

$accompagner_solution_steps = [

    [

        "title"      => "1) Scoping & requirements",

        "paragraphs" => [

            "Use case, environment, constraints, objectives and acceptance criteria."

        ]

    ],

    [

        "title"      => "2) Calculation & design",

        "paragraphs" => [

            "Assumptions, load cases, sizing and preparation of deliverables."

        ]

    ],

    [

        "title"      => "3) Measurement & analysis",

        "paragraphs" => [

            "Instrumentation, acquisition, data processing and validation."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-7.php';

?>

 

<!-- ----------------- PARTIE 8 ----------------- -->

<?php /*

// AVIS (optionnel) : neutre et institutionnel

$part10_title   = "Use-case examples";

$part10_pattern = "uploads/Picto/pattern-1.webp";

 

$avis = [

    [

        "name" => "Sizing",

        "role" => "Calculation report",

        "text" => "Document assumptions, results and margins to secure the technical decision.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

    [

        "name" => "Validation",

        "role" => "Tests & measurements",

        "text" => "Instrument and measure to confirm performance and detect deviations.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

    [

        "name" => "Optimization",

        "role" => "Data analysis",

        "text" => "Use data to improve robustness, repeatability and overall system quality.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-8.php';

*/ ?>

 

<!-- ----------------- PARTIE 9 ----------------- -->

<?php

$part11_subtitle = $part11_subtitle ?? "Contact";

$part11_title    = $part11_title ?? "Let’s discuss your study";

 

$part11_text     = $part11_text ?? "Do you need a <strong>calculation report</strong>, <strong>instrumentation</strong>, <strong>data acquisition</strong> or <strong>data analysis</strong> for an inflatable structure?

<strong>Get in touch</strong>: we’ll define the scope and propose a method and deliverables tailored to your needs.";

 

require_once $base_path . 'components/categories/sous-categories/part-9.php';

?>

 

<?php require_once '../../../components/footer.php'; ?>

</body>

</html>
