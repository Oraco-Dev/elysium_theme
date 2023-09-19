<?php
$link = $args['link'];
$title = $args['title'];
$linkIcon = $args['linkIcon'];
$isTab = $args['isTab'];
$index = $args['index'];
?>


<?php if ($isTab): ?>
    <div class="fp-grid__child tab-btn" id="tab-<?php echo $index ?>">
        <image src="<?php echo $linkIcon ?>" class="fp-grid__child-icon" />
        <h5>
            <?php echo $title ?>
        </h5>
    </div>
<?php else: ?>
    <a href="<?php echo $link ?>">
        <div class="fp-grid__child">
            <image src="<?php echo $linkIcon ?>" class="fp-grid__child-icon" />
            <h5>
                <?php echo $title ?>
            </h5>
        </div>
    </a>
<?php endif; ?>