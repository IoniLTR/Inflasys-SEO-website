
   <?php
   /* --------------------------------------------------------------
   VARIABLES À DÉFINIR DANS LA PAGE
   ----------------------------------- */
   $sitemap_title = "Plan du site";
   // <?php require_once $base_path . 'components/plan-du-site/part-1.php'; ?>

<section class="sitemap-header">
    <h1><?= htmlspecialchars($sitemap_title, ENT_QUOTES, 'UTF-8') ?></h1>
</section>

<style>
    .sitemap-header {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 50vh; /* Ajusté pour ne pas être trop immense */
        background-color: #0A1A2F; /* Bleu Foncé */
        color: white;
        
        /* Marges Standards pour Header Fixed */
        padding-top: 140px; 
        padding-bottom: 4vw;
        padding-left: 20px;
        padding-right: 20px;
        
        font-family: 'Poppins', sans-serif;
    }

    .sitemap-header h1 {
        font-size: clamp(2.5rem, 5vw, 4.5rem);
        font-weight: 700;
        text-align: center;
        margin: 0;
        letter-spacing: -0.02em;
    }
</style>