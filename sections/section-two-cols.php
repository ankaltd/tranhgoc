<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo (isset($class2)) ? $class2 : ''; ?>" data-scroll-section>

    <div class="container">

        <div class="row row-cols-1 row-cols-md-2 justify-content-center">

            <div class="col <?php echo $class; ?>__item">

                <h2 class="ssg_heading justify-content-start"><?php echo $heading; ?></h2>

                <p class="ssg_description"><?php echo $text;  ?></p>

            </div>

            <div class="col <?php echo $class; ?>__item">

                <div class="<?php echo $class; ?>__image">

                    <img src="<?php echo $image ?>" alt="<?php echo $text ?>" class="img-fluid ssg_concept">

                </div>

            </div>

        </div>

    </div>

</section>