<!-- 1. Попап "Заказать консультацию" (большой) -->
<div id="popup-order-consultation" class="modal hidden z-50 fixed top-0 w-screen h-screen justify-center items-center bg-blur-fade overflow-auto">
  <div class="relative wrapper items-center xl:my-10 xl:p-12 xl:pr-[25px] xl:border xl:border-grey-300 xl:bg-pattern xl:rounded-xl overflow-hidden">
    <button class="close hidden xl:block absolute top-0 right-3 p-4">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-icon.svg" alt="закрыть модальное окно">
    </button>
    <div class="hidden xl:block absolute inset-0 -z-10 bg-dark-blue-500 rounded-xl"></div>
    <div class="hidden xl:block max-w-[744px] absolute left-0 -bottom-12">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/laptop-demo.webp" alt="видео-консультация по сервису Эврика360">
    </div>

    <div class="xl:flex xl:gap-14">
      <div class="hidden xl:block ">
        <p class="h4 mb-9 text-white">Запишитесь на <b class="text-yellow-500">онлайн-демонстрацию</b> возможностей речевой аналитики на примере вашей компании</p>
        <p class="h-fit text-white px-10 py-4 shrink-0 bg-dark-blue-600-80 backdrop-blur-sm rounded-sm">
          Расскажем о возможностях сервиса и рассчитаем целесообразность применения в вашей компании
        </p>
      </div>

      <div class="max-w-[448px] relative px-4 py-6 w-full rounded-xl border border-grey-400 bg-white">
        <button class="close xl:hidden absolute top-2 right-0 p-4">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.svg" alt="закрыть модальное окно">
        </button>

        <p class="h4 mb-5 max-xl:mr-7 md:text-xl/[130%]">
          <b>Заполните форму,</b> чтобы записаться на онлайн-демонстрацию
        </p>

        <form novalidate class="mb-4 flex flex-col gap-5">
          <div class="relative flex flex-col gap-2">
            <label for="cons-name">Ваше имя*</label>
            <input type="text" name="name" id="cons-name" placeholder="Введите имя" required minlength="2" pattern="[а-яА-Яa-zA-ZЁё\- \(\)]+">
            <p class="input-error absolute bottom-0 translate-y-full"></p>
          </div>

          <div class="relative flex flex-col gap-2">
            <label for="cons-role">Ваша роль в компании</label>
            <input type="text" name="post" id="cons-role" placeholder="Например, СЕО" pattern="[а-яА-Яa-zA-ZЁё\- \(\)]+">
            <p class="input-error absolute bottom-0 translate-y-full"></p>
          </div>

          <div class="relative flex flex-col gap-2">
            <label for="cons-phone">Ваш номер телефона*</label>
            <input data-phone type="text" name="phone" id="cons-phone" required pattern="[+0-9\-_\(\) ]+">
            <p class="input-error absolute bottom-0 translate-y-full"></p>
          </div>

          <div class="relative flex gap-4 items-center">
            <input type="checkbox" required class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="processDataAgreement" id="cons-agree-personal-data">
            <p class="input-error absolute bottom-0 translate-y-full"></p>
            <label for="cons-agree-personal-data" class="text-grey-400">Даю согласие на обработку персональных данных</label>
          </div>

          <div class="relative">
            <button type="submit" class="btn primary w-full">Записаться</button>

            <p class="form-error-field input-error w-full text-center absolute bottom-0 translate-y-full"></p>
          </div>
        </form>

        <div class="p-4 small-text bg-light-blue-100">
          Или звоните по номеру <a class="underline text-blue-200 font-bold" href="tel:+37529388-55-12">+375 29 388-55-12</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 2. Попап "Заказать экскурсию" (большой) -->
<div id="popup-order-excursion" class="modal hidden z-50 fixed top-0 w-screen h-screen justify-center items-center bg-blur-fade overflow-auto">
  <div class="relative wrapper items-center xl:my-10 xl:p-12 xl:pr-[25px] xl:border xl:border-grey-300 xl:bg-pattern xl:rounded-xl overflow-hidden">
    <button class="close hidden xl:block absolute top-0 right-3 p-4">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-icon.svg" alt="закрыть модальное окно">
    </button>
    <div class="hidden xl:block absolute inset-0 -z-10 bg-dark-blue-500 rounded-xl"></div>
    <div class="hidden xl:block max-w-[744px] absolute left-0 -bottom-12">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/laptop-demo.webp" alt="видео-консультация по сервису Эврика360">
    </div>

    <div class="xl:flex xl:gap-14">
      <div class="hidden xl:block ">
        <p class="h4 mb-9 text-white">Запишитесь на <b class="text-yellow-500">онлайн-экскурсию</b> по сервису речевой аналитики и узнайте, как он может помочь в вашей компании</p>
        <p class="h-fit text-white px-10 py-4 shrink-0 bg-dark-blue-600-80 backdrop-blur-sm rounded-sm">
          Расскажем о возможностях сервиса и рассчитаем целесообразность применения в вашей компании
        </p>
      </div>

      <div class="max-w-[448px] relative px-4 py-6 w-full rounded-xl border border-grey-400 bg-white">
        <button class="close xl:hidden absolute top-2 right-0 p-4">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.svg" alt="закрыть модальное окно">
        </button>

        <p class="h4 mb-5 max-xl:mr-7 md:text-xl/[130%]">
          <b>Заполните форму</b>, чтобы записаться на онлайн-экскурсию
        </p>

        <form novalidate class="mb-4 flex flex-col gap-5">
          <div class="relative flex flex-col gap-2">
            <label for="exc-name">Ваше имя*</label>
            <input type="text" name="name" id="exc-name" placeholder="Введите имя" required minlength="2" pattern="[а-яА-Яa-zA-ZЁё\- \(\)]+">
            <p class="input-error absolute bottom-0 translate-y-full"></p>
          </div>

          <div class="relative flex flex-col gap-2">
            <label for="exc-role">Ваша роль в компании</label>
            <input type="text" name="post" id="exc-role" placeholder="Например, СЕО" pattern="[а-яА-Яa-zA-ZЁё\- \(\)]+">
            <p class="input-error absolute bottom-0 translate-y-full"></p>
          </div>

          <div class="relative flex flex-col gap-2">
            <label for="exc-phone">Ваш номер телефона*</label>
            <input data-phone type="text" name="phone" id="exc-phone" required pattern="[+0-9\-_\(\) ]+">
            <p class="input-error absolute bottom-0 translate-y-full"></p>
          </div>

          <div class="relative flex gap-4 items-center">
            <input type="checkbox" required class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="processDataAgreement" id="exc-agree-personal-data">
            <p class="input-error absolute bottom-0 translate-y-full"></p>
            <label for="exc-agree-personal-data" class="text-grey-400">Даю согласие на обработку персональных данных</label>
          </div>

          <div class="relative">
            <button type="submit" class="btn primary w-full">Записаться</button>

            <p class="form-error-field input-error w-full text-center absolute bottom-0 translate-y-full"></p>
          </div>
        </form>

        <div class="p-4 small-text bg-light-blue-100">
          Или звоните по номеру <a class="underline text-blue-200 font-bold" href="tel:+37529388-55-12">+375 29 388-55-12</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 3. Попап "Заказать Звонок" -->
<div id="popup-order-call" class="modal hidden z-50 fixed top-0 w-screen h-screen justify-center items-center bg-blur-fade overflow-auto">
  <div class="wrapper md:px-3 max-w-[448px]">
    <div class="relative px-4 py-6 lg:px-6 lg:py-8 w-full rounded-xl border border-grey-400 bg-white">
      <button class="close absolute top-2 right-0 p-4">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.svg" alt="закрыть модальное окно">
      </button>

      <p class="h4 mb-5 mr-7 md:text-xl/[130%]">
        <b>Заполните форму</b> и закажите консультацию специалиста
      </p>

      <form novalidate class="mb-4 flex flex-col gap-5">
        <div class="relative flex flex-col gap-2">
          <label for="call-name">Ваше имя*</label>
          <input type="text" name="name" id="call-name" placeholder="Введите имя" required minlength="2" pattern="[а-яА-Яa-zA-ZЁё\- \(\)]+">
          <p class="input-error absolute bottom-0 translate-y-full"></p>
        </div>

        <div class="relative flex flex-col gap-2">
          <label for="call-phone">Ваш номер телефона*</label>
          <input data-phone type="text" name="phone" id="call-phone" required pattern="[+0-9\-_\(\) ]+">
          <p class="input-error absolute bottom-0 translate-y-full"></p>
        </div>

        <div class="relative flex gap-4 items-center">
          <input type="checkbox" required class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="processDataAgreement" id="call-agree-personal-data">
          <p class="input-error absolute bottom-0 translate-y-full"></p>
          <label for="call-agree-personal-data" class="text-grey-400">Даю согласие на обработку персональных данных</label>
        </div>

        <div class="relative">
          <button type="submit" class="btn primary w-full">Заказать звонок</button>

          <p class="form-error-field input-error w-full text-center absolute bottom-0 translate-y-full"></p>
        </div>
      </form>

      <div class="p-4 small-text bg-light-blue-100">
        Или звоните по номеру <a class="underline text-blue-200 font-bold" href="tel:+37529388-55-12">+375 29 388-55-12</a>
      </div>
    </div>
  </div>
</div>

<!-- 4. Попап "Протестировать сервис" -->
<div id="popup-order-test" class="modal hidden z-50 fixed top-0 w-screen h-screen justify-center items-center bg-blur-fade overflow-auto">
  <div class="wrapper md:px-3 max-w-[448px]">
    <div class="relative px-4 py-6 lg:px-6 lg:py-8 w-full rounded-xl border border-grey-400 bg-white">
      <button class="close absolute top-2 right-0 p-4">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.svg" alt="закрыть модальное окно">
      </button>

      <p class="h4 mb-5 mr-7 md:text-xl/[130%]">
        Чтобы протестировать сервис <b>на данных вашей компании</b>, заполните форму:
      </p>

      <form novalidate class="mb-4 flex flex-col gap-5">
        <div class="relative flex flex-col gap-2">
          <label for="test-name">Ваше имя*</label>
          <input type="text" name="name" id="test-name" placeholder="Введите имя" required minlength="2" pattern="[а-яА-Яa-zA-ZЁё\- \(\)]+">
          <p class="input-error absolute bottom-0 translate-y-full"></p>
        </div>

        <div class="relative flex flex-col gap-2">
          <label for="test-phone">Ваш номер телефона*</label>
          <input data-phone type="text" name="phone" id="test-phone" required pattern="[+0-9\-_\(\) ]+">
          <p class="input-error absolute bottom-0 translate-y-full"></p>
        </div>

        <div class="relative flex flex-col gap-2">
          <label for="test-managers-quantity">Сколько у вас менеджеров / операторов</label>
          <input type="text" name="managersQuantity" id="test-managers-quantity" placeholder="Введите количество" pattern="[0-9]+">
          <p class="input-error absolute bottom-0 translate-y-full"></p>
        </div>

        <div class="relative flex gap-4 items-center">
          <input type="checkbox" required class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="processDataAgreement" id="test-agree-personal-data">
          <p class="input-error absolute bottom-0 translate-y-full"></p>
          <label for="test-agree-personal-data" class="text-grey-400">Даю согласие на обработку персональных данных</label>
        </div>

        <div class="relative">
          <button type="submit" class="btn primary w-full">Протестировать</button>

          <p class="form-error-field input-error w-full text-center absolute bottom-0 translate-y-full"></p>
        </div>

      </form>

      <div class="p-4 small-text bg-light-blue-100">
        Или звоните по номеру <a class="underline text-blue-200 font-bold" href="tel:+37529388-55-12">+375 29 388-55-12</a>
      </div>
    </div>
  </div>
</div>

<!-- Попап при клике на кнопку "А что еще?" в блоке "Стоимость" на больших экранах -->
<div id="popup-whats-more" class="modal hidden z-50 fixed top-0 w-screen h-screen justify-center items-center bg-blur-fade overflow-auto">
  <div class="wrapper md:px-4 max-w-[448px]">
    <div class="relative px-4 py-6 lg:px-6 lg:py-8 w-full rounded-xl border border-grey-400 bg-white">
      <button class="close absolute top-2 right-0 p-4">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.svg" alt="закрыть модальное окно">
      </button>

      <div class="space-y-5">
        <div class="space-y-2">
          <div class="flex items-center gap-3">
            <p class="h5 font-bold"><?= CFS()->get('prices_more_1_price') ?></p>
            <p class="description text-xs lg:text-sm"><?= CFS()->get('prices_more_1_disclaimer') ?></p>
          </div>
          <p class="description text-grey-400 leading-tight"><?= CFS()->get('prices_more_1_title') ?></p>
        </div>

        <div class="grid grid-cols-2 gap-2">
          <div class="space-y-2">
            <p class="h5 font-bold"><?= CFS()->get('prices_more_2_price') ?></p>
            <p class="description text-grey-400 leading-tight"><?= CFS()->get('prices_more_1_title') ?></p>
          </div>

          <div class="space-y-2">
            <p class="h5 font-bold"><?= CFS()->get('prices_more_3_price') ?></p>
            <p class="description text-grey-400 leading-tight"><?= CFS()->get('prices_more_3_title') ?></p>
          </div>
        </div>

        <div class="space-y-2">
          <p class="h5 font-bold"><?= CFS()->get('prices_more_4_price') ?></h5>
          <p class="description text-grey-400">
            <?= CFS()->get('prices_more_4_title') ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Попап с видео в hero-секции -->
<div id="popup-video-promo" class="modal hidden z-50 fixed top-0 w-screen h-screen justify-center items-center bg-blur-fade overflow-auto">
  <div class="wrapper px-[3%] max-w-[1000px] max-h-fit">
    <div class="relative p-2 pt-10 md:p-4 md:pt-10 lg:p-6 lg:pt-10 w-full rounded-xl border border-grey-400 bg-white">
      <button class="close absolute top-0 right-0 p-3">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.svg" alt="закрыть модальное окно">
      </button>


      <div class="responsive-iframe-container">
        <iframe src="https://www.youtube.com/embed/<?= CFS()->get('hero_video_id'); ?>" title="Эврика360: Как работает речевая аналитика в бизнесе" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<!-- Попап с видео в секции Departments -->
<div id="popup-video-founders" class="modal hidden z-50 fixed top-0 w-screen h-screen justify-center items-center bg-blur-fade overflow-auto">
  <div class="wrapper px-[3%] max-w-[1000px] max-h-fit">
    <div class="relative p-2 pt-10 md:p-4 md:pt-10 lg:p-6 lg:pt-10 w-full rounded-xl border border-grey-400 bg-white">
      <button class="close absolute top-0 right-0 p-3">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.svg" alt="закрыть модальное окно">
      </button>


      <div class="responsive-iframe-container">
        <iframe src="https://www.youtube.com/embed/<?= CFS()->get('dept_youtube_id'); ?>" title="Эврика360: Как работает речевая аналитика в бизнесе" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>