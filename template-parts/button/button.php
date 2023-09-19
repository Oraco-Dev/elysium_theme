<?php
$button_text = $args['buttonText'];
$button_link = $args['buttonLink'];
$img_hidden = $args['imgHidden']
    ?>

<a href="<?php echo $button_link ?>" target="_blank" class="button-primary">
    <button>
        <?php echo $button_text ?>
    </button>
    <?php if (!$img_hidden): ?>
        <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Group-385.png" class="button-img" />
    <?php endif; ?>
</a>