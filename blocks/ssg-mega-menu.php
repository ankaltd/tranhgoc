<?php

$menu_id = 0;
if (has_nav_menu('main-menu')) {
    $menu_locations = get_nav_menu_locations();
    $menu_id = $menu_locations['main-menu']; // Thay 'menu_location_id' bằng ID của vị trí menu bạn muốn lấy nội dung
}

$menu_items = wp_get_nav_menu_items($menu_id);

$top_menu = ANT_Menu::get_menu_items_recursive($menu_items);

?>

<?php extract($args); ?>

<!-- <?php echo $id; ?> -->

<ul class="navbar-nav <?php echo $class ?>" id="<?php echo $id; ?>">

    <?php

    foreach ($top_menu as $item) :

        extract($item);



        $menu_item_classes = '';

        $menu_type = 'item';



        if (!empty($sub_menu)) {

            $menu_item_classes .= ' dropdown';

            $menu_type = 'dropdown';
        }



        if ($mega) {

            if ($column) {
                $menu_item_classes .= ' has-megamenu';

                $menu_type = 'column';

                $menu_column_number = $column_number;
            } else {
                $menu_item_classes .= ' has-megamenu';

                $menu_type = 'mega';
            }
        }



    ?>

        <li class="nav-item <?php echo $menu_item_classes ?>">

            <?php if ($menu_type == 'item') : ?>

                <a class="nav-link" href="<?php echo $url ?>"><?php echo $title ?></a>

            <?php endif ?>



            <?php if ($menu_type === 'dropdown') : ?>

                <a class="nav-link dropdown-toggle" href="<?php echo $url ?>" data-bs-toggle="dropdown"><?php echo $title ?></a>

                <ul class="dropdown-menu shadow" role="menu">

                    <?php

                    foreach ($sub_menu as $sub_item) :

                        extract($sub_item); ?>

                        <li class="dropdown-item"> <a class="nav-link" href="<?php echo $url ?>"><?php echo $title ?></a></li>

                    <?php endforeach; ?>

                </ul>

                <!-- end of dropdown -->

            <?php endif ?>

            <?php if ($menu_type === 'column') : ?>

                <a class="nav-link dropdown-toggle" href="<?php echo $url ?>" data-bs-toggle="dropdown"><?php echo $title ?></a>

                <div class="dropdown-menu megamenu shadow" role="menu">
                    <div class="container-fluid">
                        <div class="row">
                            <?php
                            $menu_column_class = sprintf('col-6 col-md-%s', $menu_column_number);
                            $total_item = count($sub_menu);
                            $column_items = ($total_item % $menu_column_number) + 1;
                            $stt = 0;
                            ?>
                            <div class="<?php echo $menu_column_class ?>">
                                <ul class="column-menu">

                                    <?php
                                    foreach ($sub_menu as $sub_item) :

                                        $stt++;
                                        extract($sub_item);
                                    ?>

                                        <li class="dropdown-item"> <a class="nav-link" href="<?php echo $url ?>"><?php echo $title ?></a></li>

                                        <?php if (($stt % $column_items) === 0) : ?>
                                </ul>
                            </div>
                            <div class="<?php echo $menu_column_class ?>">
                                <ul class="column-menu">
                                <?php endif; ?>

                            <?php endforeach; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end of mega column -->

            <?php endif ?>

            <?php if ($menu_type === 'mega') : ?>

                <a class="nav-link dropdown-toggle" href="<?php echo $url ?>" data-bs-toggle="dropdown"><?php echo $title ?></a>

                <div class="dropdown-menu megamenu shadow" role="menu">

                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-md-4">

                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <?php

                                    if (is_array($mega_items)) {

                                        $stt = 0;

                                        foreach ($mega_items as $item) {

                                            extract($item);

                                            $active = $stt == 0 ? 'active' : '';

                                            $selected = $stt == 0 ? 'true' : 'false';
                                            $tab_title = sprintf('<a class="nav-link %s" id="v-pills-%s-tab" data-bs-toggle="pill" href="#v-pills-%s" role="tab" aria-controls="v-pills-%s" aria-selected="%s">%s</a>', $active, $stt, $stt, $stt, $selected, $mega_menu_tab_title);
                                            echo $tab_title;
                                            $stt++;
                                        }
                                    };
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-8 p-3">
                                <div class="tab-content" id="v-pills-tabContent">

                                    <?php
                                    if (is_array($mega_items)) :

                                        $stt = 0;

                                        foreach ($mega_items as $item) :

                                            extract($item);
                                            $active = $stt == 0 ? 'show active' : '';

                                            $tab_id = 'v-pills-' . $stt;

                                            $tab_label = 'v-pills-' . $stt . '-tab';

                                    ?>

                                            <div class="tab-pane fade <?php echo $active ?>" id="<?php echo $tab_id ?>" role="tabpanel" aria-labelledby="<?php echo $tab_label ?>">

                                                <h4><?php echo $mega_menu_tab_title ?></h4>

                                                <div class="list_links">

                                                    <?php

                                                    if ($mega_menu_tab_items) :

                                                        foreach ($mega_menu_tab_items as $post_item) {

                                                            $item_id = $post_item->ID;

                                                            $item_title = $post_item->post_title;

                                                            $item_url = get_the_permalink($item_id);

                                                            echo sprintf('<div class="list_links list_links__item"><a href="%s">%s</a></div>', $item_url, $item_title);
                                                        };

                                                    endif;

                                                    ?>

                                                </div>

                                            </div>

                                    <?php

                                            $stt++;

                                        endforeach;

                                    endif;

                                    ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div> <!-- dropdown-mega-menu.// -->

            <?php endif ?>



        </li>



    <?php endforeach ?>

</ul>