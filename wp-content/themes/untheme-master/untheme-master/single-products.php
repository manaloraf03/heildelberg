<?php
/**
 * The template for displaying all single posts
 *
 */

get_header();
?>

<main id="main" class="site-main" role="main">
<div class="container">
	Product Page (single-products.php)
</div>
	<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content-product', get_post_type() ); ?>
	<?php 
	endwhile;
	?>

</main>

<?php
get_sidebar();
get_footer();