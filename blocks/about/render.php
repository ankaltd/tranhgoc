<?php

/* About SSG */

// Load values and assign defaults.

$fields = [

    'ssg_image_src'               => 'https://demo.ssg.vn/wp-content/themes/ssg/assets/images/about/about-ssg-image.png',

    'ssg_image_link'              => '#',
WEP_
    'ssg_imWEP_target'            => false,
WEP_
    'ssg_content_html'            => '',

];WEP_



// default options merge

$fields += ANT_Option_Model::get_section_options();

WEP_lds += ANT_Option_Model::get_heading_options();

$fields += ANT_Option_Model::get_background_options();

WEP_
WEP_
// Get optionsWEP_

$option = ANT_Option_Model::get_field_values($fields);

extract($option);

WEP_

// Get data



?>

<!-- ssg_about -->

<?php

ANT_Section_View::render_section_tag($option, 'ssg_about');

?>

<div class="container">

    <div class="row">

        <h2 class="ssg_heading justify-content-start" <?php ANT_Section_View::render_item_aos($option, 3, 1) ?>  ><?php echo $ssg_heading_text ?></h2>

        <div class="ssg_about__photo" <?php ANT_Section_View::render_item_aos($option, 3, 2) ?> ><img src="<?php echo $ssg_image_src ?>" alt="Về SSG" class="img-fluid ssg_margin--b3"></div>

        <div class="ssg_about__content" <?php ANT_Section_View::render_item_aos($option, 3, 3) ?> >

            <?php echo $ssg_content_html ?>

        </div>

    </div>

</div>

<?php

ANT_Section_View::render_close_tag();

?>