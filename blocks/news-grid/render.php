<?php

// Load values and assign defaults.
$fields = [];

// default options merge
$fields += WEP_Option_Model::get_content_options();
$fields += WEP_Option_Model::get_news_options();
$fields += WEP_Option_Model::get_section_options();
$fields += WEP_Option_Model::get_heading_options();
$fields += WEP_Option_Model::get_description_options();
$fields += WEP_Option_Model::get_background_options();

// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);

// Get data (if lastest news get from wep_news_categories || get from wep_news_featured_select)
if ($wep_news_lastest) {
    $data = WEP_Section_Model::get_latest_posts($wep_news_total, $wep_news_categories, 'wep_thumb_news');
} else {
    if ($wep_news_featured_select) {
        $data = WEP_Section_Model::get_list_posts($wep_news_featured_select, 'wep_thumb_news');
    }
}


// Number colums
$columns_class = sprintf('col-md-%s', (floor(12 / $wep_news_columns)));

?>

<!-- wep_client_news -->
<?php
WEP_Section_View::render_section_tag($option, 'wep_news_grid');
?>

<div class="container">
    <input type="hidden" name="wep_news_categories" id="wep_news_categories" value="<?php echo implode(", ", $wep_news_categories); ?>" >

    <?php if ($wep_news_categories_filter) : ?>
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

                    <div class="wep_news_grid__item">

                        <?php if (in_array('thumbnail', $wep_news_show_element)) : ?>

                            <div class="wep_news_grid__thumbnail">

                                <a href="<?php echo $permalink ?>">

                                    <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" class="img-fluid"></a>

                            </div>

                        <?php endif ?>



                        <?php if (in_array('category', $wep_news_show_element)) : ?>

                            <p class="wep_home_news_image__category"><?php echo implode(", ", $categories); ?></p>

                        <?php endif ?>



                        <?php if (in_array('date', $wep_news_show_element)) : ?>

                            <p class="wep_news_grid__meta date"><?php echo $date ?></span></p>

                        <?php endif ?>



                        <div class="wep_news_grid__content">

                            <?php if (in_array('title', $wep_news_show_element)) : ?>

                                <h5 class="wep_news_grid__title">

                                    <a href="<?php echo $permalink ?>"><?php echo $title ?></a>

                                </h5>

                            <?php endif ?>



                            <?php if (in_array('summary', $wep_news_show_element)) : ?>
                                <?php if ($title) : ?>
                                    <p class="wep_news_grid__text"><?php echo $title ?></p>
                                <?php endif; ?>
                            <?php endif ?>



                            <?php if (in_array('readmore', $wep_news_show_element)) : ?>
                                <?php if ($permalink) : ?>
                                    <p><a class="wep_more_link" href="<?php echo $permalink ?>">Xem thêm</a></p>
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

            if ($wep_news_page_navigation == 'loadmore') :
            ?>
                <button type="button" class="wep_button wep_button--primary wep_search" id="load-more">Xem thêm</button>
            <?php endif ?>

            <?php if ($wep_news_page_navigation == 'pagenav') : ?>
                <nav aria-label="Page navigation">
                    <ul class="pagination wep_page_nav">
                        <li class="page-item current_page"><span aria-current="page" class="page-link current">1</span></li>
                        <li class="page-item "><a class="page-link" href="https://wep.vn/category/tin-tuc/page/2/">2</a></li>
                        <li class="page-item "><a class="page-link" href="https://wep.vn/category/tin-tuc/page/3/">3</a></li>
                        <li class="page-item "><a class="next page-link" href="https://wep.vn/category/tin-tuc/page/2/">Tiếp »</a></li>
                    </ul>
                </nav>
            <?php endif; ?>

            <?php if ($wep_news_page_navigation == 'infinity') : ?>
                <?php echo $wep_news_page_navigation;?>
            <?php endif ?>
        </div>
    </div>
</div>



<?php

WEP_Section_View::render_close_tag();

?>