<?php
/**
 * The template for displaying all single posts
 *
 */

get_header();
?>

<main id="main" class="site-main" role="main">
<div class="container">
	Post Page (Single.php)
</div>
	<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', get_post_type() ); ?>

			<div class="container"> 
			<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
			</div>

	<?php 
	endwhile;
	?>

</main>

<?php
get_sidebar();
get_footer();