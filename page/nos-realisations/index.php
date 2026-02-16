<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflasys all réalisations</title>
    <meta name="description" content="">
</head>

<body class="main-all-real">
    <?php require_once '../../components/header.php'; ?>


<!-- ----------------- PARTIE 1 ----------------- -->
   <?php

    //LOGIQUE DYNAMIQUE : SCAN DES RÉALISATIONS

    
     // Fonction utilitaire pour extraire les variables PHP d'un fichier sans l'exécuter.
     // On cherche les variables correspondant aux sélecteurs CSS demandés :
     // - $titre_projet       (correspond à .real-hero-content h1 div)
     // - $description_projet (correspond à .real-specs-text div)
     // - $image_mockup       (correspond à .real-hero img src)
     
    function getRealisationData($filePath) {
        $content = file_get_contents($filePath);
        $data = [
            'title' => 'Projet sans titre',
            'desc'  => '',
            'img_path' => 'uploads/default.png' // Fallback
        ];

        // 1. Extraction du TITRE ($titre_projet)
        if (preg_match('/\$titre_projet\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) {
            $data['title'] = $matches[1];
        }

        // 2. Extraction de la DESCRIPTION ($description_projet)
        if (preg_match('/\$description_projet\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) {
            $data['desc'] = $matches[1];
        }

        // 3. Extraction de l'IMAGE ($image_mockup)
        // Cas A : $image_mockup = "uploads/img.png";
        if (preg_match('/\$image_mockup\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/s', $content, $matches)) {
            $data['img_path'] = $matches[1];
        } 
        // Cas B : $image_mockup = "http://..."; (lien direct)
        elseif (preg_match('/\$image_mockup\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) {
            $data['img_path'] = $matches[1];
        }

        return $data;
    }

    // Initialisation des tableaux de données
    $all_cas_client_part_1 = []; // Pour le Slider (Part 1)
    $projects = [];              // Pour la Grille (Part 2)

    // Scan des sous-dossiers dans le dossier courant
    $dirs = glob(__DIR__ . '/*', GLOB_ONLYDIR);

    foreach ($dirs as $dir) {
        $indexFile = $dir . '/index.php';

        // On ne traite que les dossiers contenant un index.php
        if (file_exists($indexFile)) {
            $folderName = basename($dir); // ex: armelle-creperie
            
            // Extraction des données
            $data = getRealisationData($indexFile);

            // Reconstitution de l'URL de l'image (si ce n'est pas déjà une URL absolue)
            $fullImgUrl = (strpos($data['img_path'], 'http') === 0) 
                ? $data['img_path'] 
                : $data['img_path'];

            // 1. Remplissage pour le Slider (Part 1)
            $all_cas_client_part_1[] = [
                'title' => $data['title'],
                'desc'  => $data['desc'],
                'img'   => $fullImgUrl
            ];

            // 2. Remplissage pour la Grille (Part 2)
            $projects[] = [
                'title'       => $data['title'],
                'image'       => $fullImgUrl,
                'description' => $data['desc'],
                // Lien vers le dossier (ex: nos-realisations/nom-dossier/)
                'link'        => 'nos-realisations/' . $folderName . '/'
            ];
        }
    }
require_once $base_path . 'components/nos-realisations/part-1.php';
?>

<!-- ----------------- PARTIE 2 ----------------- -->

<?php
// --- Configuration des Textes ---
$subtitle = "Projets et réalisations";
$mainTitle = "Notre agence en action";
$btnLabel = "Détail de la prestation";

require_once $base_path . 'components/nos-realisations/part-2.php';
?>

<!-- ----------------- PARTIE 3 ----------------- -->

<?php
   // CONFIGURATION TEXTES
   $part11_kicker         = "Contactez nos équipes";
   $part11_title          = "Discutons de vos besoins";
   
   $part11_paragraph_html = "Vous cherchez <strong>une agence web</strong> de confiance pour votre projet ? <strong>Contactez-nous</strong> et découvrez comment nous pouvons vous aider.";

   require_once $base_path . 'components/nos-realisations/part-3.php';
   ?>

<?php require_once '../../components/footer.php'; ?>
</body>
</html>