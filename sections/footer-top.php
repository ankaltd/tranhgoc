<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<div id="<?php echo $id; ?>" class="<?php echo $class; ?> row gx-0">
    <div class="col-12 col-md-3 d-flex align-items-center justify-content-center justify-content-md-start">
        <?php

        $footer_logo = get_field('wep_footer_logo', 'option');
        $footer_logo = $footer_logo ?: THEME_IMG . '/footer-logo-dark.png';

        $block_data = [
            'id' => 'wep_logo',
            'class' => 'wep_logo',
            'text' => 'WEP  Logo',
            'image' => $footer_logo,
        ];
        get_template_part('blocks/wep', 'logo', $block_data);
        ?>
    </div>


    <div class="col-12 col-md-9 text-end">

        <?php
        $lang_slug = '';
        if (function_exists('pll_current_language')) {
            $lang_slug = pll_current_language() == 'vi' ? '' : '-en';
        }

        $footer_menu = WEP_Menu::get_menu_simple_items('footer-menu' . $lang_slug);
        $footer_menu_links = array();

        foreach ($footer_menu as $item) {
            $footer_menu_links[] = array(
                'title' => $item['title'],
                'link' => $item['link']
            );
        }

        $block_data = [
            'id' => 'wep_footer_menu',
            'class' => 'wep_footer_menu',
            'menu' => $footer_menu_links
        ];
        get_template_part('blocks/wep', 'footer-menu', $block_data);
        ?>

    </div>
</div>