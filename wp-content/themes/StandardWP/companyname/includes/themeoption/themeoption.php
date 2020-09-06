<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update Theme Option.
 */
function custom_theme_options() {
  
  /* Theme Option is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the Theme Option Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => 'General'
      ),
      array(
        'id'          => 'information',
        'title'       => 'Information'
      ),
      array(
        'id'          => 'layout',
        'title'       => 'Page'
      ),
      array(
        'id'          => 'store_information',
        'title'       => 'Store Information'
      ),
      array(
        'id'          => 'blog',
        'title'       => 'Blog'
      ),
      array(
        'id'          => 'header',
        'title'       => 'Header'
      ),
      array(
        'id'          => 'footer',
        'title'       => 'Footer'
      ),
      array(
        'id'          => 'social',
        'title'       => 'Social'
      ),
      array(
        'id'          => 'advance',
        'title'       => 'Advance'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'upload_logo',
        'label'       => 'Upload Logo',
        'desc'        => 'Enter URL or Click Here',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'or'
      ),
      array(
        'id'          => 'text_logo',
        'label'       => 'Text Logo',
        'desc'        => 'Enter Text Logo Here',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'favicon',
        'label'       => 'Favicon',
        'desc'        => 'Upload Favicon 16x16 size',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'store_company_address',
        'label'       => 'Store/Company Address',
        'desc'        => 'Enter Your Store/Company Address',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'information',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'email_address',
        'label'       => 'Email Address',
        'desc'        => 'Leave this blank if you want to show the email address in Settings &gt; General &gt; Email Address',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'information',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'extension_phone_number',
        'label'       => 'Extension Number',
        'desc'        => '(Extension Number) Phone Number',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'information',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'phone_number',
        'label'       => 'Phone Number',
        'desc'        => '(Extension Number) Phone Number',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'information',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'page_layout',
        'label'       => 'Page Layout',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'full_width',
            'label'       => 'Full Width',
            'src'         => ''
          ),
          array(
            'value'       => 'full_width_boxed',
            'label'       => 'Full Width Boxed',
            'src'         => ''
          ),
          array(
            'value'       => 'full_width_sidebar',
            'label'       => 'Full Width Sidebar',
            'src'         => ''
          ),
          array(
            'value'       => 'full_width_boxed_sidebar',
            'label'       => 'Full Width Boxed Sidebar',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'page_sidebar_placement',
        'label'       => 'Page Sidebar Placement',
        'desc'        => '',
        'std'         => 'right',
        'type'        => 'select',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'left',
            'label'       => 'Left',
            'src'         => ''
          ),
          array(
            'value'       => 'right',
            'label'       => 'Right',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'show_page_header',
        'label'       => 'Show Page Header (Global)',
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'page_header_background_default',
        'label'       => 'Page Header Background (Default)',
        'desc'        => '1366x240',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'woocommerce_layout',
        'label'       => 'Woocommerce Layout',
        'desc'        => 'Install Woocommerce Plugin',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'store_information',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'full_width',
            'label'       => 'Full Width',
            'src'         => ''
          ),
          array(
            'value'       => 'full_width_boxed',
            'label'       => 'Full Width Boxed',
            'src'         => ''
          ),
          array(
            'value'       => 'full_width_sidebar',
            'label'       => 'Full Width Sidebar',
            'src'         => ''
          ),
          array(
            'value'       => 'full_width_boxed_sidebar',
            'label'       => 'Full Width Boxed Sidebar',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'woocommerce_sidebar_placement',
        'label'       => 'Woocommerce Sidebar Placement',
        'desc'        => '',
        'std'         => 'right',
        'type'        => 'select',
        'section'     => 'store_information',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'left',
            'label'       => 'Left',
            'src'         => ''
          ),
          array(
            'value'       => 'right',
            'label'       => 'Right',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'woocommerce_show_page_header',
        'label'       => 'Woocommerce Show Page Header',
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'store_information',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'woocommerce_page_header_background',
        'label'       => 'Woocommerce Page Header Background',
        'desc'        => '1366x240',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'store_information',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'blog_layout',
        'label'       => 'Blog Layout',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'full_width',
            'label'       => 'Full Width',
            'src'         => ''
          ),
          array(
            'value'       => 'full_width_boxed',
            'label'       => 'Full Width Boxed',
            'src'         => ''
          ),
          array(
            'value'       => 'full_width_sidebar',
            'label'       => 'Full Width Sidebar',
            'src'         => ''
          ),
          array(
            'value'       => 'full_width_boxed_sidebar',
            'label'       => 'Full Width Boxed Sidebar',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'blog_sidebar_placement',
        'label'       => 'Blog Sidebar Placement',
        'desc'        => '',
        'std'         => 'right',
        'type'        => 'select',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'left',
            'label'       => 'Left',
            'src'         => ''
          ),
          array(
            'value'       => 'right',
            'label'       => 'Right',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'blog_show_page_header',
        'label'       => 'Blog Show Page Header',
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'blog_page_header_background',
        'label'       => 'Blog Page Header Background',
        'desc'        => '1366x240',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'logo_placement',
        'label'       => 'Logo Placement',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'nav-upper-logo',
            'label'       => 'Nav Upper Logo',
            'src'         => ''
          ),
          array(
            'value'       => 'nav-center-logo',
            'label'       => 'Nav Center Logo',
            'src'         => ''
          ),
          array(
            'value'       => 'nav-lower-logo',
            'label'       => 'Nav Lower Logo',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'upper_navbar_left',
        'label'       => 'Upper Navbar (Left)',
        'desc'        => 'Disable Upper Navbar (Left)?',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => 'disable',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'upper_left_social',
        'label'       => 'Upper Social (Left)',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'upper_navbar_right',
        'label'       => 'Upper Navbar (Right)',
        'desc'        => 'Disable Upper Navbar (Right)?',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'upper_right_social',
        'label'       => 'Upper Social (Right)',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'upper_searchbar',
        'label'       => 'Upper Searchbar',
        'desc'        => 'Disable Upper Searchbar?',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'lower_navbar_left',
        'label'       => 'Lower Navbar (Left)',
        'desc'        => 'Disable Lower Navbar (Left)?',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'lower_left_social',
        'label'       => 'Lower Social (Left)',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'lower_navbar_right',
        'label'       => 'Lower Navbar (Right)',
        'desc'        => 'Disable Lower Navbar (Right)?',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'lower_right_social',
        'label'       => 'Lower Social (Right)',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'lower_searchbar',
        'label'       => 'Lower Searchbar',
        'desc'        => 'Disable Lower Searchbar?',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_logo',
        'label'       => 'Footer Logo',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_logo_center',
        'label'       => 'Footer Logo Center',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_column',
        'label'       => 'Footer Column',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => '1_column',
            'label'       => '1 Column',
            'src'         => ''
          ),
          array(
            'value'       => '2_column',
            'label'       => '2 Columns',
            'src'         => ''
          ),
          array(
            'value'       => '3_column',
            'label'       => '3 Columns',
            'src'         => ''
          ),
          array(
            'value'       => '4_column',
            'label'       => '4 Columns',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'column_01_footer_logo',
        'label'       => 'Column 01 Footer Logo',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_01_page',
        'label'       => 'Column 01 Page',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_01_page_select',
        'label'       => 'Column 01 Page Select',
        'desc'        => '',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_01_address',
        'label'       => 'Column 01 Address',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_01_phone_number',
        'label'       => 'Column 01 Phone Number',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_01_email_address',
        'label'       => 'Column 01 Email Address',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_01_social',
        'label'       => 'Column 01 Social',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_02_address',
        'label'       => 'Column 02 Address',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_02_phone_number',
        'label'       => 'Column 02 Phone Number',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_02_email_address',
        'label'       => 'Column 02 Email Address',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_02_social',
        'label'       => 'Column 02 Social',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_03_address',
        'label'       => 'Column 03 Address',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_03_phone_number',
        'label'       => 'Column 03 Phone Number',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_03_email_address',
        'label'       => 'Column 03 Email Address',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_03_social',
        'label'       => 'Column 03 Social',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_04_footer_logo',
        'label'       => 'Column 04 Footer Logo',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_04_page',
        'label'       => 'Column 04 Page',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_04_page_select',
        'label'       => 'Column 04 Page Select',
        'desc'        => '',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_04_address',
        'label'       => 'Column 04 Address',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_04_phone_number',
        'label'       => 'Column 04 Phone Number',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_04_email_address',
        'label'       => 'Column 04 Email Address',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'column_04_social',
        'label'       => 'Column 04 Social',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'copyright',
        'label'       => 'Copyright',
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'copyright_placement',
        'label'       => 'Copyright Placement',
        'desc'        => '',
        'std'         => 'center',
        'type'        => 'select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'center',
            'label'       => 'Center',
            'src'         => ''
          ),
          array(
            'value'       => 'left',
            'label'       => 'Left',
            'src'         => ''
          ),
          array(
            'value'       => 'right',
            'label'       => 'Right',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'copyright_social',
        'label'       => 'Copyright Social',
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'social_links',
        'label'       => 'Social Links',
        'desc'        => '',
        'std'         => '',
        'type'        => 'social-links',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'custom_css',
        'label'       => 'Custom Css',
        'desc'        => 'Dynamic CSS',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'advance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets Theme Option know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}