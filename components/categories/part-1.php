<?php 
/* --------------------------------------------------------------
   VARIABLES À DÉFINIR DANS LA PAGE PARENTE
   --------------------------------------------------------------
   <?php 
   $cat_hero_title     = $cat_hero_title ?? 'Agence Design';
   $cat_hero_text      = $cat_hero_text ?? "Le Design est une discipline vaste et complète, composée de nombreuses branches et expertises spécifiques.";
   $cat_hero_btn_label = $cat_hero_btn_label ?? 'Nous contacter';
   $cat_hero_btn_link  = $cat_hero_btn_link ??  'contact/';
   $cat_hero_img_src   = $cat_hero_img_src ?? 'uploads/default.webp';
   $cat_hero_img_alt   = $cat_hero_img_alt ?? 'Structure gonflable Airtechnic';
   require_once $base_path . 'components/categories/part-1.php';
   ?>
  -------------------------------------------------------------- */
?>

<style>
/* ==========================================================================
   CSS CATEGORIES PART-1
   ========================================================================== */
.cat-index-1 {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 4vw;
    min-height: 85vh;
    background-color: #0A1A2F; /* Bleu Foncé */
    
    /* Alignement Header */
    padding: 140px 130px 4vw 130px; 
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
    color: #9CA3AF; /* Gris */
    line-height: 1.6;
    font-size: 1.1vw;
}

/* --- BOUTON HERO ADAPTÉ AU FOND SOMBRE --- */
.cat-hero-btn {
    display: flex;
    justify-content: space-between;
    align-items: center;
    
    /* Dégradé : Bleu Clair -> Blanc (pour contraste sur fond sombre) */
    background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #ffffff 50%, #ffffff 100%);
    background-size: 210% 100%;
    background-position: left;
    
    transition: background-position 0.6s ease, color 0.6s ease;
    padding: 0.8vw 1.5vw;
    border-radius: 50px;
    
    color: #fff; /* Texte blanc par défaut */
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
    color: #0A1A2F; /* Texte devient bleu foncé au survol */
}

/* Cercle de l'icône */
.cat-icon-hero {
    background: #ffffff; /* Fond blanc par défaut */
    border-radius: 50%;
    width: 2vw;
    height: 2vw;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
    color: #0A1A2F; /* Icône bleue par défaut */
}

/* Au survol du bouton, le cercle devient foncé pour contraster avec le fond blanc */
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

/* Image Wrapper avec coupe */
.cat-index-1-img-wrapper {
    width: 50%;
    height: 70vh;
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid #3DA8FF; /* Bordure tech */
}

.cat-index-1 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* ============================= */
/* RESPONSIVE                    */
/* ============================= */
@media (max-width: 1024px) {
    .cat-index-1 {
        flex-direction: column;
        align-items: flex-start;
        padding: 140px 20px 60px 20px;
        height: auto;
        min-height: auto;
    }

    .cat-content-index-1 {
        width: 100%;
    }

    .cat-index-1 h1 {
        font-size: 42px;
    }

    .cat-services-index {
        font-size: 16px;
    }

    /* Mobile Button Adjustments */
    .cat-hero-btn {
        width: 100%;
        justify-content: center;
        padding: 12px 24px;
        font-size: 14px;
    }

    .cat-icon-hero {
        width: 30px; height: 30px;
    }
    .cat-icon-hero svg { width: 18px; height: 18px; }

    .cat-index-1-img-wrapper {
        width: 100%;
        height: 40vh;
        margin-top: 30px;
    }
}
</style>

<section class="cat-index-1">
  <div class="cat-content-index-1">
    <h1><?= htmlspecialchars($cat_hero_title, ENT_QUOTES, 'UTF-8') ?></h1>

    <div class="cat-services-index">
      <?= nl2br(htmlspecialchars($cat_hero_text, ENT_QUOTES, 'UTF-8')) ?>
    </div>

    <a href="<?php echo $base_url?><?= htmlspecialchars($cat_hero_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="cat-hero-btn" aria-label="<?= htmlspecialchars($cat_hero_btn_label, ENT_QUOTES, 'UTF-8') ?>">
      <div><?= htmlspecialchars($cat_hero_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
      <div class="cat-icon-hero">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
      </div>
    </a>
  </div>

  <div class="cat-index-1-img-wrapper">
      <img src="<?php echo $images_url?><?= htmlspecialchars($cat_hero_img_src, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($cat_hero_img_alt, ENT_QUOTES, 'UTF-8') ?>">
  </div>
</section>