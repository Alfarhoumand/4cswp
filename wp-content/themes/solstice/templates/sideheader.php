<?php
/**
 * Side Header file
 *
 * @package solstice
 * @since 1.0
 */
?>

<?php if(solstice_get_opt('sideheader-enable') == 1): ?>
<aside id="sideheader">
  <header>
    <?php
      $logo = solstice_get_opt('sideheader-logo');
    ?>
    <div class="logo-container">
      <a href="<?php echo esc_url(home_url('/')); ?>">
      <?php if(isset($logo['url']) && !empty($logo['url'])): ?>
        <img src="<?php echo esc_url($logo['url']); ?>" alt="">
      <?php else: ?>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo2.png" alt="">
      <?php endif; ?>
      </a>
    </div><!-- /logo-container -->
    <a href="#" class="sideheader-close-btn">
        <span></span>
        <span></span>
    </a>
  </header>
  <?php if (is_active_sidebar( solstice_get_custom_sidebar('sideheader') )): ?>
    <?php dynamic_sidebar( solstice_get_custom_sidebar('sideheader') ); ?>
  <?php endif; ?>
  <?php if(solstice_get_opt('sideheader-copyright-enable') == 1): ?>
    <p class="copyright"><?php echo wp_kses_data(solstice_get_opt('sideheader-text-content')); ?></p>
  <?php endif; ?>
</aside><!-- /sideheader -->
<?php endif; ?>
