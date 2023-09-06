<?php get_header();

/*
Template Name: Personal Services Page
*/

// post content
$postID = get_the_ID();
$featured_image_url = get_the_post_thumbnail_url($postID, 'full');
$title = get_the_title($postID);
$content = get_the_content($postID);

// business services page content - CONTENT IN WP -> PAGES -> BUSINESS SERVICES
$pagePostID = 242;
$baTitle = get_field('business_services_-_ba_title', $pagePostID);
$baSubtitle = get_field('business_services_-_ba_subtitle', $pagePostID);
$baContent = get_field('business_services_-_ba_content', $pagePostID);
$baImage = get_field('business_services_-_ba_image', $pagePostID);
$baBtnText = get_field('business_services_-_ba_button_text', $pagePostID);
$baBtnLink = get_field('business_services_-_ba_button_link', $pagePostID);


$homepagePostID = 36;
// quick links box - CONTENT IN WP -> PAGES -> HOME
// icons
$quickLinkIconOne = get_field('quick_link_icon_one', $homepagePostID);
$quickLinkIconTwo = get_field('quick_link_icon_two', $homepagePostID);
$quickLinkIconThree = get_field('quick_link_icon_three', $homepagePostID);
// title
$quickLinkTitleOne = get_field('quick_link_title_one', $homepagePostID);
$quickLinkTitleTwo = get_field('quick_link_title_two', $homepagePostID);
$quickLinkTitleThree = get_field('quick_link_title_three', $homepagePostID);
// button text
$quickLinkButtonOne = get_field('quick_link_button_one', $homepagePostID);
$quickLinkButtonTwo = get_field('quick_link_button_two', $homepagePostID);
$quickLinkButtonThree = get_field('quick_link_button_three', $homepagePostID);
// link
$quickLinkOne = get_field('quick_link_one', $homepagePostID);
$quickLinkTwo = get_field('quick_link_two', $homepagePostID);
$quickLinkThree = get_field('quick_link_three', $homepagePostID);

// Query for Business Services
$business_services_query = new WP_Query(
    array(
        'post_type' => 'business_services',
        'posts_per_page' => -1,
        // -1 to retrieve all posts
    )
);

?>

<main class="personal-services">


    <section class="ps__banner">
        <div class="ps__banner-overlay"></div>

        <?php if ($featured_image_url): ?>
            <img src="<?php echo $featured_image_url ?>" alt="" class="ps__banner-img" />
        <?php else: ?>
            <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/nathan-dumlao-Wr3comVZJxU-unsplash-2-1-2-min-1.png"
                alt="" class="ps__banner-img" />
        <?php endif; ?>

        <div class="ps__banner-inner">
            <div class="container">
                <h4 class="ps__banner-inner-subtitle">Business Services</h4>
                <h1 class="ps__banner-inner-title">
                    <?php
                    if ($business_services_query->have_posts()) {
                        $index = 1;
                        while ($business_services_query->have_posts()) {
                            $business_services_query->the_post();

                            $title = get_the_title();

                            echo '<div class="tab" id="tab-' . $index . '-title">' . $title . '</div>';

                            $index++;
                        }
                        wp_reset_postdata(); // Reset the query
                    }
                    ?>
                </h1>
                <div class="dot">
                </div>
            </div>
        </div>
    </section>

    <section class="ps__tabs">
        <section class="container">
            <div class="ps__tab">
                <div class="ps__tab-left">
                    <?php
                    if ($business_services_query->have_posts()) {
                        $index = 1;
                        while ($business_services_query->have_posts()) {
                            $business_services_query->the_post();

                            $title = get_the_title();
                            $link = get_permalink();
                            $link_icon = get_field('link_icon');



                            // Output the title and link_icone
                            get_template_part('template-parts/services-card', null, array('title' => $title, 'link' => '', 'linkIcon' => $link_icon, 'isTab' => true, 'index' => $index));

                            $index++;
                        }
                        wp_reset_postdata(); // Reset the query
                    }
                    ?>
                </div>
                <div class="ps__tab-right">
                    <?php
                    if ($business_services_query->have_posts()) {

                        $index = 1;

                        while ($business_services_query->have_posts()) {
                            $business_services_query->the_post();

                            $content = get_the_content();

                            echo '<div class="tab" id="tab-' . $index . '-content">' . $content . '</div>';

                            $index++;
                        }
                        wp_reset_postdata(); // Reset the query
                    }
                    ?>
                </div>
            </div>
        </section>
    </section>


    <section class="ps__boring">
        <div class="container">
            <div class="ps__boring-intro">
                <h2>Not just your boring accountants</h2>
                <div class="dot">
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <?php
        get_template_part('template-parts/alt-box/alt-box-right', null, array('title' => $baTitle, 'imageUrl' => $baImage, 'content' => $baContent, 'buttonText' => $baBtnText, 'buttonLink' => $baBtnLink, 'subtitle' => $baSubtitle));
        ?>
    </div>

    <?php
    get_template_part('template-parts/quick-links-box', null, array('iconOne' => $quickLinkIconOne, 'iconTwo' => $quickLinkIconTwo, 'iconThree' => $quickLinkIconThree, 'titleOne' => $quickLinkTitleOne, 'titleTwo' => $quickLinkTitleTwo, 'titleThree' => $quickLinkTitleThree, 'buttonOne' => $quickLinkButtonOne, 'buttonTwo' => $quickLinkButtonTwo, 'buttonThree' => $quickLinkButtonThree, 'linkOne' => $quickLinkOne, 'linkTwo' => $quickLinkTwo, 'linkThree' => $quickLinkThree, 'contentOne' => "", 'contentTwo' => "", 'contentThree' => ""));
    ?>

    <?php
    get_template_part('template-parts/call-to-action', null, array());
    ?>

    <?php
    get_template_part('template-parts/social-reel', null, array());
    ?>

</main>


<?php get_footer(); ?>