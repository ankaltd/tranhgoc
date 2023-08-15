<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<div class="container justify-content-center ssg_overpage">

    <article id="<?php echo $id; ?>" class="<?php echo $class; ?> ssg_concept">

        <header class="<?php echo $class ?>__header">

            <div class="row row-cols-2 align-items-center">

                <div class="col-md-8">

                    <h1 class="<?php echo $class ?>__heading"><?php echo $heading; ?></h1>

                </div>

                <div class="col-md-4 justify-content-end text-end">

                    <a class="ssg_button ssg_button--primary" href="/hiring-apply?id=<?php echo $post_id ?>">Ứng tuyển</a>

                </div>

            </div>



            <div class="row row-cols-4 justify-content-center <?php echo $class; ?>__info">

                <div class="col-3">

                    <div class="field">

                        <i class="bi bi-geo-alt-fill"><img src="<?php echo THEME_IMG . '/icon_hr_location.png' ?>" alt=""></i>

                        <span>Địa điểm làm việc</span>

                        <strong><?php echo $location ?></strong>

                    </div>

                </div>

                <div class="col-3">

                    <div class="field">



                        <i class="bi bi-cash"><img src="<?php echo THEME_IMG . '/icon_hr_salary.png' ?>" alt=""></i>

                        <span>Mức lương</span>

                        <strong><?php echo $salary ?></strong>

                    </div>

                </div>

                <div class="col-3">

                    <div class="field">



                        <i class="bi bi-calendar-event-fill"><img src="<?php echo THEME_IMG . '/icon_hr_date.png' ?>" alt=""></i>

                        <span>Hạn nộp hồ sơ</span>

                        <strong><?php echo $date ?></strong>

                    </div>

                </div>

                <div class="col-3">

                    <div class="field">



                        <i class="bi bi-briefcase"><img src="<?php echo THEME_IMG . '/icon_hr_workform.png' ?>" alt=""></i>

                        <span>Hình thức làm việc</span>

                        <strong><?php echo $workform ?></strong>

                    </div>

                </div>

            </div>

        </header>



        <div class="<?php echo $class ?>__content">

            <div class="row row-cols-1 justify-content-center">

                <div class="col">

                    <h4>Mô tả công việc</h4>

                    <div class="hiring_description"><?php echo $description; ?></div>

                    <h4>Yêu cầu công việc</h4>

                    <div class="hiring_requirment"><?php echo $requirment; ?></div>

                    <h4>Quyền lợi</h4>

                    <div class="hiring_benefit"><?php echo $benefit; ?></div>

                </div>

            </div>

        </div>



    </article>

</div>