<?php



/**

 * Home File

 */



// Header

get_header();



/* Home Slide ---------------  */

$section_data = [

    'id' => 'ssg_slider',

    'class' => 'ssg_slider',

    'slider_list' => [

        [

            'image' => THEME_IMG . '/video_demo.mp4',

            'heading' => 'Một kỷ nguyên mới của trí tuệ nhân tạo cho tất cả mọi người',

            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical',

            'type' => 'video',

            'button' => [

                'text' => __('Xem thêm', 'ssg'),

                'style' => 'white'

            ]

        ],

        [

            'image' => THEME_IMG . '/home/home-banner.png',

            'heading' => 'Một kỷ nguyên mới của trí tuệ nhân tạo cho tất cả mọi người',

            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical',

            'type' => 'image',

            'button' => [

                'text' => __('Xem thêm', 'ssg'),

                'style' => 'white'

            ]

        ],

        [

            'image' => THEME_IMG . '/home/home-banner.png',

            'heading' => 'Một kỷ nguyên mới của trí tuệ nhân tạo cho tất cả mọi người',

            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical',

            'type' => 'image',

            'button' => [

                'text' => __('Xem thêm', 'ssg'),

                'style' => 'white'

            ]

        ],

    ],





];

get_template_part('sections/slider', 'banner', $section_data);





/* Home Service --------------- */

$section_data = [

    'id' => 'ssg_home_service',

    'class' => 'ssg_home_service',

    'heading' => 'Dịch vụ',

    'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical',

    'more_link' => [

        'text' => __('Xem thêm', 'ssg'),

    ],

    'slider_list' => [

        [

            'image' => THEME_IMG . '/home/home-service-1.png',

            'title' => 'Thiết kế App chuyên nghiệp 1',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',

        ],

        [

            'image' => THEME_IMG . '/home/home-service-2.png',

            'title' => 'Thiết kế App chuyên nghiệp 2',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',

        ],

        [

            'image' => THEME_IMG . '/home/home-service-3.png',

            'title' => 'Thiết kế App chuyên nghiệp 3',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',

        ],

        [

            'image' => THEME_IMG . '/home/home-service-4.png',

            'title' => 'Thiết kế App chuyên nghiệp 4',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',

        ],

        [

            'image' => THEME_IMG . '/home/home-service-5.png',

            'title' => 'Thiết kế App chuyên nghiệp 5',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',

        ],

        [

            'image' => THEME_IMG . '/home/home-service-3.png',

            'title' => 'Thiết kế App chuyên nghiệp 6',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',

        ],



    ],

];

get_template_part('sections/home', 'service-slick', $section_data);



/* Home Solution --------------- */

$section_data = [

    'id' => 'ssg_home_solution',

    'class' => 'ssg_home_solution',

    'heading' => 'Giải pháp',

    'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical',

    'button' => [

        'text' => __('Xem thêm', 'ssg'),

        'style' => 'blue'

    ],

    'slider_list' => [

        [

            'image' => THEME_IMG . '/home/home-solution-1.png',

            'title' => 'Xăng dầu',

        ],

        [

            'image' => THEME_IMG . '/home/home-solution-2.png',

            'title' => 'Chế biến thực phẩm',

        ],

        [

            'image' => THEME_IMG . '/home/home-solution-3.png',

            'title' => 'Hóa dược',

        ],

        [

            'image' => THEME_IMG . '/home/home-solution-4.png',

            'title' => 'Du lịch',

        ],

        [

            'image' => THEME_IMG . '/home/home-solution-5.png',

            'title' => 'Máy móc và phụ tùng',

        ],



    ],

];

get_template_part('sections/home', 'solution', $section_data);





/* Home Client --------------- */

$section_data = [

    'id' => 'ssg_home_client',

    'class' => 'ssg_home_client',

    'heading' => 'Khách hàng',

    'description' => 'Các chuyên gia tư vấn của SSG cùng với khách hàng phát triển các kỹ năng về quản lý, kỹ thuật công nghệ, tạo ra các chức năng mới hoặc các luồng nghiệp vụ mới để giúp khách hàng quản lý tốt hơn.',

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

    'id' => 'ssg_home_testimonial',

    'class' => 'ssg_home_testimonial',

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



/* Home News --------------- */

$section_data = [

    'id' => 'ssg_home_news',

    'class' => 'ssg_home_news_image',

    'heading' => 'Tin tức',

    'news_list' => [

        [

            'date' => '23.09.2023',

            'category' => 'Tin tức',

            'image' => THEME_IMG . '/home/home-news-1.png',

            'title' => 'Cách NetSuite hỗ trợ thiết lập, theo dõi KPI và chỉ số tài chính doanh nghiệp',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'

        ],

        [

            'date' => '23.09.2023',

            'category' => 'Ra mắt',

            'image' => THEME_IMG . '/home/home-news-2.png',

            'title' => '8 Sai Lầm Cần Tránh Khi Triển Khai ERP Oracle NetSuite',

            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới, được sử dụng bởi hơn 29.000 doanh nghiệp toàn cầu.'

        ],

        [

            'date' => '23.09.2023',

            'category' => 'Tin tức',

            'image' => THEME_IMG . '/home/home-news-3.png',

            'title' => '5 điểm ưu việt hệ thống ERP Oracle NetSuite mang đến cho doanh nghiệp',

            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới.'

        ],

    ],

    'more_link' => [

        'text' => __('Xem thêm', 'ssg'),

    ]

];

get_template_part('sections/section', 'featured-news-image', $section_data);



/* Home PR News --------------- */

$section_data = [

    'id' => 'ssg_home_pr',

    'class' => 'ssg_home_pr',

    'heading' => 'Báo chí viết gì về SSG?',

    'news_list' => [

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/home/home-news-1.png',

            'title' => 'Công bố nghiệm thu thành công hệ thống ERP cho Công ty Tài chính Ngân hàng TMCP Sài Gòn - Hà Nội (SHB Finance)',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/home/home-news-2.png',

            'title' => 'Lễ công bố triển khai thành công hệ thống ERP cho Tập đoàn Hoa Sen (Hoa Sen Group)',

            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới, được sử dụng bởi hơn 29.000 doanh nghiệp toàn cầu.'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/home/home-news-3.png',

            'title' => 'Lễ công bố triển khai thành công hệ thống ERP cho Tập đoàn Hoa Sen (Hoa Sen Group)',

            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới.'

        ],

    ],

];

get_template_part('sections/home', 'news-pr', $section_data);



/* Home Event --------------- */

$section_data = [

    'id' => 'ssg_home_event',

    'class' => 'ssg_home_event',

    'heading' => 'Sự kiện nổi bật',

    'news_list' => [

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/home/home-event-1.png',

            'title' => 'Lễ công bố khởi động dự án ERP cho Công ty Thiên Nam',

            'text' => 'Lễ khởi dộng dự án Oracle E-Business Suite cho công ty Dệt may Thiên Nam đã diễn ra vào lúc 14h ngày 21/11/2016 tạị Trụ sở chính của công ty Thiên Nam'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/home/home-event-2.png',

            'title' => 'Hội thảo giới thiệu giải pháp lập báo cáo quản trị thông minh',

            'text' => 'Ngày 18/11/2010, Công ty Cổ phần Giải pháp Quản lý Quốc tế Hồng Quang (SSG) phối hợp cùng Oracle Việt Nam'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/home/home-event-3.png',

            'title' => 'Hội thảo giải pháp quản trị tổng thể ngành Hóa Chất',

            'text' => 'Ngày 21/04/2011, cùng với hãng phần mềm nổi tiếng thế giới Oracle, Công ty Cổ phần Giải pháp Quản lý Quốc tế'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/home/home-event-4.png',

            'title' => 'Hội thảo Giải pháp - Dịch vụ - Hạ tầng cho ngành Vận tải',

            'text' => 'Công ty giải pháp quản lý SSG phối hợp cùng với hãng phần mềm Oracle và đối tác HP cùng tổ chức buổi hội thảo'

        ],

    ],

];

get_template_part('sections/home', 'event', $section_data);



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



/* Footer */

get_footer();

