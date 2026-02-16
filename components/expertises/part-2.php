<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
   // DATA SIMULÉE
   $avantage_use_produit_title = "Les avantages d’un site Webflow";
   $avantage_use_produit_title_paragraphe = "Webflow est l’outil de développement de sites sur mesure le plus performant aujourd’hui. Moderne et permissif, il est le meilleur substitut aux autres CMS tels que Wordpress, Squarespace ou Wix.";

   $avantage_use_produit_mini_title = "Voici 3 des avantages les plus différenciants que vous offre un site réalisé avec Webflow :";

   $avantage_use_produit_steps = [
       [
           "number"     => "01",
           "title"      => "La liberté",
           "paragraphs" => ["Webflow permet de <strong>créer un site intégralement sans la moindre contrainte.</strong>Les sites Webflow sont donc plus personnalisables et souvent plus beaux que ceux des concurrents."]
       ],
       [
           "number"     => "02",
           "title"      => "Le prix",
           "paragraphs" => ["Webflow propose 3 formules d’hébergement fixes.Il n’y a <strong>pas de frais cachés ni de frais additionnels</strong> engendrés par l’utilisation d’une fonctionnalité, d’un plugin ou encore l’augmentation de l’activité."]
       ],
       [
           "number"     => "03",
           "title"      => "L'interface administrateur",
           "paragraphs" => ["L’interface de gestion interne des sites Webflow est particulièrement simple et intuitive. <strong>L’ajout et la modification de contenus et photos sont ainsi très aisés.</strong>"]
       ],
   ];

   require_once $base_path . 'components/expertises/part-2.php';
   ?>
-------------------------------------------------------------- */
?>

<section class="avantage-use-product">
    <div class="avantage-use-product-content">
        <div class="avantage-use-product-title-1">
            <h2><?= htmlspecialchars($avantage_use_produit_title, ENT_QUOTES, 'UTF-8') ?></h2>
            <div><?= htmlspecialchars($avantage_use_produit_title_paragraphe, ENT_QUOTES, 'UTF-8') ?></div>
        </div>

        <div class="avantage-use-product-text">
            <div class="avantage-use-product-mini-title"><?= htmlspecialchars($avantage_use_produit_mini_title, ENT_QUOTES, 'UTF-8') ?></div>
            <?php if (!empty($avantage_use_produit_steps) && is_array($avantage_use_produit_steps)): ?>
                <?php foreach ($avantage_use_produit_steps as $step): ?>
                    <div class="comment-travail-item" onclick="this.classList.toggle('is-open')">
                        <div class="comment-travail-title">
                            <div> <?= htmlspecialchars($step['number'], ENT_QUOTES, 'UTF-8') ?>
                                - <strong><?= htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8') ?></strong>
                            </div>
                            <div class="comment-travail-toggle">+</div>
                        </div>

                        <div class="comment-travail-paragraphe">
                            <?php if (!empty($step['paragraphs']) && is_array($step['paragraphs'])): ?>
                                <?php foreach ($step['paragraphs'] as $p): ?>
                                    <!-- Modification ICI : utilisation de strip_tags pour autoriser le HTML sécurisé -->
                                    <p><?= strip_tags($p, '<strong><b><br><em><u>') ?></p>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<style>
/* ==========================================================================
   CSS EXPERTISES PART-2
   ========================================================================== */
.avantage-use-product {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #F2F9FF; /* Fond clair bleuté (Identique Part-5 exemple) */
    color: #0A1A2F;
    
    padding: 6.94vw 130px;
    width: 100%;
    max-width: 2560px;
    margin: 0 auto;
}

.avantage-use-product-content {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    width: 100%;
    gap: 4vw;
}

/* Colonne Gauche (Titre Sticky) */
.avantage-use-product-title-1 {
    width: 35%;
    position: sticky;
    top: 150px;
    display: flex;
    flex-direction: column;
    gap: 1.5vw;
}

.avantage-use-product-title-1 h2 {
    font-size: 2.5vw;
    font-weight: 700;
    line-height: 1.1;
    color: #0A1A2F;
    margin: 0;
}

.avantage-use-product-title-1 div {
    font-size: 1.1vw;
    line-height: 1.6;
    color: #4B5563;
}

/* Colonne Droite (Accordéons) */
.avantage-use-product-text {
    width: 60%;
}

.avantage-use-product-mini-title {
    font-size: 1vw;
    font-weight: 600;
    color: #3DA8FF;
    text-transform: uppercase;
    margin-bottom: 2vw;
    letter-spacing: 0.05em;
}

.comment-travail-item {
    display: flex;
    flex-direction: column;
    border-bottom: 1px solid #3DA8FF;
    padding: 1.5vw 0;
    cursor: pointer;
}

.comment-travail-title {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    font-size: 1.5vw;
    color: #0A1A2F;
    font-weight: 400;
    transition: color 0.3s;
}

.comment-travail-title strong {
    font-weight: 600;
}

.comment-travail-item:hover .comment-travail-title {
    color: #3DA8FF;
}

.comment-travail-toggle {
    width: 2vw;
    height: 2vw;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2vw;
    font-weight: 300;
    color: #3DA8FF;
    transition: transform 0.35s ease;
}

.comment-travail-paragraphe {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.35s ease;
    color: #4B5563;
}

.comment-travail-paragraphe p {
    font-size: 1vw;
    margin-top: 1vw;
    line-height: 1.6;
}

/* AJOUT : Style pour strong/b dans les paragraphes de l'accordéon */
.comment-travail-paragraphe p strong,
.comment-travail-paragraphe p b {
    color: #0A1A2F; /* Bleu foncé pour contraster avec le gris */
    font-weight: 700;
}

/* État Ouvert */
.comment-travail-item.is-open .comment-travail-paragraphe {
    max-height: 500px;
}
.comment-travail-item.is-open .comment-travail-toggle {
    transform: rotate(45deg);
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .avantage-use-product { padding: 60px 20px; }
    .avantage-use-product-content { flex-direction: column; gap: 40px; }
    
    .avantage-use-product-title-1 { width: 100%; position: static; }
    .avantage-use-product-title-1 h2 { font-size: 28px; }
    .avantage-use-product-title-1 div { font-size: 16px; }

    .avantage-use-product-text { width: 100%; }
    .avantage-use-product-mini-title { font-size: 14px; margin-bottom: 20px; }
    
    .comment-travail-title { font-size: 18px; }
    .comment-travail-toggle { font-size: 24px; width: 24px; height: 24px; }
    .comment-travail-paragraphe p { font-size: 14px; }
}
</style>