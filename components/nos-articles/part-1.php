<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
    $title_article_title = "Les articles d'Afalence";
    $title_article_paragraph_html = "Astuces, tutos, recommandations : vous trouverez ici tous les articles que nous avons rédigés pour vous transmettre toutes les informations dont vous pouvez avoir besoin pour comprendre notre environnement de travail et nos méthodes !";
   
   require_once $base_path . 'components/nos-articles/part-1.php';
   ?>
-------------------------------------------------------------- */
?>

<section class="title-articles">
    <div class="container-strict">
        
        <div class="title-articles-link">
            <a href="<?= $base_url ?>">Accueil</a>
            <div class="separator">></div>
            <div><strong>Blog Technique</strong></div>
        </div>

        <h1><?= htmlspecialchars($title_article_title ?? 'Actualités', ENT_QUOTES, 'UTF-8') ?></h1>
        <p><?= $title_article_paragraph_html ?? '' ?></p>

    </div>
</section>

<style>
    /* Import Police */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap');

    .title-articles {
        display: flex;
        flex-direction: column;
        background-color: #0A1A2F; /* Bleu Foncé Charte */
        justify-content: center;
        color: white;
        min-height: 100vh; /* Hauteur ajustée pour header */
        font-family: 'Poppins', sans-serif;
        padding-top: 8rem; /* Espace pour le header fixed */
        padding-bottom: 4rem;
        position: relative;
    }

    /* --- ALIGNEMENT STRICT (130px) --- */
    .container-strict {
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        padding-left: 130px;
        padding-right: 130px;
        box-sizing: border-box;
    }

    .title-articles-link {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 10px;
        font-size: 0.9rem;
        color: #9CA3AF; /* Gris moyen */
        margin-bottom: 2rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .title-articles-link a {
        color: #9CA3AF;
        text-decoration: none;
        transition: color 0.3s;
    }
    .title-articles-link a:hover { color: #3DA8FF; }

    .separator { color: #3DA8FF; }
    .title-articles-link strong { color: #3DA8FF; }

    .title-articles h1 {
        font-size: clamp(2.5rem, 5vw, 5rem);
        font-weight: 700;
        max-width: 1000px;
        margin: 0 0 1.5rem 0;
        line-height: 1.1;
        color: white;
    }

    .title-articles p {
        font-size: clamp(1rem, 1.2vw, 1.25rem);
        line-height: 1.6;
        max-width: 800px;
        color: #E2E8F0;
        border-left: 3px solid #3DA8FF;
        padding-left: 1.5rem;
    }

    /* --------- TABLETTE & MOBILE --------- */
    @media (max-width: 1024px) {
        .container-strict {
            padding-left: 20px;
            padding-right: 20px;
        }
        .title-articles { min-height: auto; padding-top: 7rem; padding-bottom: 4rem; }
    }
</style>