<?php extract($args); ?>

<footer id="<?php echo $id; ?>" class="<?php echo $class; ?> ">
    <?php

    /* Footer Top --------------- */
    $section_data = [
        'id' => $class . '__top',
        'class' => $class . '__top',
    ];
    get_template_part('blocks/wep-footer', 'top', $section_data);

    /* Footer Middle --------------- */
    $section_data = [
        'id' => $class . '__middle',
        'class' => $class . '__middle',
    ];
    get_template_part('blocks/wep-footer', 'middle', $section_data);

    /* Footer Bottom --------------- */
    $section_data = [
        'id' => $class . '__bottom',
        'class' => $class . '__bottom',
    ];
    get_template_part('blocks/wep-footer', 'bottom', $section_data);

    ?>
</footer>