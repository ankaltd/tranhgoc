<?php



/**

 * Template Name: Chi tiết tin tức 

 */

// Header

get_header();



?>



<div class="container">

    <div class="row">

        <div class="col-9">

            <?php

            /* Section Entry Post --------------- */

            $section_data = [

                'id' => 'wep_entry_single',

                'class' => 'wep_entry_single',

                'heading' => 'Công bố nghiệm thu thành công hệ thống ERP cho Công ty Tài chính Ngân hàng TMCP Sài Gòn - Hà Nội (SHB Finance) - Ngày 20/08/2021',

                'summary' => 'Công bố nghiệm thu thành công hệ thống ERP cho Công ty Tài chính Ngân hàng TMCP Sài Gòn - Hà Nội (SHB Finance)',

                'date' => '13 Tháng 3, 2023',

                'image' => THEME_IMG . '/detail/detail.png',

                'content' => '<p>

                    Buổi nghiệm thu tổng thể dự án ERP cho Công ty Tài chính SHB Finance đã diễn ra vào ngày 20/08/2021.</p><p>

                    SHB Finance hiện có mạng lưới dịch vụ bao phủ 46 tỉnh thành phố trọng điểm, tập trung cung cấp dịch vụ cho vay tiêu dùng cho các nhóm khách hàng đại chúng với mức thu nhập trung bình từ 3 triệu đồng như CBNV, công nhân, người kinh doanh nhỏ lẻ và các khách hàng khác có thể cung cấp các hóa đơn dịch vụ. Các khoản vay nhằm phục vụ nhu cầu thiết yếu của đông đảo người dân có thu nhập khiêm tốn, hiện đang chiếm tới gần 50% nhu cầu vay tiêu dùng nói chung.

                    </p><p>

                    Dự án triển khai Oracle Financials với giải pháp Best Practice của WEP  cho mảng Tài chính Ngân hàng. Triển khai trong vòng 05 tháng, đã đưa vào vận hành thành công với các phân hệ: Kế toán Tổng hợp; Kế toán Tài sản; Kế toán Phải thu; Kế toán Phải trả; Quản lý Tiền.

                    </p><p>

                    Dự án mang lại giải pháp Tích hợp toàn diện với các hệ thống Kinh doanh lõi của SHB Finance là CORE, LMS và hệ thống quản lý Nhân sự để đồng bộ Master Data và sinh bút toán hạch toán về EBS.

                    </p><p>

                    Việc đưa vào vận hành thành công hệ thống ERP sẽ mang lại những lợi ích to lớn, giúp nâng cao hiệu quả quản trị và giảm thiểu chi phí hoạt động của Công ty.

                    </p>',

                'source' => '(Nguồn: https://www.shbfinance.com.vn)'

            ];

            get_template_part('sections/single', 'entry', $section_data);

            ?>

        </div>

        <div class="col-3">

            <?php

            /* Section Sidebar --------------- */

            $section_data = [

                'id' => 'wep_sidebar',

                'class' => 'wep_sidebar',

            ];

            get_template_part('sections/sidebar', 'default', $section_data);

            ?>

        </div>

    </div>

</div>



<?php



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

