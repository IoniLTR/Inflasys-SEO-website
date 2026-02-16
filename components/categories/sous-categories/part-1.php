<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
   <?php
   $hero_title     = "Conception de Logo : Clé de l'Identité de Marque";
   $hero_text      = "Plus qu’une image, <strong>un logo est la représentation visuelle de votre marque</strong> qui <strong>communique instantanément vos valeurs et votre identité</strong> au public.";
   
   $hero_btn_label = 'Nous contacter';
   $hero_btn_link  = 'contact';
   $hero_img_src   = 'uploads/default.webp';
   $hero_img_alt   = 'Contrôleur Airtechnic en action';

   require_once $base_path . 'components/categories/sous-categories/part-1.php';
   ?>
   ----------------------------------- */
?>

<style>
/* STYLE ISSU DE CATEGORIES PART-1 */
.cat-index-1 {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 4vw;
    min-height: 85vh;
    background-color: #0A1A2F; /* Bleu Foncé */
    padding: 140px 130px 4vw 130px; /* Marges exactes */
    width: 100%;
    max-width: 2560px;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
}

.cat-content-index-1 {
    display: flex;
    flex-direction: column;
    gap: 1.5vw;
    width: 45%;
    z-index: 2;
}

.cat-index-1 h1 {
    margin: 0;
    color: #fff;
    font-weight: 700;
    line-height: 1.1;
    font-size: 4vw;
    letter-spacing: -0.02em;
}

.cat-services-index {
    margin: 0;
    color: #9CA3AF;
    line-height: 1.6;
    font-size: 1.1vw;
}

/* AJOUT : Style pour les balises strong/b à l'intérieur du texte */
.cat-services-index strong, 
.cat-services-index b {
    color: white;
    font-weight: 600;
}

.cat-hero-btn {
    display: flex;
    justify-content: space-between;
    align-items: center;
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

.cat-hero-btn:hover {
    background-position: right;
    color: #0A1A2F;
}

.cat-icon-hero {
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

.cat-hero-btn:hover .cat-icon-hero {
    background: #0A1A2F;
    color: #ffffff;
}

.cat-icon-hero svg {
    width: 1.2vw;
    height: 1.2vw;
    stroke: currentColor;
    stroke-width: 2;
    transition: transform 0.3s;
}

.cat-hero-btn:hover .cat-icon-hero svg {
    transform: rotate(45deg);
}

.cat-index-1-img-wrapper {
    width: 50%;
    height: 70vh;
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid #3DA8FF;
}

.cat-index-1 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@media (max-width: 1024px) {
    .cat-index-1 {
        flex-direction: column;
        align-items: flex-start;
        padding: 140px 20px 60px 20px;
        height: auto;
    }
    .cat-content-index-1 { width: 100%; }
    .cat-index-1 h1 { font-size: 42px; }
    .cat-services-index { font-size: 16px; }
    .cat-hero-btn { width: 100%; justify-content: center; padding: 12px 24px; font-size: 14px; }
    .cat-icon-hero { width: 30px; height: 30px; }
    .cat-icon-hero svg { width: 18px; height: 18px; }
    .cat-index-1-img-wrapper { width: 100%; height: 40vh; margin-top: 30px; }
}
</style>

<section class="cat-index-1">
  <div class="cat-content-index-1">
    <h1><?= htmlspecialchars($hero_title, ENT_QUOTES, 'UTF-8') ?></h1>

    <div class="cat-services-index">
      <!-- Modification ICI : utilisation de strip_tags pour autoriser le HTML sécurisé -->
      <?= strip_tags($hero_text, '<strong><b><br><em><u>') ?>
    </div>

    <a href="<?php echo $base_url?><?= htmlspecialchars($hero_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="cat-hero-btn" aria-label="<?= htmlspecialchars($hero_btn_label, ENT_QUOTES, 'UTF-8') ?>">
      <div><?= htmlspecialchars($hero_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
      <div class="cat-icon-hero">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
      </div>
    </a>
  </div>

  <div class="cat-index-1-img-wrapper">
      <img src="<?php echo $images_url?><?= htmlspecialchars($hero_img_src, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($hero_img_alt, ENT_QUOTES, 'UTF-8') ?>">
  </div>
</section>