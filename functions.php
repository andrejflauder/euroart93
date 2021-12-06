<?php

require_once('templates/helpers/customizer.php');
//Load stylesheets
function load_stylesheets() {

	wp_register_style('font', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css', array(), 1, 'all');
	wp_enqueue_style('font');

	wp_register_style('bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('styles', get_template_directory_uri() . '/style.css', array(), 1, 'all');
	wp_enqueue_style('styles');

	wp_register_style('favicon', get_template_directory_uri() . '/img/favicon.png', array(), 1, 'all');
	wp_enqueue_style('favicon');

	wp_register_style('apple', get_template_directory_uri() . '/img/apple-touch-icon.png', array(), 1, 'all');
	wp_enqueue_style('apple');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


// Load javascript
function add_js() {

	wp_register_script ('jquery', get_template_directory_uri() . '/lib/jquery/jquery.min.js', array() , 1, 1, 1);
	wp_enqueue_script('jquery');

	wp_register_script ('bootstrap', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', array() , 1, 1, 1);
	wp_enqueue_script('bootstrap');

	wp_register_script ('easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array() , 1, 1, 1);
	wp_enqueue_script('easing');

	wp_register_script ('js', get_template_directory_uri() . '/js/main.js', array() , 1, 1, 1);
	wp_enqueue_script('js');

}

add_action('wp_enqueue_script', 'add_js');

// Theme options
add_theme_support('menus');

 function nav_menu(){
    register_nav_menus(array(
      'primary-menu' => __('Primary Menu', 'text_domain'),
      'footer-menu' => __('Footer Menu', 'text_domain')
    ));
  }

  add_action('init', 'nav_menu');

  // Custom Post Type
add_theme_support( 'post-thumbnails' );

  function custom_post_type(){
    $args = array(
      'labels' => array (
        'name' => 'Blog',
        'singular_name' => 'Post'
      ),
      'hierarchical' => true,
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-welcome-write-blog',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );

    register_post_type('blog', $args);

  }
  add_action('init', 'custom_post_type', 0);



  ?>
