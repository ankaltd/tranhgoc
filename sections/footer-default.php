<?php extract($args); ?>

<!-- <?php echo $id; ?> -->

<footer id="<?php echo $id; ?>" class="<?php echo $class; ?> wep_bg_dark">
    <div class="container">
        <!-- Top Footer -->
        <?php
        $section_data = [
            'id' => 'wep_footer_top',
            'class' => 'wep_footer_top',
        ];
        get_template_part('sections/footer', 'top', $section_data);
        ?>

        <!-- Middle Footer -->
        <?php
        $section_data = [
            'id' => 'wep_footer_middle',
            'class' => 'wep_footer_middle',

        ];
        get_template_part('sections/footer', 'middle', $section_data);
        ?>

        <!-- Bottom Footer -->
        <?php
        $section_data = [
            'id' => 'wep_footer_bottom',
            'class' => 'wep_footer_bottom',

        ];
        get_template_part('sections/footer', 'bottom', $section_data);
        ?>
    </div>
</footer>