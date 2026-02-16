<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
   // TITRE + TEXTES INTRO
   $part2_title = "Étapes essentielles pour concevoir un logo";
   
   // ICI : Vous pouvez utiliser <strong>, <b>, <br> dans l'intro
   $part2_texts = [
       "Concevoir un logo impactant demande de suivre certaines étapes clés pour garantir qu’il soit à la fois unique et mémorable. De l’analyse de la marque et du public cible au choix des formes, couleurs et typographies, chaque décision influence la perception de l’identité visuelle. Un bon logo doit pouvoir résumer l’essence de l’entreprise en un coup d’œil.",
   ];

   // BLOCS (image + titre + texte)
   // ICI : Vous pouvez utiliser <strong>, <b>, <br> dans le texte des blocs
   $part2_blocks = [
       [
           "img" => "uploads/default.webp",
           "title" => "Recherche et Analyse",
           "text"  => "<strong>Comprendre l'identité de la marque</strong>, son <strong>public cible</strong> et les <strong>tendances du marché</strong> est crucial pour orienter le processus de conception."
       ],
       [
           "img" => "uploads/default.webp",
           "title" => "Brainstorming et Esquisses",
           "text"  => "Générer des <strong>idées créatives</strong> et <strong>réaliser des esquisses préliminaires pour explorer différents concepts</strong> et directions visuelles."
       ],
       [
           "img" => "uploads/default.webp",
           "title" => "Sélection des Éléments Visuels",
           "text"  => "Choisir les <strong>couleurs</strong>, les <strong>polices</strong> et les <strong>symboles </strong>qui reflètent le mieux la personnalité et les valeurs de la marque."
       ],
       [
           "img" => "uploads/default.webp",
           "title" => "Réalisation des Concepts",
           "text"  => "<strong>Créer des versions numériques des concepts les plus prometteurs</strong> pour une évaluation plus approfondie."
       ]
   ];

   require_once $base_path . 'components/categories/sous-categories/part-3.php';
   ?>
-------------------------------------------------------------- */
?>

<style>
/* ==========================================================================
   IMAGE-FIRST CARDS (PART 2) + MOBILE CARTOUCHE
   ========================================================================== */

.cat-index-2{
  display:flex;
  flex-direction:column;
  width:100%;
  max-width:2560px;
  margin:0 auto;
  padding:6.94vw 130px;
  background:#fff;
}

/* TITRE */
.cat-title-index-2{
  margin-bottom:4vw;
  padding-bottom:2vw;
  border-bottom:1px solid #0A1A2F;
}

.cat-title-index-2 h2{
  font-size:2.5vw;
  font-weight:700;
  color:#0A1A2F;
  margin-bottom:1.5vw;
}

.cat-title-index-2 p{
  font-size:1.1vw;
  color:#4B5563;
  max-width:70%;
  margin-bottom:.5vw;
}

/* Strong/B intro */
.cat-title-index-2 p strong,
.cat-title-index-2 p b{
  color:#0A1A2F;
  font-weight:700;
}

/* GRID */
.cat-content-index-2{
  display:flex;
  flex-wrap:wrap;
  justify-content:space-between;
  gap:2vw;
}

/* CARD */
.cat-article-index-2{
  position:relative;
  width:calc(50% - 1vw);
  margin-bottom:3vw;
  border-radius:8px;
  overflow:hidden; /* desktop: on clip tout */
}

/* IMAGE */
.cat-article-img-index-2{
  position:relative;
  width:100%;
  height:25vw;
  overflow:hidden;
}

.cat-article-img-index-2 img{
  width:100%;
  height:100%;
  object-fit:cover;
  transform:scale(1.02);
  transition:transform .7s ease, filter .7s ease;
}

/* overlay gradient */
.cat-article-img-index-2::after{
  content:"";
  position:absolute;
  inset:0;
  background:linear-gradient(
    to top,
    rgba(10,26,47,.65) 0%,
    rgba(10,26,47,.25) 45%,
    rgba(10,26,47,.05) 100%
  );
  transition:opacity .35s ease, background .35s ease;
  pointer-events:none;
  opacity:1;
}

/* TITRE sur l’image */
.cat-title-overlay{
  position:absolute;
  left:1.4vw;
  right:1.4vw;
  bottom:1.2vw;
  z-index:2;
}

.cat-title-overlay h3{
  margin:0;
  font-size:1.55vw;
  font-weight:800;
  color:#fff;
  letter-spacing:.2px;
  text-shadow:0 8px 24px rgba(0,0,0,.35);
}

/* BLOC TEXTE (caché au repos) */
.cat-text-index-2{
  position:absolute;
  left:1.2vw;
  right:1.2vw;
  bottom:1.1vw;
  z-index:3;

  padding:1.2vw 1.2vw;
  border-radius:10px;

  background:rgba(10,26,47,.78);
  backdrop-filter:blur(8px);
  -webkit-backdrop-filter:blur(8px);

  transform:translateY(18px);
  opacity:0;
  pointer-events:none;

  transition:transform .35s ease, opacity .35s ease, background .35s ease;
  box-shadow:0 12px 40px rgba(0,0,0,.35);
  border:1px solid rgba(255,255,255,.12);
}

/* Titre interne du bloc texte */
.cat-text-index-2 .cat-text-title{
  display:flex;
  align-items:center;
  gap:.6vw;
  margin-bottom:.6vw;
}

.cat-text-index-2 .cat-dot{
  width:.55vw;
  height:.55vw;
  border-radius:999px;
  background:#3DA8FF;
  flex:0 0 auto;
}

.cat-text-index-2 h4{
  margin:0;
  font-size:1.2vw;
  font-weight:800;
  color:#fff;
}

.cat-text-index-2 p{
  margin:0;
  font-size:.95vw;
  line-height:1.5;
  color:rgba(255,255,255,.88);
}

/* Strong/B dans les blocs (fond foncé) */
.cat-text-index-2 p strong,
.cat-text-index-2 p b{
  color:#ffffff;
  font-weight:700;
}

/* HOVER desktop */
.cat-article-index-2:hover .cat-article-img-index-2 img{
  transform:scale(1.12);
  filter:contrast(1.05) saturate(1.08);
}

.cat-article-index-2:hover .cat-article-img-index-2::after{
  background:linear-gradient(
    to top,
    rgba(10,26,47,.80) 0%,
    rgba(10,26,47,.35) 45%,
    rgba(10,26,47,.10) 100%
  );
}

.cat-article-index-2:hover .cat-title-overlay{
  opacity:0;
  transform:translateY(10px);
  transition:opacity .25s ease, transform .25s ease;
}

.cat-article-index-2:hover .cat-text-index-2{
  opacity:1;
  transform:translateY(0);
  background:rgba(10,26,47,.86);
}

/* ============================= */
/* MOBILE = STYLE “CARTOUCHE”    */
/* ============================= */
@media (max-width:1024px){
  .cat-index-2{padding:60px 20px}

  .cat-title-index-2 h2{font-size:28px}
  .cat-title-index-2 p{font-size:16px;max-width:100%}

  .cat-content-index-2{flex-direction:column;gap:60px}
  .cat-article-index-2{
    width:100%;
    margin-bottom:0;
    overflow:visible; /* IMPORTANT: ne coupe pas le cartouche */
    border-radius:8px;
  }

  .cat-article-img-index-2{height:250px}

  /* pas besoin du titre sur image, on l’a dans le cartouche */
  .cat-title-overlay{display:none}

  /* cartouche sous image */
  .cat-text-index-2{
    position:relative;
    left:auto; right:auto; bottom:auto;
    width:95%;
    margin:-30px auto 0;
    padding:20px;

    opacity:1;
    transform:none;
    pointer-events:auto;

    background:#0A1A2F;
    backdrop-filter:none;
    -webkit-backdrop-filter:none;

    border-radius:4px;
    border:0;
    border-left:4px solid #3DA8FF;
    box-shadow:0 10px 30px rgba(0,0,0,.2);
  }

  .cat-text-index-2 .cat-text-title{gap:10px;margin-bottom:10px}
  .cat-text-index-2 .cat-dot{width:10px;height:10px}
  .cat-text-index-2 h4{font-size:20px}
  .cat-text-index-2 p{font-size:14px}
}
</style>

<section class="cat-index-2">
  <div class="cat-title-index-2">
    <h2><?= htmlspecialchars($part2_title, ENT_QUOTES, 'UTF-8') ?></h2>

    <?php foreach ($part2_texts as $text): ?>
      <p><?= strip_tags($text, '<strong><b><br><em><u>') ?></p>
    <?php endforeach; ?>
  </div>

  <div class="cat-content-index-2">
    <?php foreach ($part2_blocks as $block): ?>
      <div class="cat-article-index-2">

        <div class="cat-article-img-index-2">
          <img
            src="<?= $images_url ?><?= htmlspecialchars($block['img'], ENT_QUOTES, 'UTF-8') ?>"
            alt="<?= htmlspecialchars($block['title'], ENT_QUOTES, 'UTF-8') ?>"
          >
        </div>

        <!-- Titre sur l’image (desktop) -->
        <div class="cat-title-overlay">
          <h3><?= htmlspecialchars($block['title'], ENT_QUOTES, 'UTF-8') ?></h3>
        </div>

        <!-- Détails: hover desktop / cartouche mobile -->
        <div class="cat-text-index-2">
          <div class="cat-text-title">
            <span class="cat-dot"></span>
            <h4><?= htmlspecialchars($block['title'], ENT_QUOTES, 'UTF-8') ?></h4>
          </div>
          <p><?= strip_tags($block['text'], '<strong><b><br><em><u>') ?></p>
        </div>

      </div>
    <?php endforeach; ?>
  </div>
</section>
