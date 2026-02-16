<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Custom Developments – Ground & Marine Drones and Interfaces | Inflasys</title>

    <meta name="description" content="Custom developments for ground and marine drones: sensor integration, embedded systems, operator interfaces and dedicated applications for military and industrial uses.">

</head>

 

<body>

<?php require_once '../../../components/header.php'; ?>

 

<!-- ----------------- PARTIE 1 ----------------- -->

<?php

// HERO

$hero_title     = "Custom Developments – Drones & Interfaces";

$hero_text      = "Inflasys supports <strong>military</strong> and <strong>industrial</strong> stakeholders in the <strong>development of tailored solutions</strong> for ground and marine drones.

We work on <strong>system integration</strong>, <strong>operator interface development</strong> and the <strong>creation of dedicated applications</strong>, designed for field constraints and operational use cases.";

 

$hero_btn_label = "Contact us";

$hero_btn_link  = "contact";

$hero_img_src   = "uploads/ingenierie/developpements-specifiques–drones-&-interfaces/architecture_gonflable.webp";

$hero_img_alt   = "Custom developments for ground and marine drones";

 

require_once $base_path . 'components/categories/sous-categories/part-1.php';

?>

 

<!-- ----------------- PARTIE 2 ----------------- -->

<?php

// DEFINITION

$concevoir_product_title = "Developments tailored to your operational needs";

$concevoir_product_title_paragraphe = "Every project comes with specific constraints: environment, mission, safety, ergonomics, interoperability.

We design <strong>dedicated developments</strong> for ground and marine drones, as well as <strong>custom interfaces and applications</strong>, to meet operational, industrial or institutional needs with precision.";

 

$concevoir_product_img_src = "uploads/ingenierie/developpements-specifiques–drones-&-interfaces/architecture_gonflable_2.webp";

$concevoir_product_img_alt = "Diagram of drone development, interfaces and applications";

 

// ACCORDÉON

$concevoir_product_steps = [

    [

        "title"      => "Ground drones",

        "paragraphs" => [

            "Developments for mobile ground platforms: control, sensors, partial automation and supervision."

        ]

    ],

    [

        "title"      => "Marine drones",

        "paragraphs" => [

            "Solutions adapted to maritime environments: stability, communications, sensors and supervision."

        ]

    ],

    [

        "title"      => "Custom developments",

        "paragraphs" => [

            "Tailor-made features depending on the mission, technical constraints and operating framework."

        ]

    ],

    [

        "title"      => "Interoperability & scalability",

        "paragraphs" => [

            "Open architectures enabling system evolution and the integration of third-party modules."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-2.php';

?>

 

<!-- ----------------- PARTIE 3 ----------------- -->

<?php

// BLOCS

$part2_title = "A modular, use-oriented approach";

 

$part2_texts = [

    "Our developments follow a <strong>functional and modular</strong> approach.

The goal is to deliver systems that are <strong>usable in the field</strong>, adapted to real constraints, and scalable over time."

];

 

$part2_blocks = [

    [

        "img"   => "uploads/ingenierie/developpements-specifiques–drones-&-interfaces/architecture_gonflable_3.webp",

        "title" => "Ground drones",

        "text"  => "Mobile ground platforms: piloting, supervision, sensors and operational scenarios."

    ],

    [

        "img"   => "uploads/ingenierie/developpements-specifiques–drones-&-interfaces/architecture_gonflable_4.webp",

        "title" => "Marine drones",

        "text"  => "Systems adapted to nautical environments: communications, stability and control."

    ],

    [

        "img"   => "uploads/ingenierie/developpements-specifiques–drones-&-interfaces/architecture_gonflable_5.webp",

        "title" => "Operator interfaces",

        "text"  => "Ergonomic interfaces for piloting, supervision and data exploitation."

    ],

    [

        "img"   => "uploads/ingenierie/developpements-specifiques–drones-&-interfaces/architecture_gonflable_6.webp",

        "title" => "Dedicated applications",

        "text"  => "Dedicated applications for military or industrial uses, based on specifications."

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-3.php';

?>

 

<!-- ----------------- PARTIE 4 ----------------- -->

<?php /*

// LOGOS (neutre)

$cat_logos_title = "Areas of application";

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

// DETAILS TECHNIQUES

$concevoir_product_2_title = "Interfaces & applications: from need to use";

 

$concevoir_product_2_left_text = "Interfaces and applications are designed to be <strong>easy to use</strong>, <strong>robust</strong> and <strong>adapted to the context</strong>.

We focus on ergonomics, readability and reliability to make system operation easier for end users.";

 

$concevoir_product_2_btn_label = "Request a discussion";

$concevoir_product_2_btn_link  = "contact";

 

$concevoir_product_2_steps = [

    [

        "title"      => "Human–machine interfaces",

        "paragraphs" => [

            "Design of control, supervision and data visualization interfaces."

        ]

    ],

    [

        "title"      => "Dedicated applications",

        "paragraphs" => [

            "Development of specific applications based on processes and business constraints."

        ]

    ],

    [

        "title"      => "Security & robustness",

        "paragraphs" => [

            "Architecture designed for field use, with access and data-flow management."

        ]

    ],

    [

        "title"      => "Military & industrial adaptation",

        "paragraphs" => [

            "Solutions compatible with demanding contexts, civil or institutional."

        ]

    ],

    [

        "title"      => "Scalability",

        "paragraphs" => [

            "Functional evolution possible based on user feedback and future needs."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-5.php';

?>

 

<!-- ----------------- PARTIE 6 ----------------- -->

<?php /*

// RÉALISATIONS (si tu as des pages projet, ce bloc peut fonctionner tel quel)

$part8_title   = "Recent studies & tests";

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

$accompagner_solution_title = "Our development method";

$accompagner_solution_title_paragraphe = "We work in short cycles: scoping the need, development, testing and adjustments. This approach helps deliver functional solutions adapted to real use.";

 

$accompagner_solution_btn_label = "Talk to an expert";

$accompagner_solution_btn_link  = "contact";

 

$accompagner_solution_steps = [

    [

        "title"      => "1) Scoping & needs",

        "paragraphs" => [

            "Analysis of use cases, constraints, environment and objectives."

        ]

    ],

    [

        "title"      => "2) Development & integration",

        "paragraphs" => [

            "Development of functions, system integration and interfaces."

        ]

    ],

    [

        "title"      => "3) Testing & validation",

        "paragraphs" => [

            "Functional tests, adjustments and validation with users."

        ]

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-7.php';

?>

 

<!-- ----------------- PARTIE 8 ----------------- -->

<?php /*

// USE CASES

$part10_title   = "Typical use cases";

$part10_pattern = "uploads/Picto/pattern-1.webp";

 

$avis = [

    [

        "name" => "Military",

        "role" => "Specific systems",

        "text" => "Dedicated developments for drone platforms and operator interfaces.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

    [

        "name" => "Industrial",

        "role" => "Business applications",

        "text" => "Solutions adapted to industrial processes and field constraints.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

    [

        "name" => "Institutional",

        "role" => "Demonstration & experimentation",

        "text" => "Platforms and applications for tests, demos and validation.",

        "logo" => "uploads/Logo/clients/2630401.svg"

    ],

];

 

require_once $base_path . 'components/categories/sous-categories/part-8.php';

*/ ?>

 

<!-- ----------------- PARTIE 9 ----------------- -->

<?php

$part11_subtitle = $part11_subtitle ?? "Contact";

$part11_title    = $part11_title ?? "Let’s discuss your custom development";

 

$part11_text     = $part11_text ?? "Do you have a <strong>ground or marine drone</strong> project, an <strong>interface development</strong> need, or a <strong>dedicated application</strong> request?

<strong>Contact us</strong> to scope the need and define a tailored solution.";

 

require_once $base_path . 'components/categories/sous-categories/part-9.php';

?>

 

<?php require_once '../../../components/footer.php'; ?>

</body>

</html>
