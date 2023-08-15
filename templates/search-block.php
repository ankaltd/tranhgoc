<?php

/**
 * Template Name: Kết quả tìm kiếm 
 */


// Header
get_header();


/* Home Slide ---------------  */
$section_data = [
    'id' => 'wep_slider',
    'class' => 'wep_slider',
    'heading' => 'Một kỷ nguyên mới của trí tuệ nhân tạo cho tất cả mọi người',
    'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical',
    'button' => [
        'text' => __('Xem thêm', 'wep'),
    ]
];
get_template_part('sections/slider', 'banner', $section_data);


/* Home Service --------------- */
$section_data = [
    'id' => 'wep_home_service',
    'class' => 'wep_home_service',
    'heading' => 'Dịch vụ',
    'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical',
    'more_link' => [
        'text' => __('Xem thêm', 'wep'),
    ]
];
get_template_part('sections/home', 'service', $section_data);

/* Home Solution --------------- */
$section_data = [
    'id' => 'wep_home_solution',
    'class' => 'wep_home_solution',
    'heading' => 'Giải pháp',
    'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical',
    'button' => [
        'text' => __('Xem thêm', 'wep'),
    ]
];
get_template_part('sections/home', 'solution', $section_data);


/* Home Client --------------- */
$section_data = [
    'id' => 'wep_home_client',
    'class' => 'wep_home_client',
    'heading' => 'Khách hàng',
    'description' => 'Các chuyên gia tư vấn của WEP  cùng với khách hàng phát triển các kỹ năng về quản lý, kỹ thuật công nghệ, tạo ra các chức năng mới hoặc các luồng nghiệp vụ mới để giúp khách hàng quản lý tốt hơn.',
];
get_template_part('sections/home', 'client', $section_data);

/* Home Testimonial --------------- */
$section_data = [
    'id' => 'wep_home_testimonial',
    'class' => 'wep_home_testimonial',
    'heading' => 'Khách hàng nói',
    'more_link' => [
        'text' => __('Xem thêm', 'wep'),
    ]
];
get_template_part('sections/home', 'testimonial', $section_data);

/* Home News --------------- */
$section_data = [
    'id' => 'wep_home_news',
    'class' => 'wep_home_news',
    'heading' => 'Tin tức',
    'more_link' => [
        'text' => __('Xem thêm', 'wep'),
    ]
];
get_template_part('sections/home', 'news', $section_data);

/* Home PR News --------------- */
$section_data = [
    'id' => 'wep_home_pr',
    'class' => 'wep_home_pr',
    'heading' => 'Báo chí viết gì về WEP ?',
];
get_template_part('sections/home', 'news-pr', $section_data);

/* Home Event --------------- */
$section_data = [
    'id' => 'wep_home_event',
    'class' => 'wep_home_event',
    'heading' => 'Sự kiện nổi bật',
];
get_template_part('sections/home', 'event', $section_data);

/* Section Contact --------------- */
$section_data = [
    'id' => 'wep_home_contact',
    'class' => 'wep_home_contact',
    'heading' => 'Hãy để chúng tôi đồng hành cùng bạn trên hành trình chuyển đổi số.',
    'button' => [
        'text' => 'Liên hệ'
    ]
];
get_template_part('sections/section', 'contact', $section_data);

/* Footer */
get_footer();
