<?php
/* --------------------------------------------------------------
   VARIABLES À DÉFINIR DANS LA PAGE
   ----------------------------------- */
   // Contenu fictif pour l'exemple (à remplacer par vos vraies mentions)
   $mentions_content = '
       <h2>1. Présentation du site</h2>
       <p>En vertu de l\'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l\'économie numérique, il est précisé aux utilisateurs du site internet Airtechnic l\'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>
       
       <h2>2. Conditions générales d’utilisation</h2>
       <p>L’utilisation du site implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment.</p>
       
       <h2>3. Propriété intellectuelle</h2>
       <p>Airtechnic est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, icônes et sons.</p>
       
       <h2>4. Limitations de responsabilité</h2>
       <p>Airtechnic ne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site internet.</p>
   ';

   //<?php require_once $base_path . 'components/mentions-legales/part-1.php'; ?>

<section class="mentions-legales-content">
    
    <!-- Fil d'ariane (Code fourni) -->
    <div class="arianne-flex">
        <a href="<?= $base_url ?>" class="arianne-link">Accueil</a>
        
        <div class="arianne-svg w-embed">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 20 20" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                <path d="M12.1357 10.1821L6.26898 4.60882L7.06898 3.84875L13.7358 10.182L7.06903 16.5154L6.26896 15.7555L12.1357 10.1821Z" fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.97433 15.7555L11.8411 10.1821L5.97435 4.60882L7.06897 3.56885L14.0304 10.182L7.06904 16.7953L5.97433 15.7555ZM6.5636 15.7554L7.06902 16.2355L13.4412 10.182L7.06899 4.12865L6.5636 4.60881L12.4303 10.1821L6.5636 15.7554Z" fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.67969 15.7555L11.5465 10.1821L5.67973 4.60883L7.06896 3.28895L14.325 10.182L7.06905 17.0752L5.67969 15.7555ZM6.85824 15.7554L12.725 10.1821L6.85822 4.6088L7.069 4.40855L13.1465 10.182L7.06901 15.9556L6.85824 15.7554Z" fill="currentColor"></path>
            </svg>
        </div>
        
        <div class="bold">Mentions légales</div>
    </div>

    <!-- Contenu Textuel -->
    <div class="mentions-text-wrapper">
        <!-- Titre Principal H1 (Optionnel si inclus dans $mentions_content ou ajouté ici) -->
        <h1>Mentions Légales</h1>

        <!-- Injection du contenu -->
        <?= $mentions_content ?>
    </div>

</section>

<style>
    /* --- CONTENEUR PRINCIPAL --- */
    .mentions-legales-content {
        background-color: #ffffff;
        color: #0A1A2F;
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        
        /* Marges Standards Airtechnic + Espace Header */
        padding-top: 140px; 
        padding-bottom: 6.94vw;
        padding-left: 130px;
        padding-right: 130px;
        
        font-family: 'Poppins', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    /* --- FIL D'ARIANE (Style Personnalisé basé sur ton HTML) --- */
    .arianne-flex {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 0.9rem;
        color: #9CA3AF; /* Gris */
        margin-bottom: 3vw;
        font-weight: 500;
    }

    .arianne-link {
        text-decoration: none;
        color: #0A1A2F;
        transition: color 0.3s;
    }
    .arianne-link:hover {
        color: #3DA8FF;
    }

    .arianne-svg {
        width: 14px;
        height: 14px;
        display: flex;
        align-items: center;
        color: #9CA3AF;
    }

    .arianne-flex .bold {
        font-weight: 700;
        color: #3DA8FF; /* Bleu Clair pour la page active */
    }

    /* --- CONTENU TEXTE --- */
    .mentions-text-wrapper {
        width: 100%;
        max-width: 900px; /* Limite la largeur de lecture pour le confort */
    }

    /* Titre Principal H1 */
    .mentions-text-wrapper h1 {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 3rem;
        color: #0A1A2F;
        line-height: 1.1;
    }

    /* Titres H2 du contenu */
    .mentions-text-wrapper h2 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #0A1A2F;
        margin-top: 3rem;
        margin-bottom: 1rem;
        border-left: 4px solid #3DA8FF;
        padding-left: 15px;
    }

    /* Paragraphes */
    .mentions-text-wrapper p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #4B5563; /* Gris texte */
        margin-bottom: 1.5rem;
        text-align: justify;
    }

    /* Liens dans le texte */
    .mentions-text-wrapper a {
        color: #3DA8FF;
        text-decoration: underline;
        font-weight: 600;
    }
    .mentions-text-wrapper a:hover {
        color: #0A1A2F;
    }

    /* Listes */
    .mentions-text-wrapper ul {
        margin-bottom: 1.5rem;
        padding-left: 20px;
        color: #4B5563;
    }
    .mentions-text-wrapper li {
        margin-bottom: 0.5rem;
        font-size: 1.1rem;
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 1024px) {
        .mentions-legales-content {
            /* Marges Mobile Standards */
            padding-top: 140px; /* Header */
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 60px;
        }

        .arianne-flex {
            font-size: 0.8rem;
            margin-bottom: 40px;
        }

        .mentions-text-wrapper h1 {
            font-size: 2.2rem;
            margin-bottom: 2rem;
        }

        .mentions-text-wrapper h2 {
            font-size: 1.5rem;
            margin-top: 2rem;
        }

        .mentions-text-wrapper p {
            font-size: 1rem;
        }
    }
</style>