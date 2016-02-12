<?php
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {
	    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'custom_fonts', '//fonts.googleapis.com/css?family=Cagliostro' );
	}
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
	  register_post_type( 'tce_book',
	    array(
	      'labels' => array(
	        'name' => __( 'Books' ),
	        'singular_name' => __( 'Book' )
	      ),
	      'public' => true,
	      'has_archive' => false,
	    )
	  );
	}
?>