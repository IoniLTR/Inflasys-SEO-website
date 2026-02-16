<?php
/* --------------------------------------------------------------
   VARIABLES
   --------------------------------------------------------------
   <?php
$why_title = $why_title ?? "Pourquoi choisir Afalence ?";
$why_paragraph = $why_paragraph ?? "Afalence est une agence de conception et création de sites Webflow <strong>reconnue pour son excellence et son éthique de travail.</strong> L’équipe est constitué <strong> d'experts aux compétences complémentaires qui travaillent avec rigueur,</strong> créativité et dévouement sur votre projet ! Voici quelques raisons de choisir Afalence :";
$why_btn_label = $why_btn_label ?? "Nous contacter";
$why_btn_link  = $why_btn_link ?? "contact/";

$why_cards = $why_cards ?? [
    ["text" => "3 expertises complémentaires : UX Design, Développement, SEO", "img" => "uploads/Picto/pattern-1.webp"],
    ["text" => "Travail approfondi de l’UX pour optimiser la rétention et la conversion de votre site", "img" => "uploads/Picto/pattern-1.webp"],
    ["text" => "Création de site sur mesure au pixel près.", "img" => "uploads/Picto/pattern-1.webp"],
    ["text" => "Développeur fullstack expérimenté sans limitations dues au no code", "img" => "uploads/Picto/pattern-1.webp"],
    ["text" => "Optimisation de votre site pourfavoriser son référencement sur Google", "img" => "uploads/Picto/pattern-1.webp"]
];
   require_once $base_path . 'components/categories/part-9.php';
   ?>
   -------------------------------------------------------------- */
?>

<style>
.cat-why {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    background-color: white;
    width: 100%;
    
    /* Alignement Header */
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

/* BOUTON STYLE TECH (Identique Accueil) */
.cat-why-btn {
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

/* Grid Cards */
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

.cat-why-card div {
    font-size: 1.2vw;
    font-weight: 600;
    z-index: 2;
}

.cat-why-card img {
    position: absolute;
    right: 1vw;
    bottom: 1vw;
    width: 2.5vw;
    opacity: 0.2;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .cat-why { flex-direction: column; padding: 60px 20px; gap: 40px; }
    .cat-why-cta, .cat-why-grid { width: 100%; }
    .cat-why-cta h3 { font-size: 28px; }
    .cat-why-cta p { font-size: 16px; }
    
    .cat-why-btn { width: 100%; justify-content: center; font-size: 14px; padding: 12px 24px; }
    .cat-icon-why { width: 30px; height: 30px; }
    .cat-icon-why svg { width: 18px; height: 18px; }
    
    .cat-why-grid { grid-template-columns: 1fr; }
    .cat-why-card { min-height: auto; padding: 25px; }
    .cat-why-card div { font-size: 18px; }
    .cat-why-card img { width: 40px; }
}
</style>

<section class="cat-why">
    <div class="cat-why-cta">
        <h3><?= htmlspecialchars($why_title, ENT_QUOTES, 'UTF-8') ?></h3>

        <!-- ICI : pas de htmlspecialchars pour garder les <strong> -->
        <p><?= nl2br($why_paragraph) ?></p>

        <a href="<?php echo $base_url ?><?= htmlspecialchars($why_btn_link, ENT_QUOTES, 'UTF-8') ?>"
           class="cat-why-btn"
           aria-label="<?= htmlspecialchars($why_btn_label, ENT_QUOTES, 'UTF-8') ?>">
            <div><?= htmlspecialchars($why_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
            <div class="cat-icon-why">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M7 7h10v10"></path>
                    <path d="M7 17 17 7"></path>
                </svg>
            </div>
        </a>
    </div>

    <div class="cat-why-grid">
        <?php foreach ($why_cards as $card): ?>
            <div class="cat-why-card">
                <!-- ici tu n'as pas mis de <strong> mais si tu veux, tu peux laisser brut aussi -->
                <div><?= htmlspecialchars($card['text'], ENT_QUOTES, 'UTF-8') ?></div>
                <img src="<?php echo $images_url ?><?= htmlspecialchars($card['img'], ENT_QUOTES, 'UTF-8') ?>" alt="icon">
            </div>
        <?php endforeach; ?>
    </div>
</section>