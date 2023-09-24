<?php
/**
 * Plugin Name: Custom Portfolio Post Type
 * Description: Adds a custom portfolio post type and skills taxonomy to WordPress.
 * Version: 1.0
 * Author: Joseph Jordan
 */

// Register Custom Post Type
function custom_portfolio_post_type() {
    $labels = array(
        'name'                  => _x( 'Portfolio', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Portfolio', 'text_domain' ),
        'name_admin_bar'        => __( 'Portfolio', 'text_domain' ),
        'archives'              => __( 'Portfolio Archives', 'text_domain' ),
        'attributes'            => __( 'Portfolio Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Portfolio:', 'text_domain' ),
        'all_items'             => __( 'All Portfolio Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Portfolio Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Portfolio Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Portfolio Item', 'text_domain' ),
        'update_item'           => __( 'Update Portfolio Item', 'text_domain' ),
        'view_item'             => __( 'View Portfolio Item', 'text_domain' ),
        'view_items'            => __( 'View Portfolio Items', 'text_domain' ),
        'search_items'          => __( 'Search Portfolio Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into Portfolio item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Portfolio item', 'text_domain' ),
        'items_list'            => __( 'Portfolio items list', 'text_domain' ),
        'items_list_navigation' => __( 'Portfolio items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Portfolio items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Portfolio', 'text_domain' ),
        'description'           => __( 'Portfolio items', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'skills' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'rewrite'               => array( 'slug' => 'portfolio' ),
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'custom_portfolio_post_type', 0 );

// Register Custom Taxonomy
function custom_portfolio_skills_taxonomy() {
    $labels = array(
        'name'                       => _x( 'Skills', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Skill', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Skills', 'text_domain' ),
        'all_items'                  => __( 'All Skills', 'text_domain' ),
        'parent_item'                => __( 'Parent Skill', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Skill:', 'text_domain' ),
        'new_item_name'              => __( 'New Skill Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Skill', 'text_domain' ),
        'edit_item'                  => __( 'Edit Skill', 'text_domain' ),
        'update_item'                => __( 'Update Skill', 'text_domain' ),
        'view_item'                  => __( 'View Skill', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate skills with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove skills', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Skills', 'text_domain' ),
        'search_items'               => __( 'Search Skills', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No skills', 'text_domain' ),
        'items_list'                 => __( 'Skills list', 'text_domain' ),
        'items_list_navigation'      => __( 'Skills list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'skills', array( 'portfolio' ), $args );
}
add_action( 'init', 'custom_portfolio_skills_taxonomy', 0 );

?>
