<?php
/**
 * Theme functions file.
 *
 * This file is used to bootstrap the theme.
 *
 */

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'exhale-finkom', get_template_directory_uri() . '/assets/css/theme.css' );
}, 15 );
