<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" class="entry">
<div class="container">
	<header class="entry-header text-center">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
 <br/>


<div class="container">
	<div class="row">
	<div class="col-sm-4">

		<div class="slidecontainer">
		  <input type="range" min="1" max="100" value="<?php the_field('post_range'); ?>" class="slider" id="myRange">
		</div>

		Co Author : <?php the_field('co-author'); ?> <br/>
		Video Description: <?php the_field('post_textarea'); ?> <br/>
		Post Number: <?php the_field('post_number'); ?> <br/>
		Email Address: <?php the_field('post_email'); ?> <br/>
		Selected: <?php the_field('post_select'); ?> <br/>	
	</div>
	<div class="col-sm-8">
		<?php the_field('youtube_link_embed'); ?>
	</div>	
	</div>
</div>
<div class="embed-container">
    
</div>

<div class="container text-center">
	<?php  $image = get_field('post_additional_image'); if( !empty( $image ) ): ?>
	<h3> Custom Field Image</h3>
    <img src="<?php echo esc_url($image['url']); ?>" height="<?php echo $image['sizes']['large-height'] ?>"  width="<?php echo $image['sizes']['large-width'] ?>"  alt="<?php echo esc_attr($image['alt']); ?>"  class="img-responsive"/>
    <?php endif; ?>
</div>

	<div class="entry-content">
		<div class="text-center">
			<h3> Featured Image</h3>
				<?php if ( has_post_thumbnail()) {
				   the_post_thumbnail('large', array( 'class'  => 'img-responsive' ));
				} ?>
		</div>
		<?php the_content(); ?>
<?php
if( have_rows('event') ): // Check if repeater rows exists
    while( have_rows('event') ) : the_row(); ?>
        <h5> <?php the_sub_field('event_title'); ?> </h5>
        <p class="event-time">
        	<?php  the_sub_field('event_date'); ?> at 
        	<?php  the_sub_field('event_start_time'); ?>
			<!-- If end time exists , output it // event_end_time field is not required -->
			<?php if(get_sub_field('event_end_time')){ ?>
				until <?php  the_sub_field('event_end_time') ?>
			<?php } ?>
        </p>
        <p>
        	<?php the_sub_field('event_description'); ?>
        </p>
        <p>
        	<?php if(get_sub_field('event_rsvp_link_or_email') == 'Link'){ 
        			$rsvp_link = get_sub_field('event_rsvp_link');
        		} else {
        			$rsvp_link = 'mailto:'.get_sub_field('event_rsvp_email');
        		}	
        	?>
        	<a href="<?php echo  $rsvp_link; ?>"> RSVP</a> 
        </p>



        <b> event_image </b> 
        <?php $sub_image = get_sub_field('event_image'); if( !empty( $sub_image ) ): ?>
         	<img src="<?php echo $sub_image['sizes']['thumbnail']; ?>" height="<?php echo $sub_image['sizes']['thumbnail-height'] ?>"  width="<?php echo $sub_image['sizes']['thumbnail-width'] ?>"  alt="<?php echo esc_attr($sub_image['alt']); ?>"  class="img-responsive"/>
         <?php endif; ?>
   <!--       the_sub_field('event_image'); -->


		<br>
        <b> event_date </b> <br>
        <b> event_start_time </b> <br>
        <b> event_end_time </b> <?php  the_sub_field('event_end_time'); ?><br>
        <b> event_description </b><br>
        <b> event_rsvp_link_or_email </b> <?php  the_sub_field('event_rsvp_link_or_email'); ?><br>
        <b> event_rsvp_link </b> <?php  the_sub_field('event_rsvp_link'); ?><br>
        <b> event_rsvp_email </b> <?php  the_sub_field('event_rsvp_email'); ?><br><br>
       <?php  // Do something...

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif; ?>


	</div>
</div>
</article>