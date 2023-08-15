<?php

$tag            = get_field('wep_description_tag');

$color          = get_field('wep_description_color');

$text           = get_field('wep_description_text');

$font_size      = get_field('wep_description_font_size');

$line_height    = get_field('wep_description_line_height');

$align          = get_field('wep_description_align');

$margin         = get_field('wep_margin_bottom');

?>

<<?php echo $tag ?> class="wep_description <?php echo $align ?> <?php echo $margin ?>" style="color: <?php echo $color ?>; font-size: <?php echo $font_size ?>px; line-height: <?php echo $line_height ?>">

    <?php echo $text ?>

</<?php echo $tag ?>>