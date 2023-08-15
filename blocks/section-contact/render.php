<?php

// Load values and assign defaults.

$fields = [

    'ssg_content_number'                => 5,

    'ssg_content_order'                 => 'asc',

   

    // Button

    'ssg_button_name'                   => 'Liên hệ',

    'ssg_button_style'                  => '',

    'ssg_button_link'                   => '#',

    'ssg_button_target'                 => false,

];



// default options merge

$fields += WEP_Option_Model::get_section_options();

$fields += WEP_Option_Model::get_heading_options();

$fields += WEP_Option_Model::get_description_options();

$fields += WEP_Option_Model::get_background_options();



// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);



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