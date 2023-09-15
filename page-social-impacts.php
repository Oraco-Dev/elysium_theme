<?php

/*
Template Name: Social Impact
*/

$postID = get_the_ID();
$featured_image_url = get_the_post_thumbnail_url($postID, 'full');


// Query for Social Impact Posts
$social_impact_query = new WP_Query(
    array(
        'post_type' => 'social_impact',
        'posts_per_page' => -1,
        // -1 to retrieve all posts
    )
);



get_header();

?>

<section class="si__banner">
    <div class="container">
        <div class="si__banner-inner">
            <div class="si__banner-inner__left">
                <h5>About us</h5>
                <h1 class="si__banner-inner-title">Elysium Social Impact</h1>
                <div class="dot"></div>
            </div>
            <div class="si__banner-inner__right">
                <img src="<?php echo $featured_image_url ?>" />
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="si__posts">
        <?php
        if ($social_impact_query->have_posts()) {

            while ($social_impact_query->have_posts()) {
                $social_impact_query->the_post();

                $title = get_the_title();
                $link = get_permalink();
                $image_url = get_the_post_thumbnail_url(get_the_ID());
                $content = get_the_content();
                $date = get_the_date();


                get_template_part('template-parts/social-impact/secondary-card-si', null, array('title' => $title, 'link' => $link, 'imageUrl' => $image_url, 'content' => $content, 'date' => $date));
            }
            wp_reset_postdata(); // Reset the query
        }
        ?>
    </div>
</div>

<?php
get_template_part('template-parts/call-to-action', null, array());
?>


<?php
get_template_part('template-parts/social-reel', null, array());
?>


<?php get_footer() ?>