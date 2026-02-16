<?php
/* --------------------------------------------------------------
   VARIABLES
   --------------------------------------------------------------
   <?php
$part4_title = $part4_title ?? "Pourquoi travailler avec une agence de Design ?";
$part4_btn_label = $part4_btn_label ?? "Nous contacter";
$part4_btn_link  = $part4_btn_link ?? "contact/";
$part4_paragraphs = $part4_paragraphs ?? [
    "Travailler avec une agence de design pour votre site internet offre un véritable avantage stratégique pour vous démarquer en ligne.<strong> Une agence spécialisée dispose de l'expertise nécessaire pour créer des sites web qui ne se contentent pas d'être esthétiques, mais qui répondent également aux besoins spécifiques de chaque client. Grâce à une équipe de designers UX/UI, développeurs et experts en référencement, l'agence assure une conception sur mesure.</strong>",
    "Les enjeux tels que le branding, la communication, l’identification des personae, le targeting, la performance, l’accessibilité, la performance, le référencement ou encore la pérennité du site internet peuvent être adressés en faisant appel à une agence aux compétences complètes.",
    "<strong>Faire appel à une agence de webdesign permet d’avoir une vision long terme pour le développement de votre présence en ligne.</strong> Les agences ne vont pas seulement créer le site ; elles accompagnent leurs clients dans la gestion et l’évolution de leur site dans la durée.",
    "Elles assurent la maintenance, l’analyse des performances et l’adaptation continue aux évolutions technologiques et aux tendances du marché. En choisissant une agence, vous bénéficiez d’un partenariat durable qui vous permet de rester compétitif et de répondre rapidement aux besoins changeants de vos utilisateurs."
];
   require_once $base_path . 'components/categories/part-4.php';
   ?>
  -------------------------------------------------------------- */
?>

<style>
/* ==========================================================================
   CSS PART-4
   ========================================================================== */
.cat-conseil {
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
    border-top: 1px solid #eee;
}

.cat-conseil-cta {
    display: flex;
    flex-direction: column;
    width: 40%;
}
 
.cat-conseil-cta h2 {
    font-size: 2.5vw;
    font-weight: 700;
    padding-bottom: 2vw;
    color: #0A1A2F;
}

/* --- BOUTON STYLE PART 9 --- */
.cat-conseil-btn {
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

.cat-conseil-btn:hover {
    background-position: right;
}

.cat-icon-conseil {
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

.cat-conseil-btn:hover .cat-icon-conseil {
    background: #0A1A2F;
    color: #fff;
}

.cat-icon-conseil svg {
    width: 1.2vw;
    height: 1.2vw;
    stroke: currentColor;
    stroke-width: 2;
    transition: transform 0.3s;
}

.cat-conseil-btn:hover .cat-icon-conseil svg {
    transform: rotate(45deg);
}

.cat-conseil-text {
    display: flex;
    flex-direction: column;
    color: #4B5563;
    width: 60%;
    gap: 1.5vw;
    font-size: 1.1vw;
    line-height: 1.6;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .cat-conseil {
        flex-direction: column;
        padding: 60px 20px;
        gap: 40px;
    }

    .cat-conseil-cta, .cat-conseil-text { width: 100%; }
    
    .cat-conseil-cta h2 { font-size: 28px; padding-bottom: 20px; }
    
    .cat-conseil-text { font-size: 16px; }
    
    .cat-conseil-btn {
        width: 100%;
        justify-content: center;
        padding: 12px 24px;
        font-size: 14px;
    }
    
    .cat-icon-conseil { width: 30px; height: 30px; }
    .cat-icon-conseil svg { width: 18px; height: 18px; }
}
</style>

<section class="cat-conseil">
    <div class="cat-conseil-cta">
        <h2><?= htmlspecialchars($part4_title, ENT_QUOTES, 'UTF-8') ?></h2>

        <a href="<?php echo $base_url ?><?= htmlspecialchars($part4_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="cat-conseil-btn" aria-label="<?= htmlspecialchars($part4_btn_label, ENT_QUOTES, 'UTF-8') ?>">
            <div><?= htmlspecialchars($part4_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
            <div class="cat-icon-conseil">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
            </div>
        </a>
    </div>

    <div class="cat-conseil-text">
        <?php foreach ($part4_paragraphs as $p): ?>
            <p><?= nl2br($p) ?></p>
        <?php endforeach; ?>
    </div>

</section>