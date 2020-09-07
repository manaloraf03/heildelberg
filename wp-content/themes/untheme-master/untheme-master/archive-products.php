<?php
/**
 * The main template file
 */

get_header();
?>

<main id="main" class="site-main" role="main">
<div class="container">
	<h2>Products Archive</h2>
</div>
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/product', get_post_type() ); // main archive page // all archives
	endwhile;
?> 

	<div class="container">
		<?php  echo bootstrap_pagination(); ?>
	</div>
<?php endif;
?>

</main>

<?php
get_sidebar();
get_footer();