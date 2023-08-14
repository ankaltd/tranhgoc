<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?>">
    <div class="container">
        <div class="row">
            <h2 class="ssg_heading text-center"><?php echo $heading; ?></h2>
        </div>
        <div class="row row-cols-2 row-cols-md-4 justify-content-center text-center">
            <?php foreach ($hiring_ev_list as $item) : ?>
                <div class="col">
                    <div class="<?php echo $class; ?>__item">
                        <div class="<?php echo $class; ?>__thumbnail ssg_margin">
                            <img src="<?php echo $item['image'] ?>" alt="<?php echo $item['title'] ?>" class="img-fluid">
                        </div>
                        <div class="<?php echo $class; ?>__description">
                            <h5><a href="#"><?php echo $item['title'] ?></a></h5>
                            <p><?php echo $item['text'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>