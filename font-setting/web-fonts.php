<?php
/*
Plugin Name: FontSetting
Plugin URI: http://onocom.net/
Description: font setting plugin.
Version: 1.0.0
Author: takashi ono
Author URI: http://onocom.net/
License: GPLv2 or later
*/

if( !is_admin() ) {
	wp_enqueue_style( 'noto-sans',  "http://fonts.googleapis.com/earlyaccess/notosansjapanese" );
	wp_enqueue_style( 'font-setting',  plugins_url('/body-font.css', __FILE__ ));
}
