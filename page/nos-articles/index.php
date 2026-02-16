<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflasys all article</title>
    <meta name="description" content="">
</head>

<body class="main-index">
    <?php require_once '../../components/header.php'; ?>

<!-- ----------------- PARTIE 1 ----------------- -->
 
<?php
    $title_article_title = "Les articles d'Afalence";
    $title_article_paragraph_html = "Astuces, tutos, recommandations : vous trouverez ici tous les articles que nous avons rédigés pour vous transmettre toutes les informations dont vous pouvez avoir besoin pour comprendre notre environnement de travail et nos méthodes !";
   
   require_once $base_path . 'components/nos-articles/part-1.php';
   ?>
<!-- ----------------- PARTIE 2 ----------------- -->
<?php

// --- 1. CONFIGURATION ---
$titre_section_filtres = "Filtrer les articles que vous souhaitez consulter :";
$nombre_articles_page  = 6; 

// --- 2. INITIALISATION ---
$mes_articles = [];
$mes_filtres = []; // On commence avec une liste vide
$dossier_racine = __DIR__; 
$sous_dossiers = glob($dossier_racine . '/*', GLOB_ONLYDIR);

// --- 3. SCAN ET GÉNÉRATION AUTOMATIQUE (ARTICLES + FILTRES) ---
foreach ($sous_dossiers as $dossier) {
    $fichier_article = $dossier . '/index.php';

    if (file_exists($fichier_article)) {
        
        $contenu = file_get_contents($fichier_article);

        // -- A. Extraction des données --
        
        // Titre
        preg_match('/\$article_title\s*=\s*["\'](.*?)["\'];/', $contenu, $titre_match);
        $titre = $titre_match[1] ?? 'Titre non défini';

        // Auteur
        preg_match('/\$author_firstname\s*=\s*["\'](.*?)["\'];/', $contenu, $prenom_match);
        preg_match('/\$author_lastname\s*=\s*["\'](.*?)["\'];/', $contenu, $nom_match);
        $auteur = ($prenom_match[1] ?? '') . ' ' . ($nom_match[1] ?? '');

        // Tag (ex: "Article SEO")
        preg_match('/\$article_tag\s*=\s*["\'](.*?)["\'];/', $contenu, $tag_match);
        $tag_brut = $tag_match[1] ?? 'Divers';

        // Image
        preg_match('/\$article_bg_img\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/', $contenu, $img_match);
        $image_complete = ($img_match[1] ?? 'uploads/default.png');

        // Description
        preg_match('/\'content\'\s*=>\s*["\'](.*?)["\']/', $contenu, $desc_match);
        $description = $desc_match[1] ?? 'Lire la suite...';

        // Lien (Dossier)
        $lien = "nos-articles/" . basename($dossier) . "/";


        // -- B. Logique des Filtres (Automatique) --
        
        // 1. On nettoie le nom pour l'affichage (Enlève "Article " si présent)
        $label_filtre = str_replace('Article ', '', $tag_brut); // ex: "Article SEO" devient "SEO"
        
        // 2. On crée une clé unique (slug) en minuscule pour le code HTML
        $slug_filtre = strtolower(trim($label_filtre)); // ex: "seo"

        // 3. Ajout au tableau $mes_filtres (Les clés écrasent les doublons automatiquement)
        if (!empty($slug_filtre)) {
            $mes_filtres[$slug_filtre] = $label_filtre;
        }


        // -- C. Ajout de l'article --
        $mes_articles[] = [
            'titre'       => $titre,
            'auteur'      => trim($auteur) ?: 'Équipe',
            'description' => html_entity_decode($description),
            'categorie'   => $slug_filtre, // Doit correspondre à la clé du filtre
            'etiquette'   => $label_filtre, // On affiche le label propre
            'image'       => $image_complete,
            'lien'        => $lien,
            'bouton'      => "Lire l'article"
        ];
    }
}

// Optionnel : Trier les filtres par ordre alphabétique pour faire propre
asort($mes_filtres);

require_once $base_path . 'components/nos-articles/part-2.php';
?>
<!-- ----------------- PARTIE 3 ----------------- -->
   <?php
   $part11_kicker         = "Contactez nos équipes";
   $part11_title          = "Discutons de vos besoins";
   
   $part11_paragraph_html = "Vous cherchez <strong>une agence web</strong> de confiance pour votre projet ? <strong>Contactez-nous</strong> et découvrez comment nous pouvons vous aider.";

   require_once $base_path . 'components/nos-articles/part-3.php';
   ?>


<?php require_once '../../components/footer.php'; ?>
</body>
