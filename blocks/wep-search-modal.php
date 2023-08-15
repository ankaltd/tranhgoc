<?php extract($args); ?>
<!-- <?php echo $id; ?> -->

<!-- Modal Search -->
<div class="<?php echo $class; ?> modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="searchModalLabel"><?php echo $title ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form input search -->
                <input class="<?php echo $class; ?>__input wep_margin search-field" type="search" placeholder="Nhập nội dung cần tìm">

                <!-- Sử dụng thẻ button để tạo nút submit -->
                <input type="submit" class="wep_button wep_button--primary float-end" id="wep_search" value="Tìm kiếm" />

            </div>
        </div>
    </div>
</div>