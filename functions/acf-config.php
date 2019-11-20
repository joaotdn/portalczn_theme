<?php
include_once( get_stylesheet_directory() . '/plugins/acf/acf.php' );

define( 'USE_LOCAL_ACF_CONFIGURATION', true ); // apenas conf. local
define( 'ACF_LITE', false );

add_filter( 'acf/settings/path', 'plandd_acf_path' );
function plandd_acf_path( $path ) {
	// update path
	$path = get_stylesheet_directory() . '/plugins/acf/';

	// return
	return $path;
}

add_filter( 'acf/settings/dir', 'plandd_acf_dir' );
function plandd_acf_dir( $dir ) {
	// update path
	$dir = get_stylesheet_directory_uri() . '/plugins/acf/';

	// return
	return $dir;
}

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => 'Opções gerais',
		'menu_title' => 'Portal CZN',
		'menu_slug'  => 'opcoes-gerais',
		'capability' => 'edit_posts',
		'redirect'   => false
	) );
	acf_add_options_sub_page( array(
		'page_title'  => 'Registo de banners',
		'menu_title'  => 'Publicidades',
		'parent_slug' => 'opcoes-gerais',
	) );
	acf_add_options_sub_page( array(
		'page_title'  => 'Página principal',
		'menu_title'  => 'Página principal',
		'parent_slug' => 'opcoes-gerais',
	) );
	acf_add_options_sub_page( array(
		'page_title'  => 'Rádios online',
		'menu_title'  => 'Rádios',
		'parent_slug' => 'opcoes-gerais',
	) );
}