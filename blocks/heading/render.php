<?php

// Load values and assign defaults.

$fields = [];

$fields += WEP_Option_Model::get_section_options();
$fields += WEP_Option_Model::get_heading_options();
$fields += WEP_Option_Model::get_description_options();
$fields += WEP_Option_Model::get_background_options();
// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);

?>



<div class="ssg_block">

    <?php

    WEP_Section_View::render_section_heading_desc($option);

    ?>

</div>