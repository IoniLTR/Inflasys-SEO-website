<?php 
/* --------------------------------------------------------------
   VARIABLES
   --------------------------------------------------------------
<?php
   $part7_title = "Durée et coût de la création d'un site à " . $ville_nom;
   $part7_paragraphs = [
       "La durée de création d'un site internet varie en fonction de la complexité du projet, du nombre de pages, des fonctionnalités souhaitées et du niveau de personnalisation.",
       "<strong>L'utilisation d'outils de création modernes permet généralement de réduire les délais et les coûts par rapport à un développement entièrement sur mesure.</strong>",
       "<strong>Le coût final dépend du temps nécessaire à la réalisation du projet. Comme les freelances, les agences facturent leurs prestations en fonction d'un Taux Journalier Moyen (TJM) qui peut varier.</strong>",
       "Une agence à " . $ville_nom . " n'est pas forcément plus chère qu'une agence en province : l'expérience et la réputation de l'agence sont généralement les facteurs déterminants."
   ];

   $part7_tarifs = [
       [
           "title"   => "Offre Lancement",
           "img_alt" => "Icône d’audit design",
           "label"   => "Durée moyenne",
           "duration"=> "3 à 6 semaines",
           "tjm"     => "2 000 € à 4 000 €",
           "note"    => "Comprend",
           "bullets" => [
               "Logo et charte graphique",
               "Design sur mesures",
               "Développement sur Webflow",
               "Audit et optimisation SEO"
           ]
       ],
       [
           "title"   => "Offre Croissance",
           "img_alt" => "Icône de site vitrine",
           "label"   => "Durée moyenne",
           "duration"=> "1 à 3 mois",
           "tjm"     => "4 000 € à 20 000 €",
           "note"    => "Comprend",
           "bullets" => [
               "Les avantages de l'Offre Lancement",
               "Réalisation de designs avancés",
               "Réalisation d'animations avancées",
               "Création de multiples pages"
           ]
       ],
       [
           "title"   => "Offre Sur Mesure",
           "img_alt" => "Icône e-commerce",
           "label"   => "Durée moyenne",
           "duration"=> "Durée dépendante du projet",
           "tjm"     => "Sur devis",
           "note"    => "Comprend",
           "bullets" => [
               "Réalisation de sites complexes",
               "Migration et maintien du Référencement",
               "Création de fonctionnalités avancées",
               "Réglage de bugs insolubles"
           ]
       ]
   ];

   $part7_btn_label = $part7_btn_label ?? "Nous Contacter";
   $part7_btn_link  = $part7_btn_link ?? "contact";

   require_once $base_path . 'components/expertises/expertises-ville/part-7.php';
?>
-------------------------------------------------------------- */
?>

<section class="exp-prices">
    <img src="<?php echo $images_url ?>uploads/pattern-1.webp" alt="" class="exp-pattern">

    <div class="exp-prices-header">
        <div class="exp-prices-cta">
            <h2><?= htmlspecialchars($part7_title, ENT_QUOTES, 'UTF-8') ?></h2>
        </div>
        <div class="exp-prices-text">
            <?php foreach($part7_paragraphs as $p): ?>
                <p><?= nl2br($p) ?></p>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="exp-prices-grid">
        <?php foreach ($part7_tarifs as $tarif): ?>
            <div class="exp-price-card">
                <div class="exp-price-card-top">
                    <h3><?= htmlspecialchars($tarif['title']) ?></h3>
                    <div class="price-val"><?= htmlspecialchars($tarif['tjm']) ?></div>
                    <div class="price-dur"><?= htmlspecialchars($tarif['duration']) ?></div>
                    <div class="price-sep"></div>
                    <div class="price-note"><?= htmlspecialchars($tarif['note']) ?></div>
                    
                    <ul class="price-list">
                        <?php foreach($tarif['bullets'] as $bullet): ?>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0A1A2F" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span><?= htmlspecialchars($bullet) ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <a href="<?php echo $base_url ?><?= htmlspecialchars($part7_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="exp-price-btn">
                    <div><?= htmlspecialchars($part7_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
                    <div class="exp-price-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </div>
                </a>

            </div>
        <?php endforeach; ?>
    </div>
</section>

<style>
.exp-prices {
    position: relative; background: #ffffff; color: #0A1A2F;
    padding: 6.94vw 130px; max-width: 2560px; margin: 0 auto;
    font-family: 'Poppins', sans-serif;
}

.exp-pattern { position: absolute; top: 0; right: 0; width: 200px; opacity: 0.1; pointer-events: none; }

.exp-prices-header { display: flex; justify-content: space-between; margin-bottom: 4vw; gap: 5vw; position: relative; z-index: 2; }
.exp-prices-cta { width: 40%; }
.exp-prices-cta h2 { font-size: 2.5vw; font-weight: 700; }
.exp-prices-text { width: 60%; font-size: 1.1vw; line-height: 1.6; color: #4B5563; }

/* Style du texte en gras dans les paragraphes */
.exp-prices-text strong { 
    color: #0A1A2F; 
    font-weight: 700;
}

.exp-prices-grid { display: flex; gap: 2vw; flex-wrap: wrap; }

.exp-price-card {
    flex: 1 1 300px; 
    background: #fff; 
    border: 1px solid #eee; 
    border-radius: 16px; 
    padding: 2.5vw;
    box-shadow: 0 10px 40px rgba(0,0,0,0.05); 
    display: flex; 
    flex-direction: column; 
    justify-content: space-between; 
    gap: 2vw;
    transition: transform 0.3s ease;
}

.exp-price-card:hover { transform: translateY(-5px); }

.exp-price-card-top { display: flex; flex-direction: column; gap: 1vw; }

.exp-price-card h3 { font-size: 1.4vw; font-weight: 700; }
.price-val { font-size: 1.6vw; font-weight: 800; color: #3DA8FF; }
.price-dur { font-size: 1vw; color: #9CA3AF; }
.price-sep { height: 1px; background: #eee; width: 100%; }
.price-note { font-size: 1vw; font-weight: 600; }

.price-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.8vw; }
.price-list li { display: flex; gap: 10px; font-size: 0.95vw; color: #4B5563; }

/* BOUTON DANS LA CARTE */
.exp-price-btn {
    display: flex; justify-content: space-between; align-items: center;
    background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #0A1A2F 50%, #0A1A2F 100%);
    background-size: 210% 100%; background-position: left;
    transition: background-position 0.6s ease;
    padding: 0.8vw 1.5vw; border-radius: 50px;
    color: #fff; font-size: 1.042vw; font-weight: 600; 
    text-transform: uppercase; text-decoration: none;
    width: 100%; margin-top: auto;
}
.exp-price-btn:hover { background-position: right; }

.exp-price-icon {
    background: #fff; border-radius: 50%; width: 2vw; height: 2vw;
    display: flex; align-items: center; justify-content: center; 
    transition: 0.3s; color: #0A1A2F;
}
.exp-price-btn:hover .exp-price-icon { background: #0A1A2F; color: #fff; }

.exp-price-icon svg { width: 1.2vw; height: 1.2vw; transition: transform 0.3s; stroke: currentColor; }
.exp-price-btn:hover .exp-price-icon svg { transform: rotate(45deg); }


@media (max-width: 1024px) {
    .exp-prices { padding: 60px 20px; }
    .exp-prices-header { flex-direction: column; gap: 30px; }
    .exp-prices-cta, .exp-prices-text { width: 100%; }
    .exp-prices-cta h2 { font-size: 28px; }
    .exp-prices-text { font-size: 16px; }
    
    .exp-price-card { padding: 30px; }
    .exp-price-card h3 { font-size: 20px; }
    .price-val { font-size: 24px; }
    .price-dur, .price-note, .price-list li { font-size: 14px; }
    
    /* Bouton Mobile */
    .exp-price-btn { font-size: 14px; padding: 12px 24px; }
    .exp-price-icon { width: 30px; height: 30px; }
    .exp-price-icon svg { width: 18px; height: 18px; }
}
</style>