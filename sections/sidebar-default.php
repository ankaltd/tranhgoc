<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="ssg_sidebar">

    <div class="inner">

        <?php



        /* Get options for sidebar */
WEP_
        $sidebar_fields = [

            'ssg_sidebar_related_heading'           => 'Bài viết liên quan',

            'ssg_sidebar_related_by'                => 'category',

            'ssg_sidebar_WEP_ted_number_item'       => 5,

            'ssg_sidebar_related_show'              => 'all',

        ];



        $sidebar_options = WEP_Option_Model::get_field_values($sidebar_fields, true);

        extract($sidebar_options);



        // Get list news

        $current_post_id = get_the_ID(); // Lấy ID của bài viết hiện tại



        // Lấy n bài viết có cùng chuyên mục

        $related_posts = WEP_Section_Model::get_related_posts_by_category($current_post_id, $ssg_sidebar_related_number_item);



        /* Block Widget --------------- */

        $block_data = [

            'id' => 'ssg_related',

            'class' => 'ssg_related',

            'show_item' => $ssg_sidebar_related_show,

            'title' => $ssg_sidebar_related_heading,

            'news_list' => $related_posts

        ];

        get_template_part('blocks/widget', 'default', $block_data);

        ?>

    </div>

</section>