<?php

/** 
 * Class for one Section View
 */

class WEP_Section_View {

    // Render với dữ liệu đầu vào
    public function render($template, $option, $data) {

        if (($template) && is_array($option) && is_array($data)) {

            // Hiển thị phần template
            WEP_Part_View::display_view($template, $option, $data);
        }
    }

    // Render Close Tag
    static function render_close_tag($tag_name = 'section') {
        printf('</%s>', $tag_name);
    }

    // Render Section Tag Style
    static function render_section_tag($option, $input_classes = '') {

        // split array to vars
        extract($option);

        // Spacing
        $section_top_space = '';
        $section_bottom_space = '';
        if ($wep_section_custom_style) {
            $section_top_space = sprintf('padding-top: %dpx;', $wep_section_top_space);
            $section_bottom_space = sprintf('padding-bottom: %dpx;', $wep_section_bottom_space);
        }

        // CSS       

        $bg_section_dark = $wep_background_dark ? 'wep_bg_dark' : '';
        $background_color = ($wep_background_color != false) && ($wep_background_color != '')  ? 'background-color:' . $wep_background_color . ';' : '';
        $bg_section_fixed = $wep_background_attachment ? 'background-attachment:fixed;' : '';

        $bg_section_css = sprintf(
            '%s background-image: url(%s); %s background-position-x: %s; background-position-y: %s; background-repeat: %s; background-size: %s;',
            $background_color,
            $wep_background_src,
            $bg_section_fixed,
            $wep_background_align_x,
            $wep_background_align_y,
            $wep_background_repeat,
            $wep_background_size
        );

        // Effect
        $item_stay_attr = $wep_section_effect_stay ? 'data-aos-once="true"' : 'data-aos-once="false"';
        $section_effect = $wep_section_effect == 'wep_section_effect' ? '' : sprintf('%s data-aos="%s" data-aos-offset="200"', $item_stay_attr, $wep_section_effect);
        $section_track_this = $wep_section_is_anchor ? 'trackThis' : '';
        printf(
            '<section id="%s" class="%s %s %s %s" %s style="%s %s %s %s">',
            $wep_section_id,
            $wep_section_classes,
            $input_classes,
            $bg_section_dark,
            $section_track_this,
            $section_effect,
            $bg_section_css,
            $section_top_space,
            $section_bottom_space,
            $wep_section_custom_css
        );
    }

    // Render Button
    static function render_button($option) {

        // split array to vars
        extract($option);

        $button_target = $wep_button_target ? 'target="_blank"' : '';
        $button_style = ($wep_button_style == 'default') ? '' : $wep_button_style;

        printf(
            '<a href="%s" class="wep_button %s" %s>%s</a>',
            $wep_button_link,
            $button_style,
            $button_target,
            $wep_button_name
        );
    }

    // Render Section Heading and Description
    static function render_section_heading_desc($option) {

        // split array to vars
        extract($option);

        $heading_color = $wep_heading_color || ($wep_heading_color == '') ? '' : 'color:' . $wep_heading_color . ';';
        $heading_margin_bottom = ($wep_heading_margin_bottom == 'default') ? '' : $wep_heading_margin_bottom;
        $text_align = 'text-start';
        if ($wep_heading_align == 'justify-content-center') {
            $text_align = 'text-center';
        };
        if ($wep_heading_align == 'justify-content-end') {
            $text_align = 'text-end';
        };

        // Effects Heading
        $heading_effects = '';        
        $item_stay_attr = $wep_section_effect_stay ? 'data-aos-once="true"' : 'data-aos-once="false"';
        if ($wep_section_item_effect) {
            $heading_effects = sprintf('%s data-aos="%s" data-aos-duration="%s" data-aos-delay="%s"', $item_stay_attr, $wep_section_effect_heading_desc, $wep_section_effect_duration, $wep_section_effect_delay);
        }

        printf(
            '<%s class="wep_heading %s %s %s" %s style="%s">%s</%s>',
            $wep_heading_tag,
            $wep_heading_align,
            $text_align,
            $heading_margin_bottom,
            $heading_effects,
            $heading_color,
            $wep_heading_text,
            $wep_heading_tag
        );

        // Effects Description
        $description_effects = '';        
        $description_delay = $wep_section_effect_delay + $wep_section_effect_delay_interval;
        if ($wep_section_item_effect) {
            $description_effects = sprintf('%s data-aos="%s" data-aos-duration="%s" data-aos-delay="%s"', $item_stay_attr, $wep_section_effect_heading_desc, $wep_section_effect_duration, $description_delay);
        }

        if ($wep_description_text != '') {
            $description_color = $wep_description_color || ($wep_description_color == '')  ? '' : 'color:' . $wep_description_color . ';';
            $description_margin_bottom = ($wep_description_margin_bottom == 'default') ? '' : $wep_description_margin_bottom;
            printf(
                '<%s class="wep_description %s %s" %s style="%s line-height:%s; font-size:%spx">%s</%s>',
                $wep_description_tag,
                $wep_description_align,
                $description_margin_bottom,
                $description_effects,
                $description_color,
                $wep_description_line_height,
                $wep_description_font_size,
                $wep_description_text,
                $wep_description_tag
            );
        }
    }

    // Render AOS for each item
    /** 
     * @show_order : Thứ tự hiển thị của khối thành phần item groups
     * @run_order  : Thứ tự thực sự bắt đầu chạy của thành phần item, thường là stt trong nhóm
     **/      
    static function render_item_aos($option, $show_order, $run_order) {
        // split array to vars
        extract($option);

        $item_effects = '';
        $item_stay_attr = $wep_section_effect_stay ? 'data-aos-once="true"' : 'data-aos-once="false"';
        $item_delay = $show_order * $wep_section_effect_delay_interval + $wep_section_effect_delay_interval * $run_order;
        if ($wep_section_item_effect) {
            $item_effects = sprintf('%s data-aos="%s" data-aos-duration="%s" data-aos-delay="%s"', $item_stay_attr, $wep_section_effect_item, $wep_section_effect_duration, $item_delay);
        }

        printf($item_effects);
    }

    // Show hint for template
    public function show_hint($template) {

        global $current_page;

        if (SHOW_HINT) {
            $text = '<div class="wep_template_hint"><span class="wep_template_hint__content">';
            $text .= $current_page;
            $text .= '@';
            $text .= WEP_Part_View::get_template_dir();
            $text .= '/' . $template;
            $text .= '.php</span></div>';
            echo $text;
        }
    }
}
