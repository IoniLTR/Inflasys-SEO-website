<?php 
/* --------------------------------------------------------------
   VARIABLES
   -------------------------------------------------------------- 
<?php
   $part4_title = "Pourquoi créer son site avec une agence spécialisée à " . $ville_nom . " ?";
   $part4_btn_label = "Nous Contacter";
   $part4_btn_link  = "contact";
   
   $part4_paragraphs = [
    "<strong>Une agence à " . $ville_nom . " spécialisée en création de sites internet conçoit votre plateforme web de A à Z, en veillant à l'harmonie entre esthétique, ergonomie et performance. </strong>Elle prend en charge le design visuel, l'expérience utilisateur et l'optimisation pour les moteurs de recherche.",
    "Pour chaque projet, <strong>une agence compétente mobilise une équipe pluridisciplinaire composée d'un designer, d'un développeur et d'un expert SEO</strong>. Ces professionnels combinent leurs savoir-faire en matière d'expérience utilisateur (UX) et de référencement naturel (SEO) pour <strong>créer un site performant, capable d'attirer un public qualifié et de convertir les visiteurs en clients</strong>.",
    "En choisissant une agence plutôt qu'un freelance, vous bénéficiez d'une qualité de service supérieure, d'une fiabilité accrue et d'une complémentarité des expertises. De plus, <strong>les tarifs des agences sont souvent plus compétitifs que ceux des freelances réputés</strong>.",
    "<strong>L'objectif d'une agence est de vous livrer un site internet à la hauteur de vos attentes, optimisé pour un bon référencement sur Google. Un site attractif ne suffit pas : il doit également être visible pour générer du trafic et avoir un impact réel sur votre activité.</strong>"
];
   require_once $base_path . 'components/expertises/expertises-ville/part-4.php';
?>
  -------------------------------------------------------------- */
?>
<section class="exp-advice">
    <div class="exp-advice-cta">
        <h2><?= htmlspecialchars($part4_title, ENT_QUOTES, 'UTF-8') ?></h2>

        <a href="<?php echo $base_url ?><?= htmlspecialchars($part4_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="exp-advice-btn">
            <div><?= htmlspecialchars($part4_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
            <div class="exp-advice-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </div>
        </a>
    </div>

    <div class="exp-advice-text">
        <?php foreach ($part4_paragraphs as $p): ?>
            <p><?= nl2br($p) ?></p>
        <?php endforeach; ?>
    </div>
</section>

<style>
.exp-advice {
    display: flex; justify-content: space-between;
    background-color: #ffffff;
    padding: 6.94vw 130px;
    max-width: 2560px; margin: 0 auto;
    gap: 5.55vw; font-family: 'Poppins', sans-serif;
    border-top: 1px solid #eee;
}

.exp-advice-cta { width: 40%; display: flex; flex-direction: column; }
.exp-advice-cta h2 { font-size: 2.5vw; font-weight: 700; color: #0A1A2F; margin-bottom: 2vw; }

.exp-advice-btn {
    display: flex; justify-content: space-between; align-items: center;
    background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #0A1A2F 50%, #0A1A2F 100%);
    background-size: 210% 100%; background-position: left;
    transition: background-position 0.6s ease;
    padding: 0.8vw 1.5vw; border-radius: 50px;
    color: #fff; font-size: 1.042vw; font-weight: 600; text-transform: uppercase; text-decoration: none;
    width: fit-content; min-width: 180px; gap: 1vw;
}
.exp-advice-btn:hover { background-position: right; }

.exp-advice-icon {
    background: #fff; border-radius: 50%; width: 2vw; height: 2vw;
    display: flex; align-items: center; justify-content: center; transition: 0.3s; color: #0A1A2F;
}
.exp-advice-btn:hover .exp-advice-icon { background: #0A1A2F; color: #fff; }
.exp-advice-icon svg { width: 1.2vw; height: 1.2vw; transition: transform 0.3s; }
.exp-advice-btn:hover .exp-advice-icon svg { transform: rotate(45deg); }

.exp-advice-text { width: 60%; color: #4B5563; font-size: 1.1vw; line-height: 1.6; display: flex; flex-direction: column; gap: 1.5vw; }

@media (max-width: 1024px) {
    .exp-advice { flex-direction: column; padding: 60px 20px; gap: 40px; }
    .exp-advice-cta, .exp-advice-text { width: 100%; }
    .exp-advice-cta h2 { font-size: 28px; }
    .exp-advice-text { font-size: 16px; }
    .exp-advice-btn { width: 100%; font-size: 14px; padding: 12px 24px; justify-content: center; }
    .exp-advice-icon { width: 30px; height: 30px; }
    .exp-advice-icon svg { width: 18px; height: 18px; }
}
</style>