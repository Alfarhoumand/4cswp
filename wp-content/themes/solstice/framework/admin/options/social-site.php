<?php
/*
 * Custom Code
*/

$this->sections[] = array(
  'title' => esc_html__('Social Site', 'solstice'),
  'desc' => esc_html__('Easily add social icons.', 'solstice'),
  'icon' => 'el-icon-wrench',
  'fields' => array(

    array(
      'id'      => 'social-facebook',
      'type'    => 'text',
      'title'   => esc_html__('Facebook', 'solstice'),
      'default' => '#',
    ),
    array(
      'id'      => 'social-twitter',
      'type'    => 'text',
      'title'   => esc_html__('Twitter', 'solstice'),
      'default' => '#',
    ),
    array(
      'id'      => 'social-instagram',
      'type'    => 'text',
      'title'   => esc_html__('Instagram', 'solstice'),
      'default' => '#',
    ),
    array(
      'id'      => 'social-pinterset',
      'type'    => 'text',
      'title'   => esc_html__('Pinterest', 'solstice'),
      'default' => '#',
    ),
    array(
      'id'      => 'social-gplus',
      'type'    => 'text',
      'title'   => esc_html__('Google Plus', 'solstice'),
      'default' => '#',
    ),
    array(
      'id'      => 'social-tumblr',
      'type'    => 'text',
      'title'   => esc_html__('Tumblr', 'solstice'),
      'default' => '#',
    ),
    array(
      'id'      => 'social-youtube',
      'type'    => 'text',
      'title'   => esc_html__('Youtube', 'solstice'),
      'default' => '#',
    ),
    array(
      'id'      => 'social-envolpe',
      'type'    => 'text',
      'title'   => esc_html__('Envelope', 'solstice'),
      'default' => '#',
    ),
  ),
);
