<?php

/**

 * Custom Javascript Files to enqueue

 *

 *

 * Datas Structure

 *

 * [

 *     'handle'         => JS file Identifier

 *     'path'           => JS file path

 *     'dependencies'   => JS Files dependencies

 *     'version'        => JS File version

 *     'in_footer'      => JS file loaded in footer

 * ];

 *

 * You can use "ant_js_files" filter to change Javascript files loaded

 *

 */

return apply_filters('ant_js_files', [

    [

        'handle'        => 'bootstrap-js',

        'path'          => THEME_URL . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',

        'dependencies'  => [],

        'version'       => '1.0.0',

        'in_footer'     => true
    ],

    [

        'handle'        => 'lazysizes',

        'path'          => THEME_URL . '/assets/js/lazysizes.min.js',

        'dependencies'  => ['bootstrap-js'],

        'version'       => '1.0.0',

        'in_footer'     => true
    ],

    [

        'handle'        => 'select2',

        'path'          => THEME_URL . '/node_modules/select2/dist/js/select2.min.js',

        'dependencies'  => ['jquery'],

        'version'       => '1.0.0',

        'in_footer'     => true
    ],

    [

        'handle'        => 'slick',

        'path'          => THEME_URL . '/node_modules/slick-carousel/slick/slick.min.js',

        'dependencies'  => ['jquery'],

        'version'       => '1.0.0',

        'in_footer'     => true
    ],

    [

        'handle'        => 'aos',

        'path'          => THEME_URL . '/assets/aos/dist/aos.js',

        'dependencies'  => ['jquery'],

        'version'       => '1.0.0',

        'in_footer'     => true
    ]
]);
