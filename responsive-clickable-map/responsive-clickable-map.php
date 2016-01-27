<?php
/*
Plugin Name: ResponsiveClickableMap
Plugin URI: http://onocom.net/
Description: ResponsiveClickableMap.
Version: 1.0.0
Author: takashi ono
Author URI: http://onocom.net/
License: GPLv2 or later
*/

if( !is_admin() ) {
	wp_enqueue_script( 'responsive-clickable-map',  plugins_url('/rwd-image-maps/jquery.rwdImageMaps.min.js', __FILE__ ), array("jquery"));
	wp_enqueue_script( 'responsive-clickable-map-application',  plugins_url('/application.js', __FILE__ ), array("responsive-clickable-map"));
}
