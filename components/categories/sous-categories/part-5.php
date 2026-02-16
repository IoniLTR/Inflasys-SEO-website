<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
   // TITRE DE LA SECTION
   $concevoir_product_2_title = "Erreurs à éviter en conception de logo";
   
   // TEXTE DE GAUCHE (Remplace l'image)
   $concevoir_product_2_left_text = "En concevant un logo, éviter des erreurs comme un design trop complexe, des couleurs mal choisies ou une typographie peu lisible est crucial. <strong>Un bon logo doit rester simple, adapté aux différents supports</strong> et représenter fidèlement la marque.";

   // BOUTON CONTACT
   $concevoir_product_2_btn_label = "Nous contacter";
   $concevoir_product_2_btn_link  = "contact";

   // ÉTAPES (accordéon)
   $concevoir_product_2_steps = [
       [
           "title"      => "Complexité Excessive",
           "paragraphs" => [
               "Un logo trop complexe peut être difficile à reconnaître et à mémoriser<strong>. La simplicité est clé pour une identification rapide.</strong>"
           ]
       ],
       [
           "title"      => "Imitation de la Concurrence",
           "paragraphs" => [
               "Copier des éléments de logos existants peut <strong>nuire à votre originalité, et donc à la reconnaissance de votre marque, et risque de mener à des problèmes juridiques.</strong>"
           ]
       ],
       [
           "title"      => "Ignorer l'Évolutivité",
           "paragraphs" => [
               "Ne pas considérer comment le logo s'affiche à différentes tailles peut <strong>affecter sa lisibilité et son impact visuel.</strong>"
             ]
       ],
        [
           "title"      => "Mauvais Choix de Couleurs",
           "paragraphs" => [
               "Utiliser des couleurs inappropriées peut <strong>envoyer le mauvais message et ne pas</strong> <strong>résonner avec le public cible</strong>."
            ]
        ],
        [
           "title"      => "Négliger le Feedback",
           "paragraphs" => [
               "Éviter de solliciter des avis peut conduire à des erreurs non détectées. <strong>Le feedback est essentiel pour un design réussi.</strong>"
          ]
        ],
   ];

   require_once $base_path . 'components/categories/sous-categories/part-5.php';
   ?>
    ----------------------------------- */
?>


<style>
/* STYLE GLOBAL SECTION */
.cat-methodo-2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    background-color: #F2F9FF;
    color: #0A1A2F;
    font-family: 'Poppins', sans-serif;
}

.cat-methodo-2 h2 {
    font-size: 2.5vw;
    font-weight: 700;
    padding-bottom: 1vw;
}

.cat-methodo-2-intro {
    font-size: 1.1vw;
    text-align: center;
    max-width: 800px;
    margin-bottom: 4vw;
    color: #4B5563;
    line-height: 1.6;
}

.cat-methodo-2-content {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    width: 100%;
    gap: 4vw;
}

/* COLONNE GAUCHE (TEXTE + BOUTON) */
.cat-methodo-2-left {
    width: 35%;
    position: sticky;
    top: 150px;
    display: flex;
    flex-direction: column;
    gap: 2vw;
}

.cat-methodo-2-left p {
    font-size: 1.1vw;
    line-height: 1.6;
    color: #0A1A2F;
    margin: 0;
}

/* AJOUT : Style pour strong/b dans le texte de gauche (texte foncé) */
.cat-methodo-2-left p strong,
.cat-methodo-2-left p b {
    color: #0A1A2F;
    font-weight: 700;
}

/* --- STYLE BOUTON (COPIE CONFORME PARTIE 4 CATÉGORIES) --- */
.cat-methodo-2-btn {
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

.cat-methodo-2-btn:hover {
    background-position: right;
}

.cat-methodo-2-icon {
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

.cat-methodo-2-btn:hover .cat-methodo-2-icon {
    background: #0A1A2F;
    color: #fff;
}

.cat-methodo-2-icon svg {
    width: 1.2vw;
    height: 1.2vw;
    stroke: currentColor;
    stroke-width: 2;
    transition: transform 0.3s;
}

.cat-methodo-2-btn:hover .cat-methodo-2-icon svg {
    transform: rotate(45deg);
}
/* --- FIN STYLE BOUTON --- */


/* COLONNE DROITE (ACCORDÉON) */
.cat-methodo-2-text {
    width: 60%;
}

.cat-methodo-2-item {
    display: flex;
    flex-direction: column;
    border-bottom: 1px solid #3DA8FF;
    padding: 1.5vw 0;
}

.cat-methodo-2-title {
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

.cat-methodo-2-item:hover .cat-methodo-2-title {
    color: #3DA8FF;
}

.cat-methodo-2-toggle {
    width: 2vw;
    height: 2vw;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2vw;
    font-weight: 300;
    color: #3DA8FF;
}

.cat-methodo-2-paragraphe {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.35s ease;
    color: #4B5563;
}

.cat-methodo-2-paragraphe p {
    font-size: 1vw;
    margin-top: 1vw;
    line-height: 1.6;
}

/* AJOUT : Style pour strong/b dans les paragraphes de l'accordéon */
.cat-methodo-2-paragraphe p strong,
.cat-methodo-2-paragraphe p b {
    color: #0A1A2F;
    font-weight: 700;
}

.cat-methodo-2-item.is-open .cat-methodo-2-paragraphe {
    max-height: 500px;
}
.cat-methodo-2-item.is-open .cat-methodo-2-toggle {
    transform: rotate(45deg);
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .cat-methodo-2 { padding: 60px 20px; }
    .cat-methodo-2 h2 { font-size: 28px; }
    .cat-methodo-2-intro { font-size: 16px; }
    .cat-methodo-2-content { flex-direction: column; gap: 40px; }
    
    .cat-methodo-2-left { width: 100%; position: static; gap: 30px; }
    .cat-methodo-2-left p { font-size: 16px; }
    
    /* Responsive bouton */
    .cat-methodo-2-btn {
        width: 100%;
        justify-content: center;
        padding: 12px 24px;
        font-size: 14px;
    }
    .cat-methodo-2-icon { width: 30px; height: 30px; }
    .cat-methodo-2-icon svg { width: 18px; height: 18px; }

    .cat-methodo-2-text { width: 100%; }
    .cat-methodo-2-title { font-size: 18px; }
    .cat-methodo-2-toggle { font-size: 24px; width: 24px; height: 24px; }
    .cat-methodo-2-paragraphe p { font-size: 14px; }
}
</style>

<section class="cat-methodo-2">

    <div class="cat-methodo-2-content">
        <div class="cat-methodo-2-left">
            <h2><?= htmlspecialchars($concevoir_product_2_title, ENT_QUOTES, 'UTF-8') ?></h2>
            
            <!-- Modification ICI : utilisation de strip_tags pour autoriser le HTML sécurisé -->
            <p><?= strip_tags($concevoir_product_2_left_text, '<strong><b><br><em><u>') ?></p>
            
            <a href="<?php echo $base_url?><?= htmlspecialchars($concevoir_product_2_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="cat-methodo-2-btn" aria-label="<?= htmlspecialchars($concevoir_product_2_btn_label, ENT_QUOTES, 'UTF-8') ?>">
                <div><?= htmlspecialchars($concevoir_product_2_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
                <div class="cat-methodo-2-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                </div>
            </a>
        </div>

        <div class="cat-methodo-2-text">
            <?php if (!empty($concevoir_product_2_steps)): ?>
                <?php foreach ($concevoir_product_2_steps as $step): ?>
                    <div class="cat-methodo-2-item">
                        <div class="cat-methodo-2-title">
                            <div><?= htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8') ?></div>
                            <div class="cat-methodo-2-toggle">+</div>
                        </div>
                        <div class="cat-methodo-2-paragraphe">
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
    const items = document.querySelectorAll('.cat-methodo-2-item');
    items.forEach(item => {
        const title = item.querySelector('.cat-methodo-2-title');
        title.addEventListener('click', () => {
            item.classList.toggle('is-open');
        });
    });
});
</script>