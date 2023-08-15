<?php



/**

 * The template for displaying all single posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage WEP 

 * @since WEP  1.0

 */



get_header();

?>



<div class="container p-lg-5">



    <?php

    /* Start the Loop */

    while (have_posts()) :

        the_post();

    ?>

        <div class="row row-cols-1">

            <div class="col-10">

                <h1 class="wep_heading wep_margin--b3 text-start justify-content-start"><?php the_title(); ?></h1>

            </div>

        </div>

        <div class="row row-cols-1">

            <div class="col-10">

                <?php the_content(); ?>

            </div>

        </div>

    <?php





    endwhile; // End of the loop.

    ?>



</div>

<?php

get_footer();

