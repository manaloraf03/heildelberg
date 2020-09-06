<?php
/*
The Default Loop (used by index.php and category.php)
=====================================================

If you require only post excerpts to be shown in index and category pages, then use the [---more---] line within blog posts.

If you require different templates for different post types, then simply duplicate this template, save the copy as, e.g. "content-aside.php", and modify it the way you like it. (The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)

Alternatively, notice that index.php, category.php and single.php have a post_class() function-call that inserts different classes for different post types into the <section> tag (e.g. <section id="" class="format-aside">). Therefore you can simply use e.g. .format-aside {your styles} in css/companyname.css style the different formats in different ways.
*/
?>
<?php tha_content_before(); ?>
<?php tha_content_top(); ?>
<!-- <?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$wp_query = new WP_Query("category_name=Blog&paged=$paged");
?> -->
<?php if(have_posts()): while(have_posts()): the_post();?>
    <?php tha_entry_before(); ?>
    <article role="article" id="post_<?php the_ID()?>" class="blogarticlelist <?php $cats=get_the_category(); echo $cats[0]->slug; ?>">
        <header>
            <a href="<?php the_permalink(); ?>"><h4 class="blogtitle"><?php the_title()?></h4></a>

            <ul class="bloglist list-inline">
                <li class="blogauthor"><?php _e('By', 'companyname'); echo " "; the_author() ?></li>
                <li><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; <?php echo get_the_date(); ?></li>
                <li><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp; <?php comments_popup_link(__('0', 'companyname'), '1', '%'); ?> <?php _e('Comments', 'companyname'); ?></li>
            </ul>
            <?php tha_entry_top(); ?>
        </header>
        <div class="blogimg"><?php the_post_thumbnail(); ?></div>
        <?php
            $content = apply_filters('the_content', $post->post_content); 
            $customExcerpt = wp_trim_words( $content, $num_words = 60 );
        ?>
        <div class="space"></div>
        <div class="blogdescription"><?php echo $customExcerpt; ?></div>
        <div class="space"></div>
        <a href="<?php the_permalink(); ?>" class="btn blogbutton">Read More</a>
    </article>
    <?php tha_entry_bottom(); ?>
<?php endwhile; ?>
<?php tha_entry_after(); ?>

<?php if ( function_exists('companyname_pagination') ) { companyname_pagination(); } else if ( is_paged() ) { ?>
  <ul class="blogpagination pagination">
    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'companyname')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next', 'companyname') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>
<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
