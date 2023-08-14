<?php



/**

 * Template Name: Khách hàng chi tiết 

 */



// Header

get_header();





/* Section Entry Post --------------- */

$section_data = [

    'id' => 'ssg_entry_single',

    'class' => 'ssg_entry_single',

    'heading' => 'SSG tài trợ chính hội thảo “E-logistics Việt Nam sẵn sàn cất cánh” - Hiệp Hội Doanh nghiệp Dịch vụ Logistics Việt Nam (VLA) tổ chức',

    'image' => THEME_IMG . '/client/client-detail.png',

    'content' => '<p>

                    Buổi nghiệm thu tổng thể dự án ERP cho Công ty Tài chính SHB Finance đã diễn ra vào ngày 20/08/2021.</p><p>

                    SHB Finance hiện có mạng lưới dịch vụ bao phủ 46 tỉnh thành phố trọng điểm, tập trung cung cấp dịch vụ cho vay tiêu dùng cho các nhóm khách hàng đại chúng với mức thu nhập trung bình từ 3 triệu đồng như CBNV, công nhân, người kinh doanh nhỏ lẻ và các khách hàng khác có thể cung cấp các hóa đơn dịch vụ. Các khoản vay nhằm phục vụ nhu cầu thiết yếu của đông đảo người dân có thu nhập khiêm tốn, hiện đang chiếm tới gần 50% nhu cầu vay tiêu dùng nói chung.

                    </p><p>

                    Dự án triển khai Oracle Financials với giải pháp Best Practice của SSG cho mảng Tài chính Ngân hàng. Triển khai trong vòng 05 tháng, đã đưa vào vận hành thành công với các phân hệ: Kế toán Tổng hợp; Kế toán Tài sản; Kế toán Phải thu; Kế toán Phải trả; Quản lý Tiền.

                    </p><p>

                    Dự án mang lại giải pháp Tích hợp toàn diện với các hệ thống Kinh doanh lõi của SHB Finance là CORE, LMS và hệ thống quản lý Nhân sự để đồng bộ Master Data và sinh bút toán hạch toán về EBS.

                    </p><p>

                    Việc đưa vào vận hành thành công hệ thống ERP sẽ mang lại những lợi ích to lớn, giúp nâng cao hiệu quả quản trị và giảm thiểu chi phí hoạt động của Công ty.

                    </p>',

];

get_template_part('sections/single', 'entry-client', $section_data);





/* Section News Other --------------- */

$section_data = [

    'id' => 'ssg_client_other',

    'class' => 'ssg_client_other',

    'heading' => 'Có thể bạn quan tâm',

    'news_list' => [

        [

            'image' => THEME_IMG . '/home/home-news-1.png',

            'title' => 'Công bố nghiệm thu thành công hệ thống ERP cho Công ty Tài chính Ngân hàng TMCP Sài Gòn - Hà Nội (SHB Finance)',

            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'

        ],

        [

            'image' => THEME_IMG . '/home/home-news-2.png',

            'title' => 'Lễ công bố triển khai thành công hệ thống ERP cho Tập đoàn Hoa Sen (Hoa Sen Group)',

            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới, được sử dụng bởi hơn 29.000 doanh nghiệp toàn cầu.'

        ],

        [

            'image' => THEME_IMG . '/home/home-news-3.png',

            'title' => 'Lễ công bố triển khai thành công hệ thống ERP cho Tập đoàn Hoa Sen (Hoa Sen Group)',

            'text' => 'ERP Oracle NetSuite là hệ thống quản lý doanh nghiệp trên nền tảng điện toán đám mây số 1 thế giới.'

        ],

    ],

];

get_template_part('sections/section', 'news-other', $section_data);



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

