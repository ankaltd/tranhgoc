<?php

/* Hiring List */

// Load values and assign defaults.

$fields = [

    // Content

    'ssg_content_image_responsive'      => true,

    'ssg_content_list'                  => array(),

    'ssg_content_image_align'           => 0,

    'ssg_content_text_align'            => 0,

    'ssg_content_show_element'          => array(),

];



// default options merge

$fields += WEP_Option_Model::get_content_options();

$fields += WEP_Option_Model::get_section_options();

$fields += WEP_Option_Model::get_heading_options();

$fields += WEP_Option_Model::get_description_options();

$fields += WEP_Option_Model::get_background_options();



// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);



// Get data content

$data = WEP_Section_Model::get_list_hiring($ssg_content_number, $ssg_content_order, 'thumbnail');



// Get data taxonomies

$data_position = WEP_Section_Model::get_list_terms('hiring_position');

$data_location = WEP_Section_Model::get_list_terms('location');



?>

<!-- ssg_hiring_list -->

<?php

WEP_Section_View::render_section_tag($option, 'ssg_hiring_list ssg_concept--section');

?>

<div class="container ">

    <div class="row">

        <?php

        WEP_Section_View::render_section_heading_desc($option);

        ?>

    </div>

    <!-- Form Filter -->

    <form id="ssg_hiring_list_form">

        <div class="row my-4 align-items-center">

            <div class="col-md-3">

                <input type="text" class="form-control" placeholder="Vị trí công việc">

            </div>

            <div class="col-md-3">

                <div class="ssg_select">

                    <select class="form-control">

                        <option selected disabled>Hình thức làm việc</option>

                        <option value="fulltime">Toàn thời gian</option>

                        <option value="parttime">Bán thời gian</option>

                        <option value="intern">Thực tập</option>

                    </select>

                </div>

            </div>

            <div class="col-md-3">

                <div class="ssg_select">

                    <select class="form-control">

                        <option selected disabled>Địa điểm</option>

                        <?php foreach ($data_location as $location) : ?>

                            <?php extract($location) ?>

                            <option value="<?php echo $id ?>"><?php echo $title ?></option>

                        <?php endforeach ?>



                    </select>

                </div>

            </div>

            <div class="col-md-3">

                <button type="submit" class="ssg_button ssg_button--primary ssg_search">Tìm kiếm</button>

            </div>

        </div>

    </form>



    <!-- Listing -->

    <table class="table">

        <thead>

            <tr>

                <th>Vị trí tuyển dụng</th>

                <th>Địa điểm</th>

                <th>Hạn tuyển dụng</th>

                <th>Ứngng tuyển</th>

            </tr>

        </thead>

        <tbody>



            <?php foreach ($data as $item) : ?>

                <?php extract($item) ?>

                <tr>

                    <td><a href="<?php echo $permalink ?>"><?php echo $title ?></a></td>

                    <td><i class="bi bi-geo-alt-fill">

                            <img src="https://demo.ssg.vn/wp-content/themes/ssg/assets/images/icon_hr_location.png" alt="">

                        </i> <?php echo $hirring_location ?></td>

                    <td><i class="bi bi-calendar-event-fill">

                            <img src="https://demo.ssg.vn/wp-content/themes/ssg/assets/images/icon_hr_date.png" alt=""></i>

                        <span class="date"><?php echo $hiring_deadline ?></span>

                    </td>

                    <td><a class="ssg_more_link" href="<?php echo $permalink . '#ssg_hirring_apply'; ?>" >Ứng tuyển</a></td>

                </tr>

            <?php endforeach ?>

        </tbody>

    </table>



    <div class="row text-center justify-content-center">

        <div class="col">

            <a class="ssg_more_link" href="">Tải thêm nội dung</a>

        </div>

    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>