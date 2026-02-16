<?php
/* --------------------------------------------------------------
   VARIABLES
   -------------------------------------------------------------- 
   <?php
$work_title = $work_title ?? "Notre méthodologie technique";
$work_img_src = $work_img_src ?? "uploads/default.webp";
$work_img_alt = $work_img_alt ?? "Ingénieurs au travail";

$work_steps = $work_steps ?? [
    [
        "number" => "1",
        "title" => "Cadrage",
        "paragraphs" => ["Le cadrage webdesign est une étape essentielle dans le processus de création d'un site, visant à définir les objectifs, les attentes et les contraintes du projet. Il consiste à comprendre les besoins de l’entreprise, les comportements des utilisateurs cibles et les enjeux commerciaux afin de proposer une structure cohérente et optimisée. Cette phase inclut la définition de l’architecture du site, l’élaboration des maquettes fonctionnelles (wireframes), ainsi que la mise en place d’une stratégie de contenu. Le cadrage permet ainsi de poser les bases du projet, d’assurer une direction claire et de garantir que le design final réponde à la fois aux objectifs esthétiques et fonctionnels du client."]
    ],
    [
        "number" => "2",
        "title" => "Conception structurelle",
        "paragraphs" => [
        "La conception de la structure d’un site web consiste à définir l’architecture et l’organisation des informations de manière logique et fluide. Cette étape permet de planifier la hiérarchie des pages, la navigation et l’agencement des sections en fonction des besoins des utilisateurs et des objectifs de l’entreprise.",
        "Il faut tout d’abord prendre en compte les cibles du site (personae) pour s'assurer que la structure du site réponde aux attentes spécifiques de chaque groupe d'utilisateurs. L’objectif est de créer une expérience intuitive en veillant à ce que les informations soient facilement accessibles et bien hiérarchisées.",
        "La structure doit aussi tenir compte des critères techniques et SEO, pour assurer un bon référencement et une conception qui garantisse la cohérence et la performance du site à long terme."
        ]
    ],
    [
        "number" => "3",
        "title" => "Création visuelle",
        "paragraphs" => [
        "La partie visuelle du webdesign consiste à habiller la structure ou le wireframe du site pour en faire une maquette esthétique et fonctionnelle.",
        "Cette étape transforme les éléments de base en un design attractif, en choisissant les couleurs, les typographies, les images et les icônes, tout en veillant à respecter l'identité visuelle de la marque. L'objectif est de créer un environnement visuel agréable, harmonieux et cohérent, tout en facilitant l’interaction de l’utilisateur avec le site afin de favoriser l’engagement.",
        "Cela nécessite notamment d’anticiper la navigation sur tous les types appareils, en garantissant une navigation fluide, un bon contraste et une hiérarchie visuelle claire. Le design visuel doit ainsi servir à renforcer l’intention du site tout en rendant l’expérience utilisateur agréable et mémorable."
        ]
    ]
];
   require_once $base_path . 'components/categories/part-5.php';
   ?>
   -------------------------------------------------------------- */
?>

<style>
/* ==========================================================================
   CSS PART-5
   ========================================================================== */
.cat-methodo {
    display: flex;
    flex-direction: column;
    align-items: center;
    
    /* Alignement Header */
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    
    background-color: #F2F9FF; /* Fond très clair bleuté */
    color: #0A1A2F;
}

.cat-methodo h2 {
    font-size: 2.5vw;
    font-weight: 700;
    padding-bottom: 4vw;
    text-align: center;
}

.cat-methodo-content {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    width: 100%;
    gap: 4vw;
}

.cat-methodo-img {
    width: 35%;
    position: sticky;
    top: 150px; /* Header height + marge */
}

.cat-methodo-img img {
    width: 100%;
    object-fit: cover;
    aspect-ratio: 4/5;
    border-radius: 4px;
    box-shadow: 0 10px 30px rgba(10, 26, 47, 0.1);
}

.cat-methodo-text {
    width: 60%;
}

/* Accordéon Items */
.cat-methodo-item {
    display: flex;
    flex-direction: column;
    border-bottom: 1px solid #3DA8FF;
    padding: 1.5vw 0;
}

.cat-methodo-title {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    font-size: 1.5vw;
    cursor: pointer;
    user-select: none;
    color: #0A1A2F;
    font-weight: 600;
    transition: color 0.3s;
}

.cat-methodo-item:hover .cat-methodo-title {
    color: #3DA8FF;
}

.cat-methodo-toggle {
    width: 2vw;
    height: 2vw;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2vw;
    font-weight: 300;
    color: #3DA8FF;
}

.cat-methodo-paragraphe {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.35s ease;
    color: #4B5563;
}

.cat-methodo-paragraphe p {
    font-size: 1vw;
    margin-top: 1vw;
    line-height: 1.6;
}

/* État Ouvert */
.cat-methodo-item.is-open .cat-methodo-paragraphe {
    max-height: 500px;
}
.cat-methodo-item.is-open .cat-methodo-toggle {
    transform: rotate(45deg); /* Transforme le + en x */
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .cat-methodo { padding: 60px 20px; }
    .cat-methodo h2 { font-size: 28px; padding-bottom: 30px; }
    .cat-methodo-content { flex-direction: column; gap: 40px; }
    
    .cat-methodo-img { width: 100%; position: static; }
    .cat-methodo-img img { aspect-ratio: 16/9; }
    
    .cat-methodo-text { width: 100%; }
    
    .cat-methodo-title { font-size: 18px; }
    .cat-methodo-toggle { font-size: 24px; width: 24px; height: 24px; }
    .cat-methodo-paragraphe p { font-size: 14px; }
}
</style>

<section class="cat-methodo">
    <h2><?= htmlspecialchars($work_title, ENT_QUOTES, 'UTF-8') ?></h2>

    <div class="cat-methodo-content">
        <div class="cat-methodo-img">
            <img src="<?php echo $images_url ?><?= htmlspecialchars($work_img_src, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($work_img_alt, ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <div class="cat-methodo-text">
            <?php if (!empty($work_steps)): ?>
                <?php foreach ($work_steps as $step): ?>
                    <div class="cat-methodo-item">
                        <div class="cat-methodo-title">
                            <div>
                                <span style="color:#3DA8FF; margin-right:10px;"><?= htmlspecialchars($step['number'], ENT_QUOTES, 'UTF-8') ?>.</span>
                                <?= htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8') ?>
                            </div>
                            <div class="cat-methodo-toggle">+</div>
                        </div>
                        <div class="cat-methodo-paragraphe">
                            <?php foreach ($step['paragraphs'] as $p): ?>
                                <p><?= nl2br(htmlspecialchars($p, ENT_QUOTES, 'UTF-8')) ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.cat-methodo-item');
    items.forEach(item => {
        const title = item.querySelector('.cat-methodo-title');
        title.addEventListener('click', () => {
            // Optionnel : Fermer les autres
            // items.forEach(other => { if(other !== item) other.classList.remove('is-open'); });
            item.classList.toggle('is-open');
        });
    });
});
</script>