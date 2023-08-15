<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?>">
    <div class="container">
        <div class="row">
            <h2 class="wep_heading text-center"><?php echo $heading; ?></h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 justify-content-center">
            <?php foreach ($news_list as $news) : ?>
                <div class="col-12 col-md-4">
                    <div class="<?php echo $class; ?>__item">
                        <a href="#" class="<?php echo $class; ?>__thumbnail wep_margin"><img src="<?php echo $news['image'] ?>" alt="<?php echo $news['title'] ?>" class="img-fluid"></a>
                        <h5 class="<?php echo $class; ?>__title"><a href="#"><?php echo $news['title'] ?></a></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>