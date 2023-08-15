<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?> wep_concept--section">
    <div class="container ">
        <div class="row">
            <h2 class="wep_heading text-center"><?php echo $heading; ?></h2>
        </div>
        <!-- Form Filter -->
        <form id="<?php echo $id; ?>_form">
            <div class="row my-4 align-items-center">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Vị trí công việc">
                </div>
                <div class="col-md-3">
                    <div class="wep_select">
                        <select class="form-control">
                            <option selected disabled>Hình thức làm việc</option>
                            <option>Toàn thời gian</option>
                            <option>Bán thời gian</option>
                            <option>Thực tập</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wep_select">
                        <select class="form-control">
                            <option selected disabled>Địa điểm</option>
                            <option>Hà Nội</option>
                            <option>Hồ Chí Minh</option>
                            <option>Đà Nẵng</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="wep_button wep_button--primary wep_search">Tìm kiếm</button>
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
                <?php foreach ($hiring_list as $item) : ?>
                    <tr>
                        <td><a href="#"><?php echo $item['position'] ?></a></td>
                        <td><i class="bi bi-geo-alt-fill"><img src="<?php echo THEME_IMG . '/icon_hr_location.png'  ?>" alt=""></i> <?php echo $item['location'] ?></td>
                        <td><i class="bi bi-calendar-event-fill"><img src="<?php echo THEME_IMG . '/icon_hr_date.png'  ?>" alt=""></i> <span class="date"><?php echo $item['date'] ?></span></td>
                        <td><a class="wep_more_link" href="#">Ứng tuyển</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <div class="row text-center justify-content-center">
            <div class="col">
                <a class="wep_more_link" href="">Tải thêm nội dung</a>
            </div>
        </div>
    </div>
</section>