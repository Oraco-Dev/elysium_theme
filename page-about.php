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



/*
Template Name: About Archive Page
*/

get_header();

?>

<section class="about__banner">
    <div class="about__banner-overlay"></div>
    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/towfiqu-barbhuiya-JhevWHCbVyw-unsplash-1-min-2-scaled.jpg"
        alt="" class="about__banner-img" />


    <div class="about__banner-inner">
        <div class="container">
            <h4>About us</h4>
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


<?php get_footer() ?>