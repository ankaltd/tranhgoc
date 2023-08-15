<?php

// Load values and assign defaults.

$fields = [

   

    // News

    'wep_news_lastest'                  => false,

    'wep_news_featured_select'          => array(),

    'wep_news_categories'               => 0,

    'wep_news_show_element'             => 'all',

    'wep_news_total'                    => 6,

    'wep_news_columns'                  => 3,



];



// default options merge

$fields += WEP_Option_Model::get_content_options();

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

<!-- wep_case_study -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_case_study');

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

            <div class="col">

                <div class="wep_case_study__item">

                    <?php if (in_array('thumbnail', $wep_news_show_element)) : ?>

                        <div class="wep_case_study__thumbnail">

                            <a href="<?php echo $permalink ?>"><img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" class="img-fluid"></a>

                        </div>

                    <?php endif ?>



                    <div class="wep_case_study__content">                        

                        <?php if (in_array('title', $wep_news_show_element)) : ?>

                            <h5><a href="<?php echo $permalink ?>"><?php echo $title ?></a></h5>

                        <?php endif ?>



                        <?php if (in_array('summary', $wep_news_show_element)) : ?>

                            <p><?php echo $excerpt ?></p>

                        <?php endif ?>



                        <?php if (in_array('readmore', $wep_news_show_element)) : ?>

                            <p><a class="wep_more_link" href="<?php echo $permalink ?>">Xem thêm</a></p>

                        <?php endif ?>



                    </div>

                </div>

            </div>

        <?php endforeach ?>



    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>