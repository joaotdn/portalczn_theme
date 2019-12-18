<?php
function site_scripts() {
	global $wp_query;

	define( PORTALCZN_VERSION, '1.0.68' );

	$array_params = array(
		'ajaxurl'      => site_url() . '/wp-admin/admin-ajax.php',
		'posts'        => json_encode( $wp_query->query_vars ),
		'current_page' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
		'max_page'     => $wp_query->max_num_pages
	);

	// JS
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/5ef691494b.js', array(), PORTALCZN_VERSION, false );

	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/app.js', array(), PORTALCZN_VERSION, true );

//	wp_enqueue_script( 'jquery-migrate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js', array('site-js'), PORTALCZN_VERSION, true );

	wp_enqueue_script( 'ajax-requests', get_template_directory_uri() . '/assets/js/ajax-loaders.js', array('site-js'), PORTALCZN_VERSION, true );
	wp_localize_script( 'ajax-requests', 'ajax_params', $array_params );

	// CSS
	wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/app.css', array(), PORTALCZN_VERSION, 'all' );

	wp_enqueue_style( 'site-fonts-css', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto:400,700,900&display=swap', array(), PORTALCZN_VERSION, 'all' );
}

add_action( 'wp_enqueue_scripts', 'site_scripts', 999 );