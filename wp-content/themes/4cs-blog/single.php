<?php
/**
 * Single.php
 *
 * @package solstice
 * @since 1.0
 */
get_header();

$has_sidebar = solstice_get_post_opt('sidebar-local');
$col_class  = (empty($has_sidebar) || !isset($has_sidebar)) ? 'col-md-12':'col-md-8';

?>

<section class="contents-container">
  <div class="container">
    <div class="row">
      <div class="<?php echo sanitize_html_class($col_class); ?>">
        <div class="contents-inner clearfix">
          <?php
            while ( have_posts() ) : the_post();
              solstice_setPostViews(get_the_ID());
              get_template_part('templates/content/content','single');
            endwhile;
          ?>
        </div><!-- /contents-inner -->
      </div><!-- /col-md-8 -->
      <?php if($col_class == 'col-md-8'): ?>
      <!-- this is for sidebar-->
      <div class="col-md-4">
        <div class="sidebar">
          <?php //if (is_active_sidebar( solstice_get_custom_sidebar('main') )): ?>
            <?php //dynamic_sidebar( solstice_get_custom_sidebar('main') ); ?>
             <?php dynamic_sidebar( solstice_get_custom_sidebar('inner-sidebar', 'inner-sidebar') ); ?>
          <?php //endif; ?>
        </div>
      </div><!-- /col-md-4 -->
      <!--sidebar ends-->
      <?php endif; ?>

    </div><!-- /row -->
  </div><!-- /container -->
</section>

<?php
get_footer();

