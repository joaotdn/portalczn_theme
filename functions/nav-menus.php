<?php

function portalczn_register_nav_menus() {
	register_nav_menus( array(
		'primary_menu' => __( 'Menu Principal', 'text_domain' ),
	) );
}

add_action( 'after_setup_theme', 'portalczn_register_nav_menus', 0 );
