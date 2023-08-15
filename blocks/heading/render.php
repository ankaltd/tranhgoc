<?php

// Load values and assign defaults.

$fields = [];

$fields += ANT_Option_Model::get_section_options();
$fields += ANT_Option_Model::get_heading_options();
$fields += ANT_Option_Model::get_description_options();
$fields += ANT_Option_Model::get_background_options();
// Get options

$option = ANT_Option_Model::get_field_values($fields);

extract($option);

?>



<div class="ssg_block">

    <?php

    ANT_Section_View::render_section_heading_desc($option);

    ?>

</div>