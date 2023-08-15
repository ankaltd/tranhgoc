<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo (isset($class2)) ? $class2 : ''; ?>">

    <div class="container <?php echo $class; ?>">

        <div class="row">

            <h2 class="ssg_heading text-center"><?php echo $heading; ?></h2>

        </div>

        <div class="row row-cols-1 row-cols-md-3 justify-content-center">

            <?php foreach ($news_list as $news) : ?>

                <div class="col-12 col-md-4">

                    <div class="<?php echo $class; ?>__item">

                        <a href="#" class="<?php echo $class; ?>__thumbnail">

                            <img src="<?php echo $news['image'] ?>" alt="<?php echo $news['title'] ?>" class="img-fluid ssg_concept">

                        </a>

                        <div class="<?php echo $class; ?>__content">

                            <?php if (isset($news['category'])) : ?>

                                <p class="<?php echo $class; ?>__category"><?php echo $news['category'] ?></p>

                            <?php endif; ?>



                            <h5 class="<?php echo $class; ?>__title"><a href="#"><?php echo $news['title'] ?></a></h5>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>