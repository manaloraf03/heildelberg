<?php
/**
 * The header for the theme
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>




	<div class="my-canvas-overlay bg-dark position-fixed"></div>
		<!-- Off-canvas sidebar markup, left. -->
	    <div id="my-canvas-left" class="my-canvas-left my-anim position-fixed h-100 bg-light">
	        <header class="p-3 border-bottom">
	            <h4 class="d-inline-block text-dark mb-0 ">
				<?php	if(function_exists('the_custom_logo')){
								$site_logo =wp_get_attachment_image_src(get_theme_mod('custom_logo'));
							} ?>				
				<img src="<?php echo $site_logo[0];?>" style="width: 50px;"><?php echo  get_bloginfo() ?>
	            </h4>
	            <button type="button" class="my-canvas-close close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        </header>
	        <div class="canvas-content px-3">
				<?php dynamic_sidebar('navbar-widget'); ?>
	        </div>
	    </div>


		<section class="Header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#"></a>

					<button id="my-btn" class="btn my-btn-custom navbar-toggler" type="button" data-toggle="canvas" data-target="#my-canvas-left" aria-expanded="false" aria-controls="my-canvas-left">&#9776;</button>
			

			<div class="navbar-collapse collapse" id="navbarSupportedContent">

			<div class="container no-gutter">
				<div class="col-sm-6 no-gutter">

					<div class="container no-gutter">
					<div class="row">
						<div class="col-sm-2 no-gutter">
							<a class="navbar-brand img-responsive" href="#"><img src="<?php echo $site_logo[0];?>" ></a>
						</div>
						<div class="col-sm-10 no-gutter">
							<p class="navbar-text"><?php echo  get_bloginfo() ?></p>
						</div>	
					</div></div>
				</div>
				<div class="col-sm-6 no-gutter">
					<div class="container">
						<div class="row no-gutter ">
						<?php
								wp_nav_menu( array(
									'theme_location' => 'header-banner',
									'menu_id'        => 'header-banner',
									'menu_class' => 'nav navbar-nav navbar-right navbar-contact-menu',
									'items-wrap' => ' <ul>%3$s</ul>' 
								) );
							?>
						</div>	
						<div class="row no-gutter">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-2',
									'menu_id'        => 'primary-menu',
									'menu_class' => 'nav navbar-nav navbar-right',
									'items-wrap' => ' <ul>%3$s</ul>' 
								) );
							?>

						</div>					
					</div>

				</div>			
			</div>

				<!-- <ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li>
				</ul> -->
				<!-- <form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form> -->
			</div>
		
			</nav>

		</section>





<div id="content" class="site-content">
	
