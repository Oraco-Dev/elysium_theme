<?php
$title = $args['title'];
$subtitle = $args['subtitle'];
$content = $args['content'];
$image_url = $args['imageUrl'];
$button_text = $args['buttonText'];
$button_link = $args['buttonLink'];
?>

<div class="abr">
    <div class="abr-left" style="background-image: url(<?php echo $image_url ?>)">
        <!-- <img src="<?php echo $image_url ?>" alt="Free Assesment Image" /> -->
    </div>
    <div class="abr-right">
        <h2 class="abr-right__title">
            <?php echo $title ?>
        </h2>
        <?php if ($subtitle): ?>
            <h4 class="abr-right__subtitle">
                <?php echo $subtitle ?>
            </h4>
        <?php endif; ?>
        <p>
            <?php echo $content ?>
        </p>
        <?php if ($button_text): ?>
            <?php
            get_template_part('template-parts/button/button', null, array('buttonText' => $button_text, 'buttonLink' => $button_link, 'imgHidden' => false));
            ?>
        <?php endif; ?>
    </div>
</div>