<?php 

get_header(); ?>

<div class="container">
  <div class="first span-6">
    <h2>Black Tie Sidebar</h2>
    <p>Get all Black Tie Pages</p>
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
