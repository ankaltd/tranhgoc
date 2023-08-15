<?php

// Load values and assign defaults.

$fields = [

    // Content

    'wep_people_list'                  => array(),
    'wep_people_text_align'            => 'text-center',
    'wep_people_number'                => 4,
    'wep_people_style'                 => false, // Slider false Grid true

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
$data = $wep_people_list;

?>

<!-- wep_bod -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_concept--section wep_bod');

?>

<input type="hidden" id="totalSliderBOD" value="<?php echo $wep_people_number ?>">


<?php if ($wep_people_style) : ?>
    <div class="container">

        <div class="row">
            <?php

            WEP_Section_View::render_section_heading_desc($option);

            ?>

        </div>

        <div class="row justify-content-center wep_bod_slick">

            <?php $stt = 0;
            foreach ($data as $people) : ?>

                <?php extract($people) ?>

                <div class="wep_bod__item" <?php WEP_Section_View::render_item_aos($option, 3, $stt) ?>>

                    <div class="wep_bod__thumbnail wep_margin">

                        <img src="<?php echo $wep_people_image ?>" alt="<?php echo $wep_people_name ?>" class="img-fluid wep_concept">

                    </div>

                    <div class="wep_bod__content">

                        <h5 class="<?php echo $wep_people_text_align ?>"><?php echo $wep_people_name ?></h5>

                        <p class="<?php echo $wep_people_text_align ?>"><?php echo $wep_people_title ?></p>

                    </div>

                </div>

            <?php $stt++;
            endforeach ?>



        </div>

    </div>



<?php else : ?>
    <div class="container">

        <div class="row">

            <?php

            WEP_Section_View::render_section_heading_desc($option);

            ?>


        </div>

        <div class="row row-cols-2  row-cols-md-4 justify-content-center">

            <?php $stt = 0;
            foreach ($data as $people) : ?>

                <?php extract($people) ?>

                <div class="col" <?php WEP_Section_View::render_item_aos($option, 3, $stt) ?>>

                    <div class="wep_bod__item">

                        <div class="wep_bod__thumbnail wep_margin">

                            <img src="<?php echo $wep_people_image ?>" alt="<?php echo $wep_people_name ?>" class="img-fluid wep_concept">

                        </div>

                        <div class="wep_bod__content">

                            <h5 class="<?php echo $wep_people_text_align ?>"><?php echo $wep_people_name ?></h5>

                            <p class="<?php echo $wep_people_text_align ?>"><?php echo $wep_people_title ?></p>

                        </div>

                    </div>

                </div>

            <?php $stt++;
            endforeach ?>



        </div>

    </div>
<?php endif; ?>

<?php

WEP_Section_View::render_close_tag();

?>