<?php

/* Contact Infor */

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

<!-- wep_contact_infor -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_contact_infor');

?>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-12">

            <?php

            WEP_Section_View::render_section_heading_desc($option);

            ?>

        </div>

    </div>

    <div class="row g-5 justify-content-center">

        <?php $stt = 0;

        foreach ($data as $hiring_ev) : ?>

            <?php extract($hiring_ev) ?>

            <div class="col-md-4">

                <div class="wep_contact_infor__icon wep_contact_infor__icon--<?php echo $stt; ?>">

                    <img src="<?php echo $wep_content_image ?>" alt="<?php echo $wep_content_title ?>">

                </div>

                <div class="wep_contact_infor__item">

                    <div class="content">

                        <h4 class="wep_contact_infor__title"><?php echo $wep_content_title ?></h4>

                        <p class="wep_contact_infor__text"><?php echo $wep_content_summary ?></p>

                    </div>

                </div>

            </div>

        <?php $stt++;

        endforeach; ?>



    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>