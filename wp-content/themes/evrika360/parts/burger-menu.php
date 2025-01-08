<div id="burger-menu-wrapper" class="hidden z-50 fixed top-0 left-0 right-0 bottom-0">
  <div class="wrapper justify-between pt-[22px] pb-10 min-h-[70vh] bg-dark-blue-600-80 backdrop-blur rounded-b-xl">
    <div>
      <div class="mb-8 flex justify-between items-center text-white">
        <?php include 'evrika-logo.php' ?>

        <button id="burger-close-btn" class="p-2 -mr-2">
          <img src="<?= get_template_directory_uri() ?>/assets/images/close-circle-icon.svg" alt="закрыть меню">
        </button>
      </div>

      <nav>
        <ul class="mb-6 space-y-4 text-white">
          <?php
          $items = CFS()->get('nav_items', 118);
          foreach ($items as $item): ?>
            <li>
              <?php if ($item['nav_items_is_disabled'] == 0): ?>
                <?php if (!empty($item['nav_items_inner'])): ?>
                  <div class="relative space-y-3">
                    <label class="text-base flex items-center peer group/label gap-1">
                      <?= $item['nav_items_text'] ?>

                      <span class="group-has-[:checked]/label:-rotate-180 duration-200 transition-transform">
                        <?php include 'arrow-down.php' ?>
                      </span>

                      <input type="checkbox" name="nav-menu" class="hidden">
                    </label>

                    <ul class="hidden peer-has-[:checked]:flex ml-4 flex-col gap-3">
                      <?php
                      $subitems = $item['nav_items_inner'];
                      foreach ($subitems as $subitem): ?>
                        <li class="text-base">
                          <a target="_blank" href="<?= $subitem['nav_items_inner_link'] ?>">
                            <?= $subitem['nav_items_inner_text'] ?>
                          </a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>

                <?php else: ?>
                  <a target="_blank" href="<?= $item['nav_items_link'] ?>" class="">
                    <?= $item['nav_items_text'] ?>
                  </a>
                <?php endif ?>
              <?php endif ?>
            </li>

          <?php endforeach; ?>
        </ul>
      </nav>
    </div>

    <div>
      <div class="mb-10 flex gap-8 text-white">
        <div class="space-y-2">
          <p class="small-text"><?= CFS()->get('header_messengers_description_text', 118); ?></p>
          <div class="flex gap-2">
            <a href="<?= CFS()->get('telegram_link', 118); ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/telegram-light-icon.svg" alt="логотип телеграм">
            </a>
            <a href="<?= CFS()->get('whatsapp_link', 118); ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/whatsapp-light-icon.svg" alt="логотип whatsapp">
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
      </div>

      <div class="flex gap-2">
        <button class="call-modal-toggle btn small primary ml-0">
          <?= CFS()->get('header_action_button_text', 118); ?>
        </button>
      </div>
    </div>
  </div>
</div>