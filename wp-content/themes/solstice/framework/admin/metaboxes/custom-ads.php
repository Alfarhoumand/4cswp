<?php
/**
 * Page Template Blog
 */

$sections[] = array(
  'title' => esc_html__('Custom Ads', 'solstice'),
  'icon' => 'el-icon-screen',
  'fields' => array(
    array(
      'id'=>'custom-ads-img-local',
      'type' => 'media',
      'url'  => true,
      'title' => esc_html__('Ads', 'solstice'),
      'subtitle' => esc_html__('Custom Ads image', 'solstice'),
    ),
    array(
      'id'=>'custom-ads-link-local',
      'type' => 'text',
      'title' => esc_html__('Link', 'solstice'),
      'subtitle' => esc_html__('Custom Ads link', 'solstice'),
      'default' => '#'
    ),
  )
);
