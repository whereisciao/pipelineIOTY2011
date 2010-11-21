<?php 
/*
Template Name: Splash Page
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

	<link href='<?php bloginfo('stylesheet_directory'); ?>/css/screen.css' media='screen, projection' rel='stylesheet' type='text/css' />
  <link href='<?php bloginfo('stylesheet_directory'); ?>/css/print.css' media='print' rel='stylesheet' type='text/css' />
	<link href='<?php bloginfo('stylesheet_directory'); ?>/js/fancybox/jquery.fancybox-1.3.3.css' media='screen, projection' rel='stylesheet' type='text/css' />
  <!--[if IE]>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style-ie.css" type="text/css" media="screen, projection">
  <![endif]-->  
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	
	<script type="text/javascript">
    $(document).ready(function() {
      $('.sponsors').cycle({ fx: 'scrollRight' });
      $("#trailer").fancybox({        
        'width': 895,
        'height': 495,
        'titleShow': false,
        'overlayOpacity': 0.8,
        'overlayColor': "#000",
        'type':  "iframe",
        'scrolling': "no",
        "padding": 10,
        "margin": 20
			}).click();			
    });
  </script>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">
		<div id="header" class="container">
      <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/header-logo.png" width="534" height="118" alt="Pipeline Innovator of the Year: The Entrepreneurs' Night To Shine" />
		</div>

<!-- Header END -->

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class("container") ?> id="post-<?php the_ID(); ?>">
						
			<div class="entry">
			  <div class="video">
				<?php
          $videos = get_post_custom_values("video");
          if(count($videos) > 0){
            foreach ( $videos as $key => $value ) {
              echo $value; 
            }            
          }
        ?>
        </div>
				<?php the_content(); ?>
			</div>
			
			<?php edit_post_link('Edit this entry','',''); ?>
			
		</div>

	<?php endwhile; endif; ?>
	
<?php get_footer(); ?>