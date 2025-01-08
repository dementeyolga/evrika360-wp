<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
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
          <p class="small-text"><?= CFS()->get('header_messengers_description_text', 118); ?></p>
          <div class="flex gap-2">
            <a class="w-8 h-8" href="<?= CFS()->get('telegram_link', 118); ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/telegram-icon.svg" alt="логотип телеграм">
            </a>
            <a class="w-8 h-8" href="<?= CFS()->get('whatsapp_link', 118); ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/whatsapp-icon.svg" alt="логотип whatsapp">
            </a>
          </div>
        </div>

        <div class="shrink-0 space-y-3">
          <p class="small-text">
            <?= CFS()->get('working_hours', 118); ?>
          </p>

          <div class="font-bold space-y-1">
            <p class="h5">
              <a href="tel:<?= preg_replace('/\s+/', '', CFS()->get('phone_belarus', 118)) ?>">
                <?= CFS()->get('phone_belarus', 118); ?>
              </a>
            </p>
            <p class="h5">
              <a href="tel:<?= preg_replace('/\s+/', '', CFS()->get('phone_russia', 118)) ?>">
                <?= CFS()->get('phone_russia', 118); ?>
              </a>
            </p>
          </div>
        </div>

        <div class="flex gap-2">
          <button class="call-modal-toggle btn small primary shrink-0">
            <?= CFS()->get('header_action_button_text', 118); ?>
          </button>
        </div>
      </div>
    </div>
  </header>

  <!-- Burger menu -->
  <?php include 'parts/burger-menu.php' ?>