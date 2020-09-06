<?php
/**
* Template Name: Full Width with Sidebar
 *
 */

get_header();
?>

<main id="main" class="site-main" role="main">
<div class="container">
	<h1>Full Width with Sidebar</h1>
<div class="row">
	<div class="col-sm-8">
		rafael
	</div>
	<div class="col-sm-4">
		<?php dynamic_sidebar('sidebar-widget'); ?>
	</div>
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


</main>

<?php
get_footer();