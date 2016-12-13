<?php
/**
 * Page
 *
 * @package solstice
 * @since 1.0
 */

get_header(); ?>

<section class="contents-container">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
          <div class="heading clearfix">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('404 Page Not Found', 'solstice'); ?></a>
          </div><!-- /heading -->
      </div><!-- /col-md-8 -->
      <div class="col-md-4">
        <div class="sidebar">
          <?php if (is_active_sidebar( solstice_get_custom_sidebar('main') )): ?>
            <?php dynamic_sidebar( solstice_get_custom_sidebar('main') ); ?>
          <?php endif; ?>
        </div><!-- /sidebar -->
      </div><!-- /col-md-4 -->
    </div><!-- /row -->
  </div><!-- /container -->
</section>
<?php
get_footer();
