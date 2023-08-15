<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-6 text-center">
                <h2 class="wep_heading"><?php echo $heading ?></h2>
                <p class="wep_description"><?php echo $description ?></p>
            </div>
        </div>
        <form action="" id="<?php echo $id; ?>__form">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 text-center">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Họ tên">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Điện thoại">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Tiêu đề">
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Nội dung"></textarea>
                    </div>

                    <button class="wep_button wep_button--primary">Gửi</button>
                </div>
            </div>
        </form>
    </div>

</section>