<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content="">
</head>

<body>
    <?php require_once '../../components/header.php'; ?>

<?php 
   $cat_hero_title     = $cat_hero_title ?? "";
   $cat_hero_text      = $cat_hero_text ?? "";
   $cat_hero_btn_label = $cat_hero_btn_label ?? "";
   $cat_hero_btn_link  = $cat_hero_btn_link ??  "";
   $cat_hero_img_src   = $cat_hero_img_src ?? "";
   $cat_hero_img_alt   = $cat_hero_img_alt ?? "";
   require_once $base_path . 'components/categories/part-1.php';
   ?>

<?php
$part2_title = $part2_title ?? "";

$part2_texts = $part2_texts ?? [
    "",
    "",
    ""
];

$part2_blocks = $part2_blocks ?? [
    [
        "img"  => "",
        "title"=> "",
        "text" => ""
    ],
    [
        "img"  => "",
        "title"=> "",
        "text" => ""
    ],
    [
        "img"  => "",
        "title"=> "",
        "text" => ""
    ],
    [
        "img"  => "",
        "title"=> "",
        "text" => ""
    ],
];
   require_once $base_path . 'components/categories/part-2.php';
   ?>
<?php /*
$cat_logos_title = $cat_logos_title ?? "";
$cat_logos_list  = $cat_logos_list ?? [
    "",
    "",
    "",
    ""
];

   require_once $base_path . 'components/categories/part-3.php';
   */ ?>
<?php
$part4_title = $part4_title ?? "";
$part4_btn_label = $part4_btn_label ?? "";
$part4_btn_link  = $part4_btn_link ?? "";
$part4_paragraphs = $part4_paragraphs ?? [
    "",
    "",
    "",
    ""
];
   require_once $base_path . 'components/categories/part-4.php';
   ?>
<?php
$work_title = $work_title ?? "";
$work_img_src = $work_img_src ?? "";
$work_img_alt = $work_img_alt ?? "";

$work_steps = $work_steps ?? [
    [
        "number" => "1",
        "title" => "",
        "paragraphs" => [
            "",
            ""
        ]
    ],
    [
        "number" => "2",
        "title" => "",
        "paragraphs" => [
            "",
            ""
        ]
    ],
    [
        "number" => "3",
        "title" => "",
        "paragraphs" => [
            "",
            ""
        ]
    ]
];
   require_once $base_path . 'components/categories/part-5.php';
   ?>
<?php
$part6_title = $part6_title ?? "";
$part6_intro_strong = $part6_intro_strong ?? "";
$part6_paragraphs = $part6_paragraphs ?? [
    "",
    ""
];
   require_once $base_path . 'components/categories/part-6.php';
   ?>
<?php
$part7_title = $part7_title ?? "";
$part7_intro_strong = $part7_intro_strong ?? "";
$part7_paragraphs = $part7_paragraphs ?? [
    "",
    ""
];
   require_once $base_path . 'components/categories/part-7.php';
   ?>
<?php /*
$part8_title = $part8_title ?? "";
$part8_pattern = $part8_pattern ?? "";

// --- DYNAMIC LOGIC: RETRIEVAL OF THE LAST 2 PROJECTS ---

if (!function_exists('getRealisationDataForCat')) {
   function getRealisationDataForCat($filePath) {
       $content = file_get_contents($filePath);
       $data = ['title' => '', 'img_path' => ''];
       if (preg_match('/\$titre_projet\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) $data['title'] = $matches[1];
       if (preg_match('/\$image_mockup\s*=\s*\$base_url\s*\.\s*["\'](.*?)["\'];/s', $content, $matches)) $data['img_path'] = $matches[1];
       elseif (preg_match('/\$image_mockup\s*=\s*["\'](.*?)["\'];/s', $content, $matches)) $data['img_path'] = $matches[1];
       return $data;
   }
}

$part8_projects = [];
$target_dir = $base_path . 'nos-realisations'; // Relative path
$dirs = glob($target_dir . '/*', GLOB_ONLYDIR);
$dirs = array_reverse($dirs); // Most recent first

$count = 0;
foreach ($dirs as $dir) {
   if ($count >= 2) break;
   $indexFile = $dir . '/index.php';
   if (file_exists($indexFile)) {
       $folderName = basename($dir);
       $data = getRealisationDataForCat($indexFile);
       $fullImgUrl = (strpos($data['img_path'], 'http') === 0) ? $data['img_path'] : $base_url . $data['img_path'];

       $part8_projects[] = [
           "href"  => $base_url . "nos-realisations/" . $folderName . "/",
           "img"   => $fullImgUrl,
           "title" => $data['title']
       ];
       $count++;
   }
}

$part8_all_link = $part8_all_link ?? "";
require_once $base_path . 'components/categories/part-8.php';
*/
?>
<?php
$why_title = $why_title ?? "";
$why_paragraph = $why_paragraph ?? "";
$why_btn_label = $why_btn_label ?? "";
$why_btn_link  = $why_btn_link ?? "";

$why_cards = $why_cards ?? [
    ["text" => "", "img" => ""],
    ["text" => "", "img" => ""],
    ["text" => "", "img" => ""],
    ["text" => "", "img" => ""]
];
   require_once $base_path . 'components/categories/part-9.php';
   ?>
<?php  /*
$cat_reviews_title = $cat_reviews_title ?? "";

// EXACTLY 5 TESTIMONIALS 
$cat_reviews = $cat_reviews ?? [
    ["name" => "", "job" => "", "text" => "", "logo" => ""],
    ["name" => "", "job" => "", "text" => "", "logo" => ""],
    ["name" => "", "job" => "", "text" => "", "logo" => ""],
    ["name" => "", "job" => "", "text" => "", "logo" => ""],
    ["name" => "", "job" => "", "text" => "", "logo" => ""]
];
   require_once $base_path . 'components/categories/part-10.php';
   */ ?>
<?php
// Default variables
$part11_subtitle = $part11_subtitle ?? "";
$part11_title    = $part11_title ?? "";
$part11_text     = $part11_text ?? "";

   require_once $base_path . 'components/categories/part-11.php';
   ?>

<?php require_once '../../components/footer.php'; ?>
</body>
</html>