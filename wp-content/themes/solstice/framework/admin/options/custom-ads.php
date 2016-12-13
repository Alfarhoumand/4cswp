<?php
/*
 * Header Section
*/

$this->sections[] = array(
  'title' => esc_html__('Custom Ads', 'solstice'),
  'desc' => esc_html__('Change the custom ads section configuration.', 'solstice'),
  'icon' => 'el-icon-cog',
  'fields' => array(
    array(
      'id'=>'custom-ads-img',
      'type' => 'media',
      'url'  => true,
      'title' => esc_html__('Ads', 'solstice'),
      'subtitle' => esc_html__('Custom Ads image', 'solstice'),
    ),
    array(
      'id'=>'custom-ads-link',
      'type' => 'text',
      'title' => esc_html__('Link', 'solstice'),
      'subtitle' => esc_html__('Custom Ads link', 'solstice'),
      'default' => '#'
    ),
  ),
);
