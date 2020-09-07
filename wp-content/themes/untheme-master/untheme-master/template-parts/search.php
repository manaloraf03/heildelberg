<?php
/**
 * Template part for displaying posts
 */

?>
<?php	if(function_exists('the_custom_logo')){
			$site_logo =wp_get_attachment_image_src(get_theme_mod('custom_logo'));
		} 	
?>	

<article id="post-<?php the_ID(); ?>" class="entry">
<div class="container">
	<div class="media mt-5">
	  	<?php if ( has_post_thumbnail()) {
		   the_post_thumbnail('thumbnail', array( 'class'  => 'img-responsive' ));
		} else { ?>
		<img src="<?php echo $site_logo[0];?>" alt="<?php the_title(); ?>" width="150" height="150" />
	<?php } ?>
	  <div class="media-body pl-3">
	    <h5 class="mt-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	    <span>
		    <small>
		    	<i class="fa fa-user" aria-hidden="true"></i> <span> <?php echo get_the_author_meta('first_name').' '.get_the_author_meta('last_name'); ?> </span>  
		    	<i class="fa fa-calendar" aria-hidden="true"></i> <span> <?php echo get_the_date( ); ?>
		    	<i class="fa fa-comment" aria-hidden="true"></i> <?php echo get_comments_number(); ?></span>
		    </small><br/>
			<small><?php
					$postcats = get_the_category();
					if ($postcats) {
					  foreach($postcats as $cat) {
					    echo '<i class="fa fa-list" aria-hidden="true"></i><a href="'.get_category_link($cat->cat_ID).'" class="archive-link" target="_blank" > '. $cat->name.' </a> '; 
					  }
					}
				?>				
			</small><br />

			<small><?php
					$posttags = get_the_tags();
					if ($posttags) {
					  foreach($posttags as $tag) {
					    echo '<i class="fa fa-tag" aria-hidden="true"></i> <a href="'.get_tag_link($tag->term_id).'" class="archive-link" target="_blank" > '. $tag->name.' </a> '; 
					  }
					}
				?>				
			</small><br/>
			<small>
				<?php if( get_field('co-author') ): ?>  Co-Author (Custom): <?php the_field('co-author');  ?> <?php endif; ?>	
			</small>		
		</span>
	    <p><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>

	  </div>
	</div>
</div>
</article>