<?php
/*
Plugin Name: WordPress setup
Description: Setup local dev WordPress (creates custom post type 'book', custom taxonomy 'genre' and contains some utility functions).
Author: lando1982
Author URI: http://www.andrealandonio.it
Version: 1.0.0
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

// Path missing "__DIR__" constant on environment
if ( ! defined( '__DIR__' ) ) {
    define( '__DIR__', dirname( __FILE__ ) );
}

/**
 * Register book post type
 */
function wordpress_setup_cpt_book_init() {
    $args = array(
        'labels' => array(
            'name' => 'Books',
            'singular_name' => 'Book',
            'menu_name' => 'Books',
            'name_admin_bar' => 'Book',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Book',
            'new_item' => 'New Book',
            'edit_item' => 'Edit Book',
            'view_item' => 'View Book',
            'all_items'  => 'All Books',
            'search_items' => 'Search Books',
            'parent_item_colon' => 'Parent Books:',
            'not_found' => 'No books found.',
            'not_found_in_trash' => 'No books found in Trash.'
        ),
        'description' => 'Description',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'book' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'excerpt', 'comments' )
    );

    register_post_type( 'book', $args );
}
add_action( 'init', 'wordpress_setup_cpt_book_init' );

/**
 * Register genre taxonomy type
 */
function wordpress_setup_tax_genre_init() {
    register_taxonomy(
        'genre',
        array('post', 'book'),
        array(
            'label' => 'Genre',
            'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'wordpress_setup_tax_genre_init' );

/**
 * Test daily logo
 */
function wordpress_setup_test_daily_logo() {
    $is_mobile = false;
    if ($is_mobile) {
        do_action('daily_logo_show_today_alternative');
    }
    else {
        do_action('daily_logo_show_today');
    }
}

/**
 * Disable admin notices
 */
function wordpress_setup_disable_admin_notices() {
    remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action( 'admin_menu','wordpress_setup_disable_admin_notices' );

// Disable automatic plugins updates
//add_filter( 'auto_update_plugin', '__return_false' );

// Disable automatic themes updates
//add_filter( 'auto_update_theme', '__return_false' );
