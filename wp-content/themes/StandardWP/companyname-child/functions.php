<?php
/*
This child theme needs to instruct WordPress where to find the stylesheet, as below.

Notice that the 'add_action' line ends with '101'? This guarantees that the child stylesheet 
(main-child.css') is added to the webpage <head> AFTER the Company Name parent theme stylesheets.
(Because in the Company Name enqueue (functions/enqueues.php), the 'add_action' line ends with '100'.)
*/

function companyname_child_enqueues() {

	// Custom CSS

	wp_register_style('main-child.css', get_bloginfo('stylesheet_directory') . '/css/main-child.css', false, null);
	wp_enqueue_style('main-child.css');

	// Custom JS

	wp_register_script('main-child-js', get_bloginfo('stylesheet_directory') . '/scripts/main-child.js', false, null, true);
	wp_enqueue_script('main-child-js');

}
add_action('wp_enqueue_scripts', 'companyname_child_enqueues', 101);

?>