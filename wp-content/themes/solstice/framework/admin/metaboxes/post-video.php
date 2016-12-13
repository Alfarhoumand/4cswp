<?php
/*
 * Post
*/

$sections[] = array(
	'icon' => 'el-icon-screen',
	'fields' => array(
		array(
			'id'        => 'post-video-url',
			'type'      => 'text',
			'title'     => esc_html__('Video URL', 'solstice'),
			'subtitle'  => esc_html__('YouTube or Vimeo video URL', 'solstice'),
			'default'   => '',
		),
	)
);
