<?php

// Theme support options
require_once( get_template_directory() . '/functions/theme-support.php' );

// Esxerpt config
require_once( get_template_directory() . '/functions/excerpt-config.php' );

// Register nav menus
require_once( get_template_directory() . '/functions/nav-menus.php' );

// Register scripts and stylesheets
require_once( get_template_directory() . '/functions/enqueue-scripts.php' );

// Config ACF
require_once( get_template_directory() . '/functions/acf-config.php' );

// Config Banners
require_once( get_template_directory() . '/functions/banners-config.php' );

// Get first Tag
require_once( get_template_directory() . '/functions/first-tag.php' );

// Get video thumb on Youtube
require_once( get_template_directory() . '/functions/get-video-thumb.php' );

// Get video ID on Youtube
require_once( get_template_directory() . '/functions/get-video-id.php' );

// Generate News Block
require_once( get_template_directory() . '/functions/news-block.php' );

// Custom post types
require_once( get_template_directory() . '/functions/custom-post-types.php' );

// Share post items
require_once( get_template_directory() . '/functions/get-share-items.php' );

// Searchs functions
require_once( get_template_directory() . '/functions/searchs.php' );

// Load more posts on category page
require_once( get_template_directory() . '/functions/more-news.php' );

// Load more videos on video page
require_once( get_template_directory() . '/functions/more-videos.php' );

// Show video on player after click
require_once( get_template_directory() . '/functions/show-video.php' );

// Popular views posts
require_once( get_template_directory() . '/functions/popular-views.php' );

// Custom page for Videos
add_filter( 'single_template', function ( $single_template ) {
	if ( has_category( 'videos' ) ) {
		$single_template = dirname( __FILE__ ) . '/single-videos.php';
	}
	return $single_template;
}, PHP_INT_MAX, 2 );
