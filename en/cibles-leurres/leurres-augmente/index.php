<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAI2S – Robotic Inflatable Decoy | Inflasys</title>
    <meta name="description" content="DAI2S: robotic inflatable decoy system. A modular platform combining inflatable structures, electric mobility and multi-spectral signatures for simulation, training and deterrence.">
</head>

<body>
<?php require_once '../../../components/header.php'; ?>

<!-- ----------------- PART 1 ----------------- -->
<?php
// HERO
$hero_title     = "DAI2S – Robotic Inflatable Decoy System";
$hero_text      = "DAI2S is a <strong>robotic inflatable decoy system</strong> designed to simulate credible assets in complex environments.
It combines <strong>inflatable structures</strong>, <strong>electric mobility</strong> and <strong>signature modules</strong> to support simulation, training and deterrence.";

$hero_btn_label = "Contact us";
$hero_btn_link  = "contact";
$hero_img_src   = "uploads/cibles-leurres/leurres-augmente/leurre_augmente_gonflable.webp";
$hero_img_alt   = "DAI2S system – robotic inflatable decoy";

require_once $base_path . 'components/categories/sous-categories/part-1.php';
?>

<!-- ----------------- PART 2 ----------------- -->
<?php
// PRODUCT / DEFINITION SECTION
$concevoir_product_title = "What is the DAI2S system?";
$concevoir_product_title_paragraphe = "DAI2S is a <strong>motorized inflatable decoy platform</strong> capable of reproducing the appearance and selected observable behaviors of a real system.
Unlike static decoys, DAI2S can integrate <strong>movement</strong>, <strong>heat</strong> and <strong>sound</strong> through interchangeable modules, enhancing operational credibility.";

$concevoir_product_img_src = "uploads/cibles-leurres/leurres-augmente/leurre_augmente_gonflable_2.webp";
$concevoir_product_img_alt = "Simplified architecture of the DAI2S system";

// STEPS (accordion) – non-sensitive benefits
$concevoir_product_steps = [
    [
        "title"      => "Realistic simulation",
        "paragraphs" => [
            "Volumetric inflatable structures with credible shapes, suitable for observation and training exercises."
        ]
    ],
    [
        "title"      => "Controlled mobility",
        "paragraphs" => [
            "Optional movement capabilities to strengthen scenario realism and avoid the “static object” effect."
        ]
    ],
    [
        "title"      => "Modular signatures",
        "paragraphs" => [
            "Optional modules (thermal, acoustic, ground interaction) activated according to mission needs and context."
        ]
    ],
    [
        "title"      => "Scalable architecture",
        "paragraphs" => [
            "A reusable core platform, configurable for different sizes and scenarios, with simplified maintenance."
        ]
    ],
];

require_once $base_path . 'components/categories/sous-categories/part-2.php';
?>

<!-- ----------------- PART 3 ----------------- -->
<?php
// EDUCATIONAL BLOCKS (image + title + text)
$part2_title = "A new generation of decoys: simple, modular, credible";

$part2_texts = [
    "Modern environments rely on multiple sensors and observation methods. DAI2S follows a coherent approach: <strong>shape + behavior + signature modules</strong>, while remaining deployable and scalable.",
];

$part2_blocks = [
    [
        "img"   => "uploads/cibles-leurres/leurres-augmente/leurre_augmente_gonflable_3.webp",
        "title" => "Realistic inflatable structure",
        "text"  => "Credible volumes and rapid deployment to simulate vehicles or infrastructure."
    ],
    [
        "img"   => "uploads/cibles-leurres/leurres-augmente/leurre_augmente_gonflable_4.webp",
        "title" => "Electric motorized chassis",
        "text"  => "A controlled mobility base designed for exercises, demonstrations and simulation."
    ],
    [
        "img"   => "uploads/cibles-leurres/leurres-augmente/leurre_augmente_gonflable_5.webp",
        "title" => "Signature modules",
        "text"  => "Thermal, acoustic and ground interaction effects (depending on configuration) to reinforce realism."
    ],
    [
        "img"   => "uploads/cibles-leurres/leurres-augmente/leurre_augmente_gonflable_6.webp",
        "title" => "Control & scenarios",
        "text"  => "Configurable control and scenarios to adapt behavior to training objectives."
    ],
];

require_once $base_path . 'components/categories/sous-categories/part-3.php';
?>

<!-- ----------------- PART 4 ----------------- -->
<?php
/*
$cat_logos_title = "Trusted by organizations for military simulation solutions";
$cat_logos_list  = [
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", ...
];

require_once $base_path . 'components/categories/sous-categories/part-4.php';
*/
?>

<!-- ----------------- PART 5 ----------------- -->
<?php
// TEXT + ACCORDION SECTION
$concevoir_product_2_title = "Why DAI2S changes the decoy approach";

$concevoir_product_2_left_text = "DAI2S was designed as a <strong>platform</strong> rather than a fixed product.
The objective is a <strong>modular solution</strong> that adapts to scenarios and evolves over time based on field feedback and training needs.";

$concevoir_product_2_btn_label = "Contact us";
$concevoir_product_2_btn_link  = "contact";

$concevoir_product_2_steps = [
    [
        "title"      => "Platform approach",
        "paragraphs" => [
            "A common core platform, reconfigurable according to mission profile (size, modules, scenarios)."
        ]
    ],
    [
        "title"      => "Deployment & maintenance",
        "paragraphs" => [
            "Accessible components and replaceable modules to simplify maintenance and upgrades."
        ]
    ],
    [
        "title"      => "Multi-effect coherence",
        "paragraphs" => [
            "Credibility comes from consistency: shape, presence, movement and signature modules (as required)."
        ]
    ],
    [
        "title"      => "Cost optimization",
        "paragraphs" => [
            "Enables multiple training and simulation scenarios with controlled logistics and costs."
        ]
    ],
];

require_once $base_path . 'components/categories/sous-categories/part-5.php';
?>

<!-- ----------------- PART 6 ----------------- -->
<?php /*
// PROJECTS & DEMONSTRATORS
$part8_title   = "Projects & demonstrators";
$part8_pattern = "uploads/Picto/pattern-1.webp";

// --- DYNAMIC LOGIC: LAST 2 PROJECTS ---
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

<!-- ----------------- PART 7 ----------------- -->
<?php
// ROADMAP / PROJECT STATUS
$accompagner_solution_title = "Project status & roadmap";
$accompagner_solution_title_paragraphe = "The DAI2S project is built on rapid prototyping capabilities and a modular architecture. The steps below provide a clear overview of the approach.";

$accompagner_solution_btn_label = "Talk to an expert";
$accompagner_solution_btn_link  = "contact";

$accompagner_solution_steps = [
    [
        "title"      => "1) Needs assessment",
        "paragraphs" => [
            "Definition of scenarios, field constraints and simulation objectives."
        ]
    ],
    [
        "title"      => "2) Modular configuration",
        "paragraphs" => [
            "Selection of size, modules and control parameters according to the desired profile."
        ]
    ],
    [
        "title"      => "3) Functional prototype",
        "paragraphs" => [
            "Delivery of a functional prototype within a few months, followed by iterative improvements."
        ]
    ],
];

require_once $base_path . 'components/categories/sous-categories/part-7.php';
?>

<!-- ----------------- PART 9 ----------------- -->
<?php
$part11_subtitle = $part11_subtitle ?? "Contact";
$part11_title    = $part11_title ?? "Let’s discuss your DAI2S project";

$part11_text     = $part11_text ?? "Would you like to <strong>evaluate a scenario</strong>, <strong>define a configuration</strong> or prepare a <strong>demonstration</strong>?
<strong>Contact us</strong> to structure your needs and define a prototype roadmap.";

require_once $base_path . 'components/categories/sous-categories/part-9.php';
?>

<?php require_once '../../../components/footer.php'; ?>
</body>
</html>
