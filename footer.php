<?php

/* Get Options */

$wep_footer_sections = get_field('wep_footer_sections_show');

$wep_footer_contact_heading = WEP_Option_Model::get_field_lang('wep_footer_contact_heading');

$wep_footer_contact_button = get_field('wep_footer_contact_button_link', 'option');

$wep_company_slogan = WEP_Option_Model::get_field_lang('wep_company_slogan');

/* Section Contact --------------- */

if (!empty($wep_footer_sections) && in_array('footer-section-contact', $wep_footer_sections)) {

    $section_data = [

        'id' => 'wep_home_contact',

        'class' => 'wep_home_contact',

        'heading' => $wep_footer_contact_heading,

        'button' => [

            'text' => 'Liên hệ',

            'link' => $wep_footer_contact_button

        ]

    ];

    get_template_part('sections/section', 'contact', $section_data);
}

/* Footer Default --------------- */

$section_data = [

    'id' => 'wep_footer',

    'class' => 'wep_footer',

    'heading' => 'Page Footer'

];

get_template_part('sections/footer', 'default', $section_data);

wp_footer();

?>

<!-- Link js -->

<script script type="module" src="<?php echo THEME_URL; ?>/assets/wep.js"></script>

</body>

</html>