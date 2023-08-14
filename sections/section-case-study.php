<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo (isset($class2)) ? $class2 : ''; ?> ssg_concept--section">
    <div class="container">
        <div class="row">
            <h2 class="ssg_heading justify-content-start"><?php echo $heading; ?></h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 justify-content-center">
            <?php foreach ($case_list as $case) : ?>
                <div class="col">
                    <div class="<?php echo $class; ?>__item">
                        <div class="<?php echo $class; ?>__thumbnail">
                            <a href="#"><img src="<?php echo $case['image'] ?>" alt="<?php echo $case['title'] ?>" class="img-fluid"></a>
                        </div>
                        <div class="<?php echo $class; ?>__content">
                            <h5><a href="#"><?php echo $case['title'] ?></a></h5>
                            <p><?php echo $case['text'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>