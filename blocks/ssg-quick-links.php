<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<ul class="nav <?php echo $class; ?>" id="<?php echo $id; ?>" style="<?php echo $inline_styles; ?>">
    <?php foreach ($links as $item) : ?>
        <?php extract($item)?>
        <li class="nav-item <?php echo $class; ?>__item">
            <a class="nav-link" href="<?php echo $link ?>"><?php echo $title ?></a>
        </li>
    <?php endforeach ?>
</ul>