<?php
$date = $args['date'];
$is_home = $args['isHome'];
$link = $args['link'];
$title = $args['title'];
$image_url = $args['imageUrl'];
$all_categories = $args['allCategories'];
$all_categories_json = json_decode($all_categories);

$blogCardClasses = 'blog-card';
if (!$is_home) {
    $blogCardClasses .= ' not-home';
}

?>

<a href="<?php echo $link ?>" target="_blank" rel="noreferrer" class="<?php echo $blogCardClasses ?>"
    data-category='<?php echo $all_categories ?>'>
    <div class="blog-card__categories">
        <?php
        foreach ($all_categories_json as $category) {
            echo '<div class="blog-card__category"><span>' . $category . '</span></div>';
        }
        ?>
    </div>
    <div class="blog-card__image-container">
        <img src="<?php echo esc_url($image_url) ?>" class="blog-card__img" />
        <div class="blog-card__overlay"></div> <!-- Overlay for the image -->
    </div>
    <div class="blog-card__meta">
        <h5>
            <?php echo $date ?>
        </h5>
        <h4>
            <?php echo $title ?>
        </h4>
        <button>Read More <span><img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Arrow-1.png"
                    class="blog-card__meta-img" /></span></button>
    </div>
</a>