<?php

/* Home News Featured */

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

    $data = WEP_Section_Model::get_list_posts($wep_news_featured_select, 'wep_thumb_news');
}



// Number colums

$columns_class = sprintf('col-md-%s', (floor(12 / $wep_news_columns)));



?>

<!-- wep_home_news -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_home_news_image');

?>

<div class="container wep_home_news_image">

    <div class="row">

        <?php

        WEP_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <div class="row row-cols-1 row-cols-md-3 justify-content-center">

        <?php $stt = 0;

        foreach ($data as $news) : ?>

            <?php extract($news); ?>

            <div class="col-12 <?php echo $columns_class ?>" <?php WEP_Section_View::render_item_aos($option, 2, $stt) ?>>

                <div class="wep_home_news_image__item">



                    <?php if (in_array('thumbnail', $wep_news_show_element)) : ?>

                        <a href="<?php echo $permalink ?>" class="wep_home_news_image__thumbnail">

                            <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" class="img-fluid wep_concept">

                        </a>

                    <?php endif ?>

                    <div class="wep_home_news_image__content">

                        <?php if (in_array('category', $wep_news_show_element)) : ?>

                            <?php if ($wep_news_categories_link) : ?>

                                <p class="wep_home_news_image__category">

                                    <?php

                                    $total_cat = count($categories);

                                    for ($i = 0; $i < $total_cat; $i++) {
                                        echo ($i > 0) ? ' - ' : '';
                                        printf('<a href="%s" class="wep_home_news_image__category_link">%s</a>', $category_links[$i], $categories[$i]);
                                    }

                                    ?>

                                </p>

                            <?php else : ?>

                                <p class="wep_home_news_image__category"><?php echo implode(", ", $categories); ?></p>

                            <?php endif; ?>

                        <?php endif ?>



                        <?php if (in_array('title', $wep_news_show_element)) : ?>

                            <h5 class="wep_home_news_image__title"><a href="<?php echo $permalink ?>"><?php echo $title ?></a></h5>

                        <?php endif ?>



                        <?php if (in_array('readmore', $wep_news_show_element)) : ?>

                            <p><a class="wep_more_link" href="<?php echo $permalink ?>">Xem thêm</a></p>

                        <?php endif ?>

                    </div>

                </div>

            </div>

        <?php $stt++;

        endforeach ?>



    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>