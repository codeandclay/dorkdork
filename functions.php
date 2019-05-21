<?php
function dork_dork_enqueue_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), 1 );
}

if ( ! function_exists( 'dork_dork_setup' ) ) {
	function dork_dork_setup() {
		add_action( 'wp_enqueue_scripts', 'dork_dork_enqueue_scripts' );
	}
}

add_action( 'after_setup_theme', 'dork_dork_setup' );
