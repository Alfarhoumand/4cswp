<?php
/**
 * Single template file
 *
 * @package solstice
 * @since 1.0
 */
global $post;$pinterest_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'solstice-big-alt' );
?>

<article class="blog-post col-md-12">
  <header>
    <h3><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h3>
    <?php get_template_part('templates/blog/meta'); ?>
    <?php get_template_part('templates/content/parts/single-media');?>
  </header>

  <div class="post-content">
    <?php the_content(); ?>
    <?php
      wp_link_pages( array(
        'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'solstice' ),
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
      ) );
    ?>
  </div><!-- /post-content -->

  <?php solstice_social_share(); ?>

  <div class="post-meta">
      <p class="author"><?php echo esc_html_e('By:', 'solstice'); ?> <a href="#"><?php echo get_the_author(); ?></a></p>
      <div class="post-tags">
        <?php echo esc_html_e('Tags:', 'solstice'); ?>
        <ul>
          <?php echo get_the_tag_list('', ', ', '' ); ?>
        </ul>
      </div><!-- /post-tags -->
  </div><!-- /post-meta -->

  <div class="post-author">
    <figure class="avatar">
      <?php echo get_avatar( get_the_author_meta('ID'), 90 ); ?>
    </figure>
    <div class="author-details">
      <?php
        global $post;
        $curauth = get_userdata($post->post_author);
      ?>
      <h2><?php the_author(); ?></h2>
      <p>
        <?php if(!empty($curauth->description)): ?>
          <?php echo get_the_author_meta('description'); ?>
        <?php else: ?>
          <?php esc_html_e('There is no author description yet.', 'solstice'); ?>
        <?php endif; ?>
      </p>

      <?php
        $social_fb        =  solstice_get_opt('social-facebook');
        $social_twitter   =  solstice_get_opt('social-twitter');
        $social_instagram =  solstice_get_opt('social-instagram');
        $social_pinterset =  solstice_get_opt('social-pinterset');
        $social_gplus     =  solstice_get_opt('social-gplus');
        $social_tumblr    =  solstice_get_opt('social-tumblr');
        $social_youtube   =  solstice_get_opt('social-youtube');
        $social_envolpe   =  solstice_get_opt('social-envolpe');

      if(!empty($social_fb) || !empty($social_twitter) || !empty($social_instagram) ||  !empty($social_pinterset)
      || !empty($social_gplus) || !empty($social_tumblr) || !empty($social_youtube) || !empty($social_envolpe)): ?>
      <ul class="social-icons small">
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

    </div><!-- /author-details -->
  </div><!-- /post-author -->

  <?php solstice_related_post(); ?>

  <?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
  ?>

</article>
