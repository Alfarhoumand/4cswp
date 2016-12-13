<?php
/**
 * Template Name: Blog Grid Full Width
 *
 * @package solstice
*/
get_header();
$is_latest_popular_enable = solstice_get_opt('latest-popular-enable');
$latest_popular_class = ( $is_latest_popular_enable ) ? 'both-enabled':'only-latest-post';
$has_sidebar = solstice_get_post_opt('sidebar-local');
$col_class  = (empty($has_sidebar) || !isset($has_sidebar)) ? 'col-md-12':'col-md-8';
?>



<section class="contents-container <?php echo sanitize_html_class($latest_popular_class); ?>">
  <div class="container">
    <div class="row">
      <?php get_template_part('templates/featured/featured'); ?>
      <?php get_template_part('templates/custom-ads'); ?>
      <div class="<?php echo sanitize_html_class($col_class); ?>">
        <div class="blog-tabs clearfix">
          <a href="#latest-posts" class="active"><?php esc_html_e('Latest Stories', 'solstice'); ?></a>
          <?php if($is_latest_popular_enable): ?>
            <a href="#popular-posts"><?php esc_html_e('Popular Stories' ,'solstice'); ?></a>
          <?php endif; ?>
        </div><!-- /page-titlebar -->
        <div id="latest-posts" class="tab-contents active">
          <?php get_template_part('templates/blog/blog-grid/content', 'latest-grid'); ?>
        </div><!-- /blog-latest-posts -->
        <?php if($is_latest_popular_enable): ?>
          <div id="popular-posts" class="tab-contents">
            <?php get_template_part('templates/blog/blog-grid/content', 'popular-grid'); ?>
          </div><!-- /blog-popular-posts -->
        <?php endif; ?>
      </div><!-- /col-md-8 -->

      <?php if($col_class == 'col-md-8'): ?>
      <div class="col-md-4">
        <div class="sidebar">
          <?php if (is_active_sidebar( solstice_get_custom_sidebar('main') )): ?>
            <?php dynamic_sidebar( solstice_get_custom_sidebar('main') ); ?>
          <?php endif; ?>
        </div><!-- /sidebar -->
      </div><!-- /col-md-4 -->
      <?php endif; ?>
    </div><!-- /row -->
  </div><!-- /container -->
</section>

<?php
get_footer();

