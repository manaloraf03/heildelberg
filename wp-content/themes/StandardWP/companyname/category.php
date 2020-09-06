<?php 
	if ( function_exists( 'ot_get_option' ) ) {
		$blog_layout = ot_get_option( 'blog_layout' );
		$blog_sidebar_placement = ot_get_option( 'blog_sidebar_placement' );
		$page_header_background_default = ot_get_option( 'page_header_background_default' );
		$blog_show_page_header = ot_get_option( 'blog_show_page_header' );
		$blog_page_header_background = ot_get_option( 'blog_page_header_background' );
	}
?>

<?php get_template_part('includes/header'); ?>

<?php if ($blog_show_page_header == on) { ?>

	<section id="pageheader" style="background: url(<?php if ($blog_page_header_background) { echo $blog_page_header_background; } else { echo $page_header_background_default; } ?>) no-repeat center center">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<h1>Category</h1>
				</div>
			</div>
		</div>
	</section>

<?php } ?>

<section id="blog-category-page" class="section">
	
	<?php if ( $blog_layout == 'full_width_boxed' or $blog_layout == 'full_width_boxed_sidebar' or empty( $blog_layout ) ) { ?>
	<div class="container">
	<?php } ?>
	<?php if ( $blog_layout == 'full_width' or $blog_layout == 'full_width_sidebar' ) { ?>
	<div class="container-fluid">
	<?php } ?>

		<div class="row">

			<?php if ( $blog_layout == 'full_width_sidebar' or $blog_layout == 'full_width_boxed_sidebar' ) { ?>
				<?php if ( $blog_sidebar_placement == 'left' ) { ?>
				<div class="col-xs-12 col-sm-4" id="sidebar" role="navigation">
					<?php get_template_part('includes/sidebar'); ?>
				</div>
				<?php } else { ?>
					<!-- Disabled Left Blog Sidebar -->
				<?php } ?>
			<?php } else { ?>
				<!-- Disabled Left Blog Sidebar -->
			<?php } ?>

			<?php if ( $blog_layout == 'full_width_sidebar' or $blog_layout == 'full_width_boxed_sidebar' ) { ?>
			<div class="col-xs-12 col-sm-8">
			<?php } ?>
			<?php if ( $blog_layout == 'full_width' or $blog_layout == 'full_width_boxed' or empty( $blog_layout ) ) { ?>
			<div class="col-xs-12 col-sm-12">
			<?php } ?>
				<div id="content" role="main">
					<?php get_template_part('includes/loops/content', get_post_format()); ?>
				</div><!-- /#content -->
			</div>

			<?php if ( $blog_layout == 'full_width_sidebar' or $blog_layout == 'full_width_boxed_sidebar' ) { ?>
				<?php if ( $blog_sidebar_placement == 'right' ) { ?>
				<div class="col-xs-12 col-sm-4" id="sidebar" role="navigation">
					<?php get_template_part('includes/sidebar'); ?>
				</div>
				<?php } else { ?>
					<!-- Disabled Right Blog Sidebar -->
				<?php } ?>
			<?php } else { ?>
				<!-- Disabled Right Blog Sidebar -->
			<?php } ?>

		</div><!-- /.row -->

	</div><!-- /.container -->

</section>

<?php get_template_part('includes/footer'); ?>