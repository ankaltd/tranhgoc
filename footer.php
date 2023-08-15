<?php

/* Get Options */

$ssg_footer_sections = get_field('ssg_footer_sections_show');

$ssg_footer_contact_heading = ANT_Option_Model::get_field_lang('ssg_footer_contact_heading');

$ssg_footer_contact_button = get_field('ssg_footer_contact_button_link', 'option');

$ssg_company_slogan = ANT_Option_Model::get_field_lang('ssg_company_slogan');

/* Section Contact --------------- */

if (!empty($ssg_footer_sections) && in_array('footer-section-contact', $ssg_footer_sections)) {

    $section_data = [

        'id' => 'ssg_home_contact',

        'class' => 'ssg_home_contact',

        'heading' => $ssg_footer_contact_heading,

        'button' => [

            'text' => 'Liên hệ',

            'link' => $ssg_footer_contact_button

        ]

    ];

    get_template_part('sections/section', 'contact', $section_data);
}

/* Footer Default --------------- */

$section_data = [

    'id' => 'ssg_footer',

    'class' => 'ssg_footer',

    'heading' => 'Page Footer'

];

get_template_part('sections/footer', 'default', $section_data);

wp_footer();

?>

<!-- Link js -->

<script script type="module" src="<?php echo THEME_URL; ?>/assets/ssg.js"></script>

</body>

</html>