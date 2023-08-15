<?php

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

<!-- wep_service_benefit -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_service_benefit wep_concept--section');

?>

<div class="container">

    <div class="row">

        <?php

        WEP_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <div class="row row-cols-1 row-cols-md-3 justify-content-center">

        <?php foreach ($data as $benefit) : ?>

            <?php extract($benefit) ?>

            <div class="col">

                <div class="wep_service_benefit__item">

                    <div class="content">

                        <div class="wep_service_benefit__description">

                            <h4 class="wep_service_benefit__title"><?php echo $wep_content_title ?></h4>

                            <p class="wep_service_benefit__text"><?php echo $wep_content_summary ?></p>

                        </div>

                    </div>

                </div>

            </div>

        <?php endforeach ?>



    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>