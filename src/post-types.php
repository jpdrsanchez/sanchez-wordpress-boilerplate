<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Post Types
 * ------------------------------------------------------------------------
 * This file is for registering your theme post types. Custom post types
 * allow users to easily create and manage various types of content.
 */

if ( ! function_exists( 'sanchez_register_book_post_type' ) ) {
	/**
	 * Registers a `book` custom post type.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function sanchez_register_book_post_type() {
		register_post_type(
			'book', array(
				'public'      => true,
				'supports'    => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
				'description' => __( 'Collection of books.' ),
				'labels'      => array(
					'name'               => _x( 'Books', 'post type general name' ),
					'singular_name'      => _x( 'Book', 'post type singular name' ),
					'menu_name'          => _x( 'Books', 'admin menu' ),
					'name_admin_bar'     => _x( 'Book', 'add new on admin bar' ),
					'add_new'            => _x( 'Add New', 'book' ),
					'add_new_item'       => __( 'Add New Book' ),
					'new_item'           => __( 'New Book' ),
					'edit_item'          => __( 'Edit Book' ),
					'view_item'          => __( 'View Book' ),
					'all_items'          => __( 'All Books' ),
					'search_items'       => __( 'Search Books' ),
					'parent_item_colon'  => __( 'Parent Books: ' ),
					'not_found'          => __( 'No books found.' ),
					'not_found_in_trash' => __( 'No books found in Trash.' ),
				),
			)
		);
	}
}
add_action( 'init', 'sanchez_register_book_post_type' );