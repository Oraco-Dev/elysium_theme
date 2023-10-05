<?php

$case_studies_query = new WP_Query(
    array(
        'post_type' => 'case_studies',
        'posts_per_page' => -1,
        // -1 to retrieve all posts
    )
);

get_header();

?>

<section class="cs__intro">
    <div class="container">
        <div class="cs__intro-title">
            <h5>Case Studies</h5>
            <h2>A sneak peak into how we have helped some of our clients</h2>
            <div class="dot">
            </div>
        </div>
    </div>
</section>

<section class="cs__container">
    <div class="container">
        <?php
        if ($case_studies_query->have_posts()) {
            $counter = 0; // Initialize a counter variable
        
            while ($case_studies_query->have_posts()) {
                $case_studies_query->the_post();

                $title = get_the_title();
                $image_url = get_the_post_thumbnail_url(get_the_ID());
                $content = get_the_content();
                $business_content = get_field('business_description_-_content', get_the_ID());
                $goals_content = get_field('goals_-_content', get_the_ID());
                $outcome_content = get_field('outcome_-_content', get_the_ID());


                // Check if the counter is even or odd
                if ($counter % 2 == 0) {
                    // Counter is even, load a template for even posts
                    get_template_part('template-parts/alt-box/alt-box-right', null, array('title' => $title, 'buttonLink' => '', 'imageUrl' => $image_url, 'buttonText' => '', 'subtitle' => '', 'content' => $content, 'isModalBtn' => false, 'isCaseStudy' => true, 'businessContent' => $business_content, 'goalsContent' => $goals_content, 'outcomeContent' => $outcome_content));
                } else {
                    // Counter is odd, load a template for odd posts
                    get_template_part('template-parts/alt-box/alt-box-left', null, array('title' => $title, 'buttonLink' => '', 'imageUrl' => $image_url, 'buttonText' => '', 'subtitle' => '', 'content' => $content));
                }

                $counter++; // Increment the counter
            }
            wp_reset_postdata(); // Reset the query
        }
        ?>
    </div>
</section>

<?php
get_template_part('template-parts/call-to-action', null, array());
?>

<?php
get_template_part('template-parts/social-reel', null, array());
?>

<?php get_footer() ?>