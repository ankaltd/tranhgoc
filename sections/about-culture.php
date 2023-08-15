<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo $class2; ?> wep_concept--section" data-scroll-section>

    <div class="container">

        <div class="row">

            <h2 class="wep_heading justify-content-start wep_margin--b4"><?php echo $heading; ?></h2>

        </div>

        <div class="row row-cols-1 row-cols-md-3 justify-content-center wep_margin--b4">

            <?php foreach ($culture_list as $item) : ?>

                <div class="col g-4">

                    <div class="<?php echo $class; ?>__item">

                        <div class="content">

                            <h4><?php echo $item ?></h4>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>