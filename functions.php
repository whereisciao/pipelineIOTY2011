<?php


add_action('after_setup_theme', 'pipelineioty_setup');

if( ! function_exists( 'pipelineioty_setup' ) ):
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ):
	   wp_deregister_script('jquery');

	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);

	   wp_enqueue_script('jquery');
	   wp_enqueue_script('jquery-cycle', get_bloginfo( 'template_directory' ) . "/js/jquery.cycle.all.min.js", array(), '0.1');   
	   wp_enqueue_script('jquery-fancybox', get_bloginfo( 'template_directory' ) . "/js/fancybox/jquery.fancybox-1.3.3.pack.js", array(), '0.1');   
	endif;
	
	// Clean up the <head>
	function removeHeadLinks() {
  	remove_action('wp_head', 'rsd_link');
  	remove_action('wp_head', 'wlwmanifest_link');
  }
  add_action('init', 'removeHeadLinks');
  remove_action('wp_head', 'wp_generator');
    
  if (function_exists('register_sidebar')) {
  	register_sidebar(array(
  		'name' => 'Sidebar Widgets',
  		'id'   => 'sidebar-widgets',
  		'description'   => 'These are widgets for the sidebar.',
  		'before_widget' => '<div id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</div>',
  		'before_title'  => '<h2>',
  		'after_title'   => '</h2>'
  	));
  }

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'pipelineioty' )
	) );


endif;
?>