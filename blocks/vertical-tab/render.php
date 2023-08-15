<?php

// Load values and assign defaults.

$fields = [

    // Content Tab

    'wep_tab_ver_content'                  => array(),

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

$data = $wep_tab_ver_content;





?>

<!-- wep_service_tab -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_vertical_tab wep_concept--section');

?>

<div class="container">

    <div class="row">

        <?php

        WEP_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <div class="row">

        <div class="col-md-4">

            <div class="nav flex-column nav-pills" id="v-pills-tab-<?php echo $wep_section_id ?>" role="tablist" aria-orientation="vertical">

                <?php 

                $stt = 0;

                foreach ($data as $item) : 

                    extract($item);

                    $pill_name = sprintf('v-pills-%s-tab-%s',$stt,$wep_section_id);

                    $pill_anchor_url = sprintf('#v-pills-%s-%s',$stt,$wep_section_id);

                    $pill_anchor_name = sprintf('v-pills-%s-%s',$stt,$wep_section_id);





                    // printf('<a class="nav-link %s" id="%s" data-bs-toggle="pill" href="%s" role="tab" >%s</a>');

                ?>



                    <a class="nav-link <?php echo ($stt === 0) ? 'active' : '' ?>" id="<?php echo $pill_name; ?>" data-bs-toggle="pill" href="<?php echo $pill_anchor_url; ?>" role="tab" aria-controls="<?php echo $pill_anchor_name; ?>" aria-selected="<?php echo ($stt === 0) ? 'true' : 'false' ?>">

                        <?php echo $wep_tab_ver_title; ?>

                    </a>

                <?php 

                    $stt++;

                endforeach; 

                ?>

            </div>

        </div>

        <div class="col-md-8">

            <div class="tab-content" id="v-pills-tabContent-<?php echo $wep_section_id ?>">

            <?php 

                $stt = 0;

                foreach ($data as $item) : 

                    extract($item); 

                    $pill_name = sprintf('v-pills-%s-tab-%s',$stt,$wep_section_id);

                    $pill_anchor_url = sprintf('#v-pills-%s-%s',$stt,$wep_section_id);

                    $pill_anchor_name = sprintf('v-pills-%s-%s',$stt,$wep_section_id);

            ?>

                    <div class="tab-pane fade <?php echo ($stt == 0) ? 'show active' : '' ?>" id="<?php echo $pill_anchor_name ?>" role="tabpanel" aria-labelledby="<?php echo $pill_name ?>">

                        <div><?php echo $wep_tab_ver_content ?></div>

                    </div>

            <?php 

                    $stt++; 

                endforeach; 

            ?>

            </div>

        </div>

    </div>

</div>



<?php

WEP_Section_View::render_close_tag();

?>