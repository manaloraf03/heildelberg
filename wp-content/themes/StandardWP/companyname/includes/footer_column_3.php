<?php

	if ( function_exists( 'ot_get_option' ) ) {
		$footer_column = ot_get_option( 'footer_column' );
		$footer_logo = ot_get_option( 'footer_logo' );
		$column_01_footer_logo = ot_get_option( 'column_01_footer_logo' );
		$store_company_address = ot_get_option( 'store_company_address' );
		$email_address = ot_get_option( 'email_address' );
		$extension_phone_number = ot_get_option( 'extension_phone_number' );
		$phone_number = ot_get_option( 'phone_number' );
		$social_links = ot_get_option( 'social_links', array() );
		$column_01_address = ot_get_option( 'column_01_address' );
		$column_01_phone_number = ot_get_option( 'column_01_phone_number' );
		$column_01_email_address = ot_get_option( 'column_01_email_address' );
		$column_01_social = ot_get_option( 'column_01_social' );
		$column_02_address = ot_get_option( 'column_02_address' );
		$column_02_phone_number = ot_get_option( 'column_02_phone_number' );
		$column_02_email_address = ot_get_option( 'column_02_email_address' );
		$column_02_social = ot_get_option( 'column_02_social' );
		$column_03_address = ot_get_option( 'column_03_address' );
		$column_03_phone_number = ot_get_option( 'column_03_phone_number' );
		$column_03_email_address = ot_get_option( 'column_03_email_address' );
		$column_03_social = ot_get_option( 'column_03_social' );
	}
	
?>
<?php if ( $footer_column == '3_column' ) { ?>

<div class="col-xs-12 col-sm-4">

	<?php dynamic_sidebar('footer-column-01'); ?>

	<?php if ( $column_01_footer_logo == on ) { ?>
		
		<div class="footer-logo">
			<img src="<?php echo $footer_logo; ?>" class="img-responsive" alt="Image">
		</div>

	<?php }	?>

	<?php

		if ( $column_01_page == on ) { 

			$post = get_post($column_01_page_select); 
			$content = apply_filters('the_content', $post->post_content); 

			$customExcerpt = wp_trim_words( $content, $num_words = 45, '<a href="'.get_permalink().'">Read More</a>' );
	?>
			<div class="footer-page"><?php echo $customExcerpt; ?></div>
		
	<?php }	?>

	<?php if ( $column_01_social == on ) { 

		if ( ! empty( $social_links ) ) {
			echo '<div class="footer-social">';
				echo '<h4>Connect with us</h4>';
				echo '<ul class="list-inline">';
				foreach( $social_links as $social_link ) {
					if ($social_link['link']) {
					echo '<li><a href="' . $social_link['link'] . '" id="'.$social_link['title'].'">'.$social_link['icon'].'</a></li>';
					}
				}
				echo '</ul>';
			echo '</div>';
		}
	} ?>

	<?php if ( $column_01_address == on ) { ?>
		<div class="media footer-address">
			<div class="media-left">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
			</div>
			<div class="media-body">
				<a href="http://maps.google.com/?q=<?php echo $store_company_address ?>"><?php echo $store_company_address ?></a>
			</div>
		</div>
	<?php } ?>

	<?php if ( $column_01_phone_number == on ) { ?>
		<?php

			$ext = preg_replace( '/\D/', '', $extension_phone_number );
			$pnt = preg_replace( '/\D/', '', $phone_number );
			$tel = $ext.''.$pnt;

		?>
		<div class="media footer-phone-number">
			<div class="media-left">
				<i class="fa fa-phone" aria-hidden="true"></i>
			</div>
			<div class="media-body">
				<a href="tel:+<?php echo $tel ?>">(<?php echo $extension_phone_number ?>) <?php echo $phone_number ?></a>
			</div>
		</div>
	<?php } ?>

	<?php if ( $column_01_email_address == on ) { ?>
		<div class="media footer-email-address">
			<div class="media-left">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
			<div class="media-body">
				<?php if ( !empty($email_address) ) { ?>
				<a href="mailto:<?php echo $email_address ?>"><?php echo $email_address ?></a>
				<?php } else { ?>
				<a href="mailto:<?php echo get_option( 'admin_email' ); ?>"><?php echo get_option( 'admin_email' ); ?></a>
				<?php } ?>
			</div>
		</div>
	<?php } ?>

</div>
<div class="col-xs-12 col-sm-4">

	<?php dynamic_sidebar('footer-column-02'); ?>

	<?php if ( $column_02_social == on ) { 

		if ( ! empty( $social_links ) ) {
			echo '<div class="footer-social">';
				echo '<h4>Connect with us</h4>';
				echo '<ul class="list-inline">';
				foreach( $social_links as $social_link ) {
					if ($social_link['link']) {
					echo '<li><a href="' . $social_link['link'] . '" id="'.$social_link['title'].'">'.$social_link['icon'].'</a></li>';
					}
				}
				echo '</ul>';
			echo '</div>';
		}
	} ?>

	<?php if ( $column_02_address == on ) { ?>
		<div class="media footer-address">
			<div class="media-left">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
			</div>
			<div class="media-body">
				<a href="http://maps.google.com/?q=<?php echo $store_company_address ?>"><?php echo $store_company_address ?></a>
			</div>
		</div>
	<?php } ?>

	<?php if ( $column_02_phone_number == on ) { ?>
		<?php

			$ext = preg_replace( '/\D/', '', $extension_phone_number );
			$pnt = preg_replace( '/\D/', '', $phone_number );
			$tel = $ext.''.$pnt;

		?>
		<div class="media footer-phone-number">
			<div class="media-left">
				<i class="fa fa-phone" aria-hidden="true"></i>
			</div>
			<div class="media-body">
				<a href="tel:+<?php echo $tel ?>">(<?php echo $extension_phone_number ?>) <?php echo $phone_number ?></a>
			</div>
		</div>
	<?php } ?>

	<?php if ( $column_02_email_address == on ) { ?>
		<div class="media footer-email-address">
			<div class="media-left">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
			<div class="media-body">
				<?php if ( !empty($email_address) ) { ?>
				<a href="mailto:<?php echo $email_address ?>"><?php echo $email_address ?></a>
				<?php } else { ?>
				<a href="mailto:<?php echo get_option( 'admin_email' ); ?>"><?php echo get_option( 'admin_email' ); ?></a>
				<?php } ?>
			</div>
		</div>
	<?php } ?>

</div>
<div class="col-xs-12 col-sm-4">

	<?php dynamic_sidebar('footer-column-03'); ?>

	<?php if ( $column_03_social == on ) { 

		if ( ! empty( $social_links ) ) {
			echo '<div class="footer-social">';
				echo '<h4>Connect with us</h4>';
				echo '<ul class="list-inline">';
				foreach( $social_links as $social_link ) {
					if ($social_link['link']) {
					echo '<li><a href="' . $social_link['link'] . '" id="'.$social_link['title'].'">'.$social_link['icon'].'</a></li>';
					}
				}
				echo '</ul>';
			echo '</div>';
		}
	} ?>

	<?php if ( $column_03_address == on ) { ?>
		<div class="media footer-address">
			<div class="media-left">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
			</div>
			<div class="media-body">
				<a href="http://maps.google.com/?q=<?php echo $store_company_address ?>"><?php echo $store_company_address ?></a>
			</div>
		</div>
	<?php } ?>

	<?php if ( $column_03_phone_number == on ) { ?>
		<?php

			$ext = preg_replace( '/\D/', '', $extension_phone_number );
			$pnt = preg_replace( '/\D/', '', $phone_number );
			$tel = $ext.''.$pnt;

		?>
		<div class="media footer-phone-number">
			<div class="media-left">
				<i class="fa fa-phone" aria-hidden="true"></i>
			</div>
			<div class="media-body">
				<a href="tel:+<?php echo $tel ?>">(<?php echo $extension_phone_number ?>) <?php echo $phone_number ?></a>
			</div>
		</div>
	<?php } ?>

	<?php if ( $column_03_email_address == on ) { ?>
		<div class="media footer-email-address">
			<div class="media-left">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
			<div class="media-body">
				<?php if ( !empty($email_address) ) { ?>
				<a href="mailto:<?php echo $email_address ?>"><?php echo $email_address ?></a>
				<?php } else { ?>
				<a href="mailto:<?php echo get_option( 'admin_email' ); ?>"><?php echo get_option( 'admin_email' ); ?></a>
				<?php } ?>
			</div>
		</div>
	<?php } ?>

</div>

<?php } ?>