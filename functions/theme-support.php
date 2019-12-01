<?php

function portalczn_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );

	// Default thumbnail size
	set_post_thumbnail_size( 125, 125, true );

	// Custom sizes
	add_image_size( 'feature-medium', 236.66, 130.38, true );
	add_image_size( 'feature-xsmall', 100, 56.47, true );
	add_image_size( 'feature-slider', 337.98, 253.48, true );
	add_image_size( 'feature-category-big', 503.33, 282.31, true );
	add_image_size( 'videos-component-small', 136, 120, true );
	add_image_size( 'gallery-home-thumb', 770, 400, true );
	add_image_size( 'schedule-thumb', 368.98, 176, true );

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );

	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );

	// Add HTML5 Support
	add_theme_support( 'html5',
		array(
			'search-form',
			'gallery',
		)
	);

	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	// Adding post format support
	add_theme_support( 'post-formats',
		array(
			'gallery',           // gallery of images
			'video',             // video
		)
	);

	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'portalczn_theme_support', 1200 );

	// Hide admin bar
	show_admin_bar( false );

}

add_action( 'after_setup_theme', 'portalczn_theme_support' );