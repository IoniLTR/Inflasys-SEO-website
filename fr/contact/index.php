<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflasys Contact</title>
    <meta name="description" content="Contactez Inflasys pour vos projets de structures gonflables sur mesure.">
</head>

<body class="main-index">
    <?php 
    require_once '../../components/header.php'; 
    ?>

<!-------------------------- Parti 1 -------------------------->
 <?php 
$contact_hero_subtitle = "Donnons vis à vos idées";
$contact_hero_title    = "Ensemble, créons quelque chose de remarquable.";
// Image ou Picto (Utilise un chemin absolu ou relatif correct)
$contact_logo_url = 'uploads/Picto/picto1.webp'; 
require_once $base_path . 'components/contact/part-1.php'; ?>
<!-------------------------- Parti 2 -------------------------->
<?php 
// CONTACT GAUCHE 1
$c2_contact1_name  = "MARCILLY Laurent";
$c2_contact1_role  = "PDG Inflasys";
$c2_contact1_email = "lmarcilly@inflasys.com";
$c2_contact1_tel   = "01 85 09 94 20";
$c2_contact1_tel_link = "+185099420";
$c2_contact1_img   = "uploads/Picto/picto1.webp";

/* CONTACT GAUCHE 2
$c2_contact2_name  = "Olivier Gaires";
$c2_contact2_role  = "Technicien Inflasys";
$c2_contact2_email = "olivier@ze-com.com";
$c2_contact2_tel   = "06 06 54 94 56";
$c2_contact2_tel_link = "+33606549456";
$c2_contact2_img   = "uploads/Picto/picto1.webp";
*/

// PATTERNS
$c2_pattern_src    = "uploads/Picto/pattern-1.webp";
require_once $base_path . 'components/contact/part-2.php'; ?>


<?php require_once $base_path . 'components/footer.php'; ?>
</body>
</html>