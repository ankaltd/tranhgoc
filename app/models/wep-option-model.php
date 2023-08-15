<?php

/** 
 * Class Option Model
 */

class WEP_Option_Model {

    // Content options
    private static $content_options = [
        'wep_content_number'                => 5,
        'wep_content_order'                 => 'asc',
        'wep_content_with_select'           => false,
        'wep_content_show_grid'             => false,
        'wep_content_selected'              => array(),
        'wep_content_show_elements'         => array(),
    ];

    // Section default
    private static $section_options = [
        'wep_section_id'                    => 'wep_home_service',
        'wep_section_classes'               => 'wep_home_service',
        'wep_section_custom_style'          => false,
        'wep_section_top_space'             => 100,
        'wep_section_bottom_space'          => 100,
        'wep_section_custom_css'            => '',
        'wep_section_is_anchor'             => false,
        'wep_section_effect'                => 'none',
        'wep_section_item_effect'           => false,
        'wep_section_effect_stay'           => true,
        'wep_section_effect_heading_desc'   => 'none',
        'wep_section_effect_item'           => 'none',
        'wep_section_effect_duration'       => 500,
        'wep_section_effect_delay'          => 100,
        'wep_section_effect_delay_interval' => 100,
    ];

    // Heading default
    private static $heading_options = [
        'wep_heading_text'                  => 'Dịch vụ',
        'wep_heading_color'                 => '#132239',
        'wep_heading_tag'                   => 'h2',
        'wep_heading_align'                 => 'justify-content-center',
        'wep_heading_margin_bottom'         => 'default',
    ];

    // Description default
    private static $description_options = [
        'wep_description_text'              => '',
        'wep_description_color'             => '',
        'wep_description_tag'               => 'p',
        'wep_description_align'             => 'text-center',
        'wep_description_margin_bottom'     => 'default',
        'wep_description_font_size'         => 15,
        'wep_description_line_height'       => 1.7,
    ];

    // Background default
    private static $background_options = [
        'wep_background_src'                => '',
        'wep_background_attachment'         => false,
        'wep_background_color'              => 'inherit',
        'wep_background_align_x'            => 'center',
        'wep_background_align_y'            => 'center',
        'wep_background_size'               => 'auto',
        'wep_background_repeat'             => 'no-repeat',
        'wep_background_dark'               => false,
    ];

    // Image Single default
    private static $image_options = [
        'wep_image_src'               => 'https://tranhgoc.test/wp-content/themes/tranhgoc/assets/images/about/about-value-1.png',
        'wep_image_link'              => '#',
        'wep_image_target'            => false,
        'wep_image_youtube_video'     => false,
        'wep_image_youtube_link'      => 'https://www.youtube.com/watch?v=2-VJKjxb4pU',
    ];

    // Video Single default
    private static $video_options = [
        'wep_video_src'               => '',
        'wep_video_youtube_video'     => false,
        'wep_video_youtube_link'      => 'https://www.youtube.com/watch?v=2-VJKjxb4pU',
        'wep_video_responsive'        => false,
        'wep_video_alignment'         => 'justify-content-center',
        'wep_video_width'             => 800,
    ];

    // News default
    private static $news_options = [
        'wep_news_lastest'                  => false,
        'wep_news_featured_select'          => array(),
        'wep_news_categories'               => 0,
        'wep_news_categories_link'          => false,
        'wep_news_show_element'             => array(),
        'wep_news_total'                    => 6,
        'wep_news_columns'                  => 3,
        'wep_news_categories_filter'        => false,
        'wep_news_page_navigation'          => 'none',

    ];

    // get option with language
    static function get_field_lang($field_name, $option = true) {

        // ngôn ngữ khác ngôn ngữ chính vi thì sẽ là tiếng anh
        if (function_exists('pll_current_language')) {
            $lang_slug = pll_current_language() == 'vi' ? '' : '_en';
        } else {
            $lang_slug = '';
        }

        // lấy tên của biến option theo ngôn ngữ option_name_[lang]
        $lang_field_name = $field_name . $lang_slug;

        // lấy giá trị theo trường option (global), nếu không là invidual page
        $result = $option ? get_field($field_name, 'option') : get_field($field_name);

        // lấy giá trị theo option và theo ngôn ngữ
        $result_lang = $option ? get_field($lang_field_name, 'option') : get_field($lang_field_name);

        // nếu cung cấp trường ngôn ngữ sẽ lấy theo ngôn ngữ, nếu không bất cứ ngôn ngữ nào cũng lấy option gốc ngôn ngữ mặc định 
        $result = $result_lang ? $result_lang : $result;

        return $result;
    }

    // get news option
    static function get_news_options() {
        return self::$news_options;
    }

    // get content option
    static function get_content_options() {
        return self::$content_options;
    }

    // get section option
    static function get_section_options() {
        return self::$section_options;
    }

    // get heading option
    static function get_heading_options() {
        return self::$heading_options;
    }

    // get description option
    static function get_description_options() {
        return self::$description_options;
    }

    // get background option
    static function get_background_options() {
        return self::$background_options;
    }

    // get image option
    static function get_image_options() {
        return self::$image_options;
    }

    // get video option
    static function get_video_options() {
        return self::$video_options;
    }

    // List section by template
    private $section_by_template = array(
        'slider/head-carousel' => 'header_photo',
        'slider/head-banner' => 'header_photo',
    );

    // Get section by template
    public function get_section_by_template($section_template) {

        if (array_key_exists($section_template, $this->section_by_template)) {
            return $this->section_by_template[$section_template];
        } else {
            return 'header_photo';
        }
    }

    /*  
    * Using from render.php blocks
        $fields = array(
            'key1' => 'default1',
            'key2' => 'default2',
            // ...
        );

        $option = WEP_Option_Model::get_field_values($fields);

        echo $option['key1']; // In ra giá trị của key1
        echo $option['key2']; // In ra giá trị của key2
    */

    // Get acf block field values from array with default value
    static function get_field_values($fields, $in_option = false) {
        $result = array();
        $fiels_false_arr = array('wep_image_list');

        foreach ($fields as $key => $default) {

            // check get global options of invidual page options
            if ($in_option) {
                $value = get_field($key, 'option');
            } else {
                $value = get_field($key);
            }

            if (is_null($value) || (in_array($key, $fiels_false_arr) && $value === false)) {
                $result[$key] = $default;
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }

    // Get feature url size from url image
    static function get_thumbnail_url($image_url, $image_size_name = 'thumbnail') {

        $thumbnail_url = $image_url;

        // Lấy kích thước từ danh sách image size
        $image_sizes = wp_get_registered_image_subsizes();
        $thumbnail_size = $image_sizes[$image_size_name];

        // Kiểm tra xem attachment có tồn tại không
        if ($thumbnail_size) {
            // Lấy thông tin kích thước thumbnail
            $file_with_size = '-' . $thumbnail_size['width'] . 'x' . $thumbnail_size['height'] . '.';

            $thumbnail_url = str_replace('.', $file_with_size, $image_url);

            // Tìm vị trí cuối cùng của dấu "."
            $dot_position = strrpos($image_url, '.');

            if ($dot_position !== false) {
                // Ghép chuỗi "-widthxheight." vào trước dấu "."
                $thumbnail_url = substr_replace($image_url, $file_with_size, $dot_position, 1);
            }
        }

        return $thumbnail_url;
    }

    /** 
     * Get option by section_name and layout_name 
     * 
     */

    // Get option of current for template - ACF get fields
    public function get_section_option($section_template) {

        $section_option = array();
        $section_option_child_1 = array();

        if (($section_template != '') || ($section_template)) {
            // Get section name
            $section_name = $this->option_model->get_section_by_template($section_template);

            // Get option in section name
            if (have_rows($section_name)) {

                $section_index = 1;
                while (have_rows($section_name)) : the_row();

                    // Case: photo_carousel layout.
                    if (get_row_layout() == 'photo_carousel') :
                        $section_option_child_1['section_type'] = 'photo_carousel';
                        $section_option_child_2 = array();

                        $slider_index = 1;
                        while (have_rows('header_slider_photos')) : the_row();
                            $section_option_child_2['slider_photo_image'] = get_sub_field('slider_photo_image');
                            $section_option_child_2['slider_photo_text'] = get_sub_field('slider_photo_text');
                            $section_option_child_2['slider_photo_image'] = get_sub_field('slider_photo_image');
                            $section_option_child_3 = array();

                            $button_index = 1;
                            while (have_rows('slider_photo_button_add')) : the_row();
                                $section_option_child_3['slider_photo_button_type'] = get_sub_field('slider_photo_button_type');
                                $section_option_child_3['slider_photo_button_text'] = get_sub_field('slider_photo_button_text');
                                $section_option_child_3['slider_photo_button_link'] = get_sub_field('slider_photo_button_link');
                                $section_option_child_3['slider_photo_button_title'] = get_sub_field('slider_photo_button_title');
                                $section_option_child_3['slider_photo_button_arrow'] = get_sub_field('slider_photo_button_arrow');

                                // Level 3 is child of $section_option_level2
                                $section_option_child_2['button_' . $button_index++] = $section_option_child_3;
                            endwhile;

                            // Level 2 is child of $section_option_level1
                            $section_option_child_1['slider_' . $slider_index++] = $section_option_child_2;

                        endwhile;

                    // Case: photo_banner layout.
                    elseif (get_row_layout() == 'photo_banner') :
                        $section_option_child_1['section_type'] = 'photo_banner';

                        while (have_rows('header_slider_photos')) : the_row();
                            $section_option_child_2['section_item'] = the_sub_field('banner_photo_image');
                            $section_option_child_2['section_item'] = the_sub_field('banner_photo_text');
                            $section_option_child_2['section_item'] = the_sub_field('banner_photo_description');
                        endwhile;

                    // // Case: header_background layout.
                    elseif (get_row_layout() == 'header_background') :
                        $section_option_child_1['section_type'] = 'header_background';

                        while (have_rows('header_slider_photos')) : the_row();
                            $section_option_child_1['section_item'] = the_sub_field('header_background_image');
                        endwhile;

                    endif;

                    // Level 1 is child of $section_option
                    $section_option['section_' . $section_index++] = $section_option_child_1;

                endwhile;
            }
        }

        return $section_option;
    }
}
