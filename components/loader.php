<?php
// Protection si $current_lang n'est pas défini
if (!isset($current_lang)) { $current_lang = 'fr'; }

$loader_text = ($current_lang === 'en') ? 'System initialization...' : 'Initialisation du système...';
?>

<section id="page-preloader" class="preloader">
    <div class="preloader-content">
        <div class="tablet-container">
            <img src="<?php echo $root_url; ?>uploads/tablet-loader.webp" alt="Chargement..." class="tablet-img">
            
            <div class="screen-overlay-container">
                 <div class="scan-line"></div>
            </div>
            <div class="loading-bar-container">
                <div class="loading-bar-fill"></div>
            </div>
            <p class="loading-text"><?= $loader_text ?></p>
        </div>
    </div>
</section>

<style>
/* --- CSS DU PRELOADER --- */

.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #0A1A2F;
    z-index: 99999;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: transform 0.8s cubic-bezier(0.77, 0, 0.175, 1);
}

.preloader.loaded {
    transform: translateY(-100%);
}

.preloader-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    max-width: 90%;
}

/* --- LE CONTENEUR PRINCIPAL --- */
.tablet-container {
    position: relative;
    width: 100vw;
    height:100vh; /* J'ai encore un peu agrandi pour que ça claque */
    margin-bottom: 30px;
    animation: floatTablet 3s ease-in-out infinite;
    overflow: hidden;
        display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

}

@media (max-width: 600px) {
    .tablet-container { width: 300px; border-radius: 18px; }
}

.tablet-img {
    width: 500px;
    height: auto;
    display: block;
    /* On enlève l'ombre ici car elle est gérée par le conteneur parent */
}

/* --- LE CONTENEUR DE L'EFFET (Maintenant en plein écran sur l'image) --- */
.screen-overlay-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
    pointer-events: none;
    /* Pas de bordure ni de marge, on couvre tout */
}

/* --- L'ANIMATION DE FLOTTEMENT --- */
@keyframes floatTablet {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-15px); }
    100% { transform: translateY(0px); }
}

/* --- LA BARRE DE CHARGEMENT --- */
.loading-bar-container {
    width: 400px; /* Ajusté à la taille de la tablette */
    max-width: 100%;
    height: 4px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 2px;
    overflow: hidden;
    margin-top: 10px;
}

.loading-bar-fill {
    height: 100%;
    background-color: #3DA8FF;
    width: 0%;
    animation: loadBar 1.5s ease-in-out forwards;
    box-shadow: 0 0 15px #3DA8FF;
}

@keyframes loadBar {
    0% { width: 0%; }
    30% { width: 40%; }
    60% { width: 75%; }
    100% { width: 100%; }
}

.loading-text {
    margin-top: 20px;
    color: #3DA8FF;
    font-family: 'Rajdhani', sans-serif; /* Si tu as cette font, sinon sans-serif */
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    font-weight: 600;
    opacity: 0.8;
    animation: blinkText 1s infinite alternate;
}

@keyframes blinkText {
    from { opacity: 0.5; }
    to { opacity: 1; }
}

/* --- LA LIGNE DE SCAN (VAGUE) --- */
.scan-line {
    position: absolute;
    left: 0;
    width: 100%;
    height: 40%; /* Vague un peu plus large */
    
    /* Dégradé plus doux pour éviter les coupures nettes */
    background: linear-gradient(to bottom, 
        transparent 0%, 
        rgba(61, 168, 255, 0.1) 20%, 
        rgba(61, 168, 255, 0.5) 50%, 
        rgba(61, 168, 255, 0.1) 80%, 
        transparent 100%
    );
    
    top: -50%;
    animation: scanMoveInside 2.5s cubic-bezier(0.4, 0, 0.2, 1) infinite;
    filter: drop-shadow(0 0 20px rgba(61, 168, 255, 0.4)); /* Glow effect */
}

@keyframes scanMoveInside {
    0% { top: -50%; opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { top: 100%; opacity: 0; }
}
</style>

<script>
/* --- JAVASCRIPT DE GESTION --- */
document.addEventListener("DOMContentLoaded", function() {
    const minLoadTime = 500; 
    const startTime = Date.now();

    window.addEventListener("load", function() {
        const elapsedTime = Date.now() - startTime;
        const remainingTime = Math.max(0, minLoadTime - elapsedTime);

        setTimeout(() => {
            const preloader = document.getElementById('page-preloader');
            if (preloader) {
                preloader.classList.add('loaded');
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 500);
            }
        }, remainingTime);
    });
});
</script>