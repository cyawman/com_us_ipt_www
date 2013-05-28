<?php get_header(); ?>
<div class="container_12" id="page_container">
    <div id="single_page_container">
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
                        <time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('F jS, Y') ?>  by <?php the_author_posts_link(); ?> </time>
                    </header>
        			<div class="entry">
        				<?php the_content('Read the rest of this entry &raquo;'); ?>
        			</div>
        			<footer class="postmetadata alt">
                        <p>This post is filed under <?php the_category(', ') ?>.</p>
                        <p>You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.</p>
                        <p>
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
    						<?php }?>
                        </p>
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
      </div>
      <nav class="grid_4 sidebar_container">
        <?php get_sidebar(); ?>
      </nav>
    </div>
</div>
<?php get_footer(); ?>