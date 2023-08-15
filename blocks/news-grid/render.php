<?php

// Load values and assign defaults.
$fields = [];

// default options merge
$fields += ANT_Option_Model::get_content_options();
$fields += ANT_Option_Model::get_news_options();
$fields += ANT_Option_Model::get_section_options();
$fields += ANT_Option_Model::get_heading_options();
$fields += ANT_Option_Model::get_description_options();
$fields += ANT_Option_Model::get_background_options();

// Get options

$option = ANT_Option_Model::get_field_values($fields);

extract($option);

// Get data (if lastest news get from ssg_news_categories || get from ssg_news_featured_select)
if ($ssg_news_lastest) {
    $data = ANT_Section_Model::get_latest_posts($ssg_news_total, $ssg_news_categories, 'ssg_thumb_news');
} else {
    if ($ssg_news_featured_select) {
        $data = ANT_Section_Model::get_list_posts($ssg_news_featured_select, 'ssg_thumb_news');
    }
}


// Number colums
$columns_class = sprintf('col-md-%s', (floor(12 / $ssg_news_columns)));

?>

<!-- ssg_client_news -->
<?php
ANT_Section_View::render_section_tag($option, 'ssg_news_grid');
?>

<div class="container">
    <input type="hidden" name="ssg_news_categories" id="ssg_news_categories" value="<?php echo implode(", ", $ssg_news_categories); ?>" >

    <?php if ($ssg_news_categories_filter) : ?>
        <div class="row pb-3">
            <div class="col">
                <?php
                // Lấy danh sách chuyên mục tin tức
                $categories = get_categories(array(
                    'taxonomy'   => 'category', // Taxonomy của chuyên mục (trong trường hợp này là 'category')
                    'hide_empty' => false,      // Hiển thị cả những chuyên mục không có bài viết
                ));

                ?>
                <!-- Sử dụng danh sách nav của Bootstrap 5 -->
                <nav class="navbar navbar-expand-lg category_filter">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="#all" data-filter="all">Tất cả</a>
                        </li>
                        <?php foreach ($categories as $category) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo get_category_link($category->term_id); ?>" data-filter="<?php echo $category->cat_ID; ?>">
                                    <?php echo $category->name; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>

            </div>
        </div>
    <?php endif; ?>

    <div class="row row-cols-2 row-cols-md-4 justify-content-center publication-list">
        <?php if (isset($data)) : ?>
            <?php foreach ($data as $news) : ?>

                <?php extract($news) ?>

                <div class="col-12 <?php echo $columns_class ?>">

                    <div class="ssg_news_grid__item">

                        <?php if (in_array('thumbnail', $ssg_news_show_element)) : ?>

                            <div class="ssg_news_grid__thumbnail">

                                <a href="<?php echo $permalink ?>">

                                    <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" class="img-fluid"></a>

                            </div>

                        <?php endif ?>



                        <?php if (in_array('category', $ssg_news_show_element)) : ?>

                            <p class="ssg_home_news_image__category"><?php echo implode(", ", $categories); ?></p>

                        <?php endif ?>



                        <?php if (in_array('date', $ssg_news_show_element)) : ?>

                            <p class="ssg_news_grid__meta date"><?php echo $date ?></span></p>

                        <?php endif ?>



                        <div class="ssg_news_grid__content">

                            <?php if (in_array('title', $ssg_news_show_element)) : ?>

                                <h5 class="ssg_news_grid__title">

                                    <a href="<?php echo $permalink ?>"><?php echo $title ?></a>

                                </h5>

                            <?php endif ?>



                            <?php if (in_array('summary', $ssg_news_show_element)) : ?>
                                <?php if ($title) : ?>
                                    <p class="ssg_news_grid__text"><?php echo $title ?></p>
                                <?php endif; ?>
                            <?php endif ?>



                            <?php if (in_array('readmore', $ssg_news_show_element)) : ?>
                                <?php if ($permalink) : ?>
                                    <p><a class="ssg_more_link" href="<?php echo $permalink ?>">Xem thêm</a></p>
                                <?php endif; ?>
                            <?php endif ?>

                        </div>

                    </div>

                </div>
            <?php endforeach ?>
        <?php endif; ?>

    </div>

    <div class="row pt-3 justify-content-center align-items-center text-center">
        <div class="col">
            <?php

            if ($ssg_news_page_navigation == 'loadmore') :
            ?>
                <button type="button" class="ssg_button ssg_button--primary ssg_search" id="load-more">Xem thêm</button>
            <?php endif ?>

            <?php if ($ssg_news_page_navigation == 'pagenav') : ?>
                <nav aria-label="Page navigation">
                    <ul class="pagination ssg_page_nav">
                        <li class="page-item current_page"><span aria-current="page" class="page-link current">1</span></li>
                        <li class="page-item "><a class="page-link" href="https://ssg.vn/category/tin-tuc/page/2/">2</a></li>
                        <li class="page-item "><a class="page-link" href="https://ssg.vn/category/tin-tuc/page/3/">3</a></li>
                        <li class="page-item "><a class="next page-link" href="https://ssg.vn/category/tin-tuc/page/2/">Tiếp »</a></li>
                    </ul>
                </nav>
            <?php endif; ?>

            <?php if ($ssg_news_page_navigation == 'infinity') : ?>
                <?php echo $ssg_news_page_navigation;?>
            <?php endif ?>
        </div>
    </div>
</div>



<?php

ANT_Section_View::render_close_tag();

?>