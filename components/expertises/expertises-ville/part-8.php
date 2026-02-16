      <?php 
/* --------------------------------------------------------------
   VARIABLES
   --------------------------------------------------------------   
<?php
   // TITRE
   $part8_title = "Quelques unes de nos réalisations";

   // IMAGE PATTERN
   $part8_pattern = "uploads/pattern-1.webp";

   // --- LOGIQUE DYNAMIQUE : RÉCUPÉRATION DES 2 DERNIERS PROJETS ---
   
   if (!function_exists('getRealisationDataForVille')) {
       function getRealisationDataForVille($filePath) {
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
   // Chemin relatif : on est dans expertises/ donc on remonte d'un niveau pour accéder à nos-realisations
   $target_dir = __DIR__ . '/../nos-realisations'; 
   $dirs = glob($target_dir . '/*', GLOB_ONLYDIR);

   if ($dirs) {
       // On inverse pour avoir les derniers ajouts en premier
       $dirs = array_reverse($dirs); 
       
       $count = 0;
       foreach ($dirs as $dir) {
           if ($count >= 2) break; // Limite à 2 projets
           
           $indexFile = $dir . '/index.php';
           if (file_exists($indexFile)) {
               $folderName = basename($dir);
               $data = getRealisationDataForVille($indexFile);
               
               // Gestion URL Image
               $fullImgUrl = (strpos($data['img_path'], 'http') === 0) 
                    ? $data['img_path'] 
                    : $data['img_path'];

               $part8_projects[] = [
                   // HREF vers .exp-real-item
                   "href"  => "nos-realisations/" . $folderName . "/",
                   
                   // IMG
                   "img"   => $fullImgUrl,
                   
                   // TITRE vers .exp-real-info h3
                   "title" => $data['title']
               ];
               $count++;
           }
       }
   }

   // BOUTON TOUT VOIR
   $part8_all_link  = "nos-realisations/";
   $part8_all_label = "Tout voir";

   require_once $base_path . 'components/expertises/expertises-ville/part-8.php';
   ?>


  -------------------------------------------------------------- */
?>
<section class="exp-real">
    <h2><?= htmlspecialchars($part8_title) ?></h2>
    
    <div class="exp-real-grid">
        <?php foreach ($part8_projects as $p): ?>
            <a href="<?php echo $base_url ?><?= htmlspecialchars($p['href']) ?>" class="exp-real-item">
                <img src="<?php echo $images_url ?><?= htmlspecialchars($p['img']) ?>" alt="">
                <div class="exp-real-info">
                    <h3><?= htmlspecialchars($p['title']) ?></h3>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                </div>
            </a>
        <?php endforeach; ?>

        <a href="<?php echo $images_url ?><?= htmlspecialchars($part8_all_link) ?>" class="exp-real-all">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            <div>Tout voir</div>
        </a>
    </div>
</section>

<style>
.exp-real {
    background-color: #0A1A2F; color: white;
    padding: 6.94vw 130px; max-width: 2560px; margin: 0 auto;
    font-family: 'Poppins', sans-serif;
}
.exp-real h2 { font-size: 2.78vw; font-weight: 700; margin-bottom: 3.5vw; }

.exp-real-grid { display: flex; gap: 1.5vw; }

.exp-real-item {
    position: relative; width: 47%; border-radius: 4px; overflow: hidden; display: flex;
}
.exp-real-item img { width: 100%; height: 25vw; object-fit: cover; transition: 0.5s; opacity: 0.8; }
.exp-real-item:hover img { transform: scale(1.05); opacity: 0.6; }

.exp-real-info {
    position: absolute; bottom: 1.5vw; left: 1.5vw; display: flex; align-items: center; gap: 1vw;
    transform: translateY(20px); opacity: 0; transition: 0.3s;
}
.exp-real-item:hover .exp-real-info { transform: translateY(0); opacity: 1; }
.exp-real-info h3 { font-size: 1.5vw; font-weight: 600; color:white;}
.exp-real-info svg { width: 2vw; height: 2vw; color: #3DA8FF; }

/* Bouton Tout Voir */
.exp-real-all {
    background: #3DA8FF; width: 6%; display: flex; align-items: center; justify-content: center;
    border-radius: 4px; writing-mode: vertical-rl; text-transform: uppercase;
    font-weight: 700; text-decoration: none; color: #0A1A2F; transition: 0.3s;
}
.exp-real-all:hover { background: white; }
.exp-real-all div { margin-top: 1vw; font-size: 1.2vw; }
.exp-real-all svg { transform: rotate(90deg); width: 2vw; }

@media (max-width: 1024px) {
    .exp-real { padding: 60px 20px; }
    .exp-real h2 { font-size: 28px; }
    .exp-real-grid { flex-direction: column; gap: 30px; }
    .exp-real-item { width: 100%; }
    .exp-real-item img { height: 250px; opacity: 0.9; }
    .exp-real-info { opacity: 1; transform: none; }
    .exp-real-info h3 { font-size: 20px; }
    .exp-real-info svg { width: 30px; }
    
    .exp-real-all { 
        width: 100%; writing-mode: horizontal-tb; flex-direction: row; padding: 15px; 
        justify-content: center; gap: 10px; 
    }
    .exp-real-all div { margin: 0; font-size: 16px; }
    .exp-real-all svg { transform: none; width: 24px; }
}
</style>