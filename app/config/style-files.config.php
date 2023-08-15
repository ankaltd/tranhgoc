<?php

/**

 * Custom CSS Files to enqueue

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

return apply_filters('ant_css_files', [

    [

        'handle'        => 'ssg-font',

        'path'          => 'https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap',

        'dependencies'  => [],

        'version'       => '1.0.0',

        'media'         => 'all'
    ],

    [

        'handle'        => 'ssg-select2',

        'path'          => THEME_URL . '/node_modules/select2/dist/css/select2.min.css',

        'dependencies'  => [],

        'version'       => '1.0.0',

        'media'         => 'all'
    ],

    [

        'handle'        => 'ssg-slick',

        'path'          => THEME_URL . '/node_modules/slick-carousel/slick/slick.css',

        'dependencies'  => [],

        'version'       => '1.0.0',

        'media'         => 'all'
    ],

    [

        'handle'        => 'ssg-aos',

        'path'          => THEME_URL . '/assets/aos/dist/aos.css',

        'dependencies'  => [],

        'version'       => '1.0.0',

        'media'         => 'all'
    ],
    [

        'handle'        => 'ssg-stylesheet',

        'path'          => THEME_URL . '/assets/ssg.min.css',

        'dependencies'  => ['ssg-font', 'ssg-aos'],

        'version'       => '1.0.0',

        'media'         => 'all'
    ]
]);
