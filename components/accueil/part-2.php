<?php 
/* --- CONFIGURATION DE LA SECTION ---
<?php 
$logos_section_title = "Ils nous ont fait confiance";

// Liste des fichiers (Assure-toi que ces fichiers existent bien dans le dossier uploads)
$logos_list = [
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"
];
require_once $base_path . 'components/accueil/part-2.php'; ?>
*/



/* DÉFINITION DES CHEMINS SPÉCIFIQUES À CETTE SECTION
   On utilise les variables globales définies dans header.php ($base_path et $images_url)
*/
// 1. Chemin système (C:/...) pour vérifier si le fichier existe et faire le file_get_contents
$clients_path_sys = $base_path;

// 2. Chemin URL (http://...) au cas où on utilise une balise <img> classique (fallback)
$clients_path_url = $images_url;
?>

<style>
.index-2 {
    display: flex;
    flex-direction: column;
    background-color: #ffffff;
    width: 100%;
    padding: 6.94vw 130px; 
    max-width: 2560px;
    margin: 0 auto;
}

.title-index-2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-bottom: 4vw;
}

.title-index-2 h2 {
    color: #0A1A2F;
    font-size: 2.22vw;
    font-weight: 700;
    margin: 0;
    text-align: center;
}

.title-line {
    width: 4vw;
    height: 3px;
    background-color: #3DA8FF;
    margin-top: 1vw;
}

.svg-index-2 {
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    gap: 3vw 1vw;
    width: 100%;
}

.div-svg-index-2 {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 4vw;
    opacity: 0.6;
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.div-svg-index-2:hover {
    opacity: 1;
    transform: scale(1.05);
}

/* C'est ici que la magie du SVG inline opère grâce au fill */
.div-svg-index-2 svg,
.div-svg-index-2 img {
    max-width: 80%;
    max-height: 100%;
    fill: #0A1A2F; 
    object-fit: contain;
}

.div-svg-index-2 svg path {
    fill: #0A1A2F; /* Force la couleur sur les paths du SVG */
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .index-2 { padding: 60px 20px; }
    .title-index-2 h2 { font-size: 28px; }
    .svg-index-2 { grid-template-columns: repeat(4, 1fr); gap: 30px 15px; }
    .div-svg-index-2 { height: 60px; }
}

@media (max-width: 425px) {
    .svg-index-2 { grid-template-columns: repeat(2, 1fr); }
    .div-svg-index-2:nth-child(n+17) { display: none; }
}
</style>

<section class="index-2">
    <div class="title-index-2">
        <h2><?php echo $logos_section_title; ?></h2>
        <div class="title-line"></div>
    </div>
    
    <div class="svg-index-2">
        <?php foreach($logos_list as $logo_file): ?>
            <div class="div-svg-index-2">
                <?php 
                    $full_sys_path = $clients_path_sys . $logo_file;
                    $full_url_path = $clients_path_url . $logo_file;

                    // 1. On vérifie si le fichier existe sur le serveur
                    if (file_exists($full_sys_path)) {
                        // 2. On récupère l'extension
                        $ext = pathinfo($full_sys_path, PATHINFO_EXTENSION);

                        // 3. Si c'est un SVG, on l'injecte en code (Inline) pour pouvoir changer la couleur
                        if ($ext === 'svg') {
                            echo file_get_contents($full_sys_path);
                        } else {
                            // Sinon (PNG, JPG), on affiche une image classique
                            echo '<img src="' . $full_url_path . '" alt="Client">';
                        }
                    }
                ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>