<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post span-13 first" id="post-<?php the_ID(); ?>">

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>

		<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
