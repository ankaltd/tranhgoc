<?php
/* About Vision */
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
<!-- ssg_vision -->
<?php
ANT_Section_View::render_section_tag($option, 'ssg_concept--section');
?>
<div class="container">
    <div class="row">
        <?php
        ANT_Section_View::render_section_heading_desc($option);
        ?>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-5 justify-content-center">
        <?php $stt=0; foreach ($data as $vision) : ?>
            <?php extract($vision) ?>
            <div class="col" <?php ANT_Section_View::render_item_aos($option, 3, $stt) ?> >
                <div class="ssg_vision__item">
                    <div class="content">
                        <?php if (in_array('thumbnail', $ssg_content_show_element)) : ?>
                            <div class="ssg_vision__image">
                                <img src="<?php echo $ssg_content_image ?>" alt="<?php echo $ssg_content_title ?>" class="<?php echo $ssg_content_image_responsive ? 'img-fluid' : '' ?>">
                            </div>
                        <?php endif; ?>
                        <div class="ssg_vision__description">
                            <?php if (in_array('title', $ssg_content_show_element)) : ?>
                                <h4 class="ssg_vision__title"><?php echo $ssg_content_title ?></h4>
                            <?php endif ?>

                            <?php if (in_array('summary', $ssg_content_show_element)) : ?>
                                <p class="ssg_vision__text"><?php echo $ssg_content_summary ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php $stt++; endforeach ?>

    </div>
</div>
<?php
ANT_Section_View::render_close_tag();
?>