<?php
/**
 * Latest posts widget
 *
 * @package solstice
 */
class WP_Latest_Posts_Widget extends WP_Widget
{
  function __construct()
  {
    $widget_ops = array('classname' => 'widget_latest_posts_entries', 'description' => esc_html__( "Displays the most latest posts", 'solstice' ) );
    parent::__construct('latest-posts', esc_html__( 'solstice: Latest Posts', 'solstice' ), $widget_ops);

    $this-> alt_option_name = 'widget_latest_posts_entries';

  }

  function widget($args, $instance)
  {
    global $post;

    $cache = wp_cache_get('widget_latest_posts_entries', 'widget');

    if ( !is_array($cache) )
    {
      $cache = array();
    }
    if ( ! isset( $args['widget_id'] ) )
    {
      $args['widget_id'] = $this->id;
    }

    if ( isset( $cache[ $args['widget_id'] ] ) )
    {
      echo $cache[ $args['widget_id'] ];
      return;
    }

    ob_start();
    extract($args);
    echo $before_widget;
    $title = apply_filters('widget_title', empty($instance['title']) ? esc_html__( 'Popular Posts', 'solstice' ) : $instance['title'], $instance, $this->id_base);
    if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
    {
      $number = 10;
    }
    $r = new WP_Query( apply_filters( 'widget_posts_args', array('meta_query' => array(array('key' => '_thumbnail_id')), 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true) ) );
    if ($r->have_posts()) : ?>
      <?php echo $before_title.esc_html($title).$after_title;  ?>
      <?php $posts_sz = count($r->posts);?>
      <?php $i = 1;?>

      <ul>
        <?php  while ($r->have_posts()) : $r->the_post(); ?>
        <li>
          <div class="featured-image">
            <?php the_post_thumbnail('solstice-thumb')?>
          </div>
          <div class="post-content">
            <p class="post-title"><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo wp_trim_words( get_the_title(), 8, '...' ); ?></a></p>
            <span class="category"><?php echo get_the_category_list( __( ' , ', 'solstice' ) );?></span>
            <span class="post-date"><?php the_time('F d, Y'); ?></span>
          </div>
        </li>
        <?php $i++; ?>
        <?php endwhile; ?>
      </ul>
      <?php
      // Reset the global $the_post as this query will have stomped on it
      wp_reset_postdata();
    endif; //have_posts()
    echo $after_widget;
    $cache[$args['widget_id']] = ob_get_flush();
    wp_cache_set('widget_latest_posts_entries', $cache, 'widget');
  }

  function update( $new_instance, $old_instance )
  {
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['number'] = (int) $new_instance['number'];

    $alloptions = wp_cache_get( 'alloptions', 'options' );
    if ( isset($alloptions['widget_latest_posts_entries']) )
    {
      delete_option('widget_latest_posts_entries');
    }
    return $instance;
  }

  function form( $instance )
  {
    $title = isset($instance['title']) ? $instance['title'] : '';
    $number = isset($instance['number']) ? $instance['number'] : 5;
    ?>
    <p><label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e( 'Title:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php _e( 'Number of posts to show:', 'solstice' ); ?></label>
    <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" /></p>
    <?php
  }
}
