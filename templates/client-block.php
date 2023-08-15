<?php



/**

 * Template Name: Khách hàng 

 */



// Header

get_header();



/* Client Banner ---------------  */

$section_data = [

    'id' => 'wep_banner',

    'class' => 'wep_banner',

    'align' => 'start',

    'image' => THEME_IMG . '/client/client-banner.png',

    'heading' => 'Câu chuyện khách hàng',

];

get_template_part('sections/banner', 'photo', $section_data);



/* Client News Category by Branch */

$section_data = [

    'id' => 'wep_client_news_branch',

    'class' => 'wep_news_branch',

    'branch_list' => [

        [

            'name' => 'Bất động sản',

            'link' => '/khach-hang'

        ],

        [

            'name' => 'Xăng dầu',

            'link' => '/khach-hang'

        ],

        [

            'name' => 'Ngân hàng',

            'link' => '/khach-hang'

        ],

        [

            'name' => 'Chính phủ',

            'link' => '/khach-hang'

        ],

        [

            'name' => 'Ngăng lượng',

            'link' => '/khach-hang'

        ],

    ]

];

get_template_part('sections/section', 'news-branch', $section_data);



/* Client News --------------- */

$section_data = [

    'id' => 'wep_client_news',

    'class' => 'wep_news_grid',

    'columns' => 3,

    'news_list' => [

        [

            'image' => THEME_IMG . '/client/client-1.png',

            'title' => 'Công bố nghiệm thu thành công hệ thống ERP cho Công ty Tài chính Ngân hàng TMCP Sài Gòn - Hà Nội (SHB Finance)',

        ],

        [

            'image' => THEME_IMG . '/client/client-2.png',

            'title' => 'Lễ công bố triển khai thành công hệ thống ERP cho Tập đoàn Hoa Sen (Hoa Sen Group)',

        ],

        [

            'image' => THEME_IMG . '/client/client-3.png',

            'title' => 'Lễ công bố triển khai thành công hệ thống ERP cho Tập đoàn Hoa Sen (Hoa Sen Group)',

        ],

        [

            'image' => THEME_IMG . '/client/client-1.png',

            'title' => 'Công bố nghiệm thu thành công hệ thống ERP cho Công ty Tài chính Ngân hàng TMCP Sài Gòn - Hà Nội (SHB Finance)',

        ],

        [

            'image' => THEME_IMG . '/client/client-2.png',

            'title' => 'Lễ công bố triển khai thành công hệ thống ERP cho Tập đoàn Hoa Sen (Hoa Sen Group)',

        ],

        [

            'image' => THEME_IMG . '/client/client-3.png',

            'title' => 'Lễ công bố triển khai thành công hệ thống ERP cho Tập đoàn Hoa Sen (Hoa Sen Group)',

        ],

    ]

];

get_template_part('sections/section', 'news-grid', $section_data);



/* Home Client --------------- */

$section_data = [

    'id' => 'wep_home_client',

    'class' => 'wep_home_client',

    'heading' => 'Khách hàng',

    'description' => 'Các chuyên gia tư vấn của WEP  cùng với khách hàng phát triển các kỹ năng về quản lý, kỹ thuật công nghệ, tạo ra các chức năng mới hoặc các luồng nghiệp vụ mới để giúp khách hàng quản lý tốt hơn.',

    'tab_list' => [

        'one' => [

            'tab' => 'Tập đoàn',

            'logo_list' => [

                THEME_IMG . '/home/home-logo-1.png',

                THEME_IMG . '/home/home-logo-2.png',

                THEME_IMG . '/home/home-logo-3.png',

                THEME_IMG . '/home/home-logo-4.png',

                THEME_IMG . '/home/home-logo-5.png',

                THEME_IMG . '/home/home-logo-6.png',

                THEME_IMG . '/home/home-logo-7.png',

                THEME_IMG . '/home/home-logo-8.png',

            ]

        ],

        'two' => [

            'tab' => 'Ngân hàng',

            'logo_list' => [

                THEME_IMG . '/home/home-logo-1.png',

                THEME_IMG . '/home/home-logo-2.png',

                THEME_IMG . '/home/home-logo-3.png',

                THEME_IMG . '/home/home-logo-4.png',

                THEME_IMG . '/home/home-logo-5.png',

                THEME_IMG . '/home/home-logo-6.png',

                THEME_IMG . '/home/home-logo-7.png',

                THEME_IMG . '/home/home-logo-8.png',

            ]

        ],

        'three' => [

            'tab' => 'Khác',

            'logo_list' => [

                THEME_IMG . '/home/home-logo-1.png',

                THEME_IMG . '/home/home-logo-2.png',

                THEME_IMG . '/home/home-logo-3.png',

                THEME_IMG . '/home/home-logo-4.png',

                THEME_IMG . '/home/home-logo-5.png',

                THEME_IMG . '/home/home-logo-6.png',

                THEME_IMG . '/home/home-logo-7.png',

                THEME_IMG . '/home/home-logo-8.png',

            ]

        ],

    ]

];

get_template_part('sections/home', 'client-tab', $section_data);



/* Home Testimonial --------------- */

$section_data = [

    'id' => 'wep_home_testimonial',

    'class' => 'wep_home_testimonial',

    'heading' => 'Khách hàng nói',

    'quote_list' => [

        [

            'image' => THEME_IMG . '/home/home-testimonial-avatar.png',

            'text' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which',

            'name' => 'Trần Thanh Tâm',

            'title' => 'Marketing Director - '

        ],

        [

            'image' => THEME_IMG . '/home/home-testimonial-avatar.png',

            'text' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which',

            'name' => 'Trần Thanh Tâm',

            'title' => 'Marketing Director - '

        ],

    ]



];

get_template_part('sections/home', 'testimonial', $section_data);



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

