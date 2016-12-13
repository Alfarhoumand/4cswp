<?php
/**
 * Footer file
 *
 * @package solstice
 * @since 1.0
 */

$logo = solstice_get_opt( 'footer-logo' );
?>

<div id="instagram-footer">
  <?php /* Widgetised Area */ if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'Instagram Footer' ) ) {; } ?>
</div>

<footer id="main-footer">
  <div class="footer-logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
    <?php if ( isset( $logo['url'] ) && ! empty( $logo['url'] ) ) : ?>
        <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="">
    <?php else : ?>
      <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logo/footer-logo.png" alt="">
    <?php endif; ?>
    </a>
  </div><!-- /footer-logor -->
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php if ( is_active_sidebar( solstice_get_custom_sidebar( 'footer-1', 'footer-sidebar-1' ) ) ) : ?>
      <?php dynamic_sidebar( solstice_get_custom_sidebar( 'footer-1', 'footer-sidebar-1' ) ); ?>
        <?php endif; ?>
      </div><!-- /col-md-4 -->
      <div class="col-md-4">
        <?php if ( is_active_sidebar( solstice_get_custom_sidebar( 'footer-2', 'footer-sidebar-2' ) ) ) : ?>
      <?php dynamic_sidebar( solstice_get_custom_sidebar( 'footer-2', 'footer-sidebar-2' ) ); ?>
        <?php endif; ?>
      </div><!-- /col-md-4 -->
      <div class="col-md-4">
        <?php if ( is_active_sidebar( solstice_get_custom_sidebar( 'footer-3', 'footer-sidebar-3' ) ) ) : ?>
      <?php dynamic_sidebar( solstice_get_custom_sidebar( 'footer-3', 'footer-sidebar-3' ) ); ?>
        <?php endif; ?>
      </div><!-- /col-md-4 -->
    </div><!-- /row -->
  </div><!-- /container -->
</footer>

<div id="bottom-footer">
  <!--<?php solstice_social_icons( 'small', 'footer-enable-social' ); ?>-->
  <ul>
  	<li><?php dynamic_sidebar('FooterSocial'); ?></li>
  </ul>
  
  <div class="copyright">
  		<ul>
            <li><?php dynamic_sidebar('CopyrightFooter'); ?></li>
         </ul>

  <!--<?php echo wp_kses_post( solstice_get_opt( 'footer-text-content' ) ); ?>--></div>
</div><!-- /bottom-footer -->

</section><!-- /wrapper -->
<script type="text/javascript">
  jQuery(function() {
    jQuery('.social-icons li a').attr('target','_blank');
    jQuery('.widget_categories ul > li').has('ul.children').append('<span></span>');
    jQuery('.widget_categories ul > li span').click(function(e) {
      jQuery(this).toggleClass('minus');
      jQuery(this).parent('li').children('ul.children').slideToggle();
    });
  });
</script>

<!-- OnlineOpinion v5.9.0 Released: 11/17/2014. Compiled 11/17/2014 01:01:01 PM -0600 Branch: master 7cffc7b9a0b11594d56b71ca0cb042d9b0fc24f5 Components: Full UMD: disabled The following code is Copyright 1998-2014 Opinionlab, Inc. All rights reserved. Unauthorized use is prohibited. This product and other products of OpinionLab, Inc. are protected by U.S. Patent No. 6606581, 6421724, 6785717 B1 and other patents pending. http://www.opinionlab.com Resource added 10/21/2016 -->
<!-- MAIN OL STYLESHEET -->
<link rel="stylesheet" type="text/css" href="../onlineopinionV5/oo_style.css" />
<!-- MAIN OL ENGINE -->
<script language="javascript" type="text/javascript" charset="windows-1252" src="../onlineopinionV5/oo_engine.min.js"></script>
<!-- 4CS INVITE FEEDBACK CONFIGURATION -->
<script language="javascript" type="text/javascript" charset="windows-1252" src="../onlineopinionV5/oo_conf_4cs_invite.js"></script>
<!-- 4CS TAB FEEDBACK CONFIGURATION -->
<script language="javascript" type="text/javascript" charset="windows-1252" src="../onlineopinionV5/oo_conf_4cs_tab.js"></script>
<!-- END: OnlineOpinion v5.9.0 -->

  <?php wp_footer(); ?>
  <?php if ( file_exists( __DIR__ . '/tracking.inc' ) && preg_match('/^4cs\.gia\.edu$/i', $_SERVER['HTTP_HOST']) ) : ?>
    <?php include_once __DIR__ . '/tracking.inc'; ?>
  <?php endif; ?>
  </body>
</html>
