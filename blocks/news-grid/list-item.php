<?php 
// Lấy thông tin từng bài viết
$post_id = get_the_ID();
$post_title = get_the_title();
$post_thumbnail = get_the_post_thumbnail_url($post_id, 'ssg_thumb_news');
$post_permalink = get_permalink();
$post_date = get_the_date();
$post_categories = get_the_category();
$post_excerpt = get_the_excerpt(); // Lấy tóm tắt


?>
<div class="col-12 col-md-3">
    <div class="ssg_news_grid__item">
        <div class="ssg_news_grid__thumbnail">
            <a href="<?php echo $post_permalink; ?>" >
                <img src="<?php echo $post_thumbnail; ?>" alt="<?php echo $post_title ?>" class="img-fluid">
            </a>
        </div>
        <p class="ssg_news_grid__meta date"><?php echo $post_date ?></p>
        <div class="ssg_news_grid__content">
            <h5 class="ssg_news_grid__title">
                <a href="<?php echo $post_permalink; ?>"><?php echo $post_title ?></a>
            </h5>
            <p class="ssg_news_grid__text"><?php echo $post_excerpt ?></p>
        </div>
    </div>
</div>