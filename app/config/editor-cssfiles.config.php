<?php

/**
 * Custom CSS Files to enqueue to Editor
 *
 *
 * Datas Structure
 *
 * [
 *     'handle'         => CSS file Identifier
 *     'path'           => CSS file path
 *     'dependencies'   => CSS Files dependencies
 *     'version'        => CSS File version
 *     'media'          => CSS file active on media
 * ];
 *
 * You can use "ant_css_files" filter to add CSS Files on enqueue process
 *
 */
return apply_filters('ant_css_files_editor', [
    [
        'handle'        => 'ssg-stylesheet',
        'path'          => THEME_URL . '/assets/ssg.min.css',
        'dependencies'  => ['ssg-font'],
        'version'       => '1.0.0',
        'media'         => 'all'
    ],
    [
        'handle'        => 'ssg-font',
        'path'          => 'https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap',
        'dependencies'  => [],
        'version'       => '1.0.0',
        'media'         => 'all'
    ],
]);
