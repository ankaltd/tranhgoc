<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?> no_padding ssg_bg_dark data-scroll-section">
    <div class="container-fluid mx-0 g-0">
        <div class="<?php echo $class; ?>__header row text-center mx-0">
            <h2 class="ssg_heading" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-3" data-scroll-class="appear" data-scroll-repeat="true"><?php echo $heading; ?></h2>
            <p class="ssg_description" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-3" data-scroll-class="appear" data-scroll-repeat="true"><?php echo $description; ?></p>
        </div>
        <div class="<?php echo $class; ?>__main row mx-0 gx-0 justify-content-center">
            <?php $stt = 0;
            foreach ($slider_list as $slider) : ?>
                <div class="col <?php echo $class; ?>__wrapper <?php echo $stt == 2 ? 'active' : '' ?>">
                    <div class="<?php echo $class; ?>__slider">
                        <div class="<?php echo $class; ?>__thumbnail">
                            <img src="<?php echo $slider['image'] ?>" alt="<?php echo $slider['title'] ?>">
                        </div>
                        <div class="<?php echo $class; ?>__content">
                            <h5><?php echo $slider['title']; ?></h5>
                            <?php if (isset($button)) : ?>
                                <a class="ssg_button <?php echo isset($button['style']) ? 'ssg_button--' . $button['style'] : '' ?>" href=""><?php echo $button['text'] ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php $stt++;
            endforeach; ?>
        </div>
    </div>

</section>