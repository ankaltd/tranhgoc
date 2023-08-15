<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<div class="language-select" id="<?php echo $id ?>">
    <?php

    if (function_exists('pll_the_languages')) {
        $args = [
            'show_names' => false,
            'show_flags' => true,
            'hide_current' => true,
        ];
        pll_the_languages($args);
    }
    
    ?>
</div>