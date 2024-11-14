<!-- 1. Popup "Заказать консультацию" (большой) -->
<div id="popup-order-consultation" class="modal hidden z-50 fixed w-screen h-screen justify-center items-center bg-blur-fade overflow-auto">
  <div class="relative wrapper items-center xl:my-10 xl:p-12 xl:pr-[25px] xl:border xl:border-grey-300 xl:bg-pattern xl:rounded-xl overflow-hidden">
    <button class="close hidden xl:block absolute top-0 right-3 p-4">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-icon.png" alt="">
    </button>
    <div class="hidden xl:block absolute inset-0 -z-10 bg-dark-blue-500 rounded-xl"></div>
    <div class="hidden xl:block absolute left-0 -bottom-14">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/laptop-demo.png" alt="">
    </div>

    <div class="xl:flex xl:gap-14">
      <div class="hidden xl:block ">
        <h4 class="mb-9 text-white">Запишитесь на <b class="text-yellow-500">онлайн-демонстрацию</b> возможностей речевой аналитики на примере вашей компании</h4>
        <p class="h-fit text-white px-10 py-4 shrink-0 bg-dark-blue-600-80 backdrop-blur-sm rounded-sm">
          Расскажем о возможностях сервиса и рассчитаем целесообразность применения в вашей компании
        </p>
      </div>

      <div class="max-w-[448px] relative my-5 xl:my-0 px-4 py-6 w-full rounded-xl border border-grey-400 bg-white">
        <button class="close xl:hidden absolute top-2 right-0 p-4">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.png" alt="">
        </button>

        <h4 class="mb-5 max-xl:mr-7 md:text-xl/[130%]">
          <b>Заполните форму</b> и закажите консультацию специалиста
        </h4>

        <form novalidate class="mb-4 flex flex-col gap-4">
          <div class="relative flex flex-col gap-2">
            <label for="cons-name">Ваше имя*</label>
            <input type="text" name="Имя" id="cons-name" placeholder="Введите имя" required minlength="2" pattern="[а-яА-ЯЁё\- \(\)]+">
            <p class="input-error"></p>
          </div>

          <div class="relative flex flex-col gap-2">
            <label for="cons-role">Ваша роль в компании</label>
            <input type="text" name="Роль" id="cons-role" placeholder="Например, СЕО" pattern="[а-яА-ЯЁё\- \(\)]+">
            <p class="input-error"></p>
          </div>

          <div class="relative flex flex-col gap-2">
            <label for="cons-phone">Ваш номер телефона*</label>
            <input data-phone type="text" name="Телефон" id="cons-phone" required pattern="[+0-9\-_\(\) ]+">
            <p class="input-error"></p>
          </div>

          <div class="relative flex gap-4 items-center">
            <input type="checkbox" required class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="Согласие на обработку персональных данных" id="cons-agree-personal-data">
            <p class="input-error"></p>
            <label for="cons-agree-personal-data" class="text-grey-400">Даю согласие на обработку персональных данных</label>
          </div>

          <button type="submit" class="btn primary w-full">Записаться</button>
        </form>

        <div class="p-4 small-text bg-light-blue-100">
          Или звоните по номеру <a class="underline text-blue-200 font-bold" href="tel:+375 29 388-55-12">+375 29 388-55-12</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popup "Заказать экскурсию" (большой) -->
<div id="popup-order-excursion" class="modal hidden z-50 fixed w-screen h-screen justify-center items-center bg-blur-fade overflow-auto">
  <div class="relative wrapper items-center xl:my-10 xl:p-12 xl:pr-[25px] xl:border xl:border-grey-300 xl:bg-pattern xl:rounded-xl overflow-hidden">
    <button class="close hidden xl:block absolute top-0 right-3 p-4">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-icon.png" alt="">
    </button>
    <div class="hidden xl:block absolute inset-0 -z-10 bg-dark-blue-500 rounded-xl"></div>
    <div class="hidden xl:block absolute left-0 -bottom-14">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/laptop-demo.png" alt="">
    </div>

    <div class="xl:flex xl:gap-14">
      <div class="hidden xl:block ">
        <h4 class="mb-9 text-white">Запишитесь на <b class="text-yellow-500">онлайн-экскурсию</b> по сервису речевой аналитики и узнайте, как он может помочь в вашей компании</h4>
        <p class="h-fit text-white px-10 py-4 shrink-0 bg-dark-blue-600-80 backdrop-blur-sm rounded-sm">
          Расскажем о возможностях сервиса и рассчитаем целесообразность применения в вашей компании
        </p>
      </div>

      <div class="max-w-[448px] relative my-5 xl:my-0 px-4 py-6 w-full rounded-xl border border-grey-400 bg-white">
        <button class="close xl:hidden absolute top-2 right-0 p-4">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.png" alt="">
        </button>

        <h4 class="mb-5 max-xl:mr-7 md:text-xl/[130%]">
          <b>Заполните форму</b>, чтобы записаться на онлайн-экскурсию
        </h4>

        <form novalidate class="mb-4 flex flex-col gap-4">
          <div class="relative flex flex-col gap-2">
            <label for="exc-name">Ваше имя*</label>
            <input type="text" name="Имя" id="exc-name" placeholder="Введите имя" required minlength="2" pattern="[а-яА-ЯЁё\- \(\)]+">
            <p class="input-error"></p>
          </div>

          <div class="relative flex flex-col gap-2">
            <label for="exc-role">Ваша роль в компании</label>
            <input type="text" name="Роль" id="exc-role" placeholder="Например, СЕО" pattern="[а-яА-ЯЁё\- \(\)]+">
            <p class="input-error"></p>
          </div>

          <div class="relative flex flex-col gap-2">
            <label for="exc-phone">Ваш номер телефона*</label>
            <input data-phone type="text" name="Телефон" id="exc-phone" required pattern="[+0-9\-_\(\) ]+">
            <p class="input-error"></p>
          </div>

          <div class="relative flex gap-4 items-center">
            <input type="checkbox" required class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="Согласие на обработку персональных данных" id="exc-agree-personal-data">
            <p class="input-error"></p>
            <label for="exc-agree-personal-data" class="text-grey-400">Даю согласие на обработку персональных данных</label>
          </div>

          <button type="submit" class="btn primary w-full">Записаться</button>
        </form>

        <div class="p-4 small-text bg-light-blue-100">
          Или звоните по номеру <a class="underline text-blue-200 font-bold" href="tel:+375 29 388-55-12">+375 29 388-55-12</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popup "Заказать Звонок" -->
<div id="popup-order-call" class="modal hidden z-50 fixed w-screen h-screen justify-center items-center bg-blur-fade overflow-auto">
  <div class="wrapper max-w-[448px]">
    <div class="relative px-4 py-6 lg:px-6 lg:py-8 w-full rounded-xl border border-grey-400 bg-white">
      <button class="close absolute top-2 right-0 p-4">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.png" alt="">
      </button>

      <h4 class="mb-5 mr-7 md:text-xl/[130%]">
        <b>Заполните форму</b> и закажите консультацию специалиста
      </h4>

      <form novalidate class="mb-4 flex flex-col gap-4">
        <div class="relative flex flex-col gap-2">
          <label for="call-name">Ваше имя*</label>
          <input type="text" name="Имя" id="call-name" placeholder="Введите имя" required minlength="2" pattern="[а-яА-ЯЁё\- \(\)]+">
          <p class="input-error"></p>
        </div>

        <div class="relative flex flex-col gap-2">
          <label for="call-phone">Ваш номер телефона*</label>
          <input data-phone type="text" name="Телефон" id="call-phone" required pattern="[+0-9\-_\(\) ]+">
          <p class="input-error"></p>
        </div>

        <div class="relative flex gap-4 items-center">
          <input type="checkbox" required class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="Согласие на обработку персональных данных" id="call-agree-personal-data">
          <p class="input-error"></p>
          <label for="call-agree-personal-data" class="text-grey-400">Даю согласие на обработку персональных данных</label>
        </div>

        <button type="submit" class="btn primary w-full">Записаться</button>
      </form>

      <div class="p-4 small-text bg-light-blue-100">
        Или звоните по номеру <a class="underline text-blue-200 font-bold" href="tel:+375 29 388-55-12">+375 29 388-55-12</a>
      </div>
    </div>
  </div>
</div>

<!-- Popup "Протестировать сервис" -->
<div id="popup-order-test" class="modal hidden z-50 fixed w-screen h-screen justify-center items-center bg-blur-fade overflow-auto">
  <div class="wrapper max-w-[448px]">
    <div class="relative px-4 py-6 lg:px-6 lg:py-8 w-full rounded-xl border border-grey-400 bg-white">
      <button class="close absolute top-2 right-0 p-4">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.png" alt="">
      </button>

      <h4 class="mb-5 mr-7 md:text-xl/[130%]">
        Чтобы протестировать сервис <b>на данных вашей компании</b>, заполните форму:
      </h4>

      <form novalidate class="mb-4 flex flex-col gap-4">
        <div class="relative flex flex-col gap-2">
          <label for="test-name">Ваше имя*</label>
          <input type="text" name="Имя" id="test-name" placeholder="Введите имя" required minlength="2" pattern="[а-яА-ЯЁё\- \(\)]+">
          <p class="input-error"></p>
        </div>

        <div class="relative flex flex-col gap-2">
          <label for="test-phone">Ваш номер телефона*</label>
          <input data-phone type="text" name="Телефон" id="test-phone" required pattern="[+0-9\-_\(\) ]+">
          <p class="input-error"></p>
        </div>

        <div class="relative flex flex-col gap-2">
          <label for="test-managers-quantity">Сколько у вас менеджеров / операторов</label>
          <input type="text" name="Количество менеджеров" id="test-managers-quantity" placeholder="Введите количество" pattern="[0-9]+">
          <p class="input-error"></p>
        </div>

        <div class="relative flex gap-4 items-center">
          <input type="checkbox" required class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="Согласие на обработку персональных данных" id="test-agree-personal-data">
          <p class="input-error"></p>
          <label for="test-agree-personal-data" class="text-grey-400">Даю согласие на обработку персональных данных</label>
        </div>

        <button type="submit" class="btn primary w-full">Записаться</button>
      </form>

      <div class="p-4 small-text bg-light-blue-100">
        Или звоните по номеру <a class="underline text-blue-200 font-bold" href="tel:+375 29 388-55-12">+375 29 388-55-12</a>
      </div>
    </div>
  </div>
</div>