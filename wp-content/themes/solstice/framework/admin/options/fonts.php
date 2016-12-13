<?php
/**
 * Customizer Section
 */

$this->sections[] = array(
  'title' => esc_html__('Fonts', 'solstice'),
  'desc' => esc_html__('Check child sections to style properly the correct area of the theme.', 'solstice'),
  'icon' => 'el-icon-cog',
  'fields' => array(

  ), // #fields
);
/**
* Pagination Section
*/
$this->sections[] = array(
  'title' => esc_html__('Home Page', 'solstice'),
  'desc' => esc_html__('Configure homepage styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(

    array(
      'id' => 'font-post-title',
      'type' => 'typography',
      'title' => esc_html__('Post Title', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.blog-post header h3, .blog-post.featured-post header h3'),
    ),
    array(
      'id' => 'font-main-menu-item',
      'type' => 'typography',
      'title' => esc_html__('Main Menu Item', 'solstice'),
      'font-size'=> true,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.main-nav-items li'),
    ),
    array(
      'id' => 'font-header-menu-item',
      'type' => 'typography',
      'title' => esc_html__('Header Menu Item', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.top-nav-wrapper .top-nav li'),
    ),
    array(
      'id' => 'font-meta',
      'type' => 'typography',
      'title' => esc_html__('Meta', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.blog-post .meta'),
    ),
    array(
      'id' => 'font-category-box',
      'type' => 'typography',
      'title' => esc_html__('Category Box', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.blog-post header .categories li a'),
    ),
    array(
      'id' => 'font-excerpt',
      'type' => 'typography',
      'title' => esc_html__('Excerpt', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.contents-inner.list-view .blog-post .post-content p, .contents-inner.list-view .blog-post .post-content, .contents-inner.grid-view .blog-post .post-content'),
    ),
  ),
);

$this->sections[] = array(
  'title' => esc_html__('Post Page', 'solstice'),
  'desc' => esc_html__('Configure blog single styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(

    array(
      'id' => 'font-post-single-title',
      'type' => 'typography',
      'title' => esc_html__('Post Title', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.single-post .blog-post header h3, .blog-post.featured-post header h3'),
    ),
    array(
      'id' => 'font-post-single-meta',
      'type' => 'typography',
      'title' => esc_html__('Meta', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.single .blog-post header .meta'),
    ),
	array(
      'id' => 'font-post-single-headings',
      'type' => 'typography',
      'title' => esc_html__('Headings', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.single .blog-post .post-content h4'),
    ),
    array(
      'id' => 'font-post-single-body',
      'type' => 'typography',
      'title' => esc_html__('Body', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.single .blog-post .post-content p'),
    ),
  ),
);

$this->sections[] = array(
  'title' => esc_html__('Latest/Popular', 'solstice'),
  'desc' => esc_html__('Configure latest/popular fonts.', 'solstice'),
  'subsection' => true,
  'fields' => array(

    array(
      'id' => 'font-latest-popular-title',
      'type' => 'typography',
      'title' => esc_html__('Title', 'solstice'),
      'font-size'=> true,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.blog-tabs a'),
    ),
  ),
);

$this->sections[] = array(
  'title' => esc_html__('Widgets', 'solstice'),
  'desc' => esc_html__('Configure blog single styles.', 'solstice'),
  'subsection' => true,
  'fields' => array(
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Latest Post', 'solstice').'</h2>'
    ),
    array(
      'id' => 'font-widget-latest-post-title',
      'type' => 'typography',
      'title' => esc_html__('Title', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.widget_latest_posts_entries h5'),
    ),
    array(
      'id' => 'font-widget-latest-post-post-title',
      'type' => 'typography',
      'title' => esc_html__('Post Title', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.widget_latest_posts_entries .post-title'),
    ),
    array(
      'id' => 'font-widget-latest-post-meta',
      'type' => 'typography',
      'title' => esc_html__('Meta', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.widget_latest_posts_entries .post-content span'),
    ),
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Social Media', 'solstice').'</h2>'
    ),
    array(
      'id' => 'font-widget-social-post-title',
      'type' => 'typography',
      'title' => esc_html__('Title', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.widget_socials h5'),
    ),

    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Tag Cloud', 'solstice').'</h2>'
    ),
    array(
      'id' => 'font-widget-tag-cloud-title',
      'type' => 'typography',
      'title' => esc_html__('Title', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.widget_tag_cloud h5'),
    ),
    array(
      'id' => 'font-widget-tag-cloud-category',
      'type' => 'typography',
      'title' => esc_html__('Tag Category', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.widget_tag_cloud a'),
    ),

    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Category', 'solstice').'</h2>'
    ),
    array(
      'id' => 'font-widget-category-title',
      'type' => 'typography',
      'title' => esc_html__('Title', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.widget_categories h5'),
    ),
    array(
      'id' => 'font-widget-category',
      'type' => 'typography',
      'title' => esc_html__('Category', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.widget_categories ul li a'),
    ),

    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Text Widget', 'solstice').'</h2>'
    ),
    array(
      'id' => 'font-widget-text-widget-title',
      'type' => 'typography',
      'title' => esc_html__('Title', 'solstice'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.widget_text h5'),
    ),
	
	array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 style="color:#0073aa;">'.esc_html__('Global Widget', 'solstice').'</h2>'
    ),
    array(
      'id' => 'font-widget-global-widget-title',
      'type' => 'typography',
      'title' => esc_html__('Title', 'solstice'),
      'font-size'=> true,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('.widget > h5'),
    ),

  ),
);
