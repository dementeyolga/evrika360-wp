<footer class="wrapper mt-[64px] pb-10 space-y-8 lg:space-y-10">
  <div class="flex flex-col gap-8 lg:flex-row lg:justify-between lg:items-center">
    <div>
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-logo-footer.png" alt="">
    </div>

    <div class="space-y-1">
      <p class="small-text">
        Пн-Пт 10:00 — 18:00
      </p>

      <div class="flex gap-4 lg:gap-8 font-bold">
        <a class="link-dark" href="tel:+375 29 388-55-12">+375 29 388-55-12</a>
        <a class="link-dark" href="tel:+7 495 662-18-73">+7 495 662-18-73</a>
      </div>
    </div>

    <div class="flex gap-8 lg:gap-4">
      <button class="call-modal-toggle mx-0 xs:shrink xs:grow-0 grow btn dark">Заказать звонок</button>

      <div class="grow-0 flex gap-2 items-center justify-end">
        <a class="shrink-0" href="https://t.me/troyan_sanq" target="_blank">
          <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/telegram-icon.png" alt="">
          <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/telegram-icon-desktop.png" alt="">
        </a>
        <a class="shrink-0" href="https://api.whatsapp.com/send/?phone=375293885519" target="_blank">
          <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/whatsapp-icon.png" alt="">
          <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/whatsapp-icon-desktop.png" alt="">
        </a>
      </div>
    </div>
  </div>

  <div class="py-4 flex flex-col gap-y-4 lg:flex-row lg:gap-20 *:small-text border-t border-t-grey-100">
    <p class="text-grey-400">
      ООО «ИТ-Глобал» <br>
      223070, Минская область, Минский район, <br>
      Михановичский с/с, д. 51, район д. Михановичи <br>
      УНП 691844889
    </p>
    <p class="text-blue-200 underline">
      Политика конфиденциальности
    </p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>