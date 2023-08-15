<?php extract($args); ?>



<!-- <?php echo $id; ?> -->

<section id="<?php echo $id; ?>" class="<?php echo $class; ?>">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col">



                <?php

                /* Progress Bar ---------------  */

                $section_data = [

                    'id' => 'wep_progress_section',

                    'class' => 'wep_progress_section',

                    'heading' => 'Giới thiệu về WEP ',

                    'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical',

                ];

                get_template_part('blocks/wep', 'progress-section', $section_data);

                ?>

                <?php foreach ($section_list as $key => $name) : ?>

                    <a class="<?php echo $class; ?>__item" href="#<?php echo $key ?>">

                        <?php echo $name ?>

                        <span class="target_<?php echo $key ?>"></span>

                    </a>

                <?php endforeach; ?>



            </div>

        </div>

    </div>

</section>