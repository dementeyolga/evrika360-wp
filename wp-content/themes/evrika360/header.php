<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="m-auto">
  <header class="group has-[:checked]:bg-white-glass w-full fixed z-40 transition-colors duration-200">
    <input id="headerScrollToggle" class="hidden" type="checkbox">
    <div class="wrapper flex-row py-[22px] flex justify-between items-center">
      <a href="<?php get_home_url() ?>" class="text-white group-has-[:checked]:text-blue-100">
        <?php include 'parts/evrika-logo.php' ?>
      </a>
      <div class="hover:cursor-pointer text-white group-has-[:checked]:text-grey-400">
        <?php include 'parts/burger-menu-icon.php' ?>
      </div>
    </div>
  </header>