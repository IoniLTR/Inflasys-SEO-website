<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION
   -----------------------------------
<?php
   // 1. Charger les données
   require_once __DIR__ . '/data-villes.php';

   $part8_title = "Nos Agences Webflow en France";
   
   // 2. Image unique pour toutes les cartes (comme demandé)
   $image_unique_pour_tous = "uploads/default.webp";

   // 3. Construire le tableau de projets dynamiquement
   $part8_projects = [];

   foreach ($villes_config as $slug => $data) {
       $part8_projects[] = [
           // href = nom du sous-dossier (expertises-ville)
           "href" => "expertises/expertises-" . $slug . "/", 
           
           // img = seule et même image
           "img" => $image_unique_pour_tous, 
           
           // h3 = .contact-ville-col-1 h2 (qui est stocké dans 'contact_title')
           "title" => $data['contact_title'] 
       ];
   }

   require_once $base_path . 'components/expertises/part-8.php';
   ?>
-------------------------------------------------------------- */
?>

<section class="nos-agences">
    <h2><?= htmlspecialchars($part8_title, ENT_QUOTES, 'UTF-8') ?></h2>

    <?php if (!empty($part8_pattern)): ?>
        <img class="nos-agences-pattern" src="<?php echo $images_url ?><?= htmlspecialchars($part8_pattern, ENT_QUOTES, 'UTF-8') ?>" alt="pattern">
    <?php endif; ?>

    <div class="nos-agences-content">
        <?php if (!empty($part8_projects) && is_array($part8_projects)): ?>
            <?php foreach ($part8_projects as $project): ?>
                <a class="nos-agences-card" href="<?php echo $base_url ?><?= htmlspecialchars($project['href'], ENT_QUOTES, 'UTF-8') ?>">
                    <h3><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <img src="<?php echo $images_url ?><?= htmlspecialchars($project['img'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <div class="nos-agences-nav" data-items-per-page="6"></div>
</section>

<style>
/* ==========================================================================
   CSS EXPERTISES PART-8
   ========================================================================== */
.nos-agences {
    background-color: #ffffff;
    width: 100%;
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    position: relative;
}

.nos-agences h2 {
    font-size: 2.5vw;
    font-weight: 700;
    color: #0A1A2F;
    margin: 0 0 3vw 0;
}

.nos-agences-pattern {
    position: absolute;
    right: 130px;
    top: 2.5vw;
    width: 8vw;
    opacity: 0.1;
}

.nos-agences-content {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5vw;
    opacity: 1;
    transition: opacity 0.3s ease;
}

.nos-agences-content.is-transitioning {
    opacity: 0;
}

.nos-agences-card {
    position: relative;
    aspect-ratio: 16 / 9;
    overflow: hidden;
    border-radius: 4px;
    display: block;
    background: #000;
}

.nos-agences-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
    opacity: 0.8;
}

.nos-agences-card:hover img {
    transform: scale(1.1);
    opacity: 0.6;
}

.nos-agences-card h3 {
    position: absolute;
    bottom: 1.5vw;
    left: 1.5vw;
    color: white;
    font-size: 1.5vw;
    font-weight: 600;
    z-index: 2;
    margin: 0;
}

/* Pagination */
.nos-agences-nav {
    display: flex;
    justify-content: center;
    gap: 0.5vw;
    margin-top: 3vw;
}

.nos-agences-nav button {
    border: 1px solid #E2E8F0;
    width: 2.5vw;
    height: 2.5vw;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 4px;
    background-color: transparent;
    color: #0A1A2F;
    cursor: pointer;
    font-weight: 600;
    font-size: 1vw;
    transition: 0.3s;
}

.nos-agences-nav button.is-active, .nos-agences-nav button:hover {
    background-color: #0A1A2F;
    color: white;
    border-color: #0A1A2F;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .nos-agences { padding: 60px 20px; }
    .nos-agences h2 { font-size: 28px; }
    .nos-agences-pattern { display: none; }
    
    .nos-agences-content { grid-template-columns: 1fr; gap: 20px; }
    .nos-agences-card h3 { font-size: 20px; bottom: 20px; left: 20px; }
    
    .nos-agences-nav button { width: 40px; height: 40px; font-size: 16px; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.nos-agences').forEach(function (section) {
        const cardsContainer = section.querySelector('.nos-agences-content');
        const cards = Array.from(section.querySelectorAll('.nos-agences-card'));
        const nav = section.querySelector('.nos-agences-nav');

        if (!cardsContainer || !nav || cards.length === 0) return;

        const itemsPerPage = parseInt(nav.getAttribute('data-items-per-page'), 10) || 6;
        const totalPages = Math.ceil(cards.length / itemsPerPage);
        let currentPage = 1;

        function showPage(page) {
            if (page < 1 || page > totalPages) return;
            currentPage = page;
            cardsContainer.classList.add('is-transitioning');

            setTimeout(function () {
                const start = (currentPage - 1) * itemsPerPage;
                const end = start + itemsPerPage;
                cards.forEach((card, index) => {
                    card.style.display = (index >= start && index < end) ? '' : 'none';
                });
                updateNav();
                cardsContainer.classList.remove('is-transitioning');
            }, 300);
        }

        function createButton(label, page, active = false) {
            const btn = document.createElement('button');
            btn.textContent = label;
            if(active) btn.classList.add('is-active');
            btn.addEventListener('click', () => showPage(page));
            nav.appendChild(btn);
        }

        function updateNav() {
            nav.innerHTML = '';
            if (totalPages <= 1) return;
            for(let i=1; i<=totalPages; i++) createButton(i, i, i===currentPage);
        }
        showPage(1);
    });
});
</script>