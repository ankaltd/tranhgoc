<?php

/**
 * Search Result
 */

// Header
get_header();

// Get options
$search_page_options = [
    'ssg_search_page_banner'                => '',
    'ssg_search_page_heading'               => 'Tìm kiếm',
    'ssg_search_page_number_per_page'       => 6,
    'ssg_search_page_columns'               => 3,
    'ssg_search_page_show'                  => 'all',
];

// Get options --------------
$global_options = ANT_Option_Model::get_field_values($search_page_options, true);
extract($global_options);

/** Get results ----------------
 * @var $totalResults
 * @var $keyword
 * @var $posts
 */
$news_result = ANT_Section_Model::searchPosts($ssg_search_page_number_per_page);
extract($news_result);

/* Banner ---------------*/
if (trim($ssg_search_page_banner) != '') {
    $section_data = [
        'id' => 'ssg_banner',
        'class' => 'ssg_banner',
        'css' => 'height:200px',
        'image' => $ssg_search_page_banner,
        'align' => 'start',
        'heading' => $ssg_search_page_heading,
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
    'id' => 'ssg_news',
    'class' => 'ssg_news_grid',
    'columns' => $ssg_search_page_columns,
    'pagination' => $pagination,
    'news_list' => $post_list
];

get_template_part('sections/section', 'news-grid', $section_data);

/* Footer */
get_footer();
