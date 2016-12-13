<?php
/**
 * Page Template Blog
 */

$sections[] = array(
  'title' => esc_html__(' Latest Post', 'solstice'),
  'icon' => 'el-icon-screen',
  'fields' => array(
    array(
      'id'        => 'blog-latest-category-local',
      'type'      => 'select',
      'title'     => esc_html__('Categories', 'solstice'),
      'subtitle'  => esc_html__('Select desired categories for latset post', 'solstice'),
      'options'   => solstice_element_values_page( 'categories', array(
        'sort_order'  => 'ASC',
        'hide_empty'  => false,
      ) ),
      'multi'     => true,
      'default' => '',
    ),
    array(
      'id'        => 'blog-latest-posts-per-page-local',
      'type'      => 'text',
      'title'     => esc_html__('Post Per Page', 'solstice'),
      'subtitle'  => esc_html__('The number of items to show.', 'solstice'),
      'default'   => '',
    ),
  )
);
