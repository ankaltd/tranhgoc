<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<aside id="<?php echo $id; ?>">

    <h3 class="widget_title"><?php echo $title; ?></h3>

    <div class="widget__content">

        <?php foreach ($news_list as $news) : ?>

            <?php extract($news) ?>

            <div class="col">

                <div class="<?php echo $class; ?>__item">

                    <?php if (in_array('thumbnail', $show_item)) : ?>

                        <a href="<?php echo $news['permalink'] ?>" class="<?php echo $class; ?>__thumbnail"><img src="<?php echo $news['thumbnail_url'] ?>" alt="<?php echo $news['title'] ?>" class="img-fluid"></a>

                    <?php endif ?>

                    <?php if (in_array('date', $show_item)) : ?>

                        <p class="<?php echo $class; ?>__meta date"><?php echo $news['date'] ?></span></p>

                    <?php endif ?>



                    <?php if (in_array('title', $show_item)) : ?>

                        <h5 class="<?php echo $class; ?>__title"><a href="<?php echo $news['permalink'] ?>"><?php echo $news['title'] ?></a></h5>

                    <?php endif ?>



                    <?php if (in_array('summary', $show_item)) : ?>

                        <p class="<?php echo $class; ?>__text"><?php echo $news['excerpt'] ?></p>

                    <?php endif ?>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</aside>