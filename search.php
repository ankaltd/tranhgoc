<?php

/**
 * Search Result
 */

// Header
get_header();

// Get options
$search_page_options = [
    'wep_search_page_banner'                => '',
    'wep_search_page_heading'               => 'Tìm kiếm',
    'wep_search_page_number_per_page'       => 6,
    'wep_search_page_columns'               => 3,
    'wep_search_page_show'                  => 'all',
];

// Get options --------------
$global_options = WEP_Option_Model::get_field_values($search_page_options, true);
extract($global_options);

/** Get results ----------------
 * @var $totalResults
 * @var $keyword
 * @var $posts
 */
$news_result = WEP_Section_Model::searchPosts($wep_search_page_number_per_page);
extract($news_result);

/* Banner ---------------*/
if (trim($wep_search_page_banner) != '') {
    $section_data = [
        'id' => 'wep_banner',
        'class' => 'wep_banner',
        'css' => 'height:200px',
        'image' => $wep_search_page_banner,
        'align' => 'start',
        'heading' => $wep_search_page_heading,
        'heading_css' => '',
        'description' => sprintf('Tìm kiếm có <strong>%s</strong> kết quả cho nội dung: <strong>"%s"</strong>', $totalResults, $keyword),
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
    'columns' => $wep_search_page_columns,
    'pagination' => $pagination,
    'news_list' => $post_list
];

get_template_part('sections/section', 'news-grid', $section_data);

/* Footer */
get_footer();
