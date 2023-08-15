<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo (isset($class2)) ? $class2 : ''; ?>">

    <div class="container <?php echo $class; ?>">

        <div class="row">

            <h2 class="ssg_heading text-center"><?php echo $heading; ?></h2>

        </div>

        <div class="row row-cols-1 row-cols-md-3 justify-content-center">

            <?php foreach ($news_list as $news) : ?>

                <div class="col">

                    <div class="<?php echo $class; ?>__item">

                        <div class="content">

                            <p class="<?php echo $class; ?>__date"><?php echo $news['date'] ?></p>

                            <h5 class="<?php echo $class; ?>__title"><a href="#"><?php echo $news['title'] ?></a></h5>

                            <p class="<?php echo $class; ?>__text"><?php echo $news['text'] ?></p>

                            <?php if (isset($more_link)) : ?>

                                <a href="" class="ssg_more_link"><?php echo $more_link['text'] ?></a>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>