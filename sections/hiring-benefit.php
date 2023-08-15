<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?>">
    <div class="container ">
        <div class="row">
            <h2 class="wep_heading text-center wep_margin--b5"><?php echo $heading; ?></h2>
        </div>
        <div class="row row-cols-2 row-cols-md-3 g-3 g-md-5 justify-content-center">
            <?php foreach ($hiring_benefit_list as $item) : ?>
                <div class="col">
                    <div class="<?php echo $class; ?>__item">
                        <div href="" class="<?php echo $class; ?>__icon">
                            <img src="<?php echo $item['image'] ?>" alt="<?php echo $item['title'] ?>">
                        </div>
                        <h5 class="<?php echo $class; ?>__title"><a href="#"><?php echo $item['title'] ?></a></h5>
                        <p class="<?php echo $class; ?>__text"><?php echo $item['text'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>