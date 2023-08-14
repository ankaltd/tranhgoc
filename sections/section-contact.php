<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?> ssg_bg_dark" style="background-size:cover;">
    <div class="container">
        <div class="row align-items-center justify-content-space-between">
            <div class="col-12 col-md-9">
                <h3><?php echo $heading; ?></h3>
            </div>
            <div class="col-12 col-md-3 text-center text-md-end">
                <a href="<?php echo isset($button['link']) ? $button['link'] : '' ?>" class="ssg_button ssg_button--blue"><?php echo $button['text'] ?></a>
            </div>
        </div>
    </div>
</section>