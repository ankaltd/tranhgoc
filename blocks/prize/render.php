<?php

// Load values and assign defaults.

$fields = [

    // Content

    'wep_content_image_responsive'      => true,

    'wep_content_list'                  => array(),

    'wep_content_image_align'           => 0,

    'wep_content_text_align'            => 0,

    'wep_content_show_element'          => array(),

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

<!-- wep_prize -->

<?php

WEP_Section_View::render_section_tag($option, '');

?>

<div class="container">

    <div class="row">

        <?php

        WEP_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <div class="row row-cols-1 row-cols-md-3 justify-content-center g-5">
        <?php if ($data) : ?>
            <?php $stt = 0;
            foreach ($data as $prize) : ?>

                <?php extract($prize) ?>

                <div class="col" <?php WEP_Section_View::render_item_aos($option, 3, $stt) ?>>

                    <div class="wep_prize__item">

                        <?php if (in_array('thumbnail', $wep_content_show_element)) : ?>

                            <div class="wep_prize__thumbnail wep_margin--b3 <?php echo $wep_content_image_align ?>">

                                <img src="<?php echo $wep_content_image ?>" alt="<?php echo $wep_content_title ?>" class="<?php echo $wep_content_image_responsive ? 'img-fluid' : '' ?>">

                            </div>

                        <?php endif ?>

                        <?php if (in_array('title', $wep_content_show_element)) : ?>

                            <h5 class="wep_prize__caption <?php echo $wep_content_text_align ?>"><?php echo $wep_content_title ?></h5>

                        <?php endif ?>

                    </div>

                </div>



            <?php $stt++;
            endforeach ?>

        <?php endif; ?>

    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>