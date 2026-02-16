<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Engineering & Systems | Inflasys</title>

    <meta name="description" content="Inflasys Engineering & Systems: engineering office (engineering, acquisition & data), calculation reports (wind/stability) with instrumentation, custom developments (drones & interfaces), and real-time multi-sensor monitoring.">

</head>

 

<body>

    <?php require_once '../../components/header.php'; ?>

 

<!-- ----------------- PARTIE 1 ----------------- -->

   <?php

   $cat_hero_title     = $cat_hero_title ?? "Engineering & Systems";

   $cat_hero_text      = $cat_hero_text ?? "Inflasys combines inflatable structures, engineering and embedded systems to deliver solutions that are documented, measurable and field-ready. This page presents our 4 areas: Engineering Office & Data, Calculation Reports & Wind, Custom Developments, and Real-Time Multi-Sensor Monitoring.";

   $cat_hero_btn_label = $cat_hero_btn_label ?? "Contact us";

   $cat_hero_btn_link  = $cat_hero_btn_link ??  "contact/";

   $cat_hero_img_src   = $cat_hero_img_src ?? "uploads/ingenierie/ingenierie_gonflable.webp";

   $cat_hero_img_alt   = $cat_hero_img_alt ?? "Inflasys engineering and systems: calculations, instrumentation, monitoring, developments";

   require_once $base_path . 'components/categories/part-1.php';

   ?>

 

<!-- ----------------- PARTIE 2 ----------------- -->

<?php

$part2_title = $part2_title ?? "4 complementary areas, one approach: design, measure, decide";

 

$part2_texts = $part2_texts ?? [

    "<strong>Our services are designed to reduce uncertainty and accelerate decision-making.</strong>",

    "Depending on your objectives (technical validation, optimization, operations, custom development), we activate one or more areas to deliver clear outputs: calculation reports, measurement plans, supervision, interfaces and reports.",

    "This approach is compatible with <strong>industrial</strong>, <strong>institutional</strong> and <strong>dual-use</strong> contexts."

];

 

$part2_blocks = $part2_blocks ?? [

    [

        "img"  => "uploads/ingenierie/ingenierie_gonflable_2.webp",

        "title"=> "1) Engineering Office – Engineering, acquisition & data",

        "text" => "<strong>Design, instrumentation, acquisition and analysis</strong> to validate assumptions, document real behavior and speed up iterations."

    ],

    [

        "img"  => "uploads/ingenierie/ingenierie_gonflable_3.webp",

        "title"=> "2) Calculation reports & wind resistance",

        "text" => "<strong>Wind, stability, anchoring, margins</strong>: dedicated calculation reports, complemented when needed by <strong>embedded instrumentation</strong> (tension, displacement, pressure)."

    ],

    [

        "img"  => "uploads/ingenierie/ingenierie_gonflable_4.webp",

        "title"=> "3) Custom developments – Drones & interfaces",

        "text" => "<strong>Tailor-made solutions</strong> for ground and marine drones, operator interfaces and dedicated applications, adapted to field constraints."

    ],

    [

        "img"  => "uploads/ingenierie/ingenierie_gonflable_5.webp",

        "title"=> "4) Real-time monitoring & multi-sensor systems",

        "text" => "<strong>Real-time</strong> multi-sensor supervision (pressure, temperature, GPS, inertial, tension, acoustics…) with <strong>indicators</strong> and <strong>alerts</strong> to support decision-making."

    ],

];

 

   require_once $base_path . 'components/categories/part-2.php';

   ?>

 

<!-- ----------------- PARTIE 3 ----------------- -->

   <?php /*

$cat_logos_title = $cat_logos_title ?? "Environments & use cases covered";

$cat_logos_list  = $cat_logos_list ?? [

    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",

    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"

];

   require_once $base_path . 'components/categories/part-3.php';

   */ ?>

 

<!-- ----------------- PARTIE 4 ----------------- -->

   <?php

$part4_title = $part4_title ?? "Why structure a project around measurement and evidence?";

$part4_btn_label = $part4_btn_label ?? "Contact us";

$part4_btn_link  = $part4_btn_link ?? "contact/";

$part4_paragraphs = $part4_paragraphs ?? [

    "On real systems (inflatable structures, embedded systems, mobile platforms), <strong>technical decisions must be justified</strong>: through calculations, testing, or observation during operations.",

    "Our approach aims to deliver <strong>usable outputs</strong>: calculation reports, protocols, test reports, dashboards, histories, and operational recommendations.",

    "By combining an <strong>engineering office</strong>, <strong>instrumentation</strong>, <strong>monitoring</strong> and <strong>software development</strong>, we reduce unnecessary iterations and secure key choices (architecture, anchoring, operating limits, maintenance).",

    "Result: solutions that are <strong>more robust</strong>, <strong>better documented</strong> and <strong>easier to deploy</strong> over time."

];

   require_once $base_path . 'components/categories/part-4.php';

   ?>

 

<!-- ----------------- PARTIE 5 ----------------- -->

   <?php

$work_title = $work_title ?? "Our technical methodology (from requirements to validation)";

$work_img_src = $work_img_src ?? "uploads/ingenierie/ingenierie_gonflable_6.webp";

$work_img_alt = $work_img_alt ?? "Engineering and validation methodology";

 

$work_steps = $work_steps ?? [

    [

        "number" => "1",

        "title" => "Scoping",

        "paragraphs" => [

            "Definition of objectives, field constraints, environment, expected level of evidence and deliverables.",

            "Identification of critical variables: wind, pressure, temperature, loads, movements, availability, operational safety."

        ]

    ],

    [

        "number" => "2",

        "title" => "Design & sizing",

        "paragraphs" => [

            "Production of calculation reports and architecture choices (sensors, acquisition, interfaces, power supply, communications).",

            "Definition of thresholds, indicators and acceptance criteria."

        ]

    ],

    [

        "number" => "3",

        "title" => "Instrumentation & validation",

        "paragraphs" => [

            "Deployment of sensors (tension, displacement, pressure, temperatures, inertial, acoustics, etc.) and timestamped acquisition.",

            "Measurement analysis, actionable summary, recommendations and iterations when needed."

        ]

    ],

];

   require_once $base_path . 'components/categories/part-5.php';

   ?>

 

<!-- ----------------- PARTIE 6 ----------------- -->

   <?php

$part6_title = $part6_title ?? "Capabilities mobilized depending on the need";

$part6_intro_strong = $part6_intro_strong ?? "An “engineering & systems” project requires combining calculations, instrumentation, software and field use to deliver a truly usable solution.";

$part6_paragraphs = $part6_paragraphs ?? [

    "Our work combines <strong>structural engineering</strong> (assumptions, load cases, anchoring, margins), <strong>sensors & data acquisition</strong> (measurement plan, integration, traceability) and <strong>data analysis</strong> (indicators, anomalies, recommendations).",

    "Depending on scope, we also deliver <strong>operator interfaces</strong> and <strong>dedicated applications</strong> for supervision, operations and decision support."

];

   require_once $base_path . 'components/categories/part-6.php';

   ?>

 

<!-- ----------------- PARTIE 7 ----------------- -->

   <?php

$part7_title = $part7_title ?? "Timelines & scope: a modular approach";

$part7_intro_strong = $part7_intro_strong ?? "Scope depends on the level of evidence you need: calculations only, instrumented validation, or real-time monitoring with supervision.";

$part7_paragraphs = $part7_paragraphs ?? [

    "A need can be covered by a <strong>calculation report</strong> (wind/stability/anchoring) or by a complete chain including <strong>instrumentation</strong>, <strong>acquisition</strong>, <strong>analysis</strong> and <strong>supervision</strong>.",

    "Architectures are designed to be <strong>scalable</strong>: adding sensors, adjusting thresholds, new dashboards, integrating an interface or a business application.",

    "<strong>We systematically define the scope and deliverables</strong> before execution, to ensure a clear trajectory (content, timelines, acceptance criteria)."

];

   require_once $base_path . 'components/categories/part-7.php';

   ?>

 

<!-- ----------------- PARTIE 8 ----------------- -->

<?php /*
$part8_title = $part8_title ?? "Some of our projects";
$part8_pattern = $part8_pattern ?? $base_url . "uploads/Picto/pattern-1.webp";

// --- LOGIQUE DYNAMIQUE : RÉCUPÉRATION DES 2 DERNIERS PROJETS ---

if (!function_exists('getRealisationDataForCat')) {
   function getRealisationDataForCat($filePath) {
       $content = file_get_contents($filePath);
       $data = ['title' => 'Project', 'img_path' => 'uploads/default.webp'];
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
*/
?>

 

<!-- ----------------- PARTIE 9 ----------------- -->

   <?php

$why_title = $why_title ?? "Why choose Inflasys for these topics?";

$why_paragraph = $why_paragraph ?? "Because we approach these projects as complete systems: <strong>calculations + measurements + operations</strong>. The goal is to deliver a solution that works in the field and can be managed over time.";

$why_btn_label = $why_btn_label ?? "Contact us";

$why_btn_link  = $why_btn_link ?? "contact/";

 

$why_cards = $why_cards ?? [

    ["text" => "Structured approach: scoping, deliverables, acceptance criteria", "img" => "uploads/Picto/pattern-1.webp"],

    ["text" => "Multi-sensor measurements and traceable acquisition", "img" => "uploads/Picto/pattern-1.webp"],

    ["text" => "Calculation reports: wind, stability, anchoring, margins", "img" => "uploads/Picto/pattern-1.webp"],

    ["text" => "Supervision & alerts for decision-making", "img" => "uploads/Picto/pattern-1.webp"],

    ["text" => "Custom developments: interfaces & dedicated applications", "img" => "uploads/Picto/pattern-1.webp"],

];

   require_once $base_path . 'components/categories/part-9.php';

   ?>

 

<!-- ----------------- PARTIE 10 ----------------- -->

<?php /* 
$cat_reviews_title = $cat_reviews_title ?? "They enjoyed working with us";

// EXACTEMENT 5 TÉMOIGNAGES
$cat_reviews = [
    ["name" => "Jean Dupont", "job" => "Airbus", "text" => "Outstanding responsiveness for our temporary hangars.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Marie Curie", "job" => "Vinci", "text" => "The acoustic wall reduced noise by 20dB. Impressive.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Col. Moutarde", "job" => "Army", "text" => "Highly realistic tactical decoys. Met expectations.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Sophie Martin", "job" => "Renault", "text" => "Maintenance made easier thanks to quick-deploy tents. Great.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Luc Besson", "job" => "EuropaCorp", "text" => "Custom inflatable structures for our sets. Perfect.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"]
];
   require_once $base_path . 'components/categories/part-10.php';
  */ ?>

<!-- ----------------- PARTIE 11 ----------------- -->

<?php

$part11_subtitle = $part11_subtitle ?? "Contact our teams";

$part11_title    = $part11_title ?? "Let’s discuss your needs";

$part11_text     = $part11_text ?? "Do you have a project requiring an <strong>engineering office</strong>, a <strong>calculation report</strong>, <strong>instrumented validation</strong>, <strong>real-time monitoring</strong>, or a <strong>custom development</strong>? <strong>Contact us</strong>: we’ll define the scope and propose a realistic path forward.";

 

   require_once $base_path . 'components/categories/part-11.php';

?>

 

<?php require_once '../../components/footer.php'; ?>

</body>

</html>
