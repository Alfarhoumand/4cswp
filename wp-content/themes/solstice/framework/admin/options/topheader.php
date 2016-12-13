<?php
/*
 * Header Section
*/

$this->sections[] = array(
  'title' => esc_html__('Topheader', 'solstice'),
  'desc' => esc_html__('Change the topheader section configuration.', 'solstice'),
  'icon' => 'el-icon-cog',
  'fields' => array(
    array(
      'id'       => 'topheader-enable',
      'type'     => 'switch',
      'title'    => esc_html__('Enable Top Header', 'solstice'),
      'subtitle' => esc_html__('If on, top header will be displayed.', 'solstice'),
      'default'  => 1,
    ),
    array(
      'id'       =>'topheader-content',
      'type'     => 'editor',
      'title'    => esc_html__('Content', 'solstice'),
      'subtitle' => esc_html__('Add content for topheader.', 'solstice'),
    ),
    array(
      'id'       => 'topheader-enable-page',
      'type'     => 'select',
      'title'    => esc_html__('Appear On Page', 'solstice'),
      'options'  => array(
        'all-page'  => esc_html__('All Pages','solstice'),
        'home-only' => esc_html__('Only Home Page','solstice'),
      ),
      'default' => 'all-page',
      'validate' => 'not_empty',
    ),
  ),
);
