<?php

/* About WEP  */

// Load values and assign defaults.

$fields = [

    'wep_image_src'               => 'https://tranhgoc.test/wp-content/themes/tranhgoc/assets/images/about/about-wep-image.png',

    'wep_image_link'              => '#',

    'wep_image_target'            => false,

    'wep_content_html'            => '',

];



// default options merge

$fields += WEP_Option_Model::get_section_options();

$fields += WEP_Option_Model::get_heading_options();

$fields += WEP_Option_Model::get_background_options();



// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);



// Get data



?>

<!-- wep_about -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_about');

?>

<div class="container">

    <div class="row">

        <h2 class="wep_heading justify-content-start" <?php WEP_Section_View::render_item_aos($option, 3, 1) ?>>
            <?php echo $wep_heading_text ?></h2>

        <div class="wep_about__photo" <?php WEP_Section_View::render_item_aos($option, 3, 2) ?>><img src="<?php echo $wep_image_src ?>" alt="Về WEP " class="img-fluid wep_margin--b3"></div>

        <div class="wep_about__content" <?php WEP_Section_View::render_item_aos($option, 3, 3) ?>>

            <?php echo $wep_content_html ?>

        </div>

    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>