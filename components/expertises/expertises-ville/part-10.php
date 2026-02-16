          <?php 
/* --------------------------------------------------------------
   VARIABLES
   --------------------------------------------------------------  
<?php
   $part10_title = $part10_title ?? "Avis clients";
   $cat_reviews = [
       ["name" => "Jean Dupont", "job" => "Airbus", "text" => "Service impeccable.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
       ["name" => "Marie", "job" => "Vinci", "text" => "Très pro.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
       ["name" => "Pierre", "job" => "Thales", "text" => "Réactifs.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
       ["name" => "Sophie", "job" => "Renault", "text" => "Top.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"],
       ["name" => "Luc", "job" => "Dior", "text" => "Parfait.", "logo" => "uploads/Logo/clients/Chanel-logo.webp"]
   ];
   require_once $base_path . 'components/expertises/expertises-ville/part-10.php';
   ?>
     -------------------------------------------------------------- */
?>

<section class="exp-reviews">
  <h2><?= htmlspecialchars($part10_title) ?></h2>
  
  <div class="exp-carousel">
    <button class="exp-nav-btn exp-prev"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg></button>
    
    <div class="exp-viewport">
      <div class="exp-track">
        <?php foreach($cat_reviews as $review): ?>
        <div class="exp-review-card">
          <h3><?= $review['name'] ?></h3>
          <div class="exp-job"><?= $review['job'] ?></div>
          <p><?= $review['text'] ?></p>
          <div class="exp-logo"><img src="<?php echo $images_url ?><?= $review['logo'] ?>" alt=""></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <button class="exp-nav-btn exp-next"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
  </div>
  <div class="exp-dots"></div>
</section>

<script>
/* Même JS que catégories part-10 */
document.addEventListener("DOMContentLoaded", () => {
    const track = document.querySelector('.exp-track');
    if(!track) return;
    const slides = Array.from(track.children);
    const next = document.querySelector('.exp-next');
    const prev = document.querySelector('.exp-prev');
    const dotsContainer = document.querySelector('.exp-dots');
    let current = 0;

    const update = () => {
        const w = slides[0].getBoundingClientRect().width + 20; // 20 = gap (approx)
        track.style.transform = `translateX(-${current * w}px)`;
        Array.from(dotsContainer.children).forEach((d,i) => d.classList.toggle('active', i===current));
    };

    slides.forEach((_,i) => {
        const d = document.createElement('span');
        if(i===0) d.classList.add('active');
        dotsContainer.appendChild(d);
        d.addEventListener('click', ()=>{ current=i; update(); });
    });

    next.addEventListener('click', () => { current = (current+1)%slides.length; update(); });
    prev.addEventListener('click', () => { current = (current-1+slides.length)%slides.length; update(); });
    window.addEventListener('resize', update);
});
</script>

<style>
.exp-reviews {
    background: #0A1A2F; color: white;
    padding: 6.94vw 130px; max-width: 2560px; margin: 0 auto;
    display: flex; flex-direction: column; align-items: center;
    font-family: 'Poppins', sans-serif;
}
.exp-reviews h2 { font-size: 2.78vw; font-weight: 700; margin-bottom: 4vw; }

.exp-carousel { display: flex; align-items: center; gap: 1.5vw; width: 100%; }
.exp-viewport { overflow: hidden; width: 100%; }
.exp-track { display: flex; gap: 1.5vw; transition: 0.5s; }

.exp-review-card {
    flex: 0 0 calc(33.333% - 1vw); background: white; color: #0A1A2F;
    padding: 2.5vw; border-radius: 4px; border-bottom: 4px solid #3DA8FF;
    display: flex; flex-direction: column; justify-content: space-between;
}
.exp-review-card h3 { font-size: 1.4vw; font-weight: 700; }
.exp-job { font-size: 0.9vw; color: #3DA8FF; font-weight: 600; text-transform: uppercase; margin-bottom: 1vw; }
.exp-review-card p { font-size: 1vw; color: #4B5563; line-height: 1.6; margin-bottom: 1.5vw; }
.exp-logo img { height: 4vw; object-fit: contain; }

.exp-nav-btn {
    background: rgba(255,255,255,0.1); border: 1px solid rgba(61,168,255,0.3); border-radius: 50%;
    width: 3.5vw; height: 3.5vw; color: #3DA8FF; cursor: pointer; display: flex; align-items: center; justify-content: center;
}
.exp-nav-btn:hover { background: #3DA8FF; color: #0A1A2F; }
.exp-nav-btn svg { width: 1.5vw; }

.exp-dots { display: flex; gap: 10px; margin-top: 3vw; }
.exp-dots span { width: 10px; height: 10px; background: #9CA3AF; border-radius: 50%; cursor: pointer; opacity: 0.5; }
.exp-dots span.active { background: #3DA8FF; opacity: 1; transform: scale(1.3); }

@media (max-width: 1024px) {
    .exp-reviews { padding: 60px 20px; }
    .exp-reviews h2 { font-size: 28px; }
    .exp-review-card { flex: 0 0 100%; padding: 30px; }
    .exp-review-card h3 { font-size: 20px; }
    .exp-job { font-size: 14px; }
    .exp-review-card p { font-size: 16px; }
    .exp-logo img { height: 60px; }
    .exp-nav-btn { display: none; }
}
</style>