<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo $class2; ?>" data-scroll-section>
    <div class="container">
        <div class="row">
            <h2 class="ssg_heading justify-content-start"><?php echo $heading; ?></h2>
            <div class="<?php echo $class; ?>__photo"><img src="<?php echo $image ?>" alt="<?php echo $heading ?>" class="img-fluid ssg_margin--b3"></div>
            <div class="<?php echo $class ?>__content">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</section>