<?php
/**
 * The template for displaying search results pages
 *
 */

get_header();
?>

<main id="main" class="site-main" role="main">
<div class="container">
	<?php 
	if ( have_posts() ) : ?>

		<header class="page-header mt-3">
			<h3>Results for: <span class="text-capitalize"><?php echo get_search_query(); ?></span></h3>
		</header>

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/search', 'search' );
		endwhile;
	else: ?>
		<div class="container d-flex justify-content-center align-items-center" style="height: 20vh;">
			<div class=" mr-3 pr-3 align-top inline-block align-content-center">
				<h4>Sorry, but nothing matched your search terms.</h4>
			</div>
		</div>
		<div class="container">
		    <div class="d-flex justify-content-center align-items-center">
			    <div class=" align-middle">
			    <?php get_search_form(); ?>
			    </div>
		    </div>
		</div>		
	<?php
	endif;
	?>
</div>
</main>

<?php
get_sidebar();
get_footer();