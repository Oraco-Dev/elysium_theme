<?php
$categoryName = $args['categoryName'];
$categorySlug = $args['categorySlug'];
$categoryLink = $args['categoryLink'];
$randomHexCode = $args['randomHexCode'];

?>

<a data-border="<?php echo $randomHexCode ?>" data-category="<?php echo $categoryName ?>" class="category-badge">

    <?php echo $categoryName ?>

</a>