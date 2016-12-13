<?php

$redux_opt_name = REDUX_OPT_NAME;

function solstice_redux_add_metaboxes($metaboxes) {

  // Variable used to store the configuration array of metaboxes
  $metaboxes = array();

  $metaboxes[] = solstice_redux_get_page_template_blog_metaboxes();
  $metaboxes[] = solstice_redux_get_page_metaboxes();
  $metaboxes[] = solstice_redux_get_video_post_metaboxes();
  $metaboxes[] = solstice_redux_get_gallery_post_metaboxes();
  $metaboxes[] = solstice_redux_get_post_adv_metaboxes();
  $metaboxes[] = solstice_redux_get_contact_metaboxes();

  return $metaboxes;
}
add_action('redux/metaboxes/'.$redux_opt_name.'/boxes', 'solstice_redux_add_metaboxes');


/**
 * Get configuration array for blog template
 * @return type
 */
function solstice_redux_get_page_template_blog_metaboxes() {

  // Variable used to store the configuration array of sections
  $sections = array();

  // Metabox used to overwrite theme options by page
  require get_template_directory() . '/framework/admin/metaboxes/blog-slider.php';
  require get_template_directory() . '/framework/admin/metaboxes/blog-featured-post.php';
  require get_template_directory() . '/framework/admin/metaboxes/blog-latest-post.php';
  require get_template_directory() . '/framework/admin/metaboxes/blog-popular-post.php';
  require get_template_directory() . '/framework/admin/metaboxes/custom-ads.php';

  return array(
    'id' => 'solstice-template-blog-options',
    'title' => esc_html__('Blog Options', 'solstice'),
    'post_types' => array('page'),
    'position' => 'normal', // normal, advanced, side
    'priority' => 'high', // high, core, default, low
    'sections' => $sections,
    'page_template' => array(
      'page-templates/blog-list.php',
      'page-templates/blog-grid.php',
      'page-templates/grid-full-width.php',
    )
  );
}

/**
 * Get configuration array for contact template
 * @return type
 */
function solstice_redux_get_contact_metaboxes() {

  // Variable used to store the configuration array of sections
  $sections = array();

  // Metabox used to overwrite theme options by page
  require get_template_directory() . '/framework/admin/metaboxes/contact.php';

  return array(
    'id' => 'solstice-template-contact-options',
    'title' => esc_html__('Contact Options', 'solstice'),
    'post_types' => array('page'),
    'position' => 'normal', // normal, advanced, side
    'priority' => 'high', // high, core, default, low
    'sections' => $sections,
    'page_template' => array(
      'page-templates/contact.php',
    )
  );
}


/**
 * Get configuration array for page metaboxes
 * @return type
 */
function solstice_redux_get_page_metaboxes() {

  // Variable used to store the configuration array of sections
  $sections = array();

  // Metabox used to overwrite theme options by page
  require get_template_directory() . '/framework/admin/metaboxes/layout.php';

  return array(
    'id' => 'solstice-page-options',
    'title' => esc_html__('Options', 'solstice'),
    'post_types' => array('page'),
    'position' => 'normal', // normal, advanced, side
    'priority' => 'high', // high, core, default, low
    'sections' => $sections
  );
}


/**
 * Get configuration array for video post metaboxes
 * @return type
 */
function solstice_redux_get_video_post_metaboxes() {

  // Variable used to store the configuration array of sections
  $sections = array();

  // Metabox used to overwrite theme options by page
  require get_template_directory() . '/framework/admin/metaboxes/post-video.php';

  return array(
    'id' => 'solstice-video-post-options',
    'title' => esc_html__('Video Post Options', 'solstice'),
    'post_types' => array('post'),
    'position' => 'normal', // normal, advanced, side
    'priority' => 'high', // high, core, default, low
    'sections' => $sections,
    'post_format' => array('video')
  );
}

/**
 * Get configuration array for gallery post metaboxes
 * @return type
 */
function solstice_redux_get_gallery_post_metaboxes() {

  // Variable used to store the configuration array of sections
  $sections = array();

  // Metabox used to overwrite theme options by page
  require get_template_directory() . '/framework/admin/metaboxes/post-gallery.php';

  return array(
    'id' => 'solstice-gallery-post-options',
    'title' => esc_html__('Gallery Post Options', 'solstice'),
    'post_types' => array('post'),
    'position' => 'normal', // normal, advanced, side
    'priority' => 'high', // high, core, default, low
    'sections' => $sections,
    'post_format' => array('gallery')
  );
}

/**
 * Get configuration array for page metaboxes
 * @return type
 */
function solstice_redux_get_post_adv_metaboxes() {

  // Variable used to store the configuration array of sections
  $sections = array();

  // Metabox used to overwrite theme options by page
  require get_template_directory() . '/framework/admin/metaboxes/layout.php';

  return array(
    'id' => 'solstice-post-adv-options',
    'title' => esc_html__('Options', 'solstice'),
    'post_types' => array('post'),
    'position' => 'normal', // normal, advanced, side
    'priority' => 'high', // high, core, default, low
    'sections' => $sections
  );
}
