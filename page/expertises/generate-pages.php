<?php
// expertises/generate-pages.php

// UTILISATION DE __DIR__ POUR FORCER LE CHEMIN ABSOLU
$config_path = __DIR__ . '/data-villes.php';

if (!file_exists($config_path)) {
    die("ERREUR CRITIQUE : Le fichier data-villes.php est introuvable ici : " . $config_path);
}

require_once $config_path;

// VÉRIFICATION DE LA VARIABLE
if (!isset($villes_config)) {
    die("ERREUR : Le fichier data-villes.php a été trouvé mais la variable \$villes_config n'existe pas dedans.");
}

echo "<h1>Génération des pages villes...</h1>";

foreach ($villes_config as $slug => $data) {
    // Nom du dossier à créer (ex: expertises-bordeaux)
    $folder_name = __DIR__ . '/' . $slug;
    
    // 1. Créer le dossier s'il n'existe pas
    if (!is_dir($folder_name)) {
        if (mkdir($folder_name, 0755, true)) {
            echo "✅ Dossier créé : expertises-$slug <br>";
        } else {
            echo "❌ Erreur : Impossible de créer le dossier expertises-$slug (Problème de permissions ?)<br>";
            continue;
        }
    } else {
        echo "ℹ️ Le dossier existe déjà : expertises-$slug <br>";
    }

    // 2. Contenu du fichier index.php qui sera créé dans le sous-dossier
    // Note : On utilise aussi __DIR__ . '/../' pour remonter proprement
    $php_content = "<?php
    require_once __DIR__ . '/../data-villes.php';
    \$city_slug = '$slug';
    \$city_data = \$villes_config[\$city_slug] ?? null;
    
    // Définition du base_url relatif pour remonter de deux crans (expertises/ville/ -> root)
    \$base_url = '../../'; 

    require_once __DIR__ . '/../template-ville.php';
    ?>";

    // 3. Écrire le fichier
    if (file_put_contents($folder_name . '/index.php', $php_content)) {
        echo "📄 Fichier index.php généré pour : " . $data['name'] . "<br>";
    } else {
        echo "❌ Erreur d'écriture du fichier index.php pour $slug <br>";
    }
}

echo "<h2>Terminé ! <a href='index.php'>Retour à l'index</a></h2>";
?>