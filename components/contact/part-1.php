<?php 
/* --------------------------------------------------------------
   VARIABLES
   -------------------------------------------------------------- 
   <?php 
$contact_hero_subtitle = "Donnons vis à vos idées";
$contact_hero_title    = "Ensemble, créons quelque chose de remarquable.";
// Image ou Picto (Utilise un chemin absolu ou relatif correct)
$contact_logo_url = 'uploads/Picto/picto1.webp'; 
require_once $base_path . 'components/contact/part-1.php'; ?>
*/
?>

<style>
/* ==========================================================================
   CSS CONTACT PART-1 (VERSION TECH)
   ========================================================================== */
.contact-part-1 {
    /* Alignement Header : 130px */
    padding: 140px 130px 6.94vw 130px; 
    width: 100%;
    max-width: 2560px;
    margin: 0 auto;
    
    display: flex;
    justify-content: space-between;
    align-items: center;
    
    /* Fond Bleu Foncé + Motif Grille Technique CSS */
    background-color: #0A1A2F;
    background-image: 
        linear-gradient(rgba(61, 168, 255, 0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(61, 168, 255, 0.05) 1px, transparent 1px);
    background-size: 4vw 4vw; /* Taille de la grille */
    
    min-height: 100vh;
    color: white;
    position: relative;
    overflow: hidden;
}

/* Effet d'ombre portée globale pour la profondeur */
.contact-part-1::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: radial-gradient(circle at 50% 50%, transparent 0%, #0A1A2F 90%);
    pointer-events: none;
}

.contact-content-text {
    width: 55%;
    z-index: 2;
    display: flex;
    flex-direction: column;
    gap: 1.5vw;
}

.contact-subtitle {
    color: #3DA8FF;
    font-size: 1vw;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    display: flex;
    align-items: center;
    gap: 1vw;
}

.contact-subtitle::before {
    content: '';
    width: 3vw;
    height: 1px;
    background-color: #3DA8FF;
}

.contact-part-1 h1 {
    margin: 0;
    font-size: 4vw; 
    font-weight: 700;
    line-height: 1.1;
    color: #ffffff;
}

.contact-part-1 h1 strong {
    color: #3DA8FF; /* Mot clé en bleu */
    font-weight: 700;
}

/* --- Carte Logo Flottante (Glassmorphism) --- */
.contact-logo-wrapper {
    z-index: 2;
    width: 30%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.contact-logo-card {
    width: 18vw;
    height: 18vw;
    
    /* Effet Verre */
    background: rgba(255, 255, 255, 0.03);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    
    /* Ombre lumineuse bleue */
    box-shadow: 0 0 50px rgba(61, 168, 255, 0.15);
    
    /* Animation de flottement */
    animation: floatLogo 6s ease-in-out infinite;
}

.contact-logo-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 20px;
}

@keyframes floatLogo {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .contact-part-1 {
        flex-direction: column;
        justify-content: center;
        text-align: center;
        padding: 140px 20px 60px 20px;
        min-height: auto;
        gap: 50px;
        background-size: 40px 40px;
    }

    .contact-content-text {
        width: 100%;
        align-items: center;
    }

    .contact-subtitle {
        font-size: 14px;
        justify-content: center;
    }
    
    .contact-part-1 h1 {
        font-size: 38px;
    }

    .contact-logo-wrapper {
        width: 100%;
    }

    .contact-logo-card {
        width: 140px;
        height: 140px;
        padding: 30px;
        border-radius: 15px;
    }
}
</style>

<section class="contact-part-1">
    
    <div class="contact-content-text">
        <div class="contact-subtitle"><?= htmlspecialchars($contact_hero_subtitle, ENT_QUOTES, 'UTF-8') ?></div>
        <h1><?= $contact_hero_title ?></h1>
    </div>

    <div class="contact-logo-wrapper">
        <div class="contact-logo-card">
            <img src="<?php echo $images_url?><?= htmlspecialchars($contact_logo_url, ENT_QUOTES, 'UTF-8') ?>" alt="Pictogramme Contact">
        </div>
    </div>

</section>