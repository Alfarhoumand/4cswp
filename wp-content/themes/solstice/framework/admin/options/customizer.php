<?php
/**
 * Customizer Section
 */

$this->sections[] = array(
  'title' => esc_html__('Customizer', 'solstice'),
  'desc' => esc_html__('Check child sections to style properly the correct area of the theme.', 'solstice'),
  'icon' => 'el-icon-cog',
  'fields' => array(

  ), // #fields
);
/**
* Pagination Section
*/
$this->sections[] = array(
  'title' => esc_html__('Pagination', 'solstice'),
  'desc' => esc_html__('Configure pagination styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(

    array(
      'id'        => 'customizer-btn-fill-color',
      'type'      => 'color',
      'title'     => esc_html__('Button Fill Color', 'solstice'),
      'default'   => '',
      'output'    => array('background-color' => '.blog-navigation .ajax-load-more, .standard-pagination span, .standard-pagination a')
    ),
    array(
      'id'        => 'customizer-btn-fill-color-hover',
      'type'      => 'color',
      'title'     => esc_html__('Button Fill Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('background-color' => '.blog-navigation .ajax-load-more:hover, .pagination a:hover, .pagination span:hover')
    ),
    array(
      'id'        => 'customizer-btn-text-color',
      'type'      => 'color',
      'title'     => esc_html__('Button Text Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.blog-navigation .ajax-load-more, .pagination span.current, .pagination a')
    ),
    array(
      'id'        => 'customizer-btn-text-color-hover',
      'type'      => 'color',
      'title'     => esc_html__('Button Text Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.blog-navigation .ajax-load-more:hover, .pagination span.current:hover, .pagination a:hover')
    ),
    array(
      'id'        => 'customizer-btn-border-color',
      'type'      => 'color',
      'title'     => esc_html__('Button Border Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-color' => '.blog-navigation .ajax-load-more, .pagination a, .pagination span')
    ),
    array(
      'id'        => 'customizer-btn-border-color-hover',
      'type'      => 'color',
      'title'     => esc_html__('Button Border Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-color' => '.blog-navigation .ajax-load-more:hover, .pagination a:hover, .pagination span:hover')
    ),
  ),
);

/**
* Top Header Section
*/
$this->sections[] = array(
  'title' => esc_html__('Top Header', 'solstice'),
  'desc' => esc_html__('Configure menu styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(

    array(
      'id'        => 'customizer-topheader-bgcolor',
      'type'      => 'color',
      'title'     => esc_html__('Background Color', 'solstice'),
      'default'   => '',
      'output'    => array('background-color' => '.top-message')
    ),
    array(
      'id'        => 'customizer-topheader-color',
      'type'      => 'color',
      'title'     => esc_html__('Text Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.top-message p')
    ),
    array(
      'id'        => 'customizer-topheader-link-color',
      'type'      => 'color',
      'title'     => esc_html__('Link Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.top-message p a')
    ),
    array(
      'id'        => 'customizer-topheader-link-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Link Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.top-message p a:hover')
    ),
  ),
);

/**
* Menu Section
*/
$this->sections[] = array(
  'title' => esc_html__('Menu', 'solstice'),
  'desc' => esc_html__('Configure menu styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Main Header Settings', 'solstice').'</h2>'
    ),
    array(
      'id'        => 'customizer-main-menu-item-color',
      'type'      => 'color',
      'title'     => esc_html__('Main Menu Item Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.main-nav-items a')
    ),
    array(
      'id'        => 'customizer-main-menu-item-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Main Menu Item Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.main-nav-items a:hover, .main-nav-items li ul li a:hover')
    ),
    array(
      'id'        => 'customizer-main-social-icon-color',
      'type'      => 'color',
      'title'     => esc_html__('Social Icon Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '#main-header .social-icons a')
    ),
    array(
      'id'        => 'customizer-main-social-icon-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Social Icon Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '#main-header .social-icons a:hover')
    ),
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Top Menu Settings', 'solstice').'</h2>'
    ),
    array(
      'id'        => 'customizer-header-menu-item-color',
      'type'      => 'color',
      'title'     => esc_html__('Top Menu Item Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.top-nav a')
    ),
    array(
      'id'        => 'customizer-header-menu-item-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Top Menu Item Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.top-nav a:hover')
    ),
    array(
      'id'        => 'customizer-header-menu-bg-color',
      'type'      => 'color',
      'title'     => esc_html__('Top Menu Background Color', 'solstice'),
      'default'   => '',
      'output'    => array('background-color' => '.top-nav-wrapper')
    ),
	array(
      'id'        => 'customizer-header-menu-border-color',
      'type'      => 'color',
      'title'     => esc_html__('Top Menu Top Border Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-top-color' => '.top-nav-wrapper')
    ),
	array(
      'id'        => 'customizer-header-menu-bottom-border-color',
      'type'      => 'color',
      'title'     => esc_html__('Top Menu Bottom Border Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-bottom-color' => '.top-nav-wrapper')
    ),
	array(
      'id'        => 'customizer-header-menu-icon-color',
      'type'      => 'color',
      'title'     => esc_html__('Top Menu Icon Color', 'solstice'),
      'default'   => '',
      'output'    => array('background' => '.nav-trigger .bars span')
    ),
    array(
      'id'        => 'customizer-header-search-icon-color',
      'type'      => 'color',
      'title'     => esc_html__('Search Icon Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.search-container .trigger')
    ),
    array(
      'id'        => 'customizer-header-search-icon-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Search Icon Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.search-container .trigger:hover')
    ),
  ),
);

/**
* Category Section
*/
$this->sections[] = array(
  'title' => esc_html__('Category', 'solstice'),
  'desc' => esc_html__('Configure category styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(
    array(
      'id'        => 'customizer-category-text-color',
      'type'      => 'color',
      'title'     => esc_html__('Category Text Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.blog-post header .categories li a')
    ),
    array(
      'id'        => 'customizer-category-box-text-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Category Text Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.blog-post header .categories li a:hover')
    ),
  ),
);

/**
* Blog Post List Section
*/
$this->sections[] = array(
  'title' => esc_html__('Blog Post', 'solstice'),
  'desc' => esc_html__('Configure blog list and blog grid styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(
    array(
      'id'        => 'customizer-blog-list-title-color',
      'type'      => 'color',
      'title'     => esc_html__('Title Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.list-view .blog-post a, .grid-view .blog-post a, .blog-post-slider .blog-post header h3 a, .blog-post.featured-post header h3 a')
    ),
    array(
      'id'        => 'customizer-blog-list-title-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Title Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.list-view .blog-post a:hover, .grid-view .blog-post a:hover, .blog-post-slider .blog-post header h3 a:hover, .blog-post.featured-post header h3 a:hover')
    ),
    array(
      'id'        => 'customizer-blog-list-meta-color',
      'type'      => 'color',
      'title'     => esc_html__('Meta Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.archive .blog-post header .meta span, .archive .blog-post header .meta a, .blog-post .meta, .blog-post .meta a,  .contents-inner.list-view .blog-post header .meta span, .contents-inner.list-view .blog-post header .meta a, .grid-view .blog-post .meta a, .grid-view .blog-post .meta')
    ),
  ),
);

/**
* Single Post Section
*/
$this->sections[] = array(
  'title' => esc_html__('Blog Single Post', 'solstice'),
  'desc' => esc_html__('Configure blog post element styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(
    array(
      'id'        => 'customizer-blog-post-title-color',
      'type'      => 'color',
      'title'     => esc_html__('Title Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.single .blog-post header h3 a')
    ),
    array(
      'id'        => 'customizer-blog-post-title-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Title Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.single .blog-post header h3 a:hover')
    ),
    array(
      'id'        => 'customizer-blog-post-meta-color',
      'type'      => 'color',
      'title'     => esc_html__('Meta Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.single .blog-post header .meta span, .single .blog-post header .meta a, .single .post-tags a')
    ),
    array(
      'id'        => 'customizer-blog-post-meta-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Meta Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.single .blog-post header .meta a:hover, .single .post-tags a:hover')
    ),
	array(
      'id'        => 'customizer-blog-post-social-share-text-color',
      'type'      => 'color',
      'title'     => esc_html__('Social Share Button Text Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.social-icons.style2 li a')
    ),
    array(
      'id'        => 'customizer-blog-post-social-share-text-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Social Share Button Text Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.social-icons.style2 li a:hover')
    ),
    array(
      'id'        => 'customizer-blog-post-social-share-border-color',
      'type'      => 'color',
      'title'     => esc_html__('Social Share Button Border Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-color' => '.social-icons.style2 li a')
    ),
    array(
      'id'        => 'customizer-blog-post-social-share-border-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Social Share Button Border Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-color' => '.social-icons.style2 li a:hover')
    ),
    array(
      'id'        => 'customizer-blog-post-social-share-background-color',
      'type'      => 'color',
      'title'     => esc_html__('Social Share Button Background Color', 'solstice'),
      'default'   => '',
      'output'    => array('background' => '.social-icons.style2 li a')
    ),
    array(
      'id'        => 'customizer-blog-post-social-share-background-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Social Share Button Background Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('background' => '.social-icons.style2 li a:hover')
    ),
  ),
);


/**
* Footer Section
*/
$this->sections[] = array(
  'title' => esc_html__('Footer', 'solstice'),
  'desc' => esc_html__('Configure footer styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(
    array(
      'id'        => 'customizer-footer-bg-color',
      'type'      => 'color',
      'title'     => esc_html__('Background Color', 'solstice'),
      'default'   => '',
      'output'    => array('background-color' => '#main-footer, #bottom-footer')
    ),
	array(
      'id'        => 'customizer-footer-border-color',
      'type'      => 'color',
      'title'     => esc_html__('Top Border Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-color' => '#main-footer')
    ),
	array(
      'id'        => 'customizer-footer-link-color',
      'type'      => 'color',
      'title'     => esc_html__('General Link Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '#bottom-footer a, #main-footer .widget_latest_posts_entries .post-title a, #main-footer .widget_categories a')
    ),
    array(
      'id'        => 'customizer-footer-link-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('General Link Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '#main-footer a:hover, #bottom-footer a:hover, #main-footer .widget_latest_posts_entries .post-title a:hover, #main-footer .widget_categories a:hover')
    ),
    array(
      'id'        => 'customizer-footer-widget-area-border-color',
      'type'      => 'color',
      'title'     => esc_html__('Widget Area Top and Bottom Border Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-color' => '#main-footer .row')
    ),
    array(
      'id'        => 'customizer-footer-list-border-color',
      'type'      => 'color',
      'title'     => esc_html__('Widget List Bottom Border Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-bottom-color' => '#main-footer .widget ul li')
    ),
    array(
      'id'        => 'customizer-footer-social-color',
      'type'      => 'color',
      'title'     => esc_html__('Social Icon Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '#bottom-footer .social-icons li a')
    ),
    array(
      'id'        => 'customizer-footer-social-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Social Icon Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '#bottom-footer .social-icons li a:hover'),
      'important' => true
    ),
  ),
);

/**
* Widgets Section
*/
$this->sections[] = array(
  'title' => esc_html__('Widgets', 'solstice'),
  'desc' => esc_html__('Configure widgets styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Latest Post', 'solstice').'</h2>'
    ),
    array(
      'id'        => 'customizer-widget-latest-post-widget-title-color',
      'type'      => 'color',
      'title'     => esc_html__('Widget Title Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_latest_posts_entries h5')
    ),
    array(
      'id'        => 'customizer-widget-latest-post-title-color',
      'type'      => 'color',
      'title'     => esc_html__('Title Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_latest_posts_entries .post-title a, #main-footer .widget_latest_posts_entries .post-title a')
    ),
    array(
      'id'        => 'customizer-widget-latest-post-title-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Title Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_latest_posts_entries .post-title a:hover, #main-footer .widget_latest_posts_entries .post-title a:hover')
    ),
    array(
      'id'        => 'customizer-widget-latest-post-meta-color',
      'type'      => 'color',
      'title'     => esc_html__('Meta Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_latest_posts_entries .category a, .widget_latest_posts_entries .post-content span, .widget_latest_posts_entries .post-content span a')
    ),
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Social Media', 'solstice').'</h2>'
    ),
    array(
      'id'        => 'customizer-widget-social-widget-title-color',
      'type'      => 'color',
      'title'     => esc_html__('Widget Title Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_socials h5')
    ),
    array(
      'id'        => 'customizer-widget-social-icon-color',
      'type'      => 'color',
      'title'     => esc_html__('Icon Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '#main-footer .widget_socials a, .widget_socials a')
    ),
    array(
      'id'        => 'customizer-widget-social-icon-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Icon Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '#main-footer .widget_socials a:hover, .widget_socials a:hover')
    ),
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Tag Cloud', 'solstice').'</h2>'
    ),
    array(
      'id'        => 'customizer-widget-tag-title-color',
      'type'      => 'color',
      'title'     => esc_html__('Title Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_tag_cloud h5')
    ),
    array(
      'id'        => 'customizer-widget-tag-category-color',
      'type'      => 'color',
      'title'     => esc_html__('Tag Text Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_tag_cloud a')
    ),
    array(
      'id'        => 'customizer-widget-tag-category-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Tag Text Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_tag_cloud a:hover, #main-footer .widget.widget_tag_cloud a')
    ),
    array(
      'id'        => 'customizer-widget-tag-category-fill-color',
      'type'      => 'color',
      'title'     => esc_html__('Fill Color', 'solstice'),
      'default'   => '',
      'output'    => array('background-color' => '.widget_tag_cloud a')
    ),
    array(
      'id'        => 'customizer-widget-tag-category-fill-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Fill Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('background-color' => '.widget_tag_cloud a:hover, #main-footer .widget.widget_tag_cloud a:hover')
    ),
    array(
      'id'        => 'customizer-widget-tag-category-outline-color',
      'type'      => 'color',
      'title'     => esc_html__('Outline Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-color' => '.widget_tag_cloud a')
    ),
    array(
      'id'        => 'customizer-widget-tag-category-outline-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Outline Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-color' => '.widget_tag_cloud a:hover')
    ),


    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Categories', 'solstice').'</h2>'
    ),
    array(
      'id'        => 'customizer-widget-categories-title-color',
      'type'      => 'color',
      'title'     => esc_html__('Title Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_categories  h5')
    ),
    array(
      'id'        => 'customizer-widget-categories-font-color',
      'type'      => 'color',
      'title'     => esc_html__('Category Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_categories ul li a, #main-footer .widget_categories a')
    ),
    array(
      'id'        => 'customizer-widget-categories-font-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Category Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_categories ul li a:hover, #main-footer .widget_categories a:hover')
    ),
    array(
      'id'        => 'customizer-widget-categories-number-color',
      'type'      => 'color',
      'title'     => esc_html__('Number Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_categories ul li')
    ),
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Search', 'solstice').'</h2>'
    ),
    array(
      'id'        => 'customizer-widget-search-icon-color',
      'type'      => 'color',
      'title'     => esc_html__('Icon Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_search form input[type=submit]')
    ),
    array(
      'id'        => 'customizer-widget-search-icon-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Icon Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_search form input[type=submit]:hover')
    ),
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Mail Poet Widget', 'solstice').'</h2>'
    ),
    array(
      'id'        => 'customizer-widget-mailpoet-hover-button-fill-color',
      'type'      => 'color',
      'title'     => esc_html__('Fill Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('background-color' => '.widget_wysija form:hover:before', 'border-color' => '.widget_wysija form:hover:before')
    ),
    array(
      'id'        => 'customizer-widget-mailpoet-hover-icon-fill-color',
      'type'      => 'color',
      'title'     => esc_html__('Icon Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget_wysija form:hover:before')
    ),
	
	array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Global Widget Headings', 'solstice').'</h2>'
    ),
    array(
      'id'        => 'customizer-widget-global-widget-title-color',
      'type'      => 'color',
      'title'     => esc_html__('Widget Title Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.widget > h5')
    ),
    array(
      'id'        => 'customizer-widget-global-widget-background-color',
      'type'      => 'color',
      'title'     => esc_html__('Widget Title Background Color', 'solstice'),
      'default'   => '',
      'output'    => array('background' => '.widget > h5')
    ),
	array(
      'id'        => 'customizer-widget-global-widget-border-color',
      'type'      => 'color',
      'title'     => esc_html__('Widget Title Border Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-color' => '.widget > h5')
    ),
	
	array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Footer Widget Headings', 'solstice').'</h2>'
    ),
    	array(
      'id'        => 'customizer-widget-global-footer-widget-title-color',
      'type'      => 'color',
      'title'     => esc_html__('Footer Widget Title Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '#main-footer .widget > h5')
    ),
	array(
      'id'        => 'customizer-widget-global-footer-widget-background-color',
      'type'      => 'color',
      'title'     => esc_html__('Footer Widget Title Background Color', 'solstice'),
      'default'   => '',
      'output'    => array('background' => '#main-footer .widget > h5')
    ),
	array(
      'id'        => 'customizer-widget-global-footer-widget-border-color',
      'type'      => 'color',
      'title'     => esc_html__('Footer Widget Title Border Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-color' => '#main-footer .widget > h5')
    ),
  ),
);

/**
* Latest Stories Section
*/
$this->sections[] = array(
  'title' => esc_html__('Latest/Popular Stories', 'solstice'),
  'desc' => esc_html__('Configure stories styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(
    array(
      'id'        => 'customizer-stories-title-color',
      'type'      => 'color',
      'title'     => esc_html__('Title Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.blog-tabs a')
    ),
    array(
      'id'        => 'customizer-stories-title-active-color',
      'type'      => 'color',
      'title'     => esc_html__('Title Active Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.blog-tabs a.active')
    ),
    array(
      'id'        => 'customizer-stories-fill-color',
      'type'      => 'color',
      'title'     => esc_html__('Fill Color', 'solstice'),
      'default'   => '',
      'output'    => array('background-color' => '.blog-tabs a')
    ),
    array(
      'id'        => 'customizer-stories-fill-active-color',
      'type'      => 'color',
      'title'     => esc_html__('Fill Active Color', 'solstice'),
      'default'   => '',
      'output'    => array('background-color' => '.blog-tabs a.active')
    ),
    array(
      'id'        => 'customizer-stories-outline-color',
      'type'      => 'color',
      'title'     => esc_html__('Outline Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-color' => '.blog-tabs a')
    ),
    array(
      'id'        => 'customizer-stories-outline-active-color',
      'type'      => 'color',
      'title'     => esc_html__('Outline Active Color', 'solstice'),
      'default'   => '',
      'output'    => array('border-color' => '.blog-tabs a')
    ),
  ),
);


/**
* Global Link Section
*/
$this->sections[] = array(
  'title' => esc_html__('Global', 'solstice'),
  'desc' => esc_html__('Configure global element styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(
    array(
      'id'        => 'customizer-global-link-color',
      'type'      => 'color',
      'title'     => esc_html__('Link Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.single .blog-post .post-content a, .blog-post .post-meta .author a, .archive .blog-post .post-content a, .page-content a')
    ),
    array(
      'id'        => 'customizer-global-link-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Link Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.single .blog-post .post-content a:hover, .blog-post .post-meta .author a:hover, .archive .blog-post .post-content a:hover, .page-content a:hover')
    ),
    array(
      'id'        => 'customizer-global-page-title-color',
      'type'      => 'color',
      'title'     => esc_html__('Page Title Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.heading a')
    ),
    array(
      'id'        => 'customizer-global-page-title-hover-color',
      'type'      => 'color',
      'title'     => esc_html__('Page Title Hover Color', 'solstice'),
      'default'   => '',
      'output'    => array('color' => '.heading a:hover')
    ),
  ),
);
