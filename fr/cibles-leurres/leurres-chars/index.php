<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflasys sous cat</title>
    <meta name="description" content="">
</head>

<body>
    <?php require_once '../../../components/header.php'; ?>

    <?php
    /* ----------------- PARTIE 1 ----------------- */
    $hero_title     = "Leurres de chars gonflables";
    $hero_text      = "Les leurres de chars gonflables et véhicules militaires simulés constituent un outil stratégique de déception, d’entraînement et de protection indirecte. Ces reproductions gonflables permettent de simuler des blindés, véhicules tactiques et plateformes militaires avec une grande crédibilité visuelle et une mise en œuvre rapide sur le terrain.";

    $hero_btn_label = "Nous contacter";
    $hero_btn_link  = "contact";
    $hero_img_src   = "uploads/cibles-leurres/leurres-chars/leurres_chars_gonflable.webp";
    $hero_img_alt   = "Leurre de char gonflable et véhicule militaire simulé";

    require_once $base_path . "components/categories/sous-categories/part-1.php";


    /* ----------------- PARTIE 2 ----------------- */
    $concevoir_product_title = "Comprendre les leurres de chars gonflables";

    // Intro : je l'ai corrigée (pas de virgule après </strong> et phrases séparées)
    $concevoir_product_title_paragraphe =
        "<strong>Un leurre de char gonflable est une reproduction militaire simulée conçue pour imiter l’apparence, les volumes et la silhouette d’un véhicule blindé réel.</strong> " .
        "Ces structures peuvent représenter des chars de combat, véhicules blindés de transport, plateformes d’artillerie ou véhicules tactiques, dans des contextes de défense, d’entraînement, de simulation opérationnelle ou d’exercices institutionnels. " .
        "Ils sont utilisés pour la déception tactique, la saturation des capacités d’observation adverses, l’entraînement des forces, la préparation de scénarios et la protection indirecte des moyens réels.";

    $concevoir_product_img_src = "uploads/cibles-leurres/leurres-chars/leurres_chars_gonflable_2.webp";
    $concevoir_product_img_alt = "Leurre de char gonflable : volumes et silhouette";

    $concevoir_product_steps = [
        [
            "title"      => "Silhouette réaliste de véhicules blindés",
            "paragraphs" => [
                "<strong>La crédibilité géométrique est déterminante.</strong> Les leurres de chars gonflables reproduisent les proportions, volumes et lignes caractéristiques des blindés afin d’assurer une lecture cohérente depuis le sol, les airs ou l’imagerie à distance."
            ]
        ],
        [
            "title"      => "Déception et simulation opérationnelle",
            "paragraphs" => [
                "<strong>Ces leurres participent à la déception tactique.</strong> Ils permettent de créer des concentrations fictives de véhicules, de simuler des unités blindées ou de détourner l’attention de cibles réelles lors d’exercices ou d’opérations."
            ]
        ],
        [
            "title"      => "Déploiement rapide sur le terrain",
            "paragraphs" => [
                "<strong>Le gonflable offre une réactivité immédiate.</strong> Transportables et rapides à installer, les leurres de véhicules militaires peuvent être déployés, déplacés ou retirés en fonction de l’évolution du scénario."
            ]
        ],
        [
            "title"      => "Logistique allégée & robustesse",
            "paragraphs" => [
                "<strong>Les structures sont conçues pour un usage terrain.</strong> Résistance mécanique, réparabilité, stabilité et faible empreinte logistique garantissent une exploitation durable lors d’exercices répétés ou de déploiements temporaires."
            ]
        ],
    ];

    require_once $base_path . "components/categories/sous-categories/part-2.php";


    /* ----------------- PARTIE 3 ----------------- */
    // Ton part-3 actuelle est un placeholder "logo". Je l’ai remplacée par ton contenu "Pourquoi utiliser..."
    // (sinon tu répètes la même info que part-2).
    $part2_title = "Pourquoi utiliser des leurres de chars gonflables ?";

    $part2_texts = [
        "Les leurres de véhicules blindés gonflables permettent de <strong>simuler une force militaire crédible sans engager de moyens réels</strong>. Ils sont utilisés pour l’entraînement, la planification, la démonstration de scénarios et la protection indirecte.",
        "Ils répondent à des besoins concrets : <strong>exercices de manœuvre, entraînement interarmées, simulation de déploiement, saturation des capacités d’observation, protection d’unités réelles</strong> ou préparation de scénarios complexes.",
        "<strong>Une intégration efficace commence par le cadrage :</strong> type de véhicule simulé, distances d’observation, durée de déploiement, conditions environnementales, contraintes de transport et niveau de réalisme attendu.",
        "Ces solutions s’inscrivent dans une logique long terme : <strong>répétabilité des exercices, adaptabilité des scénarios, maintenance simplifiée</strong> et capacité à décliner plusieurs modèles de véhicules au sein d’une même gamme."
    ];

    // J’adapte les blocs aux 4 idées “silhouette / déception / déploiement / logistique”
    $part2_blocks = [
        [
            "img"   => "uploads/cibles-leurres/leurres-chars/leurres_chars_gonflable_3.webp",
            "title" => "Simuler une force crédible",
            "text"  => "Créer une présence visuelle cohérente permet de <strong>représenter une unité blindée</strong> sans mobiliser de véhicules réels."
        ],
        [
            "img"   => "uploads/cibles-leurres/leurres-chars/leurres_chars_gonflable_4.webp",
            "title" => "Saturer l’observation adverse",
            "text"  => "<strong>Multiplier les points d’intérêt</strong> pour détourner l’attention, complexifier l’analyse et protéger les moyens réels."
        ],
        [
            "img"   => "uploads/cibles-leurres/leurres-chars/leurres_chars_gonflable_5.webp",
            "title" => "Structurer l’entraînement",
            "text"  => "Idéal pour des <strong>scénarios répétés</strong>, de la préparation opérationnelle et des exercices institutionnels."
        ],
        [
            "img"   => "uploads/cibles-leurres/leurres-chars/leurres_chars_gonflable_6.webp",
            "title" => "Déployer / déplacer rapidement",
            "text"  => "Une solution <strong>transportable</strong> et simple à mettre en œuvre, adaptée aux évolutions de terrain et de scénario."
        ],
    ];

    require_once $base_path . "components/categories/sous-categories/part-3.php";


    /* ----------------- PARTIE 4 ----------------- */
/*    
$cat_logos_title = "Ils nous font confiance pour des solutions de simulation militaire";
$cat_logos_list  = [
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg",
    "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg", "uploads/Logo/clients/2630401.svg"
];

   require_once $base_path . 'components/categories/sous-categories/part-4.php';

*/
    /* ----------------- PARTIE 5 ----------------- */
    // Ton part-5 actuelle parle d’“erreurs logo” (placeholder). Je la remplace par “Notre approche…”
    $concevoir_product_2_title = "Notre approche pour les leurres de véhicules militaires";

    $concevoir_product_2_left_text =
        "Nous concevons des leurres de véhicules militaires avec une approche <strong>rigoureuse, technique et orientée usage terrain</strong>. " .
        "L’objectif : obtenir une solution crédible, robuste et exploitable, tout en maîtrisant la logistique de déploiement et la répétabilité des exercices.";

    $concevoir_product_2_btn_label = "Nous contacter";
    $concevoir_product_2_btn_link  = "contact";

    $concevoir_product_2_steps = [
        [
            "title"      => "1. Analyse des véhicules à simuler",
            "paragraphs" => [
                "Identifier le type de char ou de véhicule militaire à reproduire, son rôle opérationnel, ses dimensions clés et les conditions d’observation.",
                "Définir le niveau de fidélité requis et les contraintes de déploiement."
            ]
        ],
        [
            "title"      => "2. Conception des volumes et structures",
            "paragraphs" => [
                "Intégrer les volumes caractéristiques, la stabilité, les points d’ancrage et les matériaux adaptés aux conditions terrain afin d’obtenir une reproduction crédible et robuste.",
                "Prendre en compte le transport, le gonflage, la sécurité d’exploitation et la maintenance dès la conception."
            ]
        ],
        [
            "title"      => "3. Prototypage et validation terrain",
            "paragraphs" => [
                "Tester le rendu visuel, la stabilité, la résistance et la facilité de déploiement.",
                "Ajuster avant production en série ou déclinaisons multi-modèles."
            ]
        ],
    ];

    require_once $base_path . "components/categories/sous-categories/part-5.php";


    /* ----------------- PARTIE 6 ----------------- */
    // Ton part-6 est “réalisations” dynamique : je laisse tel quel (pas de texte fourni)
    /*
    $part8_title   = "Quelques unes de nos réalisations";
    $part8_pattern = "uploads/Picto/pattern-1.webp";

    if (!function_exists('getRealisationDataForSubCat')) {
        function getRealisationDataForSubCat($filePath) {
            $content = file_get_contents($filePath);
            $data = ['title' => 'Projet', 'img_path' => 'uploads/default.webp'];
            if (preg_match('/\$titre_projet\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) $data['title'] = $matches[1];
            if (preg_match('/\$image_mockup\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/s', $content, $matches)) $data['img_path'] = $matches[1];
            elseif (preg_match('/\$image_mockup\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) $data['img_path'] = $matches[1];
            return $data;
        }
    }

    $part8_projects = [];
    $target_dir = '/../../nos-realisations';

    $dirs = glob($target_dir . '/*', GLOB_ONLYDIR);
    if ($dirs) {
        $dirs = array_reverse($dirs);
        $count = 0;
        foreach ($dirs as $dir) {
            if ($count >= 2) break;
            $indexFile = $dir . '/index.php';
            if (file_exists($indexFile)) {
                $folderName = basename($dir);
                $data = getRealisationDataForSubCat($indexFile);
                $fullImgUrl = (strpos($data['img_path'], 'http') === 0) ? $data['img_path'] : base_url . $data['img_path'];

                $part8_projects[] = [
                    "href"  => base_url . "nos-realisations/" . $folderName . "/",
                    "img"   => $fullImgUrl,
                    "title" => $data['title']
                ];
                $count++;
            }
        }
    }

    $part8_all_link  = "nos-realisations";
    $part8_all_label = "Tout voir";

    require_once $base_path . "components/categories/sous-categories/part-6.php";
*/

    /* ----------------- PARTIE 7 ----------------- */
    // Ton part-7 actuelle parle d’accompagnement “logo” (placeholder). Je la remplace par “Expertise + Délais & budgets”.
    $accompagner_solution_title = "Expertise requise pour les leurres de chars gonflables";

    $accompagner_solution_title_paragraphe =
        "<strong>La conception de leurres de véhicules militaires exige une combinaison d’ingénierie, de connaissance opérationnelle et de maîtrise des structures gonflables.</strong>";

    $accompagner_solution_btn_label = "Nous contacter";
    $accompagner_solution_btn_link  = "contact";

    $accompagner_solution_steps = [
        [
            "title"      => "Maîtrise des volumes et du réalisme",
            "paragraphs" => [
                "Reproduire des volumes complexes, des proportions crédibles et des lignes de lecture cohérentes selon les distances et angles d’observation."
            ]
        ],
        [
            "title"      => "Conception orientée terrain",
            "paragraphs" => [
                "Stabilité, résistance mécanique, ancrages, réparabilité et matériaux adaptés aux conditions réelles d’exploitation."
            ]
        ],
        [
            "title"      => "Pilotage structuré et tests",
            "paragraphs" => [
                "Assurer la cohérence entre conception, fabrication, essais terrain et exploitation, tout en permettant l’évolution des modèles."
            ]
        ],
        [
            "title"      => "Délais & budgets maîtrisés",
            "paragraphs" => [
                "Le coût et les délais varient selon le type de véhicule simulé, le niveau de détail et le volume de production (étude, conception, prototype, essais terrain, production)."
            ]
        ],
    ];

    require_once $base_path . "components/categories/sous-categories/part-7.php";


    /* ----------------- PARTIE 8 ----------------- */
    /*
   // TITRE DU BLOC
   $part10_title = "Ils ont aimé travailler avec nous";

   // PATTERN (image décorative)
   $part10_pattern = "uploads/Picto/pattern-1.webp"; 

   // AVIS
   $avis = [
       [
           "name" => "Jean-Marc P.",
           "role" => "Directeur Technique - Grand Port Maritime",
           "text" => "L'automatisation de la pression nous a permis de sécuriser le stockage vrac face aux vents marins violents. Installation exemplaire.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Sylvie D.",
           "role" => "Resp. Maintenance - Site Seveso",
           "text" => "La redondance des systèmes Airtechnic répond parfaitement à nos exigences de sécurité pour le confinement de zone.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Marc L.",
           "role" => "Architecte Structure",
           "text" => "Une collaboration fluide avec le bureau d'études pour intégrer les contraintes esthétiques et techniques.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Thomas W.",
           "role" => "Chef de projet événementiel",
           "text" => "Rapidité de déploiement impressionnante et fiabilité totale du système de pilotage durant tout l'événement.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ],
       [
           "name" => "Cabinet Ingénierie X",
           "role" => "Partenaire BTP",
           "text" => "Nous prescrivons systématiquement leurs solutions pour les ouvrages temporaires de grande portée.",
           "logo" => "uploads/Logo/clients/Chanel-logo.webp"
       ]
   ];

   require_once $base_path . 'components/categories/sous-categories/part-8.php';
*/
    /* ----------------- PARTIE 9 ----------------- */
    // Ton CTA était “agence web” : je l’ai adapté au contexte Inflasys.
    $part11_subtitle = $part11_subtitle ?? "Contactez nos équipes";
    $part11_title    = $part11_title ?? "Projet de leurres de chars ou véhicules militaires ?";

    $part11_text     = $part11_text ?? "Vous avez un besoin en <strong>leurres de chars gonflables</strong>, véhicules militaires simulés ou plateformes tactiques ? Présentez votre contexte et vos objectifs, nous vous proposerons une solution <strong>adaptée, structurée et opérationnelle</strong>.";

    require_once $base_path . "components/categories/sous-categories/part-9.php";
    ?>

    <?php require_once '../../../components/footer.php'; ?>
</body>
</html>