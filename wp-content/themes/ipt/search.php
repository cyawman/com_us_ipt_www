<?php get_header(); ?>
<div id="content-wrapper">
  <div id="content" class="narrowcolumn" role="main">
  	<?php if (have_posts()) : ?>
  		<?php while (have_posts()) : the_post(); ?>
  			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
  				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
  				<div class="entry">
  					<?php the_excerpt(); ?>
  					<p><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?> ">Continue reading about <?php the_title_attribute(); ?> &raquo;</a><p>
  				</div>
  				<p><?php edit_post_link('Edit', '', ' | '); ?></p>
  				
  			</div>
  		<?php endwhile; ?>
  		<?php comments_template(); ?>
  		<div class="navigation">
  			<div class="alignleft"><?php next_posts_link('&laquo; Older Articles') ?></div>
  			<div class="alignright"><?php previous_posts_link('Newer Articles &raquo;') ?></div>
  		</div>
  	<?php else : ?>
  		<h2 class="center">Not Found</h2>
  		<p class="center">Sorry, but you are looking for something that isn't here.</p>
  		<?php get_search_form(); ?>
  	<?php endif; ?>
  </div>
  <div id="sidebar">
    <?php get_sidebar(); ?>
  </div>
  <div class="clr"></div>
</div>
<?php get_footer(); ?>