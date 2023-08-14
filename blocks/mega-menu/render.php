<?php

$menu_id = 0;
if (has_nav_menu('main-menu')) {    
    $menu_locations = get_nav_menu_locations();
    $menu_id = $menu_locations['main-menu']; // Thay 'menu_location_id' bằng ID của vị trí menu bạn muốn lấy nội dung
}

$menu_items = wp_get_nav_menu_items($menu_id);

$top_menu = WEP_Menu::get_menu_items_recursive($menu_items);



?>

<!-- Mega Menu -->

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="main_nav" style="display:block">

    <!--  Navbar -->



    <!-- ssg_mega_menu -->

    <ul class="navbar-nav ssg_mega_menu" id="ssg_mega_menu" style="display:flex;flex-direction: row;">

        <?php

        foreach ($top_menu as $item) :

            extract($item);



            $menu_item_classes = '';

            $menu_type = 'item';



            if (!empty($sub_menu)) {

                $menu_item_classes .= ' dropdown';

                $menu_type = 'dropdown';



                foreach ($sub_menu as $sub_item) {

                    extract($sub_item);

                    echo $title . ' |  ' . $url . ' | <br>';
                }
            }



            if ($mega) {

                //var_dump($mega_items);



                $menu_item_classes .= ' has-megamenu';

                $menu_type = 'mega';
            }



        ?>

            <li class="nav-item <?php echo $menu_item_classes ?>" style="">

                <?php if ($menu_type == 'item') : ?>

                    <a class="nav-link" href="<?php echo $url ?>"><?php echo $title ?></a>

                <?php endif ?>



                <?php if ($menu_type === 'dropdown') : ?>

                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo $title ?></a>

                    <ul class="dropdown-menu shadow" role="menu">

                        <li class="dropdown-item"> <a class="nav-link" href="/tin-tuc/">Danh sách tin</a></li>

                        <li class="dropdown-item"><a class="nav-link" href="/khach-hang#xang-dau">Kinh nghiệm triển khai</a></li>

                        <li class="dropdown-item"> <a class="nav-link" href="/nghien-cuu-va-chia-se">Nghiên cứu và chia sẻ</a></li>

                    </ul>

                    <!-- end of dropdown -->

                <?php endif ?>



                <?php if ($menu_type === 'mega') : ?>

                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Giải pháp</a>

                    <div class="dropdown-menu megamenu shadow" role="menu">

                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-md-4">

                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                        <a class="nav-link active" id="v-pills-one-tab" data-bs-toggle="pill" href="#v-pills-one" role="tab" aria-controls="v-pills-one" aria-selected="false">Kế hoạch nguồn lực doanh nghiệp</a>

                                        <a class="nav-link " id="v-pills-two-tab" data-bs-toggle="pill" href="#v-pills-two" role="tab" aria-controls="v-pills-two" aria-selected="true">Quản trị chuỗi cung ứng</a>

                                        <a class="nav-link " id="v-pills-three-tab" data-bs-toggle="pill" href="#v-pills-three" role="tab" aria-controls="v-pills-three" aria-selected="false">Quản lý nhân sự tiền lương & báo cáo</a>

                                        <a class="nav-link " id="v-pills-four-tab" data-bs-toggle="pill" href="#v-pills-four" role="tab" aria-controls="v-pills-four" aria-selected="false">Trải nghiệm khách hàng</a>

                                    </div>

                                </div>

                                <div class="col-md-8 p-3">

                                    <div class="tab-content" id="v-pills-tabContent">

                                        <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">

                                            <h4>Dịch vụ giải pháp SAP</h4>

                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English.</p>

                                        </div>

                                        <div class="tab-pane fade " id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">

                                            <h4>Dịch vụ Chain</h4>

                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English.</p>

                                        </div>

                                        <div class="tab-pane fade " id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">

                                            <h4>Dịch vụ Report</h4>

                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English.</p>

                                        </div>

                                        <div class="tab-pane fade " id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab">

                                            <h4>Dịch vụ Customer Experience</h4>

                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English.</p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div> <!-- dropdown-mega-menu.// -->

                <?php endif ?>

            </li>

        <?php endforeach ?>

    </ul>

</div>