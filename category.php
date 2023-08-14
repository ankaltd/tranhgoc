<?php

/**
 * Category
 */

// Header
get_header();

// Get options
$category_page_options = [
    'ssg_category_page_banner'                => '',
    'ssg_category_page_heading'               => 'Chuyên mục',
    'ssg_category_page_number_per_page'       => 6,
    'ssg_category_page_columns'               => 3,
    'ssg_category_page_show'                  => 'all',
];

// Get options --------------
$global_options = ANT_Option_Model::get_field_values($category_page_options, true);
extract($global_options);

/** Get results ----------------
 * @var $totalResults
 * @var $keyword
 * @var $posts
 */
$news_result = ANT_Section_Model::categoryPosts($ssg_category_page_number_per_page);
extract($news_result);

/* Banner ---------------*/
if (trim($ssg_category_page_banner) != '') {
    $section_data = [
        'id' => 'ssg_banner',
        'class' => 'ssg_banner',
        'css' => 'height:200px',
        'image' => $ssg_category_page_banner,
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
    'id' => 'ssg_news',
    'class' => 'ssg_news_grid',
    'columns' => $ssg_category_page_columns,
    'pagination' => $pagination,
    'news_list' => $post_list
];

get_template_part('sections/section', 'news-grid', $section_data);

/* Footer */
get_footer();
