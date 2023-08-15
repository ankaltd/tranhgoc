<?php extract($args); ?>



<!-- <?php echo $id; ?> -->



<header id="<?php echo $id; ?>" class="<?php echo $class; ?>">

    <!-- Header content -->



    <!-- ============= COMPONENT ============== -->

    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow">

        <div class="container-fluid">

            <!-- Logo -->

            <?php



            $header_logo = get_field('wep_main_logo', 'option');

            $header_logo = $header_logo ?: THEME_IMG . '/head-logo.png';



            $block_data = [

                'id' => 'wep_logo',

                'class' => 'wep_logo',

                'text' => 'WEP  Logo',

                'image' => $header_logo,

            ];

            get_template_part('blocks/wep', 'logo', $block_data);

            ?>



            <!-- Mega Menu -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="main_nav">

                <!--  Navbar -->

                <?php

                $block_data = [

                    'id' => 'wep_mega_menu',

                    'class' => 'wep_mega_menu',

                    'text' => 'WEP  Mega Menu',

                ];

                get_template_part('blocks/wep', 'mega-menu', $block_data);

                ?>



                <!-- Right -->

                <!-- Search Icon -->

                <div class="navbar-nav ms-auto <?php echo $class; ?>__right">

                    <?php

                    $block_data = [

                        'id' => 'wep_quick_search',

                        'class' => 'wep_quick_search',

                        'text' => 'Quick Search',

                        'image' => THEME_IMG . '/icon_search.png',

                    ];

                    get_template_part('blocks/wep', 'search-icon', $block_data);

                    ?>



                    <!-- Language -->

                    <?php

                    $block_data = [

                        'id' => 'wep_language',

                        'class' => 'wep_language',

                        'language' => [

                            [

                                'text' => 'Tiếng Việt',

                                'value' => 'vn',

                                'icon' => THEME_IMG . '/icon-flat-vn.png',

                            ],

                            [

                                'text' => 'English',

                                'value' => 'en',

                                'icon' => THEME_IMG . '/icon-flat-en.png',

                            ]

                        ]

                    ];

                    get_template_part('blocks/wep', 'language-poly', $block_data);

                    ?>

                </div>

            </div> <!-- navbar-collapse.// -->

        </div> <!-- container-fluid.// -->

    </nav>

    <!-- ============= COMPONENT END// ============== -->



</header>



<!-- Search Overly -->

<?php

$block_data = [

    'id' => 'wep_search_modal',

    'class' => 'wep_search_modal',

    'title' => 'Tìm kiếm',

];

get_template_part('blocks/wep', 'search-modal', $block_data);

?>