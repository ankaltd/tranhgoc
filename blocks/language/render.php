<?php
$tag = get_field('ssg_heading_tag');
$color = get_field('ssg_heading_color');
$text = get_field('ssg_heading_text');
$align = get_field('ssg_heading_align');
$margin = get_field('ssg_margin_bottom');
?>
<!-- ssg_language -->
<div class="language-select" id="ssg_language">
    <select class="form-select" id="ssg_language__select2">
        <option value="vn">Tiếng Việt</option>
        <option value="en">English</option>
    </select>
</div>

<!-- Create Data Language -->
<script>
    var ssg_data = [{
            id: "vn",
            text: "Tiếng Việt",
            image: "https://demo.ssg.vn/wp-content/themes/ssg/assets/images/icon-flat-vn.png"
        },
        {
            id: "en",
            text: "English",
            image: "https://demo.ssg.vn/wp-content/themes/ssg/assets/images/icon-flat-en.png"
        },
    ];
</script>