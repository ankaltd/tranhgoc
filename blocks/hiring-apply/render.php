<?php

/* Hiring Benefit */

$tag = get_field('wep_heading_tag');

$color = get_field('wep_heading_color');

$text = get_field('wep_heading_text');

$align = get_field('wep_heading_align');

$margin = get_field('wep_margin_bottom');

?>



<!-- wep_hirring_apply -->

<section id="wep_hirring_apply">

    <div class="container wep_hirring_apply justify-content-center">

        <div class="row">

            <h2 class="text-center wep_heading">Thông tin ứng tuyển</h2>

        </div>



        <div class="row my-4 justify-content-center">

            <div class="col-md-4">

                <input type="text" class="form-control" placeholder="Họ tên">

            </div>

            <div class="col-md-4">

                <input type="text" class="form-control" placeholder="Email">

            </div>

        </div>



        <div class="row my-4 justify-content-center">

            <div class="col-md-4">

                <input type="text" class="form-control" placeholder="Số điện thoại">

            </div>

            <div class="col-md-4">

                <select class="form-select">

                    <option selected disabled>Vị trí tuyển dụng</option>

                    <option>Account Manager (Digital Marketing)</option>

                    <option>...</option>

                </select>

            </div>

        </div>



        <div class="row my-4 justify-content-center">

            <div class="col-md-8">

                <div class="input-group">

                    <input type="file" class="form-control" placeholder="Đính kèm CV của bạn" readonly>

                    <button class="btn btn-secondary" type="button">Chọn file</button>

                </div>

            </div>

        </div>



        <div class="row my-4 justify-content-center">

            <div class="col-md-8">

                <textarea class="form-control" rows="4" placeholder="Nội dung"></textarea>

            </div>

        </div>



        <div class="row my-4 justify-content-center">

            <div class="col-md-8 text-center">

                <button class="wep_button wep_button--primary">Ứng tuyển</button>

            </div>

        </div>

    </div>

</section>