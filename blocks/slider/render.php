<?php



// Load values and assign defaults.

$fields = [

    'ssg_section_id'                   => 'ssg_slider',

    'ssg_section_classes'              => 'ssg_slider',

    'ssg_section_custom_css'           => '',

    'ssg_section_is_anchor'            => false,

    'ssg_image_init_item'              => 1,

    'ssg_image_list'                   => array(

        array(

            'ssg_is_video'                      => false,

            'ssg_image_video'                   => 'https://demo.ssg.vn/wp-content/themes/ssg/assets/images/video_demo.mp4',

            'ssg_image_src'                     => 'https://demo.ssg.vn/wp-content/themes/ssg/assets/images/home/home-banner.png',

            'ssg_image_mobile_src'              => '',

            'ssg_image_logo_src'                => 'https://demo.ssg.vn/wp-content/uploads/2023/07/footer-logo-dark.png',

            'ssg_image_heading'                 => 'Một kỷ nguyên mới của trí tuệ nhân tạo cho tất cả mọi người',

            'ssg_image_text_align'              => 'text-center',

            'ssg_image_item_space'              => 30,

            'ssg_image_heading_color'           => '',

            'ssg_image_description'             => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical',

            'ssg_image_description_color'       => '',

            'ssg_image_list_button'             => array(

                array(

                    'ssg_image_button_text'             => 'Xem thêm',

                    'ssg_image_button_style'            => 'ssg_button--white',

                    'ssg_image_button_link'             => '#',

                    'ssg_image_button_target'           => false,

                )

            )

        ),

    )

];



// Get options

$option = ANT_Option_Model::get_field_values($fields);

extract($option);



$ssg_image_init_item = $ssg_image_init_item - 1;

$slider_count = count($ssg_image_list);



?>

<!-- ssg_slider -->

<section id="<?php echo $ssg_section_id ?>" class="<?php echo $ssg_section_classes ?> no_padding" style="<?php echo $ssg_section_custom_css ?>" data-scroll-section>

    <div class="container-fluid gx-0">

        <div id="mySlider" class="carousel slide" data-bs-ride="carousel">



            <?php if ($slider_count > 1) : ?>

                <!-- dots... -->

                <ol class="carousel-indicators">

                    <?php for ($i = 0; $i < $slider_count; $i++) : ?>

                        <li data-bs-target="#mySlider" data-bs-slide-to="<?php echo $i ?>" class="<?php echo $i == $ssg_image_init_item ? 'active' : '' ?>"></li>

                    <?php endfor; ?>

                </ol>

            <?php endif; ?>



            <div class="carousel-inner">

                <?php $stt = 0; ?>

                <?php foreach ($ssg_image_list as $item) : ?>

                    <?php extract($item); ?>

                    <div class="<?php echo $ssg_section_classes ?>__slider <?php echo $ssg_image_text_align ?> carousel-item <?php echo $stt == $ssg_image_init_item ? 'active' : '' ?>">

                        <?php if ($ssg_is_video) : ?>

                            <!-- Video -->

                            <video class="video-slide" width="auto" height="100%" muted="" playsinline="" autoplay="" loop="" data-duration="10000">

                                <source src="<?php echo $ssg_image_video ?>" type="video/mp4">

                            </video>

                        <?php else : ?>

                            <!-- Images -->

                            <?php if ($ssg_image_mobile_src === false) : ?>

                                <?php if ($ssg_image_src) : ?>

                                    <img src="<?php echo $ssg_image_src ?>" alt="<?php echo $ssg_image_heading ?>" class="img-fluid w-100">

                                <?php endif; ?>

                            <?php else : ?>

                                <?php if ($ssg_image_src) : ?>

                                    <img src="<?php echo $ssg_image_src ?>" alt="<?php echo $ssg_image_heading ?>" class="img-fluid d-none d-md-block w-100">

                                <?php endif; ?>

                                <img src="<?php echo $ssg_image_mobile_src ?>" alt="<?php echo $ssg_image_heading ?>" class="img-fluid d-block d-md-none w-100">

                            <?php endif; ?>

                        <?php endif; ?>



                        <div class="carousel-caption <?php echo $ssg_image_text_align ?>">

                            <?php

                            $ssg_item_space = sprintf('margin-bottom: %spx;', $ssg_image_item_space);

                            ?>

                            

                            <?php if ($ssg_image_logo_src) : ?>

                                <img class="ssg_banner_logo" style="<?php echo $ssg_item_space ?>" src="<?php echo $ssg_image_logo_src ?>" alt="<?php echo $ssg_image_heading ?>">

                            <?php endif; ?>

                            <?php if ($ssg_image_heading) : ?>

                                <h2 style="<?php echo $ssg_item_space ?>"><?php echo $ssg_image_heading ?></h2>

                            <?php endif; ?>

                            <?php if ($ssg_image_description) : ?>

                                <p class="ssg_margin--b4" style="<?php echo $ssg_item_space ?>"><?php echo $ssg_image_description ?></p>

                            <?php endif; ?>

                            <?php



                            if ($ssg_image_list_button) :

                                foreach ($ssg_image_list_button as $button) :

                                    extract($button);

                                    if ($ssg_image_button_text !== '') : ?>

                                        <a class="ssg_button <?php echo $ssg_image_button_style ?>" href="<?php echo $ssg_image_button_link ?>" <?php echo $ssg_image_button_target ? 'target="blank"' : '' ?>><?php echo $ssg_image_button_text ?></a>

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