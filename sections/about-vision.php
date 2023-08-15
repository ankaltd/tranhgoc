<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo (isset($class2)) ? $class2 : ''; ?> ssg_bg_dark" data-scroll-section>

    <div class="container">

        <div class="row">

            <h2 class="ssg_heading justify-content-start ssg_margin--b5"><?php echo $heading; ?></h2>

        </div>

        <div class="row row-cols-1 row-cols-md-2 g-5 justify-content-center">

            <?php foreach ($vision_list as $key => $item) : ?>

                <div class="col">

                    <div class="<?php echo $class; ?>__item">

                        <div class="content">

                            <div class="<?php echo $class; ?>__image">

                                <img src="<?php echo $item['image'] ?>" alt="<?php echo $item['title'] ?>" class="img-fluid">

                            </div>

                            <div class="<?php echo $class; ?>__description">

                                <h4 class="<?php echo $class; ?>__title"><?php echo $item['title'] ?></h4>

                                <p class="<?php echo $class; ?>__text"><?php echo $item['text']  ?></p>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>