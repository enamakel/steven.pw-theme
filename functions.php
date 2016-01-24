<?php

/* Load the core theme framework. */
require_once(trailingslashit(get_template_directory()) . 'library/hybrid.php');
new Hybrid();

/* Do theme setup on the 'after_setup_theme' hook. */
add_action('after_setup_theme', 'custom_theme_setup');


/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 */
function custom_theme_setup() {
  /* Add theme support for core framework features. */
  add_theme_support('hybrid-core-styles', array('style'));
  add_theme_support('hybrid-core-menus', array('primary'));
  add_theme_support('hybrid-core-sidebars', array('primary', 'subsidiary', 'after-singular'));
  add_theme_support('hybrid-core-widgets');
  add_theme_support('hybrid-core-theme-settings', array('about', 'footer'));
  add_theme_support('hybrid-core-meta-box-footer');
  add_theme_support('hybrid-core-shortcodes');
  add_theme_support('hybrid-core-template-hierarchy');

  /* Add theme support for framework extensions. */
  add_theme_support('loop-pagination');
  add_theme_support('get-the-image');
  add_theme_support('cleaner-gallery');

  /* Add theme support for WordPress features. */
  add_theme_support('automatic-feed-links');

  /* Embed width/height defaults. */
  add_filter('embed_defaults', 'custom_embed_defaults');

  /* Image sizes */
  add_action('init', 'custom_image_sizes');

  /* Excerpt ending */
  add_filter('excerpt_more', 'custom_excerpt_more');

  /* Custom excerpt length */
  add_filter('excerpt_length', 'custom_excerpt_length');

  /* Filter the pagination trail arguments. */
  add_filter('loop_pagination_args', 'custom_pagination_args');

  /* Filter the commentform arguments */
  add_filter('comment_form_defaults', 'custom_commentform_args', 11, 1);

  /* Enqueue scripts (and related stylesheets) */
  add_action('wp_enqueue_scripts', 'custom_scripts');

  /* Remove http:// and https:// and replace with // */
  add_filter('template_directory_uri', 'removeHTTPorHTTPS', 99);
}


/**
 * Overwrites the default widths for embeds.  This is especially useful for making sure videos properly
 * expand the full width on video pages.  This function overwrites what the $content_width variable handles
 * with context-based widths.
 */
function custom_embed_defaults($args) {
  $args['width'] = 940;

  if (is_page() && !is_page_template('page-template-fullwidth.php'))
    $args['width'] = 640;

  return $args;
}


/**
 * Excerpt ending
 */
function custom_excerpt_more($more) { return '...'; }


/**
 * Custom excerpt lengths
 */
function custom_excerpt_length($length) { return 15; }


/**
 * Enqueue scripts (and related stylesheets)
 */
function custom_scripts() {
  /* Enqueue Scripts */
  wp_register_script('libs', get_template_directory_uri() . '/build/libraries.js', array(), '1.0.0', true);
  wp_register_script('app', get_template_directory_uri() . '/build/common.js', array(), '1.0.0', true);

  wp_enqueue_script('libs');
  wp_enqueue_script('app');
}

/**
 * Pagination args
 */
function custom_pagination_args($args) {
  $args['prev_text'] = __('&larr; Previous', 'hatch');
  $args['next_text'] = __('Next &rarr;', 'hatch');
  return $args;
}


function removeHTTPorHTTPS ($template_directory_uri, $template) {
  return preg_replace('/https?:\/\//', '//', $template_directory_uri);
}


/**
 *  Image sizes
 */
function custom_image_sizes() {
  add_image_size('archive-thumbnail', 220, 150, true);
  add_image_size('single-thumbnail', 640, 360, true);
}

/**
 *  Unregister Hybrid widgets
 */
function custom_unregister_widgets() {
  unregister_widget('Hybrid_Widget_Search');
  register_widget('WP_Widget_Search');
}