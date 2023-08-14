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

 * You can use "wep_css_files" filter to add CSS Files on enqueue process

 *

 */

return apply_filters('wep_css_files', [

    

    [

        'handle'        => 'wep-font',

        'path'          => 'https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap',

        'dependencies'  => [],

        'version'       => '1.0.0',

        'media'         => 'all'

    ],

    [

        'handle'        => 'wep-select2',

        'path'          => THEME_URL . '/node_modules/select2/dist/css/select2.min.css',

        'dependencies'  => [],

        'version'       => '1.0.0',

        'media'         => 'all'

    ],

    [

        'handle'        => 'wep-slick',

        'path'          => THEME_URL . '/node_modules/slick-carousel/slick/slick.css',

        'dependencies'  => [],

        'version'       => '1.0.0',

        'media'         => 'all'

    ],

    [

        'handle'        => 'wep-aos',

        'path'          => THEME_URL . '/assets/aos/dist/aos.css',

        'dependencies'  => [],

        'version'       => '1.0.0',

        'media'         => 'all'

    ],
    [

        'handle'        => 'wep-stylesheet',

        'path'          => THEME_URL . '/assets/wep.min.css',

        'dependencies'  => ['wep-font','wep-aos'],

        'version'       => '1.0.0',

        'media'         => 'all'

    ]

]);

