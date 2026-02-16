<?php
/* --------------------------------------------------------------
   VARIABLES
   --------------------------------------------------------------
<?php
$part6_title = $part6_title ?? "Comment doit être composée une agence Design?";
$part6_intro_strong = $part6_intro_strong ?? "Une bonne agence de webdesign doit réunir des experts UX/UI, développeurs web, et spécialistes SEO pour garantir un site esthétique, fonctionnel et bien référencé.";
$part6_paragraphs = $part6_paragraphs ?? [
    "Le ou les designers UX/UI créent une interface intuitive et agréable, tandis que le développeur apporte son expertise technique sur la faisabilité et les coûts liés aux solutions envisagées. Les experts SEO peuvent apporter des audits, analyses ou du conseil pour optimiser la structure et le contenu et ainsi favoriser le positionnement sur les moteurs de recherche. Un rédacteur web est également essentiel pour produire du contenu optimisé, aligné avec les objectifs SEO et les attentes des utilisateurs.",
    "Enfin, un chef de projet coordonne l’équipe pour garantir la cohérence, le respect des délais et du budget, assurant ainsi le succès du projet web pour toutes les parties."
];
   require_once $base_path . 'components/categories/part-6.php';
   ?>
   -------------------------------------------------------------- */
?>

<style>
.cat-team {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    background-color: #0A1A2F; /* Dark Blue */
    width: 100%;
    
    /* Alignement Header */
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    
    gap: 5.55vw;
    color: white;
}

.cat-team-cta {
    display: flex;
    flex-direction: column;
    width: 40%;
}
 
.cat-team-cta h2 {
    font-size: 2.5vw;
    font-weight: 700;
    border-left: 4px solid #3DA8FF;
    padding-left: 2vw;
}

.cat-team-text {
    display: flex;
    flex-direction: column;
    width: 60%;
    gap: 2vw;
    font-size: 1.1vw;
    line-height: 1.6;
}

.cat-team-text strong {
    color: #3DA8FF;
    font-size: 1.3vw;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .cat-team { flex-direction: column; padding: 60px 20px; gap: 30px; }
    .cat-team-cta, .cat-team-text { width: 100%; }
    .cat-team-cta h2 { font-size: 28px; border-left-width: 3px; padding-left: 15px; }
    .cat-team-text { font-size: 16px; }
    .cat-team-text strong { font-size: 18px; }
}
</style>

<section class="cat-team">
    <div class="cat-team-cta">
        <h2><?= htmlspecialchars($part6_title, ENT_QUOTES, 'UTF-8') ?></h2>
    </div>

    <div class="cat-team-text">
        <?php if (!empty($part6_intro_strong)): ?>
            <p><strong><?= nl2br(htmlspecialchars($part6_intro_strong, ENT_QUOTES, 'UTF-8')) ?></strong></p>
        <?php endif; ?>

        <?php foreach ($part6_paragraphs as $p): ?>
            <p><?= nl2br(htmlspecialchars($p, ENT_QUOTES, 'UTF-8')) ?></p>
        <?php endforeach; ?>
    </div>
</section>