<?php
$part2_title = $part2_title ?? "Comprendre le Design";

$part2_texts = $part2_texts ?? [
    "<strong>Le design web désigne l'ensemble des éléments visuels et fonctionnels d'un site internet, créés pour offrir une expérience agréable et efficace aux utilisateurs.</strong>",
    "‍Il englobe l'interface utilisateur (UI), qui concerne la disposition des éléments graphiques, des couleurs et des polices, ainsi que l'expérience utilisateur (UX), visant à garantir une navigation fluide et intuitive.",
    "Il s’étend également aux considérations complémentaires, telles que le rôle du site dans la stratégie digitale ou encore aux sujets de performance et d’accessibilité."
];

$part2_blocks = $part2_blocks ?? [
    [
        "img"  => "/uploads/default.webp",
        "title"=> "UX (User Experience)",
        "text" => "<strong>L’UX concerne la navigation et les interactions entre le visiteur et le contenu.</strong> L'objectif est de rendre le site ergonomique et intuitif afin qu’il réponde aux besoins de l’internaute."
    ],
    [
        "img"  => "/uploads/default.webp",
        "title"=> "UI (User Interface)",
        "text" => "<strong>L'UI vise à rendre l'expérience utilisateur attrayante et fonctionnelle.</strong> Cela englobe la mise en page, les couleurs et les éléments interactifs."
    ],
    [
        "img"  => "/uploads/default.webp",
        "title"=> "La performance",
        "text" => "<strong>La performance d’une solution digitale se travaille dès le design.</strong> Rapidité, accessibilité et optimisation sont essentielles."
    ],
    [
        "img"  => "/uploads/default.webp",
        "title"=> "La stratégie",
        "text" => "<strong>Le webdesign est aujourd’hui un pilier stratégique.</strong> Une bonne agence est un vrai partenaire business."
    ],
];
?>

<style>
/* ==========================================================================
   IMAGE-FIRST CARDS (PART 2)
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
  overflow:hidden; /* important: on “clip” tout, texte compris */
}

/* IMAGE ZONE */
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

/* OVERLAY (repos léger) */
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

/* TITRE (repos) — posé sur l’image */
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

/* TEXTE DETAIL (image-first) :
   -> caché au repos, visible au hover */
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

/* inside text */
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

/* HOVER = image-first */
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

/* le titre overlay se fait discret au hover */
.cat-article-index-2:hover .cat-title-overlay{
  opacity:.0;
  transform:translateY(10px);
  transition:opacity .25s ease, transform .25s ease;
}

/* le texte devient visible au hover */
.cat-article-index-2:hover .cat-text-index-2{
  opacity:1;
  transform:translateY(0);
  background:rgba(10,26,47,.86);
}

/* ============================= */
/* RESPONSIVE                    */
/* ============================= */
@media (max-width:1024px){
  .cat-index-2{padding:60px 20px}

  .cat-title-index-2 h2{font-size:28px}
  .cat-title-index-2 p{font-size:16px;max-width:100%}

  .cat-content-index-2{flex-direction:column;gap:60px}
  .cat-article-index-2{
    width:100%;
    margin-bottom:0;
    overflow:visible;            /* IMPORTANT : ne coupe plus le texte */
    border-radius:8px;
  }

  .cat-article-img-index-2{height:250px}

  /* Sur mobile on n'a plus besoin du titre sur l'image */
  .cat-title-overlay{display:none}

  /* On garde l'overlay gradient si tu veux, sinon tu peux le neutraliser :
  .cat-article-img-index-2::after{opacity:.35;}
  */

  /* TEXTE = comme l’autre page (en dessous de l’image, qui remonte un peu) */
  .cat-text-index-2{
    position:relative;           /* au lieu d'absolu */
    left:auto; right:auto; bottom:auto;
    width:95%;
    margin:-30px auto 0;         /* effet “cartouche” */
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
  .cat-text-index-2 p{font-size:14px;line-height:1.5}
}

</style>

<section class="cat-index-2">
  <div class="cat-title-index-2">
    <h2><?= htmlspecialchars($part2_title, ENT_QUOTES, 'UTF-8') ?></h2>
    <?php foreach ($part2_texts as $text): ?>
      <p><?= nl2br($text) ?></p>
    <?php endforeach; ?>
  </div>

  <div class="cat-content-index-2">
    <?php foreach ($part2_blocks as $block): ?>
      <div class="cat-article-index-2">
        <div class="cat-article-img-index-2">
          <img src="<?= $images_url ?><?= htmlspecialchars($block['img'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($part2_title, ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <!-- Titre minimal visible au repos -->
        <div class="cat-title-overlay">
          <h3><?= htmlspecialchars($block['title'], ENT_QUOTES, 'UTF-8') ?></h3>
        </div>

        <!-- Détails: apparaissent au hover (desktop), toujours visibles sur mobile -->
        <div class="cat-text-index-2">
          <div class="cat-text-title">
            <span class="cat-dot"></span>
            <h4><?= htmlspecialchars($block['title'], ENT_QUOTES, 'UTF-8') ?></h4>
          </div>
          <p><?= $block['text'] ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
