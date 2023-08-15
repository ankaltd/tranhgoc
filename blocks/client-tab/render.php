<?php

/* Home Client Tab */

// Load values and assign defaults.

$fields = [
    'ssg_content_number'                => 5,
    'ssg_content_order'                 => 'asc',
    'ssg_tab_hoz_content_popup'         => false,
];

// default options merge
$fields += ANT_Option_Model::get_content_options();
$fields += ANT_Option_Model::get_news_options();
$fields += ANT_Option_Model::get_section_options();
$fields += ANT_Option_Model::get_heading_options();
$fields += ANT_Option_Model::get_description_options();
$fields += ANT_Option_Model::get_background_options();

// Get options

$option = ANT_Option_Model::get_field_values($fields);

extract($option);



// Get data

$data = ANT_Section_Model::get_list_terms();

?>

<!-- ssg_home_client -->

<?php

ANT_Section_View::render_section_tag($option, 'ssg_home_client');

?>

<div class="container">

    <div class="row text-center justify-content-center">

        <div class="col-10 col-md-9">

            <?php

            ANT_Section_View::render_section_heading_desc($option);

            ?>

        </div>

    </div>

    <div class="row justify-content-center">

        <div class="col-lg-12">

            <ul class="nav nav-tabs justify-content-center">

                <?php $stt = 0;

                foreach ($data as $industry) : ?>

                    <li class="nav-item" <?php ANT_Section_View::render_item_aos($option, 3, $stt); ?>>

                        <a class="nav-link <?php echo $stt == 0 ? 'active' : '' ?>" id="<?php echo $industry['slug'] ?>" data-bs-toggle="tab" href="#content-<?php echo $industry['slug'] ?>" data-content="<?php echo $industry['title'] ?>"><?php echo $industry['title'] ?></a>

                    </li>

                <?php $stt++;

                endforeach; ?>

            </ul>



            <div class="tab-content mt-2 justify-content-center">

                <?php $stt = 0;

                foreach ($data as $industry) : ?>

                    <?php

                    // Get Clients

                    $industry_id = $industry['id'];

                    $industry_slug = $industry['slug'];

                    $data_client = ANT_Section_Model::get_list_client_by_industry(-1, $industry_id, 'asc', 'ssg_thumb_client');



                    ?>

                    <div class="tab-pane fade show <?php echo $stt == 0 ? 'active' : '' ?>" id="content-<?php echo $industry_slug ?>">

                        <div class="row row-cols-2 row-cols-4 text-center">

                            <?php $stt = 0;

                            foreach ($data_client as $logo) :
                                extract($logo);

                                // Get Links
                                if ($logo['permalink']) {
                                    $logoLink = $logo['permalink']; // default is detail   
                                }

                                if ($logo['link']) {
                                    $logoLink = $logo['link'];
                                }

                            ?>

                                <div class="col-6 col-md-3 g-3 g-md-5" <?php ANT_Section_View::render_item_aos($option, 4, $stt); ?>>
                                    <?php if ($ssg_tab_hoz_content_popup) : ?>
                                        <a href="<?php print_r($logoLink); ?>" data-content-id="<?php echo $logo['id']; ?>" class="logo-content-link" data-bs-toggle="modal" title="<?php echo $logo['title'] ?>">
                                            <img class="ssg_home_client__logo" src="<?php echo $logo['thumbnail'] ?>" alt="<?php echo $logo['title'] ?>">
                                        </a>
                                    <?php else : ?>
                                        <a href="<?php print_r($logoLink); ?>" class="tooltip-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $logo['title'] ?>">
                                            <img class="ssg_home_client__logo" src="<?php echo $logo['thumbnail'] ?>" alt="<?php echo $logo['title'] ?>">
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php $stt++;
                            endforeach; ?>
                        </div>
                    </div>
                <?php $stt++;
                endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php
ANT_Section_View::render_close_tag();
?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Biểu tượng spin loading -->
            <div class="loading-spinner">
                <span class="spinner-border spinner-border-lg" role="status" aria-hidden="true"></span>
                Đang tải...
            </div>
            <!-- Nội dung thực sự của popup -->

            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tên cty</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 d-flex flex-column align-items-center justify-content-start text-center">
                        <a href="#" class="client_website"><img src="" alt="" class="client_logo"></a>
                        <p class="client_website_url p-3"></p>
                    </div>
                    <div class="col-md-8 d-flex flex-column align-items-start justify-content-start text-start">
                        <div class="row">
                            <div class="col">
                                <div class="solution_using_list"></div>
                                <div class="service_using_list"></div>
                                <div class="client_detail"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>