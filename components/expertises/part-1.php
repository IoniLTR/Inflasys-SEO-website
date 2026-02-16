<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
   <?php
   $hero_title     = "Agence Site Internet Webflow d'Afalence";
   $hero_text      = "Découvrez les éléments importants dans la sélection de l'agence Webflow à laquelle vous confiez votre projet de site internet.";
   $hero_btn_label = 'Nous contacter';
   $hero_btn_link  = 'contact/';
   $hero_img_src   = 'uploads/default.webp';
   $hero_img_alt   = 'Interface de contrôle industriel Airtechnic';

   require_once $base_path . 'components/expertises/part-1.php';
   ?>
-------------------------------------------------------------- */
?>

<section class="index-1">
  <div class="content-index-1">
    <h1><?= htmlspecialchars($hero_title, ENT_QUOTES, 'UTF-8') ?></h1>

    <p class="services-index">
      <?= nl2br(htmlspecialchars($hero_text, ENT_QUOTES, 'UTF-8')) ?>
    </p>

    <a href="<?php echo $base_url ?><?= htmlspecialchars($hero_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="contactez-button" aria-label="<?= htmlspecialchars($hero_btn_label, ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($hero_btn_label, ENT_QUOTES, 'UTF-8') ?>">
      <span><?= htmlspecialchars($hero_btn_label, ENT_QUOTES, 'UTF-8') ?></span>
      <span class="icon-voir-home">
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="svg-arrow" id="arrow-voir-home" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M7 7h10v10"></path><path d="M7 17 17 7"></path>
         </svg>
      </span>
    </a>
  </div>

  <img src="<?php echo $images_url ?><?= htmlspecialchars($hero_img_src, ENT_QUOTES, 'UTF-8') ?>"
       alt="<?= htmlspecialchars($hero_img_alt, ENT_QUOTES, 'UTF-8') ?>">
</section>

<style>
/* ==========================================================================
   CSS EXPERTISES PART-1 (STYLE HERO)
   ========================================================================== */
.index-1 {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 4vw;
    min-height: 100vh;
    background-color: #0A1A2F; /* Bleu Foncé */
    
    /* Alignement Header */
    padding: 140px 130px 4vw 130px; 
    width: 100%;
    max-width: 2560px;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
}

.content-index-1 {
    display: flex;
    flex-direction: column;
    gap: 1.5vw;
    width: 45%;
    z-index: 2;
}

.index-1 h1 {
    margin: 0;
    color: #fff;
    font-weight: 700;
    line-height: 1.1;
    font-size: 4vw;
    letter-spacing: -0.02em;
}

.services-index {
    margin: 0;
    color: #9CA3AF; /* Gris */
    line-height: 1.6;
    font-size: 1.1vw;
}

/* --- BOUTON HERO (Style identique Part-1 Exemple) --- */
.contactez-button {
    display: flex;
    justify-content: space-between;
    align-items: center;
    
    /* Dégradé : Bleu Clair -> Blanc (contraste sur fond sombre) */
    background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #ffffff 50%, #ffffff 100%);
    background-size: 210% 100%;
    background-position: left;
    
    transition: background-position 0.6s ease, color 0.6s ease;
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
    margin-top: 1vw;
}

.contactez-button:hover {
    background-position: right;
    color: #0A1A2F; /* Texte devient bleu foncé au survol */
}

/* Cercle icône */
.icon-voir-home {
    background: #ffffff;
    border-radius: 50%;
    width: 2vw;
    height: 2vw;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
    color: #0A1A2F;
}

.contactez-button:hover .icon-voir-home {
    background: #0A1A2F; 
    color: #ffffff;
}

.contactez-button svg {
    width: 1.2vw;
    height: 1.2vw;
    stroke: currentColor;
    stroke-width: 2;
    transition: transform 0.3s;
}

.contactez-button:hover svg {
    transform: rotate(45deg);
}

/* Image */
.index-1 img {
    width: 50%;
    height: 70vh;
    object-fit: cover;
    border-radius: 20px;
    border: 1px solid #3DA8FF;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .index-1 {
        flex-direction: column;
        align-items: flex-start;
        padding: 140px 20px 60px 20px;
        min-height: auto;
    }

    .content-index-1 { width: 100%; }
    .index-1 h1 { font-size: 42px; }
    .services-index { font-size: 16px; }

    .contactez-button {
        width: 100%;
        justify-content: center;
        padding: 12px 24px;
        font-size: 14px;
    }
    .icon-voir-home { width: 30px; height: 30px; }
    .contactez-button svg { width: 18px; height: 18px; }

    .index-1 img {
        width: 100%;
        height: 40vh;
        margin-top: 30px;
    }
}
</style>