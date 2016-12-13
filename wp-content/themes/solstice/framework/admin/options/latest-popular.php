<?php
/*
 * Header Section
*/

$this->sections[] = array(
  'title' => esc_html__('Latest/Popular Post', 'solstice'),
  'desc' => esc_html__('Change the latest/popular section configuration.', 'solstice'),
  'icon' => 'el-icon-cog',
  'fields' => array(
    array(
      'id'       => 'latest-popular-enable',
      'type'     => 'switch',
      'title'    => esc_html__('Show Posts', 'solstice'),
      'subtitle' => esc_html__('If off, only latest post will get displayed.', 'solstice'),
      'default'  => 1,
    ),
  ),
);
