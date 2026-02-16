<?php
/* --------------------------------------------------------------
   VARIABLES
   --------------------------------------------------------------
<?php  
   $part6_title = "Comment doit être composée une agence spécialisée en création de sites internet à " . $ville_nom . " ?";
   $part6_intro = "Une agence de création de sites internet performante <strong>doit impérativement réunir les professionnels suivants</strong> :";
   $part6_list = [
        "Un designer spécialisé en expérience utilisateur (UX),",
        "Un développeur web,",
        "Un expert en référencement naturel (SEO)."
    ];
   $part6_paragraphs = [
       "<strong>Ces trois expertises sont indispensables pour garantir la réussite de votre projet web.</strong> Votre site doit être visuellement attractif, facile à utiliser, techniquement irréprochable et optimisé pour les moteurs de recherche.",
       "<strong>La finalité est de faire de votre site internet un outil marketing puissant, capable d'attirer de nouveaux visiteurs, de les engager et de les convertir en clients. </strong>Pour cela, il doit être à la fois esthétique, intuitif et persuasif, incitant les utilisateurs à interagir avec votre marque et à choisir vos produits ou services."
   ];
   require_once $base_path . 'components/expertises/expertises-ville/part-6.php';
?>
-------------------------------------------------------------- */
?>
<section class="exp-team">
    <div class="exp-team-cta">
        <h2><?= htmlspecialchars($part6_title, ENT_QUOTES, 'UTF-8') ?></h2>
    </div>

    <div class="exp-team-text">
        <?php if (!empty($part6_intro)): ?>
            <p><?= nl2br($part6_intro) ?></p>
        <?php endif; ?>

        <?php if (!empty($part6_list)): ?>
        <ul>
            <?php foreach ($part6_list as $item): ?>
                <li><?= nl2br($item) ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <?php foreach ($part6_paragraphs as $p): ?>
            <p><?= nl2br($p) ?></p>
        <?php endforeach; ?>
    </div>
</section>

<style>
.exp-team {
    display: flex; flex-direction: row; justify-content: space-between;
    background-color: #0A1A2F; /* Dark Blue */
    padding: 6.94vw 130px; max-width: 2560px; margin: 0 auto;
    gap: 5.55vw; color: white; font-family: 'Poppins', sans-serif;
}

.exp-team-cta { width: 40%; }
.exp-team-cta h2 {
    font-size: 2.5vw; font-weight: 700; border-left: 4px solid #3DA8FF; padding-left: 2vw;
}

.exp-team-text { width: 60%; display: flex; flex-direction: column; gap: 2vw; font-size: 1.1vw; line-height: 1.6; }

/* Style pour les mots en gras (strong) */
.exp-team-text strong { color: #3DA8FF; font-weight: 700; font-size: 1.1vw; /* Ajusté pour rester cohérent avec le texte, ou 1.3vw si tu veux plus gros */ }

/* Ajout pour la liste à puces */
.exp-team-text ul {
    list-style-type: disc; /* ou 'circle', 'square', 'none' */
    padding-left: 1.5vw;   /* Indentation des puces */
    margin-bottom: 1vw;
}
.exp-team-text ul li {
    margin-bottom: 0.5vw;
}

@media (max-width: 1024px) {
    .exp-team { flex-direction: column; padding: 60px 20px; gap: 30px; }
    .exp-team-cta, .exp-team-text { width: 100%; }
    .exp-team-cta h2 { font-size: 28px; border-left-width: 3px; padding-left: 15px; }
    .exp-team-text { font-size: 16px; }
    .exp-team-text strong { font-size: 16px; } /* Ajusté mobile */
    .exp-team-text ul { padding-left: 20px; }
}
</style>