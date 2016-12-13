<?php
/**
 * Custom Ads
 *
 * @package solstice
 */
class WP_Custom_Ads_Widget extends WP_Widget
{
  function __construct()
  {
    $widget_ops = array('classname' => 'widget_customAd', 'description' => esc_html__( "Displays ads", 'solstice' ) );
    parent::__construct('custom-ads-widget', esc_html__( 'solstice: Custom Ads', 'solstice' ), $widget_ops);

    $this-> alt_option_name = 'widget_custom_ads';
  }

  function widget($args, $instance)
  {
    global $post;

    $cache = wp_cache_get('widget_custom_ads', 'widget');

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
    $title = apply_filters('widget_title', empty($instance['title']) ? esc_html__( 'Custom Ads', 'solstice' ) : $instance['title'], $instance, $this->id_base);
    echo $before_title.esc_html($title).$after_title;

    $img_url  = isset($instance['img_url']) ? $instance['img_url'] : '';
    $img_link = isset($instance['img_link']) ? $instance['img_link'] : '#';
    if(!empty($img_url)):
    ?>
    <a href="<?php echo esc_url($img_link); ?>" target="_blank"><img src="<?php echo esc_url($img_url); ?>" alt="" /></a>
    <?php
    endif;
    echo $after_widget;
    $cache[$args['widget_id']] = ob_get_flush();
    wp_cache_set('widget_custom_ads', $cache, 'widget');
  }

  function update( $new_instance, $old_instance )
  {
    $instance = $old_instance;
    $instance['title']    = strip_tags($new_instance['title']);
    $instance['img_url']  = strip_tags($new_instance['img_url']);
    $instance['img_link'] = $new_instance['img_link'];

    $alloptions = wp_cache_get( 'alloptions', 'options' );
    if ( isset($alloptions['widget_custom_ads']) )
    {
      delete_option('widget_custom_ads');
    }
    return $instance;
  }

  function form( $instance )
  {
    $title    = isset($instance['title']) ? $instance['title'] : '';
    $img_url  = isset($instance['img_url']) ? $instance['img_url'] : '';
    $img_link = isset($instance['img_link']) ? $instance['img_link'] : '#';
    ?>
    <p><label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e( 'Title:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('img_url')); ?>"><?php esc_html_e( 'Image URL:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('img_url')); ?>" name="<?php echo esc_attr($this->get_field_name('img_url')); ?>" type="text" value="<?php echo esc_attr($img_url); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('img_link')); ?>"><?php esc_html_e( 'Image Link:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('img_link')); ?>" name="<?php echo esc_attr($this->get_field_name('img_link')); ?>" type="text" value="<?php echo esc_attr($img_link); ?>" /></p>

    <?php
  }
}
