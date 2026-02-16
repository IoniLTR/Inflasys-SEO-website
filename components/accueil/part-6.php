<?php 
/* --- VARIABLES ---
<?php 
$reviews_title = "Ils ont aimé travailler avec nous";

// 10 Témoignages
$reviews = [
    ["name" => "Jean Dupont", 
    "job" => "Resp. Logistique - Airbus", 
    "text" => "La réactivité d'Airtechnic pour nos hangars temporaires a été exemplaire.", 
    "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"
    ],
    ["name" => "Marie Curie", "job" => "Chef de Projet - Vinci", "text" => "Le mur acoustique gonflable a permis de réduire les nuisances sonores de 20dB.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Col. Moutarde", "job" => "Armée de Terre", "text" => "Le réalisme des leurres gonflables est impressionnant. Thermique et radar conformes.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Sophie Martin", "job" => "Dir. Usine - Renault", "text" => "Maintenance facilitée grâce aux tentes de décontamination. Service client au top.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Luc Besson", "job" => "Prod - EuropaCorp", "text" => "Structures gonflables sur mesure pour nos décors de cinéma. Rendu parfait.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Paul Atréides", "job" => "Logistique - Arrakis", "text" => "Résistance aux vents de sable incroyable. Nos camps de base sont sécurisés.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Sarah Connor", "job" => "Sécurité - Cyberdyne", "text" => "Les leurres ont parfaitement détourné l'attention. Mission accomplie.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Tony Stark", "job" => "CEO - Stark Ind.", "text" => "Technologie gonflable impressionnante, déploiement en un temps record.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Bruce Wayne", "job" => "PDG - Wayne Ent.", "text" => "Discrétion et efficacité pour nos abris temporaires. Je recommande.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
    ["name" => "Ellen Ripley", "job" => "Officier - Nostromo", "text" => "Le sas de décontamination nous a sauvé la mise. Fiabilité absolue.", "logo" => $images_url . "uploads/Logo/clients/Chanel-logo.webp"],
];
require_once $base_path . 'components/accueil/part-6.php'; ?>
*/
?>

<style>
.index-6 {
    background-color: #0A1A2F;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    /* Alignement Header : 130px */
    padding: 6.94vw 130px; 
    max-width: 2560px;
    margin: 0 auto;
    color: white;
}

.index-6 h2 {
    font-size: 2.78vw;
    font-weight: 700;
    margin-bottom: 4vw;
    text-align: center;
}

.carousel-index-6 {
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
    gap: 1.5vw;
}

.c6-viewport {
    overflow: hidden;
    width: 100%;
    touch-action: pan-y;
    cursor: grab;
}

.content-index-6 {
    display: flex;
    flex-direction: row;
    align-items: stretch;
    width: 100%;
    gap: 1.5vw;
    will-change: transform;
    transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1);
}

.temoignages-index-6 {
    flex: 0 0 calc(33.333% - 1vw);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: #ffffff;
    color: #0A1A2F;
    border-radius: 4px;
    padding: 2.5vw;
    border-bottom: 4px solid #3DA8FF;
    position: relative;
}

.temoignages-index-6 h3 { font-size: 1.4vw; font-weight: 700; margin-bottom: 5px; }
.temoignages-index-6-job { font-size: 0.9vw; color: #3DA8FF; font-weight: 600; text-transform: uppercase; margin-bottom: 1.5vw; }
.temoignages-index-6 p { font-size: 1vw; font-weight: 400; line-height: 1.6; color: #4B5563; flex-grow: 1; }
.temoignages-client-index-6 { margin-top: 2vw; height: 5vw; width:100%; display: flex; align-items: center; }
.temoignages-client-index-6 img { max-height: 100%; min-width: 100%; object-fit: contain; }

.c6-arrow {
    flex: 0 0 auto;
    display: flex; align-items: center; justify-content: center;
    width: 3.5vw; height: 3.5vw;
    color: #3DA8FF; background: rgba(255,255,255,0.05);
    border: 1px solid rgba(61, 168, 255, 0.3); border-radius: 50%;
    cursor: pointer; transition: all 0.3s ease;
}
.c6-arrow:hover { background: #3DA8FF; color: #0A1A2F; transform: scale(1.1); }

.c6-dots { display: flex; align-items: center; gap: 10px; margin-top: 2.5vw; }
.c6-dots span { display: block; width: 10px; height: 10px; border-radius: 50%; background: #9CA3AF; opacity: 0.5; cursor: pointer; transition: all 0.3s ease; }
.c6-dots span.c6-active { background: #3DA8FF; opacity: 1; transform: scale(1.2); }

/* RESPONSIVE */
@media (max-width: 1024px) {
    .index-6 { padding: 60px 20px; }
    .index-6 h2 { font-size: 28px; }
    .carousel-index-6 { flex-direction: column; gap: 20px; }
    .temoignages-index-6 { flex: 0 0 calc(100% - 20px); padding: 30px; }
    .temoignages-index-6 h3 { font-size: 20px; }
    .temoignages-index-6-job { font-size: 14px; }
    .temoignages-index-6 p { font-size: 16px; }
    .c6-arrow { display: none; } 
    .c6-dots { margin-top: 30px; }
}
@media (min-width: 600px) and (max-width: 1024px) {
    .temoignages-index-6 { flex: 0 0 calc(50% - 15px); }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const carousels = document.querySelectorAll(".carousel-index-6");
    carousels.forEach((carousel) => {
        const track = carousel.querySelector(".c6-track");
        const slides = Array.from(carousel.querySelectorAll(".temoignages-index-6"));
        const prevBtn = carousel.querySelector(".c6-prev");
        const nextBtn = carousel.querySelector(".c6-next");
        const wrapper = carousel.closest(".index-6");
        const dotsContainer = wrapper ? wrapper.querySelector(".c6-dots") : null;
        if (!track || !slides.length || !dotsContainer) return;

        const getVisibleCount = () => {
            const w = window.innerWidth;
            if (w <= 600) return 1;
            if (w <= 1024) return 2;
            return 3;
        };

        let currentSlide = 0;
        const totalSlides = slides.length;

        // Init Dots
        dotsContainer.innerHTML = "";
        slides.forEach((_, i) => {
            const dot = document.createElement("span");
            if (i === 0) dot.classList.add("c6-active");
            dotsContainer.appendChild(dot);
            dot.addEventListener("click", () => { currentSlide = i; updateCarousel(); });
        });
        const dots = Array.from(dotsContainer.querySelectorAll("span"));

        function updateCarousel() {
            const visibleCount = getVisibleCount();
            
            // Calcul de la position (Modulo non géré visuellement pour l'infini parfait mais fonctionnellement pour la boucle)
            // Pour faire une boucle "infinie" simple (saut du dernier au premier)
            
            // Calcul de la translation
            const style = getComputedStyle(track);
            const gap = parseFloat(style.columnGap || style.gap || 0);
            const slideWidth = slides[0].getBoundingClientRect().width + gap;
            
            // Pour éviter les espaces blancs à la fin si on est sur les derniers
            // On limite l'offset visuel maximum, MAIS si on veut boucler, on force le retour à 0
            const maxOffset = totalSlides - visibleCount;
            
            let offsetIndex = currentSlide;
            // Si on est dans les derniers slides et qu'on ne veut pas d'espace vide à droite :
            // if (offsetIndex > maxOffset) offsetIndex = maxOffset; 
            // (Désactivé pour permettre la boucle logique, le CSS gère le reste)

            const translateX = -(slideWidth * offsetIndex);
            track.style.transform = `translateX(${translateX}px)`;

            // Mise à jour Dots
            dots.forEach(d => d.classList.remove("c6-active"));
            if (dots[currentSlide]) dots[currentSlide].classList.add("c6-active");
        }

        if(nextBtn) nextBtn.addEventListener("click", () => {
            // Boucle infinie logique : (current + 1) % total
            // Cependant, pour l'affichage, si on dépasse maxOffset, on va avoir du blanc
            // Astuce simple : Si on arrive au bout, on retourne à 0
            
            const visibleCount = getVisibleCount();
            const maxIndex = totalSlides - visibleCount;

            if (currentSlide >= maxIndex) {
                currentSlide = 0; // Retour au début
            } else {
                currentSlide++;
            }
            updateCarousel();
        });

        if(prevBtn) prevBtn.addEventListener("click", () => {
            const visibleCount = getVisibleCount();
            const maxIndex = totalSlides - visibleCount;

            if (currentSlide <= 0) {
                currentSlide = maxIndex; // Aller à la fin
            } else {
                currentSlide--;
            }
            updateCarousel();
        });

        window.addEventListener("resize", updateCarousel);
        updateCarousel();
    });
});
</script>

<section class="index-6">
  <h2><?php echo $reviews_title; ?></h2>
  <div class="carousel-index-6">
    <button class="c6-arrow c6-prev" aria-label="Précédent">
      <svg viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
    </button>
    <div class="c6-viewport">
      <div class="content-index-6 c6-track">
        <?php foreach($reviews as $review): ?>
        <div class="temoignages-index-6">
          <svg style="position:absolute; top:2vw; right:2vw; width:2.5vw; height:2.5vw; opacity:0.1;" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21L14.017 18C14.017 16.896 14.389 15.954 15.133 15.174C15.877 14.394 16.945 13.791 18.337 13.365V13.023C18.337 11.955 17.955 10.824 17.191 9.63C16.427 8.436 15.227 7.788 13.591 7.686V2.058C17.371 2.228 20.173 4.092 21.997 7.65C23.821 11.208 24.733 15.658 24.733 21H14.017ZM0 21L0 18C0 16.896 0.372 15.954 1.116 15.174C1.86 14.394 2.928 13.791 4.32 13.365V13.023C4.32 11.955 3.938 10.824 3.174 9.63C2.41 8.436 1.21 7.788 -0.426 7.686V2.058C3.354 2.228 6.156 4.092 7.98 7.65C9.804 11.208 10.716 15.658 10.716 21H0Z"></path></svg>
          <h3><?php echo $review['name']; ?></h3>
          <div class="temoignages-index-6-job"><?php echo $review['job']; ?></div>
          <p><?php echo $review['text']; ?></p>
          <div class="temoignages-client-index-6">
            <img src="<?php echo $review['logo']; ?>" alt="Logo Client">
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <button class="c6-arrow c6-next" aria-label="Suivant">
      <svg viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
    </button>
  </div>
  <div class="c6-dots" aria-label="Navigation carrousel"></div>
</section>