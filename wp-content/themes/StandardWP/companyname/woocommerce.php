<?php 
	if ( function_exists( 'ot_get_option' ) ) {
		$woocommerce_layout = ot_get_option( 'woocommerce_layout' );
		$woocommerce_sidebar_placement = ot_get_option( 'woocommerce_sidebar_placement' );
		$page_header_background_default = ot_get_option( 'page_header_background_default' );
		$woocommerce_show_page_header = ot_get_option( 'woocommerce_show_page_header' );
		$woocommerce_page_header_background = ot_get_option( 'woocommerce_page_header_background' );
	}
?>

<?php get_template_part('includes/header'); ?>

<?php if ($woocommerce_show_page_header == on) { ?>

	<section id="pageheader" style="background: url(<?php if ($woocommerce_page_header_background) { echo $woocommerce_page_header_background; } else { echo $page_header_background_default; } ?>) no-repeat center center">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<h1 class="wc-archive-title">Shop</h1>
					<h1 class="wc-product-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>
	
<?php } ?>

<section id="woocommerce-page" class="section">
	
	<?php if ( $woocommerce_layout == 'full_width_boxed' or $woocommerce_layout == 'full_width_boxed_sidebar' or empty( $woocommerce_layout ) ) { ?>
	<div class="container">
	<?php } ?>
	<?php if ( $woocommerce_layout == 'full_width' or $woocommerce_layout == 'full_width_sidebar' ) { ?>
	<div class="container-fluid">
	<?php } ?>

		<div class="row">

			<?php if ( $woocommerce_layout == 'full_width_sidebar' or $woocommerce_layout == 'full_width_boxed_sidebar' ) { ?>
				<?php if ( $woocommerce_sidebar_placement == 'left' ) { ?>
				<div class="col-xs-12 col-sm-4" id="sidebar" role="navigation">
					<?php get_template_part('includes/sidebar'); ?>
				</div>
				<?php } else { ?>
					<!-- Disabled Left Woocommerce Sidebar -->
				<?php } ?>
			<?php } else { ?>
				<!-- Disabled Left Woocommerce Sidebar -->
			<?php } ?>

			<?php if ( $woocommerce_layout == 'full_width_sidebar' or $woocommerce_layout == 'full_width_boxed_sidebar' ) { ?>
			<div class="col-xs-12 col-sm-8">
			<?php } ?>
			<?php if ( $woocommerce_layout == 'full_width' or $woocommerce_layout == 'full_width_boxed' or empty( $woocommerce_layout ) ) { ?>
			<div class="col-xs-12 col-sm-12">
			<?php } ?>
				<div id="content" role="main">
					<?php tha_content_before(); ?>
					<div class="woocommerce">
						<?php woocommerce_content(); ?>
					</div>
					
				</div><!-- /#content -->
			</div>

			<?php if ( $woocommerce_layout == 'full_width_sidebar' or $woocommerce_layout == 'full_width_boxed_sidebar' ) { ?>
				<?php if ( $woocommerce_sidebar_placement == 'right' ) { ?>
				<div class="col-xs-12 col-sm-4" id="sidebar" role="navigation">
					<?php get_template_part('includes/sidebar'); ?>
				</div>
				<?php } else { ?>
					<!-- Disabled Right Woocommerce Sidebar -->
				<?php } ?>
			<?php } else { ?>
				<!-- Disabled Right Woocommerce Sidebar -->
			<?php } ?>

		</div><!-- /.row -->

	</div><!-- /.container -->

</section>

<?php get_template_part('includes/footer'); ?>