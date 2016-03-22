<?php
function awesome_script_enqueue() {
//css
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all');
wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/videoblog.css', array(), '1.0.0', 'all');

//js
wp_enqueue_style('jquery');
wp_enqueue_style('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.6', true);
wp_enqueue_style('customjs', get_template_directory_uri() . '/js/video-blog.js', array(), '1.0.0', true);


}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

function videoblogg_theme_setup(){

add_theme_support('menus');

  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');

}
add_action('init', 'videoblogg_theme_setup');
