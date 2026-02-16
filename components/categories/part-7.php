<?php
/* --------------------------------------------------------------
   VARIABLES
   --------------------------------------------------------------
   <?php
$part7_title = $part7_title ?? "Durée et prix d’une prestation de Design Web";
$part7_intro_strong = $part7_intro_strong ?? "Le temps et le coût d’une prestation de Web Design dépend intégralement du projet et du chantier à mener.";
$part7_paragraphs = $part7_paragraphs ?? [
    "En effet, une prestation de réalisation de maquette de site internet sera focalisée principalement sur les cibles, la structure et l’esthétique. Une prestation d’audit Design pourra davantage challenger la stratégie, les personae et les points d’interactions souhaités entre l’internaute et le site.",
    "Quel que soit votre besoin, l’agence calculera son prix en fonction du temps à consacrer à votre projet. On parle de TJM (Taux Journalier Moyen) pour faire allusion au coût de travail de l’agence.",
    "<strong>Une agence de qualité effectuera un cadrage complet avec vous, avant de vous faire parvenir des devis précis et détaillés accompagnés d’une roadmap.</strong> Vous aurez ainsi toutes les informations à disposition pour prendre votre décision !"
];
   require_once $base_path . 'components/categories/part-7.php';
   ?>
   -------------------------------------------------------------- */
?>

<style>
.cat-details {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    background-color: #ffffff;
    width: 100%;
    
    /* Alignement Header */
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    
    gap: 5.55vw;
    color: #0A1A2F;
}

.cat-details-cta {
    display: flex;
    flex-direction: column;
    width: 40%;
}
 
.cat-details-cta h2 {
    font-size: 2.5vw;
    font-weight: 700;
    color: #0A1A2F;
    border-left: 4px solid #3DA8FF;
    padding-left: 2vw;
}

.cat-details-text {
    display: flex;
    flex-direction: column;
    width: 60%;
    gap: 2vw;
    font-size: 1.1vw;
    line-height: 1.6;
    color: #4B5563;
}

.cat-details-text strong {
    color: #0A1A2F;
    font-size: 1.3vw;
    font-weight: 600;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .cat-details { flex-direction: column; padding: 60px 20px; gap: 30px; }
    .cat-details-cta, .cat-details-text { width: 100%; }
    .cat-details-cta h2 { font-size: 28px; }
    .cat-details-text { font-size: 16px; }
    .cat-details-text strong { font-size: 18px; }
}
</style>

<section class="cat-details">
    <div class="cat-details-cta">
        <h2><?= htmlspecialchars($part7_title, ENT_QUOTES, 'UTF-8') ?></h2>
    </div>

    <div class="cat-details-text">
        <?php if (!empty($part7_intro_strong)): ?>
            <!-- Ici on NE met pas htmlspecialchars pour conserver le HTML -->
            <p><strong><?= nl2br($part7_intro_strong) ?></strong></p>
        <?php endif; ?>

        <?php foreach ($part7_paragraphs as $p): ?>
            <p><?= nl2br($p) ?></p>
        <?php endforeach; ?>
    </div>
</section>
