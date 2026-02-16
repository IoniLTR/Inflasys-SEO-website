<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION
   ---------------------
<?php
   $all_cas_client_part_2_title = 'Cas Client ADS';
   
   // Données COMPLÈTES
   $all_cas_client_part_2 = [
       [
           'title' => "Création d'une campagne d'architecte",
           'desc' => "15 prospects par mois pour une architecte d'intérieur",
           'img' => "uploads/default.webp",
           'link' => "nos-cas-clients/cas-clients"
       ],
       [
           'title' => "Campagne Google Ads parc aquatique",
           'desc' => "Clients X10 pour un parc aquatique avec une stratégie ciblée",
           'img' => "uploads/default.webp",
           'link' => "nos-cas-clients/cas-clients"
       ],
       [
           'title' => "Optimisation de campagne existante",
           'desc' => "Coût par clic divisé par 2 par appel grâce à l'optimisation",
           'img' => "uploads/default.webp",
           'link' => "nos-cas-clients/cas-clients"
       ],
       [
           'title' => "Campagne Google Ads traiteur B2B",
           'desc' => "Coût du devis d'un traiteur d'entreprise divisé par 7",
           'img' => "uploads/default.webp",
           'link' => "nos-cas-clients/cas-clients"
       ]
   ];

   require_once '../../components/nos-cas-client/part-2.php';
   ?>
-------------------------------------------------------------- */
?>

<style>
    /* --- Conteneur Principal --- */
    .all-cas-client {
        background-color: #ffffff;
        width: 100%;
        
        /* ALIGNEMENT STRICT SELON MODELE */
        max-width: 2560px;
        margin: 0 auto;
        padding-left: 130px;
        padding-right: 130px;
        
        padding-top: 5.25rem;
        padding-bottom: 5.25rem;
        box-sizing: border-box;

        font-family: 'Poppins', sans-serif;
        position: relative;
        border-bottom:1px solid #0A1A2F;
    }

    .all-cas-client h2 {
        font-size: clamp(2rem, 3vw, 40px);
        font-weight: 900;
        color: #0A1A2F;
        margin-bottom: 40px;
        margin-top: 0;
    }

    .all-cas-client-pattern {
        position: absolute;
        top: 20px;
        right: 0;
        opacity: 0.1;
        max-width: 200px;
        pointer-events: none;
    }

    .all-cas-client-content {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .all-cas-client-card {
        position: relative;
        display: block;
        height: 350px;
        border-radius: 8px;
        overflow: hidden;
        text-decoration: none;
        color: white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .all-cas-client-card:hover {
        transform: translateY(-5px);
    }

    .all-cas-client-card img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
        transition: transform 0.5s ease;
    }

    .all-cas-client-card:hover img {
        transform: scale(1.05);
    }

    .all-cas-client-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
        background: linear-gradient(180deg, rgba(10,26,47,0.1) 0%, rgba(10,26,47,0.9) 100%);
    }

    .card-desc-top {
        position: relative;
        z-index: 3;
        text-align: right;
        padding: 20px;
        font-size: 1rem;
        line-height: 1.4;
        font-weight: 500;
        color: #3DA8FF;
        background: rgba(10, 26, 47, 0.7);
        display: inline-block;
        float: right;
        border-bottom-left-radius: 8px;
        backdrop-filter: blur(4px);
    }

    .all-cas-client-card-text {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 25px;
        z-index: 3;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        box-sizing: border-box;
    }

    .all-cas-client-card-text h3 {
        margin: 0;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1.2;
        max-width: 85%;
        color: white;
    }

    .icon-card-svg {
        width: 32px;
        height: 32px;
        fill: white;
        transition: fill 0.3s ease;
    }

    .all-cas-client-card:hover .icon-card-svg {
        fill: #3DA8FF;
    }

    /* --- Responsive (Basé sur le modèle) --- */
    @media (max-width: 1024px) {
        .all-cas-client {
            padding-left: 20px;
            padding-right: 20px;
        }
        .all-cas-client-content { grid-template-columns: 1fr; }
        .all-cas-client-card { height: 300px; }
    }
</style>

<section class="all-cas-client">
    <h2><?= htmlspecialchars($all_cas_client_part_2_title ?? 'Autres Projets', ENT_QUOTES, 'UTF-8') ?></h2> 
    
    <img class="all-cas-client-pattern" src="uploads/pattern-1.webp" alt="" aria-hidden="true">
    
    <div class="all-cas-client-content">
        <?php if(isset($all_cas_client_part_2) && is_array($all_cas_client_part_2)): ?>
            <?php foreach ($all_cas_client_part_2 as $item): ?>
                <a href="<?php echo $base_url?><?php echo $item['link']; ?>" class="all-cas-client-card">
                    <img src="<?php echo $images_url?><?php echo $item['img']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" loading="lazy">
                    <div class="card-desc-top"><?php echo $item['desc']; ?></div>
                    <div class="all-cas-client-card-text">
                        <h3><?php echo $item['title']; ?></h3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-card-svg">
                            <path d="M6 18h2v-8.17l9.17 9.17 1.42-1.41L9.41 8.42H17.59V6.42H6z"/>
                        </svg>
                    </div>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>