<?php extract($args);

$total_item = count($slider_list);

?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?>">

    <div class="container-fluid">

        <div class="row text-center">

            <h2 class="wep_heading"><?php echo $heading; ?></h2>

            <p class="wep_description"><?php echo $description; ?></p>

        </div>

        <div class="row gx-0 mx-0 justify-content-center <?php echo $class; ?>__slick">

            <?php $stt = 0;

            foreach ($slider_list as $slider) : ?>

                <div class="col">

                    <div class="service_wrapper">

                        <div class="<?php echo $class; ?>__slider <?php echo $stt == 200 ? 'active' : '' ?>">

                            <div class="<?php echo $class; ?>__thumbnail">

                                <img src="<?php echo $slider['image'] ?>" alt="<?php echo $slider['title'] ?>" class="img-fluid">

                            </div>

                            <div class="<?php echo $class; ?>__content">

                                <h4><?php echo $slider['title']; ?></h4>

                                <p><?php echo $slider['text']; ?></p>

                                <?php if (isset($more_link)) : ?>

                                    <a href="" class="wep_more_link"><?php echo $more_link['text'] ?></a>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </div>

            <?php $stt++;

            endforeach; ?>

        </div>

    </div>



</section>