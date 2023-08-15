<?php

extract($args);

$total_slider = count($slider_list);

?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?> no_padding" data-scroll-section>

    <div class="container-fluid gx-0">

        <div id="mySlider" class="carousel slide" data-bs-ride="carousel">

            <?php if ($total_slider > 1) : ?>

                <!-- dots... -->

                <ol class="carousel-indicators">

                    <?php $stt = 0;

                    foreach ($slider_list as $slider) : ?>

                        <li data-bs-target="#mySlider" data-bs-slide-to="<?php echo $stt ?>" class="<?php echo $stt == 0 ? 'active' : '' ?>"></li>

                    <?php $stt++;

                    endforeach; ?>

                </ol>

            <?php endif; ?>

            <div class="carousel-inner">

                <?php $stt = 0;

                foreach ($slider_list as $slider) : ?>

                    <div class="<?php echo $id; ?>__slider text-center carousel-item <?php echo $stt == 0 ? 'active' : '' ?>">



                        <?php if ($slider['type'] == 'video') : ?>

                            <video class="video-slide" width="auto" height="100%" muted="" playsinline="" autoplay="" loop="" data-duration="10000">

                                <source src="<?php echo $slider['image'] ?>" type="video/mp4">

                            </video>

                        <?php else : ?>

                            <img src="<?php echo $slider['image'] ?>" alt="<?php echo $slider['heading'] ?>" class="img-fluid d-block w-100">

                        <?php endif; ?>





                        <div class="carousel-caption <?php echo isset($align) ? 'text-' . $align : '' ?>">

                            <h2><?php echo $slider['heading']; ?></h2>

                            <p class="wep_margin--b4"><?php echo $slider['description']; ?></p>

                            <?php if (isset($slider['button'])) : ?>

                                <a class="wep_button <?php echo isset($slider['button']['style']) ? 'wep_button--' . $slider['button']['style'] : '' ?>" href=""><?php echo $slider['button']['text'] ?></a>

                            <?php endif; ?>

                        </div>

                    </div>

                <?php $stt++;

                endforeach; ?>

            </div>

            <?php if ($total_slider > 1) : ?>

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