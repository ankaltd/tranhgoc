<?php
// Load values and assign defaults.
$fields = [
    'ssg_content_number'                => 5,
    'ssg_content_order'                 => 'asc',
];

// Load values and assign defaults.
$fields = [];

// default options merge
$fields += ANT_Option_Model::get_content_options();
$fields += ANT_Option_Model::get_news_options();
$fields += ANT_Option_Model::get_section_options();
$fields += ANT_Option_Model::get_background_options();

// Get options
$option = ANT_Option_Model::get_field_values($fields);
extract($option);

// Get data
$data = ANT_Section_Model::get_list_terms();
?>
<!-- ssg_client_news_branch -->
<?php
ANT_Section_View::render_section_tag($option, 'ssg_news_branch no_padding');
?>
<div class="container">
    <div class="row">
        <div class="col ssg_news_branch__wrapper">
            <?php $stt = 0;
            foreach ($data as $industry) : ?>
                <a class="nav-link ssg_news_branch__item" <?php ANT_Section_View::render_item_aos($option, 3, $stt); ?> href="/khach-hang?industry=<?php echo $industry['slug'] ?>" data-content="<?php echo $industry['title'] ?>" data-slug="<?php echo $industry['slug'] ?>"><?php echo $industry['title'] ?></a>
            <?php $stt++;
            endforeach; ?>
        </div>
    </div>
</div>
</div>

<?php
ANT_Section_View::render_close_tag();
?>