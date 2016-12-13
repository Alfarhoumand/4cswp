<?php
/*
 * Footer Section
*/

$this->sections[] = array(
  'title' => esc_html__('Footer', 'solstice'),
  'desc' => esc_html__('Change the footer section configuration.', 'solstice'),
  'icon' => 'el-icon-cog',
  'fields' => array(


    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => esc_html__('Footer sidebar configuration', 'solstice')
    ),
    array(
      'id' => 'footer-enable-social',
      'type' => 'switch',
      'title' => esc_html__('Enable Social Icons', 'solstice'),
      'subtitle' => esc_html__('If on, social icon will be displayed.', 'solstice'),
      'default' => 1,
    ),
    array(
      'id'        => 'footer-sidebar-1',
      'type'      => 'select',
      'title'     => esc_html__('Footer Sidebar 1', 'solstice'),
      'subtitle'  => esc_html__('Select custom sidebar', 'solstice'),
      'options'   => solstice_get_custom_sidebars_list(),
      'default'   => 'default',
      'validate'  => 'not_empty'
    ),

    array(
      'id'        => 'footer-sidebar-2',
      'type'      => 'select',
      'title'     => esc_html__('Footer Sidebar 2', 'solstice'),
      'subtitle'  => esc_html__('Select custom sidebar', 'solstice'),
      'options'   => solstice_get_custom_sidebars_list(),
      'default'   => 'default',
      'validate'  => 'not_empty'
    ),

    array(
      'id'        => 'footer-sidebar-3',
      'type'      => 'select',
      'title'     => esc_html__('Footer Sidebar 3', 'solstice'),
      'subtitle'  => esc_html__('Select custom sidebar', 'solstice'),
      'options'   => solstice_get_custom_sidebars_list(),
      'default'   => 'default',
      'validate'  => 'not_empty'
    ),


    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => esc_html__('Footer bar configuration', 'solstice')
    ),
    array(
      'id' => 'footer-text-content',
      'type' => 'text',
      'title' => esc_html__('Copyright Content', 'solstice'),
      'subtitle' => esc_html__('Place any text to be displayed.', 'solstice'),
      'default' => '',
    ),
  ), // #fields
);
