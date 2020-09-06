<?php
/**
 * The main template file
 */

get_header();
?>

<main id="main" class="site-main" role="main">
<div class="container">
	<h2>Posts Archive</h2>
</div>
<?php  query_posts('showposts=3');
if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/blog', get_post_type() );

	endwhile;

	echo bootstrap_pagination();
	?> 

	<div class="container">
	</div>
<?php endif;
?>

</main>

<?php
get_sidebar();
get_footer();