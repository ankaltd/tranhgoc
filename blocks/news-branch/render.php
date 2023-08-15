<?php

// Load values and assign defaults.

$fields = [

    'wep_content_number'                => 5,

    'wep_content_order'                 => 'asc',

];



// Load values and assign defaults.

$fields = [];



// default options merge

$fields += WEP_Option_Model::get_content_options();

$fields += WEP_Option_Model::get_news_options();

$fields += WEP_Option_Model::get_section_options();

$fields += WEP_Option_Model::get_background_options();



// Get options

$option = WEP_Option_Model::get_field_values($fields);

extract($option);



// Get data

$data = WEP_Section_Model::get_list_terms();

?>

<!-- wep_client_news_branch -->

<?php

WEP_Section_View::render_section_tag($option, 'wep_news_branch no_padding');

?>

<div class="container">

    <div class="row">

        <div class="col wep_news_branch__wrapper">

            <?php $stt = 0;

            foreach ($data as $industry) : ?>

                <a class="nav-link wep_news_branch__item" <?php WEP_Section_View::render_item_aos($option, 3, $stt); ?> href="/khach-hang?industry=<?php echo $industry['slug'] ?>" data-content="<?php echo $industry['title'] ?>" data-slug="<?php echo $industry['slug'] ?>"><?php echo $industry['title'] ?></a>

            <?php $stt++;

            endforeach; ?>

        </div>

    </div>

</div>

</div>



<?php

WEP_Section_View::render_close_tag();

?>