<!-- WORDPRESS TEMPLATE FOR HEADER -->

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
  <title>Oraco Template Theme</title>
  <?php wp_head(); ?>
</head>

<body>

  <div class="menu">
    <div class="container">
      <div class="menu__inner">

      </div>
    </div>
  </div>

  <div class="modal">
    <div class="modal__outer">
      <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/09/icons8-close-window-50.png"
        alt="Close Modal Button" class="close-modal-btn" />
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
          <a href="https://qsop.quickfee.com.au/#/company/quickfee/firm/elysium" target="_blank">
            <button class="header__inner-right-btn-blue header__inner-right-btn">Pay Online Now</button>
          </a>
          <a href="https://elysiumafs.acclipse.com/clientportal" target="_blank">
            <button class="header__inner-right-btn-blue header__inner-right-btn">Client Portal</button>
          </a>
          <button class="header__inner-right-btn-orange header__inner-right-btn modal-btn">
            Get a free assesment
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