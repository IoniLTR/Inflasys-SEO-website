<?php
/* --------------------------------------------------------------
   VARIABLES À DÉFINIR DANS LA PAGE
   --------------------------------------------------------------
    <?php
   <?php
   // 1. Définition du contenu de l'article (Blocs)
   $article_blocks = [
       ['type' => 'p', 'content' => "AHrefs est également un outil incontournable du SEO. Il est notamment considéré comme un outil de référence pour l'analyse de backlinks."],
       ['type' => 'h2', 'content' => "II. AHrefs"],
       ['type' => 'img', 'src' => "uploads/default.webp", 'alt' => "Logo Ahrefs pixelisé"],
       ['type' => 'p', 'content' => "L'outil propose une analyse concurrentielle très poussée."],
       ['type' => 'p', 'content' => "Il permet de voir les mots-clés sur lesquels vos concurrents se positionnent."]
   ];

   // 2. Variables Sidebar
   $share_title = "Partager cet article :";
   $cta_text = "Parler avec nos experts";
   $cta_subtext = "Contactez nos équipes.";
   $cta_img_pattern = "uploads/pattern-1.webp";
   $link_expert = "contact";

   // 3. Variables Auteur (Signature)
   $author_img = "uploads/default.webp";
   $author_firstname = "Arthur";
   $author_lastname = "Aubert";
   $author_role = "Responsable SEO";
   $article_date_update = "28/1/2025";
   $author_contact_link = "contact";
   
   require_once $base_path . 'components/nos-articles/articles/part-2.php';
   ?>
-------------------------------------------------------------- */
?>

<style>
    /* ==========================================================================
       CSS ARTICLE PART-2
       ========================================================================== */
    .art-body {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 60px;
        background-color: #ffffff;
        
        /* --- MARGES STANDARDS CATEGORIE --- */
        padding: 6.94vw 130px;
        width: 100%;
        max-width: 2560px;
        margin: 0 auto;
        
        color: #0A1A2F;
        font-family: 'Poppins', sans-serif;
    }

    /* --- CONTENU PRINCIPAL --- */
    .art-main {
        flex: 1;
        max-width: 900px;
        margin: 0 auto;
    }

    .art-main h2 {
        font-size: 2.5vw; 
        font-weight: 700;
        margin-top: 50px;
        margin-bottom: 25px;
        color: #0A1A2F;
        line-height: 1.2;
        border-left: 4px solid #3DA8FF;
        padding-left: 20px;
    }
    
    .art-main p {
        font-size: 1.1vw;
        line-height: 1.8;
        color: #4B5563;
        margin-bottom: 20px;
    }

    .art-main img {
        width: 100%; 
        height: auto;
        border-radius: 4px;
        box-shadow: 0 10px 30px rgba(10, 26, 47, 0.1);
    }

    /* --- AUTEUR --- */
    .art-author {
        margin-top: 60px;
        padding-top: 40px;
        border-top: 1px solid #E5E7EB;
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .art-author-img {
        width: 80px; height: 80px;
        flex-shrink: 0;
        border-radius: 50%;
        overflow: hidden;
        border: 2px solid #3DA8FF;
    }

    .art-author-img img { width: 100%; height: 100%; object-fit: cover; }

    .art-author-info { display: flex; flex-direction: column; gap: 5px; font-size: 0.95rem; }
    .art-author-name strong { color: #0A1A2F; }
    .art-author-role { color: #3DA8FF; font-weight: 600; text-transform: uppercase; }
    
    /* Lien Contact Auteur */
    .art-author-contact-link {
        color: #0A1A2F;
        text-decoration: none;
        font-weight: 700;
        border-bottom: 2px solid #3DA8FF;
        transition: color 0.3s, border-color 0.3s;
    }
    .art-author-contact-link:hover { color: #3DA8FF; border-color: #0A1A2F; }

    /* --- SIDEBAR --- */
    .art-sidebar {
        width: 350px;
        flex-shrink: 0;
        position: sticky;
        top: 150px;
    }

    .art-sidebar-title { 
        font-size: 1.1vw; font-weight: 700; margin-bottom: 20px; color: #0A1A2F; text-transform: uppercase;
    }
    
    .art-socials { display: flex; gap: 15px; margin-bottom: 50px; align-items: center; }
    
    /* Boutons sociaux */
    .art-social-btn {
        background: none;
        border: none;
        padding: 0;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        color: #9CA3AF; /* Gris par défaut */
    }
    
    .art-social-btn svg { width: 24px; height: 24px; fill: currentColor; transition: 0.3s; stroke: none; }
    /* Cas particulier pour l'icone chaine qui est souvent en stroke */
    .art-social-btn.icon-stroke svg { fill: none; stroke: currentColor; stroke-width: 2; }

    .art-social-btn:hover { color: #3DA8FF; transform: translateY(-3px); }
    
    /* Tooltip pour "Copié !" */
    .copy-tooltip {
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        background-color: #0A1A2F;
        color: white;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 12px;
        opacity: 0;
        visibility: hidden;
        transition: 0.3s;
        pointer-events: none;
        white-space: nowrap;
        margin-bottom: 8px;
    }
    .art-social-btn.copied .copy-tooltip { opacity: 1; visibility: visible; }
    
    /* CTA BOUTON */
    .art-sidebar-btn {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #0A1A2F 50%, #0A1A2F 100%);
        background-size: 210% 100%;
        background-position: left;
        transition: background-position 0.6s ease;
        padding: 1vw 1.5vw;
        border-radius: 50px;
        color: #fff;
        font-size: 1.042vw;
        font-weight: 600;
        text-transform: uppercase;
        text-decoration: none;
        gap: 1vw;
        width: 100%;
    }

    .art-sidebar-btn:hover { background-position: right; }

    .art-icon-sidebar {
        background: #fff;
        border-radius: 50%;
        width: 2vw; height: 2vw;
        display: flex; align-items: center; justify-content: center;
        transition: 0.3s; color: #0A1A2F;
    }

    .art-sidebar-btn:hover .art-icon-sidebar { background: #0A1A2F; color: #fff; }
    
    .art-icon-sidebar svg {
        width: 1.2vw; height: 1.2vw; stroke: currentColor; stroke-width: 2; transition: transform 0.3s;
    }
    .art-sidebar-btn:hover .art-icon-sidebar svg { transform: rotate(45deg); }


    /* --- RESPONSIVE --- */
    @media (max-width: 1024px) {
        .art-body {
            flex-direction: column;
            padding: 60px 20px; 
            gap: 60px;
        }

        .art-main { width: 100%; }
        .art-main h2 { font-size: 28px; }
        .art-main p { font-size: 16px; }

        .art-sidebar {
            width: 100%; position: static;
            display: flex; flex-direction: column-reverse;
            gap: 40px; border-top: 1px solid #E5E7EB; padding-top: 40px;
        }
        
        .art-sidebar-btn { font-size: 14px; padding: 12px 24px; justify-content: center; }
        .art-icon-sidebar { width: 30px; height: 30px; }
        .art-icon-sidebar svg { width: 18px; height: 18px; }
        .art-sidebar-title { font-size: 16px; }
    }
</style>

<section class="art-body">
    
    <div class="art-main">
        <?php foreach ($article_blocks as $block): ?>
            <?php if ($block['type'] === 'p'): ?>
                <p><?php echo $block['content']; ?></p>
            <?php elseif ($block['type'] === 'h2'): ?>
                <h2><?php echo $block['content']; ?></h2>
            <?php elseif ($block['type'] === 'img'): ?>
                <img src="<?php echo $images_url ?><?php echo htmlspecialchars($block['src']); ?>" alt="<?php echo isset($block['alt']) ? htmlspecialchars($block['alt']) : 'Illustration'; ?>">
            <?php endif; ?>
        <?php endforeach; ?>

        <div class="art-author">
            <div class="art-author-img">
                <img src="<?php echo $images_url ?><?php echo htmlspecialchars($author_img); ?>" loading="lazy" alt="<?php echo htmlspecialchars($author_firstname); ?>">
            </div>
            
            <div class="art-author-info">
                <div class="art-author-name">
                    Article rédigé par <strong><?php echo htmlspecialchars($author_firstname . ' ' . $author_lastname); ?></strong>
                </div>
                <div class="art-author-role"><?php echo htmlspecialchars($author_role); ?></div>
                
                <div style="margin-top:5px;">
                    Une question ? <a href="<?php echo htmlspecialchars($author_contact_link); ?>" class="art-author-contact-link">Contacter l'auteur</a>
                </div>

                <div style="font-size:0.85rem; color:#9CA3AF; margin-top:5px; font-style:italic;">
                    Mis à jour le : <?php echo htmlspecialchars($article_date_update); ?>
                </div>
            </div>
        </div>
    </div>

    <aside class="art-sidebar">
        
        <div>
            <div class="art-sidebar-title"><?php echo htmlspecialchars($share_title); ?></div>
            <div class="art-socials">
                
                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>" target="_blank" class="art-social-btn" aria-label="Partager sur Twitter">
                    <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>" target="_blank" class="art-social-btn" aria-label="Partager sur Facebook">
                    <svg viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                </a>

                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>" target="_blank" class="art-social-btn" aria-label="Partager sur LinkedIn">
                    <svg viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>

                <button id="btnCopyLink" class="art-social-btn icon-stroke" aria-label="Copier le lien">
                    <span class="copy-tooltip">Lien copié !</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                    </svg>
                </button>

            </div>
        </div>

        <a href="<?php echo $base_url ?><?php echo htmlspecialchars($link_expert); ?>" class="art-sidebar-btn">
            <div><?php echo htmlspecialchars($cta_text); ?></div>
            
            <div class="art-icon-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="7" y1="17" x2="17" y2="7"></line>
                    <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
            </div>
        </a>

    </aside>

</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const btnCopy = document.getElementById('btnCopyLink');
    
    if(btnCopy) {
        btnCopy.addEventListener('click', () => {
            const currentUrl = window.location.href;
            
            navigator.clipboard.writeText(currentUrl).then(() => {
                // Feedback visuel
                btnCopy.classList.add('copied');
                
                // Retirer le feedback après 2 secondes
                setTimeout(() => {
                    btnCopy.classList.remove('copied');
                }, 2000);
            }).catch(err => {
                console.error('Erreur lors de la copie :', err);
                // Fallback manuel si besoin (pas toujours nécessaire sur navigateurs modernes)
                alert("Impossible de copier automatiquement. Voici le lien : " + currentUrl);
            });
        });
    }
});
</script>