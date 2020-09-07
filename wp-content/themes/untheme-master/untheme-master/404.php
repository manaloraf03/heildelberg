<?php
/**
 * The template for displaying 404 pages
 *
 */

get_header();
?>

<main id="main" class="site-main" role="main">
<div class="container">
<div class="d-flex justify-content-center align-items-center" id="main" style="height: 30vh">
    <h1 class="mr-3 pr-3 align-top border-right inline-block align-content-center">404</h1>
    <div class="inline-block align-middle">
    	<h2 class="font-weight-normal lead" id="desc">The page you requested was not found.</h2>
    </div>
    <br>

</div>
</div>
<div class="container">
    <div class="d-flex justify-content-center align-items-center">
	    <div class=" align-middle">
	    <?php get_search_form(); ?>
	    </div>
    </div>
</div>
</main>

<?php
get_footer();