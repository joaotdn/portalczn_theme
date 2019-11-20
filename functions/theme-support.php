<?php

// Adding WP Functions & Theme Support
function portalczn_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );

	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Custom sizes
	add_image_size( 'feature-medium', 236.66, 130.38, true );
	add_image_size( 'feature-slider', 337.98, 253.48, true );
	add_image_size( 'feature-category-big', 503.33, 282.31, true );
	add_image_size( 'videos-component-small', 136, 120, true );

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

} /* end theme support */

add_action( 'after_setup_theme', 'portalczn_theme_support' );

function getThumbUrl($size) {
	global $post;
	if(!$size || $size == null) {
		$size = 'full';
	}
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
	echo $thumb[0];
}