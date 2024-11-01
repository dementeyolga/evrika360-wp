<?php get_header(); ?>

<main class="flex flex-col gap-16 lg:gap-[140px]">
  <!-- Popup "Заказать консультацию" (большой) -->
  <div id="popup-order-consultation" class="modal hidden z-50 fixed w-screen h-screen justify-center items-center bg-blur-fade">
    <div class="relative wrapper lg:my-10 lg:p-12 lg:pr-[25px] lg:border lg:border-grey-300 lg:bg-pattern lg:rounded-xl">
      <button class="close hidden lg:block absolute top-2 right-3 p-4">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-icon.png" alt="">
      </button>
      <div class="hidden lg:block absolute inset-0 -z-10 bg-dark-blue-500 rounded-xl"></div>
      <div class="hidden lg:block absolute left-5 bottom-0">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/laptop-demo.png" alt="">
      </div>

      <h3 class="hidden lg:block mb-9 text-white">Запишитесь на <b class="text-yellow-500">онлайн-демонстрацию</b> возможностей речевой аналитики на примере вашей компании</h3>

      <div class="lg:flex gap-[75px]">
        <p class="hidden lg:block h-fit text-white px-10 py-4 w-1/2 shrink-0 bg-white-transparent backdrop-blur-sm rounded-sm">
          Расскажем о возможностях сервиса и рассчитаем целесообразность применения в вашей компании
        </p>

        <div class="relative my-11 lg:my-0 px-4 py-6 w-full rounded-xl border border-grey-400 bg-white">
          <button class="close lg:hidden absolute top-2 right-0 p-4">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.png" alt="">
          </button>

          <h4 class="mb-8 max-lg:mr-7 md:text-xl/[130%]">
            <b>Заполните форму</b> и закажите консультацию специалиста
          </h4>

          <form class="mb-4 flex flex-col gap-7" onsubmit="event.preventDefault(); window.location.pathname = '/thank-you'">
            <div class="flex flex-col gap-2">
              <label for="cons-name">Ваше имя*</label>
              <input type="text" name="Имя" id="cons-name" placeholder="Введите имя" required>
            </div>

            <div class="flex flex-col gap-2">
              <label for="cons-role">Ваша роль в компании</label>
              <input type="text" name="Роль" id="cons-role" placeholder="Например, СЕО">
            </div>

            <div class="flex flex-col gap-2">
              <label for="cons-phone">Ваш номер телефона*</label>
              <input type="text" name="Телефон" id="cons-phone" placeholder="+375 ( _ _ ) _ _ _-_ _-_ _" required>
            </div>

            <div class="flex gap-4 items-center">
              <input type="checkbox" class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="Согласие на обработку персональных данных" id="cons-agree-personal-data">
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
  <div id="popup-order-excursion" class="modal hidden z-50 fixed w-screen h-screen justify-center items-center bg-blur-fade">
    <div class="relative wrapper lg:my-10 lg:p-12 lg:pr-[25px] lg:border lg:border-grey-300 lg:bg-pattern lg:rounded-xl">
      <button class="close hidden lg:block absolute top-2 right-3 p-4">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-icon.png" alt="">
      </button>
      <div class="hidden lg:block absolute inset-0 -z-10 bg-dark-blue-500 rounded-xl"></div>
      <div class="hidden lg:block absolute left-5 bottom-0">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/laptop-demo.png" alt="">
      </div>

      <h3 class="hidden lg:block mb-9 text-white">Запишитесь на <b class="text-yellow-500">онлайн-экскурсию</b> по сервису речевой аналитики и узнайте, как он может помочь в вашей компании</h3>

      <div class="lg:flex gap-[75px]">
        <p class="hidden lg:block h-fit text-white px-10 py-4 w-1/2 shrink-0 bg-white-transparent backdrop-blur-sm rounded-sm">
          Расскажем о возможностях сервиса и рассчитаем целесообразность применения в вашей компании
        </p>

        <div class="relative my-11 lg:my-0 px-4 py-6 w-full rounded-xl border border-grey-400 bg-white">
          <button class="close lg:hidden absolute top-2 right-0 p-4">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.png" alt="">
          </button>

          <h4 class="mb-8 max-lg:mr-7 md:text-xl/[130%]">
            <b>Заполните форму</b>, чтобы записаться на онлайн-экскурсию
          </h4>

          <form class="mb-4 flex flex-col gap-7" onsubmit="event.preventDefault(); window.location.pathname = '/thank-you'">
            <div class="flex flex-col gap-2">
              <label for="exc-name">Ваше имя*</label>
              <input type="text" name="Имя" id="exc-name" placeholder="Введите имя" required>
            </div>

            <div class="flex flex-col gap-2">
              <label for="exc-role">Ваша роль в компании</label>
              <input type="text" name="Роль" id="exc-role" placeholder="Например, СЕО">
            </div>

            <div class="flex flex-col gap-2">
              <label for="exc-phone">Ваш номер телефона*</label>
              <input type="text" name="Телефон" id="exc-phone" placeholder="+375 ( _ _ ) _ _ _-_ _-_ _" required>
            </div>

            <div class="flex gap-4 items-center">
              <input type="checkbox" class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="Согласие на обработку персональных данных" id="exc-agree-personal-data">
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
  <div id="popup-order-call" class="modal hidden z-50 fixed w-screen h-screen justify-center items-center bg-blur-fade">
    <div class="wrapper max-w-[448px]">
      <div class="relative my-11 px-4 py-6 lg:px-6 lg:py-8 w-full rounded-xl border border-grey-400 bg-white">
        <button class="close absolute top-2 right-0 p-4">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.png" alt="">
        </button>

        <h4 class="mb-8 mr-7 md:text-xl/[130%]">
          <b>Заполните форму</b> и закажите консультацию специалиста
        </h4>

        <form class="mb-4 flex flex-col gap-6" onsubmit="event.preventDefault(); window.location.pathname = '/thank-you'">
          <div class="flex flex-col gap-2">
            <label for="call-name">Ваше имя*</label>
            <input type="text" name="Имя" id="call-name" placeholder="Введите имя" required>
          </div>

          <div class="flex flex-col gap-2">
            <label for="call-phone">Ваш номер телефона*</label>
            <input type="text" name="Телефон" id="call-phone" placeholder="+375 ( _ _ ) _ _ _-_ _-_ _" required>
          </div>

          <div class="flex gap-4 items-center">
            <input type="checkbox" class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="Согласие на обработку персональных данных" id="call-agree-personal-data">
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
  <div id="popup-order-test" class="modal hidden z-50 fixed w-screen h-screen justify-center items-center bg-blur-fade">
    <div class="wrapper max-w-[448px]">
      <div class="relative my-11 px-4 py-6 lg:px-6 lg:py-8 w-full rounded-xl border border-grey-400 bg-white">
        <button class="close absolute top-2 right-0 p-4">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.png" alt="">
        </button>

        <h4 class="mb-8 mr-7 md:text-xl/[130%]">
          Чтобы протестировать сервис <b>на данных вашей компании</b>, заполните форму:
        </h4>

        <form class="mb-4 flex flex-col gap-6" onsubmit="event.preventDefault(); window.location.pathname = '/thank-you'">
          <div class="flex flex-col gap-2">
            <label for="test-name">Ваше имя*</label>
            <input type="text" name="Имя" id="test-name" placeholder="Введите имя" required>
          </div>

          <div class="flex flex-col gap-2">
            <label for="test-phone">Ваш номер телефона*</label>
            <input type="text" name="Телефон" id="test-phone" placeholder="+375 ( _ _ ) _ _ _-_ _-_ _" required>
          </div>

          <div class="flex flex-col gap-2">
            <label for="test-managers-quantity">Сколько у вас менеджеров / операторов</label>
            <input type="text" name="Количество менеджеров" id="test-managers-quantity" placeholder="Введите количество">
          </div>

          <div class="flex gap-4 items-center">
            <input type="checkbox" class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="Согласие на обработку персональных данных" id="test-agree-personal-data">
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

  <!-- PROMO section -->
  <section class="relative overflow-hidden pt-[123px] lg:pt-[227px] pb-[329px] lg:pb-[169px] rounded-b-2xl lg:rounded-b-5xl border border-grey-100 bg-blue-100 text-white bg-circles">
    <div class="wrapper mb-8 lg:mb-[104px]">
      <h2 class="mb-5 md:mb-6">Автоматически контролируйте <br>
        все коммуникации <br class="lg:hidden"> в компании:</h2>
      <p class="subtitle">увеличивайте продажи и повышайте <br class="hidden lg:block"> качество сервиса</p>
    </div>

    <div class="hidden lg:block mb-[64px] bg-blue-fade-left">
      <div class="wrapper py-5">
        <p class="text-xl/[160%]">
          Сервис речевой аналитики <b>на базе искусственного <br> интеллекта</b> для бизнеса, где есть <b>звонки, чаты или <br>записи оффлайн-общения</b>
        </p>
      </div>
    </div>

    <div class="wrapper">
      <button class="consultation-modal-toggle btn ml-0">
        Получить видеообзор
      </button>
    </div>

    <div class="lg:hidden absolute -bottom-[152px] left-1/2 -translate-x-1/2 w-max z-10">
      <img class="min-w-max" src="<?php echo get_template_directory_uri() ?>/assets/images/promo-dashboard-mobile.png" alt="">
    </div>

    <div class="group lg:hidden absolute bottom-2 left-1/2 -translate-x-1/2 w-[230px] h-[230px] z-10 hover:cursor-pointer">
      <img class="group-hover:opacity-0 absolute inset-0 transition-opacity duration-200 z-20" src="<?php echo get_template_directory_uri() ?>/assets/images/promo-play.png" alt="">
      <img class="absolute inset-0 transition-opacity duration-200" src="<?php echo get_template_directory_uri() ?>/assets/images/promo-play-hover.png" alt="">
    </div>

    <div class="hidden lg:block absolute bottom-0 right-0 max-w-[67%]">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/promo-dashboard-desktop.png" alt="">

      <div class="group absolute bottom-[4%] right-[13.5%] w-[34.17%] aspect-square z-10 hover:cursor-pointer">
        <img class="group-hover:opacity-0 absolute inset-0 transition-opacity duration-200 z-20" src="<?php echo get_template_directory_uri() ?>/assets/images/promo-play.png" alt="">
        <img class="absolute inset-0 transition-opacity duration-200" src="<?php echo get_template_directory_uri() ?>/assets/images/promo-play-hover.png" alt="">
      </div>
    </div>
  </section>

  <!-- GREETING section -->
  <section class="wrapper overflow-hidden xl:overflow-visible pt-[64px] -mt-[64px] xl:mb-10 bg-orange-circle xl:bg-none xl:flex-row xl:gap-11">
    <div class="hidden xl:block xl:mt-[22px] xl:shrink-0 xl:w-[591px] relative h-[173px] xl:h-[588px] rounded-xl xl:rounded-2xl bg-light-blue-100 border border-light-blue-200">
      <div class="absolute top-[83px] left-0 w-max">
        <img class="min-w-max" src="<?php echo get_template_directory_uri() ?>/assets/images/laptop-desktop.png" alt="">
      </div>
    </div>

    <div class="bg-orange-circle flex flex-col xl:shrink-0 xl:grow">
      <div class="badge mt-[74px] xl:mt-[86px] mb-[18px]">
        Эврика360
      </div>

      <div class="relative chat secondary mb-5 xl:mb-8 xl:max-w-[400px]">
        <div class="flex gap-1">
          — Привет
          <div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/hi-icon.png" alt="">
          </div>
        </div>

        Меня зовут Эврика360, и сейчас я познакомлю тебя с речевой аналитикой для бизнеса!

        <div class="character-bg xl:w-[190px] xl:h-[190px] absolute right-0 xl:-right-[112px] top-[6px] xl:top-[47px] -translate-y-full"></div>
        <div class="absolute right-[11px] xl:-right-[90px] top-[15px] xl:top-[71px] -translate-y-full">
          <img class="xl:w-[209px] xl:h-[209px]" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-wink.png" alt="">
        </div>
      </div>

      <div class="chat self-end mb-[116px] xl:mb-5">
        — Что это такое?
      </div>

      <div class="xl:hidden relative h-[173px] mb-4 rounded-xl bg-light-blue-100 border border-light-blue-200">
        <div class="absolute -top-[54px] w-max sm:w-full sm:flex sm:justify-center">
          <img class="sm:translate-x-6" src="<?php echo get_template_directory_uri() ?>/assets/images/laptop-mobile.png" alt="">
        </div>
      </div>

      <div class="relative w-fit mx-auto mb-[50px] xl:mr-0">
        <span class="accent text-center">Листай ниже, чтобы узнать!</span>
        <div class="absolute -right-[3px] xl:right-[111px] bottom-[11px] xl:-bottom-[11px] translate-y-full translate-x-full">
          <img class="xl:h-[88px]" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- DEPARTMENTS section -->
  <section id="departments" class="pt-[40px] -mt-[40px] lg:mx-10 lg:rounded-2xl bg-pattern bg-light-blue-100 border border-light-blue-200 overflow-hidden">
    <div class="wrapper pt-10 pb-[75px] xl:pb-[150px] space-y-10 xl:space-y-[64px]">
      <div>
        <div class="flex gap-2">
          <div class="shrink-0 flex items-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/light-icon.png" alt="">
          </div>
          <h3><b>Эврика360</b> — один сервис для большинства</h3>
        </div>
        <h3>
          отделов в компании
        </h3>
      </div>
      <?php include 'parts/dept-slider.php' ?>
    </div>
  </section>

  <!-- IN DETAIL section -->
  <section class="wrapper pt-[64px] -mt-[64px] lg:mb-[52px] bg-orange-circle lg:bg-none">
    <div class="flex flex-col gap-6 lg:flex-row lg:gap-[100px]">
      <div class="ml-3 flex flex-col gap-6 lg:bg-orange-circle lg:w-[448px] lg:shrink-0">
        <div class="relative mx-auto mb-[22px] w-fit">
          <img class="lg:w-[250px] lg:h-[250px]" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-idea.png" alt="">
          <div class="character-bg lg:w-[190px] lg:h-[190px] absolute w-[120px] h-[120px] top-5 lg:top-10 left-[calc(50%_-_8px)] -translate-x-1/2"></div>
          <div class="badge absolute -bottom-[22px] left-1/2 -translate-x-1/2">Эврика360</div>
        </div>

        <div class="chat self-end max-w-[86%]">
          — Можно подробнее? Какие есть возможности?
        </div>

        <div class="chat secondary">
          — Рассказываю!
        </div>
      </div>

      <div>
        <h3 class="relative mb-[54px] lg:mt-[18px] lg:mb-10">
          Всё нужное для принятия эффективных бизнес-решений <br class="hidden lg:block"> в одном месте

          <div class="absolute right-0 -bottom-8 lg:right-6 lg:-bottom-1" aria-hidden="true">
            <img class="lg:w-[263px]" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-right.png" alt="">
          </div>
        </h3>

        <div class="space-y-6">
          <div class="space-y-1">
            <div class="flex gap-4 lg:gap-6 items-center">
              <div class="w-12 h-12 lg:w-20 lg:h-20 shrink-0 flex justify-center items-center rounded-sm lg:rounded-md bg-light-blue-100">
                <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/manager-emoji.png" alt="">
                <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/manager-emoji-desktop.png" alt="">
              </div>
              <div class="flex flex-col gap-1">
                <p>Руководителю</p>
                <p class="hidden lg:block text-grey-400">отчёты и динамику изменений</p>
              </div>
            </div>
            <p class="lg:hidden text-grey-400">отчёты и динамику изменений</p>
          </div>

          <div class="space-y-2">
            <div class="flex gap-4 lg:gap-6 items-center">
              <div class="w-12 h-12 lg:w-20 lg:h-20 shrink-0 flex justify-center items-center rounded-sm lg:rounded-md bg-light-blue-100">
                <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/sales-head-emoji.png" alt="">
                <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/sales-head-emoji-desktop.png" alt="">
              </div>
              <div class="flex flex-col gap-1">
                <p>РОПу</p>
                <p class="hidden lg:block text-grey-400">причины слива лидов и базу знаний
                  для обучения</p>
              </div>
            </div>
            <p class="lg:hidden text-grey-400">причины слива лидов и базу знаний
              для обучения</p>
          </div>

          <div class="space-y-2">
            <div class="flex gap-4 lg:gap-6 items-center">
              <div class="w-12 h-12 lg:w-20 lg:h-20 shrink-0 flex justify-center items-center rounded-sm lg:rounded-md bg-light-blue-100">
                <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-specialist-emoji.png" alt="">
                <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-specialist-emoji-desktop.png" alt="">
              </div>
              <div class="flex flex-col gap-1">
                <p>Маркетологу</p>
                <p class="hidden lg:block text-grey-400">данные по эффективности рекламных кампаний и информацию для исследования ЦА</p>
              </div>
            </div>
            <p class="lg:hidden text-grey-400">данные по эффективности рекламных кампаний и информацию для исследования ЦА</p>
          </div>
        </div>
      </div>
    </div>


  </section>

  <!-- FEATURES section -->
  <section id="features" class="pt-[110px] -mt-[110px] overflow-hidden space-y-4 lg:space-y-12">
    <div class="peer embla feature-tabs-embla">
      <div class="wrapper embla__viewport feature-tabs-embla__viewport">
        <div class="embla__container feature-tabs-embla__container">
          <label class="tab" text="Отчет для руководителя">
            Отчет для <br> руководителя
            <input class="hidden" name="feature-tabs" type="radio" checked>
          </label>

          <label class="tab" text="Мониторинг упущенных лидов">
            Мониторинг <br> упущенных лидов
            <input class="hidden" name="feature-tabs" type="radio">
          </label>

          <label class="tab" text="Контроль соблюдения регламентов и скриптов">
            Контроль соблюдения <br> регламентов и скриптов
            <input class="hidden" name="feature-tabs" type="radio">
          </label>

          <label class="tab" text="Замена ручного контроля качества">
            Замена ручного <br> контроля качества
            <input class="hidden" name="feature-tabs" type="radio">
          </label>

          <label class="tab" text="Увеличение продаж">
            Увеличение продаж
            <input class="hidden" name="feature-tabs" type="radio">
          </label>
        </div>
      </div>
    </div>

    <!-- #1 feature tab -->
    <div class="hidden lg:mx-10 peer-has-[label:nth-child(1)_:checked]:block">
      <div class="feature-tab">
        <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-14">
          <div class="wrapper space-y-4">
            <h3>Контролируйте состояние компании на одном экране</h3>
            <div class="p-2 w-fit description text-dark-blue-300 bg-white rounded-sm border border-light-blue-200">Дaшборд — главный экран для руководителя</div>
          </div>

          <div class="lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center w-fit max-w-[93%] self-end">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard.png" alt="главный экран">
          </div>

          <ul class="wrapper space-y-4 lg:space-y-5">
            <li class="flash-li"><b>Отслеживайте изменения</b> по филиалам, отделам и сотрудникам  </li>
            <li class="flash-li"><b>Будьте уверены</b> в точности данных <b>на 100%</b></li>
            <li class="flash-li">Выявляйте проблемы в собеседованиях, <b>повышайте эффективность работы рекрутеров и ускоряйте найм</b></li>
            <li class="flash-li">Получайте <b>объективную оценку качества делового общения</b>, исключая человеческий фактор</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- #2 feature tab -->
    <div class="hidden lg:mx-10 peer-has-[label:nth-child(2)_:checked]:block">
      <div class="feature-tab">
        <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-14">
          <h3 class="wrapper">Выжимайте максимум из каждого обращения</h3>

          <div class="lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center w-fit max-w-[93%] self-end">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-calls.png" alt="главный экран">
          </div>

          <ul class="wrapper space-y-4 lg:space-y-5">
            <li class="flash-li">
              Помогайте менеджерам <b>увеличивать продажи</b> и средний чек
            </li>
            <li class="flash-li">
              Направляйте внимание менеджеров только на теплых лидов с помощью <b>системы скоринга</b>
            </li>
            <li class="flash-li">
              Экономьте на рекламе благодаря <b>эффективной работе</b>
              с лидами
            </li>
            <li class="flash-li">
              <b>Спасайте сделки</b>, где клиент был готов купить, но менеджер недоработал
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- #3 feature tab -->
    <div class="hidden lg:mx-10 peer-has-[label:nth-child(3)_:checked]:block">
      <div class="feature-tab">
        <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-14">
          <h3 class="wrapper">Будьте спокойны за качество обработки обращений</h3>

          <div class="lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center w-fit max-w-[93%] self-end">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-call-info.png" alt="главный экран">
          </div>

          <ul class="wrapper space-y-4 lg:space-y-5">
            <li class="flash-li">
              Получайте отчёты о процентах выполнения скриптов, чек-листов или регламентов
            </li>
            <li class="flash-li">
              Выявляйте лучшие практики общения и переговоров для создания базы знаний
            </li>
            <li class="flash-li">
              Контролируйте упоминания выгод по продукту или услуге
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- #4 feature tab -->
    <div class="hidden lg:mx-10 peer-has-[label:nth-child(4)_:checked]:block">
      <div class="feature-tab">
        <div class="wrapper grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-8">
          <div class="p-6 lg:pb-[83px] space-y-4 lg:space-y-8 bg-white rounded-xl border border-grey-300 bg-light-wave">
            <h3>С Эврика360</h3>
            <ul class="space-y-3 lg:space-y-4">
              <li class="flash-li">
                Анализ всех коммуникаций в цепочке продаж
              </li>
              <li class="flash-li">
                Работает 24/7
              </li>
              <li class="flash-li">
                Контроль 100% коммуникаций
              </li>
              <li class="flash-li">
                Оплата за распознанные минуты, дешевле ручного метода в 2-10 раз
              </li>
              <li class="flash-li">
                Оценка по заданным стандартам без человеческого фактора
              </li>
              <li class="flash-li">
                Автоматическая система анализа и выводы по любому количеству критериев за считанные секунды
              </li>
            </ul>
          </div>

          <div class="p-6 lg:pb-[83px] space-y-4 lg:space-y-8 bg-white rounded-xl border border-light-blue-200">
            <h3 class="text-grey-400">Без Эврика360</h3>
            <ul class="space-y-3 lg:space-y-4">
              <li class="flash-li-disabled">
                Анализ только 1-2 этапов в воронке продаж
              </li>
              <li class="flash-li-disabled">
                Прослушка максимум 4-5 часов в день
              </li>
              <li class="flash-li-disabled">
                Контроль до 15% коммуникаций
              </li>
              <li class="flash-li-disabled">
                Постоянные затраты на персонал и организацию его рабочего места
              </li>
              <li class="flash-li-disabled">
                Необъективность оценки
              </li>
              <li class="flash-li-disabled">
                Огромное количество времени на сбор данных и формирование выводов
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- #5 feature tab -->
    <div class="hidden lg:mx-10 peer-has-[label:nth-child(5)_:checked]:block">
      <div class="feature-tab">
        <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-14">
          <h3 class="wrapper">Повышайте средний чек без доп.вложений в рекламу</h3>

          <div class="lg:absolute lg:right-lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center w-fit max-w-[93%] self-end">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-call-analysis.png" alt="главный экран">
          </div>

          <ul class="wrapper space-y-4 lg:space-y-5">
            <li class="flash-li">
              Получайте точную информацию о запрашиваемых товарах и планируйте закупки
            </li>
            <li class="flash-li">
              Контролируйте переговоры с предложением дополнительных товаров и альтернатив
            </li>
            <li class="flash-li">
              Экономьте время на разборе звонков благодаря автоматической системе подготовки резюме после каждой коммуникации
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- TEST section -->
  <section class="relative pt-12 pb-[263px] lg:py-0 lg:mx-10 lg:h-[288px] lg:rounded-2xl bg-pattern border border-light-blue-200 text-white overflow-hidden text-center">
    <div class="wrapper lg:flex-row lg:items-center lg:h-full">
      <div class="absolute inset-0 -z-20 bg-dark-linear"></div>
      <div class="lg:static lg:w-1/4 lg:pt-[29px] lg:self-start absolute -bottom-[210px] left-0 right-0 flex justify-center lg:justify-start">
        <img class="lg:max-w-[170px]" src="<?php echo get_template_directory_uri() ?>/assets/images/iphone-demo.png" alt="">
      </div>

      <div class="lg:w-1/2">
        <p class="mb-4 lg:mb-5 mx-auto font-medium lg:text-2xl/[130%]">Пройдите простой тест и определите</p>
        <h4 class="mb-8 lg:mb-0 mx-auto lg:text-[32px]/[120%]">
          насколько <span class="text-blue-100">речевая аналитика</span> <br class="hidden lg:block">
          подходит вашему бизнесу
        </h4>
      </div>

      <div class="lg:w-1/4 lg:flex lg:justify-end">
        <a href="#popup:marquiz_66e6d33b2fa5030026ac5480" class="btn lg:m-0">Пройти тест</a>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS section -->
  <section id="how-it-works" class="lg:mx-10 lg:rounded-2xl border border-light-blue-200 bg-light-blue-100 bg-white-wave-bottom">
    <div class="wrapper relative pt-[90px] pb-20 space-y-10 lg:space-y-10 lg:pt-20 lg:pb-[110px]">
      <div class="chat secondary lg:mb-[37px]">— И как работает речевая аналитика?</div>

      <div class="relative space-y-4 lg:w-fit">
        <h3>
          Речевая аналитика умеет слушать <br class="hidden lg:block"> <b>100% звонков</b> и мгновенно <br class="hidden lg:block"> анализировать их!
        </h3>

        <div class="relative accent small lg:absolute lg:-top-[124px] lg:-right-[369px] text-end">
          А также онлайн-встреч, коммуникаций в <br> торговом зале и переписок в соцсетях или <br>мессенджерах
          <div class="lg:hidden absolute -bottom-10 left-0">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-spiral.png" alt="">
          </div>
          <div class="hidden lg:block absolute -bottom-[100px] -left-10">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-top-spiral.png" alt="">
          </div>
        </div>
      </div>

      <button class="btn primary flex gap-2 lg:ml-0">
        <div>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/play-arrow-right.png" alt="">
        </div>
        Смотреть видео
      </button>

      <div class="hidden lg:block absolute -right-3 top-[84px] z-0">
        <img class="mb-2" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-laptop.png" alt="">
        <div class="badge mx-auto">Эврика360</div>
      </div>
    </div>
  </section>

  <!-- EXAMPLE CASE section -->
  <section>
    <div class="wrapper mb-[56px] lg:mb-[120px] flex flex-col gap-16 lg:gap-[94px]">
      <div class="relative flex flex-col lg:flex-row lg:gap-12">
        <div class="absolute -bottom-[70px] right-8 lg:right-32 lg:-bottom-[62px]">
          <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-dotted.png" alt="">
          <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-dotted-desktop.png" alt="">
        </div>

        <div class="mb-6 lg:mb-0 lg:w-[466px] lg:shrink-0">
          <img class="w-full lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/case-client.png" alt="клиент">
          <img class="w-full hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/case-client-desktop.png" alt="клиент">
        </div>

        <div class="lg:w-[350px] lg:mt-[76px] lg:flex lg:flex-col lg:justify-between">
          <div class="mb-4 py-2 px-5 lg:py-3 xs:w-fit rounded-lg text-white bg-blue-200">
            <h5>
              <b>01.</b> Знакомьтесь, это Антон
            </h5>
          </div>

          <div class="relative">
            <div class="hidden lg:block absolute -top-[25px] -left-[22px]">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/quotation-marks-left.png" alt="">
            </div>

            <p class="description">
              Антон долго выбирал товар,
              заказал доставку, но <b> заказ пришел
                с опозданием и браком </b>.
              <br> Он звонит в колл-центр магазина.
            </p>
          </div>
        </div>
      </div>

      <div class="relative flex flex-col lg:flex-row lg:gap-12 lg:justify-end">
        <div class="absolute -bottom-[92px] right-6 lg:left-[109px] lg:-bottom-[61px]">
          <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-dotted-spiral.png" alt="">
          <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-dotted-spiral-right.png" alt="">
        </div>

        <div class="mb-6 lg:mb-0 lg:w-[466px] lg:shrink-0 lg:order-2">
          <img class="w-full lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/case-operator.png" alt="оператор">
          <img class="w-full hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/case-operator-desktop.png" alt="оператор">
        </div>

        <div class="lg:w-[350px] lg:mt-[76px] lg:flex lg:flex-col lg:justify-between">
          <div class="mb-4 py-2 px-5 lg:py-3 xs:w-fit rounded-lg text-white bg-blue-200">
            <h5>
              <b>02.</b> А это Марина, оператор колл-центра
            </h5>
          </div>

          <div class="relative">
            <div class="hidden lg:block absolute -top-[25px] right-0">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/quotation-marks-right.png" alt="">
            </div>

            <p class="description">
              Она приняла звонок, не поздоровалась, послушала Антона и сказала,
              что это <b>его проблемы</b>, после чего повесила трубку.
            </p>
          </div>
        </div>
      </div>

      <div class="relative flex flex-col lg:flex-row lg:gap-12">
        <div class="hidden lg:block absolute -bottom-20 right-[154px]">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-dotted-spiral-2.png" alt="">
        </div>

        <div class="mb-6 lg:mb-0 lg:w-[466px] lg:shrink-0">
          <img class="w-full lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/case-manager.png" alt="руководитель">
          <img class="w-full hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/case-manager-desktop.png" alt="руководитель">
        </div>

        <div class="lg:w-[350px] lg:mt-[76px] lg:flex lg:flex-col lg:justify-between">
          <div class="mb-4 py-2 px-5 lg:py-3 xs:w-fit rounded-lg text-white bg-blue-200">
            <h5>
              <b>03.</b> А это Вы, руководитель компании
            </h5>
          </div>

          <div class="relative">
            <div class="hidden lg:block absolute -top-[20px] -left-[22px]">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/quotation-marks-left.png" alt="">
            </div>

            <p class="description">
              Вы не знаете об этой ситуации и вряд ли узнаете, если <b>только Антон не напишет жалобу</b>.
              Но вы точно потеряли <b><i>клиента</i></b>
              и возможность заработать на его рекомендациях своим друзьям и знакомым.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-10 pt-12 lg:pt-9 lg:mb-[56px] lg:mx-10 lg:rounded-2xl bg-dark-linear border border-light-blue-200 overflow-hidden">
      <div class="relative wrapper lg:flex-row lg:justify-between">
        <div class="hidden lg:block absolute -right-[84px] -top-5 z-0">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/bg-chat.png" alt="">
        </div>

        <div class="lg:w-[365px] lg:pb-[57px] z-10">
          <div class="mb-8 lg:mb-[68px] mx-auto lg:ml-0 py-3 px-5 xs:w-fit rounded-md text-dark-blue-500 bg-white">
            <h4>
              <b>04.</b> А это речевая аналитика
            </h4>
          </div>

          <p class="mb-6 text-white">
            Сразу после разговора она определит ошибку Марины и пришлёт вам уведомление.
          </p>
          <p class="mb-10 lg:mb-0 text-white">
            Так вы сохраните клиента, деньги и улучшите скрипты общения, чтобы таких ситуаций больше не возникало.
          </p>
        </div>

        <div class="flex justify-center lg:w-[439px] lg:h-fit lg:self-end lg:mt-8 lg:mr-[113px] lg:z-10">
          <img class="w-full sm:max-w-[70%] lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/dialog-demo.png" alt="">
          <img class="w-full hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/dialog-demo-desktop.png" alt="">
        </div>
      </div>
    </div>

    <div class="wrapper">
      <button class="consultation-modal-toggle btn primary">Это интересно, хочу протестировать</button>
    </div>
  </section>

  <!-- USEFUL section -->
  <section class="pt-10 pb-[56px] lg:py-[92px] lg:mx-10 lg:rounded-2xl bg-light-blue-100 border border-light-blue-200 bg-light-curve-to-top">
    <div class="wrapper lg:flex-row lg:justify-between lg:items-center">
      <div class="lg:max-w-[700px]">
        <h3 class="relative mb-20 lg:mb-14">
          — Я правильно понимаю, что речевая аналитика <br class="lg:hidden"> <b>полезна</b>, когда...
          <div class="absolute left-0 -bottom-[38px] lg:left-[152px] lg:-bottom-7">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-left.png" alt="">
          </div>
        </h3>

        <div class="mb-[30px] space-y-5 lg:space-y-4 lg:max-w-[520px]">
          <div class="flex gap-6 items-center">
            <div class="shrink-0 w-16 h-16 flex justify-center items-center bg-white rounded-md">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/chats-icon.png" alt="">
            </div>
            <p>Нет полного контроля за звонками, чатами или встречами</p>
          </div>

          <div class="flex gap-6 items-center">
            <div class="shrink-0 w-16 h-16 flex justify-center items-center bg-white rounded-md">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/trend-down-icon.png" alt="">
            </div>
            <p>Менеджеры сливают клиентов</p>
          </div>

          <div class="flex gap-6 items-center">
            <div class="shrink-0 w-16 h-16 flex justify-center items-center bg-white rounded-md">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/chart-icon.png" alt="">
            </div>
            <p>Непонятно, какого качества приходят лиды с разных каналов рекламы</p>
          </div>
        </div>
      </div>

      <div class="flex flex-col items-center lg:mr-[53px]">
        <div class="badge hidden lg:flex mb-7 mx-auto">Эврика360</div>

        <div class="-mb-1">
          <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-hand.png" alt="">
          <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-hand-desktop.png" alt="">
        </div>

        <div class="chat">
          — Да, и не только в этом!
        </div>
      </div>
    </div>

  </section>

  <!-- IMMEDIATE ASSESMENT section -->
  <section class="overflow-hidden">
    <div class="wrapper mt-[26px] mb-[56px] lg:mb-20 space-y-6 lg:space-y-10">
      <h3 class="relative lg:mx-auto lg:text-center">
        <b>Эврика360</b> даёт мгновенную объективную оценку <br class="hidden lg:block"> работы компании

        <div class="absolute -top-[30px] -left-[21px]">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/crown.png" alt="">
        </div>
        <div class="hidden lg:block absolute -top-4 -right-6">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/crown-right.png" alt="">
        </div>
      </h3>
      <p class="lg:mx-auto lg:text-center">Речевая аналитика минимизирует ручную работу, дополняет ваши <br class="hidden lg:block"> текущие отчёты новыми данными и упрощает управление компанией</p>
    </div>

    <div class="peer embla assessment-tabs-embla mb-4 lg:mb-12">
      <div class="wrapper embla__viewport assessment-tabs-embla__viewport">
        <div class="embla__container assessment-tabs-embla__container">
          <label class="tab" text="Определение причин слива лидов">
            Определение <br> причин слива лидов
            <input class="hidden" name="assessment-tabs" type="radio" checked>
          </label>

          <label class="tab" text="HR-помощник">
            HR-помощник
            <input class="hidden" name="assessment-tabs" type="radio">
          </label>

          <label class="tab" text="Изучение ЦА, рынка и конкурентов">
            Изучение ЦА, рынка <br> и конкурентов
            <input class="hidden" name="assessment-tabs" type="radio">
          </label>

          <label class="tab" text="Обучение менеджеров">
            Обучение менеджеров
            <input class="hidden" name="assessment-tabs" type="radio">
          </label>
        </div>
      </div>
    </div>

    <!-- #1 assesment tab -->
    <div class="hidden lg:mx-10 peer-has-[label:nth-child(1)_:checked]:block">
      <div class="assessment-tab">
        <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-14">
          <h3 class="wrapper lg:text-2xl/[130%]">Получайте объективную оценку причин отказа без эмоций менеджера</h3>

          <div class="w-fit max-w-[93%] self-end lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-assessment-reject.png" alt="анализ диалога">
          </div>

          <ul class="wrapper space-y-4 *:text-base/[150%]">
            <li class="flash-li">
              Убедитесь, что все <b>возражения клиента</b> были обработаны
            </li>
            <li class="flash-li">
              Автоматизируйте проверку качества общения, чтобы быстрее находить <b>ошибки в диалогах</b>  
            </li>
            <li class="flash-li">
              Отслеживайте <b>длительные сделки</b>, чтобы помочь менеджеру, когда это нужно
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- #2 assesment tab -->
    <div class="hidden lg:mx-10 peer-has-[label:nth-child(2)_:checked]:block">
      <div class="assessment-tab">
        <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-14">
          <h3 class="wrapper lg:text-2xl/[130%]">Повышайте эффективность рекрутеров</h3>

          <div class="w-fit max-w-[93%] self-end lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-assessment-reject.png" alt="анализ диалога">
          </div>

          <ul class="wrapper space-y-4 *:text-base/[150%]">
            <li class="flash-li">
              <b>Предотвращайте</b> выгорание сотрудников с помощью контроля эмоций через речевую аналитику
            </li>
            <li class="flash-li">
              <b>Экономьте время</b> на оценке итогов собеседований с каждым кандидатом
            </li>
            <li class="flash-li">
              Отслеживайте <b>динамику изменений</b> сотрудников и назначайте премии на основе точных данных
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- #3 assesment tab -->
    <div class="hidden lg:mx-10 peer-has-[label:nth-child(3)_:checked]:block">
      <div class="assessment-tab">
        <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-14">
          <h3 class="wrapper lg:text-2xl/[130%]">Знайте боли, потребности и возражения своей аудитории</h3>

          <div class="w-fit max-w-[93%] self-end lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-assessment-dictionary.png" alt="словарь">
          </div>

          <ul class="wrapper space-y-4 *:text-base/[150%]">
            <li class="flash-li">
              Отслеживайте <b>частоту упоминаний</b> тем и вопросов, чтобы корректировать контент для аудитории
            </li>
            <li class="flash-li">
              Оценивайте <b>качество заявок</b> с каждого рекламного канала и перераспределяйте бюджет на самые эффективные
            </li>
            <li class="flash-li">
              Анализируйте <b>эффективность</b> акций и корректируйте стратегию
            </li>
            <li class="flash-li">
              <b>Узнавайте</b> о новых запросах клиентов и трендах быстрее конкурентов
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- #4 assesment tab -->
    <div class="hidden lg:mx-10 peer-has-[label:nth-child(4)_:checked]:block">
      <div class="assessment-tab">
        <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-14">
          <h3 class="wrapper lg:text-2xl/[130%]">Ускоряйте обучение и адаптацию новых менеджеров</h3>

          <div class="w-fit max-w-[93%] self-end lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard.png" alt="главный экран">
          </div>

          <ul class="wrapper space-y-4 *:text-base/[150%]">
            <li class="flash-li">
              Создавайте базу <b>успешных продаж</b> для обучения новичков
            </li>
            <li class="flash-li">
              <b>Отслеживайте</b> все коммуникации и давайте обратную связь сотрудникам
            </li>
            <li class="flash-li">
              Снижайте текучку и расходы на найм с помощью <b>эффективного онбординга</b>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- REVIEW section -->
  <section class="lg:wrapper-no-flex lg:grid lg:grid-cols-2 lg:items-start lg:gap-5">
    <div class="wrapper flex flex-col items-center lg:items-start lg:mt-0">
      <div class="mb-6 lg:mb-10">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-transparent.png" alt="">
      </div>

      <h3 class="mb-5 lg:mb-[122px]">
        — Звучит интересно. <br>
        Как можно <b>протестировать</b>?
      </h3>

      <div class="mb-[86px] lg:mb-0 lg:ml-[93px] w-fit relative accent small">
        У нас есть предложение!

        <div class="absolute -bottom-[64px] right-10 lg:-bottom-9 lg:-right-[136px]">
          <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-wavy.png" alt="">
          <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-wavy-desktop.png" alt="">
        </div>
      </div>
    </div>

    <div class="wrapper py-8 lg:p-8 lg:rounded-md bg-light-blue-100 border border-light-blue-200">
      <h4 class="mb-8">«Ваш отчёт по эффективности менеджеров <b>просто бомба</b>»</h4>
      <p class="mb-10">Раньше у меня просто не было этих данных, сейчас сократил количество МОПов с 8 до 6, а продажи только выросли. Мне нравится всё. Жду новых обновлений. </p>

      <div class="flex gap-6 items-center">
        <div class="w-[56px] h-[56px] shrink-0">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/ivan-gavrilov-review.png" alt="">
        </div>

        <div class="space-y-1">
          <p>Иван Гаврилов</p>
          <p class="text-grey-400">CEO сети дилерских центров по продаже автомобилей</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FREE DEMO section -->
  <section class="relative mt-[75px] pb-[72px] lg:pb-0 lg:mx-10 lg:rounded-2xl bg-pattern border border-light-blue-200 text-white">
    <div class="absolute inset-0 -z-20 bg-dark-linear lg:rounded-2xl"></div>

    <div class="wrapper lg:flex-row lg:gap-20">
      <div class="-mt-[75px] lg:-mt-12 mb-[46px] scale-105 lg:scale-100 lg:-ml-24 shrink-0 flex justify-center items-start">
        <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/conference.png" alt="онлайн-демо">
        <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/conference-desktop.png" alt="онлайн-демо">
      </div>

      <div class="lg:pt-[72px] lg:pb-[90px]">
        <div class="mb-10 lg:mb-[56px] space-y-6 lg:space-y-8">
          <h3>Записывайтесь на <b>бесплатную демонстрацию</b> с экспертом</h3>
          <p>
            За 30 минут на примере звонков вашей компании эксперт покажет, чем будет полезна речевая аналитика, и рассчитает стоимость внедрения.
          </p>
        </div>

        <button class="consultation-modal-toggle btn primary lg:ml-0">Записаться на демо</button>
      </div>
    </div>
  </section>

  <!-- DATA SECURITY section -->
  <section class="overflow-hidden pt-[64px] -mt-[64px] bg-orange-circle bg-[center_-40%] lg:bg-[center_-85px] lg:bg-[length:600px] xs:bg-[center_top]">
    <div class="wrapper relative mt-[38px] lg:mt-[50px] lg:pb-[68px] space-y-11 lg:items-end">
      <h3 class="relative lg:mr-[169px]">
        — А что у вас с <b>безопасностью данных</b>?

        <div class="absolute -bottom-[28px] w-full flex justify-center">
          <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc.png" alt="">
          <img class="hidden lg:block relative -right-10" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc-desktop.png" alt="">
        </div>
      </h3>

      <div class="flex flex-col items-center">
        <div class="lg:absolute left-0 bottom-0">
          <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-scared.png" alt="">
          <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-scared-desktop.png" alt="">
        </div>

        <div class="chat">
          — Хороший вопрос. Ваши данные под защитой 24/7
        </div>
      </div>
    </div>

    <div class="overflow-hidden -mt-[37px] lg:mt-0 pt-[85px] pb-[72px] lg:pt-[100px] lg:pb-[110px] lg:mx-10 lg:rounded-2xl bg-light-blue-100 border border-light-blue-200 bg-light-wave-to-bottom">
      <div class="wrapper">
        <?php include 'parts/data-security-slider.php' ?>
      </div>
    </div>
  </section>

  <!-- CASES section -->
  <section id="cases" class="wrapper space-y-8 pt-[110px] -mt-[110px] bg-lighter-orange-circle">
    <div class="space-y-7 lg:space-y-9">
      <div class="flex flex-col gap-7 lg:flex-row lg:justify-between lg:gap-5">
        <h3 class="relative h-fit lg:mt-[120px]">— Какие есть примеры <br class="hidden lg:block"> <b>использования</b>?

          <div class="absolute left-0 -bottom-8 lg:-bottom-6 lg:left-3">
            <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc.png" alt="">
            <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc-2.png" alt="">
          </div>
        </h3>

        <div class="flex flex-col items-center lg:max-w-[636px]">
          <div>
            <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-secret.png" alt="">
            <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-secret-desktop.png" alt="">
          </div>

          <div class="chat">
            — Речевая аналитика применима в любой сфере, где нужно общаться с клиентами
          </div>
        </div>
      </div>

      <div class="space-y-6 text-white">
        <!-- Case #1 -->
        <div class="px-4 pt-8 pb-14 lg:px-10 lg:pt-8 lg:pb-[58px] lg:grid lg:grid-cols-2 lg:gap-[150px] rounded-xl lg:rounded-2xl border border-orange-100 bg-dark-blue-400 bg-white-wave-bottom-left">
          <div>
            <div class="card-badge mb-4 lg:mb-8">Сфера: производство и продажа мебели</div>
            <h4 class="mb-8">Взяли под контроль все звонки и подняли продажи на 27% <b>всего за 3 месяца</b></h4>
          </div>

          <div class="space-y-6 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-y-8 lg:gap-x-6">
            <div class="space-y-1">
              <h2 class="font-medium md:text-[32px]/[130%]">
                +27%
              </h2>
              <p>Рост выручки за 3 месяца</p>
            </div>

            <div class="space-y-1">
              <div>
                <h2 class="font-medium md:text-[32px]/[130%] inline-block">
                  +1900$
                </h2>
                <h4 class="inline-block">/мес</h4>
              </div>

              <p>Экономия на ФОТ отдела контроля качества</p>
            </div>

            <div class="space-y-1">
              <h2 class="font-medium md:text-[32px]/[130%]">
                2 <span class="line-through opacity-40 font-normal">5</span>
              </h2>
              <p>Человека в контроле качества</p>
            </div>

            <div class="space-y-1">
              <h2 class="font-medium md:text-[32px]/[130%]">
                100%
              </h2>
              <p>Звонков слушают</p>
            </div>
          </div>
        </div>

        <!-- Case #2 -->
        <div class="px-4 pt-8 pb-14 lg:px-10 lg:pt-8 lg:pb-[58px] lg:grid lg:grid-cols-2 lg:gap-[150px] rounded-xl lg:rounded-2xl border border-orange-100 bg-dark-blue-400 bg-white-wave-top">
          <div class="lg:order-2">
            <div class="card-badge mb-4 lg:mb-8">Сфера: натяжные потолки</div>
            <h4 class="mb-8">За 1 день выявили халатность менеджеров, обновили штат и повысили конверсию в замер с 6 до 14%</b></h4>
          </div>

          <div class="space-y-6 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-y-8 lg:gap-x-6">
            <div class="space-y-1">
              <h2 class="font-medium md:text-[32px]/[130%]">
                +133%
              </h2>
              <p>Рост конверсии в замер</p>
            </div>

            <div class="space-y-1">
              <h2 class="font-medium md:text-[32px]/[130%]">
                +118,8%
              </h2>
              <p>Рост среднемесячной выручки</p>
            </div>

            <div class="space-y-1">
              <h2 class="font-medium md:text-[32px]/[130%]">
                1 чел
              </h2>
              <p>Контроль качества + речевая аналитика</p>
            </div>

            <div class="space-y-1">
              <h2 class="font-medium md:text-[32px]/[130%]">
                -1900$
              </h2>
              <p>Снижение бюджета на рекламу</p>
            </div>
          </div>
        </div>
      </div>

      <div>
        <button class="test-modal-toggle btn primary lg:mt-[100px]">Протестировать на своих данных</button>
      </div>

    </div>
  </section>

  <!-- AUTOMATIZATION section -->
  <section class="overflow-hidden">
    <div class="pt-[46px] space-y-[58px] lg:space-y-20">
      <div class="lg:wrapper-no-flex flex flex-col gap-y-[58px] lg:flex-row lg:justify-between">
        <div class="max-lg:wrapper flex flex-col gap-6 lg:w-[440px]">
          <div class="chat secondary">— Что-нибудь ещё?</div>
          <div class="chat self-end">— Да, есть ещё кое-что...</div>
        </div>

        <div class="max-lg:wrapper space-y-[22px] lg:max-w-[565px]">
          <h3>
            <b>Эврика360</b> <br class="lg:hidden"> автоматизирует рутину
          </h3>

          <p class="text-grey-400">
            Делегируйте важные, но скучные задачи речевой аналитике и освободите больше времени для принятия важных управленческих решений
          </p>
        </div>
      </div>


      <!-- Automatization tabs -->
      <div class="space-y-4 lg:space-y-12">
        <div class="peer embla automatization-tabs-embla">
          <div class="wrapper embla__viewport automatization-tabs-embla__viewport">
            <div class="embla__container automatization-tabs-embla__container">
              <label class="tab" text="Готовые интеграции">
                Готовые <br class="lg:hidden"> интеграции
                <input class="hidden" name="automatization-tabs" type="radio" checked>
              </label>

              <label class="tab" text="Заполнение CRM">
                Заполнение CRM
                <input class="hidden" name="automatization-tabs" type="radio">
              </label>

              <label class="tab" text="Уведомления о критических ситациях">
                Уведомления о <br> критических ситациях
                <input class="hidden" name="automatization-tabs" type="radio">
              </label>

              <label class="tab" text="Отчёты и аналитика коммуникаций">
                Отчёты и аналитика <br> коммуникаций
                <input class="hidden" name="automatization-tabs" type="radio">
              </label>
            </div>
          </div>
        </div>

        <!-- #1 automatization tab -->
        <div class="hidden lg:mx-10 peer-has-[label:nth-child(1)_:checked]:block">
          <div class="automatization-tab">
            <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-14">
              <div class="wrapper space-y-4 lg:mt-[30px]">
                <h3 class="md:text-2xl/[130%]">Простая интеграция с действующими системами и сервисами</h3>
                <div class="p-2 w-fit description  text-dark-blue-300 bg-white rounded-sm border border-light-blue-200">Настраиваем самостоятельно или с минимальным участие ваших тех.специалистов</div>
              </div>

              <div class="lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center w-fit max-w-[93%] self-end">
                <img class="md:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-apps.png" alt="главный экран">
                <img class="hidden md:block" src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-apps-desktop.png" alt="главный экран">
              </div>

              <ul class="wrapper space-y-4 lg:space-y-3">
                <li class="flash-li">CRM</li>
                <li class="flash-li">Чаты и мессенджеры</li>
                <li class="flash-li">Телефония</li>
                <li class="flash-li">Индивидуальные интеграции по API</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- #2 automatization tab -->
        <div class="hidden lg:mx-10 peer-has-[label:nth-child(2)_:checked]:block">
          <div class="automatization-tab">
            <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-14">
              <h3 class="wrapper md:text-2xl/[130%]">Автоматическое заполнение CRM по итогам звонка</h3>

              <div class="lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center w-fit max-w-[93%] self-end">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/bitrix-24.png" alt=",битрикс-24">
              </div>

              <ul class="wrapper space-y-4 lg:space-y-3">
                <li class="flash-li">Экономьте время менеджера на <b>внесении данных</b> после звонка</li>
                <li class="flash-li"><b>Минимизируйте</b> ошибки и пропуски в CRM</li>
                <li class="flash-li">Повышайте <b>эффективность менеджера</b> и шансы на закрытие сделки</li>
                <li class="flash-li relative w-fit"><b>Получайте выводы</b> и рекомендации по итогам звонка
                  с помощью ChatGPT
                  <p class="badge absolute right-[3px] -top-[18px] translate-x-full bg-blue-100 text-white">New</p>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- #3 automatization tab -->
        <div class="hidden lg:mx-10 peer-has-[label:nth-child(3)_:checked]:block">
          <div class="automatization-tab max-lg:pb-0">
            <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-14">
              <h3 class="wrapper md:text-2xl/[130%]">Получайте мгновенные уведомления с пометкой «ВАЖНО» </h3>

              <ul class="wrapper space-y-4 lg:space-y-3">
                <li class="flash-li">Если менеджер произнес <b>«перезвоню с личного»</b>, вам придет мгновенное уведомление</li>
                <li class="flash-li">Клиент пригрозил, что будет подавать в суд? <br>
                  <b>Узнайте об этом раньше</b>, чем менеджер положил трубку, и урегулируйте ситуацию
                </li>
              </ul>

              <div class="lg:absolute lg:right-[37px] lg:bottom-0 lg:h-full lg:flex lg:items-end w-fit max-w-[80%] self-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/iphone-notification.png" alt="уведомления на телефон">
              </div>
            </div>
          </div>
        </div>

        <!-- #4 automatization tab -->
        <div class="hidden lg:mx-10 peer-has-[label:nth-child(4)_:checked]:block">
          <div class="automatization-tab">
            <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-14">
              <h3 class="wrapper md:text-2xl/[130%]">Готовые отчёты, адаптированные под вашу роль и потребности компании</h3>

              <div class="lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center w-fit max-w-[93%] self-end">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard.png" alt="главный экран">
              </div>

              <ul class="wrapper space-y-4 lg:space-y-3">
                <li class="flash-li"><b>Подробная расшифровка</b> каждого звонка с разделением на реплики сотрудника и клиента</li>
                <li class="flash-li"><b>Анализ звонка</b>: в каком тоне состоялся диалог, кто доминировал, кто перебивал и насколько часто</li>
                <li class="flash-li">Узнавайте, как <b>сотрудник презентовал</b> компанию и предложил ли дополнительные товары</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRICES section -->
  <section id="prices" class="pt-[120px] -mt-[110px] bg-lighter-orange-circle bg-[center_-40%] xs:bg-[center_top] lg:bg-[length:40%] lg:bg-[left_top]">
    <div class="wrapper overflow-hidden">
      <div class="lg:mb-[130px] lg:mt-[35px] lg:flex lg:justify-center lg:items-center">
        <div class="mb-10 lg:mb-0 mx-auto lg:ml-0 w-fit flex flex-col lg:flex-row items-center lg:justify-center lg:gap-3">
          <h3 class="mb-1 text-center">— Сколько стоит </h3>
          <h3 class="text-center">
            <b class="relative">
              Эврика360?

              <div class="absolute -inset-7 lg:-inset-4 lg:-bottom-1 lg:-left-2 flex justify-center items-center">
                <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/text-circle.png" alt="">
                <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/text-circle-desktop.png" alt="">
              </div>
            </b>
          </h3>
        </div>

        <div class="hidden lg:block">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-logo-258.png" alt="">
        </div>
      </div>

      <div class="mb-10 lg:hidden">
        <?php include 'parts/prices-slider.php' ?>
      </div>

      <div class="mb-[88px] hidden lg:block">
        <div class="grid grid-cols-[200px_auto] gap-[38px]">
          <div class="grid grid-cols-1 gap-[3px]">
            <div class="price-table-unit table-heading">
            </div>
            <div class="price-table-unit table-title">Пункты чек-листа</div>
            <div class="price-table-unit table-title">Минут</div>
            <div class="mt-2 price-table-unit table-title">Интеграция с системами по API</div>
            <div class="price-table-unit table-heading">
            </div>
          </div>

          <div class="grid grid-cols-5 gap-[5px]">
            <!-- BASIC plan -->
            <div class="grid grid-cols-1 gap-[3px] text-grey-600">
              <div class="price-table-unit table-heading">
                BASIC
              </div>
              <div class="price-table-unit bg-grey-50">15</div>
              <div class="price-table-unit bg-grey-50">10 000</div>
              <div class="price-table-unit bg-grey-50">1</div>
              <div class="price-table-unit table-heading">
                280$
              </div>
            </div>

            <!-- STANDART plan -->
            <div class="grid grid-cols-1 gap-[3px] text-blue-100">
              <div class="price-table-unit table-heading">
                STANDART
              </div>
              <div class="price-table-unit bg-light-blue-150">30</div>
              <div class="price-table-unit bg-light-blue-150">30 000</div>
              <div class="price-table-unit bg-light-blue-150">1</div>
              <div class="price-table-unit table-heading">
                590$
              </div>
            </div>

            <!-- SILVER plan -->
            <div class="grid grid-cols-1 gap-[3px] text-green-500">
              <div class="relative price-table-unit table-heading">
                SILVER

                <div class="absolute left-0 right-0 bottom-0 py-[9px] flex justify-center h-[120px] bg-green-linear text-dark-blue-500 text-xl -z-10">
                  POPULAR
                </div>
              </div>
              <div class="price-table-unit text-white bg-green-500">45</div>
              <div class="price-table-unit text-white bg-green-500">60 000</div>
              <div class="price-table-unit text-white bg-green-500">2</div>
              <div class="price-table-unit table-heading">
                850$
              </div>
            </div>

            <!-- GOLD plan -->
            <div class="grid grid-cols-1 gap-[3px] text-yellow-500">
              <div class="price-table-unit table-heading">
                GOLD
              </div>
              <div class="price-table-unit text-white bg-yellow-500">16ч</div>
              <div class="price-table-unit text-white bg-yellow-500">100 000</div>
              <div class="price-table-unit text-white bg-yellow-500">3</div>
              <div class="price-table-unit table-heading">
                1 360$
              </div>
            </div>

            <!-- SPECIAL plan -->
            <div class="grid grid-cols-1 gap-[3px] text-orange-400">
              <div class="price-table-unit table-heading">
                SPECIAL
              </div>
              <div class="price-table-unit text-white bg-orange-400">∞</div>
              <div class="price-table-unit text-white bg-orange-400">200 000+</div>
              <div class="price-table-unit text-white bg-orange-400">∞</div>
              <div class="price-table-unit table-heading !text-[17px]">
                обсуждается
                индивидуально
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="lg:wrapper">
      <div class="lg:flex lg:gap-6">
        <div class="max-lg:wrapper-no-flex lg:order-2">
          <div class="relative mb-9 px-4 py-6 h-fit space-y-6 bg-orange-100-50 rounded-md border border-orange-100">
            <h4 class="lg:text-xl/[130%]">Что входит в состав каждого пакета?</h4>

            <ul class="space-y-2">
              <div class="flash-li">Отчеты по показателям сотрудников</div>
              <div class="flash-li">Отчет владельца/руководства</div>
              <div class="flash-li">Поиск по ключевым словам</div>
              <div class="flash-li">Обучение использованию сервиса</div>
            </ul>

            <label class="peer btn primary w-full flex items-center gap-2 hover:cursor-pointer">
              <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/help-circle-icon.png" alt="">
              </div>
              <input type="checkbox" class="hidden">
              А что еще?
            </label>

            <div class="hidden max-lg:peer-has-[:checked]:block lg:peer-hover:block mt-6 lg:mt-0 p-4 space-y-4 rounded-md bg-white shadow-card lg:absolute lg:left-1/2 lg:-translate-x-1/2 lg:bottom-6 lg:translate-y-full lg:w-[380px]">
              <div class="grid grid-cols-2 gap-2">
                <div class="space-y-2">
                  <h5 class="font-bold">$0.015</h5>
                  <p class="description text-grey-400">Перерасчет за минуту</p>
                </div>

                <div class="space-y-2">
                  <h5 class="font-bold">$30</h5>
                  <p class="description text-grey-400">Дополнительный пункт чек-листа</p>
                </div>
              </div>

              <div class="space-y-4">
                <h5 class="font-bold">обсуждается индивидуально</h5>
                <p class="description text-grey-400">
                  Дополнительная интеграция с системой по API
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="max-lg:wrapper overflow-hidden">
          <div class="lg:grow lg:shrink-0 lg:w-[720px]">
            <?php include 'parts/feature-price-slider.php' ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ONLINE EXCURSION section -->
  <section class="space-y-[60px] lg:space-y-[180px] ">
    <div class="wrapper flex flex-col gap-5 lg:flex-row lg:gap-[58px] lg:items-center">
      <div class="flex flex-col items-center shrink-0">
        <div class="-mr-5 lg:mr-0 lg:ml-4">
          <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-happy.png" alt="">
          <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-happy-desktop.png" alt="">
        </div>

        <div class="badge -mt-3 lg:hidden">
          Эврика360
        </div>
      </div>

      <div class="relative lg:grow">
        <div class="badge hidden lg:flex mb-8">
          Эврика360
        </div>

        <h3 class="leading-[150%]">— Я честно рассказала о <b>речевой аналитике</b>.
          Предлагаю записаться на <b>онлайн-экскурсию</b>
          с нашим менеджером</h3>

        <div class="hidden lg:block absolute -bottom-[124px] right-[180px]">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-wavy-2.png" alt="">
        </div>
      </div>
    </div>

    <div class="pt-12 pb-20 lg:pt-20 lg:pb-[65px] lg:mx-10 lg:rounded-2xl bg-light-blue-100 border border-light-blue-200 bg-light-wave-to-top">
      <div class="lg:wrapper-no-flex lg:grid lg:grid-cols-[57%_auto] lg:justify-between">
        <div class="max-lg:wrapper">
          <h3 class="mb-8 lg:mb-12 leading-[140%]">
            Запишитесь на экскурсию по сервису <b>речевой аналитики</b> Эврика360
          </h3>

          <ul class="mb-10 lg:mb-[64px] space-y-3 *:text-base/[150%] lg:*:text-xl/[150%]">
            <div class="flash-li">Покажем, <b>как работает сервис</b> изнутри</div>
            <div class="flash-li">Расскажем, как речевая аналитика может быть полезна <b>вашей компании</b></div>
            <div class="flash-li">Найдём, в каких коммуникациях <b>заморожены деньги прямо сейчас</b></div>
          </ul>

          <button class="excursion-modal-toggle btn primary lg:ml-0 flex items-center gap-2">
            <div>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/share-icon.png" alt="">
            </div>

            Записаться на экскурсию
          </button>
        </div>

        <div class="hidden lg:block 2xl:-mr-[127px] mt-10">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-excursion.png" alt="">
        </div>
      </div>


    </div>
  </section>
</main>

<?php get_footer(); ?>