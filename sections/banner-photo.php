<?php 

extract($args); 



$heading_css = isset($heading_css)?:'';

$css = isset($css)?:'';



?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?> no_padding" data-scroll-section>

    <div class="container-fluid gx-0">

        <div id="mySlider" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="<?php echo $id; ?>__slider text-center carousel-item active" style="<?php echo $css ? $css : '' ?>">

                    <img src="<?php echo $image ?>" alt="<?php echo $heading ?>" class="img-fluid d-block w-100">

                    <div class="carousel-caption <?php echo isset($align) ? 'text-' . $align : '' ?>">

                        <h2 class="" style="<?php echo $heading_css ? $heading_css : '' ?>"><?php echo $heading; ?></h2>

                        <?php if (isset($description)) : ?>

                            <p class="ssg_margin--b4"><?php echo $description; ?></p>

                        <?php endif; ?>

                        <?php if (isset($button)) : ?>

                            <a class="ssg_button <?php echo isset($button['style']) ? 'ssg_button--' . $button['style'] : 'ssg_button--white' ?>" href=""><?php echo $button['text'] ?></a>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>