<?php

// Load values and assign defaults.

$fields = [

    // Content
    'wep_content_image_responsive'      => true,
    'wep_content_list'                  => array(),
    'wep_content_image_align'           => 0,
    'wep_content_text_align'            => 0,
    'wep_content_show_element'          => array(),
    'wep_content_slider_show'           => true,
    'wep_content_slider_number'         => 3,
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

$data = $wep_content_list;

?>

<!-- wep_history -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_history wep_concept--section');

?>

<input type="hidden" id="totalSliderHistory" value="<?php echo $wep_content_slider_number ?>">

<?php if ($wep_content_slider_show) : ?>
    <div class="container">

        <div class="row">

            <?php

            WEP_Section_View::render_section_heading_desc($option);

            ?>

        </div>

        <div class="row justify-content-center wep_history_slick">

            <?php $stt = 0;
            foreach ($data as $history) : ?>

                <?php extract($history) ?>
                <div class="wep_history__wrapper" style="padding: 0 15px; height:100%">
                    <div class="wep_history__item" <?php WEP_Section_View::render_item_aos($option, 3, $stt) ?>>

                        <div class="content">

                            <h4><?php echo $wep_content_title ?></h4>

                            <p><?php echo $wep_content_summary ?></p>

                        </div>
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

        <div class="row row-cols-1 row-cols-md-3 gy-3 gy-md-5 justify-content-center">

            <?php $stt = 0;
            foreach ($data as $history) : ?>

                <?php extract($history) ?>

                <div class="col" <?php WEP_Section_View::render_item_aos($option, 3, $stt) ?>>

                    <div class="wep_history__item">

                        <div class="content">

                            <h4><?php echo $wep_content_title ?></h4>

                            <p><?php echo $wep_content_summary ?></p>

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