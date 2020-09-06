<?php
/**
 * Functions and definitions
 *
 */

/*
 * Let WordPress manage the document title.
 */
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );

/** 
 * Include primary navigation menu
 */
function untheme_nav_init() {
	register_nav_menus( array(
		'header-banner' => 'Banner Header Menu',
		'header-primary' => 'Primary Header Menu',
	) );
}
add_action( 'init', 'untheme_nav_init' );

/**
 * Register widget area.
 *
 */
function untheme_widget_navbar() {
	register_sidebar( array(
		'name'          => 'Navigation Bar Widget',
		'id'            => 'navbar-widget',
		'description'   => 'Navigation Bar Widget',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title hidden">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'untheme_widget_navbar' );


function untheme_widget_header() {
	register_sidebar( array(
		'name'          => 'Header Navigation Widget',
		'id'            => 'header-widget',
		'description'   => 'Header Navigation Widget',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'untheme_widget_header' );


function untheme_widgets_sidebar() {
	register_sidebar( array(
		'name'          => 'Sidebar Widget',
		'id'            => 'sidebar-widget',
		'description'   => 'Widget located at the right part of posts',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
} 
add_action( 'widgets_init', 'untheme_widgets_sidebar' );

function untheme_footer_widget_01() {
	register_sidebar( array(
		'name'          => 'Footer Widget 1',
		'id'            => 'footer-widget-1',
		'description'   => 'First Footer Area Widget',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'untheme_footer_widget_01' );


function untheme_footer_widget_02() {
	register_sidebar( array(
		'name'          => 'Footer Widget 2',
		'id'            => 'footer-widget-2',
		'description'   => 'Second Footer Area Widget',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'untheme_footer_widget_02' );


function untheme_footer_widget_03() {
	register_sidebar( array(
		'name'          => 'Footer Widget 3',
		'id'            => 'footer-widget-3',
		'description'   => 'Third Footer Area Widget',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'untheme_footer_widget_03' );

function untheme_footer_widget_04() {
	register_sidebar( array(
		'name'          => 'Footer Widget 4',
		'id'            => 'footer-widget-4',
		'description'   => 'Fourth Footer Area Widget',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'untheme_footer_widget_04' );

/**
 * Enqueue scripts and styles.
 */
function untheme_scripts() {
	// Styles
	wp_enqueue_style( 'untheme-bootstrap-css', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array(), "4.5.2", "all" );
	wp_enqueue_style( 'untheme-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), "4.7.0", "all" );
	wp_enqueue_style( 'untheme-custom-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'untheme-style', get_stylesheet_uri() );

	// wp_enqueue_script( 'untheme-bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), "3.3.7", true );
	wp_enqueue_script( 'untheme-bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array('jquery'), "4.5.2", true );
	wp_enqueue_script( 'untheme-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'untheme_scripts' );

function untheme_create_post_custom_post() {
	register_post_type('custom_post', 
		array(
		'labels' => array(
			'name' => __('Custom Post', 'untheme'),
		),
		'public'       => true,
		'hierarchical' => true,
		'supports'     => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
		), 
		'taxonomies'   => array(
				'post_tag',
				'category',
		) 
	));
}
add_action('init', 'untheme_create_post_custom_post'); // Add our work type

function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true, $params = [] ) {
    if ( null === $wp_query ) {
        global $wp_query;
    }

    $add_args = [];

    //add query (GET) parameters to generated page URLs
    /*if (isset($_GET[ 'sort' ])) {
        $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
    }*/

    $pages = paginate_links( array_merge( [
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format'       => '?paged=%#%',
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'total'        => $wp_query->max_num_pages,
            'type'         => 'array',
            'show_all'     => false,
            'end_size'     => 3,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => __( '« Previous' ),
            'next_text'    => __( 'Next »' ),
            'add_args'     => $add_args,
            'add_fragment' => ''
        ], $params )
    );

    if ( is_array( $pages ) ) {
        //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
        $pagination = '<div class="pagination"><ul class="pagination">';
        foreach ( $pages as $page ) {
            $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
        }
        $pagination .= '</ul></div>';
        if ( $echo ) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }

    return null;
}

