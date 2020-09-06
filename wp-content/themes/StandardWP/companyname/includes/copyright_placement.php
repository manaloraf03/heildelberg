<?php 
	if ( function_exists( 'ot_get_option' ) ) {
		$copyright_placement = ot_get_option( 'copyright_placement' );
		$copyright_social = ot_get_option( 'copyright_social' );
		$copyright_social_links = ot_get_option( 'social_links', array() );
	}
?>
					<?php if ( $copyright_placement == 'center' or empty( $copyright_placement ) ) { ?>
					<div class="col-xs-12 col-sm-12 center">
						<p>&copy; Copyrights <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> | All Rights Reserved</p>
						<?php dynamic_sidebar('copyright-widget'); ?>
						<?php if ( $copyright_social == on ) { 

							if ( ! empty( $copyright_social_links ) ) {
								echo '<div class="footer-social">';
									echo '<ul class="list-inline">';
									foreach( $copyright_social_links as $copyright_social_link ) {
										if ($copyright_social_link['link']) {
										echo '<li><a href="' . $copyright_social_link['link'] . '" id="'.$copyright_social_link['title'].'">'.$copyright_social_link['icon'].'</a></li>';
										}
									}
									echo '</ul>';
								echo '</div>';
							}
						} ?>
					</div>
					<?php } ?>
					<?php if ( $copyright_placement == 'left' ) { ?>
					<div class="col-xs-12 col-sm-6 left">
						<p>&copy; Copyrights <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> | All Rights Reserved</p>
					</div>
					<div class="col-xs-12 col-sm-6 right">
						<?php dynamic_sidebar('copyright-widget'); ?>
						<?php if ( $copyright_social == on ) { 

							if ( ! empty( $copyright_social_links ) ) {
								echo '<div class="footer-social">';
									echo '<ul class="list-inline">';
									foreach( $copyright_social_links as $copyright_social_link ) {
										if ($copyright_social_link['link']) {
										echo '<li><a href="' . $copyright_social_link['link'] . '" id="'.$copyright_social_link['title'].'">'.$copyright_social_link['icon'].'</a></li>';
										}
									}
									echo '</ul>';
								echo '</div>';
							}
						} ?>
					</div>
					<?php } ?>
					<?php if ( $copyright_placement == 'right' ) { ?>
					<div class="col-xs-12 col-sm-6 left">
						<?php dynamic_sidebar('copyright-widget'); ?>
						<?php if ( $copyright_social == on ) { 

							if ( ! empty( $copyright_social_links ) ) {
								echo '<div class="footer-social">';
									echo '<ul class="list-inline">';
									foreach( $copyright_social_links as $copyright_social_link ) {
										if ($copyright_social_link['link']) {
										echo '<li><a href="' . $copyright_social_link['link'] . '" id="'.$copyright_social_link['title'].'">'.$copyright_social_link['icon'].'</a></li>';
										}
									}
									echo '</ul>';
								echo '</div>';
							}
						} ?>
					</div>
					<div class="col-xs-12 col-sm-6 right">
						<p>&copy; Copyrights <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> | All Rights Reserved</p>
					</div>
					<?php } ?>