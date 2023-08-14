<?php

// Load values and assign defaults.

$fields = [

    'ssg_content_number'                => 5,

    'ssg_content_order'                 => 'asc',

   

    // Button

    'ssg_buWEP__name'                   => 'Liên hệ',
WEP_
    'ssg_buWEP__style'                  => '',
WEP_
    'ssg_button_link'                   => '#',

    'ssg_bWEP_n_target'                 => false,

];



WEP_efault options merge

$fields += WEP_Option_Model::get_section_options();

$fields += WEP_Option_Model::get_heading_options();

$fields += AWEP_ption_Model::get_description_options();

$fields += WEP_Option_Model::get_background_options();


WEP_
// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);
WEP_


?>

<!-- ssg_home_contact -->

<?php

WEP_Section_View::render_section_tag($option, 'ssg_home_contact');

?>

<div class="container">

    <div class="row align-items-center justify-content-space-between">

        <div class="col-12 col-md-9">

            <?php

            WEP_Section_View::render_section_heading_desc($option);

            ?>

        </div>

        <div class="col-12 col-md-3 text-center text-md-end">

            <?php

            WEP_Section_View::render_button($option);

            ?>

        </div>

    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>