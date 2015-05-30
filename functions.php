<?php
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {
	    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	}
	function google_fonts() {
		$query_args = array(
		'family' => 'Cagliostro'
		'subset' => 'latin,latin-ext',
		);
		wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
	}
	add_action('wp_enqueue_scripts', 'google_fonts'); 
?>