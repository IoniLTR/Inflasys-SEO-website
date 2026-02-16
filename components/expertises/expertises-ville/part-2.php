<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION
   -----------------------------------
<?php
   $part2_title = "Comprendre le Design";
   $part2_texts = [
    "La création d'un site internet permet de <strong>développer une présence en ligne personnalisée et performante, essentielle pour toute entreprise ou projet</strong> souhaitant se démarquer.",
    "<strong>Grâce aux outils no code, il est désormais possible de concevoir un site sur mesure, même sans connaissances techniques en développement informatique.</strong>",
    "<strong>Les avantages de créer son propre site internet sont nombreux</strong> et expliquent l'engouement actuel pour cette pratique."
    ];

   $part2_blocks = [ 
   ["img"=>"uploads/default.webp", "title"=>"Une qualité esthétique inégalée", "text"=>"Un site internet nouvellement créé bénéficie d'un design contemporain et intuitif, conçu sur mesure pour répondre à vos besoins et à l'image de votre marque. En utilisant des outils de création de pointe, tels que Webflow, votre site se démarquera par son esthétisme et son ergonomie."],
   ["img"=>"uploads/default.webp", "title"=>"Un site 100% personnalisé", "text"=>"La création de votre site internet s'appuie sur des technologies de pointe, offrant une interface de gestion conviviale pour faciliter la mise à jour de votre contenu. Ces technologies intègrent également les meilleures pratiques SEO, garantissant une visibilité optimale sur les moteurs de recherche."],
   ["img"=>"uploads/default.webp", "title"=>"Une interface intuitive", "text"=>"Un site internet flambant neuf, au design soigné et moderne, reflète le professionnalisme et le sérieux de votre entreprise. Il inspire confiance aux visiteurs et renforce l'image positive de votre marque"],
   ["img"=>"uploads/default.webp", "title"=>"Aucun frais caché", "text"=>"Votre nouveau site internet devient un véritable atout marketing. Son design attrayant et sa navigation intuitive incitent les visiteurs à explorer votre offre et à passer à l'action, maximisant ainsi l'impact de vos campagnes marketing et améliorant votre taux de conversion."]
   
   ];
   require_once $base_path . 'components/expertises/expertises-ville/part-2.php';
   ?>
-------------------------------------------------------------- */
?>

<section class="exp-domain">
  <div class="exp-domain-header">
    <h2><?= htmlspecialchars($part2_title ?? '', ENT_QUOTES, 'UTF-8') ?></h2>
    <?php if(!empty($part2_texts)) foreach ($part2_texts as $text): ?>
        <p><?= nl2br($text) ?></p>
    <?php endforeach; ?>
  </div>

  <div class="exp-domain-grid">
    <?php if(!empty($part2_blocks)) foreach ($part2_blocks as $block): ?>
      <div class="exp-card">
        <div class="exp-card-img">
          <img src="<?php echo $images_url ?><?= htmlspecialchars($block['img'], ENT_QUOTES, 'UTF-8') ?>" alt="">
        </div>
        <div class="exp-card-text">
          <h3><?= htmlspecialchars($block['title'], ENT_QUOTES, 'UTF-8') ?></h3>
          <p><?= htmlspecialchars($block['text'], ENT_QUOTES, 'UTF-8') ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<style>
.exp-domain {
    display: flex; flex-direction: column;
    background-color: #ffffff;
    padding: 6.94vw 130px;
    max-width: 2560px; margin: 0 auto;
    font-family: 'Poppins', sans-serif;
}

.exp-domain-header {
    border-bottom: 1px solid #0A1A2F; margin-bottom: 4vw; padding-bottom: 2vw;
}
.exp-domain-header h2 {
    font-size: 2.5vw; font-weight: 700; color: #0A1A2F; margin-bottom: 1.5vw;
}
.exp-domain-header p {
    font-size: 1.1vw; color: #4B5563; margin-bottom: 0.5vw; max-width: 80%;
}

.exp-domain-grid {
    display: grid; grid-template-columns: repeat(2, 1fr); gap: 2vw;
}

.exp-card {
    position: relative; display: flex; flex-direction: column;
    margin-bottom: 3vw;
}

.exp-card-img {
    width: 100%; height: 25vw; border-radius: 4px; overflow: hidden;
}
.exp-card-img img {
    width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;
}
.exp-card:hover .exp-card-img img { transform: scale(1.05); }

/* Carte Texte Superposée */
.exp-card-text {
    position: absolute; bottom: -1.5vw; right: 2vw; width: 85%;
    background-color: #0A1A2F; color: white; padding: 2vw;
    border-radius: 4px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    border-left: 4px solid #3DA8FF; transition: transform 0.3s ease;
}
.exp-card:hover .exp-card-text { transform: translateY(-10px); }

.exp-card-text h3 {
    font-size: 1.5vw; font-weight: 700; color: #3DA8FF; margin-bottom: 0.8vw;
}
.exp-card-text p {
    font-size: 0.95vw; line-height: 1.5; color: #e0e0e0;
}

@media (max-width: 1024px) {
    .exp-domain { padding: 60px 20px; }
    .exp-domain-header h2 { font-size: 28px; }
    .exp-domain-header p { font-size: 16px; max-width: 100%; }
    
    .exp-domain-grid { grid-template-columns: 1fr; gap: 60px; }
    
    .exp-card-img { height: 250px; }
    
    .exp-card-text {
        position: relative; bottom: auto; right: auto; width: 95%; margin: -30px auto 0; padding: 20px;
    }
    .exp-card-text h3 { font-size: 20px; }
    .exp-card-text p { font-size: 14px; }
}
</style>