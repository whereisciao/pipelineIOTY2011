<?php get_header(); ?>
    <!-- Category IOTY News -->
		<?php if (have_posts()) : ?>

      <div class="container">
      	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      		<div class="post span-24 first last" id="post-<?php the_ID(); ?>">
        		

      			<div class="entry span-14 first">

      				<?php the_content(); ?>

      				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

        			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

      			</div>
      			<div class="featured-image span-8 last">
      			  <?php the_post_thumbnail(array(300, 200)); ?>              
    			  </div>
      		</div>

      		<?php endwhile; endif; ?>

      </div>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>

<?php get_footer(); ?>
