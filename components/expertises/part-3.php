<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
   $bien_choisir_title = "Bien choisir son agence Webflow";
   $bien_choisir_img = "uploads/default.webp";
   
   $bien_choisir_paragraphs = [
      "Choisir de réaliser son site avec Webflow est une excellente décision. Il faut ensuite déterminer dans quel contexte va être réalisé le développement du site.",
      "Voici les étapes nécessaires pour façonner un site sur mesure et performant :" 
   ];
   

   $bien_choisir_liste = [
       "Avoir une identité d'entreprise et une <strong>charte graphique</strong>",
       "<strong>Déterminer les cibles</strong> du site et le positionnement",
       "Travailler sur l’<strong>expérience utilisateur souhaitée</strong>",
       "<strong>Concevoir le wireframe</strong> (squelette de la maquette, organisation et arborescence du site). Cette étape donne souvent lieu à des tests utilisateurs.",
       "<strong>Créer la maquette digitale</strong>. Cela revient à habiller le wireframe retenu et faire en sorte d’avoir un site esthétique, dont l’interface utilisateur (UI) est soignée.",
       "<strong>Assurer la bonne transmission de la maquette au(x) développeur(s) </strong>afin que leur travail soit fidèle à la maquette réalisée. Un designer qui optimise ses maquettes pour le développement ou qui est habitué à travailler avec les développeurs peut vivement faciliter leur travail.",
       "<strong>Vérifier que le site développé soit accessible et responsive.</strong> Cela signifie qu’il doit fonctionner sur tous les types d’écrans (mobiles, tablettes, ordinateurs...) et pour tous les utilisateurs.",
       "<strong>Auditer la capacité du site à performer sur les moteurs de recherche</strong>. Cela revient à analyser dans quelle mesure le site est optimisé pour le référencement naturel (SEO)."
   ];
   require_once $base_path . 'components/expertises/part-3.php';
   ?>
-------------------------------------------------------------- */
?>

<section class="bien-choisir-produit">
    <div class="bien-choisir-produit-title-img">
        <h2><?= htmlspecialchars($bien_choisir_title, ENT_QUOTES, 'UTF-8') ?></h2>
        <img src="<?php echo $images_url ?><?= htmlspecialchars($bien_choisir_img, ENT_QUOTES, 'UTF-8') ?>" alt="">
    </div>

    <div class="bien-choisir-produit-content">
        <?php foreach ($bien_choisir_paragraphs as $p): ?>
            <!-- On garde nl2br et htmlspecialchars pour les paragraphes si pas de demande spécifique, 
                 ou on peut aussi mettre strip_tags ici si besoin. Je laisse standard pour l'instant sauf demande. -->
            <p><?= nl2br(htmlspecialchars($p, ENT_QUOTES, 'UTF-8')) ?></p>
        <?php endforeach; ?>

        <ul>
            <?php foreach ($bien_choisir_liste as $li): ?>
                <!-- Modification ICI : utilisation de strip_tags pour autoriser le HTML sécurisé dans la liste -->
                <li><?= strip_tags($li, '<strong><b><br><em><u>') ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<style>
/* ==========================================================================
   CSS EXPERTISES PART-3
   ========================================================================== */
.bien-choisir-produit {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    background-color: #ffffff;
    width: 100%;
    
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    gap: 5.55vw;
}

.bien-choisir-produit-title-img {
    display: flex;
    flex-direction: column;
    width: 45%;
    gap: 2vw;
}

.bien-choisir-produit-title-img h2 {
    font-size: 2.5vw;
    font-weight: 700;
    color: #0A1A2F;
    line-height: 1.1;
    margin: 0;
}

.bien-choisir-produit-title-img img {
    width: 100%;
    height: auto;
    border-radius: 4px;
    box-shadow: 0 10px 30px rgba(10, 26, 47, 0.1);
}

.bien-choisir-produit-content {
    display: flex;
    flex-direction: column;
    width: 50%;
    color: #4B5563;
    font-size: 1.1vw;
    line-height: 1.6;
    justify-content: center;
}

.bien-choisir-produit-content p {
    margin-bottom: 1.5vw;
}

.bien-choisir-produit-content ul {
    list-style: none;
    padding: 0;
    margin: 1vw 0 0 0;
}

.bien-choisir-produit-content li {
    position: relative;
    padding-left: 1.5vw;
    margin-bottom: 0.8vw;
    color: #0A1A2F;
    font-weight: 500;
}

/* AJOUT : Style pour strong/b dans la liste */
/* On utilise le bleu clair pour contraster avec le texte qui est déjà bleu foncé */
.bien-choisir-produit-content li strong,
.bien-choisir-produit-content li b {
    color: #3DA8FF; 
    font-weight: 700;
}

.bien-choisir-produit-content li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0.6em;
    width: 6px;
    height: 6px;
    background-color: #3DA8FF;
    border-radius: 1px;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .bien-choisir-produit { flex-direction: column; padding: 60px 20px; gap: 40px; }
    .bien-choisir-produit-title-img, .bien-choisir-produit-content { width: 100%; }
    
    .bien-choisir-produit-title-img h2 { font-size: 28px; }
    .bien-choisir-produit-content { font-size: 16px; }
    
    .bien-choisir-produit-content li { padding-left: 20px; }
}
</style>