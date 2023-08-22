<?php

/*
Template Name: Blogs Archive Page
*/

get_header();

include_once 'php/custom-functions.php';

// GET POST CATEGORIES
$categories = get_categories();

$allPosts = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC'
);

// ALL POSTS QUERY
$allPostsQuery = new WP_Query($allPosts);

?>

<section class="blog-filter">
    <div class="container">
        <div class="blog-filter__inner">
            <div class="blog-filter__badges">
                <div class="blog-filter__badges-title">
                    <h4>Find helpful finance articles and tips</h4>
                    <div class="dot">
                    </div>
                </div>
                <div class="blog-filter__badges-badge">
                    <?php
                    foreach ($categories as $category) {
                        $categoryName = $category->name;
                        $categorySlug = $category->slug;
                        $categoryLink = get_category_link($category->cat_ID);
                        $randomIndex = generateRandomIndex($hexCodes, $usedIndices);

                        get_template_part('template-parts/blog/category-badge', null, array('categoryName' => $categoryName, 'categorySlug' => $categorySlug, 'categoryLink' => $categoryLink, 'randomHexCode' => $randomIndex));
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <div class="blog__inner">
            <div class="blog__row">
                <?php
                if ($allPostsQuery->have_posts()) {
                    while ($allPostsQuery->have_posts()) {
                        $allPostsQuery->the_post();
                        $post_id = get_the_ID();
                        $link = get_permalink();
                        $title = get_the_title();
                        $excerpt = get_the_excerpt();
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID());
                        // Retrieve the categories assigned to the current post
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

                        get_template_part('template-parts/blog/blog-card', null, array('link' => $link, 'title' => $title, 'imageUrl' => $featured_image_url, 'allCategories' => $categoriesArray, 'firstCategory' => '', 'isHome' => false));
                    }
                } else {
                    "<h4> Oops, there doesn't seem to be any blogs right now.";
                }
                // Restore original post data
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/call-to-action', null, array('' => ''));
?>

<?php get_footer() ?>