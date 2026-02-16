<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflasys article</title>
    <meta name="description" content="">
</head>

<body class="main-index">
    <?php require_once '../../../components/header.php'; ?>

<!-- ----------------- PARTIE 1 ----------------- -->
   <?php
   $article_bg_img = "uploads/default.png"; 
   $breadcrumb_home = "Accueil";
   $breadcrumb_cat = "tous les articles";
   $article_tag = "Article SEO";
   $article_title = "Présentation des 5 meilleurs outils SEO SaaS généralistes en 2025";
   
   $link_cat = "nos-articles/";
   
    require_once $base_path . 'components/nos-articles/articles/part-1.php';
   ?>
<!-- ----------------- PARTIE 2 ----------------- -->
   <?php
   // 1. Définition du contenu de l'article (Blocs)
   $article_blocks = [
       ['type' => 'p', 'content' => "AHrefs est également un outil incontournable du SEO. Il est notamment considéré comme un outil de référence pour l'analyse de backlinks."],
       ['type' => 'h2', 'content' => "II. AHrefs"],
       ['type' => 'img', 'src' => "uploads/default.png", 'alt' => "Logo Ahrefs pixelisé"],
       ['type' => 'p', 'content' => "L'outil propose une analyse concurrentielle très poussée."],
       ['type' => 'p', 'content' => "Il permet de voir les mots-clés sur lesquels vos concurrents se positionnent."]
   ];

   // 2. Variables Sidebar
   $share_title = "Partager cet article :";
   $cta_text = "Parler avec nos experts";
   $cta_subtext = "Contactez nos équipes.";
   $cta_img_pattern = "uploads/pattern-1.webp";
   $link_expert = "contact";

   // 3. Variables Auteur (Signature)
   $author_img = "uploads/default.png";
   $author_firstname = "Arthur";
   $author_lastname = "Aubert";
   $author_role = "Responsable SEO";
   $article_date_update = "28/1/2025";
   $author_contact_link = "contact";
   
   require_once $base_path . 'components/nos-articles/articles/part-2.php';
   ?>
<!-- ----------------- PARTIE 3 ----------------- -->
    <?php
    // Configuration du titre de section
    $section_title = "Voir aussi nos autres articles";

    // --- INITIALISATION AUTOMATIQUE ---
    $articles_data = [];
    
    // On remonte d'un niveau pour scanner le dossier "nos-articles/"
    $dossier_racine = __DIR__ . '/../'; 
    $sous_dossiers = glob($dossier_racine . '*', GLOB_ONLYDIR);
    
    // Optionnel : On mélange les dossiers pour afficher des articles différents à chaque fois
    // Si tu préfères les plus récents, enlève cette ligne et le glob triera par nom par défaut
    shuffle($sous_dossiers); 

    $compteur = 0;
    $current_dir = realpath(__DIR__); // Chemin absolu de l'article actuel pour l'exclusion

    // --- SCAN ET EXTRACTION ---
    foreach ($sous_dossiers as $dossier) {
        
        // 1. Limite stricte à 3 articles
        if ($compteur >= 3) {
            break;
        }

        // 2. Exclusion de l'article courant (pour ne pas proposer la page qu'on lit déjà)
        if (realpath($dossier) === $current_dir) {
            continue;
        }

        $fichier_article = $dossier . '/index.php';

        if (file_exists($fichier_article)) {
            $contenu = file_get_contents($fichier_article);

            // -- A. Extraction des données (Mêmes Regex que ton index principal) --

            // Titre
            preg_match('/\$article_title\s*=\s*["\'](.*?)["\'];/', $contenu, $titre_match);
            $titre = $titre_match[1] ?? 'Titre non défini';

            // Auteur (On prend juste le prénom pour matcher ton style "ARTHUR")
            preg_match('/\$author_firstname\s*=\s*["\'](.*?)["\'];/', $contenu, $prenom_match);
            $auteur = strtoupper($prenom_match[1] ?? 'Inflasys');

            // Tag / Catégorie
            preg_match('/\$article_tag\s*=\s*["\'](.*?)["\'];/', $contenu, $tag_match);
            $tag_brut = $tag_match[1] ?? 'DIVERS';
            // Nettoyage : "Article SEO" devient "SEO"
            $category = strtoupper(str_replace('Article ', '', $tag_brut));

            // Image
            preg_match('/\$article_bg_img\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/', $contenu, $img_match);
            $image_complete = ($img_match[1] ?? 'uploads/default.png');

            // Description (Excerpt) - On prend le premier paragraphe trouvé dans $article_blocks
            preg_match('/\'content\'\s*=>\s*["\'](.*?)["\']/', $contenu, $desc_match);
            $excerpt = html_entity_decode($desc_match[1] ?? 'Lire la suite...');

            // Lien
            $lien = "nos-articles/" . basename($dossier) . "/";

            // -- B. Formatage pour le composant part-3.php --
            // Les clés ici (img, category, author...) correspondent à ce que ton part-3.php utilise dans sa boucle foreach.
            $articles_data[] = [
                'img'      => $image_complete,
                'category' => $category,
                'author'   => $auteur,
                'title'    => $titre,
                'excerpt'  => $excerpt,
                'link'     => $lien
            ];

            $compteur++;
        }
    }

    // Configuration du Bouton "Tout voir"
    $part4_btn_label = "TOUT VOIR";
    $part4_btn_link = "nos-articles/";
    
    require_once $base_path . 'components/nos-articles/articles/part-3.php';
    ?>
<!-- ----------------- PARTIE 4 ----------------- -->
   <?php
   $part11_kicker         = "Contactez nos équipes";
   $part11_title          = "Discutons de vos besoins";
   
   $part11_paragraph_html = "Vous cherchez <strong>une agence web</strong> de confiance pour votre projet ? <strong>Contactez-nous</strong> et découvrez comment nous pouvons vous aider.";

   require_once $base_path . 'components/nos-articles/articles/part-4.php';
   ?>
   

<?php require_once '../../../components/footer.php'; ?>
</body>
