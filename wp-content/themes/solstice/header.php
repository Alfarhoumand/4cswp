<?php
/**
 * Header file
 *
 * @package solstice
 * @since 1.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <!-- Sticky Logo -->
    <?php solstice_sticky_logo(); ?>

    <!-- Top Header -->
    <?php echo solstice_top_header(); ?>

    <?php get_template_part('templates/sideheader'); ?>

    <section id="wrapper">
      <?php get_template_part('templates/preheader'); ?>
      <?php get_template_part('templates/header'); ?>
