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
    		<form id="contact-form" action="" method="post">
                  <fieldset>
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" size="25" required />
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" size="25" required />
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" size="25" />
                    <label for="email">Email</label>
                    <input type="email" name="email" size="25" required />
                    <label for="message">Message</label>
                    <textarea name="message" cols="70" rows="6" required></textarea>
                    <br />
                    <input type="submit" name="submit" value="Send" size="20"  />
                  </fieldset>
                </form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $('form#contact-form').attr('action', '/wp-content/themes/ipt/fragments/send-contact-form.php');
});
</script>
