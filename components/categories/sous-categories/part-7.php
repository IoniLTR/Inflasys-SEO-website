<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
   // TITRE DE LA SECTION
   $accompagner_solution_title = "Faites-vous accompagner dans la conception de votre logo pour des résultats optimaux";
   
   $accompagner_solution_title_paragraphe = "Travailler avec des professionnels du design offre plusieurs <strong>avantages</strong> majeurs :";
   
   // BOUTON CTA
   $accompagner_solution_btn_label = "Nous contacter";
   $accompagner_solution_btn_link  = "contact";

   // ÉTAPES
   $accompagner_solution_steps = [
       [
           "title"      => "Expertise Créative",
           "paragraphs" => [
               "Des designers expérimentés apportent une <strong>vision artistique et des compétences techniques pour créer un logo unique</strong>."
           ]
       ],
       [
           "title"      => "Compréhension Stratégique",
           "paragraphs" => [
               "Ils alignent le design sur vos <strong>objectifs commerciaux</strong> et votre <strong>stratégie de marque.</strong>"
           ]
       ],
       [
           "title"      => "Processus Collaboratif",
           "paragraphs" => [
               "Un accompagnement personnalisé favorise une <strong>communication ouverte, assurant que le résultat final répond à vos attentes.</strong>"
             ]
       ],
        [
           "title"      => "Support Continu",
           "paragraphs" => [
               "Les professionnels offrent souvent un <strong>suivi pour adapter le logo aux besoins futurs ou aux évolutions du marché.</strong>"
          ]
       ],
   ];

   require_once $base_path . 'components/categories/sous-categories/part-7.php';
?>
-------------------------------------------------------------- */
?>

<style>
/* STYLE ISSU DE CATEGORIES PART-9 (GRID) + PART-4 (BOUTON) */
.cat-why {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    background-color: white;
    width: 100%;
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    gap: 4vw;
}

.cat-why-cta {
    display: flex;
    flex-direction: column;
    width: 40%;
}

.cat-why-cta h3 {
    font-size: 2.4vw;
    font-weight: 700;
    padding-bottom: 2vw;
    color: #0A1A2F;
}

.cat-why-cta p {
    font-size: 1.1vw;
    padding-bottom: 3vw;
    color: #4B5563;
    line-height: 1.6;
}

/* AJOUT : Style pour strong/b dans l'intro (texte gris -> gras bleu foncé) */
.cat-why-cta p strong,
.cat-why-cta p b {
    color: #0A1A2F;
    font-weight: 700;
}

/* --- BOUTON STYLE IDENTIQUE PARTIE 4 --- */
.cat-why-btn {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* Dégradé Bleu Clair -> Bleu Foncé */
    background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #0A1A2F 50%, #0A1A2F 100%);
    background-size: 210% 100%;
    background-position: left;
    transition: background-position 0.6s ease;
    padding: 0.8vw 1.5vw;
    border-radius: 50px;
    color: #fff;
    font-size: 1.042vw;
    font-weight: 600;
    text-transform: uppercase;
    text-decoration: none;
    gap: 1vw;
    width: fit-content;
    min-width: 180px;
}

.cat-why-btn:hover {
    background-position: right;
}

.cat-icon-why {
    background: #fff;
    border-radius: 50%;
    width: 2vw;
    height: 2vw;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
    color: #0A1A2F;
}

.cat-why-btn:hover .cat-icon-why {
    background: #0A1A2F;
    color: #fff;
}

.cat-icon-why svg {
    width: 1.2vw;
    height: 1.2vw;
    stroke: currentColor;
    stroke-width: 2;
    transition: transform 0.3s;
}

.cat-why-btn:hover .cat-icon-why svg {
    transform: rotate(45deg);
}
/* --- FIN STYLE BOUTON --- */

.cat-why-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5vw;
    width: 55%;
}

.cat-why-card {
    display: flex;
    flex-direction: column;
    justify-content: center;
    border: 1px solid #0A1A2F;
    border-radius: 4px;
    padding: 2vw;
    position: relative;
    min-height: 10vw;
    transition: 0.3s;
}

.cat-why-card:hover {
    background: #0A1A2F;
    color: white;
}

.cat-why-card h4 {
    font-size: 1.2vw;
    font-weight: 700;
    margin-bottom: 0.5vw;
    z-index: 2;
}

.cat-why-card p {
    font-size: 0.95vw;
    line-height: 1.4;
    z-index: 2;
}

/* AJOUT : Style pour strong/b dans les cartes */
.cat-why-card p strong,
.cat-why-card p b {
    color: #0A1A2F; /* Bleu foncé par défaut sur fond blanc */
    font-weight: 700;
}

/* AJOUT : Au survol (fond sombre), le gras devient blanc ou bleu clair */
.cat-why-card:hover p strong,
.cat-why-card:hover p b {
    color: #3DA8FF; /* Cyan pour bien ressortir sur le fond bleu foncé */
}

@media (max-width: 1024px) {
    .cat-why { flex-direction: column; padding: 60px 20px; gap: 40px; }
    .cat-why-cta, .cat-why-grid { width: 100%; }
    .cat-why-cta h3 { font-size: 28px; }
    .cat-why-cta p { font-size: 16px; }
    
    /* Responsive Bouton */
    .cat-why-btn { width: 100%; justify-content: center; font-size: 14px; padding: 12px 24px; }
    .cat-icon-why { width: 30px; height: 30px; }
    .cat-icon-why svg { width: 18px; height: 18px; }
    
    .cat-why-grid { grid-template-columns: 1fr; }
    .cat-why-card { min-height: auto; padding: 25px; }
    .cat-why-card h4 { font-size: 18px; }
    .cat-why-card p { font-size: 14px; }
}
</style>

<section class="cat-why">
    <div class="cat-why-cta">
        <h3><?= htmlspecialchars($accompagner_solution_title, ENT_QUOTES, 'UTF-8') ?></h3>
        
        <!-- Modification ICI : utilisation de strip_tags -->
        <p><?= strip_tags($accompagner_solution_title_paragraphe, '<strong><b><br><em><u>') ?></p>

        <a href="<?php echo $base_url?><?= htmlspecialchars($accompagner_solution_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="cat-why-btn" aria-label="<?= htmlspecialchars($accompagner_solution_btn_label, ENT_QUOTES, 'UTF-8') ?>">
            <div><?= htmlspecialchars($accompagner_solution_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
            <div class="cat-icon-why">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
            </div>
        </a>
    </div>

    <div class="cat-why-grid">
        <?php foreach ($accompagner_solution_steps as $step): ?>
            <div class="cat-why-card">
                <h4><?= htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8') ?></h4>
                <?php foreach ($step['paragraphs'] as $p): ?>
                     <!-- Modification ICI : utilisation de strip_tags -->
                     <p><?= strip_tags($p, '<strong><b><br><em><u>') ?></p>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>