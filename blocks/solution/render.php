<?php

/* Home Solution */

// Load values and assign defaults.

$fields = [];



// default options merge
$fields += ANT_Option_Model::get_content_options();

$fields += ANT_Option_Model::get_section_options(); 

$fields += ANT_Option_Model::get_heading_options(); 

$fields += ANT_Option_Model::get_description_options(); 

$fields += ANT_Option_Model::get_background_options(); 



// Get options

$option = ANT_Option_Model::get_field_values($fields);

extract($option);



// Get data

$data = ANT_Section_Model::get_list_solution($ssg_content_number, $ssg_content_order, 'ssg_thumb_solution');


if ($ssg_content_with_select) {
    $data = ANT_Section_Model::get_list_posts($ssg_content_selected, 'ssg_thumb_solution');
} else {
    $data = ANT_Section_Model::get_list_solution($ssg_content_number, $ssg_content_order, 'ssg_thumb_solution');
}


?>

<!-- ssg_home_solution -->

<?php

ANT_Section_View::render_section_tag($option, 'ssg_home_solution no_padding');

?>

<div class="container-fluid mx-0 g-0">

    <div class="ssg_home_solution__header row text-center mx-0">

        <?php

        ANT_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <div class="ssg_home_solution__main row mx-0 gx-0 justify-content-center">

        <?php $stt = 0;

        foreach ($data as $item) : ?>

            <?php extract($item) ?>

            <div class="col ssg_home_solution__wrapper <?php echo $stt == 2 ? 'active' : '' ?>" <?php ANT_Section_View::render_item_aos($option, 3, $stt) ?>  >

                <div class="ssg_home_solution__slider">

                    <div class="ssg_home_solution__thumbnail">

                        <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>">

                    </div>

                    <div class="ssg_home_solution__content">

                        <h5><?php echo $title ?></h5>

                        <a class="ssg_button ssg_button--blue" href="<?php echo $permalink ?>">Xem thêm</a>

                    </div>

                </div>

            </div>

        <?php $stt++;

        endforeach; ?>

    </div>

</div>



<?php

ANT_Section_View::render_close_tag();

?>