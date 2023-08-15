<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo $class2; ?> wep_concept--section" data-scroll-section>

    <div class="container">

        <div class="row">

            <h2 class="wep_heading justify-content-start"><?php echo $heading; ?></h2>

        </div>

        <div class="row row-cols-1 row-cols-md-3 gy-3 gy-md-5 justify-content-center">

            <?php foreach ($timeline as $key => $text) : ?>

                <div class="col">

                    <div class="<?php echo $class; ?>__item">

                        <div class="content">

                            <h4><?php echo $key ?></h4>

                            <p><?php echo $text ?></p>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>