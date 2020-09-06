<?php

function companyname_widgets_init() {

  	/*
    Sidebar (one widget area)
     */
    register_sidebar( array(
        'name' => __( 'Sidebar', 'companyname' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'The sidebar widget area', 'companyname' ),
        'before_widget' => '<div class="widget %1$s %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

  	/*
    Footer (Column 01)
     */
    register_sidebar( array(
        'name' => __( 'Footer Column 01', 'companyname' ),
        'id' => 'footer-column-01',
        'description' => __( 'The footer column 01', 'companyname' ),
        'before_widget' => '<div class="footer-column-01">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-title">',
        'after_title' => '</h4>',
    ) );

    /*
    Footer (Column 02)
     */
    register_sidebar( array(
        'name' => __( 'Footer Column 02', 'companyname' ),
        'id' => 'footer-column-02',
        'description' => __( 'The footer column 02', 'companyname' ),
        'before_widget' => '<div class="footer-column-02">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-title">',
        'after_title' => '</h4>',
    ) );

    /*
    Footer (Column 03)
     */
    register_sidebar( array(
        'name' => __( 'Footer Column 03', 'companyname' ),
        'id' => 'footer-column-03',
        'description' => __( 'The footer column 03', 'companyname' ),
        'before_widget' => '<div class="footer-column-03">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-title">',
        'after_title' => '</h4>',
    ) );

    /*
    Footer (Column 04)
     */
    register_sidebar( array(
        'name' => __( 'Footer Column 04', 'companyname' ),
        'id' => 'footer-column-04',
        'description' => __( 'The footer column 04', 'companyname' ),
        'before_widget' => '<div class="footer-column-04">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-title">',
        'after_title' => '</h4>',
    ) );
    /*
    Footer (Column 04)
     */
    register_sidebar( array(
        'name' => __( 'Copyright', 'companyname' ),
        'id' => 'copyright-widget',
        'description' => __( 'Copyright Widget', 'companyname' ),
        'before_widget' => '<div class="copyright-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-title">',
        'after_title' => '</h4>',
    ) );

}
add_action( 'widgets_init', 'companyname_widgets_init' );
