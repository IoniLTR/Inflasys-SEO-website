<?php 
/* Variables
<?php  
$cat_reviews_title = $cat_reviews_title ?? "Ils ont aimé travailler avec nous";

// EXACTEMENT 5 TÉMOIGNAGES
$cat_reviews = [
    ["name" => "Jean Dupont", "job" => "Airbus", "text" => "Réactivité exemplaire pour nos hangars temporaires.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Marie Curie", "job" => "Vinci", "text" => "Le mur acoustique a réduit le bruit de 20dB. Bluffant.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Col. Moutarde", "job" => "Armée", "text" => "Leurres tactiques hyper réalistes. Conformes aux attentes.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Sophie Martin", "job" => "Renault", "text" => "Maintenance facilitée grâce aux tentes rapides. Top.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Luc Besson", "job" => "EuropaCorp", "text" => "Structures gonflables sur mesure pour nos décors. Parfait.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"]
];
   require_once $base_path . 'components/categories/part-10.php';
   ?>
   -------------------------------------------------------------- */
?>

<style>
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
}

.cat-review-card h3 { font-size: 1.4vw; font-weight: 700; margin-bottom: 5px; }
.cat-review-job { font-size: 0.9vw; color: #3DA8FF; font-weight: 600; text-transform: uppercase; margin-bottom: 1vw; }
.cat-review-card p { font-size: 1vw; color: #4B5563; margin: 1vw 0; line-height: 1.6; flex-grow: 1;}
.cat-review-logo { margin-top: 1.5vw; }
.cat-review-logo img { height: 5vw; width:100%; object-fit: contain; }

.cat-nav-btn {
    width: 3.5vw; height: 3.5vw; flex: 0 0 auto;
    display: flex; align-items: center; justify-content: center;
    border: 1px solid rgba(61, 168, 255, 0.3); background: rgba(255,255,255,0.05);
    border-radius: 50%; color: #3DA8FF; cursor: pointer; transition: 0.3s;
}
.cat-nav-btn:hover { background: #3DA8FF; color: #0A1A2F; transform: scale(1.1); }

/* STYLE DES POINTS (Dots) */
.cat-dots {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 3vw;
}
.cat-dots span {
    display: block; width: 10px; height: 10px;
    border-radius: 50%; background: #9CA3AF; opacity: 0.5;
    cursor: pointer; transition: all 0.3s ease;
}
.cat-dots span.active {
    background: #3DA8FF; opacity: 1; transform: scale(1.3);
}

@media (max-width: 1024px) {
    .cat-index-6 { padding: 60px 20px; }
    .cat-index-6 h2 { font-size: 28px; }
    .cat-review-card { flex: 0 0 100%; padding: 30px; }
    .cat-review-card h3 { font-size: 20px; }
    .cat-review-job { font-size: 14px; }
    .cat-review-card p { font-size: 16px; }
    .cat-nav-btn { display: none; } /* Caché en mobile, on utilise le touch + dots */
    .cat-dots { margin-top: 30px; }
}
@media (min-width: 600px) and (max-width: 1024px) {
    .cat-review-card { flex: 0 0 calc(50% - 15px); }
}
</style>

<section class="cat-index-6">
  <h2><?= htmlspecialchars($cat_reviews_title, ENT_QUOTES, 'UTF-8') ?></h2>
  
  <div class="cat-carousel">
    <button class="cat-nav-btn cat-prev" aria-label="Précédent">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
    </button>
    
    <div class="cat-viewport">
      <div class="cat-track">
        <?php foreach($cat_reviews as $review): ?>
        <div class="cat-review-card">
          <svg style="position:absolute; top:2vw; right:2vw; width:2vw; height:2vw; opacity:0.1;" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21L14.017 18C14.017 16.896 14.389 15.954 15.133 15.174C15.877 14.394 16.945 13.791 18.337 13.365V13.023C18.337 11.955 17.955 10.824 17.191 9.63C16.427 8.436 15.227 7.788 13.591 7.686V2.058C17.371 2.228 20.173 4.092 21.997 7.65C23.821 11.208 24.733 15.658 24.733 21H14.017ZM0 21L0 18C0 16.896 0.372 15.954 1.116 15.174C1.86 14.394 2.928 13.791 4.32 13.365V13.023C4.32 11.955 3.938 10.824 3.174 9.63C2.41 8.436 1.21 7.788 -0.426 7.686V2.058C3.354 2.228 6.156 4.092 7.98 7.65C9.804 11.208 10.716 15.658 10.716 21H0Z"></path></svg>
          <div>
              <h3><?= $review['name']; ?></h3>
              <div class="cat-review-job"><?= $review['job']; ?></div>
              <p><?= $review['text']; ?></p>
          </div>
          <div class="cat-review-logo"><img src="<?php echo $images_url ?><?= $review['logo']; ?>" alt="Logo"></div>
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
    const carousel = document.querySelector('.cat-carousel');
    const track = carousel.querySelector('.cat-track');
    const slides = Array.from(track.children);
    const nextBtn = carousel.querySelector('.cat-next');
    const prevBtn = carousel.querySelector('.cat-prev');
    const dotsContainer = document.querySelector('.cat-dots');
    
    let currentSlide = 0;
    const totalSlides = slides.length;

    // 1. Calculer combien de slides sont visibles
    const getVisibleCount = () => {
        if (window.innerWidth <= 600) return 1;
        if (window.innerWidth <= 1024) return 2;
        return 3;
    };

    // 2. Création des points (1 point par slide)
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

    // 3. Mise à jour position + points
    const updateCarousel = () => {
        const visibleCount = getVisibleCount();
        
        // Limite pour ne pas avoir de blanc à droite (sauf si on veut boucle infinie visuelle)
        // Ici on implémente la logique "Boucle de retour" demandée :
        // Si on dépasse, on revient à 0.
        
        // Calcul dimensions
        const style = getComputedStyle(track);
        const gap = parseFloat(style.columnGap || style.gap || 0);
        const slideWidth = slides[0].getBoundingClientRect().width + gap;
        
        // Déplacement
        track.style.transform = `translateX(-${currentSlide * slideWidth}px)`;

        // Active Dot
        dots.forEach(d => d.classList.remove('active'));
        if(dots[currentSlide]) dots[currentSlide].classList.add('active');
    };

    // 4. Clic Suivant (Boucle infinie)
    if(nextBtn) {
        nextBtn.addEventListener('click', () => {
            const visibleCount = getVisibleCount();
            // Si on est à la fin (ex: slide 3 sur 5, et on voit 3 slides => index max est 2)
            // Logique simple : on avance, si on dépasse total-1, on revient à 0
            
            // Pour éviter le blanc à droite, le dernier index valide est (total - visible)
            // Mais pour la boucle demandée "appuyer à l'infini", si on est au bout, on retourne au début.
            
            const maxIndex = totalSlides - visibleCount; 
            
            if (currentSlide >= maxIndex) {
                currentSlide = 0; // Retour au début
            } else {
                currentSlide++;
            }
            updateCarousel();
        });
    }

    // 5. Clic Précédent (Boucle infinie)
    if(prevBtn) {
        prevBtn.addEventListener('click', () => {
            const visibleCount = getVisibleCount();
            const maxIndex = totalSlides - visibleCount;

            if (currentSlide <= 0) {
                currentSlide = maxIndex; // Aller à la fin
            } else {
                currentSlide--;
            }
            updateCarousel();
        });
    }

    window.addEventListener('resize', updateCarousel);
    updateCarousel(); // Init
});
</script>