<?php

$tag = get_field('wep_heading_tag');

$color = get_field('wep_heading_color');

$text = get_field('wep_heading_text');

$align = get_field('wep_heading_align');

$margin = get_field('wep_margin_bottom');

?>

<!-- wep_language -->

<div class="language-select" id="wep_language">

    <select class="form-select" id="wep_language__select2">

        <option value="vn">Tiếng Việt</option>

        <option value="en">English</option>

    </select>

</div>



<!-- Create Data Language -->

<script>

    var wep_data = [{

            id: "vn",

            text: "Tiếng Việt",

            image: "https://demo.wep.vn/wp-content/themes/tranhgoc/assets/images/icon-flat-vn.png"

        },

        {

            id: "en",

            text: "English",

            image: "https://demo.wep.vn/wp-content/themes/tranhgoc/assets/images/icon-flat-en.png"

        },

    ];

</script>