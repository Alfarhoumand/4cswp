<?php
/**
 * Frontend Theme Functions.
 *
 * @package solstice
 * @subpackage Template
 */

/**
 *
 * Main Menu
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( !function_exists('solstice_main_menu')) {
  function solstice_main_menu($class = '') {
    if ( function_exists('wp_nav_menu') && has_nav_menu( 'primary-menu' ) ) {
      wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'container'      => false,
        'menu_id'        => 'nav',
        'menu_class'     => $class,
        'walker'         => new Custom_Walker_Nav_Menu()
      ));
    } else {
      echo '<a target="_blank" href="'. admin_url('nav-menus.php') .'" class="no-menu">'. __( 'You can edit your menu content on the Menus screen in the Appearance section.', 'nx' ) .'</a>';
    }
  }

}

/**
 *
 * Sticky Header Logo
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if(!function_exists('solstice_sticky_logo')) {
  function solstice_sticky_logo() {
    $logo = solstice_get_opt('general-sticky-logo');
  ?>
    <div class="sticky-nav <?php echo solstice_get_opt('general-navigation-template'); ?>">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="logo-container">
                      <a href="<?php echo esc_url(home_url('/')); ?>">
                          <?php if(isset($logo['url']) && !empty($logo['url'])): ?>
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="">
                          <?php else: ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo3.png" alt="">
                          <?php endif; ?>
                      </a>
                  </div><!-- /logo-container -->
              </div><!-- /col-md-12 -->
          </div><!-- /row -->
      </div><!-- /container -->
    </div><!-- /sticky-nav -->
    <?php
  }
}

/**
 *
 * Top Header
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if(!function_exists('solstice_top_header')) {
  function solstice_top_header() {
    if(!solstice_get_opt('topheader-enable')) { return; }
    $text = solstice_get_opt('topheader-content');
    if(!empty($text) && is_front_page() && solstice_get_opt('topheader-enable-page') == 'home-only' || solstice_get_opt('topheader-enable-page') == 'all-page'):
  ?>
    <div class="top-message">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <span class="close-btn"></span>
                  <p><?php echo wp_kses_post($text); ?></p>
              </div><!-- /col-md-12 -->
          </div><!-- /row -->
      </div><!-- /container -->
    </div><!-- /top-message -->
  <?php
    endif;
  }
}

/**
 *
 * Pagination
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'solstice_paging_nav' ) ) {
  function solstice_paging_nav( $max_num_pages = false ) {

    $prev_icon = 'fa-angle-left';
    $next_icon = 'fa-angle-right';

  if( true == is_rtl() ) {
    $prev_icon = 'fa-angle-right';
    $next_icon = 'fa-angle-left';
  }

  if ($max_num_pages === false) {
    global $wp_query;
    $max_num_pages = $wp_query -> max_num_pages;
  }

  $big = 999999999; // need an unlikely integer

  $links = paginate_links( array(
    'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format'    => '?paged=%#%',
    'current'   => max( 1, get_query_var('paged') ),
    'total'     => $max_num_pages,
    'prev_next' => true,
    'prev_text' => '<i class="fa '.$prev_icon.'"></i>',
    'next_text' => '<i class="fa '.$next_icon.'"></i>',
    'end_size'  => 1,
    'mid_size'  => 2,
    'type'      => 'plain',
  ) );

  if (!empty($links)): ?>
    <div class="pagination standard-pagination mb-50">
      <?php echo wp_kses_post($links); ?>
    </div>
  <?php endif;
  }
}

/**
 *
 * Breadcrumb
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( !function_exists('solstice_breadcrumb')) {
  function solstice_breadcrumb() {
    $output = '';
    if(function_exists('bcn_display')) {
      $output .=  '<div class="breadcrumb">';
      $output .=  bcn_display(true);
      $output .=  '</div>';
    }
    return $output;
  }
}

/**
 *
 * Get the Page Title
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( !function_exists('solstice_get_the_title')) {
  function solstice_get_the_title() {

    $title = '';

    //woocoomerce page
    if (function_exists('is_woocoomerce') && is_woocommerce() || function_exists('is_shop') && is_shop()):
      if (apply_filters( 'woocommerce_show_page_title', true )):
        $title = woocommerce_page_title(false);
      endif;
    // Default Latest Posts page
    elseif( is_home() && !is_singular('page') ) :
      $title = esc_html__('Blog','solstice');

    // Singular
    elseif( is_singular() ) :
      $title = get_the_title();

    // Search
    elseif( is_search() ) :
      global $wp_query;
      $total_results = $wp_query->found_posts;
      $prefix = '';

      if( $total_results == 1 ){
        $prefix = esc_html__('1 search result for', 'solstice');
      }
      else if( $total_results > 1 ) {
        $prefix = $total_results . ' ' . esc_html__('search results for', '');
      }
      else {
        $prefix = esc_html__('Search results for', 'solstice');
      }
      //$title = $prefix . ': ' . get_search_query();
      $title = get_search_query();

    // Category and other Taxonomies
    elseif ( is_category() ) :
      $title = single_cat_title('', false);

    elseif ( is_tag() ) :
      $title = single_tag_title('', false);

    elseif ( is_author() ) :
      $title = sprintf( __( 'Author: %s', 'solstice' ), '<span class="vcard">' . get_the_author() . '</span>' );

    elseif ( is_day() ) :
      $title = sprintf( __( 'Day: %s', 'solstice' ), '<span>' . get_the_date() . '</span>' );

    elseif ( is_month() ) :
      $title = sprintf( __( 'Month: %s', 'solstice' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'solstice' )  . '</span>' ));

    elseif ( is_year() ) :
      $title = sprintf( __( 'Year: %s', 'solstice' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'solstice' )  . '</span>' ));

    elseif( is_tax() ) :
      $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
      $title = $term->name;

    elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
      $title = esc_html__( 'Asides', 'solstice' );

    elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
      $title = esc_html__( 'Galleries', 'solstice');

    elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
      $title = esc_html__( 'Images', 'solstice');

    elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
      $title = esc_html__( 'Videos', 'solstice' );

    elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
      $title = esc_html__( 'Quotes', 'solstice' );

    elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
      $title = esc_html__( 'Links', 'solstice' );

    elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
      $title = esc_html__( 'Statuses', 'solstice' );

    elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
      $title = esc_html__( 'Audios', 'solstice' );

    elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
      $title = esc_html__( 'Chats', 'solstice' );

    elseif( is_404() ) :
      $title = esc_html__( '404', 'solstice' );

    else :
      $title = esc_html__( 'Archives', 'solstice' );
    endif;

    return $title;
  }
}

/**
 *
 * Social Icons
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if(!function_exists('solstice_social_icons')) {
  function solstice_social_icons($class = '', $opt_name) {
    if(!solstice_get_opt($opt_name)) {
      return;
    }

    $social_fb        =  solstice_get_opt('social-facebook');
    $social_twitter   =  solstice_get_opt('social-twitter');
    $social_instagram =  solstice_get_opt('social-instagram');
    $social_pinterset =  solstice_get_opt('social-pinterset');
    $social_gplus     =  solstice_get_opt('social-gplus');
    $social_tumblr    =  solstice_get_opt('social-tumblr');
    $social_youtube   =  solstice_get_opt('social-youtube');
    $social_envolpe   =  solstice_get_opt('social-envolpe');
  ?>
  <?php if(!empty($social_fb) || !empty($social_twitter) || !empty($social_instagram) ||  !empty($social_pinterset)
  || !empty($social_gplus) || !empty($social_tumblr) || !empty($social_youtube) || !empty($social_envolpe)): ?>
    <ul class="social-icons <?php echo sanitize_html_classes($class); ?>">
      <?php if(!empty($social_fb)): ?>
        <li><a href="<?php echo esc_url($social_fb); ?>"><i class="fa fa-facebook"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($social_twitter)): ?>
        <li><a href="<?php echo esc_url($social_twitter); ?>"><i class="fa fa-twitter"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($social_instagram)): ?>
        <li><a href="<?php echo esc_url($social_instagram); ?>"><i class="fa fa-instagram"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($social_pinterset)): ?>
        <li><a href="<?php echo esc_url($social_pinterset); ?>"><i class="fa fa-pinterest"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($social_gplus)): ?>
        <li><a href="<?php echo esc_url($social_gplus); ?>"><i class="fa fa-google-plus"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($social_tumblr)): ?>
        <li><a href="<?php echo esc_url($social_tumblr); ?>"><i class="fa fa-tumblr"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($social_youtube)): ?>
        <li><a href="<?php echo esc_url($social_youtube); ?>"><i class="fa fa-youtube-play"></i></a></li>
      <?php endif; ?>
      <?php if(!empty($social_envolpe)): ?>
        <li><a href="<?php echo esc_url($social_envolpe); ?>"><i class="fa fa-envelope-o"></i></a></li>
      <?php endif; ?>
      </ul>
    <?php endif; ?>
  <?php
  }
}

/**
 *
 * Social Share
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if(!function_exists('solstice_social_share')) {
  function solstice_social_share() {
    global $post;
    $pinterest_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'solstice-big-alt' );
    if(solstice_get_opt('author-fb-enable') == 1 || solstice_get_opt('author-twitter-enable') == 1 || solstice_get_opt('author-reddit-enable') == 1 || solstice_get_opt('author-pinterset-enable') == 1 || solstice_get_opt('author-linkedin-enable') == 1 || solstice_get_opt('author-digg-enable') == 1):
  ?>
    <div class="post-share clearfix">
      <!-- <p class="counter"><span>53</span>Shares</p> -->
      <ul class="social-icons style2">
        <?php if(solstice_get_opt('author-fb-enable') == 1): ?>
          <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_the_permalink()); ?>"><i class="fa fa-facebook"></i>Like</a></li>
        <?php endif; ?>
        <?php if(solstice_get_opt('author-twitter-enable') == 1): ?>
          <li><a href="https://twitter.com/home?status=<?php echo esc_url(get_the_permalink()); ?>"><i class="fa fa-twitter"></i>Tweet</a></li>
        <?php endif; ?>
        <?php if(solstice_get_opt('author-reddit-enable') == 1): ?>
          <li><a href="http://www.reddit.com/submit?url=<?php echo esc_url(get_the_permalink()); ?>&amp;title="><i class="fa fa-reddit"></i>Submit</a></li>
        <?php endif; ?>
        <?php if(!empty($pinterest_image) && isset($pinterest_image) && solstice_get_opt('author-pinterset-enable') == 1):?>
          <li><a href="https://pinterest.com/pin/create/button/?url=&amp;media=<?php echo esc_url($pinterest_image[0]); ?>&amp;description=<?php echo urlencode(get_the_title()); ?>"><i class="fa fa-pinterest"></i>Pin It</a></li>
        <?php endif; ?>
        <?php if(solstice_get_opt('author-linkedin-enable') == 1): ?>
          <li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo esc_url(get_the_permalink()); ?>&amp;title=&amp;summary=&amp;source="><i class="fa fa-linkedin"></i>Linkedin</a></li>
        <?php endif; ?>
        <?php if(solstice_get_opt('author-digg-enable') == 1): ?>
          <li><a href="http://digg.com/submit?url=<?php echo esc_url(get_the_permalink()); ?>&amp;title="><i class="fa fa-link"></i>Digg</a></li>
        <?php endif; ?>
      </ul>
    </div><!-- /post-share -->
  <?php
    endif;
  }
}

/**
 *
 * Related Post
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if(!function_exists('solstice_related_post')) {
  function solstice_related_post() {
    global $post;
    $tags = wp_get_post_tags($post->ID);

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

if ( ! function_exists( 'solstice_comment' ) ) :
/**
 * Comments and pingbacks. Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since solstice 1.0
 */
function solstice_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ) :
    case 'pingback' :
    case 'trackback' :
      ?>
      <li <?php comment_class('comment'); ?> id="li-comment-<?php comment_ID(); ?>">
        <div class="media-body"><?php _e( 'Pingback:', 'solstice' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'solstice' ), ' ' ); ?></div>
      </li>
      <?php
    break;

    default :
      $class = array('comment_wrap');
      if ($depth > 1) {
        $class[] = 'chaild';
      }
      ?>
      <!-- Comment Item -->
      <li <?php comment_class('comment-list media'); ?> id="comment-<?php comment_ID(); ?>">

        <div class="comment-body">
          <figure>
            <?php echo get_avatar( $comment, 60 ); ?>
          </figure>

          <div class="comment-content media-body">
            <h4 class="comment-author">
              <?php comment_author_link();?>
            </h4>
            <div class="comment-meta">
              <time><?php echo comment_date(get_option('date_format')) ?> at <?php echo comment_date(get_option('time_format')) ?></time>
              <?php $reply = get_comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => 2 ) ) );
              if (!empty($reply)): ?>
                <?php echo $reply; ?>
              <?php endif;
              edit_comment_link( __( 'Edit', 'solstice' ), '', '' );?>
            </div>

            <?php if ( $comment->comment_approved == '0' ) : ?>
              <em><?php _e( 'Your comment is awaiting moderation.', 'solstice' ); ?></em>
            <?php endif; ?>
            <?php comment_text(); ?>
          </div>
        </div>
      <?php
      break;
  endswitch;
}

endif; // ends check for solstice_comment()

if (!function_exists('solstice_close_comment')):
/**
 * Close comment
 *
 * @since solstice 1.0
 */
function solstice_close_comment() { ?>
  </li>
  <!-- End Comment Item -->
<?php }

endif; // ends check for solstice_close_comment()
