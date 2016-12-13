<?php
/*
 * General Section
*/

$this->sections[] = array(
	'title' => esc_html__('General Settings', 'solstice'),
	'desc' => esc_html__('Configure easily the basic theme\'s settings.', 'solstice'),
	'icon' => 'el-icon-adjust-alt',
	'fields' => array(

	),
);

$this->sections[] = array(
  'title' => esc_html__('General', 'solstice'),
  'desc' => esc_html__('Configure general styles.', 'solstice'),
  'subsection' => true,
  'fields'  => array(
    array(
      'id'       => 'general-pagination',
      'type'     => 'select',
      'title'    => esc_html__('Pagination', 'solstice'),
      'subtitle' => esc_html__('Choose template for footer.', 'solstice'),
      'options'  => array(
        'standard'  => esc_html__('Standard','solstice'),
        'load-more' => esc_html__('Load More','solstice'),
      ),
      'default' => 'standard',
      'validate' => 'not_empty',
    ),
    array(
      'id'       => 'general-home-layout',
      'type'     => 'select',
      'title'    => esc_html__('Home Page', 'solstice'),
      'subtitle' => esc_html__('Choose template for homepage.', 'solstice'),
      'options'  => array(
        'list' => esc_html__('List','solstice'),
        'grid'  => esc_html__('Grid','solstice'),
      ),
      'default' => 'list',
      'validate' => 'not_empty',
    ),
    array(
      'id'       =>'general-logo',
      'type'     => 'media',
      'url'      => true,
      'title'    => esc_html__('Logo', 'solstice'),
      'subtitle' => esc_html__('Upload the logo that will be displayed in the header.', 'solstice'),
    ),
    array(
      'id'       =>'general-sticky-logo',
      'type'     => 'media',
      'url'      => true,
      'title'    => esc_html__('Sticky Logo', 'solstice'),
      'subtitle' => esc_html__('Upload logo for sticky header.', 'solstice'),
    ),
	array(
      'id'       =>'footer-logo',
      'type'     => 'media',
      'url'      => true,
      'title'    => esc_html__('Footer Logo', 'solstice'),
      'subtitle' => esc_html__('Upload logo for footer section.', 'solstice'),
    ),
    array(
      'id'       =>'general-excerpt',
      'type'     => 'text',
      'title'    => esc_html__('Home Excerpt Length', 'solstice'),
    ),
    array(
      'id'       => 'custom-sidebars',
      'type'     => 'multi_text',
      'title'    => esc_html__( 'Custom Sidebars', 'solstice' ),
      'subtitle' => esc_html__( 'Custom sidebars can be assigned to any page or post.', 'solstice' ),
      'desc'     => esc_html__( 'You can add as many custom sidebars as you need.', 'solstice' )
    ),
    array(
      'id'       => 'general-open-post',
      'type'     => 'switch',
      'title'    => esc_html__('Open Post In New Window', 'solstice'),
      'subtitle' => esc_html__('If on, post will be displayed in new window.', 'solstice'),
      'default'  => 1,
    ),
  ),
);

$this->sections[] = array(
  'title' => esc_html__('Navigation', 'solstice'),
  'desc' => esc_html__('Configure menu styles.', 'solstice'),
  'subsection' => true,
  'fields'  => array(
    array(
      'id'       => 'general-navigation-template',
      'type'     => 'select',
      'title'    => esc_html__('Template', 'solstice'),
      'subtitle' => esc_html__('Choose template for menu.', 'solstice'),
      'options'  => array(
        'sticky-nav-on enable' => esc_html__('Sticky','solstice'),
        'fixed'         => esc_html__('Fixed','solstice'),
      ),
      'default' => 'sticky-nav-on',
      'validate' => 'not_empty',
    ),
    array(
      'id'       => 'general-social',
      'type'     => 'switch',
      'title'    => esc_html__('Social Icons', 'solstice'),
      'subtitle' => esc_html__('If on, social icons will be displayed.', 'solstice'),
      'default'  => 1,
    ),
  ),
);

$this->sections[] = array(
  'title' => esc_html__('Post Meta Data Settings', 'solstice'),
  'desc' => esc_html__('Show/Hide Post meta data', 'solstice'),
  'subsection' => true,
  'fields'  => array(

    array(
      'id'       => 'meta-date',
      'type'     => 'switch',
      'title'    => esc_html__('show date', 'solstice'),
      'subtitle' => esc_html__('If on, date will be displayed.', 'solstice'),
      'default'  => 1,
    ),
    array(
      'id'       => 'meta-views-count',
      'type'     => 'switch',
      'title'    => esc_html__('show views count', 'solstice'),
      'subtitle' => esc_html__('If on, views count will be displayed.', 'solstice'),
      'default'  => 1,
    ),
    array(
      'id'       => 'meta-comment-count',
      'type'     => 'switch',
      'title'    => esc_html__('show comment count', 'solstice'),
      'subtitle' => esc_html__('If on, comment count will be displayed', 'solstice'),
      'default'  => 1,
    ),
  ),
);


