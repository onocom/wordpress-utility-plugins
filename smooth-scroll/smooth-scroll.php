<?php
/*
Plugin Name: SmoothScroll
Plugin URI: http://onocom.net/
Description: Smooth scroll for Anchor link.
Version: 1.0.0
Author: takashi ono
Author URI: http://onocom.net/
License: GPLv2 or later
*/

if( !is_admin() ) {
	wp_enqueue_script( 'smooth-scroll',  plugins_url('/js/jquery.smoothScroll.custom.js', __FILE__ ), array("jquery"));
}
