<?php
/*
 * Layout Section
*/

$sections[] = array(
  'title' => esc_html__('Sidebar Settings', 'solstice'),
  'desc'  => esc_html__('Change the main theme\'s layout and configure it.', 'solstice'),
  'icon'  => 'el-icon-adjust-alt',
  'fields' => array(
    array(
      'id'        => 'sidebar-local',
      'type'      => 'select',
      'title'     => esc_html__('Sidebar', 'solstice'),
      'subtitle'  => esc_html__('Select custom sidebar', 'solstice'),
      'options'   => solstice_get_custom_sidebars_list(),
      'default'   => 'default',
    ),

  ),
);
