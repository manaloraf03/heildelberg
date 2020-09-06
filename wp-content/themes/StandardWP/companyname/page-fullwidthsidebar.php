<?php

	/*Template Name: Full Width Sidebar Page*/

	if ( function_exists( 'ot_get_option' ) ) {
		$page_sidebar_placement = ot_get_option( 'page_sidebar_placement' );
		$show_page_header = ot_get_option( 'show_page_header' );
		$page_header_background_default = ot_get_option( 'page_header_background_default' );
	}
?>

<?php get_template_part('includes/header'); ?>

<?php if ($show_page_header == on) { ?>
	<?php if (get_field('show_page_header') == true) {
	// Install Advance Custom Field and Create a Custom Field "Show Page Header", "Title", "Sub Title" and "Page Background"
	?>
	<section id="pageheader" style="background: url(<?php if (get_field('page_background')) { the_field('page_background'); } else { echo $page_header_background_default; } ?>) no-repeat center center">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<h1><?php if (get_field('title')) { the_field('title'); } else { the_title(); } ?></h1>
					<h4><?php if (get_field('sub_title')) { the_field('sub_title'); } ?></h4>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
<?php } ?>

<section id="pagepage" class="section">

	<div class="container-fluid">
		<div class="row">

			<?php if ( $page_sidebar_placement == 'left' ) { ?>
			<div class="col-xs-12 col-sm-4" id="sidebar" role="navigation">
				<?php get_template_part('includes/sidebar'); ?>
			</div>
			<?php } else { ?>
				<!-- Disabled Left Page Sidebar -->
			<?php } ?>

			<div class="col-xs-12 col-sm-8">
				<div id="content" role="main">
					<?php tha_content_before(); ?>
					<?php get_template_part('includes/loops/content', 'page'); ?>

				</div><!-- /#content -->
			</div>

			<?php if ( $page_sidebar_placement == 'right' ) { ?>
			<div class="col-xs-12 col-sm-4" id="sidebar" role="navigation">
				<?php get_template_part('includes/sidebar'); ?>
			</div>
			<?php } else { ?>
				<!-- Disabled Right Page Sidebar -->
			<?php } ?>

		</div><!-- /.row -->
		
	</div><!-- /.container -->

</section>

<?php get_template_part('includes/footer'); ?>
