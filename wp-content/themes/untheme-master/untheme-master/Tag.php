<?php
/**
 * The main template file
 */

get_header();
?>

<main id="main" class="site-main" role="main">
<div class="container">
	<h2>Tags Archive</h2>
</div>
<?php  
if ( have_posts() ) : while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/blog', get_post_type() );
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