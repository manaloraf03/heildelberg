<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" class="entry">
<div class="container">
	<header class="entry-header">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
<?php 

$fields = get_field_objects();
?>
<?php if( $fields ): ?>
	<ul>
	<?php foreach( $fields as $field ): ?>

		<?php if( $field['value'] ): ?>
			<li><?php echo $field['label']; ?>: <?php echo $field['value']; ?></li>
		<?php endif; ?>

	<?php endforeach; ?>
	</ul>
<?php endif; ?>


	<div class="entry-content">
	<div class="text-center">
	<?php if ( has_post_thumbnail()) {
	   the_post_thumbnail('large', array( 'class'  => 'img-responsive' ));
	} ?>
	</div>

		<?php the_content(); ?>
	</div>
</div>
</article>