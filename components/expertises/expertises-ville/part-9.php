<?php 
/* --------------------------------------------------------------
   VARIABLES
   --------------------------------------------------------------
<?php 
   $why_title = "Pourquoi choisir Afalence ?";
   $why_paragraphs = [
       "Afalence est une agence spécialisée dans la création de sites internet basée à " . $ville_nom . ".",
       "Son équipe d'experts aux compétences complémentaires mettra tout en œuvre pour réaliser votre projet avec rigueur, créativité et passion.",
       "<strong>Vous bénéficierez ainsi d'un site internet unique, performant et parfaitement aligné avec vos objectifs.</strong>"
   ];

   $why_pattern_src = "uploads/pattern-1.webp";
   $why_pattern_alt = "pourquoi-nous-choisir";

   $why_btn_label = "Nous contacter";
   $why_btn_link  = "contact";

   $why_cards = [
       [
           "text" => "3 expertises<br> complémentaires : UX<br> Design,Développement, SEO",
           "img"  => "uploads/Picto/pattern-1.webp",
           "alt"  => "pattern"
       ],
        [
           "text" => "Travail approfondi de l’UX<br>pour optimiser la rétention<br>et la conversion de votre site",
           "img"  => "uploads/Picto/pattern-1.webp",
           "alt"  => "pattern"
       ],
       [
           "text" => "Création de site sur<br>mesure au pixel près.",
           "img"  => "uploads/Picto/pattern-1.webp",
           "alt"  => "pattern"
       ],
        [
           "text" => "Développeur fullstack<br>expérimenté sans<br>limitations dues au no code",
           "img"  => "uploads/Picto/pattern-1.webp",
           "alt"  => "pattern"
       ],
        [
           "text" => "Optimisation de votre<br>site pour favoriser son<br>référencement sur Google",
           "img"  => "uploads/Picto/pattern-1.webp",
           "alt"  => "pattern"
       ],
   ];
   require_once $base_path . 'components/expertises/expertises-ville/part-9.php';
?>
 -------------------------------------------------------------- */
?>

<section class="exp-why">
    <div class="exp-why-cta">
        <h3><?= htmlspecialchars($why_title) ?></h3>
        
        <div class="exp-why-text">
            <?php foreach($why_paragraphs as $p): ?>
                <p><?= nl2br($p) ?></p>
            <?php endforeach; ?>
        </div>
        
        <a href="<?php echo $base_url ?><?= htmlspecialchars($why_btn_link) ?>" class="exp-why-btn">
            <div><?= htmlspecialchars($why_btn_label) ?></div>
            <div class="exp-why-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </div>
        </a>
    </div>

    <div class="exp-why-grid">
        <?php foreach ($why_cards as $card): ?>
            <div class="exp-why-card">
                <div><?= $card['text'] ?></div> <img src="<?php echo $images_url ?><?= htmlspecialchars($card['img']) ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
</section>

<style>
.exp-why {
    display: flex; justify-content: space-between; background: white;
    padding: 6.94vw 130px; max-width: 2560px; margin: 0 auto;
    gap: 4vw; font-family: 'Poppins', sans-serif;
}

.exp-why-cta { width: 40%; display: flex; flex-direction: column; }
.exp-why-cta h3 { font-size: 2.4vw; font-weight: 700; color: #0A1A2F; margin-bottom: 2vw; }

/* Styles pour les paragraphes et le gras */
.exp-why-text { margin-bottom: 3vw; }
.exp-why-text p { 
    font-size: 1.1vw; 
    color: #4B5563; 
    line-height: 1.6; 
    margin-bottom: 1.5vw; /* Espace entre les paragraphes */
}
.exp-why-text p:last-child { margin-bottom: 0; }
.exp-why-text strong {
    color: #0A1A2F; /* Couleur du texte en gras */
    font-weight: 700;
}

.exp-why-btn {
    display: flex; justify-content: space-between; align-items: center;
    background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #0A1A2F 50%, #0A1A2F 100%);
    background-size: 210% 100%; background-position: left;
    transition: 0.6s ease; padding: 0.8vw 1.5vw; border-radius: 50px;
    color: #fff; font-size: 1.042vw; font-weight: 600; text-transform: uppercase; text-decoration: none;
    width: fit-content; min-width: 180px;
    gap:10px;
}
.exp-why-btn:hover { background-position: right; }

.exp-why-icon {
    background: #fff; border-radius: 50%; width: 2vw; height: 2vw;
    display: flex; align-items: center; justify-content: center; color: #0A1A2F; transition: 0.3s;
}
.exp-why-btn:hover .exp-why-icon { background: #0A1A2F; color: #fff; }
.exp-why-icon svg { width: 1.2vw; transition: transform 0.3s; }
.exp-why-btn:hover .exp-why-icon svg { transform: rotate(45deg); }

.exp-why-grid { width: 55%; display: grid; grid-template-columns: 1fr 1fr; gap: 1.5vw; }
.exp-why-card {
    border: 1px solid #0A1A2F; border-radius: 4px; padding: 2vw; position: relative;
    display: flex; align-items: center; transition: 0.3s;
}
.exp-why-card:hover { background: #0A1A2F; color: white; }
.exp-why-card div { font-size: 1.2vw; font-weight: 600; z-index: 2; }
.exp-why-card img { position: absolute; right: 1vw; bottom: 1vw; width: 2.5vw; opacity: 0.2; }

@media (max-width: 1024px) {
    .exp-why { flex-direction: column; padding: 60px 20px; gap: 40px; }
    .exp-why-cta, .exp-why-grid { width: 100%; }
    .exp-why-cta h3 { font-size: 28px; }
    
    .exp-why-text p { font-size: 16px; margin-bottom: 20px; }
    
    .exp-why-btn { width: 100%; font-size: 14px; padding: 12px 24px; justify-content: center; }
    .exp-why-icon { width: 30px; height: 30px; }
    .exp-why-icon svg { width: 18px; }
    
    .exp-why-grid { grid-template-columns: 1fr; }
    .exp-why-card { padding: 25px; }
    .exp-why-card div { font-size: 18px; }
    .exp-why-card img { width: 40px; }
}
</style>