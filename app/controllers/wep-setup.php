<?php



/** 

 * Setup Theme Class

 */



class WEP_Setup {

    public function __construct() {

        // On WP Init

        add_action('init', [$this, 'on_site_init']);



        // On WP admin init

        add_action('admin_init', [$this, 'on_admin_init']);



        // On WP Admin menu init

        add_action('admin_menu', [$this, 'on_make_admin_menu']);



        // Disable comments

        add_filter('comments_open', '__return_false', 20, 2);

        add_filter('pings_open', '__return_false', 20, 2);

        add_filter('comments_array', '__return_empty_array', 10, 2);



        // Allowed upload mimes

        add_action('upload_mimes', [$this, 'allowed_upload_mines']);



        // Disable Block editor for posts

        // add_filter('use_block_editor_for_post', '__return_false', 10);


        // Disable Block editor for post types

        // add_filter('use_block_editor_for_post_type', '__return_false', 10);



        // Disable "Try Guntenberg" Panel

        // remove_filter('try_gutenberg_panel', 'wp_try_gutenberg_panel');



        // After theme Set-up => theme_support and something featured

        add_action('after_setup_theme', [$this, 'on_theme_setup']);



        // On WP loaded

        add_action('wp_loaded', [$this, 'on_site_load']);



        // Register Widet Area

        add_action('widgets_init', [$this, 'on_widget_init']);



        // Enqueue Scripts => CSS and JS for Frontend        

        add_action('wp_enqueue_scripts', [$this, 'attach_css_files_frondend']);

        add_action('wp_enqueue_scripts', [$this, 'attach_js_files_frondend']);


        // Theme templates

        add_filter('theme_templates', [$this, 'load_custom_templates'], 100, 4);

        // Add Hints Font
        add_filter('wp_resource_hints', [$this, 'ssg_resource_hints'], 10, 2);



        // Add Preconnect Font        

        add_action('admin_enqueue_scripts', [$this, 'add_preconnect_links'], 10, 2);



        // Add CSS & JS to Editor

        add_action('enqueue_block_editor_assets', [$this, 'attach_css_files_editor']);

        add_action('enqueue_block_editor_assets', [$this, 'attach_js_files_editor']);



        // Add CSS & JS to Admin

        add_action('admin_enqueue_scripts', [$this, 'attach_css_files_admin']);

        add_action('admin_enqueue_scripts', [$this, 'attach_js_files_admin']);

        // Admin Logo

        add_action('admin_head', [$this, 'custom_admin_logo']);

        add_action('wp_before_admin_bar_render', [$this, 'custom_admin_logo']);

        // add_action('wp_before_admin_bar_render', [$this, 'custom_admin_bar_logo']);

        add_action('login_head', [$this, 'custom_login_logo']);

        add_filter('allowed_http_origins', [$this, 'add_allowed_origins']);

        // ACF Hooks if ACF Pro is installed for Page Option and CPT

        new WEP_ACF_Controller;



        // Loading Site Option for General

        new WEP_Option;



        // Template Function Hooks auto

        new WEP_Hooks;



        // Template function for loading view

        WEP_Part_View::init();



        // Init Helper for tools (ex: echo WEP_Helper::path(), ...)

        WEP_Helper::init();



        // Init Template Tag for web (ex: the_title, the_image,...)

        WEP_Tag::init();


        // Gọi các hàm xử lý AJAX ở đây
        add_action('wp_ajax_get_client_post_title', array($this, 'get_client_post_title'));
        add_action('wp_ajax_nopriv_get_client_post_title', array($this, 'get_client_post_title'));

        // Gọi phương thức get_client_detail qua AJAX
        add_action('wp_ajax_get_client_detail', array($this, 'get_client_detail'));
        add_action('wp_ajax_nopriv_get_client_detail', array($this, 'get_client_detail'));

        // Gọi phương thức ssg_news_load_more qua AJAX
        add_action('wp_ajax_ssg_news_load_more', array($this, 'ssg_news_load_more'));
        add_action('wp_ajax_nopriv_ssg_news_load_more', array($this,'ssg_news_load_more'));

        // Đăng ký và enqueue script AJAX
        add_action('wp_enqueue_scripts', array($this, 'client_enqueue_scripts'));
    }

    // Ajax Scripts
    public function client_enqueue_scripts() {
        wp_enqueue_script('ssg-ajax', get_template_directory_uri() . '/assets/js/wepAjax.js', array('jquery'), null, true);

        // Tạo nonce và truyền vào script
        $ajax_nonce = wp_create_nonce('ssg-ajax-nonce');
        wp_localize_script('ssg-ajax', 'ssgAjax', array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'ajaxNonce' => $ajax_nonce // Truyền nonce vào JavaScript
        ));
    }

    // Get Load More News
    public function ssg_news_load_more() {

        // $recent_publications = new WP_Query([
        //     'post_type' => 'post',
        //     'posts_per_page' => 8,
        //     'orderby' => 'date',
        //     'order' => 'DESC',            
        //     'fields' => 'ids',
        // ]);        

        $ajaxposts = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $_POST['paged'] + 2,
            'category__in' => $_POST['category_ids'],
            // 'post__not_in' => $recent_publications->get_posts()
        ]);

        $response = '';
        $max_pages = $ajaxposts->max_num_pages;

        if ($ajaxposts->have_posts()) {
            ob_start();

            while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
                $response .= get_template_part('blocks/news-grid/list', 'item');
            endwhile;
            $output = ob_get_contents();
            ob_end_clean();
        } else {
            $response = '';
        }

        $result = [
            'max' => $max_pages,
            'html' => $output,
        ];

        echo json_encode($result);
        exit;
    }


    // Get Client Detail
    public function get_client_detail() {
        if (isset($_POST['contentId'])) {
            $content_id = $_POST['contentId'];

            // Lấy thông tin client theo content ID
            $client_detail = $this->get_client_info($content_id);

            echo json_encode($client_detail);
        }
        wp_die(); // Kết thúc xử lý AJAX
    }

    public function get_client_info($content_id) {
        $client_detail = array();

        $post = get_post($content_id);

        if ($post && $post->post_type === 'client') {
            $client_detail['thumbnail'] = get_the_post_thumbnail_url($post, 'full');
            $client_detail['id'] = $post->ID;
            $client_detail['title'] = $post->post_title;
            $client_detail['excerpt'] = $post->post_excerpt;

            // Lấy giá trị của các trường ACF
            $client_detail['client_goto_link'] = get_field('client_goto_link', $post->ID);
            $client_detail['client_content_image'] = get_field('client_content_image', $post->ID);
            $client_detail['client_service_detail'] = get_field('client_service_detail', $post->ID);
            $client_detail['client_solutions'] = get_field('client_solutions', $post->ID);
            $client_detail['client_services'] = get_field('client_services', $post->ID);
        }

        return $client_detail;
    }


    // Get Title Client
    public function get_client_post_title() {
        // Kiểm tra nonce trước khi xử lý yêu cầu AJAX
        if (isset($_POST['contentId']) && isset($_POST['nonce']) && wp_verify_nonce($_POST['nonce'], 'ssg-ajax-nonce')) {
            $content_id = $_POST['contentId'];

            // Sử dụng phương thức của WEP_Setup để lấy nội dung tiêu đề bài viết
            $post_title = $this->get_post_title_by_id($content_id);

            echo $post_title;
        }
        wp_die(); // Kết thúc xử lý AJAX
    }

    public function get_post_title_by_id($post_id) {
        $post_title = '';
        // Thực hiện truy vấn để lấy nội dung tiêu đề bài viết có ID tương ứng
        $post = get_post($post_id);

        if ($post) {
            $post_title = $post->post_title;
        }

        return $post_title;
    }

    // HTTP ORIGINS    
    function add_allowed_origins($origins) {
        $origins[] = 'https://ssg.vn';
        $origins[] = 'https://digitalbiz.com.vn';
        $origins[] = 'https://ssgmedia.b-cdn.net';
        return $origins;
    }

    // Pre Connect Font Google
    function add_preconnect_links() {

        echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    }

    // Login Logo

    function custom_login_logo() {

        echo '<style type="text/css">

        .login h1 a {

            background-image: url(' . get_stylesheet_directory_uri() . '/assets/images/logo.png) !important;

            height: 100px;

            width: 100px;

            background-size: contain;

        }

        </style>';
    }





    // Admin Logo

    function custom_admin_bar_logo() {

        global $wp_admin_bar;



        // Thay đổi logo

        $wp_admin_bar->add_menu(array(

            'id' => 'custom-logo',

            'title' => '<img src="' . get_stylesheet_directory_uri() . '/assets/images/logo.png" alt="Custom Logo" width="20" height="20">',

            'href' => '#',

            'meta' => array(

                'class' => 'custom-logo',

            ),

        ));



        // Thay đổi icon

        $wp_admin_bar->add_menu(array(

            'id' => 'custom-icon',

            'title' => '<span class="ab-icon"></span>',

            'href' => '#',

            'meta' => array(

                'class' => 'custom-icon',

            ),

        ));
    }



    // Admin Logo

    public function custom_admin_logo() {

        echo '<style type="text/css">

            #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {

                background-image: url(' . get_stylesheet_directory_uri() . '/assets/images/logo.png) !important;

                background-position: 0 0;

                color:rgba(0, 0, 0, 0);

            }

        </style>';
    }





    /**

     * Enqueue Stylesheets files Admin

     *

     * @return void

     */

    public function attach_css_files_admin() {

        $cssFiles = require THEME_CONFIG . '/admin-cssfiles.config.php';

        if (!empty($cssFiles)) {

            foreach ($cssFiles as $cssFile) {

                if (!empty($cssFile['path'])) {

                    $fileId = (!empty($cssFile['handle'])) ? $cssFile['handle'] : 'cssfile-' . microtime();

                    wp_register_style(

                        $fileId,

                        $cssFile['path'],

                        (!empty($cssFile['dependencies'])) ? $cssFile['dependencies'] : [],

                        (!empty($cssFile['version'])) ? $cssFile['version'] : '',

                        (!empty($cssFile['media'])) ? $cssFile['media'] : 'all'

                    );

                    wp_enqueue_style($fileId);
                }
            }
        }
    }



    /**

     * Register block script Admin

     */

    function attach_js_files_admin() {



        $jsFiles = require THEME_CONFIG . '/admin-jsfiles.config.php';

        if (!empty($jsFiles)) {

            foreach ($jsFiles as $jsFile) {

                if (!empty($jsFile['path'])) {

                    // Enqueue script to WordPress

                    wp_enqueue_script(

                        (!empty($jsFile['handle'])) ? $jsFile['handle'] : 'jsfile-' . microtime(),

                        $jsFile['path'],

                        (!empty($jsFile['dependencies']) && is_array($jsFile['dependencies'])) ? $jsFile['dependencies'] : [],

                        (!empty($jsFile['version'])) ? $jsFile['version'] : '',

                        (!empty($jsFile['in_footer'])) ? $jsFile['in_footer'] : false

                    );
                }
            }
        }

        // Add JS Vars

        if (!empty($jsFiles[0])) {

            ob_start();

            require THEME_CONFIG . '/jsvars.config.php';

            $jsVars = ob_get_clean();

            wp_add_inline_script($jsFiles[0]['handle'], $jsVars, 'before');
        }
    }



    /**

     * Enqueue Stylesheets files Editor

     *

     * @return void

     */

    public function attach_css_files_editor() {

        $cssFiles = require THEME_CONFIG . '/editor-cssfiles.config.php';

        if (!empty($cssFiles)) {

            foreach ($cssFiles as $cssFile) {

                if (!empty($cssFile['path'])) {

                    $fileId = (!empty($cssFile['handle'])) ? $cssFile['handle'] : 'cssfile-' . microtime();

                    wp_register_style(

                        $fileId,

                        $cssFile['path'],

                        (!empty($cssFile['dependencies'])) ? $cssFile['dependencies'] : [],

                        (!empty($cssFile['version'])) ? $cssFile['version'] : '',

                        (!empty($cssFile['media'])) ? $cssFile['media'] : 'all'

                    );

                    wp_enqueue_style($fileId);
                }
            }
        }
    }



    /**

     * Register block script Editor

     */

    function attach_js_files_editor() {



        $jsFiles = require THEME_CONFIG . '/editor-jsfiles.config.php';

        if (!empty($jsFiles)) {

            foreach ($jsFiles as $jsFile) {

                if (!empty($jsFile['path'])) {

                    // Enqueue script to WordPress

                    wp_enqueue_script(

                        (!empty($jsFile['handle'])) ? $jsFile['handle'] : 'jsfile-' . microtime(),

                        $jsFile['path'],

                        (!empty($jsFile['dependencies']) && is_array($jsFile['dependencies'])) ? $jsFile['dependencies'] : [],

                        (!empty($jsFile['version'])) ? $jsFile['version'] : '',

                        (!empty($jsFile['in_footer'])) ? $jsFile['in_footer'] : false

                    );
                }
            }
        }

        // Add JS Vars

        if (!empty($jsFiles[0])) {

            ob_start();

            require THEME_CONFIG . '/jsvars.config.php';

            $jsVars = ob_get_clean();

            wp_add_inline_script($jsFiles[0]['handle'], $jsVars, 'before');
        }
    }



    // Hints

    function ssg_resource_hints($urls, $relation_type) {

        if (wp_style_is('ssg-google-font', 'queue') && 'preconnect' === $relation_type) {

            $urls[] = array(

                'href' => 'https://fonts.gstatic.com',

                'crossorigin',

            );
        }



        return $urls;
    }



    /**

     * Called on WordPress Init

     *

     * @return void

     */

    public function on_site_init() {

        // Load Custom Post Types

        WEP_Post_Type::registerPostTypes();

        // Disable comments

        if (is_admin_bar_showing()) {

            remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
        }
    }



    /**

     * Called on WordPress Admin Init

     *

     * @return void

     */

    public function on_admin_init() {

        global $pagenow;

        if ($pagenow === 'edit-comments.php') {

            wp_redirect(admin_url());

            exit;
        }



        // Remove comments metabox from dashboard

        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');



        // Disable support for comments and trackbacks in post types

        foreach (get_post_types() as $post_type) {

            if (post_type_supports($post_type, 'comments')) {

                remove_post_type_support($post_type, 'comments');

                remove_post_type_support($post_type, 'trackbacks');
            }
        }
    }



    /**

     * Called on WordPress Admin menu

     *

     * @return void

     */

    public function on_make_admin_menu() {

        // Disable comments

        remove_menu_page('edit-comments.php');
    }



    /**

     * Update Mime types allowed by WordPress

     *

     * @param array $fileTypes : File types

     *

     * @return array

     */

    public function allowed_upload_mines($fileTypes) {

        $newFileTypes = [];

        $newFileTypes['svg'] = 'image/svg+xml';

        $fileTypes = array_merge($fileTypes, $newFileTypes);

        return $fileTypes;
    }



    /**

     * Called on Theme set up

     *

     * @return void

     */

    public function on_theme_setup() {

        // Include i18n support

        load_theme_textdomain(LANG_DOMAIN, THEME_DIR . '/languages');



        // Include menus configuration

        $menus = require(THEME_CONFIG . '/menus.config.php');



        // Register menus to WordPress

        register_nav_menus($menus);



        // Register Images custom sizes

        $this->registerImagesConfiguration();



        // Theme support

        add_theme_support('automatic-feed-links');

        add_theme_support('align-wide');

        add_theme_support('title-tag');

        add_theme_support('responsive-embeds');

        add_theme_support('custom-line-height');

        add_theme_support('experimental-link-color');

        add_theme_support('custom-spacing');

        add_theme_support('custom-units');

        add_theme_support('post-thumbnails');

        add_theme_support('menus');

        add_theme_support('customize-selective-refresh-widgets');   // Add theme support for selective refresh for widgets.

        add_theme_support('post-formats', ['link', 'aside', 'gallery', 'image', 'quote', 'status', 'video', 'audio', 'chat']);

        add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);

        add_theme_support('wp-block-styles');       // Add support for Block Styles.        

        add_theme_support('editor-styles');



        $editor_stylesheet_path = '/wp-content/themes/ssg/css/style.css';



        // Enqueue editor styles.

        add_editor_style($editor_stylesheet_path);





        // Include editor font-sizes

        $editor_font_sizes = require(THEME_CONFIG . '/editor-font-sizes.config.php');

        add_theme_support('editor-font-sizes', $editor_font_sizes);



        // Include editor color-sets

        $editor_color_sets = require(THEME_CONFIG . '/editor-color-sets.config.php');

        add_theme_support('editor-color-palette', $editor_color_sets);



        // Include editor gradient-sets

        $editor_gradient_sets = require(THEME_CONFIG . '/editor-gradient-sets.config.php');

        add_theme_support('editor-gradient-presets', $editor_gradient_sets);



        // Custom Logo

        $logo_width  = 300;

        $logo_height = 100;

        add_theme_support(

            'custom-logo',

            array(

                'height'               => $logo_height,

                'width'                => $logo_width,

                'flex-width'           => true,

                'flex-height'          => true,

                'unlink-homepage-logo' => true,

            )

        );



        // Custom background color.

        add_theme_support(

            'custom-background',

            array(

                'default-color' => 'd1e4dd',

            )

        );







        // Remove feed icon link from legacy RSS widget.

        add_filter('rss_widget_feed_link', '__return_empty_string');
    }



    /**

     * Register widget area.

     *

     * @since Twenty Twenty-One 1.0

     *

     * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar

     *

     * @return void

     */

    public function on_widget_init() {

        // Include sidebars configuration

        $sidebars = require(THEME_CONFIG . '/sidebars.config.php');

        foreach ($sidebars as $sidebar) {

            register_sidebar($sidebar);
        }
    }



    /**

     * Called when WordPress loaded

     *

     * @return void

     */

    public function on_site_load() {
    }

    /**

     * Enqueue Javascript files

     *

     * @return void

     */

    public function attach_js_files_frondend() {

        $jsFiles = require THEME_CONFIG . '/script-files.config.php';

        if (!empty($jsFiles)) {

            foreach ($jsFiles as $jsFile) {

                if (!empty($jsFile['path'])) {

                    // Enqueue script to WordPress

                    wp_enqueue_script(

                        (!empty($jsFile['handle'])) ? $jsFile['handle'] : 'jsfile-' . microtime(),

                        $jsFile['path'],

                        (!empty($jsFile['dependencies']) && is_array($jsFile['dependencies'])) ? $jsFile['dependencies'] : [],

                        (!empty($jsFile['version'])) ? $jsFile['version'] : '',

                        (!empty($jsFile['in_footer'])) ? $jsFile['in_footer'] : false

                    );
                }
            }
        }

        // Add JS Vars

        if (!empty($jsFiles[0])) {

            ob_start();

            require THEME_CONFIG . '/script-vars.config.php';

            $jsVars = ob_get_clean();

            wp_add_inline_script($jsFiles[0]['handle'], $jsVars, 'before');
        }
    }



    /**

     * Enqueue Stylesheets files

     *

     * @return void

     */

    public function attach_css_files_frondend() {

        $cssFiles = require THEME_CONFIG . '/style-files.config.php';

        if (!empty($cssFiles)) {

            foreach ($cssFiles as $cssFile) {

                if (!empty($cssFile['path'])) {

                    $fileId = (!empty($cssFile['handle'])) ? $cssFile['handle'] : 'cssfile-' . microtime();

                    wp_register_style(

                        $fileId,

                        $cssFile['path'],

                        (!empty($cssFile['dependencies'])) ? $cssFile['dependencies'] : [],

                        (!empty($cssFile['version'])) ? $cssFile['version'] : '',

                        (!empty($cssFile['media'])) ? $cssFile['media'] : 'all'

                    );

                    wp_enqueue_style($fileId);
                }
            }
        }
    }



    /**

     * Register images configuration

     *

     * @return void

     */

    public function registerImagesConfiguration() {

        $imagesConfiguration = require THEME_CONFIG . '/images.config.php';

        if (!empty($imagesConfiguration)) {

            foreach ($imagesConfiguration as $imageConfiguration) {

                if (!empty($imageConfiguration['image_id'])) {

                    add_image_size(

                        $imageConfiguration['image_id'],

                        $imageConfiguration['width'],

                        $imageConfiguration['height'],

                        (!empty($imageConfiguration['crop'])) ? $imageConfiguration['crop'] : false

                    );
                }
            }
        }
    }



    /**

     * Load Custom templates

     *

     * @param array $post_templates : WP Custom templates loaded

     * @param object $theme : WP Theme Object

     * @param object $post : WP Post Object

     * @param string $post_type : WP Post type

     *

     * @return array

     */

    public function load_custom_templates($post_templates, $theme, $post, $post_type) {

        $customTemplates = require THEME_CONFIG . '/customtemplates.config.php';

        if (!empty($customTemplates)) {

            foreach ($customTemplates as $postType => $postTypeCustomTemplates) {

                if ($post_type == $postType) {

                    $post_templates = array_merge($post_templates, $postTypeCustomTemplates);
                }
            }
        }

        return $post_templates;
    }
}
