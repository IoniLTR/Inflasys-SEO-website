<?php
    require_once __DIR__ . '/../data-villes.php';
    $city_slug = 'reims';
    $city_data = $villes_config[$city_slug] ?? null;
    
    // Définition du base_url relatif pour remonter de deux crans (expertises/ville/ -> root)
    $base_url = '../../'; 

    require_once __DIR__ . '/../template-ville.php';
    ?>