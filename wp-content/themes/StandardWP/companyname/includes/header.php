<!DOCTYPE html>
<?php tha_html_before(); ?>

<!-- Theme Option -->
<?php
	if ( function_exists( 'ot_get_option' ) ) {
		$social_links = ot_get_option( 'social_links', array() );
		$upper_navbar_right = ot_get_option( 'upper_navbar_right' );
		$upper_right_social = ot_get_option( 'upper_right_social' );
		$upper_navbar_left = ot_get_option( 'upper_navbar_left' );
		$upper_left_social = ot_get_option( 'upper_left_social' );
		$upper_searchbar = ot_get_option( 'upper_searchbar' );
		$lower_navbar_right = ot_get_option( 'lower_navbar_right' );
		$lower_right_social = ot_get_option( 'lower_right_social' );
		$lower_navbar_left = ot_get_option( 'lower_navbar_left' );
		$lower_left_social = ot_get_option( 'lower_left_social' );
		$lower_searchbar = ot_get_option( 'lower_searchbar' );
		$upload_logo = ot_get_option( 'upload_logo' );
		$logo_placement = ot_get_option( 'logo_placement' );
		$text_logo = ot_get_option( 'text_logo' );
		$favicon = ot_get_option( 'favicon' );
	}
?>
<!-- Theme Option -->

<html class="no-js">
<head>

	<?php tha_head_top(); ?>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="<?php echo $favicon ?>" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php tha_head_bottom(); ?>
	<?php wp_head(); ?>

	<!-- Other Links -->
	<script src="https://use.fontawesome.com/bd6038bcc4.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

</head>

<body <?php body_class(); ?>>

	<?php tha_body_top(); ?>

	<!--[if lt IE 8]>
	<div class="alert alert-warning">
		You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
	</div>
	<![endif]-->

	<?php if ( $upper_navbar_left == off && $upper_navbar_right == off && $upper_searchbar == off && $upper_left_social == off && $upper_right_social == off && $logo_placement != 'nav-upper-logo' ) { ?>

	<!-- Disabled navbar-upper -->

	<?php } else { ?>

	<nav id="navbar-upper" class="navbar navbar-default navbar-static " role="navigation">
		<div class="container">
			<div class="navbar-header">
				<?php if ( $upper_navbar_left == on && $upper_navbar_right == on && $upper_searchbar == on ) { ?>
					<button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas-top" style="float:left;">
						<span class="sr-only">Toggle navigation</span>
						<span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</span>
					</button>
				<?php } ?>
				<?php
					if ( $logo_placement == 'nav-upper-logo' ) {

						if ( !empty( $upload_logo ) ) { ?>
							<a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<h5><img src="<?php echo $upload_logo; ?>" class="img-responsive" alt="Logo"></h5>
							</a>
						<?php }

						else if ( !empty( $text_logo ) ) { ?>
							<a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<h5><?php echo $text_logo; ?></h5>
							</a>
						<?php }

						else { ?>
							<a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<h5><?php echo bloginfo('name'); ?></h5>
							</a>
						<?php }

					}
				?>

			</div>
			<div class="navbar-offcanvas navbar-offcanvas-fade" id="js-bootstrap-offcanvas-top">
				<?php
					if ( $upper_navbar_left != off ) {
						wp_nav_menu( array(
							'theme_location'    => 'navbar-upper-left',
							'depth'             => 3,
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					}
				?>
				<?php 
					if ( $upper_searchbar != off ) {
						get_template_part('includes/navbar-search');
					}
				?>
				<?php
					if ( $upper_navbar_right != off ) {
						wp_nav_menu( array(
							'theme_location'    => 'navbar-upper-right',
							'depth'             => 3,
							'menu_class'        => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					}
				?>

				<?php

					if ( $upper_left_social != off ) {

						if ( ! empty( $social_links ) ) {
							echo '<ul class="list-inline nav navbar-nav social-nav">';
							foreach( $social_links as $social_link ) {
								if ($social_link['link']) {
								echo '<li><a href="' . $social_link['link'] . '" id="'.$social_link['title'].'">'.$social_link['icon'].'</a></li>';
								}
							}
							echo '</ul>';
						}
						
					}

				?>

				<?php

					if ( $upper_right_social != off ) {

						$social_links = ot_get_option( 'social_links', array() );
						if ( ! empty( $social_links ) ) {
							echo '<ul class="list-inline pull-right nav navbar-nav social-nav">';
							foreach( $social_links as $social_link ) {
								if ($social_link['link']) {
								echo '<li><a href="' . $social_link['link'] . '" id="'.$social_link['title'].'">'.$social_link['icon'].'</a></li>';
								}
							}
							echo '</ul>';
						}

					}

				?>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<?php } ?>

	<?php if ( $logo_placement == 'nav-center-logo' || empty( $logo_placement ) ) { ?>

	<section class="logotitle">
		<?php tha_header_before(); ?>
		<div class="container">
			<?php tha_header_top(); ?>      
			<div class="row">
				<div class="col-xs-12 col-sm-12 center">
					<h1 id="logo-wrap">
						<?php

						if ( !empty( $upload_logo ) ) { ?>
							<a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<h5><img src="<?php echo $upload_logo; ?>" class="img-responsive" alt="Logo"></h5>
							</a>
						<?php }

						else if ( !empty( $text_logo ) ) { ?>
							<a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<h5><?php echo $text_logo; ?></h5>
							</a>
						<?php }

						else { ?>
							<a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<h5><?php echo bloginfo('name'); ?></h5>
							</a>
						<?php }

						?>
					</h1>
				</div>
			</div>
			<?php tha_header_bottom(); ?>     
		</div>
	</section>

	<?php } ?>

	<?php if ( $lower_navbar_left == off && $lower_navbar_right == off && $lower_searchbar == off && $lower_left_social == off && $lower_right_social == off && $logo_placement != 'nav-lower-logo' ) { ?>

	<!-- Disabled navbar-lower -->

	<?php } else { ?>

	<nav id="navbar-lower" class="navbar navbar-default navbar-static" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas-bottom" style="float:left;">
					<span class="sr-only">Toggle navigation</span>
					<span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</span>
				</button>
				
				<?php
					if ( $logo_placement == 'nav-lower-logo' ) {

						if ( !empty( $upload_logo ) ) { ?>
							<a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<h5><img src="<?php echo $upload_logo; ?>" class="img-responsive" alt="Logo"></h5>
							</a>
						<?php }

						else if ( !empty( $text_logo ) ) { ?>
							<a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<h5><?php echo $text_logo; ?></h5>
							</a>
						<?php }

						else { ?>
							<a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<h5><?php echo bloginfo('name'); ?></h5>
							</a>
						<?php }

					}
				?>

			</div><!-- /.navbar-header -->
			<div class="navbar-offcanvas navbar-offcanvas-fade" id="js-bootstrap-offcanvas-bottom">

				<?php

					if ( $lower_left_social != off ) {

						$social_links = ot_get_option( 'social_links', array() );
						if ( ! empty( $social_links ) ) {
							echo '<ul class="nav navbar-nav">';
							foreach( $social_links as $social_link ) {
								if ($social_link['link']) {
								echo '<li><a href="' . $social_link['link'] . '" id="'.$social_link['title'].'">'.$social_link['icon'].'</a></li>';
								}
							}
							echo '</ul>';
						}

					}

				?>  
				<?php
					if ( $lower_navbar_left !== off ) {
						wp_nav_menu( array(
							'theme_location'    => 'navbar-lower-left',
							'depth'             => 3,
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					}
				?>
				<?php 
					if ( $lower_searchbar !== off ) {
						get_template_part('includes/navbar-search');
					}
				?>

				<?php

					if ( $lower_right_social != off ) {

						$social_links = ot_get_option( 'social_links', array() );
						if ( ! empty( $social_links ) ) {
							echo '<ul class="nav navbar-nav navbar-right">';
							foreach( $social_links as $social_link ) {
								if ($social_link['link']) {
								echo '<li><a href="' . $social_link['link'] . '" id="'.$social_link['title'].'">'.$social_link['icon'].'</a></li>';
								}
							}
							echo '</ul>';
						}

					}

				?>
				<?php
					if ( $lower_navbar_right !== off ) {
						wp_nav_menu( array(
							'theme_location'    => 'navbar-lower-right',
							'depth'             => 3,
							'menu_class'        => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					}
				?>

			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

<?php } ?>
