<?php 
/* --------------------------------------------------------------
   1. DÉFINITION DE LA RACINE SYSTÈME
   -------------------------------------------------------------- */
$base_path = dirname(__DIR__) . '/';

/* --------------------------------------------------------------
   2. INCLUSIONS CONFIG
   -------------------------------------------------------------- */
if (file_exists($base_path . 'config.php')) {
    require_once $base_path . 'config.php';
} else {
    die("Erreur critique : Le fichier config.php est introuvable à la racine.");
}

/* --------------------------------------------------------------
   3. VARIABLES D'URL
   -------------------------------------------------------------- */
$images_url = $root_url; 

/* --------------------------------------------------------------
   4. LOGIQUE DE LANGUE (DÉPLACÉE AVANT LE LOADER)
   -------------------------------------------------------------- */
$request_uri = $_SERVER['REQUEST_URI'];
$path_relative = str_replace('/Airtechnic-SEO/', '', $request_uri);
$path_relative = ltrim($path_relative, '/');

// Détection : si l'URL commence par "en/", on est en anglais, sinon français par défaut
$current_lang = (strpos($path_relative, 'en/') === 0) ? 'en' : 'fr';
$base_url = $root_url . $current_lang . '/';

// Calcul des liens de switch de langue
$path_clean = preg_replace('/^(fr|en)\//', '', $path_relative);
$switch_fr = $root_url . 'fr/' . $path_clean;
$switch_en = $root_url . 'en/' . $path_clean;

$header_logo_path = $images_url . 'uploads/Logo/logo.svg';

/* --------------------------------------------------------------
   5. INCLUSION DU LOADER (MAINTENANT IL CONNAÎT LA LANGUE)
   -------------------------------------------------------------- */
require_once $base_path . 'components/loader.php';

/* --------------------------------------------------------------
   6. DICTIONNAIRE DE TRADUCTION (HEADER)
   -------------------------------------------------------------- */
$lang_data = [
    'fr' => [
        'nav_products' => 'Nos Produits',
        'nav_projects' => 'Projets',
        'cta_contact'  => 'Nous contacter',
        'aria_expertises' => 'Ouvrir les expertises Airtechnic',
        'aria_projects' => 'Voir nos projets',
        
        // Menu 1: Ingénierie
        'menu_ing_title' => 'Ingénierie',
        'menu_ing_sub'   => 'Ingénierie gonflable',
        'ing_bureau'     => "Bureau d'étude",
        'ing_bureau_desc'=> 'Analyse sur-mesure',
        'ing_archi'      => 'Développements spécifiques – Drones & interfaces',
        'ing_archi_desc' => 'Structure optimisée',
        'ing_complex'    => 'Conception complexe',
        'ing_complex_desc'=> 'Solutions fiables',
        'ing_mesures'    => 'Mesures temps réel',
        'ing_mesures_desc'=> 'Données précises',
        'ing_link_all'   => "Découvrez nos solutions <strong>d'Ingénierie</strong>",

        // Menu 2: Hangar
        'menu_hangar_title' => 'Hangar gonflable',
        'menu_hangar_sub'   => 'Gonflage étanche ou permanent',
        'han_stock'      => 'Hangar gonflable stockage',
        'han_stock_desc' => 'Protection étanche',
        'han_secours'    => 'Hangar gonflable secours',
        'han_secours_desc'=> 'Déploiement rapide',
        'han_etanche'    => 'Hangar gonflable étanche',
        'han_etanche_desc'=> 'Étanchéité garantie',
        'han_perm'       => 'Hangar gonflable permanent',
        'han_perm_desc'  => 'Déploiement long terme',
        'han_link_all'   => "Découvrez nos solutions de <strong>Hangar</strong>",

        // Menu 3: Acoustique
        'menu_acou_title' => 'Acoustique',
        'menu_acou_sub'   => 'Protection de haut niveau',
        'acou_mur'        => 'Mur acoustique',
        'acou_mur_desc'   => 'Montage express',
        'acou_capot'      => 'Capotage',
        'acou_capot_desc' => 'Machine isolée',
        'acou_spec'       => 'Mur acoustique spécifique',
        'acou_spec_desc'  => 'Montage sur mesure',
        'acou_proj'       => 'Projet spécifique',
        'acou_proj_desc'  => 'Nos projets sur mesure',
        'acou_link_all'   => "Découvrez nos solutions <strong>Acoustiques</strong>",

        // Menu 4: Cibles
        'menu_cible_title'=> 'Cibles & Leurres',
        'menu_cible_sub'  => 'Ingénierie gonflable augmenté',
        'cible_char'      => 'Leurres chars',
        'cible_char_desc' => 'Simulation terrain',
        'cible_bat'       => 'Leurres bâtiments',
        'cible_bat_desc'  => 'Volumes crédibles',
        'cible_aug'       => 'Leurres augmenté',
        'cible_aug_desc'  => 'Simulation augmentée',
        'cible_train'     => 'Cibles',
        'cible_train_desc'=> "Cible d'entraînement",
        'cible_link_all'  => "Découvrez nos <strong>Cibles & Leurres</strong>",

        // Menu Projets (Images)
        'proj_recent_title' => 'Études de cas récentes',
        'proj_ing'        => 'Cas client Ingénierie',
        'proj_han'        => 'Cas client Hangar',
        'proj_acou'       => 'Cas client Acoustique',
        'proj_cible'      => 'Cas client Cible & Leurres',
        'proj_desc_before'=> 'Avant / Après',
        'proj_desc_safe'  => 'Stockage sûr',
        'proj_desc_iso'   => 'Isolation optimisée',
        'proj_desc_real'  => 'Réalisme poussé',
        'proj_link_all'   => 'Voir tous les projets',

        // Mobile specifics
        'mob_see_all'     => 'Voir tout',
        'mob_all_projects'=> 'Tous les projets'
    ],
    'en' => [
        'nav_products' => 'Our Products',
        'nav_projects' => 'Projects',
        'cta_contact'  => 'Contact Us',
        'aria_expertises' => 'Open Airtechnic expertises',
        'aria_projects' => 'See our projects',
        
        // Menu 1: Engineering
        'menu_ing_title' => 'Engineering',
        'menu_ing_sub'   => 'Inflatable engineering',
        'ing_bureau'     => "Design Office",
        'ing_bureau_desc'=> 'Custom analysis',
        'ing_archi'      => 'Custom Developments – Drones & Interfaces',
        'ing_archi_desc' => 'Optimized structure',
        'ing_complex'    => 'Complex Design',
        'ing_complex_desc'=> 'Reliable solutions',
        'ing_mesures'    => 'Real-time Measures',
        'ing_mesures_desc'=> 'Precise data',
        'ing_link_all'   => "Discover our <strong>Engineering</strong> solutions",

        // Menu 2: Hangar
        'menu_hangar_title' => 'Inflatable Hangar',
        'menu_hangar_sub'   => 'Airtight or permanent inflation',
        'han_stock'      => 'Storage Hangar',
        'han_stock_desc' => 'Airtight protection',
        'han_secours'    => 'Emergency Hangar',
        'han_secours_desc'=> 'Rapid deployment',
        'han_etanche'    => 'Airtight Hangar',
        'han_etanche_desc'=> 'Guaranteed airtightness',
        'han_perm'       => 'Permanent Hangar',
        'han_perm_desc'  => 'Long-term deployment',
        'han_link_all'   => "Discover our <strong>Hangar</strong> solutions",

        // Menu 3: Acoustics
        'menu_acou_title' => 'Acoustics',
        'menu_acou_sub'   => 'High-level protection',
        'acou_mur'        => 'Acoustic Wall',
        'acou_mur_desc'   => 'Express assembly',
        'acou_capot'      => 'Enclosure',
        'acou_capot_desc' => 'Isolated machine',
        'acou_spec'       => 'Specific Acoustic Wall',
        'acou_spec_desc'  => 'Custom assembly',
        'acou_proj'       => 'Specific Project',
        'acou_proj_desc'  => 'Custom projects',
        'acou_link_all'   => "Discover our <strong>Acoustic</strong> solutions",

        // Menu 4: Targets
        'menu_cible_title'=> 'Targets & Decoys',
        'menu_cible_sub'  => 'Augmented inflatable engineering',
        'cible_char'      => 'Tank Decoys',
        'cible_char_desc' => 'Field simulation',
        'cible_bat'       => 'Building Decoys',
        'cible_bat_desc'  => 'Credible volumes',
        'cible_aug'       => 'Augmented Decoys',
        'cible_aug_desc'  => 'Augmented simulation',
        'cible_train'     => 'Targets',
        'cible_train_desc'=> "Training target",
        'cible_link_all'  => "Discover our <strong>Targets & Decoys</strong>",

        // Menu Projects
        'proj_recent_title' => 'Recent Case Studies',
        'proj_ing'        => 'Engineering Case',
        'proj_han'        => 'Hangar Case',
        'proj_acou'       => 'Acoustic Case',
        'proj_cible'      => 'Target & Decoy Case',
        'proj_desc_before'=> 'Before / After',
        'proj_desc_safe'  => 'Safe storage',
        'proj_desc_iso'   => 'Optimized insulation',
        'proj_desc_real'  => 'High realism',
        'proj_link_all'   => 'View all projects',

        // Mobile
        'mob_see_all'     => 'See all',
        'mob_all_projects'=> 'All projects'
    ]
];

$t = $lang_data[$current_lang];
?>

<style>
/* ==========================================================================
   GLOBAL RESET & FONTS
   ========================================================================== */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
    font-family: 'Poppins', sans-serif !important;
}

:root {
    --color-dark: #0A1A2F;
    --color-light-blue: #3DA8FF;
    --color-grey: #9CA3AF;
    --color-light-grey: #F3F4F6;
    --color-white: #ffffff;
    --header-height: 6.944vw; 
}

body {
    background-color: var(--color-dark);
    overflow-x: hidden;
    padding-top: 140px;
}
.main-index, .main-all-cas, .main-all-cas, .main-all-real{ padding-top: 0px; }

/* ==========================================================================
   HEADER DESKTOP
   ========================================================================== */
header {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    background: var(--color-white);
    padding: 0 2.083vw;
    border-radius: 6.944vw;
    height: 6.944vw;
    position: fixed;
    top: 40px;
    left: 50%;
    transform: translateX(-50%);
    width: calc(100% - 260px);
    max-width: 2300px;
    z-index: 1000;
    box-shadow: 0 10px 30px rgba(10, 26, 47, 0.1);
    transition: all 0.3s ease;
}

.header-left {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
    width: 45%;
    gap: 3vw;
}

.header-left a svg, 
.header-left a img {
    width: 10.417vw;
    height: auto;
    display: block;
}

.header-left button {
    display: flex;
    align-items: center;
    gap: 0.556vw;
    background: none;
    border: none;
    color: var(--color-dark);
    font-size: 1.111vw;
    font-weight: 600;
    text-transform: uppercase;
    cursor: pointer;
    transition: color 0.3s ease;
}

.header-left button svg {
    width: 1.2vw;
    height: 1.2vw;
    stroke: var(--color-dark);
    transition: stroke 0.3s ease, transform 0.3s ease;
}

.header-left button:hover,
.header-left button.active { color: var(--color-light-blue); }

.header-left button:hover svg,
.header-left button.active svg {
    stroke: var(--color-light-blue);
    transform: rotate(180deg);
}

/* --- GROUPE DROITE (LANGUE + CTA) --- */
.header-right-group {
    display: flex;
    align-items: center;
    gap: 1vw; 
}

/* --- SWITCH LANGUE DESKTOP --- */
.lang-switcher {
    display: flex;
    align-items: center;
    background: var(--color-light-grey);
    padding: 0.3vw;
    border-radius: 2vw;
    border: 1px solid #eee;
}

.lang-link {
    padding: 0.4vw 0.8vw;
    border-radius: 2vw;
    color: var(--color-grey);
    font-size: 0.9vw;
    font-weight: 600;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

.lang-link:hover { color: var(--color-dark); }

.lang-link.active {
    background: var(--color-white);
    color: var(--color-dark);
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    cursor: default;
    pointer-events: none; /* Désactive le clic sur la langue active */
}

/* --- CTA Right --- */
.header-right {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #0A1A2F 50%, #0A1A2F 100%);
    background-size: 210% 100%;
    background-position: left;
    transition: background-position 0.6s ease;
    padding: 0.8vw 1.5vw;
    border-radius: 50px;
    color: #fff;
    font-size: 1.042vw;
    font-weight: 600;
    text-transform: uppercase;
    overflow: hidden;
    text-decoration: none;
    gap: 1vw;
    min-width: 220px;
}

.header-right:hover { background-position: right; }

.icon-contact {
    background: #fff;
    border-radius: 50%;
    width: 2vw;
    height: 2vw;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
    color: #0A1A2F;
}

.header-right:hover .icon-contact { background: #0A1A2F; color: #fff; }

.icon-contact svg {
    width: 1.2vw;
    height: 1.2vw;
    stroke: currentColor;
    stroke-width: 2;
    transition: transform 0.3s;
    display: block;
}

.header-right:hover .icon-contact svg { transform: rotate(45deg); }

/* ==========================================================================
   MEGA MENUS (Desktop)
   ========================================================================== */
.produits-menu-triangle {
    display: flex; z-index: 99; width: 30px; position: fixed; top: calc(40px + 6.944vw); left: 0; justify-content: center; pointer-events: none; opacity: 0; visibility: hidden; transform: translateY(-10px); transition: opacity .2s ease, transform .2s ease, left 0.3s ease; 
}
.produits-menu-triangle svg { width: 30px; height: 30px; }
.produits-menu-triangle svg polygon { fill: var(--color-light-blue); }
.produits-menu-triangle.is-open { opacity: 1; visibility: visible; transform: translateY(0); }

.produits-menu-1, .produits-menu-2 {
    background: var(--color-white); width: 60vw; max-width: 1400px; height: 27.78vw; border-radius: 10px; border: 1px solid var(--color-light-blue); z-index: 998; position: fixed; top: calc(40px + 6.944vw + 20px); left: 50%; transform: translateX(-50%) translateY(-20px); display: flex; opacity: 0; visibility: hidden; pointer-events: none; transition: opacity .25s ease, transform .25s ease, visibility 0s linear .25s; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.2);
}
.produits-menu-1.is-open, .produits-menu-2.is-open {
    opacity: 1; visibility: visible; pointer-events: auto; transform: translateX(-50%) translateY(0); transition: opacity .25s ease, transform .25s ease, visibility 0s;
}

.produits-menu-column { display: flex; flex-direction: column; background: var(--color-dark); color: var(--color-white); width: 30%; padding: 15px; gap: 10px; }
.produits-menu-item-base { display: flex; flex-direction: column; justify-content: center; border-radius: 5px; padding: 15px; border: 1px solid transparent; cursor: pointer; transition: all 0.3s ease; flex: 1; }
.produits-menu-item-base:hover, .produits-menu-item-base.active { border-color: var(--color-light-blue); background: rgba(61, 168, 255, 0.1); }
.produits-menu-item-base:hover .menu-title, .produits-menu-item-base.active .menu-title { color: var(--color-light-blue); }
.menu-header { display: flex; justify-content: space-between; align-items: center; }
.menu-title { font-size: 1.1vw; font-weight: 600; }
.menu-subtitle { font-size: 0.8vw; font-weight: 300; opacity: 0.8; margin-top: 5px; }
.menu-header svg { width: 20px; height: 20px; stroke: var(--color-white); }

.produits-menu-panel { display: none; flex-direction: column; width: 70%; padding: 30px; height: 100%; }
.produits-menu-panel.active { display: flex; animation: fadeInPanel 0.3s ease-out; }
@keyframes fadeInPanel { from { opacity: 0; transform: translateX(10px); } to { opacity: 1; transform: translateX(0); } }
.produits-menu-row { display: flex; flex-wrap: wrap; gap: 20px; height: 85%; align-content: flex-start; }
.produits-item { width: calc(50% - 10px); display: flex; flex-direction:row; min-height:33.33%; max-height:50%; align-items: center; gap: 15px; padding: 10px; border-radius: 8px; transition: background 0.2s; }
.produits-item:hover { background: #F3F4F6; }
.produits-item img, .produits-item svg { width: 40px; height: 40px; }
.produits-text h4 { color: var(--color-dark); font-size: 1vw; font-weight: 600; }
.produits-text p { color: var(--color-grey); font-size: 0.8vw; }
.produits-menu-footer-link { margin-top: auto; display: flex; justify-content: flex-end; align-items: center; gap: 5px; color: var(--color-dark); font-weight: 600; font-size: 1vw; transition: color 0.2s; }
.produits-menu-footer-link svg { width: 24px; height: 24px; stroke: var(--color-dark); }
.produits-menu-footer-link:hover { color: var(--color-light-blue); }
.produits-menu-footer-link:hover svg { stroke: var(--color-light-blue); }

.menu-2-layout { display: flex; width: 100%; height: 100%; }
.menu-2-image { width: 30%; padding: 15px; background: #f9fafb; }
.menu-2-image img { width: 100%; height: 100%; object-fit: cover; border-radius: 8px; }
.menu-2-list { width: 70%; padding: 30px; display: flex; flex-direction: column; }
.menu-2-list-link{ display: flex; flex-direction: row; justify-content:space-between; align-items:center; flex-wrap:wrap; width: 100%; height:100%; }

/* ==========================================================================
   MOBILE & TABLETTE
   ========================================================================== */
.burger { display: none; }
@media (max-width: 1024px) {
    header {
        position: fixed; top: 0; left: 0; width: 100%; max-width: none; transform: none;
        border-radius: 0; margin: 0; padding: 15px 20px; height: 70px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    body { padding-top: 70px; }
    .header-left { width: auto; }
    .header-left a svg, .header-left a img { width: 120px; height: auto; }
    
    .header-left button,
    .header-right-group,
    .produits-menu-triangle,
    .produits-menu-1,
    .produits-menu-2 { display: none !important; }

    .burger {
        display: flex; flex-direction: column; justify-content: center; align-items: flex-end;
        width: 30px; height: 30px; background: transparent; border: none; cursor: pointer; z-index: 2001;
    }
    .burger-bar { width: 24px; height: 2px; background-color: var(--color-dark); margin: 3px 0; transition: 0.3s; }
    .burger.is-open .burger-bar:nth-child(1) { transform: rotate(45deg) translate(5px, 6px); }
    .burger.is-open .burger-bar:nth-child(2) { opacity: 0; }
    .burger.is-open .burger-bar:nth-child(3) { transform: rotate(-45deg) translate(5px, -6px); }
}

/* ==========================================================================
   MOBILE NAV
   ========================================================================== */
.mobile-nav {
    position: fixed; inset: 0; background: var(--color-white); z-index: 2000;
    transform: translateX(100%); transition: transform .35s ease;
    display: flex; flex-direction: column; overflow-y: auto;
}
.mobile-nav.is-open { transform: translateX(0); }

.mobile-nav__header {
    display: flex; justify-content: space-between; align-items: center;
    padding: 15px 20px; height: 70px; border-bottom: 1px solid #eee;
}
.mobile-logo img { width: 120px; height: auto; }

.mobile-header-actions { display: flex; align-items: center; gap: 15px; }

/* SWITCH MOBILE */
.mobile-lang-switcher {
    display: flex; align-items: center; background: var(--color-light-grey); padding: 4px; border-radius: 30px; border: 1px solid #eee;
}
.mobile-lang-link {
    padding: 5px 12px; border-radius: 20px; color: var(--color-grey); font-size: 14px; font-weight: 600; text-transform: uppercase;
}
.mobile-lang-link.active {
    background: var(--color-white); color: var(--color-dark); box-shadow: 0 2px 5px rgba(0,0,0,0.05); pointer-events: none;
}

.mobile-close {
    background: none; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center;
    padding: 5px; color: var(--color-dark); transition: color 0.3s ease, transform 0.3s ease;
}
.mobile-close svg { width: 28px; height: 28px; stroke: currentColor; stroke-width: 1.5; }
.mobile-close:hover { color: var(--color-light-blue); transform: rotate(90deg); }

.mobile-nav__body { padding: 20px; display: flex; flex-direction: column; gap: 20px; }
.mobile-cta {
    display: flex; justify-content: center; align-items: center; background: var(--color-light-blue); color: var(--color-white);
    padding: 15px; border-radius: 50px; font-weight: 600; text-transform: uppercase; text-align: center;
}
.mobile-accordion { border: 1px solid #eee; border-radius: 8px; overflow: hidden; }
.mobile-accordion summary { display: flex; justify-content: space-between; padding: 15px; font-weight: 600; color: var(--color-dark); cursor: pointer; background: #f9fafb; }
.mobile-accordion summary svg { width: 20px; height: 20px; transition: transform 0.2s; }
.mobile-accordion[open] summary svg { transform: rotate(180deg); }
.mobile-accordion__content { padding: 15px; }

.mobile-cats { display: flex; gap: 10px; overflow-x: auto; padding-bottom: 10px; margin-bottom: 15px; }
.mobile-cat { white-space: nowrap; padding: 8px 16px; border-radius: 20px; border: 1px solid var(--color-grey); background: transparent; color: var(--color-grey); font-size: 14px; }
.mobile-cat.is-active { background: var(--color-dark); color: var(--color-white); border-color: var(--color-dark); }
.mobile-panel { display: none; }
.mobile-panel.is-visible { display: block; animation: fadeMobile 0.3s ease; }
@keyframes fadeMobile { from{ opacity: 0; } to{ opacity: 1; } }
.mobile-link { display: block; padding: 10px 0; color: var(--color-dark); border-bottom: 1px dashed #eee; }
.mobile-link strong { color: var(--color-light-blue); }

</style>

<script>
document.addEventListener('DOMContentLoaded', () => {

    /* DESKTOP MENU */
    const btnExpertises = document.querySelector('button[aria-label="<?= $t['aria_expertises'] ?>"]');
    const btnProjets    = document.querySelector('button[aria-label="<?= $t['aria_projects'] ?>"]');
    const menu1         = document.querySelector('.produits-menu-1');
    const menu2         = document.querySelector('.produits-menu-2');
    const triangle      = document.querySelector('.produits-menu-triangle');
    let hideTimer = null;

    function closeAllMenus() {
        if(menu1) menu1.classList.remove('is-open');
        if(menu2) menu2.classList.remove('is-open');
        if(triangle) triangle.classList.remove('is-open');
        if(btnExpertises) btnExpertises.classList.remove('active');
        if(btnProjets) btnProjets.classList.remove('active');
    }

    function moveTriangle(targetButton) {
        if (!targetButton || !triangle) return;
        const rect = targetButton.getBoundingClientRect();
        const buttonCenter = rect.left + (rect.width / 2);
        const triangleWidth = 30; 
        const leftPosition = buttonCenter - (triangleWidth / 2);
        triangle.style.left = `${leftPosition}px`;
    }

    function openMenu(menuType) {
        clearTimeout(hideTimer);
        closeAllMenus();
        
        if (menuType === 'expertises') {
            if(menu1) menu1.classList.add('is-open');
            if(triangle) { triangle.classList.add('is-open'); moveTriangle(btnExpertises); }
            if(btnExpertises) btnExpertises.classList.add('active');
        } else if (menuType === 'projets') {
            if(menu2) menu2.classList.add('is-open');
            if(triangle) { triangle.classList.add('is-open'); moveTriangle(btnProjets); }
            if(btnProjets) btnProjets.classList.add('active');
        }
    }

    if(btnExpertises) btnExpertises.addEventListener('mouseenter', () => openMenu('expertises'));
    if(btnProjets) btnProjets.addEventListener('mouseenter', () => openMenu('projets'));

    [menu1, menu2].forEach(menu => {
        if(menu) {
            menu.addEventListener('mouseenter', () => clearTimeout(hideTimer));
            menu.addEventListener('mouseleave', () => { hideTimer = setTimeout(closeAllMenus, 300); });
        }
    });

    const headerLeft = document.querySelector('.header-left');
    if(headerLeft) {
        headerLeft.addEventListener('mouseleave', (e) => {
            if(e.relatedTarget && (e.relatedTarget.closest('.produits-menu-1') || e.relatedTarget.closest('.produits-menu-2'))) return;
            hideTimer = setTimeout(closeAllMenus, 300);
        });
    }

    window.addEventListener('resize', () => {
        if(menu1 && menu1.classList.contains('is-open')) moveTriangle(btnExpertises);
        else if (menu2 && menu2.classList.contains('is-open')) moveTriangle(btnProjets);
    });

    /* TABS */
    const tabs = document.querySelectorAll('.produits-menu-item-base');
    const panels = document.querySelectorAll('.produits-menu-panel');

    tabs.forEach((tab, index) => {
        tab.addEventListener('mouseenter', () => {
            tabs.forEach(t => t.classList.remove('active'));
            panels.forEach(p => p.classList.remove('active'));
            tab.classList.add('active');
            const targetClass = `produits-menu-column-${index + 1}`;
            const targetPanel = document.querySelector(`.${targetClass}`);
            if(targetPanel) targetPanel.classList.add('active');
        });
    });

    /* MOBILE */
    const burger = document.querySelector('.burger');
    const mobileNav = document.getElementById('mobile-nav');
    const mobileClose = document.querySelector('.mobile-close');

    if(burger && mobileNav) {
        burger.addEventListener('click', () => {
            mobileNav.classList.add('is-open');
            burger.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        });
    }

    if(mobileClose) {
        mobileClose.addEventListener('click', () => {
            mobileNav.classList.remove('is-open');
            burger.classList.remove('is-open');
            document.body.style.overflow = '';
        });
    }

    const mCats = document.querySelectorAll('.mobile-cat');
    const mPanels = document.querySelectorAll('.mobile-panel');

    mCats.forEach(cat => {
        cat.addEventListener('click', () => {
            mCats.forEach(c => c.classList.remove('is-active'));
            cat.classList.add('is-active');
            const target = cat.getAttribute('data-target');
            mPanels.forEach(p => {
                p.classList.remove('is-visible');
                if(p.id === target.replace('#','')) { p.classList.add('is-visible'); }
            });
        });
    });
});
</script>

<!DOCTYPE html>
<html lang="<?= $current_lang ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<header>
  <div class="header-left">
    <a href="<?= $base_url ?>">
      <img src="<?= $header_logo_path ?>" alt="Airtechnic" />
    </a>
    
    <button aria-label="<?= $t['aria_expertises'] ?>" title="<?= $t['nav_products'] ?>">
      <span><?= $t['nav_products'] ?></span>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
    </button>
    
    <button aria-label="<?= $t['aria_projects'] ?>" title="<?= $t['nav_projects'] ?>">
      <span><?= $t['nav_projects'] ?></span>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
    </button>
  </div>

  <div class="header-right-group">
      <div class="lang-switcher">
          <a href="<?= $switch_fr ?>" class="lang-link <?= ($current_lang === 'fr') ? 'active' : '' ?>">FR</a>
          <a href="<?= $switch_en ?>" class="lang-link <?= ($current_lang === 'en') ? 'active' : '' ?>">EN</a>
      </div>

      <a href="<?= $base_url ?>contact/" class="header-right" aria-label="<?= $t['cta_contact'] ?>" title="<?= $t['cta_contact'] ?>">
        <div><?= $t['cta_contact'] ?></div>
        <div class="icon-contact">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
        </div>
      </a>
  </div>

  <button class="burger" aria-label="Ouvrir le menu">
    <span class="burger-bar"></span>
    <span class="burger-bar"></span>
    <span class="burger-bar"></span>
  </button>
</header>

<div class="produits-menu-triangle">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
    <polygon points="50,0 100,100 0,100"/>
  </svg>
</div>

<div class="produits-menu-1">
  <div class="produits-menu-column">
    <div class="produits-menu-item-base active">
      <div class="menu-header"><span class="menu-title"><?= $t['menu_ing_title'] ?></span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></div>
      <div class="menu-subtitle"><?= $t['menu_ing_sub'] ?></div>
    </div>
    <div class="produits-menu-item-base">
      <div class="menu-header"><span class="menu-title"><?= $t['menu_hangar_title'] ?></span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></div>
      <div class="menu-subtitle"><?= $t['menu_hangar_sub'] ?></div>
    </div>
    <div class="produits-menu-item-base">
      <div class="menu-header"><span class="menu-title"><?= $t['menu_acou_title'] ?></span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></div>
      <div class="menu-subtitle"><?= $t['menu_acou_sub'] ?></div>
    </div>
    <div class="produits-menu-item-base">
      <div class="menu-header"><span class="menu-title"><?= $t['menu_cible_title'] ?></span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></div>
      <div class="menu-subtitle"><?= $t['menu_cible_sub'] ?></div>
    </div>
  </div>

  <div class="produits-menu-panel produits-menu-column-1 active">
    <div class="produits-menu-row">
      <a href="<?= $base_url ?>ingenierie/bureau-etude/" class="produits-item"><div class="produits-text"><h4><?= $t['ing_bureau'] ?></h4><p><?= $t['ing_bureau_desc'] ?></p></div></a>
      <a href="<?= $base_url ?>ingenierie/developpements-specifiques–drones-&-interfaces/" class="produits-item"><div class="produits-text"><h4><?= $t['ing_archi'] ?></h4><p><?= $t['ing_archi_desc'] ?></p></div></a>
      <a href="<?= $base_url ?>ingenierie/conception-complexe/" class="produits-item"><div class="produits-text"><h4><?= $t['ing_complex'] ?></h4><p><?= $t['ing_complex_desc'] ?></p></div></a>
      <a href="<?= $base_url ?>ingenierie/mesures-temps-reel/" class="produits-item"><div class="produits-text"><h4><?= $t['ing_mesures'] ?></h4><p><?= $t['ing_mesures_desc'] ?></p></div></a>
    </div>
    <a class="produits-menu-footer-link" href="<?= $base_url ?>ingenierie/"><?= $t['ing_link_all'] ?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg></a>
  </div>

  <div class="produits-menu-panel produits-menu-column-2">
    <div class="produits-menu-row">
      <a href="<?= $base_url ?>hangar-gonflable/hangar-gonflable-stockage/" class="produits-item"><div class="produits-text"><h4><?= $t['han_stock'] ?></h4><p><?= $t['han_stock_desc'] ?></p></div></a>
      <a href="<?= $base_url ?>hangar-gonflable/hangar-gonflable-secours/" class="produits-item"><div class="produits-text"><h4><?= $t['han_secours'] ?></h4><p><?= $t['han_secours_desc'] ?></p></div></a>
      <a href="<?= $base_url ?>hangar-gonflable/hangar-gonflable-etanche/" class="produits-item"><div class="produits-text"><h4><?= $t['han_etanche'] ?></h4><p><?= $t['han_etanche_desc'] ?></p></div></a>
      <a href="<?= $base_url ?>hangar-gonflable/hangar-gonflable-permanent/" class="produits-item"><div class="produits-text"><h4><?= $t['han_perm'] ?></h4><p><?= $t['han_perm_desc'] ?></p></div></a>
    </div>
    <a class="produits-menu-footer-link" href="<?= $base_url ?>hangar-gonflable/"><?= $t['han_link_all'] ?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg></a>
  </div>

  <div class="produits-menu-panel produits-menu-column-3">
    <div class="produits-menu-row">
      <a href="<?= $base_url ?>acoustique/mur-acoustique/" class="produits-item"><div class="produits-text"><h4><?= $t['acou_mur'] ?></h4><p><?= $t['acou_mur_desc'] ?></p></div></a>
      <a href="<?= $base_url ?>acoustique/capotage/" class="produits-item"><div class="produits-text"><h4><?= $t['acou_capot'] ?></h4><p><?= $t['acou_capot_desc'] ?></p></div></a>
      <a href="<?= $base_url ?>acoustique/mur-acoustique-specifique/" class="produits-item"><div class="produits-text"><h4><?= $t['acou_spec'] ?></h4><p><?= $t['acou_spec_desc'] ?></p></div></a>
      <a href="<?= $base_url ?>acoustique/projet-specifique/" class="produits-item"><div class="produits-text"><h4><?= $t['acou_proj'] ?></h4><p><?= $t['acou_proj_desc'] ?></p></div></a>
    </div>
    <a class="produits-menu-footer-link" href="<?= $base_url ?>acoustique/"><?= $t['acou_link_all'] ?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg></a>
  </div>

  <div class="produits-menu-panel produits-menu-column-4">
    <div class="produits-menu-row">
      <a href="<?= $base_url ?>cibles-leurres/leurres-chars/" class="produits-item"><div class="produits-text"><h4><?= $t['cible_char'] ?></h4><p><?= $t['cible_char_desc'] ?></p></div></a>
      <a href="<?= $base_url ?>cibles-leurres/leurres-batiments/" class="produits-item"><div class="produits-text"><h4><?= $t['cible_bat'] ?></h4><p><?= $t['cible_bat_desc'] ?></p></div></a>
      <a href="<?= $base_url ?>cibles-leurres/leurres-augmente/" class="produits-item"><div class="produits-text"><h4><?= $t['cible_aug'] ?></h4><p><?= $t['cible_aug_desc'] ?></p></div></a>
      <a href="<?= $base_url ?>cibles-leurres/cibles/" class="produits-item"><div class="produits-text"><h4><?= $t['cible_train'] ?></h4><p><?= $t['cible_train_desc'] ?></p></div></a>
    </div>
    <a class="produits-menu-footer-link" href="<?= $base_url ?>cibles-leurres/"><?= $t['cible_link_all'] ?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg></a>
  </div>
</div>

<div class="produits-menu-2">
    <div class="menu-2-layout">
        <div class="menu-2-image">
             <img src="<?= $images_url ?>uploads/etude-de-cas.webp" alt="Projet Récent">
        </div>
        <div class="menu-2-list">
             <div style="font-weight:600; color:var(--color-dark); margin-bottom:15px; border-bottom:1px solid #eee; padding-bottom:10px;"><?= $t['proj_recent_title'] ?></div>
             <div class="menu-2-list-link">
                <a href="<?= $base_url ?>cas-clients-ingenierie/" class="produits-item"><div class="produits-text"><h4><?= $t['proj_ing'] ?></h4><p><?= $t['proj_desc_before'] ?></p></div></a>
                <a href="<?= $base_url ?>cas-clients-hangar/" class="produits-item"><div class="produits-text"><h4><?= $t['proj_han'] ?></h4><p><?= $t['proj_desc_safe'] ?></p></div></a>
                <a href="<?= $base_url ?>cas-clients-acoustique/" class="produits-item"><div class="produits-text"><h4><?= $t['proj_acou'] ?></h4><p><?= $t['proj_desc_iso'] ?></p></div></a>
                <a href="<?= $base_url ?>cas-clients-cible-leurres/" class="produits-item"><div class="produits-text"><h4><?= $t['proj_cible'] ?></h4><p><?= $t['proj_desc_real'] ?></p></div></a>
                <a class="produits-menu-footer-link" href="<?= $base_url ?>nos-realisations/" style="width:100%; display:flex; justify-content:flex-end;"><?= $t['proj_link_all'] ?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg></a>
             </div>
        </div>
    </div>
</div>

<nav id="mobile-nav" class="mobile-nav" aria-hidden="true">
  <div class="mobile-nav__header">
    <a href="<?= $base_url ?>" class="mobile-logo">
      <img src="<?= $header_logo_path ?>" alt="Airtechnic">
    </a>
    
    <div class="mobile-header-actions">
        <div class="mobile-lang-switcher">
          <a href="<?= $switch_fr ?>" class="mobile-lang-link <?= ($current_lang === 'fr') ? 'active' : '' ?>">FR</a>
          <a href="<?= $switch_en ?>" class="mobile-lang-link <?= ($current_lang === 'en') ? 'active' : '' ?>">EN</a>
        </div>

        <button class="mobile-close" aria-label="Fermer le menu">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6L6 18M6 6l12 12"></path>
          </svg>
        </button>
    </div>
  </div>

  <div class="mobile-nav__body">
    <a href="<?= $base_url ?>contact/" class="mobile-cta"><?= $t['cta_contact'] ?></a>

    <details class="mobile-accordion" open>
      <summary><span><?= $t['nav_products'] ?></span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></summary>
      <div class="mobile-accordion__content">
        <div class="mobile-cats">
          <button class="mobile-cat is-active" data-target="#mcol-1"><?= $t['menu_ing_title'] ?></button>
          <button class="mobile-cat" data-target="#mcol-2"><?= $t['menu_hangar_title'] ?></button>
          <button class="mobile-cat" data-target="#mcol-3"><?= $t['menu_acou_title'] ?></button>
          <button class="mobile-cat" data-target="#mcol-4"><?= $t['menu_cible_title'] ?></button>
        </div>
        
        <div class="mobile-panels">
           <div class="mobile-panel is-visible" id="mcol-1">
               <a href="<?= $base_url ?>ingenierie/bureau-etude/" class="mobile-link"><?= $t['ing_bureau'] ?></a>
               <a href="<?= $base_url ?>ingenierie/developpements-specifiques–drones-&-interfaces/" class="mobile-link"><?= $t['ing_archi'] ?></a>
               <a href="<?= $base_url ?>ingenierie/conception-complexe/" class="mobile-link"><?= $t['ing_complex'] ?></a>
               <a href="<?= $base_url ?>ingenierie/mesures-temps-reel/" class="mobile-link"><?= $t['ing_mesures'] ?></a>
               <a href="<?= $base_url ?>ingenierie/" class="mobile-link"><strong><?= $t['mob_see_all'] ?> <?= $t['menu_ing_title'] ?></strong></a>
           </div>
           <div class="mobile-panel" id="mcol-2">
               <a href="<?= $base_url ?>hangar-gonflable/hangar-gonflable-stockage/" class="mobile-link"><?= $t['han_stock'] ?></a>
               <a href="<?= $base_url ?>hangar-gonflable/hangar-gonflable-secours/" class="mobile-link"><?= $t['han_secours'] ?></a>
               <a href="<?= $base_url ?>hangar-gonflable/hangar-gonflable-etanche/" class="mobile-link"><?= $t['han_etanche'] ?></a>
               <a href="<?= $base_url ?>hangar-gonflable/hangar-gonflable-permanent/" class="mobile-link"><?= $t['han_perm'] ?></a>
               <a href="<?= $base_url ?>hangar-gonflable/" class="mobile-link"><strong><?= $t['mob_see_all'] ?> <?= $t['menu_hangar_title'] ?></strong></a>
           </div>
           <div class="mobile-panel" id="mcol-3">
                <a href="<?= $base_url ?>acoustique/mur-acoustique/" class="mobile-link"><?= $t['acou_mur'] ?></a>
                <a href="<?= $base_url ?>acoustique/capotage/" class="mobile-link"><?= $t['acou_capot'] ?></a>
                <a href="<?= $base_url ?>acoustique/mur-acoustique-specifique/" class="mobile-link"><?= $t['acou_spec'] ?></a>
                <a href="<?= $base_url ?>acoustique/projet-specifique/" class="mobile-link"><?= $t['acou_proj'] ?></a>
                <a href="<?= $base_url ?>acoustique/" class="mobile-link"><strong><?= $t['mob_see_all'] ?> <?= $t['menu_acou_title'] ?></strong></a>
           </div>
           <div class="mobile-panel" id="mcol-4">
                <a href="<?= $base_url ?>cibles-leurres/leurres-chars/" class="mobile-link"><?= $t['cible_char'] ?></a>
                <a href="<?= $base_url ?>cibles-leurres/leurres-batiments/" class="mobile-link"><?= $t['cible_bat'] ?></a>
                <a href="<?= $base_url ?>cibles-leurres/leurres-augmente/" class="mobile-link"><?= $t['cible_aug'] ?></a>
                <a href="<?= $base_url ?>cibles-leurres/cibles/" class="mobile-link"><?= $t['cible_train'] ?></a>
                <a href="<?= $base_url ?>cibles-leurres/" class="mobile-link"><strong><?= $t['mob_see_all'] ?> <?= $t['menu_cible_title'] ?></strong></a>
           </div>
        </div>
      </div>
    </details>

    <details class="mobile-accordion">
      <summary><span><?= $t['nav_projects'] ?></span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></summary>
      <div class="mobile-accordion__content">
         <a href="<?= $base_url ?>cas-clients-ingenierie/" class="mobile-link"><?= $t['proj_ing'] ?></a>
         <a href="<?= $base_url ?>cas-clients-hangar/" class="mobile-link"><?= $t['proj_han'] ?></a>
         <a href="<?= $base_url ?>cas-clients-acoustique/" class="mobile-link"><?= $t['proj_acou'] ?></a>
         <a href="<?= $base_url ?>cas-clients-cible-leurres/" class="mobile-link"><?= $t['proj_cible'] ?></a>
         <a href="<?= $base_url ?>nos-realisations/" class="mobile-link"><strong><?= $t['mob_all_projects'] ?></strong></a>
      </div>
    </details>
  </div>
</nav>