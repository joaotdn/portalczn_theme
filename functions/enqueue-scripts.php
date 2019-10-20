<?php
function site_scripts() {
	define( PORTALCZN_VERSION, '1.0.2' );

	global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

	// WebIcons
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/5ef691494b.js', array(), PORTALCZN_VERSION, true );

	// Adding scripts file in the footer
	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/app.js', array(), PORTALCZN_VERSION, true );

	wp_enqueue_script( 'site-js-wheather', get_template_directory_uri() . '/assets/js/openWheather.js', array('site-js'), PORTALCZN_VERSION, true );

	wp_enqueue_script( 'site-js-cotations', get_template_directory_uri() . '/assets/js/quotations.js', array('site-js'), PORTALCZN_VERSION, true );

	// Register main stylesheet
	wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/app.css', array(), PORTALCZN_VERSION, 'all' );

	// Register fonts
	wp_enqueue_style( 'site-fonts-css', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto:400,700,900&display=swap', array(), PORTALCZN_VERSION, 'all' );
}

add_action( 'wp_enqueue_scripts', 'site_scripts', 999 );