<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    if (is_404()) {
      echo '404 | Страница не найдена';
    } elseif (is_front_page()) {
      echo 'Эврика 360 - речевая аналитика для бизнеса';
    } else {
      the_title('', ' | Эврика360');
    }
    ?>
  </title>
  <?php wp_head(); ?>

  <!-- Marquiz script start -->
  <script>
    (function(w, d, s, o) {
      var j = d.createElement(s);
      j.async = true;
      j.src = '//script.marquiz.ru/v2.js';
      j.onload = function() {
        if (document.readyState !== 'loading') Marquiz.init(o);
        else document.addEventListener("DOMContentLoaded", function() {
          Marquiz.init(o);
        });
      };
      d.head.insertBefore(j, d.head.firstElementChild);
    })(window, document, 'script', {
      host: '//quiz.marquiz.ru',
      region: 'eu',
      id: '66e6d33b2fa5030026ac5480',
      autoOpen: false,
      autoOpenFreq: 'once',
      openOnExit: false,
      disableOnMobile: false
    });
  </script> <!-- Marquiz script end -->
</head>

<body <?php body_class(); ?> class="m-auto">
  <?php wp_body_open(); ?>
  <header class="group has-[:checked]:bg-white-glass w-full fixed z-40 transition-colors duration-200">
    <!-- Header on scroll styles toggle  -->
    <input id="headerScrollToggle" class="hidden" type="checkbox">

    <div class="lg:hidden wrapper flex-row py-[22px] flex justify-between items-center">
      <a href="/" class="text-white group-has-[:checked]:text-blue-100">
        <?php include 'parts/evrika-logo.php' ?>
      </a>

      <div id="burger-trigger" class="hover:curshor-pointer text-white group-has-[:checked]:text-grey-400">
        <?php include 'parts/burger-menu-icon.php' ?>
      </div>
    </div>

    <div class="hidden lg:flex wrapper flex-row py-[33px] justify-between items-center gap-5 group-has-[:checked]:gap-3">
      <a href="/" class="text-white group-has-[:checked]:text-blue-100">
        <div class="group-has-[:checked]:hidden">
          <?php include 'parts/evrika-logo-desktop.php' ?>
        </div>
        <div class="hidden group-has-[:checked]:block">
          <?php include 'parts/evrika-logo-no-text.php' ?>
        </div>
      </a>

      <nav class="hidden group-has-[:checked]:block ">
        <ul class="flex items-center gap-[6px] text-dark-blue-500">
          <li class="shrink-0">
            <a href="#departments" class="px-3 py-[6px] rounded-md hover:bg-blue-50 transition-colors duration-200">Для кого</a>
          </li>
          <li class="shrink-0">
            <a href="#features" class="px-3 py-[6px] rounded-md hover:bg-blue-50 transition-colors duration-200">Возможности</a>
          </li>
          <li class="shrink-0">
            <a href="#how-it-works" class="px-3 py-[6px] rounded-md hover:bg-blue-50 transition-colors duration-200">Как работает</a>
          </li>
          <li class="shrink-0">
            <a href="#cases" class="px-3 py-[6px] rounded-md hover:bg-blue-50 transition-colors duration-200">Кейсы</a>
          </li>
          <li class="shrink-0">
            <a href="#prices" class="px-3 py-[6px] rounded-md hover:bg-blue-50 transition-colors duration-200">Стоимость</a>
          </li>
        </ul>
      </nav>

      <div class="flex gap-8 items-center text-white">
        <div class="space-y-2 shrink-0 group-has-[:checked]:hidden">
          <p class="small-text"><?= CFS()->get('header_messengers_description_text', 20); ?></p>
          <div class="flex gap-2">
            <a class="w-8 h-8" href="<?= CFS()->get('telegram_link', 20); ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/telegram-light-icon.png" alt="">
            </a>
            <a class="w-8 h-8" href="<?= CFS()->get('whatsapp_link', 20); ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/whatsapp-light-icon.png" alt="">
            </a>
          </div>
        </div>

        <div class="shrink-0 space-y-3 group-has-[:checked]:hidden">
          <p class="small-text">
            <?= CFS()->get('working_hours', 20); ?>
          </p>

          <div class="font-bold space-y-1">
            <h5>
              <a class="link-white" href="tel:<?= CFS()->get('phone_belarus', 20); ?>">
                <?= CFS()->get('phone_belarus', 20); ?>
              </a>
            </h5>
            <h5>
              <a class="link-white" href="tel:<?= CFS()->get('phone_russia', 20); ?>">
                <?= CFS()->get('phone_russia', 20); ?>
              </a>
            </h5>
          </div>
        </div>

        <div class="flex gap-2">
          <button class="call-modal-toggle btn small shrink-0 group-has-[:checked]:primary">
            <?= CFS()->get('header_action_button_text', 20); ?>
          </button>
        </div>
      </div>
    </div>
  </header>

  <!-- Burger menu -->
  <div id="burger-menu-wrapper" class="hidden z-50 fixed top-0 left-0 right-0 bottom-0">
    <div class="wrapper pt-[22px] pb-10 bg-dark-blue-600-80 backdrop-blur rounded-b-xl">
      <div class="mb-8 flex justify-between items-center text-white">
        <?php include 'parts/evrika-logo.php' ?>

        <button id="burger-close-btn" class="p-2 -mr-2">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-icon.png" alt="">
        </button>
      </div>

      <nav>
        <ul class="mb-[55px] space-y-4 text-white">
          <li>
            <a href="#departments">Для кого</a>
          </li>
          <li>
            <a href="#features">Возможности</a>
          </li>
          <li>
            <a href="#how-it-works">Как работает</a>
          </li>
          <li>
            <a href="#cases">Кейсы</a>
          </li>
          <li>
            <a href="#prices">Стоимость</a>
          </li>
        </ul>
      </nav>

      <div class="mb-10 flex gap-8 text-white">
        <div class="space-y-2">
          <p class="small-text"><?= CFS()->get('header_messengers_description_text', 20); ?></p>
          <div class="flex gap-2">
            <a href="<?= CFS()->get('telegram_link', 20); ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/telegram-light-icon.png" alt="">
            </a>
            <a href="<?= CFS()->get('whatsapp_link', 20); ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/whatsapp-light-icon.png" alt="">
            </a>
          </div>
        </div>

        <div class="shrink-0 space-y-3">
          <p class="small-text">
            <?= CFS()->get('working_hours', 20); ?>
          </p>

          <div class="font-bold space-y-1">
            <h5>
              <a href="tel:<?= CFS()->get('phone_belarus', 20); ?>">
                <?= CFS()->get('phone_belarus', 20); ?>
              </a>
            </h5>
            <h5>
              <a href="tel:<?= CFS()->get('phone_russia', 20); ?>">
                <?= CFS()->get('phone_russia', 20); ?>
              </a>
            </h5>
          </div>
        </div>
      </div>

      <div class="flex gap-2">
        <button class="call-modal-toggle btn small primary ml-0">
          <?= CFS()->get('header_action_button_text', 20); ?>
        </button>
      </div>
    </div>
  </div>