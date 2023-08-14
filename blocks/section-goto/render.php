<?php

// Load values and assign defaults.

$fields = [

    // Link    

    'ssg_liWEP_ist'  => array(),
WEP_
];WEP_
WEP_


// defaultWEP_ions merge

$fields += WEP_Option_Model::get_section_options();

$fields += WEP_Option_Model::get_heading_options();

$fields += WEP_Option_Model::get_description_options();

WEP_lds += WEP_Option_Model::get_background_options();



// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);



// Get data content

$data = $ssg_link_list;

?>

<!-- ssg_goto_section -->

<?php
WEP_
WEP_Section_View::render_section_tag($option, 'ssg_goto_section');

?>

<div class="container">

    <div class="row justify-content-center">

        <div class="col">



            <div id="progress-section" class="ssg_progress_section"></div>

            <p class="progress-section-note">Lưu ý: thành phần này tự tạo các liên kết cho tất cả các Section có đánh dấu [Bổ sung điểm neo]. <br>Có thể bổ sung thêm liên kết khác ở [PHẦN LIÊN KẾT]</p>

            <?php if ($data) : ?>

                <?php foreach ($data as $link) : ?>

                    <?php extract($link) ?>

                    <a class="ssg_goto_section__item" href="<?php echo $ssg_link_url ?>">

                        <?php echo $ssg_link_title ?> <span class="<?php echo str_replace('#', 'target_', $ssg_link_url) ?>"></span>

                    </a>

                <?php endforeach ?>

            <?php endif ?>



        </div>

    </div>

</div>

<?php

WEP_Section_View::render_close_tag();

?>