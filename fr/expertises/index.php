<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflasys Expertise</title>
    <meta name="description" content="">
</head>

<body class="main-index">
    <?php require_once '../../components/header.php'; ?>

<!-- ----------------- PARTIE 1 ----------------- -->
   <?php
   $hero_title     = "Agence Site Internet Webflow d'Afalence";
   $hero_text      = "Découvrez les éléments importants dans la sélection de l'agence Webflow à laquelle vous confiez votre projet de site internet.";
   $hero_btn_label = 'Nous contacter';
   $hero_btn_link  = 'contact/';
   $hero_img_src   = 'uploads/default.webp';
   $hero_img_alt   = 'Interface de contrôle industriel Airtechnic';

   require_once $base_path . 'components/expertises/part-1.php';
   ?>
<!-- ----------------- PARTIE 2 ----------------- -->
   <?php
   // DATA SIMULÉE
   $avantage_use_produit_title = "Les avantages d’un site Webflow";
   $avantage_use_produit_title_paragraphe = "Webflow est l’outil de développement de sites sur mesure le plus performant aujourd’hui. Moderne et permissif, il est le meilleur substitut aux autres CMS tels que Wordpress, Squarespace ou Wix.";

   $avantage_use_produit_mini_title = "Voici 3 des avantages les plus différenciants que vous offre un site réalisé avec Webflow :";

   $avantage_use_produit_steps = [
       [
           "number"     => "01",
           "title"      => "La liberté",
           "paragraphs" => ["Webflow permet de <strong>créer un site intégralement sans la moindre contrainte.</strong>Les sites Webflow sont donc plus personnalisables et souvent plus beaux que ceux des concurrents."]
       ],
       [
           "number"     => "02",
           "title"      => "Le prix",
           "paragraphs" => ["Webflow propose 3 formules d’hébergement fixes.Il n’y a <strong>pas de frais cachés ni de frais additionnels</strong> engendrés par l’utilisation d’une fonctionnalité, d’un plugin ou encore l’augmentation de l’activité."]
       ],
       [
           "number"     => "03",
           "title"      => "L'interface administrateur",
           "paragraphs" => ["L’interface de gestion interne des sites Webflow est particulièrement simple et intuitive. <strong>L’ajout et la modification de contenus et photos sont ainsi très aisés.</strong>"]
       ],
   ];

   require_once $base_path . 'components/expertises/part-2.php';
   ?>
<!-- ----------------- PARTIE 3 ----------------- -->
   <?php
   $bien_choisir_title = "Bien choisir son agence Webflow";
   $bien_choisir_img = "uploads/default.webp";
   
   $bien_choisir_paragraphs = [
      "Choisir de réaliser son site avec Webflow est une excellente décision. Il faut ensuite déterminer dans quel contexte va être réalisé le développement du site.",
      "Voici les étapes nécessaires pour façonner un site sur mesure et performant :" 
   ];
   

   $bien_choisir_liste = [
       "Avoir une identité d'entreprise et une <strong>charte graphique</strong>",
       "<strong>Déterminer les cibles</strong> du site et le positionnement",
       "Travailler sur l’<strong>expérience utilisateur souhaitée</strong>",
       "<strong>Concevoir le wireframe</strong> (squelette de la maquette, organisation et arborescence du site). Cette étape donne souvent lieu à des tests utilisateurs.",
       "<strong>Créer la maquette digitale</strong>. Cela revient à habiller le wireframe retenu et faire en sorte d’avoir un site esthétique, dont l’interface utilisateur (UI) est soignée.",
       "<strong>Assurer la bonne transmission de la maquette au(x) développeur(s) </strong>afin que leur travail soit fidèle à la maquette réalisée. Un designer qui optimise ses maquettes pour le développement ou qui est habitué à travailler avec les développeurs peut vivement faciliter leur travail.",
       "<strong>Vérifier que le site développé soit accessible et responsive.</strong> Cela signifie qu’il doit fonctionner sur tous les types d’écrans (mobiles, tablettes, ordinateurs...) et pour tous les utilisateurs.",
       "<strong>Auditer la capacité du site à performer sur les moteurs de recherche</strong>. Cela revient à analyser dans quelle mesure le site est optimisé pour le référencement naturel (SEO)."
   ];
   require_once $base_path . 'components/expertises/part-3.php';
   ?>
<!-- ----------------- PARTIE 4 ----------------- -->
   <?php
$cat_logos_title = "Ils nous ont fait confiance";
$cat_logos_list  = [
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"
];

   require_once $base_path . 'components/expertises/part-4.php';
   ?>
<!-- ----------------- PARTIE 5 ----------------- -->
  <?php
   $part4_title = "Nos derniers conseils pour la sélection de votre agence Webflow";
   $part4_btn_label = "Nous contacter";
   $part4_btn_link  = "contact/";

   // ICI : Vous pouvez utiliser <strong>, <b>, <br> et <a>
   $part4_paragraphs = [
       "Dans la mesure où de nombreuses étapes et de nombreux paramètres sont à prendre en considération pour la réussite d’un projet de site internet, <strong>nous recommandons vivement de travailler avec une </strong><a href=\"" . ($base_url ?? '') . "expertises/expertises-ville/\"><strong>agence Webflow</strong></a><strong> capable de fournir l’intégralité des compétences requises.</strong>",
       "<strong>Cela vous assure que votre prestataire maîtrise tous les sujets évoqués,</strong> mais aussi et surtout que les intervenants qui vont travailler sur votre site sont habitués à travailler ensemble.",
       "<strong>Cela réduit les coûts car cela fait gagner du temps à tous</strong>. Par ailleurs, cela vous évite également d’avoir de mauvaises surprises puisque l’agence est responsable et investie sur l’ensemble de la création.",
       "Afalence a rédigé des articles sur les sujets évoqués ci-dessus. Vous pouvez par exemple poursuivre votre découverte de <a href=\"" . ($base_url ?? '') . "nos-articles/articles/\">ce qu’est le web design</a>, découvrir <a href=\"" . ($base_url ?? '') . "nos-articles/articles/\">en quoi consiste une refonte de site internet et combien elle coûte</a>, ou encore quoi attendre d’<a href=\"" . ($base_url ?? '') . "nos-articles/articles/\">un accompagnement SEO de qualité.</a>"
    ];
   require_once $base_path . 'components/expertises/part-5.php';
   ?>
<!-- ----------------- PARTIE 6 ----------------- -->
<?php /*
   $part8_title = "Derniers Déploiements";
   $part8_pattern = "uploads/Picto/pattern-1.webp";
   
   // --- LOGIQUE DYNAMIQUE : RÉCUPÉRATION DES 2 DERNIERS PROJETS ---
   
   // 1. Définition de la fonction d'extraction (si elle n'existe pas déjà)
   if (!function_exists('getRealisationDataForExpertise')) {
       function getRealisationDataForExpertise($filePath) {
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
   // Chemin vers le dossier nos-realisations (on remonte d'un cran)
   $target_dir = __DIR__ . '/../nos-realisations'; 
   $dirs = glob($target_dir . '/*', GLOB_ONLYDIR);
   
   // On inverse pour avoir les derniers ajouts en premier (selon le système de fichier)
   $dirs = array_reverse($dirs); 
   
   $count = 0;
   foreach ($dirs as $dir) {
       if ($count >= 2) break; // On s'arrête à 2 projets
       
       $indexFile = $dir . '/index.php';
       if (file_exists($indexFile)) {
           $folderName = basename($dir);
           $data = getRealisationDataForExpertise($indexFile);
           
           // Gestion URL Image
           $fullImgUrl = (strpos($data['img_path'], 'http') === 0) ? $data['img_path'] : $data['img_path'];

           $part8_projects[] = [
               // Lien dynamique vers le dossier du projet
               "href"  => "nos-realisations/" . $folderName . "/",
               // Image extraite
               "img"   => $fullImgUrl,
               // Titre extrait
               "title" => $data['title']
           ];
           $count++;
       }
   }

   $part8_all_link  =  "nos-realisations/";
   $part8_all_label = "Tout voir";
   
   require_once $base_path . 'components/expertises/part-6.php';
*/ ?>
<!-- ----------------- PARTIE 7 ----------------- -->
   <?php
   $part11_kicker         = "Contactez nos équipes";
   $part11_title          = "Discutons de vos besoins";
  
   $part11_paragraph_html = "Vous cherchez une <strong>agence web</strong> de confiance pour votre projet&nbsp;?<strong> Contactez-nous</strong> et découvrez comment nous pouvons vous aider.";
   
   require_once $base_path . 'components/expertises/part-7.php';
   ?>
<!-- ----------------- PARTIE 8 ----------------- -->
<?php /*
   // 1. Charger les données
   require_once __DIR__ . '/data-villes.php';

   $part8_title = "Nos Agences Webflow en France";
   
   // 2. Image unique pour toutes les cartes (comme demandé)
   $image_unique_pour_tous = "uploads/default.webp";

   // 3. Construire le tableau de projets dynamiquement
   $part8_projects = [];

   foreach ($villes_config as $slug => $data) {
       $part8_projects[] = [
           // href = nom du sous-dossier (expertises-ville)
           "href" => "expertises/expertises-" . $slug . "/", 
           
           // img = seule et même image
           "img" => $image_unique_pour_tous, 
           
           // h3 = .contact-ville-col-1 h2 (qui est stocké dans 'contact_title')
           "title" => $data['contact_title'] 
       ];
   }

   require_once $base_path . 'components/expertises/part-8.php';
   */ ?>

<!-- JS de l'accordéon (ton fichier existant) -->
<script src="js/open-spec.js"></script>

<?php require_once '../../components/footer.php'; ?>
</body>

