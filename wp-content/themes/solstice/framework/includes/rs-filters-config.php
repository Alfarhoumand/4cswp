<?php
/**
 * Filter Hooks
 *
 * @package solstice
 * @since 1.0
 */

/**
 * Post Column View
 *
 * @package solstice
 * @since 1.0
 */
if(!function_exists('solstice_posts_column_views')) {
  function solstice_posts_column_views($defaults) {
    $defaults['post_views'] = esc_html__('Views', 'solstice');
    return $defaults;
  }
  add_filter('manage_posts_columns', 'solstice_posts_column_views');
}

/**
 * Post Column View
 *
 * @package solstice
 * @since 1.0
 */
if(!function_exists('solstice_posts_custom_column_views')) {
  function solstice_posts_custom_column_views($column_name, $id) {
    if($column_name === 'post_views'){
      echo solstice_getPostViews(get_the_ID());
    }
  }
  add_action('manage_posts_custom_column', 'solstice_posts_custom_column_views',5,2);
}

/**
 * Title Filter
 *
 * @package solstice
 * @since 1.0
 */
if (! function_exists('solstice_wp_title') ) {
  function solstice_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() ) {
      return $title;
    } // end if

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
      $title = "$title $sep $site_description";
    } // end if

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 ) {
      $title = sprintf( __( 'Page %s', 'solstice' ), max( $paged, $page ) ) . " $sep $title";
    } // end if

    return $title;

  } // end rs_wp_title
  add_filter( 'wp_title', 'solstice_wp_title', 10, 2 );
}

/**
 * Avatar img class
 *
 * @package solstice
 * @since 1.0
 */
if( !function_exists('solstice_add_gravatar_class')) {
  function solstice_add_gravatar_class( $class ) {
    $class = str_replace("class='avatar", "class='media-object img-responsive img-circle", $class);
    return $class;
  }
  add_filter('get_avatar','solstice_add_gravatar_class');
}

/**
 * Body Filter Hook
 *
 * @package solstice
 * @since 1.0
 */
if( !function_exists('solstice_body_class')) {
  function solstice_body_class($classes) {
    $classes[] = solstice_get_opt('general-navigation-template');
    return $classes;
  }
  add_filter('body_class', 'solstice_body_class');
}

