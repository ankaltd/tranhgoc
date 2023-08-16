<?php

/* Footer Default --------------- */
$section_data = [
    'id' => 'wep_footer',
    'class' => 'wep_footer',
    'heading' => 'Page Footer'
];
get_template_part('sections/footer', 'default', $section_data);

wp_footer();

?>

<!-- Link JS -->
<script script type="module" src="<?php echo THEME_URL ?>/assets/wep.js"></script>
</body>
</html>