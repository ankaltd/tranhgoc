<?php

/* Home Testimonial */

// Load values and assign defaults.

$fields = [

   

    'ssg_content_number'                => 5,

    'ssg_content_order'                 => 'asc',

    

    // Data Repeat

    'ssg_testimonial_list'              => array(

        arrWEP_
WEP_
           WEP_g_testimonial_review'            => 'Sản phẩm rất chi là tuyệt vời',
WEP_
            'ssg_testimonial_image'             => 'https://demo.ssg.vn/wp-content/themes/ssg/assets/images/home/home-testimonial-avatar.png',

          WEP_sg_testimonial_name'              => 'Trần Thanh Tâm',

            'ssg_testimonial_title'             => 'Marketing Director',

        ),

    )

];

WEP_

// default options merge

$fields += ANT_Option_Model::get_section_options(); 

$fields += ANT_Option_Model::get_heading_options(); 

$fields += ANT_Option_Model::get_description_options(); 

$fields += ANT_Option_Model::get_background_options(); 



// Get options

$option = ANT_Option_Model::get_field_values($fields);

extract($option);

WEP_
WEP_
// Get data testimonial from OptionWEP_

$data = $ssg_testimonial_list;WEP_

$slider_count = count($ssg_testimonial_list);



?>

<!-- ssg_home_testimonial -->

<?php

ANT_Section_View::render_section_tag($option,'ssg_home_testimonial');

?>

<div class="container">

    <div id="TestimonialSlider" class="carousel slide" data-bs-ride="carousel">

        <?php if ($slider_count > 1) : ?>

WEP_        <!-- dots... -->

            <ol class="carousel-indicators">

                <?php for ($i = 0; $i < $slider_count; $i++) : ?>

                    <li data-bs-target="#TestimonialSlider" data-bs-slide-to="<?php echo $i ?>" class="<?php echo $i == 0 ? 'active' : '' ?>"></li>

                <?php endfor; ?>

            </ol>

        <?php endif; ?>



        <div class="carousel-inner">

            <?php $stt = 0; ?>

            <?php foreach ($ssg_testimonial_list as $item) : ?>

                <?php extract($item); ?>

                <div class="ssg_home_testimonial__slider text-center carousel-item <?php echo $stt == 0 ? 'active' : '' ?>">

                    <div class="row row-cols-1 row-cols-md-2 justify-content-center">

                        <div class="col-12 col-md-7">

                            <p class="ssg_home_testimonial__text" <?php ANT_Section_View::render_item_aos($option, 2, 3) ?> ><?php echo $ssg_testimonial_review; ?></p>

                            <h4 class="ssg_home_testimonial__name" <?php ANT_Section_View::render_item_aos($option, 4, 4) ?> ><?php echo $ssg_testimonial_name; ?></h4>

                            <p class="ssg_home_testimonial__title" <?php ANT_Section_View::render_item_aos($option, 6, 5) ?> ><?php echo $ssg_testimonial_title; ?></p>

                        </div>

                        <div class="col-12 col-md-2" <?php ANT_Section_View::render_item_aos($option, 0, 1) ?> >

                            <img src="<?php echo $ssg_testimonial_image; ?>" alt="<?php echo $ssg_testimonial_name; ?>" class="ssg_home_testimonial__avatar img-fluid rounded-circle">

                        </div>

                    </div>

                </div>

                <?php $stt++; ?>

            <?php endforeach; ?>

        </div>

        <?php if ($slider_count > 1) : ?>

            <!-- next and previous -->

            <button class="carousel-control-prev" type="button" data-bs-target="#TestimonialSlider" data-bs-slide="prev">

                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                <span class="visually-hidden">Previous</span>

            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#TestimonialSlider" data-bs-slide="next">

                <span class="carousel-control-next-icon" aria-hidden="true"></span>

                <span class="visually-hidden">Next</span>

            </button>

        <?php endif; ?>

    </div>

</div>

<?php

ANT_Section_View::render_close_tag();

?>