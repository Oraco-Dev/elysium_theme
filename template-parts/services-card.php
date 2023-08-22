<?php
$link = $args['link'];
$title = $args['title'];
$linkIcon = $args['linkIcon'];
?>

<a href="<?php echo $link ?>" target="_blank" rel="noreferrer">
    <div class="fp-grid__child">
        <image src="<?php echo $linkIcon ?>" class="fp-grid__child-icon" />
        <h5>
            <?php echo $title ?>
        </h5>
    </div>
</a>