<?php 
// Register Custom Post Type Function
function create_cpt($key, $value, $icon = 'dashicons-admin-generic', $cat = false) {
    $labels = array(
        'name'                  => _x( $value.'s', 'Post Type General Name', 'website' ),
        'singular_name'         => _x( $value, 'Post Type Singular Name', 'website' ),
        'menu_name'             => __( $value.'s', 'website' ),
        'name_admin_bar'        => __( $value.'s', 'website' ),
        'archives'              => __( $value.'s Archives', 'website' ),
        'attributes'            => __( $value.'s Attributes', 'website' ),
        'parent_item_colon'     => __( 'Parent '.$value, 'website' ),
        'all_items'             => __( 'All '.$value.'s', 'website' ),
        'add_new_item'          => __( 'Add New '.$value, 'website' ),
        'add_new'               => __( 'Add New', 'website' ),
        'new_item'              => __( 'New '.$value, 'website' ),
        'edit_item'             => __( 'Edit '.$value, 'website' ),
        'update_item'           => __( 'Update '.$value, 'website' ),
        'view_item'             => __( 'View '.$value, 'website' ),
        'view_items'            => __( 'View '.$value.'s', 'website' ),
        'search_items'          => __( 'Search '.$value.'s', 'website' ),
        'not_found'             => __( 'Not found', 'website' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'website' ),
        'featured_image'        => __( 'Featured Image', 'website' ),
        'set_featured_image'    => __( 'Set featured image', 'website' ),
        'remove_featured_image' => __( 'Remove featured image', 'website' ),
        'use_featured_image'    => __( 'Use as featured image', 'website' ),
        'insert_into_item'      => __( 'Insert into '.$value, 'website' ),
        'uploaded_to_this_item' => __( 'Uploaded to this '.$value, 'website' ),
        'items_list'            => __( $value.'s list', 'website' ),
        'items_list_navigation' => __( $value.'s list navigation', 'website' ),
        'filter_items_list'     => __( 'Filter '.$value.'s list', 'website' ),
    );
    $args = array(
        'label'                 => __( $value.'s', 'website' ),
        'description'           => __( $value.'s part of The Website' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'hierarchical'          => false,
        'taxonomies'            => $cat ? array( 'category' ) : array(),
        'public'                => true,
        'rewrite' => array(
            // so that the url is more user friendly
            'slug' => str_replace('_', '-', $key)
        ),
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 19,
        'menu_icon'             => $icon,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true, 
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    ); 
    register_post_type( $key, $args );
}

foreach ($cpts as $key => $value) {
    $name = $value[0];
    $dashicon = !empty($value[1]) ? $value[1] : null;
    $cat = !empty($value[2]) ? $value[2] : false;
    
    add_action( 'init', function() use ($key, $name, $dashicon, $cat) {
        create_cpt($key, $name, $dashicon, $cat);
    }, 0 , 2);
}


// // Just for the niehgbourhoods
function create_neighbourhoods($key, $value, $cat = false) {
    $labels = array(
        'name'                  => _x( $value.'s', 'Post Type General Name', 'website' ),
        'singular_name'         => _x( $value, 'Post Type Singular Name', 'website' ),
        'menu_name'             => __( $value.'s', 'website' ),
        'name_admin_bar'        => __( $value.'s', 'website' ),
        'archives'              => __( $value.'s Archives', 'website' ),
        'attributes'            => __( $value.'s Attributes', 'website' ),
        'parent_item_colon'     => __( 'Parent '.$value.':', 'website' ),
        'all_items'             => __( 'All '.$value.'s', 'website' ),
        'add_new_item'          => __( 'Add New '.$value, 'website' ),
        'add_new'               => __( 'Add New', 'website' ),
        'new_item'              => __( 'New '.$value, 'website' ),
        'edit_item'             => __( 'Edit '.$value, 'website' ),
        'update_item'           => __( 'Update '.$value, 'website' ),
        'view_item'             => __( 'View '.$value, 'website' ),
        'view_items'            => __( 'View '.$value.'s', 'website' ),
        'search_items'          => __( 'Search '.$value.'s', 'website' ),
        'not_found'             => __( 'Not found', 'website' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'website' ),
        'featured_image'        => __( 'Featured Image', 'website' ),
        'set_featured_image'    => __( 'Set featured image', 'website' ),
        'remove_featured_image' => __( 'Remove featured image', 'website' ),
        'use_featured_image'    => __( 'Use as featured image', 'website' ),
        'insert_into_item'      => __( 'Insert into Location', 'website' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Location', 'website' ),
        'items_list'            => __( $value.'s list', 'website' ),
        'items_list_navigation' => __( $value.'s list navigation', 'website' ),
        'filter_items_list'     => __( 'Filter '.$value.' list', 'website' ),
    );
    $args = array(
        'label'                 => __( $value.'s', 'website' ),
        'description'           => __( $value.'s part of The Website' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'neighbourhood_cat' ),
        'hierarchical'          => false,
        'public'                => true,
        'rewrite' => array(
            'slug' => $key
        ),
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-admin-multisite',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true, 
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    ); 
    register_post_type( $key, $args );
}

// $neighbourhoods is from functions.php
foreach ($neighbourhoods as $key => $value) {
    add_action( 'init', function() use ($key, $value) {
        create_neighbourhoods($key, $value);
    }, 0 , 2);
}

function location_cat() {

    $labels = array(
        'name'              => _x( 'Locations', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Location', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Locations', 'textdomain' ),
        'all_items'         => __( 'All Locations', 'textdomain' ),
        'parent_item'       => __( 'Parent Location', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Location:', 'textdomain' ),
        'edit_item'         => __( 'Edit Location', 'textdomain' ),
        'update_item'       => __( 'Update Location', 'textdomain' ),
        'add_new_item'      => __( 'Add New Location', 'textdomain' ),
        'new_item_name'     => __( 'New Location Name', 'textdomain' ),
        'menu_name'         => __( 'Locations', 'textdomain' ),
    );
    
  // create a new taxonomy
  register_taxonomy(
      'locations',
      'nieghbours',
      array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
      )
  );
}
add_action( 'init', 'location_cat' );

?>