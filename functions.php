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

add_filter( 'next_posts_link_attributes', 'next_link_attributes' );
add_filter( 'previous_posts_link_attributes', 'previous_link_attributes' );

function previous_link_attributes() {
	return 'class="previous"';
}

function next_link_attributes() {
	return 'class="next"';
}
