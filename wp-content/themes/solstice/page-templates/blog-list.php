<?php
/**
 * Template Name: Blog List
 *
 * @package solstice
*/
get_header();
$has_sidebar = solstice_get_post_opt('sidebar-local');
$col_class  = (empty($has_sidebar) || !isset($has_sidebar)) ? 'col-md-12':'col-md-8';
?>

<section class="contents-container <?php echo sanitize_html_class($latest_popular_class); ?>">
  <div class="container">
    <div class="row">
      <?php get_template_part('templates/featured/featured'); ?>
      <?php get_template_part('templates/custom-ads'); ?>
      <div class="<?php echo sanitize_html_class($col_class); ?>">
         <div class="homepage-tabs clearfix">
          <span><?php esc_html_e('Latest Stories', 'solstice'); ?></span>
        </div><!-- /page-titlebar -->
        <div id="latest-posts" class="tab-contents active">
          <?php get_template_part('templates/blog/blog-list/content', 'latest'); ?>
        </div><!-- /blog-latest-posts -->
        
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