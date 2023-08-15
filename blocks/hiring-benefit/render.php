<?php

/* Hiring Benefit */

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

<!-- wep_hiring_benefit -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_hiring_benefit');

?>

<div class="container ">

    <div class="row">

        <?php

        WEP_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <div class="row row-cols-2 row-cols-md-3 g-3 g-md-5 justify-content-center">



        <?php foreach ($data as $hiring_ev) : ?>

            <?php extract($hiring_ev) ?>

            <div class="col">

                <div class="wep_hiring_benefit__item">

                    <?php if (in_array('thumbnail', $wep_content_show_element)) : ?>



                        <div href="" class="wep_hiring_benefit__icon">

                            <img src="<?php echo $wep_content_image ?>" alt="<?php echo $wep_content_title ?>">

                        </div>

                    <?php endif; ?>



                    <?php if (in_array('title', $wep_content_show_element)) : ?>



                        <h5 class="wep_hiring_benefit__title"><a href="#"><?php echo $wep_content_title ?></a></h5>

                    <?php endif; ?>



                    <?php if (in_array('summary', $wep_content_show_element)) : ?>



                        <p class="wep_hiring_benefit__text"><?php echo $wep_content_summary ?></p>

                    <?php endif; ?>



                </div>

            </div>

        <?php endforeach ?>



    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>