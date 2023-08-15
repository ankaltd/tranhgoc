<?php extract($args); ?>



<!-- <?php echo $id; ?> -->



<header id="<?php echo $id; ?>" class="<?php echo $class; ?>">

    <!-- Header content -->



    <!-- ============= COMPONENT ============== -->

    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow">

        <div class="container-fluid">

            <!-- Logo -->

            <?php



            $header_logo = get_field('ssg_main_logo', 'option');

            $header_logo = $header_logo ?: THEME_IMG . '/head-logo.png';



            $block_data = [

                'id' => 'ssg_logo',

                'class' => 'ssg_logo',

                'text' => 'SSG Logo',

                'image' => $header_logo,

            ];

            get_template_part('blocks/ssg', 'logo', $block_data);

            ?>



            <!-- Mega Menu -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="main_nav">

                <!--  Navbar -->

                <?php

                $block_data = [

                    'id' => 'ssg_mega_menu',

                    'class' => 'ssg_mega_menu',

                    'text' => 'SSG Mega Menu',

                ];

                get_template_part('blocks/ssg', 'mega-menu', $block_data);

                ?>



                <!-- Right -->

                <!-- Search Icon -->

                <div class="navbar-nav ms-auto <?php echo $class; ?>__right">

                    <?php

                    $block_data = [

                        'id' => 'ssg_quick_search',

                        'class' => 'ssg_quick_search',

                        'text' => 'Quick Search',

                        'image' => THEME_IMG . '/icon_search.png',

                    ];

                    get_template_part('blocks/ssg', 'search-icon', $block_data);

                    ?>



                    <!-- Language -->

                    <?php

                    $block_data = [

                        'id' => 'ssg_language',

                        'class' => 'ssg_language',

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

                    get_template_part('blocks/ssg', 'language-poly', $block_data);

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

    'id' => 'ssg_search_modal',

    'class' => 'ssg_search_modal',

    'title' => 'Tìm kiếm',

];

get_template_part('blocks/ssg', 'search-modal', $block_data);

?>