<?php

/**
 * Template Name: WEP  Builder
 */

// Header
get_header();

/* Start the Loop */
while (have_posts()) :
    the_post();
    the_content();    
endwhile; 
// End of the loop.

/* Footer */
get_footer();
