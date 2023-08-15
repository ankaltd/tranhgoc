<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<div id="<?php echo $id; ?>" class="<?php echo $class; ?> row gx-0">
    <div class="col-md-6 text-center text-md-start">
        <?php

        $company_copyright = WEP_Option_Model::get_field_lang('wep_company_copyright');

        $block_data = [
            'id' => 'wep_copyright',
            'class' => 'wep_copyright',
            'text' => $company_copyright,
        ];
        get_template_part('blocks/wep', 'paragraph', $block_data);
        ?>

    </div>
    <div class="col-md-6 text-center text-md-end">

        <?php

        $company_socials = get_field('wep_footer_social_icon_list', 'option');
        $company_socials_list = array();

        if ($company_socials) {
            foreach ($company_socials as $icon) {
                extract($icon);
                $company_socials_list[] = array(
                    'icon' => $social_icon_image,
                    'text' => $social_icon_title,
                    'link' => $social_icon_link,
                );
            }
        }

        $block_data = [
            'id' => 'wep_social_icons',
            'class' => 'wep_social_icons',
            'icons' => $company_socials_list,
        ];
        get_template_part('blocks/wep', 'social-icons', $block_data);
        ?>
    </div>
</div>

<?php
$block_data = [
    'id' => 'wep_gototop',
    'class' => 'wep_gototop',
];
get_template_part('blocks/wep', 'footer-gototop', $block_data);
?>