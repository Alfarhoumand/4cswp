<?php
/**
 * Template Name: Contact
 *
 * @package solstice
*/
get_header();
$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
?>
<section class="contents-container archive">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="heading clearfix">
            <a href="#"><?php echo solstice_get_the_title(); ?></a>
        </div><!-- /heading -->
        <div class="contents-inner clearfix">
          <article class="blog-post align-left col-md-12">
            <?php if(!empty($url)): ?>
            <header>
              <figure>
                <img src="<?php echo esc_url($url); ?>" alt="">
              </figure>
            </header>
            <?php endif; ?>
            <div class="post-content">
              <?php while ( have_posts() ) : the_post();  ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
            </div><!-- /post-content -->
            <?php $cf7_id = solstice_get_post_opt('contact-form-id'); if(!empty($cf7_id)): ?>
            <div class="contact-form solstice-form">
              <?php echo do_shortcode('[contact-form-7 id="'.esc_attr($cf7_id).'"]'); ?>
            </div>
            <?php endif; ?>
          </article>
        </div><!-- /contents-inner -->
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
