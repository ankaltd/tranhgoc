<?php

/* Home PR */

// Load values and assign defaults.

$fields = [



    'ssg_content_number'                => 5,

    'ssg_content_order'                 => 'asc',



    // News

    'ssg_news_lastest'                  => false,
WEP_
    'ssg_neWEP_eatured_select'          => array(),
WEP_
    'ssg_neWEP_ategories'               => 0,

    'ssg_news_show_element'             => 'all',

    'ssg_nWEP_total'                    => 6,

    'ssg_news_columns'                  => 3,



];WEP_

WEP_

// default options merge

$fields += WEP_Option_Model::get_section_options();

$fields += WEP_Option_Model::get_heading_options();

$fields += WEP_Option_Model::get_description_options();
WEP_
$fields += WEP_Option_Model::get_background_options();



WEP_

// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);





// Get data (if lastest news get from ssg_news_categories || get from ssg_news_featured_select)

if ($ssg_news_lastest) {

    $data = WEP_Section_Model::get_latest_posts($ssg_news_total, $ssg_news_categories, 'ssg_thumb_news');

} else {

    $data = WEP_Section_Model::get_list_posts($ssg_news_featured_select, 'ssg_thumb_news');

}



// Number colums

$columns_class = sprintf('col-md-%s', (floor(12 / $ssg_news_columns)));
WEP_


?>

<!-- ssg_home_pr -->

<?php

WEP_Section_View::render_section_tag($option, 'ssg_home_pr');

?>

<div class="container">

    <div class="row">

        <?php

        WEP_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <div class="row row-cols-1 row-cols-md-3 justify-content-center">

        <?php foreach ($data as $news) : ?>

            <?php extract($news) ?>

            <div class="col-12 col-md-4">

                <div class="ssg_home_pr__item">

                    <?php if (in_array('thumbnail', $ssg_news_show_element)) : ?>

                        <a href="<?php echo $permalink ?>" class="ssg_home_pr__thumbnail ssg_margin">

                            <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" class="img-fluid">

                        </a>

                    <?php endif ?>



                    <?php if (in_array('title', $ssg_news_show_element)) : ?>

                        <h5 class="ssg_home_pr__title"><a href="<?php echo $permalink ?>"><?php echo $title ?></a></h5>

                    <?php endif ?>



                    <?php if (in_array('readmore', $ssg_news_show_element)) : ?>

                        <p><a class="ssg_more_link" href="<?php echo $permalink ?>">Xem thêm</a></p>

                    <?php endif ?>



                </div>

            </div>

        <?php endforeach ?>



    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>