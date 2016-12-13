<?php
/**
 * Action Hooks.
 *
 * @package solstice
 * @since 1.0
 */

/**
* @return null
* @param none
* register widgets
**/
if( !function_exists('solstice_register_sidebar') ) {

  function solstice_register_sidebar() {

    // register sidebars
    register_sidebar(array(
      'id'            => 'main',
      'name'          => 'Main Sidebar',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="widget-title">',
      'after_title'   => '</h5>',
      'description'   => 'Drag the widgets for sidebars.'
    ));

    register_sidebar(array(
      'id'            => 'sideheader',
      'name'          => 'Side Header Sidebar',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="widget-title">',
      'after_title'   => '</h5>',
      'description'   => 'Drag the widgets for header sidebar.'
    ));

    register_sidebar(array(
		'name' => 'Instagram Footer',
		'id' => 'instagram-footer',
		'before_widget' => '<div id="%1$s" class="instagram-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="instagram-title">',
		'after_title' => '</h4>',
		'description' => 'Drag the "Instagram" widget here. NOTE: For best results please set number of photos to 8.',
	));
	
	for($i = 1; $i < 4; $i++) {
      register_sidebar(array(
        'id'            => 'footer-'.$i,
        'name'          => 'Footer Sidebar '.$i,
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="footer-widget-title">',
        'after_title'   => '</h5>',
        'description'   => 'Drag the widgets for sidebars.'
      ));
    }

    $custom_sidebars = solstice_get_opt('custom-sidebars');
    if (is_array($custom_sidebars)) {
      foreach ($custom_sidebars as $sidebar) {

        if (empty($sidebar)) {
          continue;
        }

        register_sidebar ( array (
          'name'          => $sidebar,
          'id'            => sanitize_title ( $sidebar ),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h5 class="widget-title">',
          'after_title'   => '</h5>',
        ) );
      }
    }
  }
  add_action( 'widgets_init', 'solstice_register_sidebar' );
}

/**
* @return null
* @param none
* load widgets
**/
if(!function_exists('solstice_register_widget')) {
  function solstice_register_widget() {
    register_widget('WP_Latest_Posts_Widget');
    register_widget('WP_Social_Widget');
    register_widget('WP_Custom_Ads_Widget');
  }
 add_action( 'widgets_init', 'solstice_register_widget' );
}




/**
* @return null
* @param none
* loads all the js and css script to frontend
**/
if( !function_exists('solstice_enqueue_scripts')) {

  function solstice_enqueue_scripts() {

    if( ( is_admin() ) ) { return; }

    if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); }

    wp_register_script( 'jquery-modernizr',     get_template_directory_uri() .'/js/vendor/modernizr.min.js',array('jquery'),solstice_THEME_VERSION,false);
    wp_register_script( 'jquery-plugins', get_template_directory_uri() .'/js/plugins.js',array('jquery'), solstice_THEME_VERSION,true);
    wp_register_script( 'jquery-main', get_template_directory_uri()   .'/js/main.js',array('jquery'), solstice_THEME_VERSION,true);

    wp_localize_script('jquery-main', 'rs_ajax',
      array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'siteurl' => get_template_directory_uri()
      )
    );

    wp_enqueue_script('jquery-modernizr');
    wp_enqueue_script('jquery-plugins');
    wp_enqueue_script('jquery-main');

    wp_register_style( 'fontawesome', get_template_directory_uri(). '/css/fontawesome.min.css',null, solstice_THEME_VERSION);
    wp_register_style( 'slick', get_template_directory_uri(). '/css/slick.css',null, solstice_THEME_VERSION);
    wp_register_style( 'perfect-scrollbar', get_template_directory_uri(). '/css/perfect-scrollbar.min.css',null, solstice_THEME_VERSION);
    wp_register_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css',null, solstice_THEME_VERSION);
    wp_register_style( 'reset', get_template_directory_uri(). '/css/reset.css',null, solstice_THEME_VERSION);
    wp_register_style( 'normalize', get_template_directory_uri(). '/css/normalize.css',null, solstice_THEME_VERSION);
    wp_register_style( 'main', get_template_directory_uri(). '/css/main.css',null, solstice_THEME_VERSION);

    wp_enqueue_style( 'fontawesome');
    wp_enqueue_style( 'slick');
    wp_enqueue_style( 'perfect-scrollbar');
    wp_enqueue_style( 'bootstrap');
    wp_enqueue_style( 'reset');
    wp_enqueue_style( 'normalize');
    wp_enqueue_style( 'main');

  }
  add_action( 'wp_enqueue_scripts', 'solstice_enqueue_scripts' );
}

if(!function_exists('solstice_admin_enqueue_script')) {
  function solstice_admin_enqueue_script() {
    wp_register_style( 'admin-style', get_template_directory_uri() . '/framework/admin/assets/style.css', array(), solstice_THEME_VERSION, 'all' );
    wp_enqueue_style('admin-style' );
  }
  add_action('admin_enqueue_scripts', 'solstice_admin_enqueue_script');
}


if(! function_exists('solstice_include_required_plugins')) {

  function solstice_include_required_plugins() {

    $plugins = array(

      array(
        'name'    => 'Redux Framework',
        'slug'    => 'redux-framework',
        'required'  => true,
      ),

      array(
      'name'            => 'WP Instagram Widget', // The plugin name
      'slug'            => 'wp-instagram-widget', // The plugin slug (typically the folder name)
      'required'        => false, // If false, the plugin is only 'recommended' instead of required
      'version'         => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'      => '', // If set, overrides default API URL and points to an external URL
      ),	  
	  
	  array(
			'name'     				=> 'WS Facebook Like Box Widget', // The plugin name
			'slug'     				=> 'ws-facebook-likebox', // The plugin slug (typically the folder name)
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
	  ),
	  
	  array(
        'name'               => 'Contact Form 7', // The plugin name
        'slug'               => 'contact-form-7', // The plugin slug (typically the folder name)
        'required'           => false, // If false, the plugin is only 'recommended' instead of required
        'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
        'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
        'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
        'external_url'       => '', // If set, overrides default API URL and points to an external URL
      ),
      array(
        'name'     => 'MailPoet Newsletters',
        'slug'     => 'wysija-newsletters',
        'required' => false ,
      ),
    );

    $config = array(
      'id'           => 'solstice',                   // Unique ID for hashing notices for multiple instances of TGMPA.
      'default_path' => '',                      // Default absolute path to bundled plugins.
      'menu'         => 'tgmpa-install-plugins', // Menu slug.
      'parent_slug'  => 'themes.php',            // Parent menu slug.
      'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
      'has_notices'  => true,                    // Show admin notices or not.
      'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
      'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
      'is_automatic' => false,                   // Automatically activate plugins after installation or not.
      'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );

  }
  add_action( 'tgmpa_register', 'solstice_include_required_plugins' );
}

/**
* @return null
* @param none
* attach custom style to head
**/
if( !function_exists('solstice_custom_styles')) {
  function solstice_custom_styles() { ?>
    <style type="text/css" media="screen" id="solstice-custom-style">
      <?php
        $css_code = solstice_get_opt('css_editor');
        $style = '';
        $style .= ( !empty($css_code)) ? $css_code:'';
        echo wp_strip_all_tags($style);
      ?>
    </style>
    <?php
  }
  add_action( 'wp_head', 'solstice_custom_styles', 8);
}
