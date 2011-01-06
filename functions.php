<?php

include_once(TEMPLATEPATH.'/classes.php');

add_action('after_setup_theme', 'pipelineioty_setup');
add_action('init', 'create_black_tie_post_type');
add_action('init', 'create_sponsor_post_type');
add_theme_support( 'post-thumbnails' );

if( ! function_exists( 'pipelineioty_setup' ) ):
function pipelineioty_setup() {
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
    'primary' => __( 'Primary Navigation', 'pipelineioty' ),
    'blackTie' => __( 'Black Tie Navigation', 'pipelineioty' )
    
  ) );
}
endif;

if( ! function_exists( 'create_black_tie_post_type' ) ):
function create_black_tie_post_type(){
  // Fire this during init
  register_post_type('blackTie', array(
  	'label' => __('Black Ties'),
  	'singular_label' => __('Black Tie'),
  	'public' => true,
  	'show_ui' => true,
  	'capability_type' => 'post',
  	'hierarchical' => true,
  	'rewrite' => false,
  	'query_var' => false,
  	'supports' => array('title', 'custom-fields', 'page-attributes', 'thumbnail', 'editor')
  ));
}
endif;

if( ! function_exists( 'blackTieGallery_handler' )):
function blackTieGallery_handler($atts, $content=null, $code=""){
  $args = shortcode_atts( array('width' => '300', 'posts_per_page' => 10), $atts );

  $loop = new WP_Query( array( 'post_type' => 'blackTie', 'posts_per_page' => $args["posts_per_page"] ) );
  $items = "";
  while ( $loop->have_posts() ) : $loop->the_post();
    $thumbnail = get_the_post_thumbnail(get_the_id(), 'thumbnail', 
      array( 
        'alt'   => get_the_title(),
        'title' => get_the_title()));
    $items .= "<li><a href='" . get_permalink()."'>". $thumbnail . "</a></li>";
  endwhile;
  
  if($atts)
  $gallery = "<ul class='blackTieGallery' style='width:".$args["width"]."px;'>";
  $gallery .= $items;
  $gallery .= "</ul><div class='clear'/>";
  
  return $gallery;
}
add_shortcode('blackTieGallery', 'blackTieGallery_handler');

endif;

if( ! function_exists('create_sponsor_post_type')):
function create_sponsor_post_type(){
  register_post_type('sponsor', array(
  	'label' => __('Sponsors'),
  	'singular_label' => __('Sponsor'),
  	'public' => true,
  	'show_ui' => true,
  	'capability_type' => 'post',
  	'hierarchical' => true,
  	'rewrite' => false,
  	'query_var' => false,
  	'supports' => array('title', 'custom-fields', 'page-attributes', 'thumbnail')
  ));
}
endif;

if( ! function_exists( 'sponsorGallery_handler' )):
function sponsorGallery_handler($atts, $content=null, $code=""){
  $args = shortcode_atts( array('width' => '300', 'posts_per_page' => -1), $atts );

  $loop = new WP_Query( array( 'post_type' => 'sponsor', 'posts_per_page' => $args["posts_per_page"] ) );
  $items = "";
  while ( $loop->have_posts() ) : $loop->the_post();
    $thumbnail = get_the_post_thumbnail(get_the_id(), 'thumbnail', 
      array( 
        'alt'   => get_the_title(),
        'title' => get_the_title()));
    $items .= "<li><a href='" . get_permalink()."'>". $thumbnail . "</a></li>";
  endwhile;
  
  if($atts)
  $gallery = "<ul class='sponsorGallery' style='width:".$args["width"]."px;'>";
  $gallery .= $items;
  $gallery .= "</ul><div class='clear'/>";
  
  return $gallery;
}
add_shortcode('sponsorGallery', 'sponsorGallery_handler');

endif;
?>