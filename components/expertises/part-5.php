<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
   $part4_title = "Nos derniers conseils pour la sélection de votre agence Webflow";
   $part4_btn_label = "Nous contacter";
   $part4_btn_link  = "contact/";

   // ICI : Vous pouvez utiliser <strong>, <b>, <br> et <a>
   $part4_paragraphs = [
       "Dans la mesure où de nombreuses étapes et de nombreux paramètres sont à prendre en considération pour la réussite d’un projet de site internet, <strong>nous recommandons vivement de travailler avec une </strong><a href=\"" . ($base_url ?? '') . "expertises/expertises-ville/\"><strong>agence Webflow</strong></a><strong> capable de fournir l’intégralité des compétences requises.</strong>",
       "<strong>Cela vous assure que votre prestataire maîtrise tous les sujets évoqués,</strong> mais aussi et surtout que les intervenants qui vont travailler sur votre site sont habitués à travailler ensemble.",
       "<strong>Cela réduit les coûts car cela fait gagner du temps à tous</strong>. Par ailleurs, cela vous évite également d’avoir de mauvaises surprises puisque l’agence est responsable et investie sur l’ensemble de la création.",
       "Afalence a rédigé des articles sur les sujets évoqués ci-dessus. Vous pouvez par exemple poursuivre votre découverte de <a href=\"" . ($base_url ?? '') . "nos-articles/articles/\">ce qu’est le web design</a>, découvrir <a href=\"" . ($base_url ?? '') . "nos-articles/articles/\">en quoi consiste une refonte de site internet et combien elle coûte</a>, ou encore quoi attendre d’<a href=\"" . ($base_url ?? '') . "nos-articles/articles/\">un accompagnement SEO de qualité.</a>"
    ];
   require_once $base_path . 'components/expertises/part-5.php';
   ?>
-------------------------------------------------------------- */
?>

<section class="conseil-pourquoi">
    <div class="conseil-pourquoi-content-cta">
        <h2><?= htmlspecialchars($part4_title, ENT_QUOTES, 'UTF-8') ?></h2>

        <a href="<?php echo $base_url ?><?= htmlspecialchars($part4_btn_link, ENT_QUOTES, 'UTF-8') ?>"
           class="conseil-voir-button"
           aria-label="<?= htmlspecialchars($part4_btn_label, ENT_QUOTES, 'UTF-8') ?>"
           title="<?= htmlspecialchars($part4_btn_label, ENT_QUOTES, 'UTF-8') ?>">

            <div><?= htmlspecialchars($part4_btn_label, ENT_QUOTES, 'UTF-8') ?></div>

            <div class="icon-voir-conseil-pourquoi">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="svg-arrow" id="arrow-voir-conseil-pourquoi" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 7h10v10"></path><path d="M7 17 17 7"></path>
                </svg>
            </div>
        </a>
    </div>

    <div class="conseil-pourquoi-content-text">
        <?php foreach ($part4_paragraphs as $p): ?>
            <!-- Modification ICI : ajout de <a> dans strip_tags -->
            <p><?= strip_tags($p, '<strong><b><br><em><u><a>') ?></p>
        <?php endforeach; ?>
    </div>
</section>

<style>
/* ==========================================================================
   CSS EXPERTISES PART-5
   ========================================================================== */
.conseil-pourquoi {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    background-color: #ffffff;
    width: 100%;
    
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    
    gap: 5.55vw;
    border-top: 1px solid #eee;
}

.conseil-pourquoi-content-cta {
    display: flex;
    flex-direction: column;
    width: 40%;
}
 
.conseil-pourquoi-content-cta h2 {
    font-size: 2.5vw;
    font-weight: 700;
    padding-bottom: 2vw;
    color: #0A1A2F;
    margin: 0;
}

/* --- BOUTON STYLE (Bleu -> Dark Blue pour fond blanc) --- */
.conseil-voir-button {
    display: flex;
    justify-content: space-between;
    align-items: center;
    
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

.conseil-voir-button:hover {
    background-position: right;
}

.icon-voir-conseil-pourquoi {
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

.conseil-voir-button:hover .icon-voir-conseil-pourquoi {
    background: #0A1A2F;
    color: #fff;
}

.icon-voir-conseil-pourquoi svg {
    width: 1.2vw;
    height: 1.2vw;
    stroke: currentColor;
    stroke-width: 2;
    transition: transform 0.3s;
}

.conseil-voir-button:hover .icon-voir-conseil-pourquoi svg {
    transform: rotate(45deg);
}

.conseil-pourquoi-content-text {
    display: flex;
    flex-direction: column;
    color: #4B5563;
    width: 60%;
    gap: 1.5vw;
    font-size: 1.1vw;
    line-height: 1.6;
}

.conseil-pourquoi-content-text p {
    margin: 0;
}

/* AJOUT : Style pour strong/b dans les paragraphes */
.conseil-pourquoi-content-text p strong,
.conseil-pourquoi-content-text p b {
    color: #0A1A2F; /* Bleu foncé pour contraster avec le gris sur fond blanc */
    font-weight: 700;
}

/* AJOUT : Style pour les liens (a) */
.conseil-pourquoi-content-text p a {
    color: #3DA8FF; /* Bleu Airtechnic */
    text-decoration: underline;
    font-weight: 600;
    transition: color 0.3s ease;
}

.conseil-pourquoi-content-text p a:hover {
    color: #0A1A2F; /* Devient foncé au survol */
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .conseil-pourquoi { flex-direction: column; padding: 60px 20px; gap: 40px; }
    .conseil-pourquoi-content-cta, .conseil-pourquoi-content-text { width: 100%; }
    
    .conseil-pourquoi-content-cta h2 { font-size: 28px; padding-bottom: 20px; }
    .conseil-pourquoi-content-text { font-size: 16px; }
    
    .conseil-voir-button { width: 100%; justify-content: center; padding: 12px 24px; font-size: 14px; }
    .icon-voir-conseil-pourquoi { width: 30px; height: 30px; }
    .icon-voir-conseil-pourquoi svg { width: 18px; height: 18px; }
}
</style>