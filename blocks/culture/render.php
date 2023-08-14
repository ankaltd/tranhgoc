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

$fields += ANT_Option_Model::get_section_options();

$fields += ANT_Option_Model::get_heading_options();

WEP_lds += ANT_Option_Model::get_description_options();

$fields += ANT_Option_Model::get_background_options();


WEP_
// Get options

$option = ANT_Option_Model::get_field_values($fields);

extract($option);
WEP_




// Get data content

$data = $ssg_content_list;




WEP_
?>

<!-- ssg_culture -->

<?php

ANT_Section_View::render_section_tag($option, 'ssg_concept--section');

?>

<div class="container">

    <div class="row">

        <?php

        ANT_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <div class="row row-cols-1 row-cols-md-3 justify-content-center ssg_margin--b4">

        <?php $stt=0; foreach ($data as $history) : ?>

            <?php extract($history) ?>

            <div class="col g-4" <?php ANT_Section_View::render_item_aos($option, 3, $stt) ?> >

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

ANT_Section_View::render_close_tag();

?>