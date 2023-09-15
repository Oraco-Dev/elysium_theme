<?php
$button_text = $args['buttonText'];
$img_hidden = $args['imgHidden']
    ?>

<div class="button">
    <button class="modal-btn">
        <?php echo $button_text ?>
    </button>
    <?php if (!$img_hidden): ?>
        <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Group-385.png" class="button-img" />
    <?php endif; ?>
</div>