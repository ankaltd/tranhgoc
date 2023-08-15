<?php



/**

 * Template Name: Tuyển dụng 

 */



// Header

get_header();



/* Hiring Banner ---------------  */

$section_data = [

    'id' => 'wep_banner',

    'class' => 'wep_banner',

    'align' => 'start',

    'image' => THEME_IMG . '/hiring/hiring-banner.png',

    'heading' => 'Tuyển dụng',

];

get_template_part('sections/banner', 'photo', $section_data);



/* Hiring EV --------------- */

$section_data = [

    'id' => 'wep_hiring_ev',

    'class' => 'wep_hiring_ev',

    'heading' => 'Môi trường làm việc công bằng.<br>Cơ hội phát triển cho tất cả thành viên.',

    'hiring_ev_list' => [

        [

            'image' => THEME_IMG . '/hiring/hiring-ev-1.png',

            'title' => 'Đồng hành',

            'text' => 'Luôn đoàn kết, cùng nhau làm việc và phấn đấu với chung một định hướng phát triển Dbiz lớn mạnh'

        ],

        [

            'image' => THEME_IMG . '/hiring/hiring-ev-2.png',

            'title' => 'Năng động',

            'text' => 'Đội ngũ nhân sự trẻ trung, nhiệt tình và đầy sáng tạo với những ý tưởng bứt phá'

        ],

        [

            'image' => THEME_IMG . '/hiring/hiring-ev-3.png',

            'title' => 'Trách nhiệm',

            'text' => 'Chủ động và nỗ lực hoàn thành các nhiệm vụ được giao'

        ],

        [

            'image' => THEME_IMG . '/hiring/hiring-ev-4.png',

            'title' => 'Học hỏi',

            'text' => 'Cố gắng tiếp thu kiến thức, trau dồi bản thân với tinh thần cầu tiến'

        ],

    ]

];

get_template_part('sections/hiring', 'ev', $section_data);



/* Hiring List --------------- */

$section_data = [

    'id' => 'wep_hiring_list',

    'class' => 'wep_hiring_list',

    'heading' => 'Cơ hội nghề nghiệp',

    'hiring_list' => [

        [

            'position' => 'Account Manager (Tech)',

            'location' => 'Hà Nội',

            'date' => '15/05/2023'

        ],

        [

            'position' => 'Business Development Executive (Digital Marketing)',

            'location' => 'Hà Nội',

            'date' => '15/05/2023'

        ],

        [

            'position' => 'Business Development (Mảng ERP)',

            'location' => 'HCM',

            'date' => '15/05/2023'

        ],

        [

            'position' => 'Thực tập sinh kinh doanh (Digital Marketing)',

            'location' => 'Hà Nội',

            'date' => '15/05/2023'

        ],

        [

            'position' => 'Account Intern',

            'location' => 'Hà Nội',

            'date' => '15/05/2023'

        ],

        [

            'position' => 'Nhân Viên Kinh Doanh Phần Mềm',

            'location' => 'HCM',

            'date' => '15/05/2023'

        ],

        [

            'position' => 'Web Designer',

            'location' => 'Hà Nội',

            'date' => '15/05/2023'

        ],

        [

            'position' => 'Fullstack Developer',

            'location' => 'HCM',

            'date' => '15/05/2023'

        ],



    ]

];

get_template_part('sections/hiring', 'list', $section_data);





/* Hiring Benefit --------------- */

$section_data = [

    'id' => 'wep_hiring_benefit',

    'class' => 'wep_hiring_benefit',

    'heading' => 'Chế độ - Phúc lợi',

    'hiring_benefit_list' => [

        [

            'image' => THEME_IMG . '/icon_benefit_canhtranh.png',

            'title' => 'Mức độ cạnh tranh',

            'text' => 'Đảm bảo mức thu nhập cạnh tranh cho các cán bộ công nhân viên của công ty. Xét tăng lương 1 năm 2 lần tạo chất lượng sống ngày một tốt hơn.'

        ],

        [

            'image' => THEME_IMG . '/icon_benefit_baohiem.png',

            'title' => 'Bảo hiểm theo quy định',

            'text' => 'Đảm bảo mức thu nhập cạnh tranh cho các cán bộ công nhân viên của công ty. Xét tăng lương 1 năm 2 lần tạo chất lượng sống ngày một tốt hơn.'

        ],

        [

            'image' => THEME_IMG . '/icon_benefit_thuong.png',

            'title' => 'Thưởng cá nhân xuất sắc',

            'text' => 'Chế độ thưởng nóng, thưởng KPI 3 tháng 1 lần, thưởng cá nhân xuất sắc luôn dành cho các cá nhân có thành tích xuất sắc trong công việc'

        ],

        [

            'image' => THEME_IMG . '/icon_benefit_nangdong.png',

            'title' => 'Môi trường trẻ năng động',

            'text' => 'Mong muốn tạo dựng một môi trường làm việc trẻ trung năng động hướng đến một dịch vụ có ích cho xã hội. Luôn thúc đẩy những nhân tô trẻ để tạo nên tính đột phá cho sản phẩm, vươn tầm ra thế giới.'

        ],

        [

            'image' => THEME_IMG . '/icon_benefit_daotao.png',

            'title' => 'Đào tạo nhân viên',

            'text' => 'Nhằm nâng cao chất lượng cán bộ, nhân viên của công ty thường xuyên có các buổi đào tạo nhân viên mới, đào tạo các lớp học chuyên sâu để mỗi cá nhân là một mắt xích tạo nên thành công cho công ty.'

        ],

        [

            'image' => THEME_IMG . '/icon_benefit_teambuilding.png',

            'title' => 'Team Building thường xuyên',

            'text' => 'Ngoài các giờ làm việc căng thẳng, Dbiz thường xuyên tổ chức các buổi Team Building, cắm trại, du lịch... tạo điều kiện kết nối nhân sự toàn công ty cũng như tăng tính đoàn kết giữa các bộ phận với nhau.'

        ],





    ]

];

get_template_part('sections/hiring', 'benefit', $section_data);



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

