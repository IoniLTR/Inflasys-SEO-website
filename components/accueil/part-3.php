<?php
/* --- VARIABLES ---
<?php
$expertises = [
    [
        "title" => "Ingénierie gonflables",
        "desc"  => "Inflasys conçoit des structures gonflables industrielles sur mesure grâce à un bureau d’études spécialisé en architecture gonflable. Chaque projet intègre calculs techniques, conception avancée et solutions adaptées aux environnements industriels complexes.",
        "img"   => "uploads/default.webp"
    ],
    [
        "title" => "Gonflables industrielles et chantiers",
        "desc"  => "Nous développons des structures gonflables pour les chantiers, tunnels, zones de maintenance et sites logistiques. Hangars, abris et tentes gonflables assurent protection, sécurité et rapidité de déploiement sur le terrain.",
        "img"   => "uploads/default.webp"
    ],
    [
        "title" => "Gonflables acoustiques",
        "desc"  => "Inflasys propose des solutions gonflables acoustiques pour la réduction des nuisances sonores industrielles et urbaines. Murs anti-bruit et capotages gonflables permettent de limiter efficacement les émissions sonores.",
        "img"   => "uploads/default.webp"
    ],
    [
        "title" => "Leurres gonflables militaires",
        "desc"  => "Pour la défense, Inflasys conçoit des leurres gonflables militaires à haute fidélité visuelle et thermique. Chars et infrastructures factices reproduisent les signatures infrarouges réelles pour l’entraînement et la dissimulation.",
        "img"   => "uploads/default.webp"
    ]
];
 require_once $base_path . 'components/accueil/part-3.php'; ?>
*/
?>



<style>
.index-3 {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #0A1A2F;
    width: 100%;
    /* Alignement Header */
    padding: 6.94vw 130px; 
    max-width: 2560px;
    margin: 0 auto;
}

.content-index-3 {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 100%;
    gap: 2vw;
}

.content-article-index-3 {
    position: relative;
    display: flex;
    flex-direction: column;
    width: calc(50% - 1vw); 
    margin-bottom: 4vw;
    text-decoration: none; /* car c'est un lien */
}

.content-article-img-index-3 {
    display: flex;
    justify-content: flex-end;
    width: 100%;
    position: relative;
}

.content-article-img-index-3 img {
    height: 25vw;
    width: 85%;
    object-fit: cover;
    border-radius: 4px;
    filter: grayscale(20%);
    transition: filter 0.3s;
}

.content-article-index-3:hover .content-article-img-index-3 img {
    filter: grayscale(0%);
}

.content-text-index-3 {
    position: absolute;
    left: 0;
    bottom: -5%; 
    width: 60%;
    background-color: #ffffff;
    color: #0A1A2F;
    padding: 2vw;
    z-index: 11;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    border-left: 4px solid #3DA8FF;
    transition: transform 0.3s;
}

.content-article-index-3:hover .content-text-index-3 {
    transform: translateY(-10px);
}

.content-text-index-3 h2 {
    font-size: 1.8vw;
    font-weight: 700;
    margin-bottom: 1vw;
    text-transform: uppercase;
    color: #0A1A2F;
}

.content-text-index-3 p {
    font-size: 0.9vw;
    line-height: 1.6;
    color: #4B5563;
}

.content-deco-index-3 {
    position: absolute;
    top: -10px;
    right: -10px;
    width: 40px;
    height: 40px;
    border-top: 2px solid #3DA8FF;
    border-right: 2px solid #3DA8FF;
    z-index: 12;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .index-3 { padding: 60px 20px; }
    .content-index-3 { flex-direction: column; gap: 60px; }
    .content-article-index-3 { width: 100%; margin-bottom: 0; }
    .content-article-img-index-3 img { width: 100%; height: 300px; }
    .content-text-index-3 { width: 90%; margin: -40px auto 0; position: relative; bottom: auto; left: auto; padding: 25px; }
    .content-text-index-3 h2 { font-size: 22px; }
    .content-text-index-3 p { font-size: 14px; }
}
</style>

<section class="index-3">
    <div class="content-index-3">
        <?php foreach($expertises as $exp): ?>
            <div class="content-article-index-3">
                <div class="content-article-img-index-3">
                    <img src="<?php echo $images_url?><?php echo $exp['img']; ?>" alt="<?php echo $exp['title']; ?>">
                    <div class="content-deco-index-3"></div>
                </div>
                <div class="content-text-index-3">
                    <h2><?php echo $exp['title']; ?></h2>
                    <p><?php echo $exp['desc']; ?></p>         
                </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>