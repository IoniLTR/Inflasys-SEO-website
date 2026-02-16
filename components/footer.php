<?php 
// Variables de contact
$phone_general = "01 85 09 94 20";
$email_contact = "lmarcilly@inflasys.com";

// On s'assure que $current_lang existe, sinon on met 'fr' par défaut
if (!isset($current_lang)) { $current_lang = 'fr'; }

$footer_trans = [
    'fr' => [
        'tagline'      => 'Ingénierie et gonflables <span>augmentés</span>',
        'legal'        => 'Mentions légales',
        'sitemap'      => 'Plan du site',
        'col_experts'  => 'Expertises',
        'link_ing'     => 'Ingénierie & Études',
        'link_struct'  => 'Structures Gonflables',
        'link_acou'    => 'Solutions Acoustiques',
        'link_cible'   => 'Cibles & Leurres',
        'col_contact'  => 'Nous Contacter',
        'lbl_siege'    => 'Siège & Acoustique :',
        'lbl_atelier'  => 'Atelier Gonflable :',
        'col_explore'  => 'Explorer',
        'link_real'    => 'Nos Réalisations',
        'link_cases_1'   => 'Cas client Ingénierie',
        'link_cases_2'   => 'Cas client Hangar',
        'link_cases_3'   => 'Cas client Acoustique',
        'link_cases_4'   => 'Cas client Cible & Leurres',
        'link_blog'    => 'Blog',
        'btn_skills'   => 'Compétences techniques',
        'skill_1'      => "Bureau d'étude acoustique",
        'skill_2'      => "Conception tunnel gonflable",
        'skill_3'      => "Hangar de stockage temporaire",
        'skill_4'      => "Tente de décontamination",
        'alt_logo'     => "Airtechnic - Ingénierie et Gonflables"
    ],
    'en' => [
        'tagline'      => 'Engineering and <span>augmented</span> inflatables',
        'legal'        => 'Legal Notice',
        'sitemap'      => 'Sitemap',
        'col_experts'  => 'Expertise',
        'link_ing'     => 'Engineering & Studies',
        'link_struct'  => 'Inflatable Structures',
        'link_acou'    => 'Acoustic Solutions',
        'link_cible'   => 'Targets & Decoys',
        'col_contact'  => 'Contact Us',
        'lbl_siege'    => 'HQ & Acoustics:',
        'lbl_atelier'  => 'Inflatable Workshop:',
        'col_explore'  => 'Explore',
        'link_real'    => 'Our Achievements',
        'link_cases_1'   => 'Engineering Case Study',
        'link_cases_2'   => 'Hangar case study',
        'link_cases_3'   => 'Acoustics case study',
        'link_cases_4'   => 'Case Study Targets & Decoys',
        'link_blog'    => 'Blog',
        'btn_skills'   => 'Technical Skills',
        'skill_1'      => "Acoustic Design Office",
        'skill_2'      => "Inflatable tunnel design",
        'skill_3'      => "Temporary storage hangar",
        'skill_4'      => "Decontamination tent",
        'alt_logo'     => "Airtechnic - Engineering and Inflatables"
    ]
];

$tf = $footer_trans[$current_lang];
?>

<style>
    /* ========================================= */
    /* ============  FOOTER STYLES  ============ */
    /* ========================================= */
    
    footer {
        background-color: var(--color-dark, #0A1A2F);
        padding: 4vw 2.083vw 2vw;
        color: #fff;
        margin-top: auto;
        border-top: 1px solid rgba(61, 168, 255, 0.1); /* Ligne subtile tech */
        position: relative;
        z-index: 10;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: 1.5fr 1fr 1fr 1fr;
        gap: 2vw;
        padding-bottom: 3vw;
        border-bottom: 1px solid rgba(255,255,255,0.05);
    }

    /* Titres des colonnes */
    .footer-col h3 {
        font-size: 1.11vw; /* ~16px desktop */
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 1.5vw;
        color: #fff;
        letter-spacing: 0.05em;
    }

    /* Colonne principale (Tagline) */
    .footer-col-main h3 {
        font-size: 2.2vw;
        line-height: 1.2;
        margin-bottom: 1vw;
        color: #fff;
        text-transform: none;
        letter-spacing: -0.02em;
    }
    .footer-col-main h3 span {
        color: var(--color-light-blue, #3DA8FF);
    }

    /* Liens */
    .footer-links {
        display: flex;
        flex-direction: column;
        gap: 0.8vw;
    }

    .footer-links a, 
    .footer-links div {
        color: var(--color-grey, #9CA3AF);
        font-size: 0.97vw; /* ~14px */
        text-decoration: none;
        transition: all 0.3s ease;
        font-weight: 400;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .footer-links a:hover {
        color: var(--color-light-blue, #3DA8FF);
        transform: translateX(5px);
    }

    /* Mentions légales */
    .footer-credits {
        margin-top: 2vw;
        display: flex;
        gap: 1.5vw;
        font-size: 0.8vw;
    }
    .footer-credits a {
        color: #586375 !important;
        text-decoration: none;
        transition: color 0.3s;
    }
    .footer-credits a:hover {
        color: #fff !important;
    }

    /* Groupes de contact */
    .contact-group {
        margin-bottom: 1.5vw;
    }
    .contact-label {
        font-weight: 600;
        color: #fff;
        margin-bottom: 0.3vw;
        display: block;
        font-size: 0.9vw;
    }
    .contact-group a {
        color: var(--color-grey, #9CA3AF);
    }
    .contact-group a:hover {
        color: #fff;
    }

    /* Accordéon Compétences */
    .competence-btn {
        cursor: pointer;
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        gap: 8px;
        color: #fff !important;
        font-weight: 600 !important;
        margin-top: 1vw;
    }
    .competence-btn svg {
        width: 14px;
        height: 14px;
        transition: transform 0.3s ease;
        stroke: var(--color-light-blue, #3DA8FF);
    }
    .competence-btn.active svg {
        transform: rotate(90deg);
    }

    .footer-experts {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, opacity 0.4s ease;
        opacity: 0;
        padding-left: 15px;
        border-left: 2px solid rgba(61, 168, 255, 0.2);
        margin-left: 6px;
        margin-top: 5px;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    .footer-experts.is-open {
        max-height: 500px;
        opacity: 1;
        margin-top: 10px;
        padding-bottom: 10px;
    }
    .footer-experts a {
        font-size: 0.85vw;
    }

    /* Bas de footer (Logo) */
    .footer-bottom {
        padding-top: 2vw;
        display: flex;
        justify-content: center;
        opacity: 0.6;
        transition: opacity 0.3s;
    }
    .footer-bottom:hover {
        opacity: 1;
    }
    .footer-bottom img {
        height: 3vw;
        /* Force le logo en blanc via filtre CSS */
        filter: brightness(0) invert(1); 
    }

    /* ========================================= */
    /* ============ RESPONSIVE ================= */
    /* ========================================= */

    /* TABLETTE (425px - 1024px) */
    @media screen and (max-width: 1024px) {
        footer { padding: 60px 40px 30px; }
        
        .footer-grid {
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .footer-col h3 { font-size: 16px; margin-bottom: 20px; }
        .footer-col-main h3 { font-size: 32px; }
        
        .footer-links { gap: 15px; }
        .footer-links a, .footer-links div { font-size: 15px; }
        
        .contact-label { font-size: 16px; }
        
        .footer-credits { font-size: 13px; margin-top: 30px; }
        .footer-experts a { font-size: 14px; }
        
        .footer-bottom { padding-top: 40px; }
        .footer-bottom img { height: 40px; }
    }

    /* MOBILE (320px - 425px) */
    @media screen and (max-width: 425px) {
        footer { padding: 40px 20px 30px; }

        .footer-grid {
            grid-template-columns: 1fr;
            gap: 40px;
            padding-bottom: 30px;
        }
        
        .footer-col-main h3 { font-size: 28px; }
        .footer-col h3 { font-size: 18px; color: var(--color-light-blue, #3DA8FF); }
        
        .footer-links a { 
            padding: 5px 0; 
            border-bottom: 1px dashed rgba(255,255,255,0.1);
            width: 100%;
        }
        .footer-links a:last-child { border-bottom: none; }
        
        .competence-btn { margin-top: 20px; }
        
        .footer-bottom img { height: 35px; }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Logique Accordéon "Compétences"
        const btn = document.querySelector('.competence-btn');
        const list = document.querySelector('.footer-experts');
        
        if(btn && list) {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const isOpen = list.classList.contains('is-open');
                
                if (isOpen) {
                    list.classList.remove('is-open');
                    btn.classList.remove('active');
                    btn.setAttribute('aria-expanded', 'false');
                } else {
                    list.classList.add('is-open');
                    btn.classList.add('active');
                    btn.setAttribute('aria-expanded', 'true');
                }
            });
        }
    });
</script>

<footer>
    <div class="footer-grid">
        <div class="footer-col footer-col-main">
            <h3><?= $tf['tagline'] ?></h3>
            <div class="footer-credits">
                <a href="<?= $base_url ?>mentions-legales/"><?= $tf['legal'] ?></a>
                <a href="<?= $base_url ?>plan-du-site/"><?= $tf['sitemap'] ?></a>
            </div>
        </div>

        <div class="footer-col">
            <h3><?= $tf['col_experts'] ?></h3>
            <div class="footer-links">
                <a href="<?= $base_url ?>ingenierie/"><?= $tf['link_ing'] ?></a>
                <a href="<?= $base_url ?>hangar-gonflable/"><?= $tf['link_struct'] ?></a>
                <a href="<?= $base_url ?>acoustique/"><?= $tf['link_acou'] ?></a>
                <a href="<?= $base_url ?>cibles-leurres/"><?= $tf['link_cible'] ?></a>
            </div>
        </div>

        <div class="footer-col">
            <h3><?= $tf['col_contact'] ?></h3>
            <div class="footer-links">
                <div class="contact-group">
                    <span class="contact-label"><?= $tf['lbl_siege'] ?></span>
                    <a href="tel:<?php echo str_replace(' ', '', $phone_general); ?>"><?php echo $phone_general; ?></a>
                    <a href="mailto:<?php echo $email_contact; ?>"><?php echo $email_contact; ?></a>
                </div>
            </div>
        </div>

        <div class="footer-col">
            <h3><?= $tf['col_explore'] ?></h3>
            <div class="footer-links">
                <a href="<?= $base_url ?>nos-realisations/"><?= $tf['link_real'] ?></a>
                <a href="<?= $base_url ?>cas-clients-hangar"><?= $tf['link_cases_1'] ?></a>
                <a href="<?= $base_url ?>cas-clients-ingenierie"><?= $tf['link_cases_2'] ?></a>
                <a href="<?= $base_url ?>cas-clients-acoustique"><?= $tf['link_cases_3'] ?></a>
                <a href="<?= $base_url ?>cas-clients-cible-leurres"><?= $tf['link_cases_4'] ?></a>
                <a href="<?= $base_url ?>nos-articles/"><?= $tf['link_blog'] ?></a>
                
                <div class="competence-btn" role="button" aria-expanded="false" tabindex="0">
                    <?= $tf['btn_skills'] ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </div>
                
                <nav class="footer-experts">
                    <a href="<?= $base_url ?>expertises/"><?= $tf['skill_1'] ?></a>
                    <a href="<?= $base_url ?>expertises/"><?= $tf['skill_2'] ?></a>
                    <a href="<?= $base_url ?>expertises/"><?= $tf['skill_3'] ?></a>
                    <a href="<?= $base_url ?>expertises/"><?= $tf['skill_4'] ?></a>
                </nav>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <a href="<?= $base_url ?>">
            <img src="<?php echo $images_url?>uploads/Logo/logo.svg" alt="<?= $tf['alt_logo'] ?>">
        </a>
    </div>
</footer>