<?php 
/*
Template Name: Movie Page
*/
?>
<!-- Header BEGIN -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php bloginfo('name'); ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  
	<?php wp_head(); ?>
	
	<style type="text/css" media="screen">
	  body{
	    margin: 0;
	    padding: 0;
	    background: white url(/wp-content/themes/pipelineitoy/images/loading-background.gif) no-repeat 365px 231px;
	  }
	  p {display: none;}    
	</style>
	
</head>

<body <?php body_class(); ?>>
	
<!-- Header END -->

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  	<?php the_content(); ?>
	<?php endwhile; endif; ?>
	
</body></html>