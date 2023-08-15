<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo $class2; ?> wep_concept--section" data-scroll-section>

    <div class="container">

        <div class="row">

            <h2 class="wep_heading wep_margin--b4 justify-content-start"><?php echo $heading; ?></h2>

        </div>

        <div class="row row-cols-2  row-cols-md-4 justify-content-center">

            <?php foreach ($bod_list as $leader) : ?>

                <div class="col">

                    <div class="<?php echo $class; ?>__item">

                        <div class="<?php echo $class; ?>__thumbnail wep_margin">

                            <img src="<?php echo $leader['image'] ?>" alt="<?php echo $leader['title'] ?>" class="img-fluid wep_concept">

                        </div>

                        <div class="<?php echo $class; ?>__content">

                            <h5><?php echo $leader['name'] ?></h5>

                            <p><?php echo $leader['title'] ?></p>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>