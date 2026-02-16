<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
// --- Configuration des Textes ---
$subtitle = "Projets et réalisations";
$mainTitle = "Notre agence en action";
$btnLabel = "Détail de la prestation";

require_once '../../components/nos-realisations/part-2.php';
?>

-------------------------------------------------------------- */
?>

<style>
    /* Import Police */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    :root {
        --at-bg-dark: #0A1A2F;
        --at-text-white: #ffffff;
        --at-blue-accent: #3DA8FF;
        --at-grey-medium: #9CA3AF;
        --transition-tech: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .projet-real-all {
        background-color: var(--at-bg-dark);
        color: var(--at-text-white);
        padding-top: 6rem;
        padding-bottom: 6rem;
        font-family: 'Poppins', sans-serif;
        position: relative;
        width: 100%;
    }
    
    /* Trame de fond technique */
    .projet-real-all::before {
        content: "";
        position: absolute;
        top:0; left:0; width:100%; height:100%;
        background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
        background-size: 50px 50px;
        opacity: 0.3;
        pointer-events: none;
    }

    /* --- ALIGNEMENT STRICT (Même que Part 1) --- */
    .container-strict-grid {
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        padding-left: 130px;  /* ALIGNEMENT HEADER */
        padding-right: 130px; /* ALIGNEMENT HEADER */
        box-sizing: border-box;
        position: relative;
        z-index: 2;
    }

    .header-section {
        margin-bottom: 4rem;
        border-bottom: 1px solid rgba(255,255,255,0.1);
        padding-bottom: 2rem;
    }

    .projet-real-all-subtitile {
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 500;
        color: var(--at-blue-accent);
        margin-bottom: 0.5rem;
        font-size: 0.85rem;
    }

    .projet-real-all h2 {
        font-size: clamp(2rem, 4vw, 3.5rem);
        font-weight: 700;
        margin: 0;
        color: white;
    }

    /* --- Grille --- */
    .projet-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
        gap: 2.5rem;
    }

    /* --- Carte Projet --- */
    .projet-card {
        display: flex;
        flex-direction: column;
        text-decoration: none;
        color: var(--at-text-white);
        border-radius: 4px;
        background: rgba(15, 25, 52, 0.6);
        border: 1px solid rgba(61, 168, 255, 0.1);
        padding: 2rem;
        transition: var(--transition-tech);
        position: relative;
        overflow: hidden;
    }

    .projet-card:hover {
        border-color: var(--at-blue-accent);
        transform: translateY(-5px);
        background: rgba(15, 25, 52, 0.9);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    }

    .projet-content-title h3 {
        font-size: 1.5rem;
        margin: 0 0 1.5rem 0;
        font-weight: 600;
    }

    .image-wrapper {
        width: 100%;
        height: 240px;
        background-color: #1a2c42;
        border-radius: 2px;
        overflow: hidden;
        margin-bottom: 1.5rem;
        border-bottom: 2px solid var(--at-blue-accent);
    }

    .image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
        filter: grayscale(20%);
    }

    .projet-card:hover .image-wrapper img {
        transform: scale(1.05);
        filter: grayscale(0%);
    }

    .projet-content-text {
        margin-bottom: 2rem;
        line-height: 1.6;
        color: var(--at-grey-medium);
        font-size: 0.95rem;
        flex-grow: 1;
    }

    /* --- Bouton Tech (Spécifique Carte) --- */
    .projet-real-button {
        display: inline-flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        width: 100%;
        padding: 0.8rem 1rem;
        background-color: transparent;
        border: 1px solid rgba(255,255,255,0.2);
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        cursor: pointer;
        transition: var(--transition-tech);
        border-radius: 2px;
    }

    .projet-card:hover .projet-real-button {
        background-color: var(--at-blue-accent);
        border-color: var(--at-blue-accent);
        color: var(--at-bg-dark);
    }

    .icon-circle {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        transition: var(--transition-tech);
    }

    .svg-arrow {
        width: 20px;
        height: 20px;
        fill: white;
        transition: var(--transition-tech);
    }
    
    .projet-card:hover .svg-arrow {
        fill: var(--at-bg-dark);
        transform: translate(2px, -2px);
    }

    /* --- Responsive --- */
    @media (max-width: 1024px) {
        .container-strict-grid {
            padding-left: 20px;
            padding-right: 20px;
        }
        
        .projet-grid {
             grid-template-columns: 1fr;
        }
    }
    
    @media (max-width: 425px) {
        .projet-card { padding: 1.5rem; }
        .image-wrapper { height: 200px; }
    }
</style>

<section class="projet-real-all">
    <div class="container-strict-grid">
        
        <div class="header-section">
             <div class="projet-real-all-subtitile"><?= htmlspecialchars($subtitle ?? 'Réalisations') ?></div>
             <h2><?= htmlspecialchars($mainTitle ?? 'Nos Projets') ?></h2>
        </div>

        <div class="projet-grid">
            <?php if(isset($projects) && is_array($projects)): ?>
                <?php foreach ($projects as $project): ?>
                    <a href="<?php echo $base_url?><?= htmlspecialchars($project['link']) ?>" class="projet-card">

                        <div class="projet-content-title">
                            <h3><?= htmlspecialchars($project['title']) ?></h3>
                        </div>

                        <div class="image-wrapper">
                            <img src="<?php echo $images_url?><?= htmlspecialchars($project['image']) ?>" alt="Projet <?= htmlspecialchars($project['title']) ?>" loading="lazy">
                        </div>

                        <div class="projet-content-descri">
                            <div class="projet-content-text">
                                <?= htmlspecialchars($project['description']) ?>
                            </div>

                            <div class="projet-real-button" aria-label="<?= htmlspecialchars($btnLabel ?? 'Voir') ?>">
                                <span class="btn-text"><?= htmlspecialchars($btnLabel ?? 'Détails') ?></span>
                                <span class="icon-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="svg-arrow">
                                        <path d="M6 18h2v-7.17l8.59 8.58 1.41-1.41L9.41 9.42H16.58V7.41H6z" style="fill: currentColor;"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        
    </div>
</section>