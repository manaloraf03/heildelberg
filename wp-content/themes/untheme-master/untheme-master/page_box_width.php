<?php
/**
* Template Name: Box Width
 *
 */


?>

<main id="main" class="site-main" role="main">
<div class="container">
<?php get_header(); ?>
<div class="col-sm-12">
<h1>Box Width</h1>
<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; 
	?>
</div>
</div>
</main>

<?php
get_footer();