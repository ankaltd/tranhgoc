<?php extract($args); ?>

<div class="<?php echo $class; ?>">
    <div class="container">
        <div class="row py-2">

            <!-- Middle Footer -->
            <div class="<?php echo $class; ?>-column col-12">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu', // Sử dụng theme_location 'footer-menu' ở đây
                    'menu_class' => 'list-unstyled wep_footer_menu nav text-center justify-content-center',
                ));
                ?>
            </div>

        </div>
    </div>
</div>