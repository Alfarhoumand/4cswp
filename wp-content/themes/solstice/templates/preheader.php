<?php
/**
 * Pre Header file
 *
 * @package solstice
 * @since 1.0
 */
?>

<div class="top-nav-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if(solstice_get_opt('sideheader-enable') == 1): ?>
        <a href="#" class="nav-trigger">
            <span class="bars">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>
        <?php endif; ?>
        <ul class="top-nav">
          <?php
            if (has_nav_menu('top-menu')):
              wp_nav_menu(array(
                'theme_location' => 'top-menu',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'depth'          => 1,
              ));
            endif;
          ?>
        </ul>
        <?php if(solstice_get_opt('preheader-search') == 1): ?>
        <div class="search-container">
            <a href="#" class="trigger">
                <i class="fa fa-search"></i>
            </a>
            <?php get_search_form(); ?>
        </div><!-- /search-container -->
        <?php endif; ?>
      </div><!-- /col-md-12 -->
    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /top-nav-wrapper -->
