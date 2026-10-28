<?php
function syseda_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  register_nav_menus(array('primary' => __('Primary Menu', 'syseda-technology')));
}
add_action('after_setup_theme', 'syseda_theme_setup');

function syseda_enqueue_styles() {
  wp_enqueue_style('syseda-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'syseda_enqueue_styles');

function syseda_logo_url() {
  $logo = get_template_directory_uri() . '/assets/syseda-logo.png';
  return apply_filters('syseda_logo_url', $logo);
}
