<?php 

get_header(); ?>

<div class="container">
  <div class="span-24 first last">
    <h2>Black Tie Fashion Gallery</h2>    
  </div>
  <div class="first span-6">
    <?php wp_nav_menu( array( 'container_class' => 'blackTie-menu', 'theme_location' => 'blackTie' ) ); ?>  		
  </div>
  
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	  
		<div class="blackTie post span-17 prepend-1 last" id="post-<?php the_ID(); ?>">		  
      <?php the_post_thumbnail(  ); ?> 		    
		  
			<h2><?php the_title(); ?></h2>

			<div class="entry">
			  <?php the_meta(); ?>
			  
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>

		<?php endwhile; endif; ?>
		
		
</div>
<?php get_footer(); ?>
