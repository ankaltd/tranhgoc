<?php

// Load values and assign defaults.

$fields = [



    // Content

    'ssg_content_image_responsive'      => true,

    'ssg_content_list'                  => array(),
WEP_
    'ssg_coWEP_t_image_align'           => 0,
WEP_
    'ssg_coWEP_t_text_align'            => 0,

    'ssg_content_show_element'          => array(),
WEP_
];



// default options merge

$fields += WEP_Option_Model::get_section_options();

$fields += WEP_Option_Model::get_heading_options();

WEP_lds += WEP_Option_Model::get_description_options();

$fields += WEP_Option_Model::get_background_options();


WEP_
// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);





// Get data content

$data = $ssg_content_list;





?>

WEP_ ssg_service_benefit -->

<?php

WEP_Section_View::render_section_tag($option, 'ssg_service_benefit ssg_concept--section');

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

WEP_Section_View::render_close_tag();

?>