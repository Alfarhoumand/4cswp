<?php
/**
 * Single Meida File
 *
 * @package solstice
 * @since 1.0
 */
?>

<?php

  $post_format = get_post_format();
  switch ($post_format) {
    case 'audio':
      # code...
      break;
    case 'video':
      $video_url = solstice_get_post_opt('post-video-url'); ?>
      <iframe src="<?php echo esc_url($video_url); ?>?title=0&byline=0&portrait=0"></iframe>
      <?php
      break;
    case 'gallery':
      $gallery = solstice_get_post_opt('post-gallery');
      if(is_array($gallery) && !empty($gallery)): ?>
      <div class="blog-post-slider">
        <?php foreach ($gallery as $item): ?>
          <article class="blog-post">
            <header>
              <figure>
                <?php if (isset($item['attachment_id'])):
                  echo wp_get_attachment_image( $item['attachment_id'], 'solstice-big-alt', array('alt' => esc_attr($item['title'])) );
                endif; ?>
              </figure>
            </header>
          </article>
        <?php endforeach; ?>
        </div><!-- /slider -->
      <?php
      endif;
      break;
    default: ?>
      <figure>
        <?php the_post_thumbnail('solstice-big-alt'); ?>
      </figure>
    <?php
      break;
  }

