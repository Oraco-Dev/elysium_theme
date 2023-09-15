<?php
$link = $args['link'];
$title = $args['title'];
$image_url = $args['imageUrl'];
$content = $args['content'];
$date = $args['date'];

$max_length = 300;

if (strlen($content) > $max_length) {
    $trimmed_text = substr($content, 0, $max_length) . "...";
} else {
    $trimmed_text = $content;
}


?>

<div class="si__posts-right-main">
    <img src="<?php echo esc_url($image_url) ?>" class="si__posts-right-main-img" />
    <div class="si__posts-right-main-meta">
        <h3 class="si__posts-right-main-meta-title">
            <?php echo $title ?>

        </h3>
        <p class="si__posts-right-main-meta-date">
            <?php echo $date ?>
        </p>
        <p class="si__posts-right-main-meta-content">
            <?php echo $trimmed_text ?>
        </p>
        <a href="<?php echo $link ?>" target="_blank" rel="noreferrer">
            <button>Read More
                <span>
                    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Arrow-1.png"
                        class="si__posts-btn-img" />
                </span>
            </button>
        </a>
    </div>

</div>