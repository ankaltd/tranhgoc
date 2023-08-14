<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?>">
    <div class="container <?php echo $class; ?>">
        <div class="row">
            <h2 class="ssg_heading text-center"><?php echo $heading; ?></h2>
        </div>
        <div class="row row-cols-6 row-cols-md-4 justify-content-center">
            <?php foreach ($news_list as $news) : ?>
                <div class="col-6 col-4">
                    <div class="<?php echo $class; ?>__item">
                        <a href="#" class="<?php echo $class; ?>__thumbnail ssg_margin"><img src="<?php echo $news['image'] ?>" alt="<?php echo $news['title'] ?>" class="img-fluid"></a>
                        <h5 class="<?php echo $class; ?>__title"><a href="#"><?php echo $news['title'] ?></a></h5>
                        <p class="<?php echo $class; ?>__summary"><?php echo $news['text'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>