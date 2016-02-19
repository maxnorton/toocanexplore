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
	      'taxonomies' => array('category', 'post_tag'),
	      'supports' => array('title', 'editor', 'thumbnail'),
	      'public' => true,
	      'publicly_queryable' => true,
	      'query_var' => true,
	      'has_archive' => true,
	      'rewrite' => array('slug' => 'shop'),
	    )
	  );
  		add_theme_support( 'post-thumbnails', array( 'tce_book' ) );
	}
	function tce_add_custom_types( $query ) {
	  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
	    $query->set( 'post_type', array(
	     'post', 'nav_menu_item', 'tce_book'
			));
		  return $query;
		}
	}
	add_filter( 'pre_get_posts', 'tce_add_custom_types' );
?>