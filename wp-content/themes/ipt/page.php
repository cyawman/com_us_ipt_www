<?php get_header(); ?>
<div class="container_12" id="page_container">
    <div id="page_page_container">
      <nav class="grid_12 breadcrumb_container">
        <ul>
        <?php if(function_exists('bcn_display'))
        {
            bcn_display_list();
        }?>
        </ul>
      </nav>
      <div class="grid_8">
        <?php if (have_posts()) : ?>
      		<?php while (have_posts()) : the_post(); ?>
      			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <header>
                        <h2 class="title"><?php the_title(); ?></h2>
                    </header>
      				<div class="entry">
      					<?php the_content('Read the rest of this entry &raquo;'); ?>
      				</div>
      			</article>
      		<?php endwhile; ?>
      	<?php else : ?>
      	<?php endif; ?>
      </div>
      <nav class="grid_4 sidebar_container">
        <?php get_sidebar(); ?>
      </nav>
    </div>
</div>
<?php get_footer(); ?>