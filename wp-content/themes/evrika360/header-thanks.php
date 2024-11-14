<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    if (is_404()) {
      echo '404 | Страница не найдена';
    } else {
      the_title('', ' | Эврика360');
    }
    ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="m-auto">
  <header class="w-full max-md:fixed z-40 max-md:bg-white-glass">
    <div class="lg:hidden wrapper flex-row py-[22px] flex justify-between items-center">
      <a href="/" class="text-blue-100">
        <?php include 'parts/evrika-logo.php' ?>
      </a>

      <div id="burger-trigger" class="hover:cursor-pointer text-blue-100">
        <?php include 'parts/burger-menu-icon.php' ?>
      </div>
    </div>

    <div class="hidden lg:flex wrapper flex-row py-[33px] justify-between items-center gap-[22%]">
      <a href="/" class="text-blue-100">
        <?php include 'parts/evrika-logo-desktop.php' ?>
      </a>

      <div class="flex gap-8 items-center text-dark-blue-500">
        <div class="space-y-2 shrink-0">
          <p class="small-text">Задайте нам <br>
            вопрос напрямую!</p>
          <div class="flex gap-2">
            <a class="w-8 h-8" href="https://t.me/troyan_sanq" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/telegram-icon.png" alt="">
            </a>
            <a class="w-8 h-8" href="https://api.whatsapp.com/send/?phone=375293885519" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/whatsapp-icon.png" alt="">
            </a>
          </div>
        </div>

        <div class="shrink-0 space-y-[6px]">
          <p class="small-text">
            Пн-Пт 10:00 — 18:00
          </p>

          <div class="font-bold space-y-1">
            <h5 class="text-lg/[150%]">
              <a href="tel:+375 29 388-55-12">
                +375 29 388-55-12
              </a>
            </h5>
            <h5 class="text-lg/[150%]">
              <a href="tel:+7 495 662-18-73">
                +7 495 662-18-73
              </a>
            </h5>
          </div>
        </div>

        <div class="flex gap-2">
          <button class="call-modal-toggle btn bg-light-blue-100 shrink-0">Заказать звонок</button>
          <a href="https://cabinet.audio-control.by/login" target="_blank" class="btn dark">Войти</a>
        </div>
      </div>
    </div>
  </header>

  <div id="burger-menu-wrapper" class="hidden z-50 fixed top-0 left-0 right-0 bottom-0">
    <div class="wrapper pt-[22px] pb-10 bg-dark-blue-600-80 backdrop-blur rounded-b-xl">
      <div class="mb-8 flex justify-between items-center text-white">
        <?php include 'parts/evrika-logo.php' ?>

        <button id="burger-close-btn" class="p-2 -mr-2">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-icon.png" alt="">
        </button>
      </div>

      <ul class="mb-[55px] space-y-4 text-white">
        <li>
          <a href="/#departments">Для кого</a>
        </li>
        <li>
          <a href="/#features">Возможности</a>
        </li>
        <li>
          <a href="/#how-it-works">Как работает</a>
        </li>
        <li>
          <a href="/#cases">Кейсы</a>
        </li>
        <li>
          <a href="/#prices">Стоимость</a>
        </li>
      </ul>

      <div class="mb-10 flex gap-8 text-white">
        <div class="space-y-2">
          <p class="small-text">Задайте нам
            вопрос напрямую!</p>
          <div class="flex gap-2">
            <a href="https://t.me/troyan_sanq" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/telegram-light-icon.png" alt="">
            </a>
            <a href="https://api.whatsapp.com/send/?phone=375293885519" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/whatsapp-light-icon.png" alt="">
            </a>
          </div>
        </div>

        <div class="shrink-0 space-y-3">
          <p class="small-text">
            Пн-Пт 10:00 — 18:00
          </p>

          <div class="font-bold space-y-1">
            <h5>
              <a href="tel:+375 29 388-55-12">
                +375 29 388-55-12
              </a>
            </h5>
            <h5>
              <a href="tel:+7 495 662-18-73">
                +7 495 662-18-73
              </a>
            </h5>
          </div>
        </div>
      </div>

      <div class="flex gap-2">
        <button class="call-modal-toggle btn grow">Заказать звонок</button>
        <a href="https://cabinet.audio-control.by/login" target="_blank" class="btn dark grow">Войти</a>
      </div>
    </div>
  </div>