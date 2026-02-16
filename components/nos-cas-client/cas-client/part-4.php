<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION
   -----------------------------------
   <?php
// --- PARTIE TÉMOIGNAGE CLIENT (NOUVEAU) ---
   $client_quote_label = "Le mot de fin de notre client :";
   $client_quote_text  = "Grâce à la stratégie SEO mise en place par Afalence, nous avons levé 700 000 euros, ce qui nous a permis de prouver aux associés qu'investir dans notre site internet et son référencement est particulièrement rentable.";


   // --- PARTIE BILAN ---
   $result_label = "LE BILAN";
   $result_title = "Performance & Sécurité";
   
   $result_items = [
       "<strong>Temps de montage</strong> : 48 heures (vs 2 semaines pour du traditionnel)",
       "<strong>Résistance vent</strong> : Validée jusqu'à 110 km/h",
       "<strong>Économie</strong> : 40% moins cher qu'une structure métallo-textile"
   ];

   require_once '../../../components/nos-cas-client/cas-client/part-4.php';
   ?>
-------------------------------------------------------------- */
?>

<style>
    /* WRAPPER GLOBAL POUR LE FOND GRIS */
    .cas-client-4-wrapper {
        background-color: #F9FAFB; 
        color: #0A1A2F;
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        font-family: 'Poppins', sans-serif;
    }

    /* --- SECTION BILAN (EXISTANTE) --- */
    .cas-client-4-bilan {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* MARGES STANDARDS */
        padding: 80px 130px;
        /* Calcul précis basé sur tes demandes précédentes si besoin de coller aux autres :
           padding-left: calc(9.03vw + 2.083vw);
           padding-right: calc(9.03vw + 2.083vw);
        */
    }

    .cas-client-4-header { width: 40%; }

    .cas-client-4-label {
        color: #3DA8FF; /* Bleu Clair */
        font-size: 0.9rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
    }

    .cas-client-4-title {
        font-size: clamp(2rem, 4vw, 3.5rem);
        font-weight: 800;
        line-height: 1.1;
        margin: 0;
        color: #0A1A2F;
    }

    .cas-client-4-list {
        width: 50%;
        list-style-type: none; 
        padding: 0; margin: 0;
    }

    .cas-client-4-list li {
        font-size: 1.2rem;
        line-height: 1.6;
        margin-bottom: 20px;
        color: #4B5563;
        display: flex; align-items: flex-start; gap: 15px;
    }

    .cas-client-4-list li::before {
        content: ''; display: block;
        min-width: 10px; height: 10px; margin-top: 8px;
        background-color: #3DA8FF; border-radius: 50%;
    }

    .cas-client-4-list li strong {
        font-weight: 700; color: #0A1A2F;
    }

    /* --- SÉPARATEUR --- */
    .cas-client-separator {
        height: 1px;
        background-color: rgba(10, 26, 47, 0.1); /* Bleu foncé très léger */
        margin: 0 130px; /* S'aligne avec le padding */
    }

    /* --- SECTION TÉMOIGNAGE (NOUVEAU) --- */
    .cas-client-4-quote {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 80px 130px;
    }

    .cas-client-quote-left {
        width: 40%;
    }
    
    .cas-client-quote-label {
        font-size: 1.1rem;
        font-weight: 600;
        color: #0A1A2F;
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    /* Petite ligne décorative à côté du label */
    .cas-client-quote-label::after {
        content: '';
        display: block;
        width: 40px;
        height: 2px;
        background-color: #3DA8FF;
    }

    .cas-client-quote-right {
        width: 50%;
        position: relative;
    }

    .quote-svg {
        width: 3rem;
        height: auto;
        color: #3DA8FF;
        margin-bottom: 1.5rem;
        opacity: 0.8;
    }

    .cas-client-quote-text {
        font-size: 1.25rem;
        font-style: italic;
        line-height: 1.6;
        color: #4B5563;
        font-weight: 500;
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 1024px) {
        .cas-client-4-bilan, .cas-client-4-quote {
            flex-direction: column;
            align-items: flex-start;
            padding: 60px 20px;
            gap: 40px;
        }
        .cas-client-separator { margin: 0 20px; }
        
        .cas-client-4-header, .cas-client-4-list,
        .cas-client-quote-left, .cas-client-quote-right { width: 100%; }
        
        .cas-client-4-list li { font-size: 1.1rem; }
        .cas-client-quote-text { font-size: 1.1rem; }
    }
</style>

<section class="cas-client-4-wrapper">
    
    <div class="cas-client-4-bilan">
        <div class="cas-client-4-header">
            <div class="cas-client-4-label"><?php echo htmlspecialchars($result_label ?? 'LE BILAN'); ?></div>
            <h3 class="cas-client-4-title"><?php echo htmlspecialchars($result_title ?? ''); ?></h3>
        </div>

        <ul class="cas-client-4-list">
            <?php if(isset($result_items)): foreach ($result_items as $item): ?>
                <li><span><?php echo $item; ?></span></li>
            <?php endforeach; endif; ?>
        </ul>
    </div>

    <?php if(!empty($client_quote_text)): ?>
    <div class="cas-client-separator"></div>

    <div class="cas-client-4-quote">
        <div class="cas-client-quote-left">
            <div class="cas-client-quote-label">
                <?php echo htmlspecialchars($client_quote_label ?? 'Le mot de fin de notre client :'); ?>
            </div>
        </div>

        <div class="cas-client-quote-right">
            <div class="quote-svg">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 31 23" fill="currentColor" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                    <path d="M5.08909 11.1178H4.65598C5.0169 10.829 5.45002 10.5764 5.95532 10.3598C6.46062 10.1433 7.14638 10.035 8.01261 10.035C9.45632 10.035 10.6835 10.5403 11.6941 11.5509C12.7769 12.5615 13.3183 14.0052 13.3183 15.882C13.3183 17.6867 12.7408 19.2026 11.5858 20.4297C10.4308 21.5847 8.91493 22.1622 7.0381 22.1622C5.16127 22.1622 3.501 21.4403 2.05729 19.9966C0.685764 18.4807 0 16.3873 0 13.7165C0 10.3237 1.11888 7.36411 3.35663 4.83761C5.59439 2.23893 8.37354 0.686938 11.6941 0.181641V4.18795C9.81725 4.54887 8.22917 5.37901 6.92982 6.67835C5.70267 7.9055 5.08909 9.38531 5.08909 11.1178ZM22.6302 11.1178H22.0888C22.4497 10.829 22.8829 10.5764 23.3882 10.3598C23.9656 10.1433 24.6875 10.035 25.5537 10.035C26.9974 10.035 28.2246 10.5403 29.2352 11.5509C30.318 12.5615 30.8594 14.0052 30.8594 15.882C30.8594 17.6867 30.2458 19.2026 29.0186 20.4297C27.8637 21.5847 26.3478 22.1622 24.4709 22.1622C22.5941 22.1622 20.9338 21.4403 19.4901 19.9966C18.1186 18.4807 17.4328 16.3873 17.4328 13.7165C17.4328 10.3237 18.5517 7.36411 20.7895 4.83761C23.0272 2.23893 25.8425 0.686938 29.2352 0.181641V4.18795C27.3584 4.54887 25.7703 5.37901 24.4709 6.67835C23.2438 7.9055 22.6302 9.38531 22.6302 11.1178Z"></path>
                </svg>
            </div>
            
            <p class="cas-client-quote-text">
                <?php echo nl2br(htmlspecialchars($client_quote_text)); ?>
            </p>
        </div>
    </div>
    <?php endif; ?>

    </section>