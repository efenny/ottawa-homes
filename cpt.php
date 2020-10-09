<?php // Register Custom Post Type





function team_members() {

    $labels = array(
        'name'                  => _x( 'Team Members', 'Post Type General Name', 'website' ),
        'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'website' ),
        'menu_name'             => __( 'Team Members', 'website' ),
        'name_admin_bar'        => __( 'Team Members', 'website' ),
        'archives'              => __( 'Team Members Archives', 'website' ),
        'attributes'            => __( 'Team Members Attributes', 'website' ),
        'parent_item_colon'     => __( 'Parent Team Member:', 'website' ),
        'all_items'             => __( 'All Team Members', 'website' ),
        'add_new_item'          => __( 'Add New Team Member', 'website' ),
        'add_new'               => __( 'Add New', 'website' ),
        'new_item'              => __( 'New Team Member', 'website' ),
        'edit_item'             => __( 'Edit Team Member', 'website' ),
        'update_item'           => __( 'Update Team Member', 'website' ),
        'view_item'             => __( 'View Team Member', 'website' ),
        'view_items'            => __( 'View Team Members', 'website' ),
        'search_items'          => __( 'Search Team Members', 'website' ),
        'not_found'             => __( 'Not found', 'website' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'website' ),
        'featured_image'        => __( 'Featured Image', 'website' ),
        'set_featured_image'    => __( 'Set featured image', 'website' ),
        'remove_featured_image' => __( 'Remove featured image', 'website' ),
        'use_featured_image'    => __( 'Use as featured image', 'website' ),
        'insert_into_item'      => __( 'Insert into Team Member', 'website' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Team Member', 'website' ),
        'items_list'            => __( 'Team Members list', 'website' ),
        'items_list_navigation' => __( 'Team Members list navigation', 'website' ),
        'filter_items_list'     => __( 'Filter Team Members list', 'website' ),
    );
    $args = array(
        'label'                 => __( 'Team Members', 'website' ),
        'description'           => __( 'Team Members part of The Website' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'rewrite' => array(
            'slug' => 'team-members'
        ),
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true, 
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    ); 
    register_post_type( 'team_members', $args );

}
add_action( 'init', 'team_members', 0 );



function ottawa_listings() {

    $labels = array(
        'name'                  => _x( 'Ottawa Listings', 'Post Type General Name', 'website' ),
        'singular_name'         => _x( 'Ottawa Listing', 'Post Type Singular Name', 'website' ),
        'menu_name'             => __( 'Ottawa Listings', 'website' ),
        'name_admin_bar'        => __( 'Ottawa Listings', 'website' ),
        'archives'              => __( 'Ottawa Listings Archives', 'website' ),
        'attributes'            => __( 'Ottawa Listings Attributes', 'website' ),
        'parent_item_colon'     => __( 'Parent Ottawa Listing:', 'website' ),
        'all_items'             => __( 'All Ottawa Listings', 'website' ),
        'add_new_item'          => __( 'Add New Ottawa Listing', 'website' ),
        'add_new'               => __( 'Add New', 'website' ),
        'new_item'              => __( 'New Ottawa Listing', 'website' ),
        'edit_item'             => __( 'Edit Ottawa Listing', 'website' ),
        'update_item'           => __( 'Update Ottawa Listing', 'website' ),
        'view_item'             => __( 'View Ottawa Listing', 'website' ),
        'view_items'            => __( 'View Ottawa Listings', 'website' ),
        'search_items'          => __( 'Search Ottawa Listings', 'website' ),
        'not_found'             => __( 'Not found', 'website' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'website' ),
        'featured_image'        => __( 'Featured Image', 'website' ),
        'set_featured_image'    => __( 'Set featured image', 'website' ),
        'remove_featured_image' => __( 'Remove featured image', 'website' ),
        'use_featured_image'    => __( 'Use as featured image', 'website' ),
        'insert_into_item'      => __( 'Insert into Ottawa Listing', 'website' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Ottawa Listing', 'website' ),
        'items_list'            => __( 'Ottawa Listings list', 'website' ),
        'items_list_navigation' => __( 'Ottawa Listings list navigation', 'website' ),
        'filter_items_list'     => __( 'Filter Ottawa Listings list', 'website' ),
    );
    $args = array(
        'label'                 => __( 'Ottawa Listings', 'website' ),
        'description'           => __( 'Ottawa Listings part of The Website' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'rewrite' => array(
            'slug' => 'ottawa-listings'
        ),
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-format-aside',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true, 
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    ); 
    register_post_type( 'ottawa_listings', $args );

}
add_action( 'init', 'ottawa_listings', 0 );



function create_neighbourhoods($key, $value) {
    $labels = array(
        'name'                  => _x( $value.' Neighbourhoods', 'Post Type General Name', 'website' ),
        'singular_name'         => _x( $value.' Neighbourhood', 'Post Type Singular Name', 'website' ),
        'menu_name'             => __( $value.' Neighbourhoods', 'website' ),
        'name_admin_bar'        => __( $value.' Neighbourhoods', 'website' ),
        'archives'              => __( $value.' Neighbourhoods Archives', 'website' ),
        'attributes'            => __( $value.' Neighbourhoods Attributes', 'website' ),
        'parent_item_colon'     => __( 'Parent '.$value.' Neighbourhood:', 'website' ),
        'all_items'             => __( 'All '.$value.' Neighbourhoods', 'website' ),
        'add_new_item'          => __( 'Add New '.$value.' Neighbourhood', 'website' ),
        'add_new'               => __( 'Add New', 'website' ),
        'new_item'              => __( 'New '.$value.' Neighbourhood', 'website' ),
        'edit_item'             => __( 'Edit '.$value.' Neighbourhood', 'website' ),
        'update_item'           => __( 'Update '.$value.' Neighbourhood', 'website' ),
        'view_item'             => __( 'View '.$value.' Neighbourhood', 'website' ),
        'view_items'            => __( 'View '.$value.' Neighbourhoods', 'website' ),
        'search_items'          => __( 'Search '.$value.' Neighbourhoods', 'website' ),
        'not_found'             => __( 'Not found', 'website' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'website' ),
        'featured_image'        => __( 'Featured Image', 'website' ),
        'set_featured_image'    => __( 'Set featured image', 'website' ),
        'remove_featured_image' => __( 'Remove featured image', 'website' ),
        'use_featured_image'    => __( 'Use as featured image', 'website' ),
        'insert_into_item'      => __( 'Insert into '.$value.' Neighbourhood', 'website' ),
        'uploaded_to_this_item' => __( 'Uploaded to this '.$value.' Neighbourhood', 'website' ),
        'items_list'            => __( $value.' Neighbourhoods list', 'website' ),
        'items_list_navigation' => __( $value.' Neighbourhoods list navigation', 'website' ),
        'filter_items_list'     => __( 'Filter '.$value.' Neighbourhoods list', 'website' ),
    );
    $args = array(
        'label'                 => __( $value.' Neighbourhoods', 'website' ),
        'description'           => __( $value.' Neighbourhoods part of The Website' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'rewrite' => array(
            'slug' => $key.'-neighbourhoods'
        ),
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 14,
        'menu_icon'             => 'dashicons-admin-multisite',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true, 
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    ); 
    register_post_type( $key.'_neighbourhood', $args );
}

$neighbourhoods = array(
    'ottawa' => "Ottawa",
    'kanata' => "Kanata",
    'stitts' => "Stittsville",
);

foreach ($neighbourhoods as $key => $value) {
    add_action( 'init', function() use ($key, $value) {
        create_neighbourhoods($key, $value);
    }, 0 , 2);
}
?>