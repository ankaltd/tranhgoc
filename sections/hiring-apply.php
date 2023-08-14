<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>">
    <div class="container <?php echo $class; ?> justify-content-center">
        <div class="row">
            <h2 class="text-center ssg_heading"><?php echo $heading; ?></h2>
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
                <button class="ssg_button ssg_button--primary">Ứng tuyển</button>
            </div>
        </div>
    </div>
</section>