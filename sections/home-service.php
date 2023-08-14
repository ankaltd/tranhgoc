<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?> data-scroll-section">
    <div class="container-fluid">
        <div class="row text-center">
            <h2 class="ssg_heading" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-3" data-scroll-class="appear" data-scroll-repeat="true"><?php echo $heading; ?></h2>
            <p class="ssg_description" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-3" data-scroll-class="appear" data-scroll-repeat="true"><?php echo $description; ?></p>
        </div>
        <div class="row row-cols-5 gx-0 mx-0 justify-content-center">
            <?php $stt = 0;
            foreach ($slider_list as $slider) : ?>
                <div class="col">
                    <div class="service_wrapper">
                        <div class="<?php echo $class; ?>__slider <?php echo $stt == 2 ? 'active' : '' ?>">
                            <div class="<?php echo $class; ?>__thumbnail">
                                <img src="<?php echo $slider['image'] ?>" alt="<?php echo $slider['title'] ?>" class="img-fluid">
                            </div>
                            <div class="<?php echo $class; ?>__content">
                                <h4><?php echo $slider['title']; ?></h4>
                                <p><?php echo $slider['text']; ?></p>
                                <?php if (isset($more_link)) : ?>
                                    <a href="" class="ssg_more_link"><?php echo $more_link['text'] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $stt++;
            endforeach; ?>
        </div>        
    </div>
</section>