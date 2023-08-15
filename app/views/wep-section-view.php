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
        if ($ssg_section_custom_style) {
            $section_top_space = sprintf('padding-top: %dpx;', $ssg_section_top_space);
            $section_bottom_space = sprintf('padding-bottom: %dpx;', $ssg_section_bottom_space);
        }

        // CSS       

        $bg_section_dark = $ssg_background_dark ? 'ssg_bg_dark' : '';
        $background_color = ($ssg_background_color != false) && ($ssg_background_color != '')  ? 'background-color:' . $ssg_background_color . ';' : '';
        $bg_section_fixed = $ssg_background_attachment ? 'background-attachment:fixed;' : '';

        $bg_section_css = sprintf(
            '%s background-image: url(%s); %s background-position-x: %s; background-position-y: %s; background-repeat: %s; background-size: %s;',
            $background_color,
            $ssg_background_src,
            $bg_section_fixed,
            $ssg_background_align_x,
            $ssg_background_align_y,
            $ssg_background_repeat,
            $ssg_background_size
        );

        // Effect
        $item_stay_attr = $ssg_section_effect_stay ? 'data-aos-once="true"' : 'data-aos-once="false"';
        $section_effect = $ssg_section_effect == 'ssg_section_effect' ? '' : sprintf('%s data-aos="%s" data-aos-offset="200"', $item_stay_attr, $ssg_section_effect);
        $section_track_this = $ssg_section_is_anchor ? 'trackThis' : '';
        printf(
            '<section id="%s" class="%s %s %s %s" %s style="%s %s %s %s">',
            $ssg_section_id,
            $ssg_section_classes,
            $input_classes,
            $bg_section_dark,
            $section_track_this,
            $section_effect,
            $bg_section_css,
            $section_top_space,
            $section_bottom_space,
            $ssg_section_custom_css
        );
    }

    // Render Button
    static function render_button($option) {

        // split array to vars
        extract($option);

        $button_target = $ssg_button_target ? 'target="_blank"' : '';
        $button_style = ($ssg_button_style == 'default') ? '' : $ssg_button_style;

        printf(
            '<a href="%s" class="ssg_button %s" %s>%s</a>',
            $ssg_button_link,
            $button_style,
            $button_target,
            $ssg_button_name
        );
    }

    // Render Section Heading and Description
    static function render_section_heading_desc($option) {

        // split array to vars
        extract($option);

        $heading_color = $ssg_heading_color || ($ssg_heading_color == '') ? '' : 'color:' . $ssg_heading_color . ';';
        $heading_margin_bottom = ($ssg_heading_margin_bottom == 'default') ? '' : $ssg_heading_margin_bottom;
        $text_align = 'text-start';
        if ($ssg_heading_align == 'justify-content-center') {
            $text_align = 'text-center';
        };
        if ($ssg_heading_align == 'justify-content-end') {
            $text_align = 'text-end';
        };

        // Effects Heading
        $heading_effects = '';        
        $item_stay_attr = $ssg_section_effect_stay ? 'data-aos-once="true"' : 'data-aos-once="false"';
        if ($ssg_section_item_effect) {
            $heading_effects = sprintf('%s data-aos="%s" data-aos-duration="%s" data-aos-delay="%s"', $item_stay_attr, $ssg_section_effect_heading_desc, $ssg_section_effect_duration, $ssg_section_effect_delay);
        }

        printf(
            '<%s class="ssg_heading %s %s %s" %s style="%s">%s</%s>',
            $ssg_heading_tag,
            $ssg_heading_align,
            $text_align,
            $heading_margin_bottom,
            $heading_effects,
            $heading_color,
            $ssg_heading_text,
            $ssg_heading_tag
        );

        // Effects Description
        $description_effects = '';        
        $description_delay = $ssg_section_effect_delay + $ssg_section_effect_delay_interval;
        if ($ssg_section_item_effect) {
            $description_effects = sprintf('%s data-aos="%s" data-aos-duration="%s" data-aos-delay="%s"', $item_stay_attr, $ssg_section_effect_heading_desc, $ssg_section_effect_duration, $description_delay);
        }

        if ($ssg_description_text != '') {
            $description_color = $ssg_description_color || ($ssg_description_color == '')  ? '' : 'color:' . $ssg_description_color . ';';
            $description_margin_bottom = ($ssg_description_margin_bottom == 'default') ? '' : $ssg_description_margin_bottom;
            printf(
                '<%s class="ssg_description %s %s" %s style="%s line-height:%s; font-size:%spx">%s</%s>',
                $ssg_description_tag,
                $ssg_description_align,
                $description_margin_bottom,
                $description_effects,
                $description_color,
                $ssg_description_line_height,
                $ssg_description_font_size,
                $ssg_description_text,
                $ssg_description_tag
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
        $item_stay_attr = $ssg_section_effect_stay ? 'data-aos-once="true"' : 'data-aos-once="false"';
        $item_delay = $show_order * $ssg_section_effect_delay_interval + $ssg_section_effect_delay_interval * $run_order;
        if ($ssg_section_item_effect) {
            $item_effects = sprintf('%s data-aos="%s" data-aos-duration="%s" data-aos-delay="%s"', $item_stay_attr, $ssg_section_effect_item, $ssg_section_effect_duration, $item_delay);
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
