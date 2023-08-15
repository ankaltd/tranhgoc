<?php

extract($args);

?>



<!-- <?php echo $id; ?> -->

<article id="<?php echo $id; ?>" class="<?php echo $class . ' ' . $post_classes ?>">

    <header class="<?php echo $class ?>__header">

        <h1 class="wep_heading text-start"><?php echo $heading; ?></h1>

        <div class="row">

            <div class="col-7">

                <div class="<?php echo $class ?>__date"><?php echo $date ?></div>

            </div>

            <div class="col-5 d-flex justify-content-end">

                <div class="<?php echo $class ?>__share">

                    <span>Chia sẻ</span>

                    <a href="<?php echo $facebook_share ?>" class="<?php echo $class ?>__icon <?php echo $class ?>__icon--facebook"></a>

                    <a href="<?php echo $twitter_share ?>" class="<?php echo $class ?>__icon <?php echo $class ?>__icon--twitter"></a>

                </div>

            </div>

        </div>

        <div class="<?php echo $class ?>__summary"><?php echo $summary ?></div>

        <div class="<?php echo $class ?>__thumbnail"><img src="<?php echo $image; ?>" alt="<?php echo $heading; ?>"></div>

    </header>

    <div class="<?php echo $class ?>__content">

        <?php echo $content ?>

    </div>

    <footer class="<?php echo $class ?>__footer">

        <div class="row">

            <div class="col-6 d-flex justify-content-start">

                <div class="<?php echo $class ?>__share">

                    <span>Chia sẻ</span>

                    <a href="<?php echo $facebook_share ?>" class="<?php echo $class ?>__icon <?php echo $class ?>__icon--facebook"></a>

                    <a href="<?php echo $twitter_share ?>" class="<?php echo $class ?>__icon <?php echo $class ?>__icon--twitter"></a>

                </div>

            </div>

            <div class="col-6 d-flex justify-content-end">

                <div class="<?php echo $class ?>__source"><?php echo $source ?></div>

            </div>

        </div>

    </footer>

</article>