<?php
 
/*--- VARIABLES ---
<?php
$hero_title_line1 = "Ingéniérie";
$hero_title_line2 = "et gonflables";
$hero_title_line3 = "augmentés";


$hero_services = [
    "Ingénierie",
    "Hangar",
    "Acoustique",
    "Cibles & Leurres"
];


$hero_image_path = "uploads/default.webp";
$hero_image_alt = "Structure gonflable industrielle Inflasys";

require_once $base_path . 'components/accueil/part-1.php'; ?>
*/
?>

<style>
.index-1 {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    min-height: 100vh;
    background-color: #0A1A2F;
    margin-top:calc(-6.944vw - 40px);
    /* ALIGNEMENT AVEC LE HEADER (130px de marge de chaque côté) */
    padding: 0 130px; 
    width: 100%;
    max-width: 2560px; /* Sécurité grand écrans */
    margin: 0 auto;
    
    position: relative;
    overflow: hidden;
}

.content-index-1 {
    display: flex;
    flex-direction: column;
    width: 45%;
    z-index: 2;
}

.index-1 h1 {
    font-size: 4.5vw;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
    padding-bottom: 2vw;
    line-height: 1.1;
    letter-spacing: -0.02em;
}

.index-1 h1 span {
    color: #3DA8FF; /* Bleu clair */
}

.services-index {
    display: flex;
    flex-direction: row;
    align-items: center;
    color: #9CA3AF;
    font-size: 1vw;
    gap: 1vw;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

.separator-dot {
    color: #3DA8FF;
    font-weight: 700;
}

.index-1-img-wrapper {
    width: 50vw; /* Prend la moitié de l'écran à droite */
    height: 100vh;
    position: absolute; /* Sort du flux pour coller à droite */
    right: 0;
    top: 0;
    clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
}

.index-1 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* ---------- RESPONSIVE ---------- */
@media (max-width: 1024px) {
    .index-1 {
        flex-direction: column;
        align-items: flex-start;
        padding: 140px 20px 40px 20px; /* Reset padding mobile */
    }

    .content-index-1 {
        width: 100%;
    }

    .index-1 h1 {
        font-size: 42px;
    }

    .services-index {
        flex-wrap: wrap;
        gap: 15px;
        font-size: 14px;
    }

    .index-1-img-wrapper {
        position: relative;
        width: 100%;
        height: 50vh;
        clip-path: none;
        margin-top: 40px;
        border-radius: 20px;
        right: auto;
        top: auto;
    }
}
</style>

<section class="index-1">
    <div class="content-index-1">
        <h1>
            <div><?php echo $hero_title_line1; ?></div>
            <div><?php echo $hero_title_line2; ?></div>
            <div><span><?php echo $hero_title_line3; ?></span></div>
        </h1>
        <div class="services-index">
            <?php foreach($hero_services as $index => $service): ?>
                <p><?php echo $service; ?></p>
                <?php if($index < count($hero_services) - 1): ?>
                    <p class="separator-dot">·</p>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div class="index-1-img-wrapper">
        <img src="<?php echo $root_url ?><?php echo $hero_image_path; ?>" alt="<?php echo $hero_image_alt; ?>" />
    </div>
</section>