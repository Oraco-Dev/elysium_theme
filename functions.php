<?php

// theme setup
function theme_setup()
{
  // enable featured images
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

// register menus
function theme_register_menus()
{
  register_nav_menus(
    array(
      'hamburger-menu' => 'Hamburger Menu',
      // Replace 'primary-menu' with your menu location slug and 'Primary Menu' with the menu name.
    )
  );
}

add_action('after_setup_theme', 'theme_register_menus');

// register webpack compiled js and css with theme
function enqueue_webpack_scripts()
{

  $cssFilePath = glob(get_template_directory() . '/css/build/main.min.*.css');
  $cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
  wp_enqueue_style('main_css', $cssFileURI);

  $jsFilePath = glob(get_template_directory() . '/js/build/main.min.*.js');
  $jsFileURI = get_template_directory_uri() . '/js/build/' . basename($jsFilePath[0]);
  wp_enqueue_script('main_js', $jsFileURI, null, null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_webpack_scripts');

// allow svgs
function enable_svg_upload($mime_types)
{
  $mime_types['svg'] = 'image/svg+xml';
  return $mime_types;
}
add_filter('upload_mimes', 'enable_svg_upload');

// allow svgs
function display_svg_in_admin($response, $attachment, $meta)
{
  if ($response['mime'] === 'image/svg+xml') {
    $response['sizes']['thumbnail'] = [
      'url' => $response['url'],
      'width' => $response['width'],
      'height' => $response['height'],
    ];
  }
  return $response;
}
add_filter('wp_prepare_attachment_for_js', 'display_svg_in_admin', 10, 3);

// START -- REMOVE COMMENTS

// Disable comments globally
function disable_comments_globally()
{
  // Remove support for comments from post types
  $post_types = get_post_types();
  foreach ($post_types as $post_type) {
    if (post_type_supports($post_type, 'comments')) {
      remove_post_type_support($post_type, 'comments');
      remove_post_type_support($post_type, 'trackbacks');
    }
  }

  // Close comments on existing posts
  $comments = get_comments();
  foreach ($comments as $comment) {
    wp_update_comment(
      array(
        'comment_ID' => $comment->comment_ID,
        'comment_approved' => 0
      )
    );
  }
}
add_action('init', 'disable_comments_globally');

// Remove "Comments" from the admin menu
function remove_comments_menu()
{
  remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_comments_menu');

// Redirect any comment-related URLs to homepage
function redirect_comments_urls()
{
  if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
    wp_redirect(get_permalink() . '#respond');
    exit;
  }
}
add_action('template_redirect', 'redirect_comments_urls');

// Hide existing comments and comment-related features in the admin area
function hide_comment_related_features()
{
  // Hide "Comments" from the admin bar
  if (is_admin_bar_showing()) {
    remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
  }

  // Hide comments column from post list screen
  if (!is_post_type_hierarchical(get_post_type())) {
    add_filter('manage_posts_columns', 'hide_comments_column');
    add_action('manage_posts_custom_column', 'hide_comments_column_content', 10, 2);
  }

  // Hide comments column from pages list screen
  if (!is_post_type_hierarchical(get_post_type())) {
    add_filter('manage_pages_columns', 'hide_comments_column');
    add_action('manage_pages_custom_column', 'hide_comments_column_content', 10, 2);
  }
}
add_action('admin_init', 'hide_comment_related_features');

// Helper function to hide comments column
function hide_comments_column($columns)
{
  unset($columns['comments']);
  return $columns;
}

// Helper function to hide comments column content
function hide_comments_column_content($column_name, $post_id)
{
  if ($column_name === 'comments') {
    echo '';
  }
}

// END -- REMOVE COMMENTS
