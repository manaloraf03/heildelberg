<?php
/**
* Template Name: Box Width with Sidebar
 *
 */


?>
<style type="text/css"></style>
<main id="main" class="site-main" role="main">
<div class="container">
	<?php get_header(); ?>
	<div class="row">
		<div class="col-sm-8">
			<h1>Box Width with Sidebar</h1>
		</div>
		<div class="col-sm-4">
			<?php dynamic_sidebar('sidebar-widget'); ?>
		</div>
	</div>
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

</main>

<?php
get_footer();