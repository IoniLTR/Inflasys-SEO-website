<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
   $part8_title = "Derniers Déploiements";
   $part8_pattern = "uploads/Picto/pattern-1.webp";
   
   // --- LOGIQUE DYNAMIQUE : RÉCUPÉRATION DES 2 DERNIERS PROJETS ---
   
   // 1. Définition de la fonction d'extraction (si elle n'existe pas déjà)
   if (!function_exists('getRealisationDataForExpertise')) {
       function getRealisationDataForExpertise($filePath) {
           $content = file_get_contents($filePath);
           $data = ['title' => 'Projet', 'img_path' => 'uploads/default.webp'];
           
           // Extraction Titre
           if (preg_match('/\$titre_projet\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) {
               $data['title'] = $matches[1];
           }
           // Extraction Image
           if (preg_match('/\$image_mockup\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/s', $content, $matches)) {
               $data['img_path'] = $matches[1];
           } elseif (preg_match('/\$image_mockup\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) {
               $data['img_path'] = $matches[1];
           }
           return $data;
       }
   }

   $part8_projects = [];
   // Chemin vers le dossier nos-realisations (on remonte d'un cran)
   $target_dir = __DIR__ . '/../nos-realisations'; 
   $dirs = glob($target_dir . '/*', GLOB_ONLYDIR);
   
   // On inverse pour avoir les derniers ajouts en premier (selon le système de fichier)
   $dirs = array_reverse($dirs); 
   
   $count = 0;
   foreach ($dirs as $dir) {
       if ($count >= 2) break; // On s'arrête à 2 projets
       
       $indexFile = $dir . '/index.php';
       if (file_exists($indexFile)) {
           $folderName = basename($dir);
           $data = getRealisationDataForExpertise($indexFile);
           
           // Gestion URL Image
           $fullImgUrl = (strpos($data['img_path'], 'http') === 0) ? $data['img_path'] : $data['img_path'];

           $part8_projects[] = [
               // Lien dynamique vers le dossier du projet
               "href"  => "nos-realisations/" . $folderName . "/",
               // Image extraite
               "img"   => $fullImgUrl,
               // Titre extrait
               "title" => $data['title']
           ];
           $count++;
       }
   }

   $part8_all_link  =  "nos-realisations/";
   $part8_all_label = "Tout voir";
   
   require_once $base_path . 'components/expertises/part-6.php';
?>
-------------------------------------------------------------- */
?>

<section class="index-5">

  <h2><?= htmlspecialchars($part8_title, ENT_QUOTES, 'UTF-8') ?></h2>

  <?php if (!empty($part8_pattern)): ?>
    <img class="index-5-pattern" src="<?php echo $images_url ?><?= htmlspecialchars($part8_pattern, ENT_QUOTES, 'UTF-8') ?>" alt="pattern">
  <?php endif; ?>

  <div class="index-5-content">

    <?php if (!empty($part8_projects) && is_array($part8_projects)): ?>
        <?php foreach ($part8_projects as $project): ?>
            <a class="link-article-index-5" href="<?php echo $base_url ?><?= htmlspecialchars($project['href'], ENT_QUOTES, 'UTF-8') ?>">
              <img src="<?php echo $images_url ?><?= htmlspecialchars($project['img'], ENT_QUOTES, 'UTF-8') ?>" alt="" loading="lazy">

              <div class="content-text-2-index-5">
                <h3><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
              </div>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>

    <a class="link-all-index-5" href="<?php echo $base_url ?><?= htmlspecialchars($part8_all_link, ENT_QUOTES, 'UTF-8') ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="svg-arrow-vertical" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M7 7h10v10"></path><path d="M7 17 17 7"></path>
      </svg>
      <div><?= htmlspecialchars($part8_all_label, ENT_QUOTES, 'UTF-8') ?></div>
    </a>

  </div>
</section>

<style>
/* ==========================================================================
   CSS EXPERTISES PART-6
   ========================================================================== */
.index-5 {
    display: flex;
    flex-direction: column;
    background-color: #0A1A2F; /* Dark Blue */
    width: 100%;
    
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    position: relative;
}

.index-5 h2 {
    color: #ffffff;
    font-size: 2.78vw;
    font-weight: 700;
    margin: 0 0 3.47vw 0;
}

.index-5-pattern {
    position: absolute;
    right: 130px;
    top: 6vw;
    opacity: 0.1;
    width: 5vw;
}

.index-5-content {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    gap: 1.5vw;
}

.link-article-index-5 {
    display: flex;
    flex-direction: column;
    flex: 1; /* Prend l'espace disponible */
    position: relative;
    overflow: hidden;
    border-radius: 4px;
    background: black;
    height: 20vw;
}

.link-article-index-5 img {
    transition: transform 0.5s ease, opacity 0.5s ease;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.8;
}

.link-article-index-5:hover img {
    transform: scale(1.05);
    opacity: 0.6;
}

.content-text-2-index-5 {
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

.link-article-index-5:hover .content-text-2-index-5 {
    transform: translateY(0);
    opacity: 1;
}

.content-text-2-index-5 h3 {
    font-size: 1.5vw;
    font-weight: 600;
    color: white;
    margin: 0;
}

.content-text-2-index-5 svg {
    width: 2vw;
    height: 2vw;
    color: #3DA8FF;
}

/* Bouton Vertical "Tout voir" */
.link-all-index-5 {
    background-color: #3DA8FF;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1.39vw;
    width: 6%; /* Étroit pour le style vertical */
    border-radius: 4px;
    writing-mode: vertical-rl;
    color: #0A1A2F;
    text-transform: uppercase;
    overflow: hidden;
    text-decoration: none;
    font-weight: 700;
    transition: background-color 0.3s;
}

.link-all-index-5:hover {
    background-color: white;
}

.link-all-index-5 div {
    font-size: 1.2vw;
    margin-top: 1vw;
}

.svg-arrow-vertical {
    width: 2vw;
    transform: rotate(90deg); /* Flèche pointe vers le bas ou droite selon le SVG */
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .index-5 { padding: 60px 20px; }
    .index-5 h2 { font-size: 28px; }
    .index-5-pattern { display: none; }
    
    .index-5-content { flex-direction: column; gap: 30px; }
    .link-article-index-5 { width: 100%; height: 250px; }
    
    .content-text-2-index-5 { opacity: 1; transform: none; }
    .content-text-2-index-5 h3 { font-size: 20px; }
    .content-text-2-index-5 svg { width: 30px; height: 30px; }
    
    .link-all-index-5 {
        width: 100%; 
        writing-mode: horizontal-tb;
        flex-direction: row; 
        padding: 15px; 
        justify-content: center; 
        gap: 10px;
    }
    .link-all-index-5 div { font-size: 16px; margin: 0; }
    .svg-arrow-vertical { transform: none; width: 24px; margin: 0; }
}
</style>