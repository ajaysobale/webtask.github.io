<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="logo"><?php the_custom_logo(); ?></div>
  <nav><?php wp_nav_menu(['theme_location' => 'primary']); ?></nav>
</header>
