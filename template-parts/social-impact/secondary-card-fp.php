<?php
$link = $args['link'];
$title = $args['title'];
$image_url = $args['imageUrl'];
$index = $args['index'];

?>


<a href="<?php echo $link ?>" target="_blank" rel="noreferrer" class="fp__impact-card">
    <img src="<?php echo esc_url($image_url) ?>" class="fp__impact-card-img" />
    <div class="fp__impact-card-meta index-<?php echo $index ?>">
        <h5>
            <?php echo $title ?>

        </h5>
        <?php if ($index == 0): ?>
            <button>Read More <span><img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Arrow-1.png"
                        class="fp__impact-blog-btn-img" /></span></button>
        <?php else: ?>
            <button>Read More <span><img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/Arrow.png"
                        class="fp__impact-blog-btn-img" /></span></button>
        <?php endif; ?>

    </div>
</a>