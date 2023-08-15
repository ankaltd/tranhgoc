<?php

// Load values and assign defaults.

$fields = [

    'wep_content_html'            => '',

];



// default options merge

$fields += WEP_Option_Model::get_section_options();

$fields += WEP_Option_Model::get_heading_options();

$fields += WEP_Option_Model::get_description_options();

$fields += WEP_Option_Model::get_background_options();

$fields += WEP_Option_Model::get_image_options();



// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);



// Get data



?>

<!-- wep_core_value -->

<?php

WEP_Section_View::render_section_tag($option);

?>

<div class="container">

    <div class="row row-cols-1 row-cols-md-2 justify-content-center">

        <div class="col wep_core_value__item">

            <?php

            WEP_Section_View::render_section_heading_desc($option);

            ?>

        </div>

        <div class="col wep_core_value__item" <?php WEP_Section_View::render_item_aos($option, 3, 1) ?>>

            <div class="wep_core_value__image">

                <?php if ($wep_image_youtube_video) :

                    // Link YouTube dạng https://www.youtube.com/watch?v=VIDEO_ID

                    $youtubeLink = $wep_image_youtube_link;



                    // Trích xuất mã định danh VIDEO_ID từ link

                    $videoID = '';

                    if (preg_match('/watch\?v=(\S+)/', $youtubeLink, $matches)) {

                        $videoID = $matches[1];

                    }



                    // Kiểm tra nếu có mã định danh, thì chèn video bằng mã nhúng

                    if (!empty($videoID)) {

                        echo '<div class="embed-responsive video_youtube_wrapper">

                            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/' . $videoID . '" frameborder="0" allowfullscreen></iframe></div>';

                    } else {

                        echo 'Không tìm thấy mã định danh của video.';

                    }



                ?>

                <?php else : ?>

                    <img src="<?php echo $wep_image_src ?>" alt="<?php echo $wep_heading_text ?>" class="img-fluid wep_concept">

                <?php endif; ?>

            </div>

        </div>

    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>