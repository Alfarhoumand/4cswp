<?php
/**
 * Page Template Blog
 */

$sections[] = array(
  'title' => esc_html__(' Featured Slider', 'solstice'),
  'icon' => 'el-icon-screen',
  'fields' => array(
    array(
      'id'        => 'blog-slider-category-local',
      'type'      => 'select',
      'title'     => esc_html__('Tags', 'solstice'),
      'subtitle'  => esc_html__('Select desired tag for slider', 'solstice'),
      'options'   => solstice_element_values_page( 'tags', array(
        'sort_order'  => 'ASC',
        'hide_empty'  => false,
        'taxonomies'  => 'post_tag',
        'args'        => '',
      ) ),
      'multi'     => true,
      'default' => '',
    ),
    array(
      'id'        => 'blog-slider-posts-per-page-local',
      'type'      => 'text',
      'title'     => esc_html__('No of Slides', 'solstice'),
      'subtitle'  => esc_html__('The number of items to show on slider.', 'solstice'),
      'default'   => '',
    ),
    array(
      'id'        => 'blog-slider-posts-duration-local',
      'type'      => 'text',
      'title'     => esc_html__('Duration of Slides', 'solstice'),
      'subtitle'  => esc_html__('The slider duration.', 'solstice'),
      'default'   => '700',
    ),
    array(
      'id'        => 'blog-slider-posts-navigation-local',
      'type'      => 'switch',
      'title'     => esc_html__('Always Show Navigation ?', 'solstice'),
      'subtitle'  => esc_html__('The slider navigation settings.', 'solstice'),
      'default'   => 1,
    ),
  )
);
