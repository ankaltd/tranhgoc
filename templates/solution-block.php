<?php



/**

 * Template Name: Giải pháp 

 */



// Header

get_header();



/* Service Slide ---------------  */

$section_data = [

    'id' => 'ssg_banner',

    'class' => 'ssg_banner',

    'image' => THEME_IMG . '/solution/solution-banner.png',

    'heading' => 'Hóa dược',

    'align' => 'start',

    'description' => 'Thay đổi không cần phải khó khăn. Chuyên môn sâu về ngành hóa chất và tư duy ưu tiên đổi mới của chúng tôi có thể giúp bạn thúc đẩy tăng trưởng bền vững.',

    'button' => [

        'text' => __('Xem thêm', 'ssg'),

    ]

];

get_template_part('sections/banner', 'photo', $section_data);





/* Service Goto Section --------------- */

$section_data = [

    'id' => 'ssg_goto_section',

    'class' => 'ssg_goto_section',

    'heading' => 'Quick Goto Section',

    'section_list' => [

        'ssg_service_overview' => 'Tổng quan',

        'ssg_solution_tab' => 'Giải pháp',

        'ssg_service_benefit' => 'Lợi ích',

        'ssg_case_study' => 'Case Study',

        'ssg_home_news' => 'Tin tức',

    ]

];

get_template_part('sections/section', 'goto', $section_data);



/* Service Overview --------------- */

$section_data = [

    'id' => 'ssg_service_overview',

    'class' => 'ssg_service_overview trackThis',

    'heading' => 'Giới thiệu chung',

    'order' => 1,

    'text' => 'In this ever-changing world, companies need to think fast and stay agile. And that requires strategies that work in the real world. With experience across the value chain, end-to-end, only Accenture helps clients create strategies that come not just from knowing, but from the know-how of doing.

    Our integrated model enables 360° value creation by giving our strategists the advantage of Accenture insights from AI and data science and deep industry expertise, combined with the experience of efficiently operating business functions, optimizing and running supply chains, designing and implementing technology, and building resilient operating models and cultures.',

    'image' => THEME_IMG . '/solution/solution-overview.png',

];

get_template_part('sections/section', 'two-cols', $section_data);



/* Service SSG --------------- */

$section_data = [

    'id' => 'ssg_solution_tab',

    'class' => 'ssg_vertical_tab',

    'class2' => 'trackThis',

    'heading' => 'Giải pháp',

    'order' => 2,

    'tab_list' => [

        'one' => [

            'tab' => 'Dịch vụ & giải pháp SAP',

            'title' => 'Dịch vụ giải pháp SAP',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English.',

        ],

        'two' => [

            'tab' => 'Sản xuất và vận hành kỹ thuật số',

            'title' => 'Dịch vụ Chain',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English.',

        ],

        'three' => [

            'tab' => 'Sự bền vững',

            'title' => 'Dịch vụ Report',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English.',

        ],

        'four' => [

            'tab' => 'Chuỗi cung ứng & vận hành',

            'title' => 'Dịch vụ Customer Experience',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English.',

        ],

        'five' => [

            'tab' => 'Trải nghiệm khách hàng',

            'title' => 'Dịch vụ Customer Experience',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English.',

        ],

        'sex' => [

            'tab' => 'Dịch vụ kinh doanh',

            'title' => 'Dịch vụ Customer Experience',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English.',

        ],

    ]

];

get_template_part('sections/section', 'vertical-tab', $section_data);





/* Service Benefit --------------- */

$section_data = [

    'id' => 'ssg_service_benefit',

    'class' => 'ssg_service_benefit',

    'class2' => 'trackThis',

    'heading' => 'Lợi ích',

    'order' => 3,

    'benefit_list' => [

        'Tăng năng suất lao động' => 'Năng suất lao động sẽ tăng do các dữ liệu đầu vào chỉ phải nhập một lần cho mọi giao dịch có liên quan, đồng thời các báo cáo được thực hiện với tốc độ nhanh hơn, chính xác hơn. Doanh nghiệp (DN) có khả năng kiểm soát tốt hơn các hạn mức về tồn kho, công nợ, chi phí, doanh thu, lợi nhuận… đồng thời có khả năng tối ưu hóa các nguồn lực như nguyên vật liệu, nhân công, máy móc thi công… vừa đủ để sản xuất, kinh doanh.',

        'Tập trung thông tin' => 'Các thông tin của DN được tập trung, đầy đủ, kịp thời và có khả năng chia sẻ cho mọi đối tượng cần sử dụng thông tin như khách hàng, đối tác, cổ đông. Khách hàng sẽ hài lòng hơn do việc giao hàng sẽ được thực hiện chính xác và đúng hạn. Ứng dụng ERP cũng đồng nghĩa với việc tổ chức lại các hoạt động của DN theo các quy trình chuyên nghiệp, phù hợp với các tiêu chuẩn quốc tế, do đó nó nâng cao chất lượng sản phẩm, tiết kiệm chi phí, tăng lợi nhuận, tăng năng lực cạnh tranh và phát triển thương hiệu của DN.',

        'Nâng cao năng lực cạnh tranh' => 'Ứng dụng ERP là công cụ quan trọng để DN nâng cao năng lực cạnh tranh, đồng thời nó cũng giúp DN tiếp cận tốt hơn với các tiêu chuẩn quốc tế. Một DN nếu ứng dụng ngay từ khi quy mô còn nhỏ sẽ có thuận lợi là dễ triển khai và DN sớm đi vào nề nếp. DN nào chậm trễ ứng dụng ERP, DN đó sẽ tự gây khó khăn cho mình và tạo lợi thế cho đối thủ.',

    ]

];

get_template_part('sections/section', 'benefit', $section_data);



/* Service Case Study --------------- */

$section_data = [

    'id' => 'ssg_case_study',

    'class' => 'ssg_case_study',

    'class2' => 'trackThis',

    'heading' => 'Case study',

    'order' => 4,

    'case_list' => [

        'one' => [

            'image' => THEME_IMG . '/service/service-case-study-1.png',

            'title' => '5 điểm ưu việt hệ thống ERP Oracle NetSuite mang đến cho doanh nghiệp',

            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới, được sử dụng bởi hơn 29.000 doanh nghiệp toàn cầu.'

        ],

        'two' => [

            'image' => THEME_IMG . '/service/service-case-study-2.png',

            'title' => '5 điểm ưu việt hệ thống ERP Oracle NetSuite mang đến cho doanh nghiệp',

            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới, được sử dụng bởi hơn 29.000 doanh nghiệp toàn cầu.'

        ],

        'three' => [

            'image' => THEME_IMG . '/service/service-case-study-3.png',

            'title' => '5 điểm ưu việt hệ thống ERP Oracle NetSuite mang đến cho doanh nghiệp',

            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới, được sử dụng bởi hơn 29.000 doanh nghiệp toàn cầu.'

        ],

    ]

];

get_template_part('sections/section', 'case-study', $section_data);



/* Service News --------------- */

$section_data = [

    'id' => 'ssg_home_news',

    'class' => 'ssg_home_news_image',

    'class2' => 'trackThis',

    'heading' => 'Tin tức',

    'order' => 5,

    'news_list' => [

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/home/home-news-1.png',

            'title' => 'Cách NetSuite hỗ trợ thiết lập, theo dõi KPI và chỉ số tài chính doanh nghiệp',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/home/home-news-2.png',

            'title' => '8 Sai Lầm Cần Tránh Khi Triển Khai ERP Oracle NetSuite',

            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới, được sử dụng bởi hơn 29.000 doanh nghiệp toàn cầu.'

        ],

        [

            'date' => '23.09.2023',

            'image' => THEME_IMG . '/home/home-news-3.png',

            'title' => '5 điểm ưu việt hệ thống ERP Oracle NetSuite mang đến cho doanh nghiệp',

            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới.'

        ],

    ]

];

get_template_part('sections/section', 'featured-news-image', $section_data);



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

