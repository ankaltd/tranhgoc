<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<div class="<?php echo $class; ?>" id="<?php echo $id; ?>">
    <?php foreach ($icons as $item) : ?>
        <a href="<?php echo $item['link'] ?>" title="<?php echo $item['text'] ?>">
            <img src="<?php echo $item['icon'] ?>" alt="<?php echo $item['text'] ?>">
        </a>
    <?php endforeach ?>
</div>