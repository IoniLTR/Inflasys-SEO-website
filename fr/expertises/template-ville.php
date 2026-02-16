<?php
// On s'assure que la ville est définie, sinon redirection
if (!isset($city_data)) {
    header("Location: ../index.php");
    exit;
}

// Variables dynamiques basées sur la ville
$ville_nom = $city_data['name'];
$ville_h2_contact = $city_data['contact_title'];
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Webflow <?= $ville_nom ?> | Inflasys Expertise</title>
    <meta name="description" content="Agence spécialisée à <?= $ville_nom ?>">
</head>

<body class="main-index">
    <?php require_once '../../../components/header.php'; ?>
    <!-- ----------------- PARTIE 1 ----------------- -->
<?php
    $part1_title = $ville_h2_contact; 
    $part1_paragraph_html = [
    "Donnez vie à votre projet web à " . $ville_nom . " avec une agence spécialisée :",
    "bénéficiez d'une vitrine unique."
    ];
    $part1_btn_label      = "Nous Contacter";
    $part1_btn_link       = "contact";
    require_once $base_path . 'components/expertises/expertises-ville/part-1.php';
    ?>
    <!-- ----------------- PARTIE 2 ----------------- -->
<?php
   $part2_title = "Comprendre le Design";
   $part2_texts = [
    "La création d'un site internet permet de <strong>développer une présence en ligne personnalisée et performante, essentielle pour toute entreprise ou projet</strong> souhaitant se démarquer.",
    "<strong>Grâce aux outils no code, il est désormais possible de concevoir un site sur mesure, même sans connaissances techniques en développement informatique.</strong>",
    "<strong>Les avantages de créer son propre site internet sont nombreux</strong> et expliquent l'engouement actuel pour cette pratique."
    ];

   $part2_blocks = [ 
   ["img"=>"uploads/default.webp", "title"=>"Une qualité esthétique inégalée", "text"=>"Un site internet nouvellement créé bénéficie d'un design contemporain et intuitif, conçu sur mesure pour répondre à vos besoins et à l'image de votre marque. En utilisant des outils de création de pointe, tels que Webflow, votre site se démarquera par son esthétisme et son ergonomie."],
   ["img"=>"uploads/default.webp", "title"=>"Un site 100% personnalisé", "text"=>"La création de votre site internet s'appuie sur des technologies de pointe, offrant une interface de gestion conviviale pour faciliter la mise à jour de votre contenu. Ces technologies intègrent également les meilleures pratiques SEO, garantissant une visibilité optimale sur les moteurs de recherche."],
   ["img"=>"uploads/default.webp", "title"=>"Une interface intuitive", "text"=>"Un site internet flambant neuf, au design soigné et moderne, reflète le professionnalisme et le sérieux de votre entreprise. Il inspire confiance aux visiteurs et renforce l'image positive de votre marque"],
   ["img"=>"uploads/default.webp", "title"=>"Aucun frais caché", "text"=>"Votre nouveau site internet devient un véritable atout marketing. Son design attrayant et sa navigation intuitive incitent les visiteurs à explorer votre offre et à passer à l'action, maximisant ainsi l'impact de vos campagnes marketing et améliorant votre taux de conversion."]
   
   ];
   require_once $base_path . 'components/expertises/expertises-ville/part-2.php';
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

   require_once $base_path . 'components/expertises/expertises-ville/part-3.php';
   ?>
   <!-- ----------------- PARTIE 4 ----------------- -->
<?php
   $part4_title = "Pourquoi créer son site avec une agence spécialisée à " . $ville_nom . " ?";
   $part4_btn_label = "Nous Contacter";
   $part4_btn_link  = "contact";
   
   $part4_paragraphs = [
    "<strong>Une agence à " . $ville_nom . " spécialisée en création de sites internet conçoit votre plateforme web de A à Z, en veillant à l'harmonie entre esthétique, ergonomie et performance. </strong>Elle prend en charge le design visuel, l'expérience utilisateur et l'optimisation pour les moteurs de recherche.",
    "Pour chaque projet, <strong>une agence compétente mobilise une équipe pluridisciplinaire composée d'un designer, d'un développeur et d'un expert SEO</strong>. Ces professionnels combinent leurs savoir-faire en matière d'expérience utilisateur (UX) et de référencement naturel (SEO) pour <strong>créer un site performant, capable d'attirer un public qualifié et de convertir les visiteurs en clients</strong>.",
    "En choisissant une agence plutôt qu'un freelance, vous bénéficiez d'une qualité de service supérieure, d'une fiabilité accrue et d'une complémentarité des expertises. De plus, <strong>les tarifs des agences sont souvent plus compétitifs que ceux des freelances réputés</strong>.",
    "<strong>L'objectif d'une agence est de vous livrer un site internet à la hauteur de vos attentes, optimisé pour un bon référencement sur Google. Un site attractif ne suffit pas : il doit également être visible pour générer du trafic et avoir un impact réel sur votre activité.</strong>"
];
   require_once $base_path . 'components/expertises/expertises-ville/part-4.php';
?>
<!-- ----------------- PARTIE 5 ----------------- -->
<?php
   $work_title = "Comment travaille une agence spécialisée dans la création de sites à " . $ville_nom . " ?";
   $work_img_src = "uploads/default.webp";
   $work_img_alt = "Equipe de designers au travail";

   $work_steps = [
       [
           "number"      => "1",
           "title"      => "Cadrage",
           "paragraphs" => [
               "<strong>La première étape consiste à élaborer un cahier des charges précis avec vous, en collaboration avec le chef de projet de l'agence. </strong>Ce document est rédigé après une phase d'échange et d'analyse approfondie de votre entreprise, de votre secteur d'activité, de votre cible, de vos enjeux, de votre image de marque, de vos aspirations et de vos objectifs."
           ]
       ],
       [
           "number"     => "2",
           "title"      => "Conception",
           "paragraphs" => [
               "La phase de conception débute par un travail approfondi sur l'expérience utilisateur (UX) et la structure du site. <strong>L'agence travaille l'architecture et l'arborescence du site pour optimiser la navigation. </strong>",
               "Le designer vous présente ensuite différentes maquettes, explorant une variété de styles visuels et d’univers. Une fois la maquette choisie, elle est affinée dans les moindres détails, tant sur le plan de l'UX que de l'esthétique.<strong> L'affichage du site est également optimisé pour s'adapter à tous les types d'appareils : ordinateurs, tablettes et smartphones.</strong>"
           ]
       ],
       [
           "number"     => "3",
           "title"      => "Développement",
           "paragraphs" => [
               "La maquette finalisée est transmise au développeur, qui la transforme en un site internet fonctionnel et interactif. <strong>Une attention particulière est portée à l'optimisation technique, garantissant des performances optimales et une base solide pour le référencement naturel (SEO).</strong>",
               "<strong>En fin de projet, un expert SEO réalise un audit complet du site</strong> pour s'assurer qu'il est parfaitement optimisé pour les moteurs de recherche."
           ]
       ],
   ];
   require_once $base_path . 'components/expertises/expertises-ville/part-5.php';
   ?>

<!-- ----------------- PARTIE 6 ----------------- -->

<?php  
   $part6_title = "Comment doit être composée une agence spécialisée en création de sites internet à " . $ville_nom . " ?";
   $part6_intro = "Une agence de création de sites internet performante <strong>doit impérativement réunir les professionnels suivants</strong> :";
   $part6_list = [
        "Un designer spécialisé en expérience utilisateur (UX),",
        "Un développeur web,",
        "Un expert en référencement naturel (SEO)."
    ];
   $part6_paragraphs = [
       "<strong>Ces trois expertises sont indispensables pour garantir la réussite de votre projet web.</strong> Votre site doit être visuellement attractif, facile à utiliser, techniquement irréprochable et optimisé pour les moteurs de recherche.",
       "<strong>La finalité est de faire de votre site internet un outil marketing puissant, capable d'attirer de nouveaux visiteurs, de les engager et de les convertir en clients. </strong>Pour cela, il doit être à la fois esthétique, intuitif et persuasif, incitant les utilisateurs à interagir avec votre marque et à choisir vos produits ou services."
   ];
   require_once $base_path . 'components/expertises/expertises-ville/part-6.php';
?>

<!-- ----------------- PARTIE 7 ----------------- -->
<?php
   $part7_title = "Durée et coût de la création d'un site à " . $ville_nom;
   $part7_paragraphs = [
       "La durée de création d'un site internet varie en fonction de la complexité du projet, du nombre de pages, des fonctionnalités souhaitées et du niveau de personnalisation.",
       "<strong>L'utilisation d'outils de création modernes permet généralement de réduire les délais et les coûts par rapport à un développement entièrement sur mesure.</strong>",
       "<strong>Le coût final dépend du temps nécessaire à la réalisation du projet. Comme les freelances, les agences facturent leurs prestations en fonction d'un Taux Journalier Moyen (TJM) qui peut varier.</strong>",
       "Une agence à " . $ville_nom . " n'est pas forcément plus chère qu'une agence en province : l'expérience et la réputation de l'agence sont généralement les facteurs déterminants."
   ];

   $part7_tarifs = [
       [
           "title"   => "Offre Lancement",
           "img_alt" => "Icône d’audit design",
           "label"   => "Durée moyenne",
           "duration"=> "3 à 6 semaines",
           "tjm"     => "2 000 € à 4 000 €",
           "note"    => "Comprend",
           "bullets" => [
               "Logo et charte graphique",
               "Design sur mesures",
               "Développement sur Webflow",
               "Audit et optimisation SEO"
           ]
       ],
       [
           "title"   => "Offre Croissance",
           "img_alt" => "Icône de site vitrine",
           "label"   => "Durée moyenne",
           "duration"=> "1 à 3 mois",
           "tjm"     => "4 000 € à 20 000 €",
           "note"    => "Comprend",
           "bullets" => [
               "Les avantages de l'Offre Lancement",
               "Réalisation de designs avancés",
               "Réalisation d'animations avancées",
               "Création de multiples pages"
           ]
       ],
       [
           "title"   => "Offre Sur Mesure",
           "img_alt" => "Icône e-commerce",
           "label"   => "Durée moyenne",
           "duration"=> "Durée dépendante du projet",
           "tjm"     => "Sur devis",
           "note"    => "Comprend",
           "bullets" => [
               "Réalisation de sites complexes",
               "Migration et maintien du Référencement",
               "Création de fonctionnalités avancées",
               "Réglage de bugs insolubles"
           ]
       ]
   ];

   $part7_btn_label = $part7_btn_label ?? "Nous Contacter";
   $part7_btn_link  = $part7_btn_link ?? "contact";

   require_once $base_path . 'components/expertises/expertises-ville/part-7.php';
?>

<!-- ----------------- PARTIE 8 ----------------- -->
<?php
   // TITRE
   $part8_title = "Quelques unes de nos réalisations";

   // IMAGE PATTERN
   $part8_pattern = "uploads/pattern-1.webp";

   // --- LOGIQUE DYNAMIQUE : RÉCUPÉRATION DES 2 DERNIERS PROJETS ---
   
   if (!function_exists('getRealisationDataForVille')) {
       function getRealisationDataForVille($filePath) {
           $content = file_get_contents($filePath);
           $data = ['title' => 'Projet', 'img_path' => 'uploads/default.webp'];
           
           // Extraction Titre
           if (preg_match('/\$titre_projet\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) {
               $data['title'] = $matches[1];
           }

           // Extraction Image
           if (preg_match('/\$image_mockup\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/s', $content, $matches)) {
               $data['img_path'] = $matches[1];
           } elseif (preg_match('/\$image_mockup\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) {
               $data['img_path'] = $matches[1];
           }
           return $data;
       }
   }

   $part8_projects = [];
   // Chemin relatif : on est dans expertises/ donc on remonte d'un niveau pour accéder à nos-realisations
   $target_dir = __DIR__ . '/../nos-realisations'; 
   $dirs = glob($target_dir . '/*', GLOB_ONLYDIR);

   if ($dirs) {
       // On inverse pour avoir les derniers ajouts en premier
       $dirs = array_reverse($dirs); 
       
       $count = 0;
       foreach ($dirs as $dir) {
           if ($count >= 2) break; // Limite à 2 projets
           
           $indexFile = $dir . '/index.php';
           if (file_exists($indexFile)) {
               $folderName = basename($dir);
               $data = getRealisationDataForVille($indexFile);
               
               // Gestion URL Image
               $fullImgUrl = (strpos($data['img_path'], 'http') === 0) 
                    ? $data['img_path'] 
                    : $data['img_path'];

               $part8_projects[] = [
                   // HREF vers .exp-real-item
                   "href"  => "nos-realisations/" . $folderName . "/",
                   
                   // IMG
                   "img"   => $fullImgUrl,
                   
                   // TITRE vers .exp-real-info h3
                   "title" => $data['title']
               ];
               $count++;
           }
       }
   }

   // BOUTON TOUT VOIR
   $part8_all_link  = "nos-realisations/";
   $part8_all_label = "Tout voir";

   require_once $base_path . 'components/expertises/expertises-ville/part-8.php';
   ?>

<!-- ----------------- PARTIE 9 ----------------- -->

<?php 
   $why_title = "Pourquoi choisir Afalence ?";
   $why_paragraphs = [
       "Afalence est une agence spécialisée dans la création de sites internet basée à " . $ville_nom . ".",
       "Son équipe d'experts aux compétences complémentaires mettra tout en œuvre pour réaliser votre projet avec rigueur, créativité et passion.",
       "<strong>Vous bénéficierez ainsi d'un site internet unique, performant et parfaitement aligné avec vos objectifs.</strong>"
   ];

   $why_pattern_src = "uploads/pattern-1.webp";
   $why_pattern_alt = "pourquoi-nous-choisir";

   $why_btn_label = "Nous contacter";
   $why_btn_link  = "contact";

   $why_cards = [
       [
           "text" => "3 expertises<br> complémentaires : UX<br> Design,Développement, SEO",
           "img"  => "uploads/Picto/pattern-1.webp",
           "alt"  => "pattern"
       ],
        [
           "text" => "Travail approfondi de l’UX<br>pour optimiser la rétention<br>et la conversion de votre site",
           "img"  => "uploads/Picto/pattern-1.webp",
           "alt"  => "pattern"
       ],
       [
           "text" => "Création de site sur<br>mesure au pixel près.",
           "img"  => "uploads/Picto/pattern-1.webp",
           "alt"  => "pattern"
       ],
        [
           "text" => "Développeur fullstack<br>expérimenté sans<br>limitations dues au no code",
           "img"  => "uploads/Picto/pattern-1.webp",
           "alt"  => "pattern"
       ],
        [
           "text" => "Optimisation de votre<br>site pour favoriser son<br>référencement sur Google",
           "img"  => "uploads/Picto/pattern-1.webp",
           "alt"  => "pattern"
       ],
   ];
   require_once $base_path . 'components/expertises/expertises-ville/part-9.php';
?>
<!-- ----------------- PARTIE 10 ----------------- -->
<?php
   $part10_title = $part10_title ?? "Avis clients";
   $cat_reviews = [
       ["name" => "Jean Dupont", "job" => "Airbus", "text" => "Service impeccable.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
       ["name" => "Marie", "job" => "Vinci", "text" => "Très pro.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
       ["name" => "Pierre", "job" => "Thales", "text" => "Réactifs.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
       ["name" => "Sophie", "job" => "Renault", "text" => "Top.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
       ["name" => "Luc", "job" => "Dior", "text" => "Parfait.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"]
   ];
   require_once $base_path . 'components/expertises/expertises-ville/part-10.php';
   ?>
   <!-- ----------------- PARTIE 11 ----------------- -->
<?php
   $part11_kicker = "Contactez nos équipes";
   $part11_title  = "Discutons de vos besoins";
   $part11_paragraph_html = "Vous cherchez <strong>une agence web</strong> de confiance pour votre projet ? <strong>Contactez-nous</strong> et découvrez comment nous pouvons vous aider.";
   require_once $base_path . 'components/expertises/expertises-ville/part-11.php';
   ?>

<?php require_once '../../../components/footer.php'; ?>
</body>