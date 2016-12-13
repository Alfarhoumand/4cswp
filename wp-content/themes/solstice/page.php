<?php
/**
 * Page
 *
 * @package solstice
 * @since 1.0
 */

get_header();

$has_sidebar = solstice_get_post_opt('sidebar-local');
$col_class  = (empty($has_sidebar) || !isset($has_sidebar)) ? 'col-md-12':'col-md-8';

?>

<section class="contents-container page-container blog-post pt-35 pb-35">
  <div class="container">
      <div class="row">
        <div class="<?php echo sanitize_html_class($col_class); ?>">
          <div class="heading clearfix">
            <a href="#"><?php echo solstice_get_the_title(); ?></a>
          </div><!-- /heading -->
          <div class="page-content">
            <?php while ( have_posts() ) : the_post();  ?>
            <?php the_content(); ?>
            <?php
              wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'solstice' ),
                'after'  => '</div>',
              ) );
            ?>
            <?php
              // If comments are open or we have at least one comment, load up the comment template
              if ((comments_open() || get_comments_number()) ) :
                comments_template();
              endif;
            ?>
            <?php endwhile; ?>
          </div>
        </div>
        <?php if($col_class == 'col-md-8'): ?>
        <div class="col-md-4">
          <div class="sidebar">
            <?php //if (is_active_sidebar( solstice_get_custom_sidebar('main') )): ?>
              <?php //dynamic_sidebar( solstice_get_custom_sidebar('main') ); ?>
              <?php dynamic_sidebar( solstice_get_custom_sidebar('inner-sidebar', 'inner-sidebar') ); ?>
            <?php //endif; ?>
            
          </div><!-- /sidebar -->
        </div>
        <?php endif; ?>
      </div>
  </div>
</section>
<?php
get_footer();
