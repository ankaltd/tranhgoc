<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo (isset($class2)) ? $class2 : ''; ?> wep_concept--section wep_bg_dark">

    <div class="container">

        <div class="row">

            <h2 class="wep_heading justify-content-start"><?php echo $heading; ?></h2>

        </div>

        <div class="row row-cols-1 row-cols-md-3 justify-content-center">

            <?php foreach ($benefit_list as $key => $text) : ?>

                <div class="col">

                    <div class="<?php echo $class; ?>__item">

                        <div class="content">

                            <div class="<?php echo $class; ?>__description">



                                <h4 class="<?php echo $class; ?>__title"><?php echo $key ?></h4>

                                <p class="<?php echo $class; ?>__text"><?php echo $text ?></p>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>