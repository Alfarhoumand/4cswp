<?php
/**
 * Backend Theme Functions.
 *
 * @package solstice
 * @subpackage Template
 */

/**
 * Get theme option value
 * @param string $option
 * @return mix|boolean
 */
function solstice_get_opt($option) {
  global $solstice_theme_options;

  $local = false;

  //get local from main shop page
  if (class_exists( 'WooCommerce' ) && (is_shop() || is_product_category() || is_product_tag())) {

    $shop_page = woocommerce_get_page_id( 'shop' );

    if (!empty($shop_page)) {
      $value = solstice_get_post_opt( $option.'-local', (int)$shop_page);
      $local = true;
    }

    //echo $option.'from singular';

  //get local from metaboxes for the post value and override if not empty
  } else if (is_singular()) {
    $value = solstice_get_post_opt( $option.'-local' );
    //print_r($value);
    $local = true;
  }

  //return local value if exists
  if ($local === true) {
    //if $value is an array we need to check if first element is not empty before we return $value
    $first_element = null;
    if (is_array($value)) {
      $first_element = reset($value);
    }
    if (is_string($value) && (strlen($value) > 0 || !empty($value)) || is_array($value) && !empty($first_element)) {
      return $value;
    }
  }

  if (isset($solstice_theme_options[$option])) {
    return $solstice_theme_options[$option];
  }
  return false;
}

/**
 * Get next page URL
 * @param int $max_num_pages
 * @return string/boolean
 */
if(!function_exists('solstice_next_page_url')) {
  function solstice_next_page_url($max_num_pages = 0) {

    if ($max_num_pages === false) {
      global $wp_query;
      $max_num_pages = $wp_query->max_num_pages;
    }

    if ($max_num_pages > max(1, get_query_var('paged'))) {

      return get_pagenum_link(max(1, get_query_var('paged')) + 1);
    }
    return false;
  }
}

/**
 * Get single post option value
 * @param unknown $option
 * @param string $id
 * @return NULL|mixed
 */
function solstice_get_post_opt( $option, $id = '' ) {

  global $post;

  if (!empty($id)) {
    $local_id = $id;
  } else {
    if(!isset($post->ID)) {
      return null;
    }
    $local_id = get_the_ID();

  }

  //echo $option;

  if(function_exists('redux_post_meta')) {
    $options = redux_post_meta(REDUX_OPT_NAME, $local_id);
  } else {
    $options = get_post_meta( $local_id, REDUX_OPT_NAME, true );
  }

  if( isset( $options[$option] ) ) {
    return $options[$option];
  } else {
    return null;
  }
}

/**
 * Check if wordpress importer is activated
 * @return boolean
 */
function solstice_check_if_wordpress_importer_activated() {

  include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
  if( is_plugin_active( 'wordpress-importer/wordpress-importer.php' ) ) {
    return true;
  }
  return false;
}

/**
*
* @return none
* @param  css
* compress css
*
**/
if( !function_exists('solstice_css_compress')) {

  function solstice_css_compress($css) {
    $css  = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css );
    $css  = str_replace( ': ', ':', $css );
    $css  = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '    ', '    ' ), '', $css );
    return $css;
  }

}


/**
 * Get custom sidebars list
 * @return array
 */
function solstice_get_custom_sidebars_list($add_default = true) {

  $sidebars = array();
  if ($add_default) {
    $sidebars['default'] = __('Default', 'solstice');
  }

  $options = get_option('solstice_theme_options');

  if (!isset($options['custom-sidebars']) || !is_array($options['custom-sidebars'])) {
    return $sidebars;
  }

  if (is_array($options['custom-sidebars'])) {
    foreach ($options['custom-sidebars'] as $sidebar) {
      $sidebars[sanitize_title ( $sidebar )] = $sidebar;
    }
  }

  return $sidebars;
}

/**
 * Get custom sidebar, returns $default if custom sidebar is not defined
 * @param string $default
 * @param string $sidebar_option_field
 * @return string
 */
if( !function_exists('solstice_get_custom_sidebar')) {
  function solstice_get_custom_sidebar($default = '', $sidebar_option_field = 'sidebar') {

    $sidebar = solstice_get_opt($sidebar_option_field);

    if ($sidebar != 'default' && !empty($sidebar)) {
      return $sidebar;
    }
    return $default;
  }
}

/**
 *
 * Blog Excerpt Read More
 * @since 1.7.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'solstice_auto_post_excerpt' ) ) {
  function solstice_auto_post_excerpt( $limit = '' ) {
    $limit   = ( empty($limit)) ? 20:$limit;
    $content = get_the_excerpt();
    $content = strip_shortcodes( $content );
    $content = str_replace( ']]>', ']]&gt;', $content );
    $content = strip_tags( $content );
    $words   = explode( ' ', $content, $limit + 1 );

    if( count( $words ) > $limit ) {

      array_pop( $words );
      $content  = implode( ' ', $words );
      $content .= ' &hellip;';

    }

    return $content;

  }
}

/**
*
* @return none
* @param  class
* multiple class sanitization
*
**/
if ( ! function_exists( 'sanitize_html_classes' ) && function_exists( 'sanitize_html_class' ) ) {
  function sanitize_html_classes( $class, $fallback = null ) {

    // Explode it, if it's a string
    if ( is_string( $class ) ) {
      $class = explode(" ", $class);
    }


    if ( is_array( $class ) && count( $class ) > 0 ) {
      $class = array_map("sanitize_html_class", $class);
      return implode(" ", $class);
    }
    else {
      return sanitize_html_class( $class, $fallback );
    }
  }
}

/**
*
* @return none
* @param  style
* add inline css
*
**/
global $solstice_inline_styles;
$solstice_inline_styles = array();
if( ! function_exists( 'solstice_add_inline_style' ) ) {
  function solstice_add_inline_style( $style ) {

    global $solstice_inline_styles;
    array_push( $solstice_inline_styles, $style );
  }
}


/**
 *
 * element values post, page, categories
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'solstice_element_values_page' ) ) {
  function solstice_element_values_page(  $type = '', $query_args = array() ) {

    $options = array();

    switch( $type ) {

      case 'pages':
      case 'page':
      $pages = get_pages( $query_args );

      if ( !empty($pages) ) {
        foreach ( $pages as $page ) {
          $options[$page->post_title] = $page->ID;
        }
      }
      break;

      case 'posts':
      case 'post':
      $posts = get_posts( $query_args );

      if ( !empty($posts) ) {
        foreach ( $posts as $post ) {
          $options[$post->post_title] = lcfirst($post->post_title);
        }
      }
      break;

      case 'tags':
      case 'tag':

      $tags = get_terms( $query_args['taxonomies'], $query_args['args'] );
        if ( !empty($tags) ) {
          foreach ( $tags as $tag ) {
            $options[$tag->term_id] = $tag->name;
        }
      }
      break;

      case 'categories':
      case 'category':

      $categories = get_categories( $query_args );
      if ( !empty($categories) ) {
        foreach ( $categories as $category ) {
          $options[$category->term_id] = $category->name;
        }
      }
      break;

      case 'custom':
      case 'callback':

      if( is_callable( $query_args['function'] ) ) {
        $options = call_user_func( $query_args['function'], $query_args['args'] );
      }

      break;

    }

    return $options;

  }
}


/**
 * getPost View
 *
 * @since solstice 1.0
 */
if(!function_exists('solstice_getPostViews')) {
  function solstice_getPostViews($postID) {
    $count_key = 'post_views_count';
    $count     = get_post_meta($postID, $count_key, true);
    if($count == '' || $count == 0 ){
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return wp_kses_post('0 View', 'solstice');
    }
    return $count.' '.esc_html__('Views', 'solstice');
  }
}

/**
 * Set Post View
 *
 * @since solstice 1.0
 */
if(!function_exists('solstice_setPostViews')) {
  function solstice_setPostViews($postID) {
    $count_key = 'post_views_count';
    $count     = get_post_meta($postID, $count_key, true);
    if($count == ''){
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
    } else {
      $count++;
      update_post_meta($postID, $count_key, $count);
    }
  }
}
