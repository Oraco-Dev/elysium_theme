<!-- WORDPRESS TEMPLATE FOR SINGLE POSTS -->
<?php

get_header();

$postID = get_the_ID();
// Custom Fields
$bannerimage = get_field('bannerimage', $postID);


// Post Fields
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

$recommendedPosts = array(
  'category__in' => $category_ids,
  'post__not_in' => array($postID),
  'posts_per_page' => 3,
  'orderby' => 'date',
  'order' => 'DESC'
);

$recommendedPostsQuery = new WP_Query($recommendedPosts);

// Next and previous blog links
$previous_post_link = get_previous_post(true);
$next_post_link = get_next_post(true);
$previous_post_url = get_permalink($previous_post_link);
$next_post_url = get_permalink($next_post_link);

?>
<main class="s-main">

  <section class="s-hero">
    <div class="container">
      <div class="s-hero__inner">
        <svg class="s-hero__blob" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <defs>
            <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
              <stop id="stop1" stop-color="rgba(147, 232, 211, 1)" offset="0%"></stop>
              <stop id="stop2" stop-color="rgba(162, 216, 225, 1)" offset="100%"></stop>
            </linearGradient>
          </defs>
          <path fill="url(#sw-gradient)" d="M29,-26.2C37.2,-20.8,43.2,-10.4,41.4,-1.8C39.6,6.8,30,13.6,21.8,21.8C13.6,29.9,6.8,39.3,-0.2,39.5C-7.2,39.7,-14.4,30.6,-21.9,22.5C-29.4,14.4,-37.1,7.2,-37.5,-0.3C-37.8,-7.9,-30.7,-15.7,-23.2,-21.1C-15.7,-26.4,-7.9,-29.1,1.3,-30.4C10.4,-31.7,20.8,-31.5,29,-26.2Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;"></path>
        </svg>
        <div class="s-hero__inner-meta">
          <span class="s-hero__inner-meta-date dark-text"><?php echo $formattedDate ?></span>
          <h1 class="s-hero__inner-meta-title"><?php echo $title ?></h1>
        </div>
        <div class="s-hero__inner-user">
          <img src="http://templatethemetp.local/wp-content/uploads/2023/06/OA_Logo-01.svg" class="s-hero__inner-user-img dark-icon" />
          <span class="s-hero__inner-user-name dark-text">By <?php echo $author ?></span>
        </div>
      </div>
    </div>
    <img src="<?php echo $bannerimage ?>" class="s-hero-img" />
  </section>

  <section class="s-content">
    <div class="container">
      <div class="s-content__inner">
        <?php echo $content ?>
      </div>
      <div class="s-content__nav">
        <?php if ($previous_post_link) : ?>
          <a href="<?php echo esc_url($previous_post_url) ?>" class="s-content__nav-previous">
            <?php get_template_part('template-parts/circular-button', null, array('buttonImage' => 'http://templatethemetp.local/wp-content/uploads/2023/06/west_FILL0_wght400_GRAD0_opsz48.svg', 'buttonText' => 'Previous Post', 'buttonInverted' => '')); ?>
          </a>
        <?php endif; ?>
        <?php if ($next_post_link) : ?>
          <a href="<?php echo esc_url($next_post_url) ?>" class="s-content__nav-next">
            <?php get_template_part('template-parts/circular-button', null, array('buttonImage' => 'http://templatethemetp.local/wp-content/uploads/2023/05/east_FILL0_wght400_GRAD0_opsz48.svg', 'buttonText' => 'Next Post', 'buttonInverted' => 'inverted')); ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/blog-section', null, array('postQuery' => $recommendedPostsQuery)); ?>

  <?php get_template_part('template-parts/call-to-action', null, array('buttonLink' => '', 'buttonContent' => '')); ?>

</main>
<?php get_footer(); ?>