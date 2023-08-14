<?php



/** 

 * Class integration ACF into System for Metabox Page Options, Custom Post Types, Custom Taxonomies

 */



class WEP_ACF_Controller {

    public function __construct() {

        add_filter('acf/settings/save_json', [$this, 'wep_acf_json_save_point']);

        add_filter('acf/settings/load_json', [$this, 'wep_acf_json_load_point']);



        add_action('init', [$this, 'load_blocks'], 5);

        add_filter('acf/settings/load_json', [$this, 'load_acf_field_group']);

        add_filter('block_categories_all', [$this, 'block_categories']);

    }



    /**

     * Block categories

     * 

     * @since 1.0.0

     */

    public function block_categories($categories) {



        // Check to see if we already have a CultivateWP category

        $include = true;

        foreach ($categories as $category) {

            if ('ssg' === $category['slug']) {

                $include = false;

            }

        }



        if ($include) {

            $categories = array_merge(

                $categories,

                [

                    [

                        'slug'  => 'ssg',

                        'title' => __('Blocks SSG', 'wep'),

                    ],

                    [

                        'slug'  => 'ssg-home',

                        'title' => __('Trang chủ', 'wep'),

                    ],

                    [

                        'slug'  => 'ssg-about',

                        'title' => __('Giới thiệu', 'wep'),

                    ],

                    [

                        'slug'  => 'ssg-hiring',

                        'title' => __('Tuyển dụng', 'wep'),

                    ],

                    [

                        'slug'  => 'ssg-contact',

                        'title' => __('Liên hệ', 'wep'),

                    ],

                    [

                        'slug'  => 'ssg-dich-vu',

                        'title' => __('Dịch vụ', 'wep'),

                    ],

                    [

                        'slug'  => 'ssg-tin-tuc',

                        'title' => __('Tin tức', 'wep'),

                    ],

                ]

            );

        }



        return $categories;

    }



    /**

     * Get Blocks

     */

    public function get_blocks() {

        $theme   = wp_get_theme();

        $blocks  = get_option('ssg_blocks');

        $version = get_option('ssg_blocks_version');

        if (empty($blocks) || version_compare($theme->get('Version'), $version) || (function_exists('wp_get_environment_type') && 'production' !== wp_get_environment_type())) {

            $blocks = scandir(get_template_directory() . '/blocks/');

            $blocks = array_values(array_diff($blocks, array('..', '.', '.DS_Store', '_base-block')));



            update_option('ssg_blocks', $blocks);

            update_option('ssg_blocks_version', $theme->get('Version'));

        }

        return $blocks;

    }



    /**

     * Load ACF field groups for blocks

     */

    public function load_acf_field_group($paths) {

        $blocks = $this->get_blocks();



        foreach ($blocks as $block) {

            $paths[] = get_template_directory() . '/blocks/' . $block;

        }

        return $paths;

    }





    // check file

    function check_file_exists($filename) {

        $theme_path = get_template_directory() . '/' . $filename;

        return file_exists($theme_path);

    }



    /**

     * Load Blocks

     */

    public function load_blocks() {

        $theme  = wp_get_theme();

        $blocks = $this->get_blocks();



        $blocks_dir = [];

        foreach ($blocks as $dirname) {

            if (substr($dirname, -4) != '.php') {

                $blocks_dir[] = $dirname;

            }

        }

        $blocks = $blocks_dir;



        foreach ($blocks as $block) {

            if (file_exists(get_template_directory() . '/blocks/' . $block . '/block.json')) {

                register_block_type(get_template_directory() . '/blocks/' . $block . '/block.json');



                // load style.css

                if (file_exists(get_template_directory() . '/blocks/' . $block . '/style.css')) {

                    wp_register_style('block-' . $block, get_template_directory_uri() . '/blocks/' . $block . '/style.css', null, $theme->get('Version'));

                }



                // load script.js

                if (file_exists(get_template_directory() . '/blocks/' . $block . '/script.js')) {

                    wp_register_script('block-' . $block, get_template_directory_uri() . '/blocks/' . $block . '/script.js', null, $theme->get('Version'));

                }



                // init.php

                if (file_exists(get_template_directory() . '/blocks/' . $block . '/init.php')) {

                    include_once get_template_directory() . '/blocks/' . $block . '/init.php';

                }

            }

        }

    }



    // save local json

    public function wep_acf_json_save_point($path) {



        // update path

        $path = get_stylesheet_directory() . '/app/acf-json';



        // return

        return $path;

    }



    // load local json

    public function wep_acf_json_load_point($paths) {



        // remove original path (optional)

        unset($paths[0]);





        // append path

        $paths[] = get_stylesheet_directory() . '/app/acf-json';





        // return

        return $paths;

    }

}

