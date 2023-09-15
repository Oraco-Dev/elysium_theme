<?php

/*
Template Name: Single Blog Page
*/

$postID = get_the_ID();

// Post Fields
$featured_image_url = get_the_post_thumbnail_url($postID, 'full');
$title = get_the_title($postID);
$authorID = get_post_field('post_author', $postID);
$author = get_the_author_meta('display_name', $authorID);
$authorAvatar = get_avatar($authorID);
$date = get_post_field('post_date', $postID);
$formattedDate = date('d/m/y', strtotime($date));
$content = get_the_content($postID);
$categories = get_the_category(); // Get the current post's categories
// Extract category IDs and remove duplicates
$category_ids = array_unique(wp_list_pluck($categories, 'term_id'));
$category_ids[] = $postID;

$recommendedPosts = new WP_Query(
    array(
        'post__not_in' => array($postID),
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    )
);

// Next and previous blog links
$previous_post_link = get_previous_post(true);
$next_post_link = get_next_post(true);
$previous_post_url = get_permalink($previous_post_link);
$next_post_url = get_permalink($next_post_link);

get_header();

?>

<section class="single">
    <div class="container">

        <div class="single-intro">
            <a href="" class="single-intro__crumb">
                <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Icon-2.png" alt="Back Arrow" />
                <h5>Back to social impact</h5>
            </a>
            <h2 class="single-intro__title">
                <?php echo $title ?>
            </h2>
            <span class="single-intro__date">
                <?php echo $formattedDate ?>
            </span>
            <img src="<?php echo $featured_image_url ?>" />
        </div>
        <div class="single-content">
            <div class="single-content__text">
                <p>
                    <?php echo $content ?>
                </p>
            </div>
            <div class="single-content__cta">
                <h5>Want advice from an expert?</h5>
                <?php
                get_template_part('template-parts/button/modalButton', null, array('buttonText' => 'Book Your Free Assessment', 'buttonLink' => '', 'imgHidden' => false));
                ?>
            </div>
        </div>
</section>

<section class="single-more">
    <div class="container">
        <div class="single-more__intro">
            <h3>Read More</h3>
        </div>
        <div class="single-more__blogs">
            <?php

            if ($recommendedPosts->have_posts()) {
                while ($recommendedPosts->have_posts()) {
                    $recommendedPosts->the_post();

                    $post_id = get_the_ID();
                    $date = get_the_date();
                    $title = get_the_title();
                    $link = get_permalink();
                    $image_url = get_the_post_thumbnail_url(get_the_ID());
                    $categories = get_the_category($post_id);


                    // Create an array to store category names
                    $categoryNames = array();

                    // Loops over array and adds categories to array.
                    if ($categories) {
                        foreach ($categories as $category) {
                            $categoryNames[] = $category->name;
                        }
                    }

                    // Converts array to json
                    $categoriesArray = json_encode($categoryNames);



                    get_template_part('template-parts/blog/blog-card', null, array('title' => $title, 'link' => $link, 'imageUrl' => $image_url, 'content' => $content, 'date' => $date, 'allCategories' => $categoriesArray, 'isHome' => false));
                }

                wp_reset_postdata(); // Reset the query
            }
            ?>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/call-to-action', null, array());
?>

<?php
get_template_part('template-parts/social-reel', null, array());
?>

<?php
get_footer();
?>