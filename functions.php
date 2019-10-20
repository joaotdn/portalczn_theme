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
