<footer class="wrapper mt-[64px] pb-10 space-y-8 lg:space-y-10">
  <div class="flex flex-col gap-8 lg:flex-row lg:justify-between lg:items-center">
    <a href="/" class="w-[225px] text-blue-100 *:w-full">
      <?php include 'parts/evrika-logo-medium.php' ?>
    </a>

    <div class="space-y-1">
      <p class="small-text">
        <?= CFS()->get('working_hours', 118); ?>
      </p>

      <div class="flex gap-4 lg:gap-8 font-bold">
        <a class="link-dark" href="tel:<?= preg_replace('/\s+/', '', CFS()->get('phone_belarus', 118)) ?>">
          <?= CFS()->get('phone_belarus', 118); ?>
        </a>
        <a class="link-dark" href="tel:<?= preg_replace('/\s+/', '', CFS()->get('phone_russia', 118)) ?>">
          <?= CFS()->get('phone_russia', 118); ?>
        </a>
      </div>
    </div>

    <div class="flex gap-8 lg:gap-4">
      <button class="call-modal-toggle mx-0 xs:shrink xs:grow-0 grow btn small dark">Заказать звонок</button>

      <div class="grow-0 flex gap-2 items-center justify-end">
        <a class="shrink-0" href="<?= CFS()->get('telegram_link', 118); ?>" target="_blank">
          <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/telegram-icon.svg" alt="логотип телеграм">
          <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/telegram-icon-desktop.svg" alt="логотип телеграм">
        </a>
        <a class="shrink-0" href="<?= CFS()->get('whatsapp_link', 118); ?>" target="_blank">
          <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/whatsapp-icon.svg" alt="логотип whatsapp">
          <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/whatsapp-icon-desktop.svg" alt="логотип whatsapp">
        </a>
      </div>
    </div>
  </div>

  <div class="py-4 flex flex-col gap-y-6 lg:flex-row justify-between lg:gap-20 *:small-text border-t border-t-grey-100">
    <p class="text-grey-400">
      <?= CFS()->get('footer_requisites', 118); ?>
    </p>

    <div class="flex flex-col gap-2 items-start lg:items-center">
      <p>
        <?= CFS()->get('social_media_title', 118); ?>
      </p>

      <div class="flex gap-2">
        <?php
        $fields = CFS()->get('social_media', 118);
        foreach ($fields as $field): ?>
          <a href="<?= $field['social_media_link'] ?>">
            <img src="<?= $field['social_media_logo'] ?>" alt="ссылка на соц. сеть <?= $field['social_media_link'] ?>">
          </a>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="flex flex-col gap-y-3">
      <a href='/privacy-policy/' class="text-base text-blue-200 underline">
        Политика конфиденциальности
      </a>
      <a href='/cookie-policy/' class="text-base text-blue-200 underline">
        Политика в отношении обработки cookie
      </a>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>