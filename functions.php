<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() { 
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/css/theme.min.css');
    wp_enqueue_style('custom-editor-style', get_template_directory_uri() . '/css/custom-editor-style.min.css');
    // wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));

	// Get the theme data
    $the_theme = wp_get_theme();
    
    // you might need to change the /build/css/child-theme.min.css to /build/css/child-theme.css when debugging css issues
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/build/css/child-theme.min.css', array(), false);
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/style.css', array(), false);
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'lightgallery-scripts', get_stylesheet_directory_uri() . '/build/js/lightgallery.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'swiper-scripts', get_stylesheet_directory_uri() . '/build/js/swiper.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/build/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

$neighbourhoods = array(
    'nieghbours' => "Neighbourhood",
    // 'kanata' => "Kanata",
    // 'stitts' => "Stittsville",
);

$cpts = array(
    'our_listings' => array('Our Listing', 'dashicons-format-aside'),
    // 'neighbourhoods' => array('Neighbourhood', 'dashicons-admin-multisite', true),
    'team_members' => array('Team Member', 'dashicons-admin-users')
);

require_once('cpt.php'); 

// for the excerpts and read mor for blogs


// note that all of these custom options pages store their data in options 
// so you'll need to make sure the field have unique fields
if( function_exists('acf_add_options_page') ) {
    foreach ($neighbourhoods as $key => $value) {
        acf_add_options_page(array(
            'page_title'    => $value.' Neighbourhood Options',
            'menu_title'    => 'Options',
            'menu_slug'     => 'options_'.$key.'_neighbourhood',
            'capability'    => 'edit_posts',
            'parent_slug'   => 'edit.php?post_type='.$key.'_neighbourhood',
            'position'      => false,
            'icon_url'      => 'dashicons-admin-generic',
            'redirect'      => false,
        ));
    }

    foreach ($cpts as $key => $value) {
        acf_add_options_page(array(
            'page_title'    => $value[0],
            'menu_title'    => 'Options',
            'menu_slug'     => 'options_'.$key,
            'capability'    => 'edit_posts',
            'parent_slug'   => 'edit.php?post_type='.$key,
            'position'      => false,
            'icon_url'      => 'dashicons-admin-generic',
            'redirect'      => false,
        ));
    }

    acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


add_action( 'after_setup_theme', 'add_new_image_sizes' );
function add_new_image_sizes() {
    add_image_size( 'x-large', 1920, 999999 );
    add_image_size( 'slider', 600, 600, true);
    add_image_size( 'slider-blog', 700, 388, true);
    add_image_size( 'logo', 250, 167);
    add_image_size( 'team', 370, 500);

    remove_image_size('2048x2048');
    remove_image_size('1536x1536');
    remove_image_size('medium_large');
}

add_filter('wpcf7_autop_or_not', '__return_false');


function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}