<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php

// --- 1. CONFIGURATION ---
$titre_section_filtres = "Filtrer les articles que vous souhaitez consulter :";
$nombre_articles_page  = 6; 

// --- 2. INITIALISATION ---
$mes_articles = [];
$mes_filtres = []; // On commence avec une liste vide
$dossier_racine = __DIR__; 
$sous_dossiers = glob($dossier_racine . '/*', GLOB_ONLYDIR);

// --- 3. SCAN ET GÉNÉRATION AUTOMATIQUE (ARTICLES + FILTRES) ---
foreach ($sous_dossiers as $dossier) {
    $fichier_article = $dossier . '/index.php';

    if (file_exists($fichier_article)) {
        
        $contenu = file_get_contents($fichier_article);

        // -- A. Extraction des données --
        
        // Titre
        preg_match('/\$article_title\s*=\s*["\'](.*?)["\'];/', $contenu, $titre_match);
        $titre = $titre_match[1] ?? 'Titre non défini';

        // Auteur
        preg_match('/\$author_firstname\s*=\s*["\'](.*?)["\'];/', $contenu, $prenom_match);
        preg_match('/\$author_lastname\s*=\s*["\'](.*?)["\'];/', $contenu, $nom_match);
        $auteur = ($prenom_match[1] ?? '') . ' ' . ($nom_match[1] ?? '');

        // Tag (ex: "Article SEO")
        preg_match('/\$article_tag\s*=\s*["\'](.*?)["\'];/', $contenu, $tag_match);
        $tag_brut = $tag_match[1] ?? 'Divers';

        // Image
        preg_match('/\$article_bg_img\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/', $contenu, $img_match);
        $image_complete = ($img_match[1] ?? 'uploads/default.webp');

        // Description
        preg_match('/\'content\'\s*=>\s*["\'](.*?)["\']/', $contenu, $desc_match);
        $description = $desc_match[1] ?? 'Lire la suite...';

        // Lien (Dossier)
        $lien = "nos-articles/" . basename($dossier) . "/";


        // -- B. Logique des Filtres (Automatique) --
        
        // 1. On nettoie le nom pour l'affichage (Enlève "Article " si présent)
        $label_filtre = str_replace('Article ', '', $tag_brut); // ex: "Article SEO" devient "SEO"
        
        // 2. On crée une clé unique (slug) en minuscule pour le code HTML
        $slug_filtre = strtolower(trim($label_filtre)); // ex: "seo"

        // 3. Ajout au tableau $mes_filtres (Les clés écrasent les doublons automatiquement)
        if (!empty($slug_filtre)) {
            $mes_filtres[$slug_filtre] = $label_filtre;
        }


        // -- C. Ajout de l'article --
        $mes_articles[] = [
            'titre'       => $titre,
            'auteur'      => trim($auteur) ?: 'Équipe',
            'description' => html_entity_decode($description),
            'categorie'   => $slug_filtre, // Doit correspondre à la clé du filtre
            'etiquette'   => $label_filtre, // On affiche le label propre
            'image'       => $image_complete,
            'lien'        => $lien,
            'bouton'      => "Lire l'article"
        ];
    }
}

// Optionnel : Trier les filtres par ordre alphabétique pour faire propre
asort($mes_filtres);

require_once $base_path . 'components/nos-articles/part-2.php';
?>
-------------------------------------------------------------- */
?>

<section class="all-articles">
    <div class="all-articles-content">
      
      <div class="all-articles-content-img" id="articles-grid">
        
        <?php foreach ($mes_articles as $article): ?>
          <a href="<?php echo $base_url ?><?= htmlspecialchars($article['lien']) ?>" class="all-articles-content-img-card" data-category="<?= htmlspecialchars($article['categorie']) ?>">
            
            <div class="all-articles-content-img-card-img">
              <div class="card-tag"><?= htmlspecialchars($article['etiquette']) ?></div>
              <?php $img = !empty($article['image']) ? $article['image'] : ''; ?>
              <?php if($img): ?>
                <img src="<?php echo $images_url ?><?= htmlspecialchars($img) ?>" loading="lazy" alt="<?= htmlspecialchars($article['titre']) ?>">
              <?php endif; ?>
            </div>

            <div class="all-articles-content-img-card-content">
              <div class="all-articles-redac">
                  <span class="dot-redac"></span> <?= htmlspecialchars($article['auteur']) ?>
              </div>
              <h2><?= htmlspecialchars($article['titre']) ?></h2>
              <div class="all-articles-content-img-card-text"><?= htmlspecialchars($article['description']) ?></div>
              
              <div class="all-articles-voir">
                  <?= htmlspecialchars($article['bouton']) ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="svg-arrow">
                    <path d="M6 18h2v-7.17l8.59 8.58 1.41-1.41L9.41 9.42H16.58V7.41H6z" style="fill: currentColor;"></path>
                  </svg>
              </div>
            </div>

          </a>
        <?php endforeach; ?>

      </div>

      <div class="all-articles-content-filtre">
        <div class="all-articles-content-filtre-text">
            <?= htmlspecialchars($titre_section_filtres) ?>
        </div>
        
        <div class="all-articles-content-filtre-all-button">
          <?php foreach ($mes_filtres as $code => $label): ?>
            <label class="all-articles-content-filtre-button">
                <input type="checkbox" name="filter" value="<?= htmlspecialchars($code) ?>">
                <span><?= htmlspecialchars($label) ?></span>
            </label>
          <?php endforeach; ?>
        </div>
      </div>

    </div>

    <div class="nos-agences-nav" id="pagination-container"></div>

</section>

<style>
    /* Import Police */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    .all-articles {
        background-color: #F8FAFC; /* Gris très clair technique */
        font-family: 'Poppins', sans-serif;
        /* ALIGNEMENT STRICT */
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        padding-left: 130px;
        padding-right: 130px;
        padding-top: 5rem;
        padding-bottom: 5rem;
        color: #0A1A2F;
        box-sizing: border-box;
    }

    .all-articles-content {
        display: flex;
        flex-direction: row;
        gap: 60px; 
        align-items: flex-start;
        position: relative;
    }

    /* --- GRILLE --- */
    .all-articles-content-img {
        flex: 1; 
        display: grid;
        grid-template-columns: repeat(2, 1fr); 
        gap: 2rem;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* --- CARTE --- */
    .all-articles-content-img-card {
        background-color: #ffffff;
        text-decoration: none;
        color: inherit;
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(10, 26, 47, 0.05); /* Bordure subtile */
        border-radius: 4px; 
        overflow: hidden;
        transition: all 0.3s ease;
        animation: fadeIn 0.4s ease-out;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }

    .all-articles-content-img-card:hover { 
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        border-color: #3DA8FF;
    }

    .all-articles-content-img-card-img {
        position: relative;
        width: 100%;
        padding-top: 60%; /* Ratio Image */
        background-color: #0A1A2F; 
    }

    .all-articles-content-img-card-img img {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;
        transition: transform 0.5s ease;
    }
    .all-articles-content-img-card:hover img { transform: scale(1.05); }

    .card-tag {
        position: absolute;
        top: 15px;
        left: 15px;
        background-color: #3DA8FF; /* Bleu Clair Charte */
        color: #ffffff;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        padding: 5px 10px;
        z-index: 2;
        border-radius: 2px;
    }

    .all-articles-content-img-card-content {
        padding: 2rem; 
        display: flex;
        flex-direction: column;
        gap: 1rem;
        flex-grow: 1;
    }

    .all-articles-redac {
        font-size: 0.8rem; 
        color: #9CA3AF; 
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 0.5px;
        display: flex; align-items: center; gap: 8px;
    }
    .dot-redac { width: 6px; height: 6px; background: #3DA8FF; border-radius: 50%; }

    .all-articles-content-img-card h2 {
        margin: 0;
        font-size: 1.4rem; 
        line-height: 1.3;
        font-weight: 700;
        color: #0A1A2F; 
    }

    .all-articles-content-img-card-text {
        font-size: 0.95rem;
        line-height: 1.6;
        color: #4b5563; 
        margin-bottom: 15px;
        display: -webkit-box;
        -webkit-line-clamp: 3; 
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Bouton avec SVG */
    .all-articles-voir {
        margin-top: auto; 
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        color: #3DA8FF; 
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: gap 0.2s;
    }
    .all-articles-content-img-card:hover .all-articles-voir { gap: 10px; }

    /* --- SIDEBAR FILTRES --- */
    .all-articles-content-filtre {
        width: 280px; 
        flex-shrink: 0;
        position: sticky; 
        top: 100px; /* Ajusté selon header */
        background: white;
        padding: 2rem;
        border-radius: 4px;
        border: 1px solid #e5e7eb;
    }

    .all-articles-content-filtre-text {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        color: #0A1A2F; 
    }

    .all-articles-content-filtre-all-button {
        display: flex;
        flex-direction: column; /* Liste verticale pour Sidebar */
        gap: 10px;
    }

    .all-articles-content-filtre-button {
        cursor: pointer;
        display: block;
        user-select: none;
    }

    .all-articles-content-filtre-button input { display: none; }

    .all-articles-content-filtre-button span {
        display: block;
        padding: 12px 15px;
        border: 1px solid #E2E8F0; 
        border-radius: 4px; 
        background-color: #F8FAFC;
        color: #64748B; 
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .all-articles-content-filtre-button:hover span { 
        background-color: #fff; 
        border-color: #3DA8FF;
        color: #3DA8FF;
    }

    .all-articles-content-filtre-button input:checked + span {
        background-color: #0A1A2F; 
        color: #fff;
        border-color: #0A1A2F;
    }

    /* --- PAGINATION --- */
    .nos-agences-nav {
        display: flex;
        justify-content: center; 
        gap: 10px;
        margin-top: 60px;
        width: 100%; 
    }

    .pagination-btn {
        border: 1px solid #E2E8F0; 
        width: 45px; height: 45px;
        display: flex; align-items: center; justify-content: center;
        border-radius: 4px; 
        background-color: white;
        color: #0A1A2F; 
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        transition: all 0.2s;
    }

    .pagination-btn.active {
        background-color: #3DA8FF; 
        color: white;
        border-color: #3DA8FF;
    }
    
    .pagination-btn:hover:not(.active) { background-color: #F1F5F9; }
    
    /* Responsive */
    @media (max-width: 1024px) {
        .all-articles { padding-left: 20px; padding-right: 20px; }
        .all-articles-content { flex-direction: column-reverse; }
        .all-articles-content-img { width: 100%; }
        
        .all-articles-content-filtre { 
            width: 100%; 
            position: static; 
            margin-bottom: 40px;
            padding: 1.5rem;
        }
        .all-articles-content-filtre-all-button { flex-direction: row; flex-wrap: wrap; }
    }
    
    @media (max-width: 600px) {
        .all-articles-content-img { grid-template-columns: 1fr; }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    
    const itemsPerPage = <?php echo json_encode($nombre_articles_page ?? 6); ?>;
    let currentPage = 1;
    
    const allCards = Array.from(document.querySelectorAll('.all-articles-content-img-card'));
    const checkboxes = document.querySelectorAll('input[name="filter"]');
    const paginationContainer = document.getElementById('pagination-container');

    function updateDisplay() {
        // Scroll top smooth si pagination changée
        // document.querySelector('.all-articles').scrollIntoView({ behavior: 'smooth' });

        const activeFilters = Array.from(checkboxes).filter(cb => cb.checked).map(cb => cb.value);

        let visibleCards = allCards.filter(card => {
            const category = card.getAttribute('data-category');
            if (activeFilters.length === 0) return true;
            return activeFilters.includes(category);
        });

        const totalPages = Math.ceil(visibleCards.length / itemsPerPage);
        if (currentPage > totalPages) currentPage = 1; // Reset si filtre réduit pages
        
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        allCards.forEach(card => { card.style.display = 'none'; });

        visibleCards.forEach((card, index) => {
            if (index >= startIndex && index < endIndex) {
                card.style.display = 'flex'; 
                // Reset animation
                card.style.animation = 'none';
                card.offsetHeight; /* Trigger reflow */
                card.style.animation = 'fadeIn 0.5s ease-out';
            }
        });

        renderPagination(totalPages);
    }

    function renderPagination(totalPages) {
        paginationContainer.innerHTML = '';
        if (totalPages <= 1) return;

        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement('button');
            btn.textContent = i;
            btn.classList.add('pagination-btn');
            if (i === currentPage) btn.classList.add('active');
            
            btn.addEventListener('click', () => {
                currentPage = i;
                updateDisplay();
                // Scroll haut de grille
                const grid = document.getElementById('articles-grid');
                window.scrollTo({
                    top: grid.offsetTop - 150,
                    behavior: 'smooth'
                });
            });
            paginationContainer.appendChild(btn);
        }
    }

    checkboxes.forEach(cb => {
        cb.addEventListener('change', () => {
            currentPage = 1; 
            updateDisplay();
        });
    });

    updateDisplay();
});
</script>