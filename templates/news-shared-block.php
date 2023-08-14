<?php



/**

 * Template Name: Nghiên cứu và chia sẻ 

 */

// Header

get_header();



/* News Slide ---------------  */

$section_data = [

    'id' => 'ssg_banner',

    'class' => 'ssg_banner',

    'image' => THEME_IMG . '/news/news-banner.png',

    'align' => 'start',

    'heading' => 'Nghiên cứu và chia sẻ',

    'description' => 'Thay đổi không cần phải khó khăn. Chuyên môn sâu về ngành hóa chất và tư duy ưu tiên đổi mới của chúng tôi có thể giúp bạn thúc đẩy tăng trưởng bền vững.',

];

get_template_part('sections/banner', 'photo', $section_data);



/* News Grid --------------- */

$section_data = [

    'id' => 'ssg_news',

    'class' => 'ssg_news_grid',

    // 'heading' => 'Tin tức',

    'columns' => 4,

    'news_list' => [

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/news/news-1.png',

            'title' => 'Lễ công bố khởi động dự án ERP cho Công ty Thiên Nam',

            'text' => 'Lễ khởi dộng dự án Oracle E-Business Suite cho công ty Dệt may Thiên Nam đã diễn ra vào lúc 14h ngày 21/11/2016 tạị Trụ sở chính của công ty Thiên Nam'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/news/news-2.png',

            'title' => 'Hội thảo giới thiệu giải pháp lập báo cáo quản trị thông minh',

            'text' => 'Ngày 18/11/2010, Công ty Cổ phần Giải pháp Quản lý Quốc tế Hồng Quang (SSG) phối hợp cùng Oracle Việt Nam'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/news/news-3.png',

            'title' => 'Hội thảo giải pháp quản trị tổng thể ngành Hóa Chất',

            'text' => 'Ngày 21/04/2011, cùng với hãng phần mềm nổi tiếng thế giới Oracle, Công ty Cổ phần Giải pháp Quản lý Quốc tế'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/news/news-4.png',

            'title' => 'Hội thảo Giải pháp - Dịch vụ - Hạ tầng cho ngành Vận tải',

            'text' => 'Công ty giải pháp quản lý SSG phối hợp cùng với hãng phần mềm Oracle và đối tác HP cùng tổ chức buổi hội thảo'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/news/news-1.png',

            'title' => 'Lễ công bố khởi động dự án ERP cho Công ty Thiên Nam',

            'text' => 'Lễ khởi dộng dự án Oracle E-Business Suite cho công ty Dệt may Thiên Nam đã diễn ra vào lúc 14h ngày 21/11/2016 tạị Trụ sở chính của công ty Thiên Nam'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/news/news-2.png',

            'title' => 'Hội thảo giới thiệu giải pháp lập báo cáo quản trị thông minh',

            'text' => 'Ngày 18/11/2010, Công ty Cổ phần Giải pháp Quản lý Quốc tế Hồng Quang (SSG) phối hợp cùng Oracle Việt Nam'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/news/news-3.png',

            'title' => 'Hội thảo giải pháp quản trị tổng thể ngành Hóa Chất',

            'text' => 'Ngày 21/04/2011, cùng với hãng phần mềm nổi tiếng thế giới Oracle, Công ty Cổ phần Giải pháp Quản lý Quốc tế'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/news/news-4.png',

            'title' => 'Hội thảo Giải pháp - Dịch vụ - Hạ tầng cho ngành Vận tải',

            'text' => 'Công ty giải pháp quản lý SSG phối hợp cùng với hãng phần mềm Oracle và đối tác HP cùng tổ chức buổi hội thảo'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/news/news-1.png',

            'title' => 'Lễ công bố khởi động dự án ERP cho Công ty Thiên Nam',

            'text' => 'Lễ khởi dộng dự án Oracle E-Business Suite cho công ty Dệt may Thiên Nam đã diễn ra vào lúc 14h ngày 21/11/2016 tạị Trụ sở chính của công ty Thiên Nam'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/news/news-2.png',

            'title' => 'Hội thảo giới thiệu giải pháp lập báo cáo quản trị thông minh',

            'text' => 'Ngày 18/11/2010, Công ty Cổ phần Giải pháp Quản lý Quốc tế Hồng Quang (SSG) phối hợp cùng Oracle Việt Nam'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/news/news-3.png',

            'title' => 'Hội thảo giải pháp quản trị tổng thể ngành Hóa Chất',

            'text' => 'Ngày 21/04/2011, cùng với hãng phần mềm nổi tiếng thế giới Oracle, Công ty Cổ phần Giải pháp Quản lý Quốc tế'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/news/news-4.png',

            'title' => 'Hội thảo Giải pháp - Dịch vụ - Hạ tầng cho ngành Vận tải',

            'text' => 'Công ty giải pháp quản lý SSG phối hợp cùng với hãng phần mềm Oracle và đối tác HP cùng tổ chức buổi hội thảo'

        ],

    ]

];

get_template_part('sections/section', 'news-grid', $section_data);



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

