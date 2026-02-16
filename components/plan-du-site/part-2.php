<?php
/* --------------------------------------------------------------
   VARIABLES & LIENS
   -------------------------------------------------------------- */
   
// Structure des liens du site
$sitemap_content = [
    "Pages Principales" => [
        "Accueil" => $base_url . "/",
        "Contact" => $base_url . "contact",
        "Mentions Légales" => $base_url . "mentions-legales",
        "Politique de confidentialité" => $base_url . "confidentialite",
        "Plan du site" => $base_url . "plan-du-site"
    ],
    "Expertises" => [
        "Toutes nos expertises" => $base_url . "expertises",
        "Expertise par ville" => $base_url . "expertises/expertises-ville"
    ],
    "Nos Réalisations" => [
        "Toutes nos réalisations" => $base_url . "nos-realisations",
        "Une réalisation" => $base_url . "nos-realisations/realisation"
    ],
    "Nos Étude de cas" => [
        "Toutes nos réalisations" => $base_url . "nos-cas-clients",
        "Une réalisation" => $base_url . "nos-cas-clients/cas-clients"
    ],
    "Blog" => [
        "Le Blog" => $base_url . "nos-articles",
        "Un article" => $base_url . "nos-articles/articles"
    ],
    "Catégories" => [
        "Toutes les catégories" => $base_url . "categories",
        "Sous-catégorie" => $base_url . "categories/sous-categories"
    ]
];
   // <?php require_once $base_path . 'components/plan-du-site/part-2.php'; ?>

<section class="sitemap-content">
    <div class="sitemap-grid">
        
        <?php foreach ($sitemap_content as $section_title => $links): ?>
            <div class="sitemap-group">
                <h2><?= htmlspecialchars($section_title) ?></h2>
                <div class="sitemap-links">
                    <?php foreach ($links as $label => $url): ?>
                        <a href="<?= htmlspecialchars($url) ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            <?= htmlspecialchars($label) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<style>
/* ==========================================================================
   CSS SITEMAP PART-2
   ========================================================================== */
.sitemap-content {
    background-color: #ffffff;
    width: 100%;
    
    /* --- MARGES STANDARDS --- */
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    
    font-family: 'Poppins', sans-serif;
    color: #0A1A2F;
}

.sitemap-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 colonnes */
    gap: 4vw;
}

/* Groupe de liens */
.sitemap-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 2vw;
}

/* Titre H2 (Sections) */
.sitemap-group h2 {
    font-size: 1.8vw;
    font-weight: 700;
    color: #0A1A2F;
    margin-bottom: 1.5vw;
    border-bottom: 2px solid #3DA8FF;
    padding-bottom: 0.5vw;
    width: fit-content;
}

/* Liste des liens */
.sitemap-links {
    display: flex;
    flex-direction: column;
    gap: 0.8vw;
}

/* Lien individuel */
.sitemap-links a {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: #4B5563; /* Gris */
    font-size: 1.1vw;
    font-weight: 500;
    transition: all 0.3s ease;
}

.sitemap-links a svg {
    width: 1.2vw;
    height: 1.2vw;
    stroke: #3DA8FF;
    transition: transform 0.3s ease;
}

/* Hover Effects */
.sitemap-links a:hover {
    color: #3DA8FF;
    transform: translateX(5px);
}

.sitemap-links a:hover svg {
    transform: translateX(3px);
}

/* ============================= */
/* RESPONSIVE                    */
/* ============================= */
@media (max-width: 1024px) {
    .sitemap-content {
        padding: 60px 20px;
    }

    .sitemap-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 colonnes tablette */
        gap: 40px;
    }

    .sitemap-group h2 {
        font-size: 24px;
        margin-bottom: 20px;
        border-bottom-width: 2px;
    }

    .sitemap-links {
        gap: 15px;
    }

    .sitemap-links a {
        font-size: 16px;
    }

    .sitemap-links a svg {
        width: 18px;
        height: 18px;
    }
}

@media (max-width: 600px) {
    .sitemap-grid {
        grid-template-columns: 1fr; /* 1 colonne mobile */
        gap: 40px;
    }
}
</style>