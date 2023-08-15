<?php

/* About Vision */

// Load values and assign defaults.

$fields = [

    // Content

    'wep_content_image_responsive'      => true,

    'wep_content_list'                  => array(),

    'wep_content_image_align'           => 0,

    'wep_content_text_align'            => 0,

    'wep_content_show_element'          => array(),

];



// default options merge

$fields += WEP_Option_Model::get_section_options();

$fields += WEP_Option_Model::get_heading_options();

$fields += WEP_Option_Model::get_description_options();

$fields += WEP_Option_Model::get_background_options();



// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);





// Get data content

$data = $wep_content_list;





?>

<!-- wep_vision -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_concept--section');

?>

<div class="container">

    <div class="row">

        <?php

        WEP_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <div class="row row-cols-1 row-cols-md-2 g-5 justify-content-center">

        <?php $stt=0; foreach ($data as $vision) : ?>

            <?php extract($vision) ?>

            <div class="col" <?php WEP_Section_View::render_item_aos($option, 3, $stt) ?> >

                <div class="wep_vision__item">

                    <div class="content">

                        <?php if (in_array('thumbnail', $wep_content_show_element)) : ?>

                            <div class="wep_vision__image">

                                <img src="<?php echo $wep_content_image ?>" alt="<?php echo $wep_content_title ?>" class="<?php echo $wep_content_image_responsive ? 'img-fluid' : '' ?>">

                            </div>

                        <?php endif; ?>

                        <div class="wep_vision__description">

                            <?php if (in_array('title', $wep_content_show_element)) : ?>

                                <h4 class="wep_vision__title"><?php echo $wep_content_title ?></h4>

                            <?php endif ?>



                            <?php if (in_array('summary', $wep_content_show_element)) : ?>

                                <p class="wep_vision__text"><?php echo $wep_content_summary ?></p>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        <?php $stt++; endforeach ?>



    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>