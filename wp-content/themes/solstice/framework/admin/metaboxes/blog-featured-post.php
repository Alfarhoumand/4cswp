<?php
/**
 * Page Template Blog
 */

$sections[] = array(
  'title' => esc_html__(' Featured Post', 'solstice'),
  'fields' => array(
    array(
      'id'        => 'blog-featured-category-local',
      'type'      => 'select',
      'title'     => esc_html__('Tag', 'solstice'),
      'subtitle'  => esc_html__('Select desired tag', 'solstice'),
      'options'   => solstice_element_values_page( 'tags', array(
        'sort_order'  => 'ASC',
        'hide_empty'  => false,
        'taxonomies'  => 'post_tag',
        'args'        => '',
      ) ),
      'multi'     => true,
      'default' => '',
    ),
  )
);
