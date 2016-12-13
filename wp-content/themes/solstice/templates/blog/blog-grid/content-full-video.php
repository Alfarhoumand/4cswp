<?php
/**
 * Blog Meta
 *
 * @package solstice
 * @since 1.0
 */
?>
<?php $video_url = solstice_get_post_opt('post-video-url');  if(!empty($video_url)): ?>
<div class="fluid full-grid">
  <div class="fluid-inner">
    <iframe class="full-grid" src="<?php echo esc_url($video_url); ?>?title=0&byline=0&portrait=0" width="100%" height="100%"></iframe>
  </div>
</div>
<?php endif; ?>
