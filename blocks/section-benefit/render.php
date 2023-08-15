<?php
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
<!-- ssg_service_benefit -->
<?php
ANT_Section_View::render_section_tag($option, 'ssg_service_benefit ssg_concept--section');
?>
<div class="container">
    <div class="row">
        <?php
        ANT_Section_View::render_section_heading_desc($option);
        ?>
    </div>
    <div class="row row-cols-1 row-cols-md-3 justify-content-center">
        <?php foreach ($data as $benefit) : ?>
            <?php extract($benefit) ?>
            <div class="col">
                <div class="ssg_service_benefit__item">
                    <div class="content">
                        <div class="ssg_service_benefit__description">
                            <h4 class="ssg_service_benefit__title"><?php echo $ssg_content_title ?></h4>
                            <p class="ssg_service_benefit__text"><?php echo $ssg_content_summary ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</div>
<?php
ANT_Section_View::render_close_tag();
?>