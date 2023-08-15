<?php

// Load values and assign defaults.

$fields = [];



// default options merge

$fields += ANT_Option_Model::get_video_options();



// Get options

$option = ANT_Option_Model::get_field_values($fields);

extract($option);



// Get data



$video_style = $ssg_video_responsive ? 'style="width:100%;"' : sprintf('style="width:%s%;', $ssg_video_width);

$video_classes = $ssg_video_alignment;



?>

<!-- ssg_video -->



<div class="ssg_video__item <?php echo $video_classes ?>" <?php echo $video_style ?> <?php ANT_Section_View::render_item_aos($option, 3, 1) ?>>

    <?php if ($ssg_video_youtube_video) :

        // Link YouTube dạng https://www.youtube.com/watch?v=VIDEO_ID

        $youtubeLink = $ssg_video_youtube_link;



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

        <?php if ($ssg_video_src) : ?>

            <!-- Video -->

            <video class="video-slide" width="auto" height="100%" muted="" playsinline="" autoplay="" loop="" data-duration="10000">

                <source src="<?php echo $ssg_video_src ?>" type="video/mp4">

            </video>

        <?php else : ?>

            <h5>Vui lòng tải lên một Video hoặc chọn Link từ Youtube.</h5>

        <?php endif ?>

    <?php endif; ?>

</div>