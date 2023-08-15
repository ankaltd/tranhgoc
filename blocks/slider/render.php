<?php



// Load values and assign defaults.

$fields = [

    'wep_section_id'                   => 'wep_slider',

    'wep_section_classes'              => 'wep_slider',

    'wep_section_custom_css'           => '',

    'wep_section_is_anchor'            => false,

    'wep_image_init_item'              => 1,

    'wep_image_list'                   => array(

        array(

            'wep_is_video'                      => false,

            'wep_image_video'                   => 'https://tranhgoc.test/wp-content/themes/tranhgoc/assets/images/video_demo.mp4',

            'wep_image_src'                     => 'https://tranhgoc.test/wp-content/themes/tranhgoc/assets/images/home/home-banner.png',

            'wep_image_mobile_src'              => '',

            'wep_image_logo_src'                => 'https://tranhgoc.test/wp-content/uploads/2023/07/footer-logo-dark.png',

            'wep_image_heading'                 => 'Một kỷ nguyên mới của trí tuệ nhân tạo cho tất cả mọi người',

            'wep_image_text_align'              => 'text-center',

            'wep_image_item_space'              => 30,

            'wep_image_heading_color'           => '',

            'wep_image_description'             => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical',

            'wep_image_description_color'       => '',

            'wep_image_list_button'             => array(

                array(

                    'wep_image_button_text'             => 'Xem thêm',

                    'wep_image_button_style'            => 'wep_button--white',

                    'wep_image_button_link'             => '#',

                    'wep_image_button_target'           => false,

                )

            )

        ),

    )

];



// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);



$wep_image_init_item = $wep_image_init_item - 1;

$slider_count = count($wep_image_list);



?>

<!-- wep_slider -->

<section id="<?php echo $wep_section_id ?>" class="<?php echo $wep_section_classes ?> no_padding" style="<?php echo $wep_section_custom_css ?>" data-scroll-section>

    <div class="container-fluid gx-0">

        <div id="mySlider" class="carousel slide" data-bs-ride="carousel">



            <?php if ($slider_count > 1) : ?>

                <!-- dots... -->

                <ol class="carousel-indicators">

                    <?php for ($i = 0; $i < $slider_count; $i++) : ?>

                        <li data-bs-target="#mySlider" data-bs-slide-to="<?php echo $i ?>" class="<?php echo $i == $wep_image_init_item ? 'active' : '' ?>"></li>

                    <?php endfor; ?>

                </ol>

            <?php endif; ?>



            <div class="carousel-inner">

                <?php $stt = 0; ?>

                <?php foreach ($wep_image_list as $item) : ?>

                    <?php extract($item); ?>

                    <div class="<?php echo $wep_section_classes ?>__slider <?php echo $wep_image_text_align ?> carousel-item <?php echo $stt == $wep_image_init_item ? 'active' : '' ?>">

                        <?php if ($wep_is_video) : ?>

                            <!-- Video -->

                            <video class="video-slide" width="auto" height="100%" muted="" playsinline="" autoplay="" loop="" data-duration="10000">

                                <source src="<?php echo $wep_image_video ?>" type="video/mp4">

                            </video>

                        <?php else : ?>

                            <!-- Images -->

                            <?php if ($wep_image_mobile_src === false) : ?>

                                <?php if ($wep_image_src) : ?>

                                    <img src="<?php echo $wep_image_src ?>" alt="<?php echo $wep_image_heading ?>" class="img-fluid w-100">

                                <?php endif; ?>

                            <?php else : ?>

                                <?php if ($wep_image_src) : ?>

                                    <img src="<?php echo $wep_image_src ?>" alt="<?php echo $wep_image_heading ?>" class="img-fluid d-none d-md-block w-100">

                                <?php endif; ?>

                                <img src="<?php echo $wep_image_mobile_src ?>" alt="<?php echo $wep_image_heading ?>" class="img-fluid d-block d-md-none w-100">

                            <?php endif; ?>

                        <?php endif; ?>



                        <div class="carousel-caption <?php echo $wep_image_text_align ?>">

                            <?php

                            $wep_item_space = sprintf('margin-bottom: %spx;', $wep_image_item_space);

                            ?>

                            

                            <?php if ($wep_image_logo_src) : ?>

                                <img class="wep_banner_logo" style="<?php echo $wep_item_space ?>" src="<?php echo $wep_image_logo_src ?>" alt="<?php echo $wep_image_heading ?>">

                            <?php endif; ?>

                            <?php if ($wep_image_heading) : ?>

                                <h2 style="<?php echo $wep_item_space ?>"><?php echo $wep_image_heading ?></h2>

                            <?php endif; ?>

                            <?php if ($wep_image_description) : ?>

                                <p class="wep_margin--b4" style="<?php echo $wep_item_space ?>"><?php echo $wep_image_description ?></p>

                            <?php endif; ?>

                            <?php



                            if ($wep_image_list_button) :

                                foreach ($wep_image_list_button as $button) :

                                    extract($button);

                                    if ($wep_image_button_text !== '') : ?>

                                        <a class="wep_button <?php echo $wep_image_button_style ?>" href="<?php echo $wep_image_button_link ?>" <?php echo $wep_image_button_target ? 'target="blank"' : '' ?>><?php echo $wep_image_button_text ?></a>

                            <?php endif;

                                endforeach;

                            endif;

                            ?>



                        </div>

                    </div>

                    <?php $stt++; ?>

                <?php endforeach; ?>

            </div>



            <?php if ($slider_count > 1) : ?>

                <!-- next and previous -->

                <button class="carousel-control-prev" type="button" data-bs-target="#mySlider" data-bs-slide="prev">

                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                    <span class="visually-hidden">Previous</span>

                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#mySlider" data-bs-slide="next">

                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                    <span class="visually-hidden">Next</span>

                </button>

            <?php endif; ?>



        </div>

    </div>

</section>