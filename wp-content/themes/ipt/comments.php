<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="comment alt" ';
?>
<section class="comment_container">
    <header>
        <h3><?php comments_number('No Comments', 'One Comment', '% Comments' );?> on &#8220;<?php the_title(); ?>&#8221;</h3>
        <a name="comments"></a>
    </header>
    <!-- You can start editing here. -->
    <?php if ($comments) : ?>

        <?php foreach ($comments as $comment) : ?>

            <article <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
                <header>
                    <cite><?php comment_author_link() ?> Says:</cite>
                    <time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></time>
                </header>
                <?php if ($comment->comment_approved == '0') : ?>
    			 <em>Your comment is awaiting moderation.</em>
    			<?php endif; ?>
    			<?php comment_text() ?>
            </article>

            <?php
        		/* Changes every other comment to a different class */
        		$oddcomment = ( empty( $oddcomment ) ) ? 'class="comment alt" ' : 'class="comment"';
        	?>

        <?php endforeach; ?>

    <?php else : // this is displayed if there are no comments so far ?>

    	<?php if ('open' == $post->comment_status) : ?>
    		<!-- If comments are open, but there are no comments. -->

    	 <?php else : // comments are closed ?>
    		<!-- If comments are closed. -->
    		<p class="nocomments">Comments are closed.</p>

    	<?php endif; ?>
    <?php endif; ?>

    <?php if ('open' == $post->comment_status) : ?>
        <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
            <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
        <?php else : ?>
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
                <fieldset>
                    <legend>Leave a Comment</legend>
                    <?php if ( $user_ID ) : ?>
                        <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
                    <?php else : ?>
                        <label for="author">Name <?php if ($req) echo "(required)"; ?></label>
                        <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" required />
                        <label for="email">Mail (will not be published) <?php if ($req) echo "(required)"; ?></label>
                        <input type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" required />
                        <label for="url">Website</label>
                        <input type="url" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
                    <?php endif; ?>
                    <label for="comment">Comment</label>
                    <textarea name="comment" id="comment" cols="70" rows="6" tabindex="4" required></textarea>
                    <br />
                    <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
                    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
                </fieldset>
                <?php do_action('comment_form', $post->ID); ?>
            </form>
        <?php endif; // If registration required and not logged in ?>
    <?php endif; // if you delete this the sky will fall on your head ?>
</section>
