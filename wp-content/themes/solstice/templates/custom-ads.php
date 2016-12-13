<?php
/**
 * Loop
 *
 * @package solstice
 * @since 1.0
 */
?>

<?php
  $custom_ads      = solstice_get_opt('custom-ads-img');
  $custom_ads_link = solstice_get_opt('custom-ads-link');
  if(isset($custom_ads) && !empty($custom_ads['url'])):
?>
<div class="col-md-12">
  <div class="customAd-container">
    <a href="<?php echo esc_url($custom_ads_link); ?>" target="_blank"><img src="<?php echo esc_url($custom_ads['url']); ?>" alt=""></a>
  </div>
</div>
<?php endif; ?>
