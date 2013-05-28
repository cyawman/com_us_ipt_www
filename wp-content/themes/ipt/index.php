<?php get_header(); ?>
<div class="container_12" id="page_container">
  <div class="grid_8">
    <?php if (have_posts()) : ?>
  		<?php while (have_posts()) : the_post(); ?>
  			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
  				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
  				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
  				<div class="entry">
  					<?php the_content('Read the rest of this entry &raquo;'); ?>
  				</div>
  				<p><?php edit_post_link('Edit', '', ' | '); ?></p>
  				<p class="postmetadata alt">
					<small>
						This entry was posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> and is filed under <?php the_category(', ') ?>.<br />
						You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed. <br />
						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.<br />
						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.<br />
						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.<br />
						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.<br />
						<?php } edit_post_link('Edit this entry.','',''); ?>

					</small>
				</p>
  			</div>
  		<?php endwhile; ?>
  		<?php comments_template(); ?>
  		<div class="navigation">
  			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
  			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
  		</div>
  	<?php else : ?>
  		<h2 class="center">Not Found</h2>
  		<p class="center">Sorry, but you are looking for something that isn't here.</p>
  		<?php get_search_form(); ?>
  	<?php endif; ?>
  </div>
  <div class="grid_4">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>