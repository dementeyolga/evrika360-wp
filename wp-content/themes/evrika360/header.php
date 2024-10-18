<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="m-auto">
  <header class="w-full fixed z-40">
    <div class="wrapper flex-row py-[22px] flex justify-between items-center">
      <a href="<?php get_home_url() ?>">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-logo-white.svg" alt="логотип Эврика360">
      </a>
      <div class="hover:cursor-pointer">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/burger-menu-icon.svg" alt="логотип Эврика360">
      </div>
    </div>
  </header>