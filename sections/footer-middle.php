<?php
extract($args);

$lang_slug = '';
if (function_exists('pll_current_language')) {
    $lang_slug = pll_current_language() == 'vi' ? '' : '-en';
}
?>

<!-- <?php echo $id; ?> -->
<div id="<?php echo $id; ?>" class=" <?php echo $class; ?> row gx-0">
    <div class="col col-12 col-md-4">
        <?php

        $service_menu = WEP_Menu::get_menu_simple_items('menu-service' . $lang_slug);
        $service_menu_links = array();

        foreach ($service_menu as $item) {
            $service_menu_links[] = array(
                'title' => $item['title'],
                'link' => $item['link']
            );
        }

        $block_data = [
            'id' => 'ssg_footer_service',
            'class' => 'ssg_footer_service',
            'inline_styles' => '',
            'links' => $service_menu_links,
        ];
        get_template_part('blocks/ssg', 'quick-links', $block_data);
        ?>
    </div>
    <div class="col col-12 col-md-4">
        <?php

        $solution_menu = WEP_Menu::get_menu_simple_items('menu-solution' . $lang_slug);
        $solution_menu_links = array();

        foreach ($solution_menu as $item) {
            $solution_menu_links[] = array(
                'title' => $item['title'],
                'link' => $item['link']
            );
        }

        $block_data = [
            'id' => 'ssg_footer_solution',
            'class' => 'ssg_footer_solution',
            'inline_styles' => 'display: flex;flex-basis: 50%;',
            'links' => $solution_menu_links
        ];

        get_template_part('blocks/ssg', 'quick-links', $block_data);
        ?>
    </div>
    <div class="col col-12 col-md-4">
        <?php

        $company_address = WEP_Option_Model::get_field_lang('ssg_company_address');
        $company_address = $company_address ?: '<p>Tầng 2, tòa nhà Lutaco, 173A Nguyễn Văn Trỗi, Phường 11, Quận Phú Nhuận, TP. HCM</p>
        <p>Điện thoại: <strong>(84 - 28) 3547 2425</strong></p>
        <p>Fax: <strong>(84 - 28) 3547 2426</strong></p>
        <p>Hotline: <strong>(84) 913 037 466</strong></p>
        <p>E-mail Us: <strong>contact@ssg.vn</strong></p>';


        $block_data = [
            'id' => 'ssg_info',
            'class' => 'ssg_info',
            'text' => $company_address,
        ];
        get_template_part('blocks/ssg', 'html-text', $block_data);
        ?>
    </div>
</div>