<?php
extract($args);
?>
<!-- <?php echo $id; ?> -->
<nav id="<?php echo $id; ?>" class="<?php echo $class; ?> navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav ms-auto <?php echo $class; ?>" id="<?php echo $id; ?>">
        <?php $stt = 0;
        foreach ($menu as $item) : ?>
            <?php extract($item) ?>
            <li class="nav-item <?php echo $class; ?>__item" id="<?php echo $id . '__item--' . $stt ?>">
                <a class="nav-link" href="<?php echo $link ?>"><?php echo $title ?></a>
            </li>
        <?php $stt++;
        endforeach; ?>
    </ul>
</nav>