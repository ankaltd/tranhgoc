<?php



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

if ($wep_content_with_select) {
    $data = WEP_Section_Model::get_list_posts($wep_content_selected, 'wep_thumb_service');
} else {
    $data = WEP_Section_Model::get_list_service($wep_content_number + 1, $wep_content_order, 'wep_thumb_service');
}

?>

<!-- wep_home_service -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_home_service');

?>

<div class="container">

    <div class="row text-center wep_home_service_heading">

        <?php

        WEP_Section_View::render_section_heading_desc($option);

        ?>

        <input type="hidden" id="totalSlider" value="<?php echo $wep_content_number + 1 ?>">

    </div>

    <?php
    $is_slider_class = 'wep_home_service__slick';
    $col_slider_class = 'col';
    $col_content_class = '';
    if ($wep_content_show_grid) {
        $is_slider_class = '';
        $col_slider_class = 'col-12 col-md-3';
        $col_content_class = 'pt-4 d-block';
    }
    ?>

    <div class="row gx-0 mx-0 justify-content-center <?php echo $is_slider_class ?>">

        <?php $stt = 0;

        foreach ($data as $slider) : ?>

            <?php extract($slider) ?>

            <div class="<?php echo $col_slider_class ?>" <?php WEP_Section_View::render_item_aos($option, 3, $stt) ?>>

                <div class="service_wrapper">

                    <?php if ($wep_content_show_grid) : ?>
                        <div class="wep_home_service__slider <?php echo $stt == 200 ? 'active' : '' ?>">
                        <?php endif; ?>

                        <?php if (in_array('thumbnail', $wep_content_show_elements)) : ?>

                            <div class="wep_home_service__thumbnail">
                                <?php if (in_array('link', $wep_content_show_elements)) : ?>

                                    <a href="<?php echo $permalink ?>">
                                    <?php endif; ?>
                                    <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" class="img-fluid">
                                    <?php if (in_array('link', $wep_content_show_elements)) : ?>
                                    </a>

                                <?php endif; ?>
                            </div> <?php endif; ?>

                        <div class="wep_home_service__content <?php echo $col_content_class ?>">

                            <?php if (in_array('title', $wep_content_show_elements)) : ?>
                                <h4>
                                    <?php if (in_array('link', $wep_content_show_elements)) : ?>
                                        <a href="<?php echo $permalink ?>">
                                        <?php endif; ?>
                                        <?php echo $title ?>
                                        <?php if (in_array('link', $wep_content_show_elements)) : ?>
                                        </a>
                                    <?php endif; ?>
                                </h4>
                            <?php endif; ?>

                            <?php if (in_array('summary', $wep_content_show_elements)) : ?>
                                <p><?php echo $excerpt ?></p>
                            <?php endif ?>

                            <?php if (in_array('readmore', $wep_content_show_elements)) : ?>
                                <a href="<?php echo $permalink ?>" class="wep_more_link"><?php _e('Xem thêm', 'wep') ?></a>
                            <?php endif; ?>

                        </div>

                        <?php if ($wep_content_show_grid) : ?>
                        </div>
                    <?php endif; ?>

                </div>

            </div>

        <?php $stt++;

        endforeach; ?>

    </div>

</div>



<?php

WEP_Section_View::render_close_tag();

?>