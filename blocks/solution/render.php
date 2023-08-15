<?php

/* Home Solution */

// Load values and assign defaults.

$fields = [];



// default options merge
$fields += WEP_Option_Model::get_content_options();

$fields += WEP_Option_Model::get_section_options(); 

$fields += WEP_Option_Model::get_heading_options(); 

$fields += WEP_Option_Model::get_description_options(); 

$fields += WEP_Option_Model::get_background_options(); 



// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);



// Get data

$data = WEP_Section_Model::get_list_solution($wep_content_number, $wep_content_order, 'wep_thumb_solution');


if ($wep_content_with_select) {
    $data = WEP_Section_Model::get_list_posts($wep_content_selected, 'wep_thumb_solution');
} else {
    $data = WEP_Section_Model::get_list_solution($wep_content_number, $wep_content_order, 'wep_thumb_solution');
}


?>

<!-- wep_home_solution -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_home_solution no_padding');

?>

<div class="container-fluid mx-0 g-0">

    <div class="wep_home_solution__header row text-center mx-0">

        <?php

        WEP_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <div class="wep_home_solution__main row mx-0 gx-0 justify-content-center">

        <?php $stt = 0;

        foreach ($data as $item) : ?>

            <?php extract($item) ?>

            <div class="col wep_home_solution__wrapper <?php echo $stt == 2 ? 'active' : '' ?>" <?php WEP_Section_View::render_item_aos($option, 3, $stt) ?>  >

                <div class="wep_home_solution__slider">

                    <div class="wep_home_solution__thumbnail">

                        <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>">

                    </div>

                    <div class="wep_home_solution__content">

                        <h5><?php echo $title ?></h5>

                        <a class="wep_button wep_button--blue" href="<?php echo $permalink ?>">Xem thêm</a>

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