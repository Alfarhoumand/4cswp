<?php
/*
 * Side Header Section
*/

$this->sections[] = array(
  'title' => esc_html__('Left Slide Out Sidebar', 'solstice'),
  'desc' => esc_html__('Change the left side header section configuration.', 'solstice'),
  'icon' => 'el-icon-cog',
  'fields' => array(
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => esc_html__('Side Header sidebar configuration', 'solstice')
    ),
    array(
      'id'       =>'sideheader-logo',
      'type'     => 'media',
      'url'      => true,
      'title'    => esc_html__('Logo', 'solstice'),
      'subtitle' => esc_html__('Upload the logo that will be displayed in the Slide Out Sidebar.', 'solstice'),
    ),
    array(
      'id' => 'sideheader-enable',
      'type' => 'switch',
      'title' => esc_html__('Enable Side Header', 'solstice'),
      'subtitle' => esc_html__('If on, side header will be displayed.', 'solstice'),
      'default' => 1,
    ),
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => esc_html__('Side Header bar configuration', 'solstice')
    ),
    array(
      'id' => 'sideheader-copyright-enable',
      'type' => 'switch',
      'title' => esc_html__('Enable Copyright', 'solstice'),
      'subtitle' => esc_html__('If on, side header copyright will be displayed.', 'solstice'),
      'default' => 1,
    ),
    array(
      'id' => 'sideheader-text-content',
      'type' => 'text',
      'title' => esc_html__('Copyright Content', 'solstice'),
      'subtitle' => esc_html__('Place any text to be displayed.', 'solstice'),
      'default' => '',
    ),
  ), // #fields
);
