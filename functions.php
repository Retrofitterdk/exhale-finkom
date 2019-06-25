<?php
/**
 * Theme functions file.
 *
 * This file is used to bootstrap the theme.
 *
 */

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'exhale-finkom', get_stylesheet_directory_uri() . '/assets/css/theme.css', false, '1.0', 'all' );
}, 15 );

require_once( get_stylesheet_directory(). '/inc/customizer.php' );