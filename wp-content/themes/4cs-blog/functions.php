<?php
//
// Recommended way to include parent theme styles.
// (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//
add_action( 'wp_enqueue_scripts', 'load_child_theme_styles', 999 );

function load_child_theme_styles() {
	// If your css changes are minimal we recommend you to put them in the main style.css.
	// In this case uncomment bellow
	wp_enqueue_style( 'child-theme-style', get_stylesheet_directory_uri() . '/style.css' );
}

function theme_styles() {
	wp_register_style( 'font', get_stylesheet_directory_uri() . '/fonts/font.css' );
	wp_enqueue_style( 'font' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

/**
 *
 * Related Post
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if(!function_exists('gia_related_post')) {
  function gia_related_post() {
    global $post;
    $tags = wp_get_post_tags($post->ID);
    usort($tags, function($a, $b) {
      return $b->count - $a->count;
    });
    if(!empty($tags) && is_array($tags)):
      $simlar_tag = $tags[0]->term_id;
    ?>

    <div class="related-posts">
      <h6><?php esc_html_e('YOU MIGHT ALSO LIKE', 'solstice'); ?></h6>
      <div class="row">
        <?php
          $args = array(
            'tag__in'             => array($simlar_tag),
            'post__not_in'        => array($post->ID),
            'posts_per_page'      => 3,
            'meta_query'          => array(array('key' => '_thumbnail_id', 'compare' => 'EXISTS')),
            'ignore_sticky_posts' => 1,
          );
          $re_query = new WP_Query($args);
          while ($re_query->have_posts()) : $re_query->the_post();
        ?>
        <article <?php post_class('blog-post col-md-4'); ?>>
          <header>
            <figure>
              <?php the_post_thumbnail('solstice-small'); ?>
            </figure>
            <h3><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h3>
            <div class="meta">
              <span><?php echo get_the_category_list( __( ' , ', 'solstice' ) );?></span>
              <span><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F d, Y'); ?></time></span>
            </div><!-- /meta -->
          </header>
        </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div><!-- /row -->
    </div><!-- /related-posts -->
  <?php
    endif;
  }
}
