<?php



/**

 * Template Name: Liên hệ 

 */



// Header

get_header();





/* Contact Banner ---------------  */

$section_data = [

    'id' => 'ssg_banner',

    'class' => 'ssg_banner',

    'image' => THEME_IMG . '/hiring/hiring-banner.png',

    'align' => 'start',

    'heading' => 'Liên hệ',

    'description' => 'Thay đổi không cần phải khó khăn. Chuyên môn sâu về ngành hóa chất và tư duy ưu tiên đổi mới của chúng tôi có thể giúp bạn thúc đẩy tăng trưởng bền vững.',

];

get_template_part('sections/banner', 'photo', $section_data);





/* Contact Info --------------- */

$section_data = [

    'id' => 'ssg_contact_infor',

    'class' => 'ssg_contact_infor',

    'heading' => 'Thông tin liên hệ',

    'infor_list' => [

        [

            'icon'  => THEME_IMG . '/icon_contact_address.png',

            'title'  => 'Trụ sở chính',

            'text'  => 'Tầng 2, tòa nhà Lutaco, 173A Nguyễn Văn Trỗi, Phường 11, Quận Phú Nhuận, TP. HCM',

        ],

        [

            'icon'  => THEME_IMG . '/icon_contact_phone.png',

            'title'  => 'Hãy gọi chúng tôi',

            'text'  => 'Điện thoại: <a href="tel:028 3547 2425">(84 - 28) 3547 2425</a><br>

                        Fax: <a href="tel:028 3547 2426">(84 - 28) 3547 2426</a><br>

                        Hotline: <a href="tel:0913 037 466">(84) 913 037 466</a><br>',

        ],

        [

            'icon'  => THEME_IMG . '/icon_contact_email.png',

            'title'  => 'Email cho chúng tôi',

            'text'  => '<a href="mail:contact@ssg.vn">contact@ssg.vn</a>',

        ],

    ]

];

get_template_part('sections/contact', 'infor', $section_data);



/* Contact Form --------------- */

$section_data = [

    'id' => 'ssg_contact_form',

    'class' => 'ssg_contact_form',

    'heading' => 'Gửi thông tin',

    'description' => 'Requests, your suggestions will always be our record and reply as soon as possible. We are always ready to serve you with morale and the highest responsibility. Please contact us anytime at the address above or the form below:',

];

get_template_part('sections/contact', 'form', $section_data);



/* Contact Map --------------- */

$section_data = [

    'id' => 'ssg_contact_map',

    'class' => 'ssg_contact_map',

    'heading' => 'Bản đồ',

    'image' => THEME_IMG . '/contact/contact-map.png',

    'map' => 'Google Map Scripts'



];

get_template_part('sections/contact', 'map', $section_data);



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

