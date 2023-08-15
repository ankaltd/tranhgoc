<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="wep_sidebar">

    <div class="inner">

        <?php



        /* Get options for sidebar */

        $sidebar_fields = [

            'wep_sidebar_related_heading'           => 'Bài viết liên quan',

            'wep_sidebar_related_by'                => 'category',

            'wep_sidebar_related_number_item'       => 5,

            'wep_sidebar_related_show'              => 'all',

        ];



        $sidebar_options = WEP_Option_Model::get_field_values($sidebar_fields, true);

        extract($sidebar_options);



        // Get list news

        $current_post_id = get_the_ID(); // Lấy ID của bài viết hiện tại



        // Lấy n bài viết có cùng chuyên mục

        $related_posts = WEP_Section_Model::get_related_posts_by_category($current_post_id, $wep_sidebar_related_number_item);



        /* Block Widget --------------- */

        $block_data = [

            'id' => 'wep_related',

            'class' => 'wep_related',

            'show_item' => $wep_sidebar_related_show,

            'title' => $wep_sidebar_related_heading,

            'news_list' => $related_posts

        ];

        get_template_part('blocks/widget', 'default', $block_data);

        ?>

    </div>

</section>