<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="group has-[#headerScrollToggle:checked]:bg-white-glass w-full fixed z-40 transition-colors duration-200">
    <!-- Header on scroll styles toggle  -->
    <input id="headerScrollToggle" class="hidden" type="checkbox">

    <!-- Mobile menu -->
    <div class="lg:hidden wrapper flex-row py-[22px] flex justify-between items-center">
      <a href="/" class="text-white group-has-[#headerScrollToggle:checked]:text-blue-100">
        <?php include 'parts/evrika-logo.php' ?>
      </a>

      <div id="burger-trigger" class="hover:curshor-pointer text-white group-has-[#headerScrollToggle:checked]:text-grey-400">
        <?php include 'parts/burger-menu-icon.php' ?>
      </div>
    </div>

    <!-- Desktop menu -->
    <div class="hidden lg:flex wrapper gap-4 py-[33px]">
      <div class="flex justify-between items-center gap-5 group-has-[#headerScrollToggle:checked]:gap-3">
        <a href="/" class="text-white group-has-[#headerScrollToggle:checked]:text-blue-100">
          <div class="group-has-[#headerScrollToggle:checked]:hidden">
            <?php include 'parts/evrika-logo-desktop.php' ?>
          </div>
          <div class="hidden group-has-[#headerScrollToggle:checked]:block">
            <?php include 'parts/evrika-logo-no-text.php' ?>
          </div>
        </a>

        <nav class="hidden group-has-[#headerScrollToggle:checked]:block ">
          <ul class="flex items-center gap-2 text-dark-blue-500">
            <?php
            $items = CFS()->get('nav_items', 118);
            foreach ($items as $item): ?>
              <li>
                <?php if ($item['nav_items_is_disabled'] == 0): ?>
                  <?php if (!empty($item['nav_items_inner'])): ?>
                    <div class="relative">
                      <label class="expandable-menu-item menu-item-secondary peer group/label gap-1">
                        <?= $item['nav_items_text'] ?>

                        <span class="group-has-[:checked]/label:-rotate-180 duration-200 transition-transform">
                          <?php include 'parts/arrow-down.php' ?>
                        </span>

                        <input type="radio" name="nav-menu" class="hidden">
                      </label>

                      <ul class="submenu hidden peer-has-[:checked]:block">
                        <?php
                        $subitems = $item['nav_items_inner'];
                        foreach ($subitems as $subitem): ?>
                          <li class="text-lg hover:font-bold">
                            <a data-text="<?= $subitem['nav_items_inner_text'] ?>" class="relative block w-full font-bold text-transparent after:absolute after:inset-0 after:content-[attr(data-text)] after:text-white after:font-normal hover:after:font-bold after:transition-all" target="_blank" href="<?= $subitem['nav_items_inner_link'] ?>">
                              <?= $subitem['nav_items_inner_text'] ?>
                            </a>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>

                  <?php else: ?>
                    <a target="_blank" href="<?= $item['nav_items_link'] ?>" class="menu-item-secondary">
                      <?= $item['nav_items_text'] ?>
                    </a>
                  <?php endif ?>
                <?php else: ?>
                  <div class="relative group/disabled menu-item-secondary-disabled">
                    <div class="group-hover/disabled:text-dark-blue-500 transition-colors">
                      <?php include 'parts/lock-icon.php' ?>
                    </div>

                    <?= $item['nav_items_text'] ?>

                    <div class="hidden group-hover/disabled:flex menu-item-secondary-tooltip w-max absolute top-9 left-0">
                      Cтраница в разработке
                    </div>
                  </div>
                <?php endif ?>
              </li>

            <?php endforeach; ?>
          </ul>
        </nav>

        <div class="flex gap-8 items-center text-white">
          <div class="space-y-2 shrink-0 group-has-[#headerScrollToggle:checked]:hidden">
            <p class="small-text"><?= CFS()->get('header_messengers_description_text', 118); ?></p>
            <div class="flex gap-2">
              <a class="w-8 h-8" href="<?= CFS()->get('telegram_link', 118); ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/telegram-light-icon.svg" alt="логотип телеграм">
              </a>
              <a class="w-8 h-8" href="<?= CFS()->get('whatsapp_link', 118); ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/whatsapp-light-icon.svg" alt="логотип whatsapp">
              </a>
            </div>
          </div>

          <div class="shrink-0 space-y-3 group-has-[#headerScrollToggle:checked]:hidden">
            <p class="small-text">
              <?= CFS()->get('working_hours', 118); ?>
            </p>

            <div class="font-bold space-y-1">
              <p class="h5">
                <a class="link-white" href="tel:<?= preg_replace('/\s+/', '', CFS()->get('phone_belarus', 118)) ?>">
                  <?= CFS()->get('phone_belarus', 118); ?>
                </a>
              </p>
              <p class="h5">
                <a class="link-white" href="tel:<?= preg_replace('/\s+/', '', CFS()->get('phone_russia', 118)) ?>">
                  <?= CFS()->get('phone_russia', 118); ?>
                </a>
              </p>
            </div>
          </div>

          <div class="flex gap-2">
            <button class="call-modal-toggle btn small shrink-0 group-has-[#headerScrollToggle:checked]:primary">
              <?= CFS()->get('header_action_button_text', 118); ?>
            </button>
          </div>
        </div>
      </div>

      <div class="group-has-[#headerScrollToggle:checked]:hidden pt-4 relative before:absolute before:top-0 before:left-[8.2%] before:right-[8.2%] before:h-[1px] before:bg-white before:opacity-60">
        <nav>
          <ul class="flex justify-center gap-[9%] text-white">
            <?php
            $items = CFS()->get('nav_items', 118);
            foreach ($items as $item): ?>
              <li>
                <?php if ($item['nav_items_is_disabled'] == 0): ?>
                  <?php if (!empty($item['nav_items_inner'])): ?>
                    <div class="relative">
                      <label class="expandable-menu-item menu-item peer group/label gap-1">
                        <?= $item['nav_items_text'] ?>

                        <span class="group-has-[:checked]/label:-rotate-180 duration-200 transition-transform">
                          <?php include 'parts/arrow-down.php' ?>
                        </span>

                        <input type="radio" name="nav-menu" class="hidden">
                      </label>

                      <ul class="submenu hidden peer-has-[:checked]:block">
                        <?php
                        $subitems = $item['nav_items_inner'];
                        foreach ($subitems as $subitem): ?>
                          <li class="text-lg hover:font-bold">
                            <a data-text="<?= $subitem['nav_items_inner_text'] ?>" class="relative block w-full font-bold text-transparent after:absolute after:inset-0 after:content-[attr(data-text)] after:text-white after:font-normal hover:after:font-bold after:transition-all" target="_blank" href="<?= $subitem['nav_items_inner_link'] ?>">
                              <?= $subitem['nav_items_inner_text'] ?>
                            </a>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>

                  <?php else: ?>
                    <a target="_blank" href="<?= $item['nav_items_link'] ?>" class="menu-item">
                      <?= $item['nav_items_text'] ?>
                    </a>
                  <?php endif ?>
                <?php else: ?>
                  <div class="relative group/disabled menu-item-disabled">
                    <div class="group-hover/disabled:text-white transition-colors">
                      <?php include 'parts/lock-icon.php' ?>
                    </div>

                    <?= $item['nav_items_text'] ?>

                    <div class="hidden group-hover/disabled:flex menu-item-tooltip w-max absolute top-10 left-0">
                      Cтраница в разработке
                    </div>
                  </div>
                <?php endif ?>
              </li>

            <?php endforeach; ?>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <!-- Burger menu -->
  <?php include 'parts/burger-menu.php' ?>