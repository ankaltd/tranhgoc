<?php
/* Hiring Benefit */
// Load values and assign defaults.
$fields = [
    // Content
    'ssg_content_image_responsive'      => true,
    'ssg_content_list'                  => array(),
    'ssg_content_image_align'           => 0,
    'ssg_content_text_align'            => 0,
    'ssg_content_show_element'          => array(),
];

// default options merge
$fields += ANT_Option_Model::get_section_options();
$fields += ANT_Option_Model::get_heading_options();
$fields += ANT_Option_Model::get_description_options();
$fields += ANT_Option_Model::get_background_options();

// Get options
$option = ANT_Option_Model::get_field_values($fields);
extract($option);

// Get data content
$data = $ssg_content_list;

?>
<!-- ssg_hiring_benefit -->
<?php
ANT_Section_View::render_section_tag($option, 'ssg_hiring_benefit');
?>
<div class="container ">
    <div class="row">
        <?php
        ANT_Section_View::render_section_heading_desc($option);
        ?>
    </div>
    <div class="row row-cols-2 row-cols-md-3 g-3 g-md-5 justify-content-center">

        <?php foreach ($data as $hiring_ev) : ?>
            <?php extract($hiring_ev) ?>
            <div class="col">
                <div class="ssg_hiring_benefit__item">
                    <?php if (in_array('thumbnail', $ssg_content_show_element)) : ?>

                        <div href="" class="ssg_hiring_benefit__icon">
                            <img src="<?php echo $ssg_content_image ?>" alt="<?php echo $ssg_content_title ?>">
                        </div>
                    <?php endif; ?>

                    <?php if (in_array('title', $ssg_content_show_element)) : ?>

                        <h5 class="ssg_hiring_benefit__title"><a href="#"><?php echo $ssg_content_title ?></a></h5>
                    <?php endif; ?>

                    <?php if (in_array('summary', $ssg_content_show_element)) : ?>

                        <p class="ssg_hiring_benefit__text"><?php echo $ssg_content_summary ?></p>
                    <?php endif; ?>

                </div>
            </div>
        <?php endforeach ?>

    </div>
</div>
<?php
ANT_Section_View::render_close_tag();
?>