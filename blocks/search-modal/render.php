<?php
/* Search Modal */
$tag = get_field('ssg_heading_tag');
$color = get_field('ssg_heading_color');
$text = get_field('ssg_heading_text');
$align = get_field('ssg_heading_align');
$margin = get_field('ssg_margin_bottom');
?>
<!-- Search Overly -->
<!-- ssg_search_modal -->

<!-- Modal Search -->
<div class="ssg_search_modal modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="searchModalLabel">Tìm kiếm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form input search -->
                <input class="ssg_search_modal__input" type="text" placeholder="Nhập nội dung cần tìm">
            </div>
        </div>
    </div>
</div>