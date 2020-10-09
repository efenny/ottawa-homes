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






function ottawa_neighbourhood() {

    $labels = array(
        'name'                  => _x( 'Ottawa Neighbourhoods', 'Post Type General Name', 'website' ),
        'singular_name'         => _x( 'Ottawa Neighbourhood', 'Post Type Singular Name', 'website' ),
        'menu_name'             => __( 'Ottawa Neighbourhoods', 'website' ),
        'name_admin_bar'        => __( 'Ottawa Neighbourhoods', 'website' ),
        'archives'              => __( 'Ottawa Neighbourhoods Archives', 'website' ),
        'attributes'            => __( 'Ottawa Neighbourhoods Attributes', 'website' ),
        'parent_item_colon'     => __( 'Parent Ottawa Neighbourhood:', 'website' ),
        'all_items'             => __( 'All Ottawa Neighbourhoods', 'website' ),
        'add_new_item'          => __( 'Add New Ottawa Neighbourhood', 'website' ),
        'add_new'               => __( 'Add New', 'website' ),
        'new_item'              => __( 'New Ottawa Neighbourhood', 'website' ),
        'edit_item'             => __( 'Edit Ottawa Neighbourhood', 'website' ),
        'update_item'           => __( 'Update Ottawa Neighbourhood', 'website' ),
        'view_item'             => __( 'View Ottawa Neighbourhood', 'website' ),
        'view_items'            => __( 'View Ottawa Neighbourhoods', 'website' ),
        'search_items'          => __( 'Search Ottawa Neighbourhoods', 'website' ),
        'not_found'             => __( 'Not found', 'website' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'website' ),
        'featured_image'        => __( 'Featured Image', 'website' ),
        'set_featured_image'    => __( 'Set featured image', 'website' ),
        'remove_featured_image' => __( 'Remove featured image', 'website' ),
        'use_featured_image'    => __( 'Use as featured image', 'website' ),
        'insert_into_item'      => __( 'Insert into Ottawa Neighbourhood', 'website' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Ottawa Neighbourhood', 'website' ),
        'items_list'            => __( 'Ottawa Neighbourhoods list', 'website' ),
        'items_list_navigation' => __( 'Ottawa Neighbourhoods list navigation', 'website' ),
        'filter_items_list'     => __( 'Filter Ottawa Neighbourhoods list', 'website' ),
    );
    $args = array(
        'label'                 => __( 'Ottawa Neighbourhoods', 'website' ),
        'description'           => __( 'Ottawa Neighbourhoods part of The Website' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'rewrite' => array(
            'slug' => 'ottawa-neighbourhoods'
        ),
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-multisite',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true, 
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    ); 
    register_post_type( 'ottawa_neighbourhood', $args );

}
add_action( 'init', 'ottawa_neighbourhood', 0 );

?>