<?php

get_header(); ?>

<div class="container">
  <div class="span-24 first last">
    <h2>Innovative Tie Fashion Gallery</h2>
    <p>Entrepreneurs wearing Black Tie? Sure! If they deserve a night to shine, then let's take it all the way. However, entrepreneurs are always "innovating" so we expect a lot of innovation in their garb. Basic suit? Sure, but why stop there? We hope you put on your entrepreneurial fashion hat as well, and come up with something a little innovative, be it Silicon Valley casual, Boston proper, Austin techie or Midwest attitude. Bring it on and shine on the Orange Carpet with your friends.</p><br/>
  </div>
  <div class="first span-5">
    <?php
      $blackTieWalker = new BlackTieWalker_Nav_Menu;
      wp_nav_menu( array( 'container_class' => 'blackTie-menu', 'theme_location' => 'blackTie', 'walker' => $blackTieWalker) );
    ?>
  </div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="blackTie post span-17 last" id="post-<?php the_ID(); ?>">
      <?php the_post_thumbnail( array(670,447)  ); ?>


			<div class="entry">
			  <h2><?php the_title(); ?></h2>  			
			  <?php the_meta(); ?>

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
  			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
      <div class="clear"></div>

		</div>

		<?php endwhile; endif; ?>


</div>
<?php get_footer(); ?>
