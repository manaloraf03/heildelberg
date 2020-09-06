<?php
/*
The Single Posts Loop
=====================
*/
?> 
<?php tha_content_before(); ?>
<?php tha_content_top(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php tha_entry_before(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h2 class="blogtitle"><?php the_title()?></h2>
            <ul class="bloglist list-inline">
                <li class="author"><?php _e('By', 'companyname'); echo " "; the_author() ?></li>
                <li><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; <?php echo get_the_date(); ?></li>
                <li><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp; <?php comments_popup_link(__('0', 'companyname'), '1', '%'); ?> <?php _e('Comments', 'companyname'); ?></li>
                <li><i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php _e('Category', 'companyname'); ?>: <?php the_category(', ') ?></li>
            </ul>
            <?php tha_entry_top(); ?>
        </header>
        <div class="blogimg"><?php the_post_thumbnail(); ?></div>
        <div class="space"></div>
        <div class="blogdescription"><?php the_content()?></div>
        <div class="space"></div>
        <?php wp_link_pages(); ?>
        <?php tha_entry_bottom(); ?>
    </article>
<?php comments_template('/includes/loops/comments.php'); ?>
<?php tha_entry_bottom(); ?>
<?php endwhile; ?>
<?php tha_entry_after(); ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>
