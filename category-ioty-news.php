<?php get_header(); ?>
    <!-- Category IOTY News -->
		<?php if (have_posts()) : ?>

      <div class="container">
      	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      		<div class="post span-24 first last" id="post-<?php the_ID(); ?>">
        		

      			<div class="entry">

      				<?php the_content(); ?>

      				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

      			</div>

      			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

      		</div>

      		<?php endwhile; endif; ?>

      </div>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>

<?php get_footer(); ?>
