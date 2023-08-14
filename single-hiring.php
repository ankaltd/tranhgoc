<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage SSG
 * @since SSG 1.0
 */

get_header();

/* Hiring Banner ---------------  */
$section_data = [
    'id' => 'ssg_banner',
    'class' => 'ssg_banner',
    'image' => THEME_IMG . '/hiring/hiring-banner.png',
    'heading' => 'Tuyển dụng',
];
get_template_part('sections/banner', 'photo', $section_data);

/* Section Entry Hiring --------------- */

/* Start the Loop */
while (have_posts()) :
    the_post();

    $post_id = get_the_ID(); // Lấy ID của tin tuyển dụng hiện tại
    $post_classes = get_post_class('single-hiring', $post_id);
    $post_title = get_the_title($post_id);
    $post_excerpt = get_the_excerpt($post_id);
    $thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
    $post_content = get_the_content(null, false, $post_id);
    $post_date = get_the_date('j F, Y', $post_id);

    // Chuyển đổi ngày sang ngôn ngữ địa phương
    $post_date_localized = date_i18n('j F, Y', strtotime($post_date));  

    // Lấy thông tin các taxonomy (hiring_position và location)
    $hiring_position = get_the_terms($post_id, 'hiring_position');
    $hirring_location = get_the_terms($post_id, 'location');

    // Lấy thông tin các giá trị trường ACF
    $hiring_salary = get_field('hiring_salary', $post_id);
    $hiring_deadline = get_field('hiring_deadline', $post_id);
    $hiring_workform = get_field('hiring_workform', $post_id);
    $hiring_workform_description = get_field('hiring_workform_description', $post_id);
    $hiring_workform_requirment = get_field('hiring_workform_requirment', $post_id);
    $hiring_workform_benefit = get_field('hiring_workform_benefit', $post_id);

    $section_data = [
        'id' => 'ssg_hiring_single',
        'class' => 'ssg_hiring_single',
        'post_id' => $post_id,
        'post_classes' => implode(' ', $post_classes),
        'heading' => $post_title,
        'location' => $hirring_location[0]->name,
        'salary' => $hiring_salary,
        'date' => $hiring_deadline,
        'workform' => $hiring_workform,
        'description' => $hiring_workform_description,
        'requirment' => $hiring_workform_requirment,
        'benefit' => $hiring_workform_benefit
    ];
    get_template_part('sections/single', 'entry-hiring', $section_data);

endwhile; // End of the loop.

/* Section News Other --------------- */
$section_data = [
    'id' => 'ssg_hirring_apply',
    'class' => 'ssg_hirring_apply',
    'heading' => 'Thông tin ứng tuyển',
];
get_template_part('sections/hiring', 'apply', $section_data);

/* Section Contact --------------- */
$section_data = [
    'id' => 'ssg_home_contact',
    'class' => 'ssg_home_contact',
    'heading' => 'Hãy để chúng tôi đồng hành cùng bạn trên hành trình chuyển đổi số.',
    'button' => [
        'text' => 'Liên hệ'
    ]
];
get_template_part('sections/section', 'contact', $section_data);

// Footer
get_footer();
