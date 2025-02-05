<?php

/* Contact Form */

// Load values and assign defaults.

$fields = [];



// default options merge

$fields += WEP_Option_Model::get_section_options();

$fields += WEP_Option_Model::get_heading_options();

$fields += WEP_Option_Model::get_description_options();

$fields += WEP_Option_Model::get_background_options();



// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);



?>

<!-- wep_home_contact -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_contact_form');

?>

<!-- wep_contact_form -->

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-10 col-md-6 text-center">

            <?php

            WEP_Section_View::render_section_heading_desc($option);

            ?>

            </div>

        </div>

        <div id="wep_contact_form__form">

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

WEP_Section_View::render_close_tag();

?>