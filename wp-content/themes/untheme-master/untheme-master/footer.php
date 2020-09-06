<?php
/**
 * The template for displaying the footer
 *
 */

?>

</div>

<footer class="site-footer">
    <div class="container">

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<?php dynamic_sidebar('footer-widget-1'); ?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<?php dynamic_sidebar('footer-widget-2'); ?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<?php dynamic_sidebar('footer-widget-3'); ?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<?php dynamic_sidebar('footer-widget-4'); ?>
		</div>
	
	</div>
    </div>



</footer>

<?php wp_footer(); ?>

</body>
</html>