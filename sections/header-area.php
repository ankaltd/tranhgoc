<?php extract($args); ?>

<header id="<?php echo $id; ?>" class="<?php echo $class; ?>">

    <?php

    /* Header Top --------------- */
    $section_data = [
        'id' => $class . '__top',
        'class' => $class . '__top',
    ];
    get_template_part('blocks/wep-header', 'top', $section_data);    

    /* Header Bottom --------------- */
    $section_data = [
        'id' => $class . '__bottom',
        'class' => $class . '__bottom',
    ];
    get_template_part('blocks/wep-header', 'bottom', $section_data);    

    ?>


</header>