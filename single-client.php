<?php

/**
 * Khách hàng chi tiết
 */

// Header
get_header();

/* Start the Loop */
while (have_posts()) :
    the_post();

    $post_id = get_the_ID(); // Lấy ID của bài viết hiện tại
    $post_classes = get_post_class('single-post', $post_id);
    $post_title = get_the_title($post_id);
    $post_excerpt = get_the_excerpt($post_id);
    $thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
    $post_content = get_the_content(null, false, $post_id);
    $post_date = get_the_date('j F, Y', $post_id);
    $post_client_link = get_field('client_goto_link', $post_id);
    $post_client_image = get_field('client_content_image', $post_id);
    $post_client_detail = get_field('client_service_detail', $post_id);
    $post_client_solutions = get_field('client_solutions', $post_id);
    $post_client_services = get_field('client_services', $post_id);
    $post_source = get_field('ssg_content_source') ? get_field('ssg_content_source') : '';

    // Chuyển đổi ngày sang ngôn ngữ địa phương
    $post_date_localized = date_i18n('j F, Y', strtotime($post_date));

    // Shared Links
    // Lấy permalink của bài viết hiện tại và đưa vào biến $post_permalink
    $post_permalink = get_permalink();

    // Kiểm tra xem biến $post_permalink có giá trị hay không trước khi sử dụng
    if ($post_permalink) {
        // Tạo liên kết chia sẻ trên Facebook
        $facebook_share_link = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($post_permalink);
        $twitter_share_link = 'https://twitter.com/intent/tweet?url=' . urlencode($post_permalink);
    } else {
        // Xử lý trường hợp không lấy được permalink
        $facebook_share_link = 'Không lấy được permalink của bài viết.';
        $twitter_share_link = 'Không lấy được permalink của bài viết.';
    }

    /* Section Entry Post --------------- */
    $section_data = [
        'id' => 'ssg_entry_single',
        'class' => 'ssg_entry_single',
        'post_classes' => implode(' ', $post_classes),
        'heading' => $post_title,
        'summary' => $post_excerpt,
        'date' => $post_date_localized,
        'image' => $post_client_image,
        'content' => $post_client_detail,
        'services' => $post_client_services,
        'solutions' => $post_client_solutions,
        'content' => $post_client_detail,
        'link' => $post_client_link,
        'facebook_share' => $facebook_share_link,
        'twitter_share' => $twitter_share_link,
        'source' => $post_source,
    ];
    get_template_part('sections/single', 'entry-client', $section_data);

endwhile; // End of the loop.


/* Section Client Other --------------- */

// Lấy ID của post hiện tại
$current_post_id = get_the_ID();

// Lấy thông tin của thuộc tính "industry" thuộc post
$industry_terms = get_the_terms($current_post_id, 'industry');

$current_industry = NULL;

// Kiểm tra xem thuộc tính có tồn tại và không rỗng
if ($industry_terms && !is_wp_error($industry_terms)) {
    // Lặp qua các thuộc tính và hiển thị giá trị của chúng
    foreach ($industry_terms as $term) {
        // echo $term->name; // Hiển thị tên của thuộc tính
        // echo $term->slug; // Hoặc hiển thị slug của thuộc tính
        // // Nếu bạn cần lấy ID của thuộc tính, sử dụng $term->term_id;
    }

    $current_industry = $industry_terms[0]->term_id;
}

// Nếu có client khác
$list_clients = array();
if ($current_industry) :
    $other_clients = WEP_Section_Model::get_list_client_by_industry(3, $current_industry);

    foreach ($other_clients as $client) {
        $list_clients[] = [
            'image' => $client['photo'] ? $client['photo'] : $client['thumbnail'],
            'title' => $client['title'],
            'text' =>  $client['excerpt'],
            'link' => $client['photo'] ? $client['permalink'] : $client['link'],
            'responsive' => $client['photo'] ? 'img-fluid' : '',
        ];
    }

else :
    $list_clients = [
        [
            'image' => THEME_IMG . '/home/home-news-1.png',
            'title' => 'Công bố nghiệm thu thành công hệ thống ERP cho Công ty Tài chính Ngân hàng TMCP Sài Gòn - Hà Nội (SHB Finance)',
            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'link' => '',
        ],
        [
            'image' => THEME_IMG . '/home/home-news-2.png',
            'title' => 'Lễ công bố triển khai thành công hệ thống ERP cho Tập đoàn Hoa Sen (Hoa Sen Group)',
            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới, được sử dụng bởi hơn 29.000 doanh nghiệp toàn cầu.',
            'link' => '',
        ],
        [
            'image' => THEME_IMG . '/home/home-news-3.png',
            'title' => 'Lễ công bố triển khai thành công hệ thống ERP cho Tập đoàn Hoa Sen (Hoa Sen Group)',
            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới.',
            'link' => '',
        ],
    ];
endif;

$section_data = [
    'id' => 'ssg_client_other',
    'class' => 'ssg_client_other',
    'heading' => 'Có thể bạn quan tâm',
    'news_list' => $list_clients
];
get_template_part('sections/section', 'news-other', $section_data);

/* Section Contact --------------- */
$section_data = [
    'id' => 'ssg_home_contact',
    'class' => 'ssg_home_contact',
    'heading' => 'Hãy để chúng tôi đồng hành cùng bạn trên hành trình chuyển đổi số.',
    'button' => [
        'text' => 'Liên hệ',
        'link' => '/lien-he/#ssg_contact_form',
    ]
];
get_template_part('sections/section', 'contact', $section_data);

/* Footer */
get_footer();
