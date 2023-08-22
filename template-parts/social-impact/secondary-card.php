<?php
$link = $args['link'];
$title = $args['title'];
$image_url = $args['imageUrl'];
$content = $args['content'];

?>
<div class="fp__impact-blog-right-main">
    <a href="<?php echo $link ?>" target="_blank" rel="noreferrer"></a>
    <img src="<?php echo esc_url($image_url) ?>" class="fp__impact-blog-right-main-img" />
    <div class="fp__impact-blog-right-main-meta">
        <h5>
            <?php echo $title ?>
        </h5>
        <button>Read More <span><img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Arrow-1.png"
                    class="fp__impact-blog-btn-img" /></span></button>
    </div>

</div>