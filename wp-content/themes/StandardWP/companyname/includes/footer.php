<?php 
	if ( function_exists( 'ot_get_option' ) ) {
		$footer_logo = ot_get_option( 'footer_logo' );
		$footer_logo_center = ot_get_option( 'footer_logo_center' );
		$copyright = ot_get_option( 'copyright' );
	}
?>
		<?php tha_footer_before(); ?>
		<?php tha_footer_top(); ?>
		<section class="footer">
			<div class="container">
				<?php if ( $footer_logo_center == on ) { ?>
				<div class="row">
					<div class="col-xs-12 col-sm-12">
		
						<div class="footer-logo">
							<img src="<?php echo $footer_logo; ?>" class="img-responsive" alt="Image">
						</div>

					</div>
				</div>
				<?php } ?>
				<div class="row">

					<?php get_template_part('includes/footer_column_1'); ?>
					<?php get_template_part('includes/footer_column_2'); ?>
					<?php get_template_part('includes/footer_column_3'); ?>
					<?php get_template_part('includes/footer_column_4'); ?>

				</div>
			</div>
		</section>

		<?php if ( $copyright == on ) { ?>
		<section class="copyright">
			<div class="container">
				<div class="row">
					<?php get_template_part('includes/copyright_placement'); ?>
				</div>
			</div>
		</section>
		<?php } ?>

		<?php tha_footer_bottom(); ?>
		<?php tha_footer_after(); ?>
		<?php wp_footer(); ?>
		<?php tha_body_bottom(); ?>
		
	</body>
</html>