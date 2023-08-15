<?php
extract($args);

$total_slider = count($quote_list);
?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?> wep_bg_dark">
    <div class="container">
        <div id="TestimonialSlider" class="carousel slide" data-bs-ride="carousel">
            <?php if ($total_slider > 1) : ?>
                <!-- dots... -->
                <ol class="carousel-indicators">
                    <?php $stt = 0;
                    foreach ($quote_list as $slider) : ?>
                        <li data-bs-target="#TestimonialSlider" data-bs-slide-to="<?php echo $stt ?>" class="<?php echo $stt == 0 ? 'active' : '' ?>"></li>
                    <?php $stt++;
                    endforeach; ?>
                </ol>
            <?php endif; ?>
            <div class="carousel-inner">
                <?php $stt = 0;
                foreach ($quote_list as $slider) : ?>
                    <div class="<?php echo $class; ?>__slider text-center carousel-item <?php echo $stt == 0 ? 'active' : '' ?>">
                        <div class="row row-cols-1 row-cols-md-2 justify-content-center">
                            <div class="col-12 col-md-7">
                                <p class="<?php echo $class; ?>__text"><?php echo $slider['text']; ?></p>
                                <h4 class="<?php echo $class; ?>__name"><?php echo $slider['name']; ?></h4>
                                <p class="<?php echo $class; ?>__title"><?php echo $slider['title']; ?></p>
                            </div>
                            <div class="col-12 col-md-2">
                                <img src="<?php echo $slider['image']; ?>" alt="<?php echo $slider['name']; ?>" class="<?php echo $class; ?>__avatar img-fluid rounded-circle">
                            </div>
                        </div>
                    </div>
                <?php $stt++;
                endforeach; ?>
            </div>
            <?php if ($total_slider > 1) : ?>
                <!-- next and previous -->
                <button class="carousel-control-prev" type="button" data-bs-target="#TestimonialSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#TestimonialSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            <?php endif; ?>
        </div>
    </div>
</section>