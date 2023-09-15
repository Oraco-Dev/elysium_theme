<?php
$link = $args['link'];
$title = $args['title'];
$image_url = $args['imageUrl'];


?>


<a href="<?php echo $link ?>" target="_blank" rel="noreferrer" class="fp__impact-card">
    <img src="<?php echo esc_url($image_url) ?>" class="fp__impact-card-img" />
    <div class="fp__impact-card-meta">
        <h5>
            <?php echo $title ?>

        </h5>
        <button>Read More <span><img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Arrow-1.png"
                    class="fp__impact-blog-btn-img" /></span></button>
    </div>
</a>