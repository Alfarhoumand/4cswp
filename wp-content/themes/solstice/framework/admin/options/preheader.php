<?php
/*
 * Header Section
*/

$this->sections[] = array(
  'title' => esc_html__('Preheader', 'solstice'),
  'desc' => esc_html__('Change the preheader section configuration.', 'solstice'),
  'icon' => 'el-icon-cog',
  'fields' => array(
    array(
      'id'       => 'preheader-search',
      'type'     => 'switch',
      'title'    => esc_html__('Search', 'solstice'),
      'subtitle' => esc_html__('If on, search form will be displayed.', 'solstice'),
      'default'  => 1,
    ),
  ),
);
