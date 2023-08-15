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

$fields += WEP_Option_Model::get_section_options();

$fields += WEP_Option_Model::get_heading_options();

$fields += WEP_Option_Model::get_description_options();

$fields += WEP_Option_Model::get_background_options();



// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);





// Get data content

$data = $ssg_content_list;





?>

<!-- ssg_culture -->

<?php

WEP_Section_View::render_section_tag($option, 'ssg_concept--section');

?>

<div class="container">

    <div class="row">

        <?php

        WEP_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <div class="row row-cols-1 row-cols-md-3 justify-content-center ssg_margin--b4">

        <?php $stt=0; foreach ($data as $history) : ?>

            <?php extract($history) ?>

            <div class="col g-4" <?php WEP_Section_View::render_item_aos($option, 3, $stt) ?> >

                <div class="ssg_culture__item">

                    <div class="content">

                        <h4><?php echo $ssg_content_title ?></h4>

                    </div>

                </div>

            </div>

        <?php $stt++; endforeach ?>



    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>