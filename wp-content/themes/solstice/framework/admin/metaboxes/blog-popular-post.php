<?php
/**
 * Page Template Blog
 */

$sections[] = array(
  'title' => esc_html__(' Popular Post', 'solstice'),
  'icon' => 'el-icon-screen',
  'fields' => array(
    array(
      'id'        => 'blog-popular-category-local',
      'type'      => 'select',
      'title'     => esc_html__('Categories', 'solstice'),
      'subtitle'  => esc_html__('Select desired categories', 'solstice'),
      'options'   => solstice_element_values_page( 'categories', array(
        'sort_order'  => 'ASC',
        'hide_empty'  => false,
      ) ),
      'multi'     => true,
      //'default' => '',
    ),
    array(
      'id'        => 'blog-popular-posts-per-page-local',
      'type'      => 'text',
      'title'     => esc_html__('Post Per Page', 'solstice'),
      'subtitle'  => esc_html__('The number of items to show.', 'solstice'),
      //'default'   => '',
    ),
  )
);
