<?php extract($args); ?>

<!-- <?php echo $id; ?> -->
<div class="language-select" id="<?php echo $id ?>">
    <select class="form-select" id="<?php echo $id ?>__select2">
        <?php foreach ($language as $flag) : ?>
            <option value="<?php echo $flag['value'] ?>"><?php echo $flag['text'] ?></option>
        <?php endforeach ?>
    </select>
</div>

<!-- Create Data Language -->
<script>
    var wep_data = [
        <?php foreach ($language as $flag) : ?> {
                id: "<?php echo $flag['value'] ?>",
                text: "<?php echo $flag['text'] ?>",
                image: "<?php echo $flag['icon'] ?>"
            },
        <?php endforeach ?>
    ];
</script>