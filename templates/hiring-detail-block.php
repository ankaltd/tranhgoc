<?php



/**

 * Template Name: Chi tiết tuyển dụng 

 */





// Header

get_header();



/* Hiring Banner ---------------  */

$section_data = [

    'id' => 'wep_banner',

    'class' => 'wep_banner',

    'image' => THEME_IMG . '/hiring/hiring-banner.png',

    'heading' => 'Tuyển dụng',

];

get_template_part('sections/banner', 'photo', $section_data);



/* Section Entry Hiring --------------- */

$section_data = [

    'id' => 'wep_hiring_single',

    'class' => 'wep_hiring_single',

    'heading' => 'Account Manager (Digital Marketing)',

    'location' => 'Hà Nội',

    'salary' => 'Thỏa thuận',

    'date' => '15/05/2023',

    'workform' => 'Toàn thời gian',

    'description' => '– Quản lý kỳ vọng của khách hàng, chịu trách nhiệm về kết quả cuối cùng của các dự án; phản hồi nhanh chóng thắc mắc của khách hàng; hướng dẫn, dẫn dắt nhân sự triển khai dự án một cách suôn sẻ và hiệu quả, đồng thời đạt được lợi nhuận kỳ vọng cho công ty.<br>

                        – Chịu trách nhiệm quản lý, đào tạo và tạo động lực cho nhân sự trong phòng.<br>

                        – Chịu trách nhiệm phát triển và duy trì mối quan hệ với người ra quyết định chính của khách hàng, hiểu nhu cầu và mục tiêu của khách hàng, tư vấn và tiến hành hoạt động upsale với khách hàng.<br>

                        – Phối hợp cùng BD/ Planner chuẩn bị Proposal/ Plan và tham gia pitching khách hàng.<br>

                        – Re-search về ngành để nắm bắt xu hướng thị trường.<br>

                        – Quản lý và chịu trách nhiệm KPI được giao theo tháng, quý năm.<br>

                        – Phối hợp theo dõi tiến độ thanh toán và thu hồi công nợ.',

    'requirment' => '– Có ít nhất 03 năm kinh nghiệm làm việc trong agency ở vị trí Senior Account Manager hoặc cao hơn.<br>

                        – Kỹ năng quản lý dự án tốt, có thể quản lý đồng thời nhiều dự án cùng một lúc.<br>

                        – Am hiểu chuyên sâu về ngành Digital Marketing.<br>

                        – Có khả năng thuyết trình, đàm phán và quan hệ tốt với khách hàng.<br>

                        – Phương pháp tư duy và kỹ năng giải quyết vấn đề, quản lý, phân công và quản trị công việc.<br>

                        – Tiếng Anh tốt là một lợi thế.',

    'benefit' => '– Tổng thu nhập từ : 13-16 tháng lương + thưởng KPI, up to 650 triệu VNĐ/ năm ( gồm lương cứng, thưởng hiệu quả, thưởng KPI quý/năm, lương tháng thứ 13…).<br>

                        – Review lương 6 tháng/ lần, xét duyệt dựa theo Performance , cơ chế thưởng rõ ràng .<br>

                        – Career Path minh bạch, nhiều cơ hội thăng tiến, phát triển kỹ năng chuyên sâu và thăng tiến trong công việc.<br>

                        – Làm việc trong môi trường chuyên nghiệp, uy tín, nằm trong top tập đoàn hàng đầu về Digital Marketing tại Đông Nam Á, Top 10 doanh nghiệp công nghệ 4.0 của Việt Nam, Top 500 doanh nghiệp tăng trưởng nhanh nhất Việt Nam từ 2018 – 2021.<br>

                        – Đồ ăn vặt, snack, cafe,… miễn phí cho nhân sự, gửi xe miễn phí tại tòa nhà .<br>

                        – Được đóng đầy đủ : BHXH, BHTN, BHYT, Công Đoàn,… theo quy định của nhà nước .<br>

                        – Đồng nghiệp trẻ trung, năng động, giàu kinh nghiệm, máu lửa công việc & nhiệt huyết.<br>

                        – Gói bảo hiểm sức khỏe Novaon Care cho nhân sự cấp cao .<br>

                        – Được đào tạo/ tham các khóa học trong và ngoài công ty, để đáp ứng kinh nghiệm chuyên môn kịp thời, nắm bắt xu thế thị trường .<br>

                        – Quyền lợi theo luật Lao động, và các chế độ phúc lợi riêng tại Novaon: khám sức khỏe định kì, team building, du lịch hàng năm, sinh nhật, hiếu hỉ, các sự kiện nội bộ theo từng giao đoạn trong năm…<br>

                        – Làm việc từ Thứ 2 đến Thứ 6, và 1 buổi sáng Thứ 7 đầu tháng.'

];

get_template_part('sections/single', 'entry-hiring', $section_data);





/* Section News Other --------------- */

$section_data = [

    'id' => 'wep_hirring_apply',

    'class' => 'wep_hirring_apply',

    'heading' => 'Thông tin ứng tuyển',

];

get_template_part('sections/hiring', 'apply', $section_data);



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

