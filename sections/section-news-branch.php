<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?> no_padding">

    <div class="container">

        <div class="row">

            <div class="col <?php echo $class; ?>__wrapper">

                <?php foreach ($branch_list as $item) :  ?>

                    <?php $slug = sanitize_title($item['name']); ?>

                    <a class="nav-link <?php echo $class; ?>__item" href=" <?php echo $item['link'] . '#' . $slug; ?>" data-content="<?php echo $item['name'] ?>" data-slug="<?php echo $slug ?>"><?php echo $item['name'] ?></a>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

    </div>



</section>