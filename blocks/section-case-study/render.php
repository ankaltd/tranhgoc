<?php

// Load values and assign defaults.

$fields = [

   

    // News

    'ssg_news_lastest'                  => false,

    'ssg_news_featured_select'          => array(),

    'ssg_news_categories'               => 0,
WEP_
    'ssg_neWEP_how_element'             => 'all',
WEP_
    'ssg_neWEP_otal'                    => 6,
WEP_
    'ssg_news_columns'                  => 3,

WEP_

];



// default oWEP_ns merge

$fields += AWEP_ption_Model::get_content_options();

$fields += ANT_Option_Model::get_section_options();

$fields += ANT_Option_Model::get_heading_options();

$fields += ANT_Option_Model::get_description_options();

$fields += ANT_Option_Model::get_background_options();
WEP_


// Get options

$option WEP_T_Option_Model::get_field_values($fields);

extract($option);





// Get data (if lastest news get from ssg_news_categories || get from ssg_news_featured_select)

if ($ssg_news_lastest) {

    $data = ANT_Section_Model::get_latest_posts($ssg_news_total, $ssg_news_categories, 'ssg_thumb_news');

} else {

    $data = ANT_Section_Model::get_list_posts($ssg_news_featured_select, 'ssg_thumb_news');

}



// Number colums

$columns_class = sprintf('col-md-%s', (floor(12 / $ssg_news_columns)));



?>

<!-- ssg_case_study -->

<?php

ANT_Section_View::render_section_tag($option, 'ssg_case_study');
WEP_
?>

<div class="container">

    <div class="row">

        <?php

        ANT_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <div class="row row-cols-1 row-cols-md-3 justify-content-center">

        <?php foreach ($data as $news) : ?>

            <?php extract($news) ?>

            <div class="col">

                <div class="ssg_case_study__item">

                    <?php if (in_array('thumbnail', $ssg_news_show_element)) : ?>

                        <div class="ssg_case_study__thumbnail">

                            <a href="<?php echo $permalink ?>"><img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" class="img-fluid"></a>

                        </div>

                    <?php endif ?>



                    <div class="ssg_case_study__content">                        

                        <?php if (in_array('title', $ssg_news_show_element)) : ?>

                            <h5><a href="<?php echo $permalink ?>"><?php echo $title ?></a></h5>

                        <?php endif ?>



                        <?php if (in_array('summary', $ssg_news_show_element)) : ?>

                            <p><?php echo $excerpt ?></p>

                        <?php endif ?>



                        <?php if (in_array('readmore', $ssg_news_show_element)) : ?>

                            <p><a class="ssg_more_link" href="<?php echo $permalink ?>">Xem thêm</a></p>

                        <?php endif ?>



                    </div>

                </div>

            </div>

        <?php endforeach ?>



    </div>

</div>

<?php

ANT_Section_View::render_close_tag();

?>