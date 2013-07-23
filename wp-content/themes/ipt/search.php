<?php get_header(); ?>
<div class="container_12" id="page_container">
  <div class="grid_8">
    <?php if (have_posts()) : ?>
  		<?php while (have_posts()) : the_post(); ?>
  			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
  				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
  				<div class="entry">
  					<?php the_excerpt(); ?>
  					<p><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?> ">Continue reading about <?php the_title_attribute(); ?> &raquo;</a><p>
  				</div>
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
  <div class="grid_4 sidebar_container">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>