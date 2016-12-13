<?php
/**
 * Header Template file
 *
 * @package solstice
 * @since 1.0
 */
?>
<header id="main-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="main-nav clearfix">
          <a href="#" class="mobile-nav-trigger">
            <span class="bars">
                <span></span>
                <span></span>
                <span></span>
            </span>
          </a>
          <?php
            $logo = solstice_get_opt('general-logo');
          ?>
            <div class="logo-wrapper">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <?php if(isset($logo['url']) && !empty($logo['url'])): ?>
                  <img src="<?php echo esc_url($logo['url']); ?>" alt="">
                <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/logo/logo.png" alt="">
                <?php endif; ?>
              </a>
            </div><!-- /logo-wrapper -->
            <div class="search-container">
              <a href="#" class="trigger">
                  <i class="fa fa-search"></i>
              </a>
              <?php get_search_form(); ?>
            </div><!-- /search-container -->
          <?php solstice_main_menu('main-nav-items'); ?>
         <!-- <?php solstice_social_icons('big', 'general-social'); ?>-->
        <ul class="social-icons big">
        	<li><?php dynamic_sidebar('MenuSocial'); ?></li>
        </ul>

        </nav>
      </div><!-- /col-md-12 -->
    </div><!-- /row -->
  </div><!-- /container -->
</header>
