<?php
/**
 * Category
 */
get_header();
// Get options
$category_page_options = [
    'wep_category_page_banner'                => '',
    'wep_category_page_heading'               => 'Chuyên mục',
    'wep_category_page_number_per_page'       => 6,
    'wep_category_page_columns'               => 3,
    'wep_category_page_show'                  => 'all',
];
// Get options --------------
$global_options = WEP_Option_Model::get_field_values($category_page_options, true);
extract($global_options);
/** Get results ----------------
 * @var $totalResults
 * @var $keyword
 * @var $posts
 */
$news_result = WEP_Section_Model::categoryPosts($wep_category_page_number_per_page);
extract($news_result);
/* Banner ---------------*/
if (trim($wep_category_page_banner) != '') {
    $section_data = [
        'id' => 'wep_banner',
        'class' => 'wep_banner',
        'css' => 'height:200px',
        'image' => $wep_category_page_banner,
        'align' => 'start',
        'heading' => $category_name,
        'heading_css' => '',
        'description' => sprintf('Có <strong>%s</strong> tin trong chuyên mục <strong>"%s"</strong>', $totalResults, $category_name),
    ];
    get_template_part('sections/banner', 'photo', $section_data);
}
/* News Grid --------------- */
$post_list = array();
foreach ($posts as $news) {
    extract($news);
    $post_list[] = array(
        'date' => $date,
        'image' => $thumbnailUrl,
        'title' => $title,
        'text' => $excerpt,
        'permalink' => $permalink
    );
}
$section_data = [
    'id' => 'wep_news',
    'class' => 'wep_news_grid',
    'columns' => $wep_category_page_columns,
    'pagination' => $pagination,
    'news_list' => $post_list
];
get_template_part('sections/section', 'news-grid', $section_data);
/* Footer */
get_footer();
