<!DOCTYPE html>

<html <?php language_attributes(); ?> <?php ANT_Tag::ant_the_html_classes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="f8iKdZEwCWdpm7ODQFKb-KhImWvlBzQ_PDFW08MpCBw" />

    <!-- Thẻ meta cho Facebook Open Graph -->

    <?php if (is_front_page()) : ?>

        <?php

        $thumbnail_url = THEME_IMG . '/ssg-preview.jpg';

        $title = get_bloginfo('name');

        $description = get_bloginfo('description');

        $url = home_url();

        ?>

        <meta property="og:image" content="<?php echo esc_url($thumbnail_url); ?>">

        <meta property="og:title" content="<?php echo esc_attr($title); ?>">

        <meta property="og:description" content="<?php echo esc_attr($description); ?>">

        <meta property="og:url" content="<?php echo esc_url($url); ?>">

        <meta property="og:type" content="article">

    <?php endif; ?>

    <?php if (is_single()) : ?>

        <?php

        $thumbnail_url = get_the_post_thumbnail_url();

        $title = get_the_title();

        $description = get_the_excerpt();

        $url = get_permalink();

        ?>

        <meta property="og:image" content="<?php echo esc_url($thumbnail_url); ?>">

        <meta property="og:title" content="<?php echo esc_attr($title); ?>">

        <meta property="og:description" content="<?php echo esc_attr($description); ?>">

        <meta property="og:url" content="<?php echo esc_url($url); ?>">

        <meta property="og:type" content="article">

    <?php endif; ?>

    <!-- Thẻ meta cho Twitter Cards -->

    <?php if (is_single()) : ?>

        <?php

        $thumbnail_url = get_the_post_thumbnail_url();

        $title = get_the_title();

        $description = get_the_excerpt();

        $url = get_permalink();

        ?>

        <meta name="twitter:card" content="summary_large_image">

        <meta name="twitter:title" content="<?php echo esc_attr($title); ?>">

        <meta name="twitter:description" content="<?php echo esc_attr($description); ?>">

        <meta name="twitter:image" content="<?php echo esc_url($thumbnail_url); ?>">

        <meta name="twitter:url" content="<?php echo esc_url($url); ?>">

    <?php endif; ?>

    <style>
        .header {

            background-color: #f8f9fa;

            padding: 10px;

        }

        .header.fixed-top {

            position: fixed;

            top: 0;

            width: 100%;

            z-index: 999;

        }

        /* Adjust the header position when admin bar is visible */

        body.admin-bar .header {

            top: 32px;

        }

        .header .logo {

            margin-right: auto;

        }

        .header .search-icon,

        .header .language-select {

            margin-left: auto;

        }

        .header .mega-menu {

            margin-left: 0;

        }

        .header .mega-menu .nav-link {

            position: relative;

        }

        .header .mega-menu .dropdown-menu {

            top: 100%;

            left: 0;

            min-width: 200px;

        }

        .header .mega-menu .dropdown-item {

            display: flex;

            align-items: flex-start;

        }

        .header .mega-menu .dropdown-item .menu-content {

            flex: 1;

            padding-left: 15px;

        }

        <?php

        if (is_admin_bar_showing()) {

            echo '

                body {padding-top: 58px !important}

                .fixed-top {top: 32px !important}

                .ssg_goto_section.sticky {transform: translateY(90px) !important;}

            ';
        }

        ?>
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-scroll-container>

    <?php

    /* Header Default --------------- */

    $section_data = [

        'id' => 'ssg_header',

        'class' => 'ssg_header',

        'heading' => 'Page Header'

    ];

    get_template_part('sections/header', 'default', $section_data);

    ?>