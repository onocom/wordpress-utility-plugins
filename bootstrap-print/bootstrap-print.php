<?php
/*
Plugin Name: BootstrapPrint
Plugin URI: http://onocom.net/
Description: Bootstrap print good.
Version: 1.0.0
Author: takashi ono
Author URI: http://onocom.net/
License: GPLv2 or later
*/

if( !is_admin() ) {
	wp_enqueue_style( 'bootstrap-print',  plugins_url('/bootstrap-print.css', __FILE__ ));
}
