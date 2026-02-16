<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
   // TITRE DU BLOC
   $part10_title = "Ils ont aimé travailler avec nous";

   // PATTERN (image décorative)
   $part10_pattern = "uploads/Picto/pattern-1.webp"; 

   // AVIS
   $avis = [
       [
           "name" => "Jean-Marc P.",
           "role" => "Directeur Technique - Grand Port Maritime",
           "text" => "L'automatisation de la pression nous a permis de sécuriser le stockage vrac face aux vents marins violents. Installation exemplaire.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Sylvie D.",
           "role" => "Resp. Maintenance - Site Seveso",
           "text" => "La redondance des systèmes Airtechnic répond parfaitement à nos exigences de sécurité pour le confinement de zone.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Marc L.",
           "role" => "Architecte Structure",
           "text" => "Une collaboration fluide avec le bureau d'études pour intégrer les contraintes esthétiques et techniques.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Thomas W.",
           "role" => "Chef de projet événementiel",
           "text" => "Rapidité de déploiement impressionnante et fiabilité totale du système de pilotage durant tout l'événement.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Cabinet Ingénierie X",
           "role" => "Partenaire BTP",
           "text" => "Nous prescrivons systématiquement leurs solutions pour les ouvrages temporaires de grande portée.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ]
   ];

   require_once $base_path . 'components/categories/sous-categories/part-8.php';
?>
-------------------------------------------------------------- */
?>

<style>
/* STYLE ISSU DE CATEGORIES PART-10 */
.cat-index-6 {
    background-color: #0A1A2F;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 6.94vw 130px; 
    max-width: 2560px;
    margin: 0 auto;
    color: white;
}

.cat-index-6 h2 { font-size: 2.78vw; font-weight: 700; margin-bottom: 4vw; text-align: center; }

.cat-carousel { position: relative; width: 100%; display: flex; align-items: center; gap: 1.5vw; }
.cat-viewport { overflow: hidden; width: 100%; touch-action: pan-y; cursor: grab; }
.cat-track { display: flex; gap: 1.5vw; transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1); }

.cat-review-card {
    flex: 0 0 calc(33.333% - 1vw);
    background-color: #ffffff;
    color: #0A1A2F;
    border-radius: 4px;
    padding: 2.5vw;
    border-bottom: 4px solid #3DA8FF;
    display: flex; flex-direction: column; justify-content: space-between;
    position: relative;
    min-height: 20vw;
}

.cat-review-card h3 { font-size: 1.4vw; font-weight: 700; margin-bottom: 5px; }
.cat-review-job { font-size: 0.9vw; color: #3DA8FF; font-weight: 600; text-transform: uppercase; margin-bottom: 1vw; }
.cat-review-card p { font-size: 1vw; color: #4B5563; margin: 1vw 0; line-height: 1.6; flex-grow: 1;}
.cat-review-logo { margin-top: 1.5vw; }
.cat-review-logo img { height: 5vw; width: 100%; object-fit: contain; }

.cat-nav-btn {
    width: 3.5vw; height: 3.5vw; flex: 0 0 auto;
    display: flex; align-items: center; justify-content: center;
    border: 1px solid rgba(61, 168, 255, 0.3); background: rgba(255,255,255,0.05);
    border-radius: 50%; color: #3DA8FF; cursor: pointer; transition: 0.3s;
}
.cat-nav-btn:hover { background: #3DA8FF; color: #0A1A2F; transform: scale(1.1); }

.cat-dots { display: flex; align-items: center; gap: 10px; margin-top: 3vw; }
.cat-dots span { display: block; width: 10px; height: 10px; border-radius: 50%; background: #9CA3AF; opacity: 0.5; cursor: pointer; transition: all 0.3s ease; }
.cat-dots span.active { background: #3DA8FF; opacity: 1; transform: scale(1.3); }

@media (max-width: 1024px) {
    .cat-index-6 { padding: 60px 20px; }
    .cat-index-6 h2 { font-size: 28px; }
    .cat-review-card { flex: 0 0 100%; padding: 30px; min-height: auto; }
    .cat-review-card h3 { font-size: 20px; }
    .cat-review-job { font-size: 14px; }
    .cat-review-card p { font-size: 16px; }
    .cat-nav-btn { display: none; }
    .cat-dots { margin-top: 30px; }
}
</style>

<section class="cat-index-6">
  <h2><?= htmlspecialchars($part10_title, ENT_QUOTES, 'UTF-8') ?></h2>
  
  <div class="cat-carousel">
    <button class="cat-nav-btn cat-prev" aria-label="Précédent">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
    </button>
    
    <div class="cat-viewport">
      <div class="cat-track">
        <?php foreach($avis as $review): ?>
        <div class="cat-review-card">
          <svg style="position:absolute; top:2vw; right:2vw; width:2vw; height:2vw; opacity:0.1;" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21L14.017 18C14.017 16.896 14.389 15.954 15.133 15.174C15.877 14.394 16.945 13.791 18.337 13.365V13.023C18.337 11.955 17.955 10.824 17.191 9.63C16.427 8.436 15.227 7.788 13.591 7.686V2.058C17.371 2.228 20.173 4.092 21.997 7.65C23.821 11.208 24.733 15.658 24.733 21H14.017ZM0 21L0 18C0 16.896 0.372 15.954 1.116 15.174C1.86 14.394 2.928 13.791 4.32 13.365V13.023C4.32 11.955 3.938 10.824 3.174 9.63C2.41 8.436 1.21 7.788 -0.426 7.686V2.058C3.354 2.228 6.156 4.092 7.98 7.65C9.804 11.208 10.716 15.658 10.716 21H0Z"></path></svg>
          <div>
              <h3><?= htmlspecialchars($review['name'], ENT_QUOTES, 'UTF-8') ?></h3>
              <div class="cat-review-job"><?= htmlspecialchars($review['role'], ENT_QUOTES, 'UTF-8') ?></div>
              <p><?= nl2br(htmlspecialchars($review['text'], ENT_QUOTES, 'UTF-8')) ?></p>
          </div>
          <?php if(!empty($review['logo'])): ?>
            <div class="cat-review-logo"><img src="<?php echo $images_url?><?= htmlspecialchars($review['logo'], ENT_QUOTES, 'UTF-8') ?>" alt="Logo"></div>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <button class="cat-nav-btn cat-next" aria-label="Suivant">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
    </button>
  </div>

  <div class="cat-dots" aria-label="Navigation"></div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    // S'il y a plusieurs carousels sur la page, on cible le bon
    // Ici code générique pour .cat-carousel
    const carousel = document.querySelector('.cat-carousel');
    if(!carousel) return;
    
    const track = carousel.querySelector('.cat-track');
    const slides = Array.from(track.children);
    const nextBtn = carousel.querySelector('.cat-next');
    const prevBtn = carousel.querySelector('.cat-prev');
    const dotsContainer = document.querySelector('.cat-dots');
    
    let currentSlide = 0;
    const totalSlides = slides.length;

    const getVisibleCount = () => {
        if (window.innerWidth <= 600) return 1;
        if (window.innerWidth <= 1024) return 2;
        return 3;
    };

    dotsContainer.innerHTML = '';
    slides.forEach((_, i) => {
        const dot = document.createElement('span');
        if (i === 0) dot.classList.add('active');
        dotsContainer.appendChild(dot);
        dot.addEventListener('click', () => {
            currentSlide = i;
            updateCarousel();
        });
    });
    const dots = Array.from(dotsContainer.querySelectorAll('span'));

    const updateCarousel = () => {
        const style = getComputedStyle(track);
        const gap = parseFloat(style.columnGap || style.gap || 0);
        const slideWidth = slides[0].getBoundingClientRect().width + gap;
        track.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
        dots.forEach(d => d.classList.remove('active'));
        if(dots[currentSlide]) dots[currentSlide].classList.add('active');
    };

    if(nextBtn) nextBtn.addEventListener('click', () => {
        const visible = getVisibleCount();
        const maxIndex = totalSlides - visible;
        currentSlide >= maxIndex ? currentSlide = 0 : currentSlide++;
        updateCarousel();
    });

    if(prevBtn) prevBtn.addEventListener('click', () => {
        const visible = getVisibleCount();
        const maxIndex = totalSlides - visible;
        currentSlide <= 0 ? currentSlide = maxIndex : currentSlide--;
        updateCarousel();
    });

    window.addEventListener('resize', updateCarousel);
    updateCarousel();
});
</script>