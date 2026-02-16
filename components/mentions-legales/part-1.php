
   <?php
   /* --------------------------------------------------------------
   VARIABLES À DÉFINIR DANS LA PAGE
   ----------------------------------- */
   $sitemap_title = "Mentions Légales";
   // <?php require_once $base_path . 'components/mentions-legales/part-1.php'; ?>

<section class="mention-legales">
    <h1><?= htmlspecialchars($sitemap_title, ENT_QUOTES, 'UTF-8') ?></h1>
</section>

<style>
    .mention-legales {
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

    .mention-legales h1 {
        font-size: clamp(2.5rem, 5vw, 4.5rem);
        font-weight: 700;
        text-align: center;
        margin: 0;
        letter-spacing: -0.02em;
    }
</style>