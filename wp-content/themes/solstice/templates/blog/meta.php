<?php
/**
 * Blog Meta
 *
 * @package solstice
 * @since 1.0
 */
?>
<div class="meta">
<?php if(solstice_get_opt('meta-date') == 1): ?>
  <span id="meta-date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F d, Y'); ?></time></span>
<?php endif; ?>

<?php if(solstice_get_opt('meta-views-count') == 1): ?>
  <span id="meta-views-count"><?php echo solstice_getPostViews(get_the_ID()); ?></span>
<?php endif; ?>

<?php if(solstice_get_opt('meta-comment-count') == 1): ?>
  <span id="meta-comment-count"><a href="#"><?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></a></span>
<?php endif; ?>
</div><!-- /meta -->

