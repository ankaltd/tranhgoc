<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="ssg_heading justify-content-start ssg_margin--b7"><?php echo $heading ?></h2>
            </div>
        </div>
        <div class="row g-5 justify-content-center">
            <?php $stt = 0;
            foreach ($infor_list as $info) : ?>
                <div class="col-md-4">
                    <div class="<?php echo $class; ?>__icon <?php echo $class; ?>__icon--<?php echo $stt ?>"><img src="<?php echo $info['icon'] ?>" alt="<?php echo $info['title'] ?>"></div>
                    <div class="<?php echo $class; ?>__item">
                        <div class="content">
                            <h4 class="<?php echo $class; ?>__title"><?php echo $info['title'] ?></h4>
                            <p class="<?php echo $class; ?>__text"><?php echo $info['text'] ?></p>
                        </div>
                    </div>
                </div>
            <?php $stt++;
            endforeach; ?>
        </div>
    </div>
</section>



<div class="container">

</div>