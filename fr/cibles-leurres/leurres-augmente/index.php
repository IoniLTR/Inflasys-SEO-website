<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAI2S – Leurre gonflable robotisé | Inflasys</title>
    <meta name="description" content="DAI2S : système de leurres gonflables robotisés. Plateforme modulaire combinant structures gonflables, mobilité électrique et signatures multi-spectrales pour la simulation, l’entraînement et la dissuasion.">
</head>

<body>
<?php require_once '../../../components/header.php'; ?>

<!-- ----------------- PARTIE 1 ----------------- -->
<?php
// HERO
$hero_title     = "DAI2S – Robotic Inflatable Decoy System";
$hero_text      = "DAI2S est un <strong>système de leurres gonflables robotisés</strong> conçu pour simuler des actifs crédibles en environnements complexes.
Il combine <strong>structure gonflable</strong>, <strong>mobilité électrique</strong> et <strong>modules de signature</strong> pour soutenir la simulation, l’entraînement et la dissuasion.";

$hero_btn_label = "Nous contacter";
$hero_btn_link  = "contact";
$hero_img_src   = "uploads/cibles-leurres/leurres-augmente/leurre_augmente_gonflable.webp";
$hero_img_alt   = "Système DAI2S – leurre gonflable robotisé";

require_once $base_path . 'components/categories/sous-categories/part-1.php';
?>

<!-- ----------------- PARTIE 2 ----------------- -->
<?php
// SECTION "PRODUIT / DÉFINITION"
$concevoir_product_title = "Qu’est-ce que le système DAI2S ?";
$concevoir_product_title_paragraphe = "DAI2S est une <strong>plateforme de leurres gonflables motorisés</strong> capable de reproduire l’apparence et certains comportements observables d’un système réel.
Contrairement aux leurres statiques, DAI2S peut intégrer <strong>mouvement</strong>, <strong>chaleur</strong> et <strong>son</strong> via des modules interchangeables, afin d’améliorer la crédibilité opérationnelle.";

$concevoir_product_img_src = "uploads/cibles-leurres/leurres-augmente/leurre_augmente_gonflable_2.webp";
$concevoir_product_img_alt = "Architecture simplifiée du système DAI2S";

// ÉTAPES (accordéon) – bénéfices simples & non sensibles
$concevoir_product_steps = [
    [
        "title"      => "Simulation réaliste",
        "paragraphs" => [
            "Structures gonflables volumétriques et formes crédibles, adaptées aux usages d’observation et d’exercice."
        ]
    ],
    [
        "title"      => "Mobilité contrôlée",
        "paragraphs" => [
            "Déplacements possibles pour renforcer la cohérence des scénarios et éviter l’effet “objet figé”."
        ]
    ],
    [
        "title"      => "Signatures modulaires",
        "paragraphs" => [
            "Modules optionnels (thermique, acoustique, interaction sol) activables selon le besoin et le contexte."
        ]
    ],
    [
        "title"      => "Architecture évolutive",
        "paragraphs" => [
            "Une base commune réutilisable, configurée pour différents gabarits et scénarios, avec maintenance facilitée."
        ]
    ],
];

require_once $base_path . 'components/categories/sous-categories/part-2.php';
?>

<!-- ----------------- PARTIE 3 ----------------- -->
<?php
// BLOCS (image + titre + texte) – pédagogiques
$part2_title = "Une nouvelle génération de leurres : simple, modulaire, crédible";

$part2_texts = [
    "Les environnements actuels mobilisent plusieurs types de capteurs et d’observation. DAI2S vise une approche cohérente : <strong>forme + comportement + modules de signature</strong>, tout en restant déployable et évolutif.",
];

$part2_blocks = [
    [
        "img"   => "uploads/cibles-leurres/leurres-augmente/leurre_augmente_gonflable_3.webp",
        "title" => "Structure gonflable réaliste",
        "text"  => "Volumes crédibles et mise en œuvre rapide pour simuler véhicules ou infrastructures."
    ],
    [
        "img"   => "uploads/cibles-leurres/leurres-augmente/leurre_augmente_gonflable_4.webp",
        "title" => "Châssis motorisé électrique",
        "text"  => "Base de mobilité contrôlée, pensée pour l’exercice, la démonstration et la simulation."
    ],
    [
        "img"   => "uploads/cibles-leurres/leurres-augmente/leurre_augmente_gonflable_5.webp",
        "title" => "Modules de signature",
        "text"  => "Thermique, son, et effets d’interaction au sol (selon configuration) pour renforcer la crédibilité."
    ],
    [
        "img"   => "uploads/cibles-leurres/leurres-augmente/leurre_augmente_gonflable_6.webp",
        "title" => "Contrôle & scénarios",
        "text"  => "Pilotage et scénarios paramétrables pour adapter le comportement à l’objectif de l’exercice."
    ],
];

require_once $base_path . 'components/categories/sous-categories/part-3.php';
?>

<!-- ----------------- PARTIE 4 ----------------- -->
<?php /*
    
$cat_logos_title = "Ils nous font confiance pour des solutions de simulation militaire";
$cat_logos_list  = [
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"
];

   require_once $base_path . 'components/categories/sous-categories/part-4.php';


*/ ?>

<!-- ----------------- PARTIE 5 ----------------- -->
<?php
// SECTION 2 (texte gauche + accordéon)
$concevoir_product_2_title = "Pourquoi DAI2S change l’approche des leurres";

$concevoir_product_2_left_text = "DAI2S a été pensé comme une <strong>plateforme</strong> et non comme un “produit figé”.
L’objectif : une solution <strong>modulaire</strong> qui s’adapte aux scénarios et se met à jour au fil des retours terrain et des besoins d’exercice.";

$concevoir_product_2_btn_label = "Nous contacter";
$concevoir_product_2_btn_link  = "contact";

$concevoir_product_2_steps = [
    [
        "title"      => "Approche plateforme",
        "paragraphs" => [
            "Une base commune, reconfigurable selon le profil de mission (gabarit, modules, scénarios)."
        ]
    ],
    [
        "title"      => "Déploiement & maintenance",
        "paragraphs" => [
            "Composants accessibles et modules remplaçables pour simplifier la maintenance et les évolutions."
        ]
    ],
    [
        "title"      => "Cohérence multi-effets",
        "paragraphs" => [
            "La crédibilité vient de la cohérence : forme, présence, mouvement et modules de signature (selon besoin)."
        ]
    ],
    [
        "title"      => "Optimisation des coûts",
        "paragraphs" => [
            "Permet de multiplier les scénarios d’exercice et de simulation avec une logistique maîtrisée."
        ]
    ],
];

require_once $base_path . 'components/categories/sous-categories/part-5.php';
?>

<!-- ----------------- PARTIE 6 ----------------- -->
<?php /*
// RÉALISATIONS (si tu as des pages projet, ce bloc peut fonctionner tel quel)
$part8_title   = "Projets & démonstrateurs";
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
*/?>

<!-- ----------------- PARTIE 7 ----------------- -->
<?php
// ROADMAP / STATUT PROJET
$accompagner_solution_title = "État d’avancement & feuille de route";
$accompagner_solution_title_paragraphe = "Le projet DAI2S s’appuie sur une capacité de prototypage rapide et une architecture modulaire. Les étapes ci-dessous donnent une vision simple de l’approche.";

$accompagner_solution_btn_label = "Parler à un expert";
$accompagner_solution_btn_link  = "contact";

$accompagner_solution_steps = [
    [
        "title"      => "1) Cadrage du besoin",
        "paragraphs" => [
            "Définition des scénarios, des contraintes terrain et des objectifs de simulation."
        ]
    ],
    [
        "title"      => "2) Configuration modulaire",
        "paragraphs" => [
            "Choix du gabarit, des modules et des paramètres de contrôle selon le profil recherché."
        ]
    ],
    [
        "title"      => "3) Prototype fonctionnel",
        "paragraphs" => [
            "Livraison d’un prototype fonctionnel en quelques mois, puis itérations selon retours."
        ]
    ],
];

require_once $base_path . 'components/categories/sous-categories/part-7.php';
?>

<!-- ----------------- PARTIE 8 ----------------- -->
<?php /*
 
   // TITRE DU BLOC
   $part10_title = "Ils ont aimé travailler avec nous";

   // PATTERN (image décorative)
   $part10_pattern = "uploads/Picto/pattern-1.webp"; 

   // AVIS
   $avis = [
       [
           "name" => "Jean-Marc P.",
           "role" => "Directeur Technique - Grand Port Maritime",
           "text" => "L'automatisation de la pression nous a permis de sécuriser le stockage vrac face aux vents marins violents. Installation exemplaire.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Sylvie D.",
           "role" => "Resp. Maintenance - Site Seveso",
           "text" => "La redondance des systèmes Airtechnic répond parfaitement à nos exigences de sécurité pour le confinement de zone.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Marc L.",
           "role" => "Architecte Structure",
           "text" => "Une collaboration fluide avec le bureau d'études pour intégrer les contraintes esthétiques et techniques.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Thomas W.",
           "role" => "Chef de projet événementiel",
           "text" => "Rapidité de déploiement impressionnante et fiabilité totale du système de pilotage durant tout l'événement.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Cabinet Ingénierie X",
           "role" => "Partenaire BTP",
           "text" => "Nous prescrivons systématiquement leurs solutions pour les ouvrages temporaires de grande portée.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ]
   ];

   require_once $base_path . 'components/categories/sous-categories/part-8.php';

*/ ?>

<!-- ----------------- PARTIE 9 ----------------- -->
<?php
$part11_subtitle = $part11_subtitle ?? "Contact";
$part11_title    = $part11_title ?? "Discutons de votre besoin DAI2S";

$part11_text     = $part11_text ?? "Vous souhaitez <strong>évaluer un scénario</strong>, <strong>définir une configuration</strong> ou préparer une <strong>démonstration</strong> ?
<strong>Contactez-nous</strong> pour cadrer le besoin et définir une trajectoire prototype.";

require_once $base_path . 'components/categories/sous-categories/part-9.php';
?>

<?php require_once '../../../components/footer.php'; ?>
</body>
</html>
