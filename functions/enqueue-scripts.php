<?php
function site_scripts() {
	define( PORTALCZN_VERSION, '1.0.0' );

	global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

	// Adding scripts file in the footer
	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/app.js', array(), PORTALCZN_VERSION, true );

	// Register main stylesheet
	wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/app.css', array(), PORTALCZN_VERSION, 'all' );
}

add_action( 'wp_enqueue_scripts', 'site_scripts', 999 );