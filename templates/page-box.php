<?php

/**
 * Template Name: Box Container
 */

// Header
get_header();

echo '<div class="container">';

/* Start the Loop */
while (have_posts()) :
    the_post();
    the_content();
endwhile;
// End of the loop.

echo '</div>';

/* Footer */
get_footer();
