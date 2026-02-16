<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflasys</title>
    <meta name="description" content="">
</head>

<body class="main-all-cas">
    <?php require_once '../../components/header.php'; ?>

<!-- ----------------- PARTIE 1 ----------------- -->
<?php
    $all_cas_client_part_1 = [
        [
            'title' => "Création d'une campagne d'architecte",
            'desc'  => "Airtechnic accompagne une architecte d'intérieur pour qu’elle puisse générer 15 prospects mensuels malgré un marché en crise.",
            'img'   => "uploads/default.png", // Remplace par ta vraie image
            'link'  => "nos-cas-clients/cas-clients/"
        ],
        [
            'title' => "Structure Gonflable Industrielle",
            'desc'  => "Installation d'un hangar temporaire de 500m2 pour un site de production automobile.",
            'img'   => "uploads/default.png",
            'link'  => "nos-cas-clients/cas-clients/"
        ]
    ];
    require_once $base_path . 'components/nos-cas-client/part-1.php';
    ?>
<!-- ----------------- PARTIE 2 ----------------- -->
<?php
   $all_cas_client_part_2_title = 'Cas Client ADS';
   
   $all_cas_client_part_2 = [
       [
           'title' => "Création d'une campagne d'architecte",
           'desc' => "15 prospects par mois pour une architecte d'intérieur",
           'img' => "uploads/default.png",
           'link' => "nos-cas-clients/cas-clients"
       ],
       [
           'title' => "Campagne Google Ads parc aquatique",
           'desc' => "Clients X10 pour un parc aquatique avec une stratégie ciblée",
           'img' => "uploads/default.png",
           'link' => "nos-cas-clients/cas-clients"
       ],
       [
           'title' => "Optimisation de campagne existante",
           'desc' => "Coût par clic divisé par 2 par appel grâce à l'optimisation",
           'img' => "uploads/default.png",
           'link' => "nos-cas-clients/cas-clients"
       ],
       [
           'title' => "Campagne Google Ads traiteur B2B",
           'desc' => "Coût du devis d'un traiteur d'entreprise divisé par 7",
           'img' => "uploads/default.png",
           'link' => "nos-cas-clients/cas-clients"
       ]
   ];

   require_once $base_path . 'components/nos-cas-client/part-2.php';
   ?>
<!-- ----------------- PARTIE 3 ----------------- -->
   <?php
   $all_cas_client_part_3_title = 'Cas clients SEO';
   
   // Données COMPLÈTES
   $all_cas_client_part_3 = [
       [
           'title' => "Création d'une campagne d'architecte",
           'desc' => "15 prospects par mois pour une architecte d'intérieur",
           'img' => "uploads/default.png",
           'link' => "nos-cas-clients/cas-clients"
       ],
       [
           'title' => "Campagne Google Ads parc aquatique",
           'desc' => "Clients X10 pour un parc aquatique avec une stratégie ciblée",
           'img' => "uploads/default.png",
           'link' => "nos-cas-clients/cas-clients"
       ],
       [
           'title' => "Optimisation de campagne existante",
           'desc' => "Coût par clic divisé par 2 par appel grâce à l'optimisation",
           'img' => "uploads/default.png",
           'link' => "nos-cas-clients/cas-clients"
       ],
       [
           'title' => "Campagne Google Ads traiteur B2B",
           'desc' => "Coût du devis d'un traiteur d'entreprise divisé par 7",
           'img' => "uploads/default.png",
           'link' => "nos-cas-clients/cas-clients"
       ]
   ];

   require_once $base_path . 'components/nos-cas-client/part-3.php';
   ?>
<!-- ----------------- PARTIE 4 ----------------- -->
<?php
   $part11_kicker = "Contactez nos équipes";
   $part11_title  = "Discutons de vos besoins";
   
   $part11_paragraph_html = "Vous cherchez <strong>une agence web</strong> de confiance pour votre projet ? <strong>Contactez-nous</strong> et découvrez comment nous pouvons vous aider.";

   require_once $base_path . 'components/nos-cas-client/part-4.php';
   ?>

<?php require_once '../../components/footer.php'; ?>
</body>
