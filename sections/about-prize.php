<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo $class2; ?>" data-scroll-section>
    <div class="container">
        <div class="row">
            <h2 class="ssg_heading justify-content-start ssg_margin--b5"><?php echo $heading; ?></h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 justify-content-center g-5">
            <?php foreach ($prize_list as $item) : ?>
                <div class="col">
                    <div class="<?php echo $class; ?>__item">
                        <div class="<?php echo $class; ?>__thumbnail ssg_margin--b3">
                            <img src="<?php echo $item['image'] ?>" alt="<?php echo $item['text'] ?>" class="img-fluid">
                        </div>
                        <h5 class="<?php echo $class; ?>__caption text-center"><?php echo $item['text'] ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>