<?php
/* --------------------------------------------------------------
   VARIABLES À DÉFINIR DANS LA PAGE
   -----------------------------------
   <?php
   $article_bg_img = "uploads/default.webp"; 
   $breadcrumb_home = "Accueil";
   $breadcrumb_cat = "tous les articles";
   $article_tag = "Article SEO";
   $article_title = "Présentation des 5 meilleurs outils SEO SaaS généralistes en 2025";
   
   $link_cat = "nos-articles/";
   
    require_once $base_path . 'components/nos-articles/articles/part-1.php';
   ?>
-------------------------------------------------------------- */
?>

<style>
    /* ==========================================================================
       CSS ARTICLE PART-1 (Inspiré de cat-index-1)
       ========================================================================== */
    .art-index-1 {
        position: relative;
        width: 100%;
        min-height: 85vh; /* Comme cat-index-1 */
        display: flex;
        flex-direction: column;
        justify-content: flex-end; /* Texte en bas */
        
        /* --- MARGES STANDARDS CATEGORIE --- */
        padding: 140px 130px 4vw 130px;
        max-width: 2560px;
        margin: 0 auto;
        
        background-color: #0A1A2F;
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
        color: #ffffff;
    }

    /* Image de fond (Spécifique Article) */
    .art-index-1 > img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center; 
        z-index: 0;
        opacity: 0.6; 
    }

    /* Overlay comme sur les catégories (mais pleine page ici) */
    .art-index-1::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(10, 26, 47, 1) 0%, rgba(10, 26, 47, 0.4) 100%);
        z-index: 1;
    }

    .art-content-index-1 {
        position: relative;
        z-index: 10;
        width: 100%;
        max-width: 1200px;
        display: flex;
        flex-direction: column;
        gap: 1.5vw;
    }

    /* --- FIL D'ARIANE --- */
    .art-ariane {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 10px;
        font-size: 0.9rem;
        color: #9CA3AF;
        margin-bottom: 1vw;
        font-weight: 500;
    }

    .art-ariane a {
        color: #E5E7EB;
        text-decoration: none;
        transition: color 0.3s;
    }
    .art-ariane a:hover { color: #3DA8FF; }

    .art-ariane svg { width: 12px; height: 12px; fill: #9CA3AF; }

    .art-ariane div:last-child strong { color: #3DA8FF; font-weight: 600; }

    /* --- TITRE & TAG --- */
    .art-tag {
        display: inline-block;
        padding: 6px 12px;
        background-color: rgba(61, 168, 255, 0.1);
        border: 1px solid #3DA8FF;
        color: #3DA8FF;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 4px;
        width: fit-content;
    }

    .art-index-1 h1 {
        margin: 0;
        color: #fff;
        font-weight: 700;
        line-height: 1.1;
        font-size: 4vw; /* Identique cat-index-1 */
        letter-spacing: -0.02em;
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 1024px) {
        .art-index-1 {
            min-height: 50vh;
            padding: 140px 20px 60px 20px; /* Marges Mobile Catégorie */
        }
        .art-index-1 h1 {
            font-size: 42px;
        }
    }
</style>

<section class="art-index-1">
  <img src="<?php echo $images_url ?><?php echo htmlspecialchars($article_bg_img); ?>" alt="Fond décoratif">
  
  <div class="art-content-index-1">
      <div class="art-ariane">
        <a href="<?php echo $base_url ?>"><?php echo htmlspecialchars($breadcrumb_home); ?></a>
        <svg viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
        <a href="<?php echo $base_url ?><?php echo htmlspecialchars($link_cat); ?>"><?php echo htmlspecialchars($breadcrumb_cat); ?></a>
        <svg viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
        <div><strong><?php echo htmlspecialchars($article_title); ?></strong></div>
      </div>

      <div class="art-tag"><?php echo htmlspecialchars($article_tag); ?></div>
      <h1><?php echo htmlspecialchars($article_title); ?></h1>
  </div>
</section>