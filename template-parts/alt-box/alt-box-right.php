<?php
$title = $args['title'];
$subtitle = $args['subtitle'];
$content = $args['content'];
$image_url = $args['imageUrl'];
$button_text = $args['buttonText'];
$button_link = $args['buttonLink'];
$modal_button = $args['isModalBtn'];

// case study
$isCaseStudy = $args['isCaseStudy'];
$businessContent = $args['businessContent'];
$goalsContent = $args['goalsContent'];
$outcomeContent = $args['outcomeContent'];

?>

<div class="abr">
    <div class="abr-left" style="background-image: url(<?php echo $image_url ?>)">
        <?php if ($isCaseStudy): ?>
            <div class="abr-left__snippet">
                <p>
                    <?php echo $goalsContent ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
    <div class="abr-right">
        <h3 class="abr-right__title">
            <?php echo $title ?>
        </h3>
        <?php if ($subtitle): ?>
            <h4 class="abr-right__subtitle">
                <?php echo $subtitle ?>
            </h4>
        <?php endif; ?>
        <?php if ($isCaseStudy): ?>
            <div class="abr-right__study">
                <h4 class="abr-right__subtitle">
                    Business Description
                </h4>
                <p>
                    <?php echo $businessContent ?>
                </p>
            </div>
            <div class="abr-right__study">
                <h4 class="abr-right__subtitle">
                    Goals
                </h4>
                <p>
                    <?php echo $goalsContent ?>
                </p>
            </div>
            <div class="abr-right__study">
                <h4 class="abr-right__subtitle">
                    Outcome
                </h4>
                <p>
                    <?php echo $outcomeContent ?>
                </p>
            </div>
        <?php endif; ?>
        <?php if (!$isCaseStudy): ?>
            <p>
                <?php echo $content ?>
            </p>
        <?php endif; ?>
        <?php if (!$modal_button && $button_text): ?>
            <?php
            get_template_part('template-parts/button/button', null, array('buttonText' => $button_text, 'buttonLink' => $button_link, 'imgHidden' => false));
            ?>
        <?php endif; ?>
        <?php if ($modal_button): ?>
            <?php
            get_template_part('template-parts/button/modalButton', null, array('buttonText' => 'Book Your Free Assessment', 'buttonLink' => '', 'imgHidden' => false));
            ?>
        <?php endif; ?>
    </div>
</div>