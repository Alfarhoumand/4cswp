<?php
/*
 * Blog Section
*/
$this->sections[] = array(
  'title' => esc_html__('Slider/Featured', 'solstice'),
  'desc' => esc_html__('Slider and featured post settings.', 'solstice'),
  'icon' => 'el-icon-screen',
  'fields' => array(

    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2>'.esc_html__('Slider/Featured Settings', 'solstice').'</h2>'
    ),
    array(
      'id'       => 'slider-enable-disable',
      'type'     => 'switch',
      'title'    => esc_html__('Slider/Featured Area', 'solstice'),
      'subtitle' => esc_html__('If on, slider and featured area will be displayed.', 'solstice'),
      'default'  => 1,
    ),
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2>'.esc_html__('Slider Settings', 'solstice').'</h2>'
    ),
    array(
      'id'        => 'blog-slider-category',
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
    ),
    array(
      'id'        => 'blog-slider-posts-per-page',
      'type'      => 'text',
      'title'     => esc_html__('No of Slides', 'solstice'),
      'subtitle'  => esc_html__('The number of items to show on slider.', 'solstice'),
      'default'   => '',
    ),
    array(
      'id'        => 'blog-slider-posts-duration',
      'type'      => 'text',
      'title'     => esc_html__('Duration of Slides', 'solstice'),
      'subtitle'  => esc_html__('The slider duration.', 'solstice'),
      'default'   => '1800',
    ),
    array(
      'id'        => 'blog-slider-posts-navigation',
      'type'      => 'switch',
      'title'     => esc_html__('Always Show Navigation ?', 'solstice'),
      'subtitle'  => esc_html__('The slider navigation settings.', 'solstice'),
      'default'   => 1,
    ),
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2>'.esc_html__('Featured Post Settings', 'solstice').'</h2>'
    ),
    array(
      'id'        => 'featured-posts-area',
      'type'      => 'switch',
      'title'     => esc_html__('Display Featured Posts Area?', 'solstice'),
      'subtitle'  => esc_html__('Show/Hide Featured Posts Area below slider.', 'solstice'),
      'default'   => 1,
    ),
    array(
      'id'        => 'blog-featured-category',
      'type'      => 'select',
      'title'     => esc_html__('Tags', 'solstice'),
      'subtitle'  => esc_html__('Select desired tag', 'solstice'),
      'options'   => solstice_element_values_page( 'tag', array(
        'sort_order'  => 'ASC',
        'hide_empty'  => false,
        'taxonomies'  => 'post_tag',
        'args'        => '',
      ) ),
      'multi'     => true,
    ),

  ), // #fields
);
