<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file. 
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

function rriley_enqueue_scripts() {
	if ( is_rtl() ) {
		wp_enqueue_style( 'generatepress-rtl', trailingslashit( get_template_directory_uri() ) . 'rtl.css' );
	}
	/* media queries style */
	wp_enqueue_style( 'rriley_media', trailingslashit(get_stylesheet_directory_uri() ) . '/style-mq.css' );
}
add_action( 'wp_enqueue_scripts', 'rriley_enqueue_scripts', 100 );

// Add square image size for Category Cover image
add_image_size( 'category-cover', 420, 420, true );

// Register the three useful image sizes for use in Add Media modal
add_filter( 'image_size_names_choose', 'rriley_custom_sizes' );
function rriley_custom_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'category-cover' => __( 'Category Cover' ),
	) );
}
