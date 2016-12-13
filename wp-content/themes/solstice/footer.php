<?php
/**
 * Footer file
 *
 * @package solstice
 * @since 1.0
 */
?>

<div id="instagram-footer">
          
    <?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Instagram Footer') ) ?>
          
</div>

<footer id="main-footer">
  <?php
            $logo = solstice_get_opt('footer-logo');
          ?>
  <div class="footer-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <?php if(isset($logo['url']) && !empty($logo['url'])): ?>
                  <img src="<?php echo esc_url($logo['url']); ?>" alt="">
                <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/logo/footer-logo.png" alt="">
                <?php endif; ?>
              </a>
  </div><!-- /logo-wrapper -->
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php if (is_active_sidebar( solstice_get_custom_sidebar('footer-1', 'footer-sidebar-1') )): ?>
          <?php dynamic_sidebar( solstice_get_custom_sidebar('footer-1', 'footer-sidebar-1') ); ?>
        <?php endif; ?>
      </div><!-- /col-md-4 -->
      <div class="col-md-4">
        <?php if (is_active_sidebar( solstice_get_custom_sidebar('footer-2', 'footer-sidebar-2') )): ?>
          <?php dynamic_sidebar( solstice_get_custom_sidebar('footer-2', 'footer-sidebar-2') ); ?>
        <?php endif; ?>
      </div><!-- /col-md-4 -->
      <div class="col-md-4">
        <?php if (is_active_sidebar( solstice_get_custom_sidebar('footer-3', 'footer-sidebar-3') )): ?>
          <?php dynamic_sidebar( solstice_get_custom_sidebar('footer-3', 'footer-sidebar-3') ); ?>
        <?php endif; ?>
      </div><!-- /col-md-4 -->
    </div><!-- /row -->
  </div><!-- /container -->
</footer>

<div id="bottom-footer">
  <?php solstice_social_icons('small', 'footer-enable-social'); ?>
  <p class="copyright">
<?php echo wp_kses_data(solstice_get_opt('footer-text-content')); ?></p>
</div><!-- /bottom-footer -->

</section><!-- /wrapper -->
  <?php wp_footer(); ?>
  </body>
</html>
