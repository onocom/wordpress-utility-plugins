<?php
/*
Plugin Name: The OWL Carousel
Plugin URI:
Description: The OWL Carousel is easy use owl.carousel.js .
Version: 1.0.0
Author:
Author URI:
License: GPLv2 or later
*/

if( !is_admin() ) {
	wp_enqueue_style(  'owl-carousel-css',  plugins_url('/owl-carousel/owl.carousel.css', __FILE__ ));
	wp_enqueue_style(  'owl-carousel-css',  plugins_url('/owl-carousel/owl.theme.css', __FILE__ ));
	wp_enqueue_script( 'owl-carousel-js',  plugins_url('/owl-carousel/owl.carousel.min.js', __FILE__ ), array( 'jquery' ) );
	wp_enqueue_script( 'the-owl-carousel',  plugins_url('/the-owl-carousel.js', __FILE__ ), array( 'owl-carousel-js' ) );
}
