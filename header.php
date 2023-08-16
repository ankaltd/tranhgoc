<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php WEP_Tag::wep_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="f8iKdZEwCWdpm7ODQFKb-KhImWvlBzQ_PDFW08MpCBw" />

    <?php

    // Render Graph Meta
    WEP_SEO::social_graph_meta();

    wp_head();
    ?>
</head>

<body <?php body_class(); ?> data-scroll-container>
    <?php

    /* Header Default --------------- */
    $section_data = [
        'id' => 'wep_header',
        'class' => 'wep_header',
        'heading' => 'Page Header'
    ];
    get_template_part('sections/header', 'default', $section_data);
    
    ?>