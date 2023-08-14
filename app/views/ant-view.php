<?php

/**
 * Class base of View
 *
 */

if (!defined('ABSPATH')) return;

class ANT_View {

    static $_template_dir;

    /**
     * 
     * Init some environment
     *
     * @return void
     * 
     */
    static function init() {
        self::$_template_dir = apply_filters('ANT_Part_View_Part_Dir', '/parts');
    }

    static function get_template_dir() {
        return self::$_template_dir;
    }

    // return class for button
    static function get_button_classes($button_type) {
        if ($button_type == 'gradient') {
            return 'ssg_button ssg_button--readmore';
        }

        if ($button_type == 'outline') {
            return 'ssg_button ssg_button--readmore ssg_button--outline';
        }

        if ($button_type == 'white') {
            return 'ssg_button ssg_button--readmore ssg_button--white';
        }

        if ($button_type == 'link') {
            return 'ssg_link ssg_link--readmore';
        }
    }

    // return class for button color
    static function get_button_color_classes($button_type) {
        if ($button_type == 'gradient') {
            return 'white';
        }

        // else gradient
        return 'gradient';
    }

    /**
     * 
     * Load template file
     *
     * @return void
     * 
     */
    static function make_view($view_name, $slug = false, $data = array(), $echo = FALSE, $template_dir = false, $type = '.php') {

        if (!empty($template_dir)) self::$_template_dir = apply_filters('ANT_Part_View_Part_Dir', '/' . $template_dir);
        else self::$_template_dir = apply_filters('ANT_Part_View_Part_Dir', '/parts');
        $template_path = get_template_directory();
        $stylesheet_path = get_stylesheet_directory();

        if ($slug) {
            $path = $stylesheet_path . self::$_template_dir . '/' . $view_name . '-' . $slug . $type;
            if ($template_path != $stylesheet_path && is_file($path)) $template = $path;
            else $template =  get_template_directory() . self::$_template_dir . '/' . $view_name . '-' . $slug . $type;
            if (!is_file($template)) {
                $path = $stylesheet_path . self::$_template_dir . '/' . $view_name . $type;
                if ($template_path != $stylesheet_path && is_file($path)) $template = $path;
                else $template = get_template_directory() . self::$_template_dir . '/' . $view_name . $type;
            }
        } else {
            $path = $stylesheet_path . self::$_template_dir . '/' . $view_name . $type;
            if ($template_path != $stylesheet_path && is_file($path)) $template = $path;
            else $template = get_template_directory() . self::$_template_dir . '/' . $view_name . $type;
        }

        // Allow View be filter
        $template = apply_filters('ant_load_view', $template, $view_name, $slug);

        if ($data) extract($data);

        if (file_exists($template)) {

            if (!$echo) {

                ob_start();
                include $template;
                return @ob_get_clean();
            } else

                include $template;
        }
    }

    /** Render View */
    static function show_view($view_name, $slug = false, $data = array(), $echo = TRUE, $template_dir = false, $type = '.php') {

        if (!empty($template_dir)) self::$_template_dir = apply_filters('ANT_Part_View_Part_Dir', '/' . $template_dir);
        else self::$_template_dir = apply_filters('ANT_Part_View_Part_Dir', '/parts');
        $template_path = get_template_directory();
        $stylesheet_path = get_stylesheet_directory();

        if ($slug) {
            $path = $stylesheet_path . self::$_template_dir . '/' . $view_name . '-' . $slug . $type;
            if ($template_path != $stylesheet_path && is_file($path)) $template = $path;
            else $template =  get_template_directory() . self::$_template_dir . '/' . $view_name . '-' . $slug . $type;
            if (!is_file($template)) {
                $path = $stylesheet_path . self::$_template_dir . '/' . $view_name . $type;
                if ($template_path != $stylesheet_path && is_file($path)) $template = $path;
                else $template = get_template_directory() . self::$_template_dir . '/' . $view_name . $type;
            }
        } else {
            $path = $stylesheet_path . self::$_template_dir . '/' . $view_name . $type;
            if ($template_path != $stylesheet_path && is_file($path)) $template = $path;
            else $template = get_template_directory() . self::$_template_dir . '/' . $view_name . $type;
        }

        // Allow View be filter
        $template = apply_filters('ant_load_view', $template, $view_name, $slug);

        if ($data) extract($data);

        if (file_exists($template)) {

            if (!$echo) {

                ob_start();
                include $template;
                return @ob_get_clean();
            } else

                include $template;
        }
    }

    /** Display view with option and data*/
    static function display_view($view_name, $option = array(), $data = array(), $slug = false, $echo = TRUE, $template_dir = false, $type = '.php') {

        // Display content view - CONTINUE CODE HERE
        if (!empty($template_dir)) self::$_template_dir = apply_filters('ANT_Part_View_Part_Dir', '/' . $template_dir);
        else self::$_template_dir = apply_filters('ANT_Part_View_Part_Dir', '/parts');
        $template_path = get_template_directory();
        $stylesheet_path = get_stylesheet_directory();

        if ($slug) {
            $path = $stylesheet_path . self::$_template_dir . '/' . $view_name . '-' . $slug . $type;
            if ($template_path != $stylesheet_path && is_file($path)) $template = $path;
            else $template =  get_template_directory() . self::$_template_dir . '/' . $view_name . '-' . $slug . $type;
            if (!is_file($template)) {
                $path = $stylesheet_path . self::$_template_dir . '/' . $view_name . $type;
                if ($template_path != $stylesheet_path && is_file($path)) $template = $path;
                else $template = get_template_directory() . self::$_template_dir . '/' . $view_name . $type;
            }
        } else {
            $path = $stylesheet_path . self::$_template_dir . '/' . $view_name . $type;
            if ($template_path != $stylesheet_path && is_file($path)) $template = $path;
            else $template = get_template_directory() . self::$_template_dir . '/' . $view_name . $type;
        }

        // Allow View be filter
        $template = apply_filters('ant_load_view', $template, $view_name, $slug);

        if ($data) extract($data);
        if ($option) extract($option);

        if (file_exists($template)) {

            if (!$echo) {

                ob_start();
                include $template;
                return @ob_get_clean();
            } else

                include $template;
        }
    }
}
