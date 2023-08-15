<?php

// Load values and assign defaults.

$fields = [

    // Content

    'ssg_people_list'                  => array(),
    'ssg_people_text_align'            => 'text-center',
    'ssg_people_number'                => 4,
    'ssg_people_style'                 => false, // Slider false Grid true

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
$data = $ssg_people_list;

?>

<!-- ssg_bod -->

<?php

WEP_Section_View::render_section_tag($option, 'ssg_concept--section ssg_bod');

?>

<input type="hidden" id="totalSliderBOD" value="<?php echo $ssg_people_number ?>">


<?php if ($ssg_people_style) : ?>
    <div class="container">

        <div class="row">
            <?php

            WEP_Section_View::render_section_heading_desc($option);

            ?>

        </div>

        <div class="row justify-content-center ssg_bod_slick">

            <?php $stt = 0;
            foreach ($data as $people) : ?>

                <?php extract($people) ?>

                <div class="ssg_bod__item" <?php WEP_Section_View::render_item_aos($option, 3, $stt) ?>>

                    <div class="ssg_bod__thumbnail ssg_margin">

                        <img src="<?php echo $ssg_people_image ?>" alt="<?php echo $ssg_people_name ?>" class="img-fluid ssg_concept">

                    </div>

                    <div class="ssg_bod__content">

                        <h5 class="<?php echo $ssg_people_text_align ?>"><?php echo $ssg_people_name ?></h5>

                        <p class="<?php echo $ssg_people_text_align ?>"><?php echo $ssg_people_title ?></p>

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

                    <div class="ssg_bod__item">

                        <div class="ssg_bod__thumbnail ssg_margin">

                            <img src="<?php echo $ssg_people_image ?>" alt="<?php echo $ssg_people_name ?>" class="img-fluid ssg_concept">

                        </div>

                        <div class="ssg_bod__content">

                            <h5 class="<?php echo $ssg_people_text_align ?>"><?php echo $ssg_people_name ?></h5>

                            <p class="<?php echo $ssg_people_text_align ?>"><?php echo $ssg_people_title ?></p>

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