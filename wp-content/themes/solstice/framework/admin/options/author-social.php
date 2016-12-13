<?php
/*
 * Header Section
*/

$this->sections[] = array(
  'title' => esc_html__('Post Social Share', 'solstice'),
  'desc' => esc_html__('Enable or disable post social share buttons.', 'solstice'),
  'icon' => 'el-icon-cog',
  'fields' => array(
    array(
      'id'       => 'author-fb-enable',
      'type'     => 'switch',
      'title'    => esc_html__('Facebook', 'solstice'),
      'subtitle' => esc_html__('If on, facebook social share will get displayed.', 'solstice'),
      'default'  => 1,
    ),
    array(
      'id'       => 'author-twitter-enable',
      'type'     => 'switch',
      'title'    => esc_html__('Twitter', 'solstice'),
      'subtitle' => esc_html__('If on, twitter social share will get displayed.', 'solstice'),
      'default'  => 1,
    ),
    array(
      'id'       => 'author-reddit-enable',
      'type'     => 'switch',
      'title'    => esc_html__('Reddit', 'solstice'),
      'subtitle' => esc_html__('If on, reddit social share will get displayed.', 'solstice'),
      'default'  => 1,
    ),
    array(
      'id'       => 'author-pinterset-enable',
      'type'     => 'switch',
      'title'    => esc_html__('Pinterest', 'solstice'),
      'subtitle' => esc_html__('If on, pinterest social share will get displayed.', 'solstice'),
      'default'  => 1,
    ),
    array(
      'id'       => 'author-linkedin-enable',
      'type'     => 'switch',
      'title'    => esc_html__('Linkedin', 'solstice'),
      'subtitle' => esc_html__('If on, linkedin social share will get displayed.', 'solstice'),
      'default'  => 1,
    ),
    array(
      'id'       => 'author-digg-enable',
      'type'     => 'switch',
      'title'    => esc_html__('Digg', 'solstice'),
      'subtitle' => esc_html__('If on, digg social share will get displayed.', 'solstice'),
      'default'  => 1,
    ),
  ),
);
