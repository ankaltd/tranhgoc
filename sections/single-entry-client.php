<?php

extract($args);

?>



<!-- <?php echo $id; ?> -->

<div class="container justify-content-center">

    <article id="<?php echo $id; ?>" class="<?php echo $class . ' ' . $post_classes ?>">

        <header class="<?php echo $class; ?>__header">

            <div class="row justify-content-center">

                <div class="col-8">

                    <h1 class="wep_heading"><?php echo $heading; ?></h1>

                </div>

            </div>

            <div class="<?php echo $class; ?>__thumbnail">

                <?php if ($image) : ?>

                    <img src="<?php echo $image; ?>" alt="<?php echo $heading; ?>">

                <?php endif; ?>

            </div>

        </header>



        <?php if ($content) : ?>

            <div class="<?php echo $class; ?>__content">

                <div class="row justify-content-center">

                    <div class="col-8">

                        <?php echo $content ?>

                    </div>

                </div>

            </div>



            <footer class="<?php echo $class; ?>__footer">

                <div class="row justify-content-center">

                    <div class="col-8">

                        <div class="wep_entry_single__share">

                            <span>Chia sẻ</span>

                            <a href="<?php echo $facebook_share ?>" class="<?php echo $class ?>__icon <?php echo $class ?>__icon--facebook"></a>

                            <a href="<?php echo $twitter_share ?>" class="<?php echo $class ?>__icon <?php echo $class ?>__icon--twitter"></a>

                        </div>

                    </div>

                </div>

            </footer>

        <?php endif; ?>

    </article>

</div>