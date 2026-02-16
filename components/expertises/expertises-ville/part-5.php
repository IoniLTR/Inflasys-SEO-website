   <?php 
/* --------------------------------------------------------------
   VARIABLES
   -------------------------------------------------------------- 
<?php
   $work_title = "Comment travaille une agence spécialisée dans la création de sites à " . $ville_nom . " ?";
   $work_img_src = "uploads/default.webp";
   $work_img_alt = "Equipe de designers au travail";

   $work_steps = [
       [
           "number"      => "1",
           "title"      => "Cadrage",
           "paragraphs" => [
               "<strong>La première étape consiste à élaborer un cahier des charges précis avec vous, en collaboration avec le chef de projet de l'agence. </strong>Ce document est rédigé après une phase d'échange et d'analyse approfondie de votre entreprise, de votre secteur d'activité, de votre cible, de vos enjeux, de votre image de marque, de vos aspirations et de vos objectifs."
           ]
       ],
       [
           "number"     => "2",
           "title"      => "Conception",
           "paragraphs" => [
               "La phase de conception débute par un travail approfondi sur l'expérience utilisateur (UX) et la structure du site. <strong>L'agence travaille l'architecture et l'arborescence du site pour optimiser la navigation. </strong>",
               "Le designer vous présente ensuite différentes maquettes, explorant une variété de styles visuels et d’univers. Une fois la maquette choisie, elle est affinée dans les moindres détails, tant sur le plan de l'UX que de l'esthétique.<strong> L'affichage du site est également optimisé pour s'adapter à tous les types d'appareils : ordinateurs, tablettes et smartphones.</strong>"
           ]
       ],
       [
           "number"     => "3",
           "title"      => "Développement",
           "paragraphs" => [
               "La maquette finalisée est transmise au développeur, qui la transforme en un site internet fonctionnel et interactif. <strong>Une attention particulière est portée à l'optimisation technique, garantissant des performances optimales et une base solide pour le référencement naturel (SEO).</strong>",
               "<strong>En fin de projet, un expert SEO réalise un audit complet du site</strong> pour s'assurer qu'il est parfaitement optimisé pour les moteurs de recherche."
           ]
       ],
   ];
   require_once $base_path . 'components/expertises/expertises-ville/part-5.php';
   ?>
  -------------------------------------------------------------- */
?>

<section class="exp-work">
    <h2><?= htmlspecialchars($work_title, ENT_QUOTES, 'UTF-8') ?></h2>

    <div class="exp-work-content">
        <div class="exp-work-img">
            <img src="<?php echo $images_url ?><?= htmlspecialchars($work_img_src, ENT_QUOTES, 'UTF-8') ?>" alt="Méthodologie">
        </div>

        <div class="exp-work-text">
            <?php if (!empty($work_steps)): foreach ($work_steps as $step): ?>
                <div class="exp-work-item">
                    <div class="exp-work-title">
                        <div>
                            <span style="color:#3DA8FF; margin-right:10px;"><?= htmlspecialchars($step['number'] ?? '') ?>.</span>
                            <?= htmlspecialchars($step['title'] ?? '') ?>
                        </div>
                        <div class="exp-work-toggle">+</div>
                    </div>
                    <div class="exp-work-para">
                        <?php if(!empty($step['paragraphs'])) foreach ($step['paragraphs'] as $p): ?>
                            <p><?= nl2br($p) ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.exp-work-item');
    items.forEach(item => {
        const title = item.querySelector('.exp-work-title');
        title.addEventListener('click', () => {
            item.classList.toggle('is-open');
            const toggle = item.querySelector('.exp-work-toggle');
            toggle.textContent = item.classList.contains('is-open') ? '-' : '+';
        });
    });
});
</script>

<style>
.exp-work {
    background-color: #F2F9FF; color: #0A1A2F;
    padding: 6.94vw 130px; max-width: 2560px; margin: 0 auto;
    display: flex; flex-direction: column; align-items: center;
    font-family: 'Poppins', sans-serif;
}

.exp-work h2 { font-size: 2.5vw; font-weight: 700; padding-bottom: 4vw; text-align: center; }

.exp-work-content { display: flex; width: 100%; gap: 4vw; align-items: flex-start; }

.exp-work-img { width: 35%; position: sticky; top: 150px; }
.exp-work-img img { width: 100%; object-fit: cover; aspect-ratio: 4/5; border-radius: 4px; box-shadow: 0 10px 30px rgba(10,26,47,0.1); }

.exp-work-text { width: 60%; }

.exp-work-item { border-bottom: 1px solid #3DA8FF; padding: 1.5vw 0; display: flex; flex-direction: column; }

.exp-work-title {
    display: flex; justify-content: space-between; align-items: center;
    font-size: 1.5vw; font-weight: 600; cursor: pointer; transition: 0.3s;
}
.exp-work-item:hover .exp-work-title { color: #3DA8FF; }

.exp-work-toggle { font-size: 2vw; color: #3DA8FF; font-weight: 300; width: 2vw; text-align: center; }

.exp-work-para {
    max-height: 0; overflow: hidden; transition: max-height 0.35s ease; color: #4B5563;
}
.exp-work-para p { font-size: 1vw; margin-top: 1vw; line-height: 1.6; }

.exp-work-item.is-open .exp-work-para { max-height: 500px; }

@media (max-width: 1024px) {
    .exp-work { padding: 60px 20px; }
    .exp-work h2 { font-size: 28px; }
    .exp-work-content { flex-direction: column; gap: 40px; }
    .exp-work-img { width: 100%; position: static; }
    .exp-work-img img { aspect-ratio: 16/9; }
    .exp-work-text { width: 100%; }
    .exp-work-title { font-size: 18px; }
    .exp-work-toggle { font-size: 24px; width: 24px; }
    .exp-work-para p { font-size: 14px; }
}
</style>