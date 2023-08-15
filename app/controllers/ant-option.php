<?php

/**
 * ANT Option Class, with functions and filters related to the site options.
 * 
 */

class ANT_Option {

    private $model;

    // Init
    public function __construct() {

        $this->model = new ANT_Option_Model;

        if (function_exists('acf_add_options_page')) {
            acf_add_options_page(
                array(
                    'page_title' => 'Cấu hình chung Website',
                    'menu_title' => 'Cấu hình Website',
                    'position' => '2',
                )
            );
        }
        add_filter('enter_title_here', [$this, 'change_default_title'], 10, 2);

        // Gắn hàm callback vào hook 'admin_bar_menu'
        add_action('admin_bar_menu', [$this, 'add_custom_admin_bar_link'], 999);

        // Gắn hàm callback vào hook 'admin_bar_menu'
        add_action('admin_bar_menu', [$this, 'customize_admin_bar_link'], 999);
    }

    // Hàm callback để thêm liên kết vào thanh admin bar, nhưng ẩn "Tùy biến"
    function customize_admin_bar_link($wp_admin_bar) {
        // Kiểm tra xem liên kết nào đang được thêm vào, nếu là "customize.php" thì loại bỏ nó
        foreach ($wp_admin_bar->get_nodes() as $node) {
            if (strpos($node->href, 'customize.php') !== false) {
                $wp_admin_bar->remove_node($node->id);
            }
        }
    }

    // Hàm callback để thêm liên kết vào thanh admin bar
    function add_custom_admin_bar_link() {
        global $wp_admin_bar;

        // Đặt URL của trang cấu hình website ở đây
        $url = 'https://ssg.vn/wp-admin/admin.php?page=acf-options-cau-hinh-website';

        // Thêm liên kết vào thanh admin bar
        $args = array(
            'id'    => 'custom_admin_bar_link',
            'title' => 'Cấu hình website', // Tiêu đề hiển thị trên thanh admin bar
            'href'  => $url,
            'meta'  => array('class' => 'custom-admin-bar-link')
        );
        $wp_admin_bar->add_node($args);
    }


    // Change Title of form ACF to FE
    function change_default_title($title, $post_type) {
        if ($post_type == 'subscriber') { // Thay 'your_custom_post_type' bằng tên custom post type của bạn
            $title = 'Họ và tên'; // Thay 'Mới Tiêu đề' bằng tiêu đề mới mà bạn muốn sử dụng
        }
        return $title;
    }

    // Get option of page - ACF get fields for current page
    public function get_page_option($page_template) {

        $result = array();

        if (($page_template != '') || ($page_template)) {
        }

        return $result;
    }

    // Get list option of layout in current page 
    public function get_layout_option($layout_name) {
        $result = array();

        if (($layout_name != '') || ($layout_name)) {
        }

        return $result;
    }
}
