<?php
$link = $args['link'];
$title = $args['title'];
$image_url = $args['imageUrl'];
$content = $args['content'];

$max_length = 200;

if (strlen($content) > $max_length) {
    $trimmed_text = substr($content, 0, $max_length) . "...";
} else {
    $trimmed_text = $content;
}

?>


<div class="fp__impact-blog-left-main">
    <a href="<?php echo $link ?>" class="fp__impact-blog-left-main-a"></a>
    <img src="<?php echo esc_url($image_url) ?>" class="fp__impact-blog-left-main-img" />
    <div class="fp__impact-blog-left-main-meta">
        <h5>
            <?php echo $title ?>
        </h5>
        <p>
            <?php echo $trimmed_text ?>
        </p>
        <button>Read More <span><img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Arrow-1.png"
                    class="fp__impact-blog-btn-img" /></span></button>
    </div>
</div>