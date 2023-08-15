<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?>">

    <div class="container">

        <div class="row">

            <h2 class="text-center"><?php echo $heading; ?></h2>

        </div>

        <div class="row row-cols-3 justify-content-center">

            <?php foreach ($news_list as $news) : ?>

                <div class="col">

                    <div class="<?php echo $class; ?>__item text-center">

                        <a class="<?php echo $class; ?>__thumbnail" href="<?php echo $news['link'] ?>">                            

                            <img src="<?php echo $news['image'] ?>" alt="<?php echo $news['title'] ?>" class="<?php echo $news['responsive'] ?>">

                        </a>

                        <h5 class="<?php echo $class; ?>__title">

                            <a href="<?php echo $news['link'] ?>"><?php echo $news['title'] ?></a>

                        </h5>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>