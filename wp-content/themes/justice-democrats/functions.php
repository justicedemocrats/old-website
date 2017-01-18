<?php

// --------------------------------
// Required
// --------------------------------

// Environment Management
include_once('functions/environment.php');

// Enqueue Scripts
include_once('functions/wordpress/enqueue-scripts.php');

// Core Registrations
include_once('functions/core/custom-post-types.php');
include_once('functions/core/custom-taxonomies.php');
include_once('functions/core/custom-sidebars.php');
include_once('functions/core/custom-menus.php');
// include_once('functions/core/custom-crops.php');

// ACF Options
include_once('functions/wordpress/acf-options.php');

// Partials Include Function
include_once('functions/wordpress/get-partial-path.php');


// --------------------------------
// Options
// --------------------------------

// Utility Functions
include_once('functions/wordpress/utility.php');

// Nav Walker
include_once('functions/site/walker-nav.php');

// Format Styles
include_once('functions/site/format-styles.php');

// Add Admin Menu Seperators
// include_once('functions/wordpress/admin-sidebar-separators.php');

// Disable Post Type Support
include_once('functions/wordpress/disable-post-type-support.php');


function jdems_button( $atts, $content = "" ) {
	return "<a href=\"{$atts['link']}\" class=\"button button-padded\">$content</a>";
}
add_shortcode( 'button', 'jdems_button' );