<?php

require_once get_template_directory()."/framework/abstract.php";
$theme = new Thenatives(array(
    'theme_name'	=>	"Thenatives",
    'theme_slug'	=>	'thenatives'
));
$theme->init();
require_once ('admin/index.php');

add_action( 'init', 'theme_register_post_type' );
function theme_register_post_type() {
	//Create Post Type Advertises
    $labels = array(
        'name'                  => __( 'Advertises', 'thenatives' ),
        'singular_name'         => __( 'Advertise', 'thenatives' ),
        'menu_name'             => __( 'Advertises', 'thenatives' ),
        'name_admin_bar'        => __( 'Advertise', 'thenatives' ),
        'add_new'               => __( 'Add New', 'thenatives' ),
        'add_new_item'          => __( 'Add New Advertise', 'thenatives' ),
        'new_item'              => __( 'New Advertise', 'thenatives' ),
        'edit_item'             => __( 'Edit Advertise', 'thenatives' ),
        'view_item'             => __( 'View Advertise', 'thenatives' ),
        'all_items'             => __( 'All Advertises', 'thenatives' ),
        'search_items'          => __( 'Search Advertises', 'thenatives' ),
        'parent_item_colon'     => __( 'Parent Advertises:', 'thenatives' ),
        'not_found'             => __( 'No advertises found.', 'thenatives' ),
        'not_found_in_trash'    => __( 'No advertises found in Trash.', 'thenatives' ),
        'featured_image'        => __( 'Advertises Cover Image', 'thenatives' ),
        'set_featured_image'    => __( 'Set cover image', 'thenatives' ),
        'remove_featured_image' => __( 'Remove cover image', 'thenatives' ),
        'use_featured_image'    => __( 'Use as cover image', 'thenatives' ),
        'archives'              => __( 'Advertise archives', 'thenatives' ),
        'insert_into_item'      => __( 'Insert into advertise', 'thenatives' ),
        'uploaded_to_this_item' => __( 'Uploaded to this advertises', 'thenatives' ),
        'filter_items_list'     => __( 'Filter advertises list', 'thenatives' ),
        'items_list_navigation' => __( 'Advertises list navigation', 'thenatives' ),
        'items_list'            => __( 'Advertises list', 'thenatives' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position' 	 => 4,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'advertise' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'supports'           => array( 'title', 'revisions', 'editor', 'author', 'thumbnail', 'post-formats' ),
    );

    register_post_type( 'advertise', $args );
    //Create Pót Type Event
    $labels = array(
        'name'                  => __( 'Events', 'thenatives' ),
        'singular_name'         => __( 'Event', 'thenatives' ),
        'menu_name'             => __( 'Events', 'thenatives' ),
        'name_admin_bar'        => __( 'Event', 'thenatives' ),
        'add_new'               => __( 'Add New', 'thenatives' ),
        'add_new_item'          => __( 'Add New Event', 'thenatives' ),
        'new_item'              => __( 'New Event', 'thenatives' ),
        'edit_item'             => __( 'Edit Event', 'thenatives' ),
        'view_item'             => __( 'View Event', 'thenatives' ),
        'all_items'             => __( 'All Events', 'thenatives' ),
        'search_items'          => __( 'Search Events', 'thenatives' ),
        'parent_item_colon'     => __( 'Parent Events:', 'thenatives' ),
        'not_found'             => __( 'No advertises found.', 'thenatives' ),
        'not_found_in_trash'    => __( 'No advertises found in Trash.', 'thenatives' ),
        'featured_image'        => __( 'Events Cover Image', 'thenatives' ),
        'set_featured_image'    => __( 'Set cover image', 'thenatives' ),
        'remove_featured_image' => __( 'Remove cover image', 'thenatives' ),
        'use_featured_image'    => __( 'Use as cover image', 'thenatives' ),
        'archives'              => __( 'Event archives', 'thenatives' ),
        'insert_into_item'      => __( 'Insert into event', 'thenatives' ),
        'uploaded_to_this_item' => __( 'Uploaded to this events', 'thenatives' ),
        'filter_items_list'     => __( 'Filter events list', 'thenatives' ),
        'items_list_navigation' => __( 'Events list navigation', 'thenatives' ),
        'items_list'            => __( 'Events list', 'thenatives' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position' 	 => 4,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'event' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'supports'           => array( 'title', 'revisions', 'editor', 'author', 'thumbnail', 'post-formats' ),
    );

    register_post_type( 'event', $args );
}


add_action('init', 'theme_register_taxonomy');
function theme_register_taxonomy() {
	//Create Taxonomy Advertises
	$labels = array(
        'name' => __('Advertise Categories'),
        'singular_name' => __('Advertise Categories'),
        'search_items' => __('Search Advertise Categories'),
        'popular_items' => __('Popular Advertise Categories'),
        'all_items' => __('All Advertise Categories'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Advertise Categories'),
        'update_item' => __('Update Advertise Categories'),
        'add_new_item' => __('Add Advertise Categories'),
        'new_item_name' => __('New Advertise Categories'),
        'menu_name' => __('Advertise Categories'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'advertise-categories'),
    );

    register_taxonomy('advertise-categories', array('advertise'), $args);
    //Create Taxonomy Advertises
    $labels = array(
        'name' => __('Event Categories'),
        'singular_name' => __('Event Categories'),
        'search_items' => __('Search Event Categories'),
        'popular_items' => __('Popular Event Categories'),
        'all_items' => __('All Event Categories'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Event Categories'),
        'update_item' => __('Update Event Categories'),
        'add_new_item' => __('Add Event Categories'),
        'new_item_name' => __('New Event Categories'),
        'menu_name' => __('Event Categories'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'event-categories'),
    );

    register_taxonomy('event-categories', array('event'), $args);
}

function thenatives_upload_media ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'thenatives_upload_media');