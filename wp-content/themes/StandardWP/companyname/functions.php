<?php
/*
All the functions are in the PHP pages in the functions/ folder.
*/

require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/search.php');
require_once locate_template('/functions/feedback.php');
require_once locate_template('/functions/woocommerce-setup.php');
require locate_template('/functions/theme-hooks.php');

require_once get_template_directory() . '/includes/class-tgm-plugin-activation.php';
include_once get_template_directory() . '/includes/themeplugins.php';

add_action('after_setup_theme', 'true_load_theme_textdomain');

function true_load_theme_textdomain(){
    load_theme_textdomain( 'companyname', get_template_directory() . '/languages' );
}

// Additional Widget Area
// output = dynamic_sidebar( 'header-right-info' );
// add_action( 'widgets_init', 'customwidget', 11 );
// function customwidget() {

// 	register_sidebar( array(
// 		'name'          => 'customwidget',
// 		'id'            => 'customwidget',
// 		'before_widget' => '<div>',
// 		'after_widget'  => '</div>',
// 		'before_title'  => '<h4>',
// 		'after_title'   => '</h4>',
// 	) );

// }
// Additional Widget Area

// themeoption Option
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include Themeoption.
 */
require( trailingslashit( get_template_directory() ) . 'includes/themeoption/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'includes/themeoption/themeoption.php' );

// themeoption Option

// Shortcodes

function shortcode_phone() {

	if ( function_exists( 'ot_get_option' ) ) {
		$extension_phone_number = ot_get_option( 'extension_phone_number' );
		$phone_number = ot_get_option( 'phone_number' );
	}
	$ext = preg_replace( '/\D/', '', $extension_phone_number );
	$pnt = preg_replace( '/\D/', '', $phone_number );
	$tel = $ext.''.$pnt;
	$phone = '
		<div class="media shortcode shortcode_phone">
			<div class="media-left">
				<i class="fa fa-phone" aria-hidden="true"></i>
			</div>
			<div class="media-body">
				<a href="tel:+'.$tel.'">('.$extension_phone_number.') '.$phone_number.'</a>
			</div>
		</div>';
	return $phone;
}
add_shortcode('phone', 'shortcode_phone');

function shortcode_email() {

	if ( function_exists( 'ot_get_option' ) ) {
		$email_address = ot_get_option( 'email_address' );
	}
	$email .= '
		<div class="media shortcode shortcode_address">
			<div class="media-left">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
			<div class="media-body">';
	if ( !empty($email_address) ) { 
	$email .= '
				<a href="mailto:'.$email_address.'">'.$email_address.'</a>';
	} else {
	$email .= '
				<a href="mailto:'.get_option( 'admin_email' ).'">'.get_option( 'admin_email' ).'</a>';
	}
	$email .= '
			</div>
		</div>';
	return $email;
}
add_shortcode('email', 'shortcode_email');

function shortcode_address() {

	if ( function_exists( 'ot_get_option' ) ) {
		$store_company_address = ot_get_option( 'store_company_address' );
	}
	$address = '
		<div class="media shortcode shortcode_address">
			<div class="media-left">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
			</div>
			<div class="media-body">
				<a href="http://maps.google.com/?q='.$store_company_address.'">'.$store_company_address.'</a>
			</div>
		</div>';
	return $address;
}
add_shortcode('address', 'shortcode_address');

function shortcode_sidebar($atts) {

	// Set Shortcode Attributes
	extract(shortcode_atts(array(
		'title' => Sidebar
	), $atts));

	dynamic_sidebar($title);
}
add_shortcode('sidebar', 'shortcode_sidebar');

function shortcode_recentpost($atts) {

	$recent .= '<div class="shortcode_recentpost">';

	// Set Shortcode Attributes
	extract(shortcode_atts(array(
		'count' => 3
	), $atts));

	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$wp_query = new WP_Query("paged=$paged&posts_per_page=$count");

	if(have_posts()): while($wp_query->have_posts()): $wp_query->the_post();

	    $recent .= '<article role="article" id="post_'.get_the_ID().'" class="recentpostlist">
	        <div class="media">
	            <div class="media-left">
	                <div class="blogimg">'.get_the_post_thumbnail().'</div>
	            </div>
	            <div class="media-body">
	                <h6 class="blogdate">'.get_the_date().'</h6>
	                <h5 class="blogtitle">'.get_the_title().'</h5>
	                <h6 class="blogdescription">'.wp_trim_words( get_the_content(), $num_words = 5 ).'</h6>
	                <a href="'.get_the_permalink().'">Read More</a>
	            </div>
	        </div>
	    </article>';
	endwhile;

	else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif;

	$recent .= '</div>';
	
	return $recent;

}
add_shortcode('recentpost', 'shortcode_recentpost');