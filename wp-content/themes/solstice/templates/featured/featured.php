<?php
/**
 * Header Template file
 *
 * @package solstice
 * @since 1.0
 */
?>

<?php if(solstice_get_opt('slider-enable-disable') == 1 ): ?>
  <div class="col-md-12">
    <?php
      $blog_slider_post_per_page = solstice_get_opt('blog-slider-posts-per-page');
      if (!$blog_slider_post_per_page) {
        $blog_slider_post_per_page = get_option('posts_per_page');
      }

      $blog_slider_args = array(
        'posts_per_page'      => $blog_slider_post_per_page,
        'orderby'             => 'date',
        'order'               => 'DESC',
        'meta_query'          => array(array('key' => '_thumbnail_id')), //get posts with thumbnails only
        'post_type'           => array('post', 'page'),
        'post_status'         => 'publish',
        'ignore_sticky_posts' => 1
      );

      $blog_slider_categories = solstice_get_opt('blog-slider-category');
      if (is_array($blog_slider_categories)) {
        $blog_slider_args['tag__in'] =  $blog_slider_categories;
      }

      $blog_slider_query   = new WP_Query( $blog_slider_args );
      if ($blog_slider_query -> have_posts()) :
        $show_nav = ( solstice_get_opt('blog-slider-posts-navigation')) ? 'true':'false';
    ?>
    <div class="blog-post-slider" data-show-nav="<?php echo esc_attr($show_nav); ?>" data-speed="<?php echo esc_attr(solstice_get_opt('blog-slider-posts-duration')); ?>">
      <?php while ($blog_slider_query -> have_posts()) : $blog_slider_query -> the_post(); ?>
      <!--featured post slider query starts here-->
      <article <?php post_class('blog-post'); ?>>
          <header>
            <?php if(has_post_thumbnail()): ?>
            <figure>
              <?php the_post_thumbnail('solstice-big-alt'); ?>
            </figure>
            <?php endif; ?>
            <ul class="categories">
              <li><?php echo get_the_category_list( __( ' ', 'solstice' ) );?></li>
            </ul>
            <h3><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h3>
          </header>
          <footer>
            <?php get_template_part('templates/blog/meta'); ?>
          </footer>
      </article>
      <!--featured post slider query end's here-->
      <?php endwhile; wp_reset_postdata(); ?>
    </div><!-- /slider -->
    <?php endif; ?>
  </div><!-- /col-md-12 -->


 <?php if(solstice_get_opt('featured-posts-area') == 1 ): ?>
  <div class="col-md-11" id="featured-posts-area">
    <?php
      $blog_featured_post_args = array(
        'posts_per_page' => 4,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'meta_query'     => array(array('key' => '_thumbnail_id')), //get posts with thumbnails only
        'post_type'      => array('post', 'page'),
      );

      $blog_featured_categories = solstice_get_opt('blog-featured-category');
      if (is_array($blog_featured_categories)) {
        $blog_featured_post_args['tag__in'] =  $blog_featured_categories;
      }

      $blog_featured_query   = new WP_Query( $blog_featured_post_args );
      while ($blog_featured_query -> have_posts()) : $blog_featured_query -> the_post();
    ?>
    <!-- featured post query starts here -->
    <article <?php post_class('blog-post featured-post'); ?>>
      <header>
        <?php if(has_post_thumbnail()): ?>
          <figure>
            <?php the_post_thumbnail('solstice-medium'); ?>
          </figure>
        <?php endif; ?>
        <ul class="categories">
              <li><?php echo get_the_category_list( __( ' ', 'solstice' ) );?></li>
        </ul>
        <h3><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h3>
      </header>
    </article>
    <!--ends here -->
    <?php endwhile; wp_reset_postdata(); ?>
  </div><!-- /col-md-11 -->
  <?php endif; ?>
<?php endif; ?>
