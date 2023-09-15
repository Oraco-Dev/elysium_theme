<!-- WORDPRESS TEMPLATE FOR FRONT PAGE -->
<?php get_header();

// homepage post ID
$postID = 36;

// featured image URL
$featured_image_url = get_the_post_thumbnail_url($postID, 'full');

// free assesment section
$freeAssessmentContent = get_field('free_assessment_content', $postID);
$freeAssessmentTitle = get_field('free_assessment_title', $postID);
$freeAssessmentImage = get_field('free_assessment_image', $postID);
$freeAssessmentButtonLink = get_field('free_assessment_button_link', $postID);
$freeAssessmentButtonText = get_field('free_assessment_button_text', $postID);

// quick links box
// icons
$quickLinkIconOne = get_field('quick_link_icon_one', $postID);
$quickLinkIconTwo = get_field('quick_link_icon_two', $postID);
$quickLinkIconThree = get_field('quick_link_icon_three', $postID);
// title
$quickLinkTitleOne = get_field('quick_link_title_one', $postID);
$quickLinkTitleTwo = get_field('quick_link_title_two', $postID);
$quickLinkTitleThree = get_field('quick_link_title_three', $postID);
// button text
$quickLinkButtonOne = get_field('quick_link_button_one', $postID);
$quickLinkButtonTwo = get_field('quick_link_button_two', $postID);
$quickLinkButtonThree = get_field('quick_link_button_three', $postID);
// link
$quickLinkOne = get_field('quick_link_one', $postID);
$quickLinkTwo = get_field('quick_link_two', $postID);
$quickLinkThree = get_field('quick_link_three', $postID);



// Query for Business Services
$business_services_query = new WP_Query(
    array(
        'post_type' => 'business_services',
        'posts_per_page' => -1,
        // -1 to retrieve all posts
    )
);

// Query for Personal Services
$personal_services_query = new WP_Query(
    array(
        'post_type' => 'personal_services',
        'posts_per_page' => -1,
        // -1 to retrieve all posts
    )
);


// Query for Social Impact - Blog 1 ONLY
$social_impact_main_query = new WP_Query(
    array(
        'post_type' => 'social_impact',
        'posts_per_page' => 1,
        // -1 to retrieve all posts
    )
);

// Query for Social Impact - Blog 1 ONLY
$social_impact_secondary_query = new WP_Query(
    array(
        'post_type' => 'social_impact',
        'posts_per_page' => 2,
        'post__not_in' => array($social_impact_main_query->posts[0]->ID),
        // -1 to retrieve all posts
    )
);

$news_posts_query = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    )
)

    ?>

<main class="front-page">
    <section class="fp__banner">
        <div class="fp__banner-overlay"></div>
        <img src="<?php echo $featured_image_url ?>" alt="" class="fp__banner-img" />


        <div class="fp__banner-inner">
            <div class="container">
                <div class="fp__banner-inner-left">
                    <h1 class="fp__banner-inner-title">Creating solutions for your future</h1>
                </div>
                <div class="fp__banner-inner-right">
                    <div class="fp__banner-inner-right-form">
                        <h4>Book your free assesment</h4>
                        <?php echo do_shortcode('[contact-form-7 id="38c0bfc" title="Home"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fp__help">
        <div class="container">
            <div class="fp__help-intro">
                <h2>How We <br />Can Help You</h2>
                <div class="dot">
                </div>
            </div>
        </div>
    </section>


    <section class="fp__business">
        <!-- fp__business divided into 2 divs so we can apply bg at 50% height -->
        <div class="fp__business-top"></div>
        <div class="fp__business-bottom"></div>
        <div class="container">
            <div class="fp__business-card">
                <div class="fp__business-card-left">
                    <h3>Business Services</h3>
                    <p>Here is a list of services we are currently providing to our clients</o>
                    <div class="fp-grid">
                        <!-- displays all posts from business services custom post type -->
                        <?php
                        if ($business_services_query->have_posts()) {
                            while ($business_services_query->have_posts()) {
                                $business_services_query->the_post();

                                $title = get_the_title();
                                $link = get_permalink();
                                $link_icon = get_field('link_icon');

                                // Output the title and link_icon
                                get_template_part('template-parts/services-card', null, array('title' => $title, 'link' => $link, 'linkIcon' => $link_icon, 'isTab' => false, 'index' => ''));
                            }
                            wp_reset_postdata(); // Reset the query
                        }
                        ?>
                    </div>
                </div>
                <div class="fp__business-card-right">
                    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/shutterstock_1887386134-2-1.png"
                        alt="" class="fp__business-card-right-img" />
                </div>
            </div>
        </div>
    </section>

    <section class="fp__personal">
        <div class="container">
            <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/EFS_DOt-Backgrounds-02.png"
                class="fp__personal-card-img" />
            <div class="fp__personal-card">
                <div class="fp__personal-card-left">
                    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/AdobeStock_131211901_Preview-1.png"
                        alt="" class="fp__personal-card-left-img" />
                </div>
                <div class="fp__personal-card-right">
                    <h3>Personal Services</h3>
                    <p>Here is a list of services we are currently providing to our clients</o>
                    <div class="fp-grid">
                        <!-- displays all posts from personal services custom post type -->
                        <?php
                        if ($personal_services_query->have_posts()) {
                            while ($personal_services_query->have_posts()) {
                                $personal_services_query->the_post();

                                $title = get_the_title();
                                $link = get_permalink();
                                $link_icon = get_field('link_icon');

                                // Output the title and link_icon
                                get_template_part('template-parts/services-card', null, array('title' => $title, 'link' => $link, 'linkIcon' => $link_icon, 'isTab' => false, 'index' => ''));
                            }
                            wp_reset_postdata(); // Reset the query
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fp__team">
        <div class="container">
            <div class="fp__team-info">
                <div class="fp__team-info-left">
                    <h2>The Elysium Team</h2>
                    <p>Elysium is a full service accountin and financial services firm with offices in Scoresby, Malvern
                        and Monbulk. With over 25 years of experience, we are ready to help you.</p>
                    <div class="fp__team-info-cta">
                        <a href=""><button class="fp__team-info-cta-btn">Meet our Team</button></a>
                        <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Vector-1.png"
                            class="fp__team-info-cta-icon" />
                    </div>
                </div>
                <div class="fp__team-info-right">
                    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Artboard-1EFS_.png"
                        class="fp__team-info-right-imgone" />
                    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/EFS_EFS_-1.png"
                        class="fp__team-info-right-imgtwo" />

                </div>
            </div>
        </div>
    </section>

    <section class="fp__review">
        <div class="container">
            <div class="fp__review-intro">
                <h2>Why our clients choose us</h2>
                <div class="dot">
                </div>
            </div>
            <div class="fp__review-cards">
                <?php do_action('wprev_pro_plugin_action', 1); ?>
                <!-- ADD SHORTCODE HERE FOR GOOGLE REVIEWS -->
            </div>
        </div>
    </section>

    <section class="fp__impact">
        <div class="container">
            <div class="fp__impact-intro">
                <h2>Social Impact</h2>
                <div class="dot">
                </div>
            </div>
            <div class="fp__impact-blog">
                <div class="fp__impact-blog-left">
                    <?php
                    if ($social_impact_main_query->have_posts()) {
                        while ($social_impact_main_query->have_posts()) {
                            $social_impact_main_query->the_post();

                            $title = get_the_title();
                            $link = get_permalink();
                            $image_url = get_the_post_thumbnail_url(get_the_ID());
                            $content = get_the_content();

                            get_template_part('template-parts/social-impact/main-card', null, array('title' => $title, 'link' => $link, 'imageUrl' => $image_url, 'content' => $content));
                        }
                        wp_reset_postdata(); // Reset the query
                    }
                    ?>
                </div>
                <div class="fp__impact-blog-right">

                    <?php
                    if ($social_impact_secondary_query->have_posts()) {
                        while ($social_impact_secondary_query->have_posts()) {
                            $social_impact_secondary_query->the_post();

                            $title = get_the_title();
                            $link = get_permalink();
                            $image_url = get_the_post_thumbnail_url(get_the_ID());


                            get_template_part('template-parts/social-impact/secondary-card-fp', null, array('title' => $title, 'link' => $link, 'imageUrl' => $image_url));
                        }
                        wp_reset_postdata(); // Reset the query
                    }
                    ?>
                </div>
            </div>
            <div class="fp__impact-more">
                <?php
                get_template_part('template-parts/button/button', null, array('buttonText' => 'How we are Helping', 'buttonLink' => '', 'imgHidden' => false));
                ?>
            </div>
        </div>
    </section>

    <section class="fp__news">
        <div class="container">
            <div class="fp__news-intro">
                <h2>News, Tips and <br /> Latest Articles</h2>
                <div class="dot"></div>
            </div>
            <div class="fp__news-blog">
                <?php
                if ($news_posts_query->have_posts()) {
                    while ($news_posts_query->have_posts()) {
                        $news_posts_query->the_post();

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



                        get_template_part('template-parts/blog/blog-card', null, array('title' => $title, 'link' => $link, 'imageUrl' => $image_url, 'content' => $content, 'date' => $date, 'allCategories' => $categoriesArray, 'isHome' => true));
                    }

                    wp_reset_postdata(); // Reset the query
                }
                ?>
            </div>
            <div class="fp__news-btn">
                <a href="https://elysiumafs.previewsite.com.au/blogs" target="_blank" class="fp__news-blog-btn">View all
                    Latest News & Articles <img
                        src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Arrow-1.png"
                        class="blog-card__meta-img" /></a>
            </div>

    </section>

    <section class="fp__assessment">
        <div class="container">
            <?php
            get_template_part('template-parts/alt-box/alt-box-right', null, array('title' => $freeAssessmentTitle, 'imageUrl' => $freeAssessmentImage, 'content' => $freeAssessmentContent, 'buttonText' => $freeAssessmentButtonText, 'buttonLink' => '', 'subtitle' => '', 'isModalBtn' => true));
            ?>
        </div>
    </section>

    <?php
    get_template_part('template-parts/quick-links-box', null, array('iconOne' => $quickLinkIconOne, 'iconTwo' => $quickLinkIconTwo, 'iconThree' => $quickLinkIconThree, 'titleOne' => $quickLinkTitleOne, 'titleTwo' => $quickLinkTitleTwo, 'titleThree' => $quickLinkTitleThree, 'buttonOne' => $quickLinkButtonOne, 'buttonTwo' => $quickLinkButtonTwo, 'buttonThree' => $quickLinkButtonThree, 'linkOne' => $quickLinkOne, 'linkTwo' => $quickLinkTwo, 'linkThree' => $quickLinkThree, 'contentOne' => "", 'contentTwo' => "", 'contentThree' => ""));
    ?>

    <?php
    get_template_part('template-parts/social-reel', null, array());
    ?>

</main>



<?php get_footer(); ?>