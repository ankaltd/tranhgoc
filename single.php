<?php
/**
 * Chi tiết bài viết
 */
 get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <?php
            /* Start the Loop */
            while (have_posts()) :
                the_post();
                $post_id = get_the_ID(); // Lấy ID của bài viết hiện tại
                $post_classes = get_post_class('single-post', $post_id);
                $post_title = get_the_title($post_id);
                $post_excerpt = get_the_excerpt($post_id);
                $thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
                $post_content = get_the_content(null, false, $post_id);
                $post_date = get_the_date('j F, Y', $post_id);
                $post_source = get_field('wep_content_source') ? get_field('wep_content_source') : '';
                // Chuyển đổi ngày sang ngôn ngữ địa phương
                $post_date_localized = date_i18n('j F, Y', strtotime($post_date));
                // Shared Links
                // Lấy permalink của bài viết hiện tại và đưa vào biến $post_permalink
                $post_permalink = get_permalink();
                // Kiểm tra xem biến $post_permalink có giá trị hay không trước khi sử dụng
                if ($post_permalink) {
                    // Tạo liên kết chia sẻ trên Facebook
                    $facebook_share_link = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($post_permalink);
                    $twitter_share_link = 'https://twitter.com/intent/tweet?url=' . urlencode($post_permalink);
                } else {
                    // Xử lý trường hợp không lấy được permalink
                    $facebook_share_link = 'Không lấy được permalink của bài viết.';
                    $twitter_share_link = 'Không lấy được permalink của bài viết.';
                }
                /* Section Entry Post --------------- */
                $section_data = [
                    'id' => 'wep_entry_single',
                    'class' => 'wep_entry_single',
                    'post_classes' => implode(' ', $post_classes),
                    'heading' => $post_title,
                    'summary' => $post_excerpt,
                    'date' => $post_date,
                    'image' => $thumbnail_url,
                    'content' => $post_content,
                    'facebook_share' => $facebook_share_link,
                    'twitter_share' => $twitter_share_link,
                    'source' => $post_source
                ];
                get_template_part('sections/single', 'entry', $section_data);
            endwhile; // End of the loop.
            ?>
        </div>
        <div class="col-12 col-md-3">
            <?php
            /* Section Sidebar --------------- */
            $section_data = [
                'id' => 'wep_sidebar',
                'class' => 'wep_sidebar',
            ];
            get_template_part('sections/sidebar', 'default', $section_data);
            ?>
        </div>
    </div>
</div>
<?php
/* Section Contact --------------- */
$section_data = [
    'id' => 'wep_home_contact',
    'class' => 'wep_home_contact',
    'heading' => 'Hãy để chúng tôi đồng hành cùng bạn trên hành trình chuyển đổi số.',
    'button' => [
        'text' => 'Liên hệ'
    ]
];
get_template_part('sections/section', 'contact', $section_data);
/* Footer */
get_footer();
