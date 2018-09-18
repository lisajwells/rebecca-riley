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