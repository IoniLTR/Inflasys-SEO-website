<?php 
/* --------------------------------------------------------------
   VARIABLES
   -------------------------------------------------------------- 
 <?php
$cat_logos_title = "Ils nous font confiance dans ce secteur";
$cat_logos_list  = [
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"
];

   require_once $base_path . 'components/expertises/expertises-ville/part-3.php';
   ?>
  -------------------------------------------------------------- */
?>

<style>
.cat-index-3 {
    background-color: #F9FAFB; /* Gris très clair */
    padding: 6.94vw 130px;
    width: 100%;
    max-width: 2560px;
    margin: 0 auto;
}

.cat-title-index-3 {
    text-align: center;
    margin-bottom: 4vw;
}

.cat-title-index-3 h2 {
    font-size: 2.22vw;
    color: #0A1A2F;
    font-weight: 700;
}

.cat-logos-grid {
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    gap: 3vw 1vw;
}

.cat-logo-item {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 4vw;
    opacity: 0.5;
    transition: 0.3s;
}

.cat-logo-item:hover { opacity: 1; transform: scale(1.05); }

.cat-logo-item svg, .cat-logo-item img {
    max-width: 80%; max-height: 100%; fill: #0A1A2F;
}

@media (max-width: 1024px) {
    .cat-index-3 { padding: 60px 20px; }
    .cat-title-index-3 h2 { font-size: 24px; }
    .cat-logos-grid { grid-template-columns: repeat(4, 1fr); gap: 20px; }
    .cat-logo-item { height: 50px; }
}
@media (max-width: 425px) {
    .cat-logos-grid { grid-template-columns: repeat(2, 1fr); }
    .cat-logo-item:nth-child(n+17) { display: none; }
}
</style>

<section class="cat-index-3">
    <div class="cat-title-index-3">
        <h2><?= htmlspecialchars($cat_logos_title, ENT_QUOTES, 'UTF-8') ?></h2>
    </div>
    <div class="cat-logos-grid">
        <?php foreach($cat_logos_list as $logo): ?>
            <div class="cat-logo-item">
                <img src="<?php echo $images_url ?><?= htmlspecialchars($logo, ENT_QUOTES, 'UTF-8') ?>" alt="logo-client">
            </div>
        <?php endforeach; ?>
    </div>
</section>