<?php

/* Contact Form */

// Load values and assign defaults.

$fields = [WEP_
WEP_
WEP_
WEP_
// default options merge

$fields +=WEP__Option_Model::get_section_options();

$fields += ANT_Option_Model::get_heading_options();

$fields += ANT_Option_Model::get_description_options();

WEP_lds += ANT_Option_Model::get_background_options();



// Get options

$option = ANT_Option_Model::get_field_values($fields);
WEP_
extract($option);



?>

<!-- ssg_home_contact -->

<?php

ANT_Section_View::render_section_tag($option, 'ssg_contact_form');

?>

<!-- ssg_contact_form -->

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-10 col-md-6 text-center">

            <?php

            ANT_Section_View::render_section_heading_desc($option);

WEP_        ?>

            </div>

        </div>

        <div id="ssg_contact_form__form">

            <div class="row justify-content-center">

                <div class="col-12 col-md-9 text-center">                    



                    <?php

                    // Trong trường hợp bạn muốn hiển thị form liên hệ tương ứng với ID của nó

                    $form_id = 1753;

                    $form_shortcode = '[contact-form-7 id="' . $form_id . '"]';



                    // Hoặc, nếu bạn muốn hiển thị form liên hệ dựa vào tiêu đề của nó

                    $form_title = 'Form liên hệ 1';

                    $form_shortcode = '[contact-form-7 title="' . $form_title . '"]';



                    // Sử dụng hàm do_shortcode để hiển thị form liên hệ

                    echo do_shortcode($form_shortcode);

                    ?>



                </div>

            </div>

        </div>

    </div>



    <?php

ANT_Section_View::render_close_tag();

?>