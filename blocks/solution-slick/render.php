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

$slider_thumb_size = 'ssg_thumb_solution';
if ($ssg_content_show_grid) {
    $slider_thumb_size = 'ssg_thumb_service';
}


$data = ANT_Section_Model::get_list_solution($ssg_content_number, $ssg_content_order, $slider_thumb_size);
if ($ssg_content_with_select) {
    $data = ANT_Section_Model::get_list_posts($ssg_content_selected, $slider_thumb_size);
} else {
    $data = ANT_Section_Model::get_list_solution($ssg_content_number, $ssg_content_order, $slider_thumb_size);
}


?>

<!-- ssg_home_solution -->

<?php

ANT_Section_View::render_section_tag($option, 'ssg_home_solution_slick no_padding');

?>

<?php if ($ssg_content_show_grid) : ?>

    <div class="container">

        <div class="row text-center ssg_home_solution_heading">

            <?php

            ANT_Section_View::render_section_heading_desc($option);

            ?>

            <input type="hidden" id="totalSliderSolution" value="<?php echo $ssg_content_number + 1 ?>">

        </div>

        <div class="ssg_home_solution__slick row mx-0 gx-0 justify-content-center">

            <?php $stt = 0;

            foreach ($data as $item) : ?>

                <?php extract($item) ?>

                <div class="col ssg_home_solution__slider <?php echo $stt == 2 ? 'active' : '' ?>" <?php ANT_Section_View::render_item_aos($option, 3, $stt) ?>>

                    <div class="ssg_home_solution__slider">

                        <?php if (in_array('thumbnail', $ssg_content_show_elements)) : ?>

                            <div class="ssg_home_solution__thumbnail">
                                <?php if (in_array('link', $ssg_content_show_elements)) : ?>

                                    <a href="<?php echo $permalink ?>">
                                    <?php endif; ?>

                                    <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" class="img-fluid">
                                    <?php if (in_array('link', $ssg_content_show_elements)) : ?>
                                    </a>

                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <div class="ssg_home_service__content" style="display: block;">
                            <h5>
                                <?php if (in_array('link', $ssg_content_show_elements)) : ?>
                                    <a href="<?php echo $permalink ?>">
                                    <?php endif; ?>
                                    <?php echo $title ?>
                                    <?php if (in_array('link', $ssg_content_show_elements)) : ?>
                                    </a>
                                <?php endif; ?>
                            </h5>
                            <?php if (in_array('readmore', $ssg_content_show_elements)) : ?>
                                <a class="ssg_button ssg_button--blue" href="<?php echo $permalink ?>">Xem thêm</a>
                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            <?php $stt++;

            endforeach; ?>

        </div>

    </div>

<?php else : ?>
    <div class="container-fluid mx-0 g-0">

        <div class="ssg_home_solution__header row text-center mx-0">

            <?php

            ANT_Section_View::render_section_heading_desc($option);

            ?>

            <input type="hidden" id="totalSliderSolution" value="<?php echo $ssg_content_number + 1 ?>">


        </div>

        <div class="ssg_home_solution__main row mx-0 gx-0 justify-content-center">

            <?php $stt = 0;

            foreach ($data as $item) : ?>

                <?php extract($item) ?>

                <div class="col ssg_home_solution__wrapper <?php echo $stt == 2 ? 'active' : '' ?>" <?php ANT_Section_View::render_item_aos($option, 3, $stt) ?>>

                    <div class="ssg_home_solution__slider">

                        <?php if (in_array('thumbnail', $ssg_content_show_elements)) : ?>

                            <div class="ssg_home_solution__thumbnail">
                                <?php if (in_array('link', $ssg_content_show_elements)) : ?>

                                    <a href="<?php echo $permalink ?>">
                                    <?php endif; ?>

                                    <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>">
                                    <?php if (in_array('link', $ssg_content_show_elements)) : ?>
                                    </a>

                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <div class="ssg_home_solution__content">

                            <h5>
                                <?php if (in_array('link', $ssg_content_show_elements)) : ?>
                                    <a href="<?php echo $permalink ?>">
                                    <?php endif; ?>
                                    <?php echo $title ?>
                                    <?php if (in_array('link', $ssg_content_show_elements)) : ?>
                                    </a>
                                <?php endif; ?>
                            </h5>

                            <a class="ssg_button ssg_button--blue" href="<?php echo $permalink ?>">Xem thêm</a>

                        </div>

                    </div>

                </div>

            <?php $stt++;

            endforeach; ?>

        </div>

    </div>

<?php endif; ?>

<?php

ANT_Section_View::render_close_tag();

?>