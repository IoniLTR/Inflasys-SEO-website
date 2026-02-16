<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Real-Time Monitoring & Multi-Measurement Sensors | Inflasys</title>

    <meta name="description" content="Real-time monitoring solutions for inflatable structures: pressure, temperature, GPS, inertial, tension, differential pressure, light and acoustic sensors. Multi-sensor data acquisition and decision support.">

</head>

 

<body>

<?php require_once '../../../components/header.php'; ?>

 

<!-- ----------------- PARTIE 1 ----------------- -->

<?php

// HERO

$hero_title     = "Real-Time Monitoring & Multi-Measurement Sensors";

$hero_text      = "Inflasys designs <strong>real-time monitoring</strong> solutions for inflatable structures and associated systems.

We integrate <strong>multiple sensors</strong>, reliable <strong>data acquisition</strong> and <strong>supervision interfaces</strong> to support <strong>decision-making</strong> (safety, operations, maintenance, performance).";

 

$hero_btn_label = "Contact us";

$hero_btn_link  = "contact";

$hero_img_src   = "uploads/ingenierie/mesure-temps-reel/mesure_temps_reel.webp";

$hero_img_alt   = "Real-time multi-sensor monitoring for inflatable structures";

 

require_once $base_path . 'components/categories/sous-categories/part-1.php';

?>

 

<!-- ----------------- PARTIE 2 ----------------- -->

<?php

// DEFINITION

$concevoir_product_title = "Tailor-made measurement systems, designed for field use";

$concevoir_product_title_paragraphe = "Good monitoring is not just about collecting measurements: it must provide a <strong>clear view</strong> and <strong>actionable indicators</strong>.

We design <strong>multi-sensor</strong> architectures adapted to your constraints (autonomy, environment, accuracy, maintenance) and your objectives: <strong>safety</strong>, <strong>performance</strong>, <strong>quality</strong> and <strong>traceability</strong>.";

 

$concevoir_product_img_src = "uploads/ingenierie/mesure-temps-reel/mesure_temps_reel_2.webp";

$concevoir_product_img_alt = "Diagram: sensors, acquisition, supervision and indicators";

 

// ACCORDÉON

$concevoir_product_steps = [

    [

        "title"      => "Multi-sensor data acquisition",

        "paragraphs" => [

            "Synchronized (or near-synchronized) collection of multiple variables, with timestamping and traceability."

        ]

    ],

    [

        "title"      => "Supervision & alerts",

        "paragraphs" => [

            "Dashboards, thresholds, alerts and histories to manage operations and maintenance."

        ]

    ],

    [

        "title"      => "Decision indicators",

        "paragraphs" => [

            "Turning measurements into simple indicators: status, trends, anomalies and events."

        ]

    ],

    [

        "title"      => "Custom integration",

        "paragraphs" => [

            "Adaptable architecture: sensors, enclosures, power supply, communications and operator interface."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-2.php';

?>

 

<!-- ----------------- PARTIE 3 ----------------- -->

<?php

// BLOCS

$part2_title = "From sensor to decision: a complete chain";

$part2_texts = [

    "We cover the entire chain: <strong>sensors</strong> → <strong>acquisition</strong> → <strong>operation</strong> → <strong>decision-making</strong>.

The system is designed to remain <strong>robust</strong>, <strong>easy to read</strong> and usable in the field."

];

 

$part2_blocks = [

    [

        "img"   => "uploads/ingenierie/mesure-temps-reel/mesure_temps_reel_3.webp",

        "title" => "Sensors & instrumentation",

        "text"  => "Selection, placement and integration of sensors based on the structure and the use case."

    ],

    [

        "img"   => "uploads/ingenierie/mesure-temps-reel/mesure_temps_reel_4.webp",

        "title" => "Acquisition & synchronization",

        "text"  => "Timestamping, storage, filtering and exports for analysis and traceability."

    ],

    [

        "img"   => "uploads/ingenierie/mesure-temps-reel/mesure_temps_reel_5.webp",

        "title" => "Supervision",

        "text"  => "Operator interface: statuses, trends, alerts and histories."

    ],

    [

        "img"   => "uploads/ingenierie/mesure-temps-reel/mesure_temps_reel_6.webp",

        "title" => "Indicators & alerts",

        "text"  => "Thresholds, event detection and actionable indicators for decision-making."

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-3.php';

?>

 

<!-- ----------------- PARTIE 4 ----------------- -->

<?php /*

// LOGOS (neutre)

$cat_logos_title = "Typically integrated sensors (depending on the project)";

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

$concevoir_product_2_title = "Examples of available measurements (depending on configuration)";

$concevoir_product_2_left_text = "We integrate sensors adapted to the structure and your objectives. The examples below cover most common needs: pressure control, thermal management, stability, mechanical status, environment, and acoustic performance.

Architectures are modular: you select only what is useful.";

 

$concevoir_product_2_btn_label = "Define your needs";

$concevoir_product_2_btn_link  = "contact";

 

$concevoir_product_2_steps = [

    [

        "title"      => "Pressure & differential pressure",

        "paragraphs" => [

            "Tube pressure, setpoint tracking, and differential pressure sensors to monitor deviations or flows."

        ]

    ],

    [

        "title"      => "Temperatures (tubes / volumes)",

        "paragraphs" => [

            "Internal tube temperature and a volume’s temperature (e.g., a hangar) to correlate pressure/behavior and improve operational comfort."

        ]

    ],

    [

        "title"      => "Position & movement",

        "paragraphs" => [

            "GPS for location/traceability, accelerometers and inertial units for shocks, vibrations, drift and events."

        ]

    ],

    [

        "title"      => "Loads & tension",

        "paragraphs" => [

            "Tension measurement on straps/anchors and critical points to monitor loads during operation."

        ]

    ],

    [

        "title"      => "Environment (light / acoustics)",

        "paragraphs" => [

            "Light sensor for usage correlations, acoustic sensor for measurements and attenuation tracking based on a protocol."

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

$part8_all_label = "Tout voir";

 

require_once $base_path . 'components/categories/sous-categories/part-6.php';

*/ ?>

 

<!-- ----------------- PARTIE 7 ----------------- -->

<?php

// PROCESS

$accompagner_solution_title = "Our method: sensors, integration, supervision";

$accompagner_solution_title_paragraphe = "We first define the objectives (safety, operations, performance), then design a measurement plan, integrate the sensors and deliver clear supervision with indicators and alerts.";

 

$accompagner_solution_btn_label = "Talk to an expert";

$accompagner_solution_btn_link  = "contact";

 

$accompagner_solution_steps = [

    [

        "title"      => "1) Scoping & architecture",

        "paragraphs" => [

            "Objectives, field constraints, autonomy, environment, traceability needs and thresholds."

        ]

    ],

    [

        "title"      => "2) Multi-sensor integration",

        "paragraphs" => [

            "Sensor selection, placement, acquisition, testing and calibration when needed."

        ]

    ],

    [

        "title"      => "3) Supervision & operations",

        "paragraphs" => [

            "Dashboards, alerts, exports, reports and usage recommendations."

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

$part11_title    = $part11_title ?? "Let’s build your monitoring system";

$part11_text     = $part11_text ?? "Do you need <strong>real-time monitoring</strong> with <strong>multiple sensors</strong> (pressure, temperature, GPS, inertial, tension, acoustics, etc.)?

<strong>Contact us</strong>: we’ll define the scope, the relevant sensors, the architecture and the deliverables (supervision, alerts, reports).";

 

require_once $base_path . 'components/categories/sous-categories/part-9.php';

?>

 

<?php require_once '../../../components/footer.php'; ?>

</body>

</html>
