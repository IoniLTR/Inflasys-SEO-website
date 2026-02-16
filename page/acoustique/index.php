<html lang="fr">
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
   $cat_hero_title     = $cat_hero_title ?? 'Agence Design';
   $cat_hero_text      = $cat_hero_text ?? "Le Design est une discipline vaste et complète, composée de nombreuses branches et expertises spécifiques.";
   $cat_hero_btn_label = $cat_hero_btn_label ?? 'Nous contacter';
   $cat_hero_btn_link  = $cat_hero_btn_link ??  'contact/';
   $cat_hero_img_src   = $cat_hero_img_src ?? 'uploads/default.png';
   $cat_hero_img_alt   = $cat_hero_img_alt ?? 'Structure gonflable Airtechnic';
   require_once $base_path . 'components/categories/part-1.php';
   ?>

<!-- ----------------- PARTIE 2 ----------------- -->
<?php
$part2_title = $part2_title ?? "Comprendre le Design";

$part2_texts = $part2_texts ?? [
    "<strong>Le design web désigne l'ensemble des éléments visuels et fonctionnels d'un site internet, créés pour offrir une expérience agréable et efficace aux utilisateurs.</strong>",
    "‍Il englobe l'interface utilisateur (UI), qui concerne la disposition des éléments graphiques, des couleurs et des polices, ainsi que l'expérience utilisateur (UX), visant à garantir une navigation fluide et intuitive.",
    "Il s’étend également aux considérations complémentaires, telles que le rôle du site dans la stratégie digitale ou encore aux sujets de performance et d’accessibilité."
];

$part2_blocks = $part2_blocks ?? [
    [
        "img"  => "/uploads/default.png",
        "title"=> "UX (User Experience)",
        "text" => "<strong>L’UX concerne la navigation et les interactions entre le visiteur et le contenu.</strong> L'objectif est de rendre le site ergonomique et intuitif afin qu’il réponde aux besoins de l’internaute. Identifier les cibles du site, travailler la rétention et la conversion de celui-ci en font donc également partie."
    ],
    [
        "img"  => "/uploads/default.png",
        "title"=> "UI (User Interface)",
        "text" => "<strong>L'UI vise à rendre l'expérience utilisateur attrayante et fonctionnelle.</strong> Cela englobe donc tout l'aspect visuel du site, la mise en page, les couleurs, les polices et les éléments interactifs. C’est un élément clé pour générer de l’engagement et soigner l’image de marque."
    ],
    [
        "img"  => "/uploads/default.png",
        "title"=> "La performance",
        "text" => "<strong>La performance d’une solution digitale se travaille dans le webdesign, en considérant l’impact réel de chaque décision, esthétique, ergonomique ou stratégique.</strong> Par exemple, soigner la rapidité de chargement des pages, l’accessibilité, l'optimisation des ressources du site ou encore la pérennité de la solution créée."
    ],
    [
        "img"  => "/uploads/default.png",
        "title"=> "La stratégie",
        "text" => "Soigner l’UX, l’UI et la performance d’un projet digital n’est pas toujours suffisant. <strong>De nos jours, l’importance du web fait du webdesign un élément clé de la stratégie digitale.</strong> Une bonne agence pose des questions stratégiques sur le site et est un partenaire business."
    ],
];
   require_once $base_path . 'components/categories/part-2.php';
   ?>
<!-- ----------------- PARTIE 3 ----------------- -->
   <?php
$cat_logos_title = "Ils nous font confiance dans ce secteur";
$cat_logos_list  = [
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"
];

   require_once $base_path . 'components/categories/part-3.php';
   ?>
<!-- ----------------- PARTIE 4 ----------------- -->
   <?php
$part4_title = $part4_title ?? "Pourquoi travailler avec une agence de Design ?";
$part4_btn_label = $part4_btn_label ?? "Nous contacter";
$part4_btn_link  = $part4_btn_link ?? "contact/";
$part4_paragraphs = $part4_paragraphs ?? [
    "Travailler avec une agence de design pour votre site internet offre un véritable avantage stratégique pour vous démarquer en ligne.<strong> Une agence spécialisée dispose de l'expertise nécessaire pour créer des sites web qui ne se contentent pas d'être esthétiques, mais qui répondent également aux besoins spécifiques de chaque client. Grâce à une équipe de designers UX/UI, développeurs et experts en référencement, l'agence assure une conception sur mesure.</strong>",
    "Les enjeux tels que le branding, la communication, l’identification des personae, le targeting, la performance, l’accessibilité, la performance, le référencement ou encore la pérennité du site internet peuvent être adressés en faisant appel à une agence aux compétences complètes.",
    "<strong>Faire appel à une agence de webdesign permet d’avoir une vision long terme pour le développement de votre présence en ligne.</strong> Les agences ne vont pas seulement créer le site ; elles accompagnent leurs clients dans la gestion et l’évolution de leur site dans la durée.",
    "Elles assurent la maintenance, l’analyse des performances et l’adaptation continue aux évolutions technologiques et aux tendances du marché. En choisissant une agence, vous bénéficiez d’un partenariat durable qui vous permet de rester compétitif et de répondre rapidement aux besoins changeants de vos utilisateurs."
];
   require_once $base_path . 'components/categories/part-4.php';
   ?>
<!-- ----------------- PARTIE 5 ----------------- -->
   <?php
$work_title = $work_title ?? "Notre méthodologie technique";
$work_img_src = $work_img_src ?? "uploads/default.png";
$work_img_alt = $work_img_alt ?? "Ingénieurs au travail";

$work_steps = $work_steps ?? [
    [
        "number" => "1",
        "title" => "Cadrage",
        "paragraphs" => ["Le cadrage webdesign est une étape essentielle dans le processus de création d'un site, visant à définir les objectifs, les attentes et les contraintes du projet. Il consiste à comprendre les besoins de l’entreprise, les comportements des utilisateurs cibles et les enjeux commerciaux afin de proposer une structure cohérente et optimisée. Cette phase inclut la définition de l’architecture du site, l’élaboration des maquettes fonctionnelles (wireframes), ainsi que la mise en place d’une stratégie de contenu. Le cadrage permet ainsi de poser les bases du projet, d’assurer une direction claire et de garantir que le design final réponde à la fois aux objectifs esthétiques et fonctionnels du client."]
    ],
    [
        "number" => "2",
        "title" => "Conception structurelle",
        "paragraphs" => [
        "La conception de la structure d’un site web consiste à définir l’architecture et l’organisation des informations de manière logique et fluide. Cette étape permet de planifier la hiérarchie des pages, la navigation et l’agencement des sections en fonction des besoins des utilisateurs et des objectifs de l’entreprise.",
        "Il faut tout d’abord prendre en compte les cibles du site (personae) pour s'assurer que la structure du site réponde aux attentes spécifiques de chaque groupe d'utilisateurs. L’objectif est de créer une expérience intuitive en veillant à ce que les informations soient facilement accessibles et bien hiérarchisées.",
        "La structure doit aussi tenir compte des critères techniques et SEO, pour assurer un bon référencement et une conception qui garantisse la cohérence et la performance du site à long terme."
        ]
    ],
    [
        "number" => "3",
        "title" => "Création visuelle",
        "paragraphs" => [
        "La partie visuelle du webdesign consiste à habiller la structure ou le wireframe du site pour en faire une maquette esthétique et fonctionnelle.",
        "Cette étape transforme les éléments de base en un design attractif, en choisissant les couleurs, les typographies, les images et les icônes, tout en veillant à respecter l'identité visuelle de la marque. L'objectif est de créer un environnement visuel agréable, harmonieux et cohérent, tout en facilitant l’interaction de l’utilisateur avec le site afin de favoriser l’engagement.",
        "Cela nécessite notamment d’anticiper la navigation sur tous les types appareils, en garantissant une navigation fluide, un bon contraste et une hiérarchie visuelle claire. Le design visuel doit ainsi servir à renforcer l’intention du site tout en rendant l’expérience utilisateur agréable et mémorable."
        ]
    ]
];
   require_once $base_path . 'components/categories/part-5.php';
   ?>
<!-- ----------------- PARTIE 6 ----------------- -->
   <?php
$part6_title = $part6_title ?? "Comment doit être composée une agence Design?";
$part6_intro_strong = $part6_intro_strong ?? "Une bonne agence de webdesign doit réunir des experts UX/UI, développeurs web, et spécialistes SEO pour garantir un site esthétique, fonctionnel et bien référencé.";
$part6_paragraphs = $part6_paragraphs ?? [
    "Le ou les designers UX/UI créent une interface intuitive et agréable, tandis que le développeur apporte son expertise technique sur la faisabilité et les coûts liés aux solutions envisagées. Les experts SEO peuvent apporter des audits, analyses ou du conseil pour optimiser la structure et le contenu et ainsi favoriser le positionnement sur les moteurs de recherche. Un rédacteur web est également essentiel pour produire du contenu optimisé, aligné avec les objectifs SEO et les attentes des utilisateurs.",
    "Enfin, un chef de projet coordonne l’équipe pour garantir la cohérence, le respect des délais et du budget, assurant ainsi le succès du projet web pour toutes les parties."
];
   require_once $base_path . 'components/categories/part-6.php';
   ?>
<!-- ----------------- PARTIE 7 ----------------- -->
   <?php
$part7_title = $part7_title ?? "Durée et prix d’une prestation de Design Web";
$part7_intro_strong = $part7_intro_strong ?? "Le temps et le coût d’une prestation de Web Design dépend intégralement du projet et du chantier à mener.";
$part7_paragraphs = $part7_paragraphs ?? [
    "En effet, une prestation de réalisation de maquette de site internet sera focalisée principalement sur les cibles, la structure et l’esthétique. Une prestation d’audit Design pourra davantage challenger la stratégie, les personae et les points d’interactions souhaités entre l’internaute et le site.",
    "Quel que soit votre besoin, l’agence calculera son prix en fonction du temps à consacrer à votre projet. On parle de TJM (Taux Journalier Moyen) pour faire allusion au coût de travail de l’agence.",
    "<strong>Une agence de qualité effectuera un cadrage complet avec vous, avant de vous faire parvenir des devis précis et détaillés accompagnés d’une roadmap.</strong> Vous aurez ainsi toutes les informations à disposition pour prendre votre décision !"
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
       $data = ['title' => 'Projet', 'img_path' => 'uploads/default.png'];
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
$why_title = $why_title ?? "Pourquoi choisir Afalence ?";
$why_paragraph = $why_paragraph ?? "Afalence est une agence de conception et création de sites Webflow <strong>reconnue pour son excellence et son éthique de travail.</strong> L’équipe est constitué <strong> d'experts aux compétences complémentaires qui travaillent avec rigueur,</strong> créativité et dévouement sur votre projet ! Voici quelques raisons de choisir Afalence :";
$why_btn_label = $why_btn_label ?? "Nous contacter";
$why_btn_link  = $why_btn_link ?? "contact/";

$why_cards = $why_cards ?? [
    ["text" => "3 expertises complémentaires : UX Design, Développement, SEO", "img" => "uploads/Picto/pattern-1.webp"],
    ["text" => "Travail approfondi de l’UX pour optimiser la rétention et la conversion de votre site", "img" => "uploads/Picto/pattern-1.webp"],
    ["text" => "Création de site sur mesure au pixel près.", "img" => "uploads/Picto/pattern-1.webp"],
    ["text" => "Développeur fullstack expérimenté sans limitations dues au no code", "img" => "uploads/Picto/pattern-1.webp"],
    ["text" => "Optimisation de votre site pourfavoriser son référencement sur Google", "img" => "uploads/Picto/pattern-1.webp"]
];
   require_once $base_path . 'components/categories/part-9.php';
   ?>
<!-- ----------------- PARTIE 10 ----------------- -->
<?php  
$cat_reviews_title = $cat_reviews_title ?? "Ils ont aimé travailler avec nous";

// EXACTEMENT 5 TÉMOIGNAGES
$cat_reviews = [
    ["name" => "Jean Dupont", "job" => "Airbus", "text" => "Réactivité exemplaire pour nos hangars temporaires.", "logo" => "uploads/Logo/clients/Chanel-logo.png"],
    ["name" => "Marie Curie", "job" => "Vinci", "text" => "Le mur acoustique a réduit le bruit de 20dB. Bluffant.", "logo" => "uploads/Logo/clients/Chanel-logo.png"],
    ["name" => "Col. Moutarde", "job" => "Armée", "text" => "Leurres tactiques hyper réalistes. Conformes aux attentes.", "logo" => "uploads/Logo/clients/Chanel-logo.png"],
    ["name" => "Sophie Martin", "job" => "Renault", "text" => "Maintenance facilitée grâce aux tentes rapides. Top.", "logo" => "uploads/Logo/clients/Chanel-logo.png"],
    ["name" => "Luc Besson", "job" => "EuropaCorp", "text" => "Structures gonflables sur mesure pour nos décors. Parfait.", "logo" => "uploads/Logo/clients/Chanel-logo.png"]
];
   require_once $base_path . 'components/categories/part-10.php';
   ?>
<!-- ----------------- PARTIE 11 ----------------- -->
    <?php
// Variables par défaut
$part11_subtitle = $part11_subtitle ?? "Contactez nos équipes";
$part11_title    = $part11_title ?? "Discutons de vos besoins";
$part11_text     = $part11_text ?? "Vous cherchez une agence web de confiance pour votre projet ? Contactez-nous et découvrez comment nous pouvons vous aider.";

   require_once $base_path . 'components/categories/part-11.php';
   ?>

<?php require_once '../../components/footer.php'; ?>
</body>
</html>