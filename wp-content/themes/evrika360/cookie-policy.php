<?php
/*
  Template Name: Политика cookie
 */
?>

<?php get_header('not-fixed'); ?>

<main class="max-md:pt-28 wrapper gap-5">
  <h1 class="cookie-policy-h1">Политика в отношении обработки cookie</h1>
  <p>
    4 декабря 2024 г.
  </p>

  <div class="space-y-4">
    <p>
      <b>1. Куки (англ. cookies)</b> являются текстовым файлом, сохраненным в браузере компьютера (мобильного устройства) пользователя сайта сервиса Эврика360 (далее – сайт) при его посещении пользователем для отражения совершенных им действий. Веб-клиент (обычно веб-браузер) всякий раз при попытке открыть страницу сайта пересылает этот фрагмент данных веб-серверу.
    </p>

    <p>
      Cookie-файлы помогают сохранить предпочтения пользователей, проследить общую динамику взаимодействия с сайтом, улучшить пользовательский опыт в будущем и повысить качество функционирования сайта.
    </p>

    <p>
      Мы не передаем куки третьим лицам и не используем их для идентификации субъектов персональных данных.
    </p>
  </div>

  <div class="space-y-4">
    <p class="font-bold">
      2. На сайте обрабатываются следующие куки и устанавливаются сроки их хранения:
    </p>

    <a class="cky-banner-element btn primary small ml-0">Настроить cookie</a>

    <div class="cky-audit-table-element *:!text-dark-blue-500 [&>h3]:text-xl [&>h3]:!mt-5 [&>h3]:!mb-3 [&_table]:!mt-2 [&_th]:!bg-blue-100 [&_th]:!text-white [&_tD]:!text-dark-blue-500 [&_tr:nth-child(odd)_td]:!bg-light-blue-100 [&_th]:!border-white [&_td]:!border-white"></div>

    <p>
      Отключение куки не позволяет определять предпочтения пользователей сайта, в том числе наиболее и наименее популярные страницы и принимать меры по совершенствованию работы сайта исходя из предпочтений пользователей.
    </p>
  </div>

  <div class="space-y-4">
    <p class="font-bold">
      3. Помимо настроек куки на сайте пользователи могут принять или отклонить сбор всех или некоторых cookie в настройках своего браузера.
    </p>

    <p>
      При этом некоторые браузеры позволяют посещать интернет-сайты в режиме «инкогнито», чтобы ограничить хранимый на компьютере объем информации и автоматически удалять сессионные куки. Кроме того, пользователь может удалить ранее сохраненные куки, выбрав соответствующую опцию в истории браузера.
    </p>

    <p>
      Подробнее о параметрах управления cookie можно ознакомиться, перейдя по внешним ссылкам, ведущим на соответствующие страницы сайтов основных браузеров:
    </p>

    <div class="flex gap-3">
      <a href="https://support.mozilla.org/ru/kb/udalenie-kukov-dlya-udaleniya-informacii-kotoruyu-" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/firefox-icon.webp" alt="firefox иконка браузера">
      </a>
      <a href="https://support.google.com/chrome/answer/95647?hl=ru" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/chrome-icon.webp" alt="chrome иконка браузера">
      </a>
      <a href="https://support.apple.com/ru-ru/guide/safari/sfri11471/mac" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/safari-icon.webp" alt="safari иконка браузера">
      </a>
      <a href="https://help.opera.com/ru/latest/web-preferences/#Управление-файлами-cookie" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/opera-icon.webp" alt="opera иконка браузера">
      </a>
      <a href="https://support.microsoft.com/ru-ru/microsoft-edge/ удаление-файлов-cookie-в-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/edge-icon.webp" alt="иконка edge">
      </a>
      <a href="https://support.microsoft.com/ru-ru/windows/удаление-файлов-cookie-и-управление-ими-168dab11-0753-043d-7c16-ede5947fc64d" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ie-icon.webp" alt="internet explorer иконка браузера">
      </a>
    </div>
  </div>
</main>



<?php get_footer(); ?>