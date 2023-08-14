<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo (isset($class2)) ? $class2 : ''; ?> ssg_concept--section">
    <div class="container">
        <div class="row">
            <h2 class="ssg_heading justify-content-start"><?php echo $heading; ?></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php $stt = 0;
                    foreach ($tab_list as $key => $item) :  ?>
                        <a class="nav-link <?php echo $stt == 0 ? 'active' : ''; ?>" id="v-pills-<?php echo $key ?>-tab" data-bs-toggle="pill" href="#v-pills-<?php echo $key ?>" role="tab" aria-controls="v-pills-<?php echo $key ?>" aria-selected="<?php echo $stt == 1 ? 'true' : 'false'; ?>"><?php echo $item['tab'] ?></a>
                    <?php $stt++;
                    endforeach; ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <?php $stt = 0;
                    foreach ($tab_list as $key => $item) :  ?>
                        <div class="tab-pane fade <?php echo $stt == 0 ? 'show active' : ''; ?>" id="v-pills-<?php echo $key ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $key ?>-tab">
                            <h4><?php echo $item['title'] ?></h4>
                            <p><?php echo $item['text'] ?></p>
                        </div>
                    <?php $stt++;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</section>