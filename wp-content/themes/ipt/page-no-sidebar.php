<?php
/*
Template Name: Page w/o Sidebar
*/
?>
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
      <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        <div class="grid_12">
                            <header>
                                <h2 class="title"><?php the_title(); ?></h2>
                            </header>
                        </div>
                        <div class="entry">
                                <?php the_content('Read the rest of this entry &raquo;'); ?>
                        </div>
                    </article>
            <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>