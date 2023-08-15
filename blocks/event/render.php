<?php
/* Home Event */
// Load values and assign defaults.
$fields = [

    'ssg_content_number'                => 5,
    'ssg_content_order'                 => 'asc',

    // News
    'ssg_news_lastest'                  => false,
    'ssg_news_featured_select'          => array(),
    'ssg_news_categories'               => 0,
    'ssg_news_show_element'             => 'all',
    'ssg_news_total'                    => 6,
    'ssg_news_columns'                  => 3,

];

// default options merge
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
    $data = ANT_Section_Model::get_list_posts($ssg_news_featured_select, 'ssg_thumb_news');
}

// Number colums
$columns_class = sprintf('col-md-%s', (floor(12 / $ssg_news_columns)));

?>
<!-- ssg_home_event -->
<?php
ANT_Section_View::render_section_tag($option, 'ssg_home_event');
?>

<div class="container ssg_home_event">
    <div class="row">
        <?php
        ANT_Section_View::render_section_heading_desc($option);
        ?>
    </div>
    <div class="row row-cols-6 row-cols-md-4 justify-content-center">
        <?php foreach ($data as $news) : ?>
            <?php extract($news) ?>
            <div class="col-6 <?php echo $columns_class ?>">
                <div class="ssg_home_event__item">

                    <?php if (in_array('thumbnail', $ssg_news_show_element)) : ?>
                        <a href="<?php echo $permalink ?>" class="ssg_home_event__thumbnail ssg_margin">
                            <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" class="img-fluid">
                        </a>
                    <?php endif ?>

                    <?php if (in_array('title', $ssg_news_show_element)) : ?>
                        <h5 class="ssg_home_event__title"><a href="<?php echo $permalink ?>"><?php echo $title ?></a></h5>
                    <?php endif ?>

                    <?php if (in_array('summary', $ssg_news_show_element)) : ?>
                        <p class="ssg_home_event__summary"><?php echo $excerpt ?></p>
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
ANT_Section_View::render_close_tag();
?>