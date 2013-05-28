<?php get_header(); ?>
<div class="container_12" id="page_container">
    <div id="category_page_container">
      <nav class="grid_12 breadcrumb_container">
        <ul>
        <?php if(function_exists('bcn_display'))
        {
            bcn_display_list();
        }?>
        </ul>
      </nav>
      <article class="grid_8">
        <header>
            <h2><?php printf( __( 'Category Archives: %s', 'twentyeleven' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h2>
        </header>
      
        <?php if (have_posts()) : ?>
      		<?php while (have_posts()) : the_post(); ?>
      			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <header>
                        <h3 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?> "><?php the_title(); ?></a></h3>
                        <time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </time>
                    </header>
        			<div class="entry">
        				<?php the_excerpt(); ?>
        				<p><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?> ">Continue reading about <?php the_title_attribute(); ?> &raquo;</a></p>
        			</div>
        			<footer>
                        <p>Category: <?php the_category(', ') ?> | Comments: <a href="<?php the_permalink() ?>#comments" title="<?php the_title_attribute(); ?> "><?php comments_number('0', '1', '%');?></a></p>
        			</footer>
      			</article>
      		<?php endwhile; ?>
      		<?php comments_template(); ?>
      		<nav>
      			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
      			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
      		</nav>
      	<?php else : ?>
      	<?php endif; ?>
      </article>
      <nav class="grid_4 sidebar_container">
        <?php get_sidebar(); ?>
      </nav>
    </div>
</div>
<?php get_footer(); ?>