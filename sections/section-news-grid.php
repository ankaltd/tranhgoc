<?php

extract($args);



$search_fields = [

    'wep_search_page_show' => 'all'

];



$category_fields = [

    'wep_category_page_show' => 'all'

];



$search_options = WEP_Option_Model::get_field_values($search_fields, true);

$category_options = WEP_Option_Model::get_field_values($category_fields, true);

extract($search_options);

extract($category_options);



?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?> <?php echo (isset($class2)) ? $class2 : ''; ?>">

    <div class="container">

        <?php if (isset($heading)) : ?>

            <div class="row">

                <h2 class="text-center"><?php echo $heading; ?></h2>

            </div>

        <?php endif; ?>

        <div class="row row-cols-2 row-cols-md-<?php echo $columns ?> justify-content-center">

            <?php

            $stt = 0;

            foreach ($news_list as $news) : ?>

                <div class="col" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="<?php echo $stt * 100 + 100 ?>">

                    <div class="<?php echo $class; ?>__item">



                        <?php if ((is_search() && in_array('thumbnail', $wep_search_page_show)) || (is_category() && in_array('thumbnail', $wep_category_page_show))) : ?>

                            <div class="<?php echo $class; ?>__thumbnail">

                                <a href="<?php echo $news['permalink']; ?>"><img src="<?php echo $news['image'] ?>" alt="<?php echo $news['title'] ?>" class="img-fluid"></a>

                            </div>

                        <?php endif; ?>



                        <?php if ((is_search() && in_array('date', $wep_search_page_show)) || (is_category() && in_array('date', $wep_category_page_show))) : ?>

                            <?php if (isset($news['date'])) : ?>

                                <p class="<?php echo $class; ?>__meta date"><?php echo $news['date'] ?></span></p>

                            <?php endif; ?>

                        <?php endif; ?>

                        <div class="<?php echo $class; ?>__content">

                            <?php if ((is_search() && in_array('title', $wep_search_page_show)) || (is_category() && in_array('title', $wep_category_page_show))) : ?>

                                <h5 class="<?php echo $class; ?>__title"><a href="<?php echo $news['permalink']; ?>"><?php echo $news['title'] ?></a></h5>

                            <?php endif; ?>



                            <?php if ((is_search() && in_array('summary', $wep_search_page_show)) || (is_category() && in_array('summary', $wep_category_page_show))) : ?>

                                <?php if (isset($news['text'])) : ?>

                                    <p class="<?php echo $class; ?>__text"><?php echo $news['text'] ?></p>

                                <?php endif; ?>

                            <?php endif; ?>



                            <?php if (is_category() && in_array('readmore', $wep_category_page_show)) : ?>

                                <p><a class="wep_more_link" href="<?php echo $news['permalink'] ?>">Xem thêm</a></p>

                            <?php endif ?>



                        </div>



                    </div>

                </div>

            <?php

                $stt++;

            endforeach;

            ?>

        </div>

        <div class="row">

            <?php

            // Hiển thị thanh điều hướng (pagination) 

            echo $pagination;

            ?>

        </div>

    </div>

</section>