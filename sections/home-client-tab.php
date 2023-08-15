<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<section id="<?php echo $id; ?>" class="<?php echo $class; ?>">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-10 col-md-9">
                <h2 class="wep_heading"><?php echo $heading; ?></h2>
                <p class="wep_description wep_margin--b4"><?php echo $description ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <ul class="nav nav-tabs justify-content-center">
                    <?php $stt = 0;
                    foreach ($tab_list as $key => $item) :  ?>
                        <li class="nav-item">
                            <a class="nav-link  <?php echo $stt == 0 ? 'active' : ''; ?>" id="tab-<?php echo $key ?>" data-bs-toggle="tab" href="#content-<?php echo $key ?>" data-content="<?php echo $item['tab'] ?>"><?php echo $item['tab'] ?></a>
                        </li>
                    <?php $stt++;
                    endforeach; ?>
                </ul>

                <div class="tab-content mt-2 justify-content-center">
                    <?php $stt = 0;
                    foreach ($tab_list as $key => $item) :  ?>
                        <div class="tab-pane fade <?php echo $stt == 0 ? 'show active' : ''; ?>" id="content-<?php echo $key ?>">
                            <div class="row row-cols-2 row-cols-4 text-center">
                                <?php foreach ($item['logo_list'] as $logo) : ?>
                                    <div class="col-6 col-md-3 g-3 g-md-5">
                                        <a href="">
                                            <img class="<?php echo $class; ?>__logo" src="<?php echo $logo ?>" alt="<?php echo $logo ?>">
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php $stt++;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</section>