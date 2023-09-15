<?php

$postID = 165;

// finalduction section
$introtitle = get_field('introduction_box_title', $postID);
$introsubtitle = get_field('introduction_box_sub_title', $postID);
$introcontent = get_field('introduction_box_content', $postID);
$introimage = get_field('introduction_box_image', $postID);

// final alt box section
$secondarytitle = get_field('secondary_box_title', $postID);
$secondarysubtitle = get_field('secondary_box_sub_title', $postID);
$secondarycontent = get_field('secondary_box_content', $postID);
$secondaryimage = get_field('secondary_box_image', $postID);

// final alt box section
$finaltitle = get_field('final_box_title', $postID);
$finalsubtitle = get_field('final_box_sub_title', $postID);
$finalcontent = get_field('final_box_content', $postID);
$finalimage = get_field('final_box_image', $postID);

// quick links
$quickLinkIconOne = get_field('quick_link_icon_one', $postID);
$quickLinkIconTwo = get_field('quick_link_icon_two', $postID);
$quickLinkIconThree = get_field('quick_link_icon_three', $postID);
$quickLinkTitleOne = get_field('quick_link_title_one', $postID);
$quickLinkTitleTwo = get_field('quick_link_title_two', $postID);
$quickLinkTitleThree = get_field('quick_link_title_three', $postID);
$quickLinkContentOne = get_field('quick_link_content_one', $postID);
$quickLinkContentTwo = get_field('quick_link_content_two', $postID);
$quickLinkContentThree = get_field('quick_link_content_three', $postID);



// partners team
$partners_team_query = new WP_Query(
    array(
        'post_type' => 'staff_members',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                // Assuming 'category' is the taxonomy name for your categories
                'field' => 'slug',
                // You can also use 'id' or 'name' here
                'terms' => 'partners-team',
                // Slug of the category you want to filter by
            ),
        ),
        'orderby' => 'title',
        // Sort by post title
        'order' => 'ASC',
        // Sort in ascending order (A to Z)
    )
);

// admin team
$admin_team_query = new WP_Query(
    array(
        'post_type' => 'staff_members',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                // Assuming 'category' is the taxonomy name for your categories
                'field' => 'slug',
                // You can also use 'id' or 'name' here
                'terms' => 'admin-team',
                // Slug of the category you want to filter by
            ),
        ),
        'orderby' => 'title',
        // Sort by post title
        'order' => 'ASC',
        // Sort in ascending order (A to Z)
    )
);

// bookkeeping team
$bookkeeping_team_query = new WP_Query(
    array(
        'post_type' => 'staff_members',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                // Assuming 'category' is the taxonomy name for your categories
                'field' => 'slug',
                // You can also use 'id' or 'name' here
                'terms' => 'accounting-bookkeeping-team',
                // Slug of the category you want to filter by
            ),
        ),
        'orderby' => 'title',
        // Sort by post title
        'order' => 'ASC',
        // Sort in ascending order (A to Z)
    )
);

/*
Template Name: About Archive Page
*/

get_header();

?>

<section class="about__banner">
    <div class="about__banner-overlay"></div>
    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/shutterstock_1887386134-2-2.png" alt=""
        class="about__banner-img" />


    <div class="about__banner-inner">
        <div class="container">
            <h5>About us</h5>
            <h1 class="fp__banner-inner-title">Creating solutions for your future</h1>
            <div class="dot"></div>
        </div>
    </div>


</section>

<section class="about-box">
    <div class="container">
        <div class="about-box__outer">
            <div class="about-box__one">
                <?php
                get_template_part('template-parts/alt-box/alt-box-right', null, array('title' => $introtitle, 'subtitle' => $introsubtitle, 'imageUrl' => $introimage, 'content' => $introcontent, 'buttonLink' => '', 'buttonText' => ''));
                ?>
            </div>
            <div class="about-box__two">
                <?php
                get_template_part('template-parts/alt-box/alt-box-left', null, array('title' => $secondarytitle, 'subtitle' => '', 'imageUrl' => $secondaryimage, 'content' => $secondarycontent, 'buttonLink' => '', 'buttonText' => ''));
                ?>
            </div>
            <div class="about-box__three">
                <?php
                get_template_part('template-parts/alt-box/alt-box-right', null, array('title' => $finaltitle, 'subtitle' => '', 'imageUrl' => $finalimage, 'content' => $finalcontent, 'buttonLink' => '', 'buttonText' => ''));
                ?>
            </div>
        </div>
    </div>
</section>

<section class="about__team">
    <div class="container">
        <div class="about__team-intro">
            <h2>Meet our team</h2>
            <div class="dot">
            </div>
        </div>
    </div>
</section>

<section class="about__people">
    <div class="container">
        <h3 class="about__people-title">Partners</h3>
        <div class="about__people-partners">
            <?php
            if ($partners_team_query->have_posts()) {
                while ($partners_team_query->have_posts()) {

                    $partners_team_query->the_post();
                    $title = get_the_title();
                    $image_url = get_the_post_thumbnail_url(get_the_ID());


                    get_template_part('template-parts/team-card', null, array('name' => $title, 'image' => $image_url));
                }
                wp_reset_postdata(); // Reset the query
            }
            ?>
        </div>

        <h3 class="about__people-title">Admin Team</h3>
        <div class="about__people-admin">
            <?php
            if ($admin_team_query->have_posts()) {
                while ($admin_team_query->have_posts()) {

                    $admin_team_query->the_post();
                    $title = get_the_title();
                    $image_url = get_the_post_thumbnail_url(get_the_ID());


                    get_template_part('template-parts/team-card', null, array('name' => $title, 'image' => $image_url));
                }
                wp_reset_postdata(); // Reset the query
            }
            ?>
        </div>
        <h3 class="about__people-title">Accounting/Bookkeeping Team</h3>
        <div class="about__people-bookkeeping">
            <?php
            if ($bookkeeping_team_query->have_posts()) {
                while ($bookkeeping_team_query->have_posts()) {

                    $bookkeeping_team_query->the_post();
                    $title = get_the_title();
                    $image_url = get_the_post_thumbnail_url(get_the_ID());


                    get_template_part('template-parts/team-card', null, array('name' => $title, 'image' => $image_url));
                }
                wp_reset_postdata(); // Reset the query
            }
            ?>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/quick-links-box', null, array('iconOne' => $quickLinkIconOne, 'iconTwo' => $quickLinkIconTwo, 'iconThree' => $quickLinkIconThree, 'titleOne' => $quickLinkTitleOne, 'titleTwo' => $quickLinkTitleTwo, 'titleThree' => $quickLinkTitleThree, 'buttonOne' => '', 'buttonTwo' => '', 'buttonThree' => '', 'linkOne' => '', 'linkTwo' => '', 'linkThree' => '', 'contentOne' => $quickLinkContentOne, 'contentTwo' => $quickLinkContentTwo, 'contentThree' => $quickLinkContentThree));
?>

<?php
get_template_part('template-parts/call-to-action', null, array());
?>

<?php
get_template_part('template-parts/social-reel', null, array());
?>


<?php get_footer() ?>