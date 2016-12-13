<?php
/**
 * Blog Meta
 *
 * @package solstice
 * @since 1.0
 */
?>
<div class="contents-inner popular-post-container grid-view clearfix">
  <?php
    $post_target = (solstice_get_opt('general-open-post') == 1) ? '_blank':'_self';
    if (get_query_var('paged')) {
      $popular_paged = get_query_var('paged');
    } elseif (get_query_var('page')) { // applies when this page template is used as a static homepage in WP3+
      $popular_paged = get_query_var('page');
    } else {
      $popular_paged = 1;
    }
    $blog_popular_post_per_page = solstice_get_post_opt('blog-popular-posts-per-page');
    if (!$blog_popular_post_per_page) {
      $blog_popular_post_per_page = get_option('posts_per_page');
    }

    $blog_popular_post_args = array(
      'posts_per_page' => $blog_popular_post_per_page,
      'orderby'        => 'comment_count',
      'order'          => 'DESC',
      'paged'          => $popular_paged,
      'post_type'      => 'post',
      'meta_query'     => array(array('key' => '_thumbnail_id')), //get posts with thumbnails only
      'post_status'    => 'publish'
    );

    $blog_popular_categories = solstice_get_post_opt('blog-popular-category-local');
    if (is_array($blog_popular_categories)) {
      $blog_popular_post_args['category__in'] =  $blog_popular_categories;
    }

    $blog_popular_query    = new WP_Query( $blog_popular_post_args );
    $popular_max_num_pages = $blog_popular_query -> max_num_pages;
    while ($blog_popular_query -> have_posts()) : $blog_popular_query -> the_post();
  ?>
  <!--query-->
  <article <?php post_class('blog-post blog-post-wrapper col-md-6 col-sm-6'); ?>>
      <header>
        <?php get_template_part('templates/blog/blog-grid/content-full', get_post_format()); ?>
        <ul class="categories">
          <li><?php echo get_the_category_list( __( ' , ', 'solstice' ) );?></li>
        </ul>
        <h3><a href="<?php echo esc_url(get_the_permalink()); ?>" target="<?php echo esc_attr($post_target); ?>"><?php the_title(); ?></a></h3>
        <?php get_template_part('templates/blog/meta'); ?>
      </header>
      <div class="post-content">
        <?php echo solstice_auto_post_excerpt(solstice_get_opt('general-excerpt')); ?>
      </div><!-- /post-content -->
  </article>
  <?php endwhile; wp_reset_postdata(); ?>
</div><!-- /contents-inner -->
<?php
  $next_page_url = solstice_next_page_url($popular_max_num_pages);
  if(!empty($next_page_url) && solstice_get_opt('general-pagination') == 'load-more'):
?>
<div class="blog-navigation clearfix">
  <a href="<?php echo esc_url($next_page_url); ?>" id="blog-popular-load-more" data-loading-text="Loading.." class="ajax-load-more">Load More</a>
</div><!-- /blog-navigation -->
<?php else:
  solstice_paging_nav($popular_max_num_pages);
endif; ?>
