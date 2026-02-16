<?php
// 1. Récupération de votre variable globale
// (Assurez-vous que ce fichier est bien inclus ou que la variable est définie ici)
require_once 'config.php'; 

// Sécurité : On enlève le slash final de $root_url s'il existe, pour éviter les erreurs
$base = rtrim($root_url, '/');

// 2. Détection de la langue
$lang_dest = 'en'; // Langue par défaut (anglais)

if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $lang_nav = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if ($lang_nav === 'fr') {
        $lang_dest = 'fr';
    }
}

$url_finale = $base . '/' . $lang_dest . '/';

// 4. Redirection
header("Location: " . $url_finale);
exit();
?>