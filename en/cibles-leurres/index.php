<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflasys cat</title>
    <meta name="description" content="">
</head>

<body>
    <?php require_once '../../components/header.php'; ?>

<!-- ----------------- PARTIE 1 ----------------- -->
   <?php 
   $cat_hero_title     = $cat_hero_title ?? 'Inflatable Targets & Decoys';
   $cat_hero_text      = $cat_hero_text ?? "Tactical inflatable decoys are now a dual-use solution at the intersection of military, civil security, and crisis management issues. They can be used to credibly simulate vehicles, buildings, or temporary infrastructure to support the protection of real assets, training, strategic planning, or operational deception in both civilian and institutional contexts.";
   $cat_hero_btn_label = $cat_hero_btn_label ?? 'Contact us';
   $cat_hero_btn_link  = $cat_hero_btn_link ??  'contact/';
   $cat_hero_img_src   = $cat_hero_img_src ?? 'uploads/cibles-leurres/leurres_&_cibles_gonflable.webp';
   $cat_hero_img_alt   = $cat_hero_img_alt ?? 'Structure gonflable Airtechnic';
   require_once $base_path . 'components/categories/part-1.php';
   ?>

<!-- ----------------- PARTIE 2 ----------------- -->
<?php
$part2_title = $part2_title ?? "Understanding dual-use inflatable decoys";

 

$part2_texts = $part2_texts ?? [

    "<strong>A dual-use inflatable decoy is a simulated structure designed to reproduce the appearance, volumes and, when required, certain observable signatures of real equipment.</strong>",

    "These systems can represent vehicles, buildings, command posts, technical areas or critical infrastructures, for defence, homeland security, civil protection and inter-agency exercise purposes.",

    "They are used for training, concealment, indirect protection, scenario simulation, flow management and risk reduction during sensitive operations or major crisis situations."

];

 

$part2_blocks = $part2_blocks ?? [

    [

        "img"  => "uploads/cibles-leurres/leurres_&_cibles_gonflable_2.webp",

        "title"=> "Visual and geometric credibility",

        "text" => "<strong>Visual credibility is the primary condition of an effective decoy.</strong> Proportions, silhouettes, volumes and structural details are designed to ensure consistent interpretation by human observers as well as aerial or imaging systems, depending on engagement distances and operational context."

    ],

    [

        "img"  => "uploads/cibles-leurres/leurres_&_cibles_gonflable_3.webp",

        "title"=> "Multi-spectral approach",

        "text" => "<strong>A decoy can go beyond visual appearance.</strong> Depending on threat assessment and specifications, treatments or modules may contribute to thermal, radar or electromagnetic coherence, aligned with common observation methods used in defence and security."

    ],

    [

        "img"  => "uploads/cibles-leurres/leurres_&_cibles_gonflable_4.webp",

        "title"=> "Rapid deployment and reconfigurability",

        "text" => "<strong>Inflatable solutions provide speed and flexibility.</strong> Transport, installation, relocation and reconfiguration make them suitable for exercises, temporary operations and crisis situations where agility and reduced lead times are critical."

    ],

    [

        "img"  => "uploads/cibles-leurres/leurres_&_cibles_gonflable_5.webp",

        "title"=> "Logistical footprint and durability",

        "text" => "<strong>A dual-use solution must be robust and rationalised.</strong> Materials, reparability, packaging and maintenance are designed to limit constraints while ensuring operational durability, repeatable deployments and compatibility with public-sector stakeholders."

    ],

];
   require_once $base_path . 'components/categories/part-2.php';
   ?>
<!-- ----------------- PARTIE 3 ----------------- -->
   <?php /*
$cat_logos_title = "They trust us on dual-use projects";
$cat_logos_list  = [
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"
];

   require_once $base_path . 'components/categories/part-3.php';
   */ ?>
<!-- ----------------- PARTIE 4 ----------------- -->
   <?php
$part4_title = $part4_title ?? "Why integrate dual-use inflatable decoys?";

$part4_btn_label = $part4_btn_label ?? "Contact us";

$part4_btn_link  = $part4_btn_link ?? "contact/";

$part4_paragraphs = $part4_paragraphs ?? [

    "Dual-use inflatable decoys provide a concrete lever for organisations that must <strong>train, protect, simulate or prepare systems</strong> in complex environments. Defence, homeland security and civil protection benefit from reduced risk, controlled costs and accelerated deployment.",

    "They address specific institutional challenges: <strong>inter-service exercises, operational readiness, simulation of sensitive sites, indirect asset protection, crisis communication and deployment of temporary infrastructures</strong> without immobilising real assets.",

    "<strong>A professional approach starts with proper scoping:</strong> objectives, scenarios, observation conditions, transport constraints, deployment duration, discretion requirements, expected realism levels and regulatory or HSE constraints.",

    "These solutions are designed for the long term: <strong>maintenance, reparability, scenario evolution, feedback integration</strong> and the ability to deploy consistent models (vehicles, buildings, installations) aligned with training and protection needs."

];
   require_once $base_path . 'components/categories/part-4.php';
   ?>
<!-- ----------------- PARTIE 5 ----------------- -->
   <?php
$work_title = $work_title ?? "Our technical methodology";

$work_img_src = $work_img_src ?? "uploads/cibles-leurres/leurres_&_cibles_gonflable_6.webp";

$work_img_alt = $work_img_alt ?? "Engineering and manufacturing of inflatable structures";

 

$work_steps = $work_steps ?? [

    [

        "number" => "1",

        "title" => "Scoping and operational scenarios",

        "paragraphs" => ["Scoping defines the dual-use context: purpose (training, protection, simulation, exercise), environment (urban, open terrain, industrial area), logistical constraints, deployment duration, expected realism levels and possible observation modes. This phase structures the specifications, priorities (visual, multi-spectral, robustness) and acceptance criteria, ensuring a coherent, measurable and operational solution."]

    ],

    [

        "number" => "2",

        "title" => "Design and product architecture",

        "paragraphs" => [

            "Design defines geometry, volumes, assemblies and materials (strength, durability, reparability), as well as stability and anchoring choices. The objective is to ensure credible rendering, realistic implementation and reliable performance in operational conditions.",

            "Transport and packaging constraints, deployment speed, operational safety and maintainability are integrated from the outset. Interfaces and options (modules, accessories, markings) are specified to remain compatible with institutional use.",

            "Design anticipates long-term use: deployment cycles, cleaning, field repairs, storage, evolving requirements and consistency across a product range (vehicles, buildings, simulated infrastructures)."

        ]

    ],

    [

        "number" => "3",

        "title" => "Prototyping, testing and industrialisation",

        "paragraphs" => [

            "Prototyping validates key choices: rendering, stability, installation time, resistance, terrain compatibility and robustness of critical points (welds/seams, valves, anchoring zones).",

            "Testing provides objective performance assessment: deployment repeatability, wind behaviour, handling resistance, climatic exposure and suitability for intensive exercise use.",

            "Industrialisation formalises standards: documentation, quality control, maintenance procedures, spare parts and processes, ensuring a reliable, traceable solution suitable for operational teams."

        ]

    ]

];
   require_once $base_path . 'components/categories/part-5.php';
   ?>
<!-- ----------------- PARTIE 6 ----------------- -->
   <?php
$part6_title = $part6_title ?? "How should a dual-use team be structured?";

$part6_intro_strong = $part6_intro_strong ?? "A credible dual-use inflatable decoy offering combines materials engineering, product design, operational expertise and field deployment capability.";

$part6_paragraphs = $part6_paragraphs ?? [

    "The team must bring together skills in design (volumes, details, stability), materials (strength, assemblies, reparability), manufacturing (processes, quality) and integration (options, modules, accessories). Understanding operational scenarios is essential to avoid purely demonstrative designs that cannot be used in real conditions.",

    "Rigorous project management ensures consistency: scoping, scheduling, documentation, testing, compliance and the ability to deploy a coherent range (vehicles, buildings, infrastructures) while maintaining consistent quality and maintainability."

];
   require_once $base_path . 'components/categories/part-6.php';
   ?>
<!-- ----------------- PARTIE 7 ----------------- -->
   <?php
$part7_title = $part7_title ?? "Timelines and budgets for an inflatable decoy project";

$part7_intro_strong = $part7_intro_strong ?? "Cost and duration depend on realism level, deployment constraints and project scope (prototype, series production, multi-model range).";

$part7_paragraphs = $part7_paragraphs ?? [

    "A prototype intended for training or institutional simulation typically focuses on visual credibility, robustness and rapid installation. A project aimed at indirect protection or complex exercises may include multi-spectral coherence options and enhanced logistical constraints.",

    "Budgets are generally correlated with engineering time, level of detail, testing requirements and documentation/maintenance expectations. Institutional projects are often structured in milestones: scoping, design, prototype, validation and series production.",

    "<strong>A professional approach includes full scoping, a detailed quotation and a roadmap.</strong> This enables transparent comparison of options (realism, durability, logistics) and informed decision-making aligned with operational performance and costs."

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
$why_title = $why_title ?? "Why choose Inflasys?";

$why_paragraph = $why_paragraph ?? "Inflasys designs dual-use inflatable structure solutions with a <strong>rigorous, documented and operations-oriented approach</strong>. Our methodology combines engineering, prototyping and industrialisation capabilities to deliver credible, maintainable systems. Key reasons to work with us include:";

$why_btn_label = $why_btn_label ?? "Contact us";

$why_btn_link  = $why_btn_link ?? "contact/";

 

$why_cards = $why_cards ?? [

    ["text" => "Dual-use approach: defence, security, civil protection, inter-agency exercises", "img" => "uploads/Picto/pattern-1.webp"],

    ["text" => "Operational scoping: scenarios, terrain constraints, measurable objectives", "img" => "uploads/Picto/pattern-1.webp"],

    ["text" => "Robust design: rapid deployment, reparability, operational durability", "img" => "uploads/Picto/pattern-1.webp"],

    ["text" => "Prototype-to-series capability: standards, documentation and maintenance", "img" => "uploads/Picto/pattern-1.webp"],

    ["text" => "Institutional compliance: traceability, operational safety, conformity", "img" => "uploads/Picto/pattern-1.webp"]

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
$part11_subtitle = $part11_subtitle ?? "Contact our teams";

$part11_title    = $part11_title ?? "Let’s discuss your dual-use requirements";

$part11_text     = $part11_text ?? "Do you have a requirement for inflatable decoys or the simulation of vehicles, buildings or temporary infrastructures? Describe your context (training, protection, exercise, crisis) and we will propose a structured, documented approach aligned with your constraints.";
require_once $base_path . 'components/categories/part-11.php';
   ?>

<?php require_once '../../components/footer.php'; ?>
</body>
</html>