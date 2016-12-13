<?php
/**
 * Page Template Blog
 */

$sections[] = array(
  'title' => esc_html__('Contact', 'solstice'),
  'icon' => 'el-icon-screen',
  'fields' => array(
    array(
      'id'=>'contact-form-id',
      'type' => 'text',
      'title' => esc_html__('Contact Form ID', 'solstice'),
    ),
  )
);
