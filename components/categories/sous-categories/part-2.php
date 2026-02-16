<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
   // TITRE DE LA SECTION
   $concevoir_product_title = "Qu'est-ce que la conception de logo ?";
   
   // PARAGRAPHE D'INTRO
   $concevoir_product_title_paragraphe = "La conception de logo est le <strong>processus de création d'un symbole graphique qui représente une entreprise ou une marque</strong>. Il sert de <strong>signature visuelle</strong>, encapsulant l'essence de l'entreprise à travers des éléments tels que les <strong>formes</strong>, les <strong>couleurs</strong>, les <strong>typographies</strong> et les <strong>images</strong>.";
   // IMAGE D'ILLUSTRATION (ex: ingénieur sur logiciel CAD ou atelier)
   $concevoir_product_img_src = "uploads/default.webp";
   $concevoir_product_img_alt = "Modélisation 3D d'une structure industrielle";

   // ÉTAPES (accordéon) - Contenu TECHNIQUE
   $concevoir_product_steps = [
       [
           "title"      => "Identité de Marque Forte",
           "paragraphs" => [
               "Un logo efficace contribue à construire une <strong>identité de marque forte</strong>, permettant à votre entreprise d'être <strong>reconnue</strong> et <strong>distinguée </strong>par les consommateurs."
           ]
       ],
        [
           "title"      => "Communication Instantanée",
           "paragraphs" => [
               "<strong>Le logo transmet rapidement des informations clés sur votre entreprise</strong>, telles que le secteur d'activité, les valeurs et la personnalité de la marque."
           ]
       ],
       [
           "title"      => "Professionnalisme et Crédibilité",
           "paragraphs" => [
               "Un logo professionnel renforce la <strong>crédibilité</strong> de votre entreprise, <strong>inspirant confiance et fiabilité auprès des clients potentiels.</strong>"
           ]
       ],
       [
           "title"      => "Avantage Concurrentiel",
           "paragraphs" => [
               "Dans un marché saturé, <strong>un logo unique et mémorable procure un</strong> <strong>avantage concurrentiel</strong>, aidant à attirer et retenir l'attention des clients."
           ]
       ],
   ];

   require_once $base_path . 'components/categories/sous-categories/part-2.php';
   ?>
   ----------------------------------- */
?>


<style>
/* STYLE ISSU DE CATEGORIES PART-5 */
.cat-methodo {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    background-color: #F2F9FF;
    color: #0A1A2F;
}

.cat-methodo h2 {
    font-size: 2.5vw;
    font-weight: 700;
    padding-bottom: 2vw;
    text-align: center;
}

.cat-methodo-intro {
    font-size: 1.1vw;
    text-align: center;
    margin-bottom: 4vw;
    color: #4B5563;
}

/* AJOUT : Style pour les balises strong/b dans l'intro */
/* On utilise le bleu foncé pour contraster avec le gris sur fond clair */
.cat-methodo-intro strong, 
.cat-methodo-intro b {
    color: #0A1A2F; 
    font-weight: 700;
}

.cat-methodo-content {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    width: 100%;
    gap: 4vw;
}

.cat-methodo-img {
    width: 35%;
    position: sticky;
    top: 150px;
}

.cat-methodo-img img {
    width: 100%;
    object-fit: cover;
    aspect-ratio: 4/5;
    border-radius: 4px;
    box-shadow: 0 10px 30px rgba(10, 26, 47, 0.1);
}

.cat-methodo-text {
    width: 60%;
}

.cat-methodo-item {
    display: flex;
    flex-direction: column;
    border-bottom: 1px solid #3DA8FF;
    padding: 1.5vw 0;
}

.cat-methodo-title {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    font-size: 1.5vw;
    cursor: pointer;
    user-select: none;
    color: #0A1A2F;
    font-weight: 600;
    transition: color 0.3s;
}

.cat-methodo-item:hover .cat-methodo-title {
    color: #3DA8FF;
}

.cat-methodo-toggle {
    width: 2vw;
    height: 2vw;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2vw;
    font-weight: 300;
    color: #3DA8FF;
}

.cat-methodo-paragraphe {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.35s ease;
    color: #4B5563;
}

.cat-methodo-paragraphe p {
    font-size: 1vw;
    margin-top: 1vw;
    line-height: 1.6;
}

/* AJOUT : Style pour les balises strong/b dans les paragraphes de l'accordéon */
.cat-methodo-paragraphe p strong, 
.cat-methodo-paragraphe p b {
    color: #0A1A2F; 
    font-weight: 700;
}

.cat-methodo-item.is-open .cat-methodo-paragraphe {
    max-height: 500px;
}
.cat-methodo-item.is-open .cat-methodo-toggle {
    transform: rotate(45deg);
}

@media (max-width: 1024px) {
    .cat-methodo { padding: 60px 20px; }
    .cat-methodo h2 { font-size: 28px; }
    .cat-methodo-intro { font-size: 16px; }
    .cat-methodo-content { flex-direction: column; gap: 40px; }
    .cat-methodo-img { width: 100%; position: static; }
    .cat-methodo-img img { aspect-ratio: 16/9; }
    .cat-methodo-text { width: 100%; }
    .cat-methodo-title { font-size: 18px; }
    .cat-methodo-toggle { font-size: 24px; width: 24px; height: 24px; }
    .cat-methodo-paragraphe p { font-size: 14px; }
}
</style>

<section class="cat-methodo">
    <h2><?= htmlspecialchars($concevoir_product_title, ENT_QUOTES, 'UTF-8') ?></h2>
    
    <div class="cat-methodo-intro">
        <!-- Modification ICI : utilisation de strip_tags pour autoriser le HTML sécurisé -->
        <?= strip_tags($concevoir_product_title_paragraphe, '<strong><b><br><em><u>') ?>
    </div>

    <div class="cat-methodo-content">
        <div class="cat-methodo-img">
            <img src="<?php echo $images_url?><?= htmlspecialchars($concevoir_product_img_src, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($concevoir_product_img_alt, ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <div class="cat-methodo-text">
            <?php if (!empty($concevoir_product_steps)): ?>
                <?php foreach ($concevoir_product_steps as $step): ?>
                    <div class="cat-methodo-item">
                        <div class="cat-methodo-title">
                            <div><?= htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8') ?></div>
                            <div class="cat-methodo-toggle">+</div>
                        </div>
                        <div class="cat-methodo-paragraphe">
                            <?php foreach ($step['paragraphs'] as $p): ?>
                                <!-- Modification ICI : utilisation de strip_tags pour autoriser le HTML sécurisé -->
                                <p><?= strip_tags($p, '<strong><b><br><em><u>') ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Gestion unique des accordéons pour cette partie
    const items = document.querySelectorAll('.cat-methodo-item');
    items.forEach(item => {
        const title = item.querySelector('.cat-methodo-title');
        title.addEventListener('click', () => {
            item.classList.toggle('is-open');
        });
    });
});
</script>