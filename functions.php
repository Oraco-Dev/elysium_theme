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

// create custom post types - that act as pages
function create_custom_post_types()
{
  // Social Impact Blogs Custom Post Type
  register_post_type(
    'social_impact',
    array(
      'labels' => array(
        'name' => __('Social Impact - Blog'),
        'singular_name' => __('Social Impact'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'social-impact'),
      'menu_icon' => 'dashicons-admin-site',
      'supports' => array('title', 'editor', 'thumbnail'),
      'taxonomies' => array('category'),
      // Add this line
    )
  );

  // Business Services Custom Post Type
  register_post_type(
    'business_services',
    array(
      'labels' => array(
        'name' => __('Business Services'),
        'singular_name' => __('Business Service'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'business-services'),
      'menu_icon' => 'dashicons-analytics',
      'supports' => array('title', 'editor', 'thumbnail'),
      // Supports featured image
    )
  );

  // Personal Services Custom Post Type
  register_post_type(
    'personal_services',
    array(
      'labels' => array(
        'name' => __('Personal Services'),
        'singular_name' => __('Personal Service'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'personal-services'),
      'menu_icon' => 'dashicons-filter',
      'supports' => array('title', 'editor', 'thumbnail'),
      // Supports featured image
    )
  );

  register_post_type(
    'staff_members',
    array(
      'labels' => array(
        'name' => __('Staff Members'),
        'singular_name' => __('Staff Member'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'staff-members'),
      'menu_icon' => 'dashicons-businessman',
      'supports' => array('title', 'editor', 'thumbnail'),
      'taxonomies' => array('category'),
      // Supports featured image
    )
  );

  register_post_type(
    'case_studies',
    array(
      'labels' => array(
        'name' => __('Case Studies'),
        'singular_name' => __('Case Study'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'case-studies'),
      'menu_icon' => 'dashicons-businessman',
      'supports' => array('title', 'editor', 'thumbnail'),
      // Supports featured image
    )
  );
}

add_action('init', 'create_custom_post_types');

// custom fields for custom post types
function register_custom_fields()
{
  if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(
      array(
        'key' => 'group_link_icon',
        'title' => 'Link Icon',
        'fields' => array(
          array(
            'key' => 'field_link_icon',
            'label' => 'Link Icon',
            'name' => 'link_icon',
            'type' => 'image',
            'instructions' => 'Upload or select an image for the link icon.',
            'required' => true,
            'return_format' => 'url',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
        ),
        'location' => array(
          array(
            array(
              'param' => 'post_type',
              'operator' => '==',
              'value' => 'business_services',
            ),
          ),
          array(
            array(
              'param' => 'post_type',
              'operator' => '==',
              'value' => 'personal_services',
            ),
          ),
        ),
        'position' => 'acf_after_title',
        // Adjust as needed
      )
    );
  }
}

add_action('acf/init', 'register_custom_fields');

function current_year_shortcode()
{
  return date('Y');
}
add_shortcode('current_year', 'current_year_shortcode');

// END -- REMOVE COMMENTS
