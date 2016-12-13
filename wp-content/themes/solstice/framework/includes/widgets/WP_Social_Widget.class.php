<?php
/**
 * Social Icon Widget
 *
 * @package solstice
 */
class WP_Social_Widget extends WP_Widget
{
  function __construct()
  {
    $widget_ops = array('classname' => 'widget_socials', 'description' => esc_html__( "Displays social icons", 'solstice' ) );
    parent::__construct('social-widget', esc_html__( 'solstice: Social Icons', 'solstice' ), $widget_ops);

    $this-> alt_option_name = 'widget_social_entries';

  }

  function widget($args, $instance)
  {
    global $post;

    $cache = wp_cache_get('widget_social_entries', 'widget');

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
    $title = apply_filters('widget_title', empty($instance['title']) ? esc_html__( 'Social Icons', 'solstice' ) : $instance['title'], $instance, $this->id_base);
    echo $before_title.esc_html($title).$after_title;

    $facebook  = isset($instance['facebook']) ? $instance['facebook'] : '#';
    $twitter   = isset($instance['twitter']) ? $instance['twitter'] : '#';
    $weibo     = isset($instance['weibo']) ? $instance['weibo'] : '#';
    $instagram = isset($instance['instagram']) ? $instance['instagram'] : '#';
    $pinterset = isset($instance['pinterset']) ? $instance['pinterset'] : '#';
    $gplus     = isset($instance['gplus']) ? $instance['gplus'] : '#';
    $tumblr    = isset($instance['tumblr']) ? $instance['tumblr'] : '#';
    $youtube   = isset($instance['youtube']) ? $instance['youtube'] : '#';
    $vine      = isset($instance['vine']) ? $instance['vine'] : '#';
    $linkedin  = isset($instance['linkedin']) ? $instance['linkedin'] : '#';
    $envelope  = isset($instance['envelope']) ? $instance['envelope'] : '#';
    ?>
    <ul class="social-icons small">
        
      <?php if(!empty($facebook)): ?>
        <li><a href="<?php echo esc_url($facebook); ?>"><i class="fa fa-facebook"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($twitter)): ?>
        <li><a href="<?php echo esc_url($twitter); ?>"><i class="fa fa-twitter"></i></a></li>
      <?php endif; ?>
        <?php if(!empty($weibo)): ?>
        <li><a href="<?php echo esc_url($weibo); ?>"><i class="fa fa-weibo"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($instagram)): ?>
        <li><a href="<?php echo esc_url($instagram); ?>"><i class="fa fa-instagram"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($pinterset)): ?>
        <li><a href="<?php echo esc_url($pinterset); ?>"><i class="fa fa-pinterest"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($gplus)): ?>
        <li><a href="<?php echo esc_url($gplus); ?>"><i class="fa fa-google-plus"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($tumblr)): ?>
        <li><a href="<?php echo esc_url($tumblr); ?>"><i class="fa fa-tumblr"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($youtube)): ?>
        <li><a href="<?php echo esc_url($youtube); ?>"><i class="fa fa-youtube-play"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($vine)): ?>
        <li><a href="<?php echo esc_url($vine); ?>"><i class="fa fa-vine"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($linkedin)): ?>
        <li><a href="<?php echo esc_url($linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($envelope)): ?>
        <li><a href="<?php echo esc_url($envelope); ?>"><i class="fa fa-envelope-o"></i></a></li>
      <?php endif; ?>
    </ul>
    <?php
    echo $after_widget;
    $cache[$args['widget_id']] = ob_get_flush();
    wp_cache_set('widget_social_entries', $cache, 'widget');
  }

  function update( $new_instance, $old_instance )
  {
    $instance = $old_instance;
    $instance['title']     = strip_tags($new_instance['title']);
    $instance['facebook']  = strip_tags($new_instance['facebook']);
    $instance['twitter']   = $new_instance['twitter'];
    $instance['weibo']     = $new_instance['weibo'];
    $instance['instagram'] = $new_instance['instagram'];
    $instance['pinterset'] = $new_instance['pinterset'];
    $instance['gplus']     = $new_instance['gplus'];
    $instance['tumblr']    = $new_instance['tumblr'];
    $instance['youtube']   = $new_instance['youtube'];
    $instance['vine']      = $new_instance['vine'];
    $instance['linkedin']  = $new_instance['linkedin'];
    $instance['envelope']  = $new_instance['envelope'];

    $alloptions = wp_cache_get( 'alloptions', 'options' );
    if ( isset($alloptions['widget_social_entries']) )
    {
      delete_option('widget_social_entries');
    }
    return $instance;
  }

  function form( $instance )
  {
    $title     = isset($instance['title']) ? $instance['title'] : '';
    $facebook  = isset($instance['facebook']) ? $instance['facebook'] : '#';
    $twitter   = isset($instance['twitter']) ? $instance['twitter'] : '#';
    $weibo     = isset($instance['weibo']) ? $instance['weibo'] : '#';
    $instagram = isset($instance['instagram']) ? $instance['instagram'] : '#';
    $pinterset = isset($instance['pinterset']) ? $instance['pinterset'] : '#';
    $gplus     = isset($instance['gplus']) ? $instance['gplus'] : '#';
    $tumblr    = isset($instance['tumblr']) ? $instance['tumblr'] : '#';
    $youtube   = isset($instance['youtube']) ? $instance['youtube'] : '#';
    $vine      = isset($instance['vine']) ? $instance['vine'] : '#';
    $linkedin  = isset($instance['linkedin']) ? $instance['linkedin'] : '#';
    $envelope  = isset($instance['envelope']) ? $instance['envelope'] : '#';
    ?>
    <p><label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e( 'Title:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e( 'Facebook:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($facebook); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e( 'Twitter:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($twitter); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('weibo')); ?>"><?php esc_html_e( 'Weibo:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('weibo')); ?>" name="<?php echo esc_attr($this->get_field_name('weibo')); ?>" type="text" value="<?php echo esc_attr($weibo); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e( 'Instagram:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($instagram); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('pinterset')); ?>"><?php esc_html_e( 'Pinterset:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterset')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterset')); ?>" type="text" value="<?php echo esc_attr($pinterset); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('gplus')); ?>"><?php esc_html_e( 'Google Plus:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('gplus')); ?>" name="<?php echo esc_attr($this->get_field_name('gplus')); ?>" type="text" value="<?php echo esc_attr($gplus); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php esc_html_e( 'Tumblr:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($tumblr); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php esc_html_e( 'Youtube:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($youtube); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('vine')); ?>"><?php esc_html_e( 'Vine:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('vine')); ?>" name="<?php echo esc_attr($this->get_field_name('vine')); ?>" type="text" value="<?php echo esc_attr($vine); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e( 'Linkedin:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>" /></p>

    <p><label for="<?php echo esc_attr($this->get_field_id('envelope')); ?>"><?php esc_html_e( 'Envelope:', 'solstice' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('envelope')); ?>" name="<?php echo esc_attr($this->get_field_name('envelope')); ?>" type="text" value="<?php echo esc_attr($envelope); ?>" /></p>

    <?php
  }
}
