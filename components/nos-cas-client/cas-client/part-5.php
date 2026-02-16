<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
   // TITRE
   $part8_title = "Quelques unes de nos réalisations";

   // IMAGE PATTERN (facultatif)
   $part8_pattern = "uploads/Picto/pattern-1.webp"; // Laissé vide si non utilisé

   // PROJETS (contexte BTP / Industrie)
   $part8_projects = [
       [
           "href"  => "nos-realisations/realisations",
           "img"   => "uploads/default.webp",
           "title" => "Hangar MRO Airbus"
       ],
       [
           "href"  => "nos-realisations/realisations",
           "img"   => "uploads/default.webp",
           "title" => "Confinement Dépollution"
       ]
   ];

   // BOUTON TOUT VOIR
   $part8_all_link  = "nos-realisations";
   $part8_all_label = "Tout voir";

  require_once '../../../components/categories/sous-categories/part-6.php';
?>
-------------------------------------------------------------- */
?>

<style>
/* STYLE ISSU DE CATEGORIES PART-8 */
.cat-realisations {
    display: flex;
    flex-direction: column;
    background-color: #0A1A2F; /* Dark Blue */
    width: 100%;
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    position: relative;
}

.cat-realisations h2 {
    color: #ffffff;
    font-size: 2.78vw;
    font-weight: 700;
    margin-bottom: 3.47vw;
}

.cat-realisations-content {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    gap: 1.5vw;
    flex-wrap: nowrap;
}

.cat-realisation-item {
    display: flex;
    flex-direction: column;
    width: calc(47% - 1vw);
    position: relative;
    overflow: hidden;
    border-radius: 4px;
    background: black;
}

.cat-realisation-item img {
    transition: transform 0.5s ease, opacity 0.5s ease;
    width: 100%;
    height: 20vw;
    object-fit: cover;
    opacity: 0.8;
}

.cat-realisation-item:hover img {
    transform: scale(1.05);
    opacity: 0.6;
}

.cat-realisation-text {
    position: absolute;
    bottom: 1.5vw;
    left: 1.5vw;
    display: flex;
    align-items: center;
    gap: 1vw;
    transform: translateY(20px);
    transition: transform 0.3s ease;
    opacity: 0;
}

.cat-realisation-item:hover .cat-realisation-text {
    transform: translateY(0);
    opacity: 1;
}

.cat-realisation-text h3 {
    font-size: 1.5vw;
    font-weight: 600;
    color: white;
}

.cat-realisation-text svg {
    width: 2vw;
    height: 2vw;
    color: #3DA8FF;
}

.cat-realisation-all {
    background-color: #3DA8FF;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1.39vw;
    flex-direction: row;
    width: 6%;
    border-radius: 4px;
    writing-mode: vertical-rl;
    color: #0A1A2F;
    text-transform: uppercase;
    overflow: hidden;
    text-decoration: none;
    font-weight: 700;
    transition: background-color 0.3s;
}

.cat-realisation-all:hover { background-color: white; }
.cat-realisation-all div { font-size: 1.2vw; margin-top: 1vw; }
.cat-realisation-all svg { width: 2vw; transform: rotate(90deg); }

@media (max-width: 1024px) {
    .cat-realisations { padding: 60px 20px; }
    .cat-realisations h2 { font-size: 28px; }
    .cat-realisations-content { flex-direction: column; gap: 30px; }
    .cat-realisation-item { width: 100%; }
    .cat-realisation-item img { height: 250px; opacity: 0.9; }
    .cat-realisation-text { opacity: 1; transform: none; }
    .cat-realisation-text h3 { font-size: 20px; }
    .cat-realisation-text svg { width: 30px; height: 30px; }
    .cat-realisation-all { width: 100%; writing-mode: horizontal-tb; flex-direction: row; padding: 15px; justify-content: center; gap: 10px; }
    .cat-realisation-all div { font-size: 16px; margin: 0; }
    .cat-realisation-all svg { transform: none; width: 24px; margin: 0; }
}
</style>

<section class="cat-realisations">
  <h2><?= htmlspecialchars($part8_title, ENT_QUOTES, 'UTF-8') ?></h2>
  
  <div class="cat-realisations-content">
    <?php foreach ($part8_projects as $project): ?>
        <a class="cat-realisation-item" href="<?php echo $base_url?><?= htmlspecialchars($project['href'], ENT_QUOTES, 'UTF-8') ?>">
          <img src="<?php echo $images_url?><?= htmlspecialchars($project['img'], ENT_QUOTES, 'UTF-8') ?>" alt="">
          <div class="cat-realisation-text">
            <h3><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></h3>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
          </div>
        </a>
    <?php endforeach; ?>

    <a class="cat-realisation-all" href="<?php echo $base_url?><?= htmlspecialchars($part8_all_link, ENT_QUOTES, 'UTF-8') ?>">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
      <div><?= htmlspecialchars($part8_all_label, ENT_QUOTES, 'UTF-8') ?></div>
    </a>
  </div>
    </section>