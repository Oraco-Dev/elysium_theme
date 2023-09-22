<?php

$headerAboutUsMenu = array(
  'menu' => 'Header - About Us',
  // Specify the menu name here
  'menu_class' => 'header__inner-menu-item',
  'menu_id' => 'header__inner-menu',

);

$headerOurServicesMenu = array(
  'menu' => 'Header - Our Services',
  // Specify the menu name here
  'menu_class' => 'header__inner-menu-item',
  'menu_id' => 'header__inner-menu',
);

$headerNewsResourcesMenu = array(
  'menu' => 'Header - News & Resources',
  // Specify the menu name here
  'menu_class' => 'header__inner-menu-item',
  'menu_id' => 'header__inner-menu',
);

$mobileMenu = array(
  'menu' => 'Mobile Menu',
  // Specify the menu name here
  'menu_class' => 'mobile__inner-menu-item',
  'menu_id' => 'mobile__inner-menu',
);

$business_services_query = new WP_Query(
  array(
    'post_type' => 'business_services',
    'posts_per_page' => -1,
    'orderby' => 'title',
    // Sort by title in alphabetical order
    'order' => 'ASC',
    // Specify ascending order (A to Z)
    // -1 to retrieve all posts
  )
);

$personal_services_query = new WP_Query(
  array(
    'post_type' => 'personal_services',
    'posts_per_page' => -1,
    'orderby' => 'title',
    // Sort by title in alphabetical order
    'order' => 'ASC',
    // Specify ascending order (A to Z)
    // -1 to retrieve all posts
  )
);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="author" content="Oraco Agency">
  <!-- ADD CONTENT -->
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elysium Accounting</title>
  <?php wp_head(); ?>
</head>

<body>

  <div class="menu">
    <div class="container">
      <div class="menu__inner">
        <div class="accordion">
          <div class="accordion-item">
            <div class="accordion-header">
              <h5>Personal Services</h5>
              <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/icons8-chevron-down-30.png" />
            </div>
            <div class="accordion-content">
              <?php
              if ($personal_services_query->have_posts()) {
                while ($personal_services_query->have_posts()) {
                  $personal_services_query->the_post();

                  $title = get_the_title();
                  $link = get_permalink();

                  echo '<a href="' . $link . '" class="footer__link">' . $title . '</a>';
                }
                wp_reset_postdata(); // Reset the query
              }
              ?>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <h5>Business Services</h5>
              <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/icons8-chevron-down-30.png" />
            </div>
            <div class="accordion-content">
              <?php
              if ($business_services_query->have_posts()) {
                while ($business_services_query->have_posts()) {
                  $business_services_query->the_post();

                  $title = get_the_title();
                  $link = get_permalink();

                  echo '<a href="' . $link . '" class="footer__link">' . $title . '</a>';
                }
                wp_reset_postdata(); // Reset the query
              }
              ?>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <h5>About Us</h5>
              <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/icons8-chevron-down-30.png" />
            </div>
            <div class="accordion-content">
              <?php
              // Check if the menu exists
              $menu_items = wp_get_nav_menu_items('Header - About Us'); // Get menu items by menu name
              
              if ($menu_items) {
                foreach ($menu_items as $menu_item) {
                  $title = $menu_item->title;
                  $link = $menu_item->url;

                  echo '<a href="' . $link . '" class="footer__link">' . $title . '</a>';
                }
              }

              ?>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              <h5>News & Resources</h5>
              <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/icons8-chevron-down-30.png" />
            </div>
            <div class="accordion-content">
              <?php
              // Check if the menu exists
              $menu_items = wp_get_nav_menu_items('Header - News & Resources'); // Get menu items by menu name
              
              if ($menu_items) {
                foreach ($menu_items as $menu_item) {
                  $title = $menu_item->title;
                  $link = $menu_item->url;

                  echo '<a href="' . $link . '" class="footer__link">' . $title . '</a>';
                }
              }

              ?>
            </div>
          </div>
        </div>
        <div class="menu__inner-btns-box">
          <div class="menu__inner-btns-box-btns">
            <a href="https://qsop.quickfee.com.au/#/company/quickfee/firm/elysium" class="blue-btn">
              <button>Pay Online Now</button>
            </a>
            <a href="https://elysiumafs.acclipse.com/clientportal" class="blue-btn">
              <button>Client Portal</button>
            </a>
          </div>
          <a href="https://elysiumafs.previewsite.com.au/contact" class="orange-btn">
            <button>
              Get a Free Assesment
            </button>
          </a>
        </div>

        <div class="footer__socials">
          <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/Xero-Certified-1.png"
            class="footer__socials-xero" />
          <div class="footer__socials-row">
            <a href="https://www.instagram.com/elysiumaccounting/" target="_blank"><img
                src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/instagram.png"
                class="footer__socials-row-icon" /></a>
            <a href="https://www.facebook.com/elysiumafs" target="_blank"><img
                src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/facebook-02.png"
                class="footer__socials-row-icon" /></a>
            <a href="https://www.youtube.com/channel/UCmB8GbsEN3Zoa-98IFc9KDg" target="_blank"><img
                src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/youtube.png"
                class="footer__socials-row-icon" /></a>
          </div>
        </div>
      </div>





    </div>
  </div>
  </div>

  <div class="modal">
    <div class="modal__outer">
      <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/icons8-close-window-50.png"
        alt="Close Modal Button" class="close-modal-btn" />
      <div class="modal__outer-title">
        <h4>Book your free assesment</h4>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="603a292" title="Book Your Free Assesment"]'); ?>
    </div>
  </div>

  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__inner-left">
          <a href="/"><img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/logo-1-1.png" /></a>
          <?php
          wp_nav_menu($headerAboutUsMenu);
          ?>
          <?php
          wp_nav_menu($headerNewsResourcesMenu);
          ?>
          <?php
          wp_nav_menu($headerOurServicesMenu);
          ?>
        </div>
        <div class="header__inner-right">
          <a href="https://qsop.quickfee.com.au/#/company/quickfee/firm/elysium">
            <button class="header__inner-right-btn-blue header__inner-right-btn">Pay Online Now</button>
          </a>
          <a href="https://elysiumafs.acclipse.com/clientportal">
            <button class="header__inner-right-btn-blue header__inner-right-btn">Client Portal</button>
          </a>
          <button class="header__inner-right-btn-orange header__inner-right-btn modal-btn">
            Get a Free Assesment
          </button>
        </div>
        <div class="hamburger">
          <div class="hamburger__icon">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
    </div>
  </header>

  <div class="bt__button">
    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/icons8-up-arrow-50.png" alt=""
      class="bt__button-img" />
  </div>