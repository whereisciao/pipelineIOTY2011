<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

	<link href='<?php bloginfo('stylesheet_directory'); ?>/css/screen.css' media='screen, projection' rel='stylesheet' type='text/css' />
  <link href='<?php bloginfo('stylesheet_directory'); ?>/css/print.css' media='print' rel='stylesheet' type='text/css' />
  <!--[if IE]>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" type="text/css" media="screen, projection">
  <![endif]-->  
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
	
	<script type="text/javascript">
    $(document).ready(function() {
      $('.sponsors').cycle({ fx: 'scrollRight' });
      $('.slider').cycle({ fx: 'scrollLeft', pager: '#sliderNav' });      
    });
  </script>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">
		<div id="header" class="container">
		  <div id="masthead">
  		  <a href="<?php echo get_option('home'); ?>/">
          <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/header-logo.png" width="534" height="118" alt="Pipeline Innovator of the Year: The Entrepreneurs' Night To Shine" />
        </a>
        <p class="horizontal-border"></p>
        <p class="tagline">
          <span class="tagline-live">Live</span>
          <span class="tagline-date">January <span class="tagline-day">27</span></span>
        </p>
      </div>
      <div class="clearfix"></div>
      <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>  		
		</div>
		

