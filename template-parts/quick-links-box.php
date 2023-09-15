<?php

// CUSTOM FIELDS
// titles
$titleOne = $args['titleOne'];
$titleTwo = $args['titleTwo'];
$titleThree = $args['titleThree'];
// icons
$iconOne = $args['iconOne'];
$iconTwo = $args['iconTwo'];
$iconThree = $args['iconThree'];
// button text
$buttonOne = $args['buttonOne'];
$buttonTwo = $args['buttonTwo'];
$buttonThree = $args['buttonThree'];
// button links
$linkOne = $args['linkOne'];
$linkTwo = $args['linkTwo'];
$linkThree = $args['linkThree'];
// content
$contentOne = $args['contentOne'];
$contentTwo = $args['contentTwo'];
$contentThree = $args['contentThree'];

?>

<div class="ql">
    <div class="ql__container">
        <div class="ql__container-one">
            <img src="<?php echo $iconOne ?>" alt="Quick Link Icon" />
            <h4>
                <?php echo $titleOne ?>
            </h4>
            <?php if (!empty($buttonOne)): ?>
                <a href="<?php echo $linkOne ?>">
                    <?php echo $buttonOne ?>
                    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Icon-1.png" alt="Right Arrow" />
                </a>
            <?php endif; ?>
            <?php if ($contentOne): ?>
                <p class="ql__content">
                    <?php echo $contentOne ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="ql__container-two">
            <img src="<?php echo $iconTwo ?>" alt="Quick Link Icon" />
            <h4>
                <?php echo $titleTwo ?>
            </h4>
            <?php if ($buttonTwo): ?>
                <a href="<?php echo $linkTwo ?>">
                    <?php echo $buttonTwo ?>
                    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Icon-1.png" alt="Right Arrow" />
                </a>
            <?php endif; ?>
            <?php if ($contentTwo): ?>
                <p class="ql__content">
                    <?php echo $contentTwo ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="ql__container-three">
            <img src="<?php echo $iconThree ?>" alt="Quick Link Icon" />
            <h4>
                <?php echo $titleThree ?>
            </h4>
            <?php if ($buttonThree): ?>
                <a href="<?php echo $linkThree ?>">
                    <?php echo $buttonThree ?>
                    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Icon-1.png" alt="Right Arrow" />
                </a>
            <?php endif; ?>
            <?php if ($contentThree): ?>
                <p>
                    <?php echo $contentThree ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>