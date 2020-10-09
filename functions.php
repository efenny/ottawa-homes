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
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));

	// Get the theme data
    $the_theme = wp_get_theme();
    
    // you might need to change the /build/css/child-theme.min.css to /build/css/child-theme.css when debugging css issues
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/build/css/child-theme.min.css', array(), false);
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/style.css', array(), false);
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/build/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

require_once('cpt.php'); 


if( function_exists('acf_add_options_page') ) {
    $neighbourhoods = array(
        'ottawa' => "Ottawa",
        'kanata' => "Kanata",
        'stitts' => "Stittsville",
    );

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
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );