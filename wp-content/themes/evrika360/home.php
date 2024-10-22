<?php get_header(); ?>

<main class="flex flex-col gap-16">
  <!-- PROMO section -->
  <section class="relative overflow-hidden pt-[123px] pb-[329px] rounded-b-2xl border border-grey-100 bg-blue-100 text-white">
    <div class="wrapper">
      <h2 class="mb-5">Автоматически контролируйте <br>
        все коммуникации <br> в компании:</h2>
      <p class="subtitle mb-8">увеличивайте продажи и повышайте качество сервиса</p>
      <button class="btn w-full">
        Получить видеообзор
      </button>
    </div>

    <div class="absolute -bottom-[152px] left-1/2 -translate-x-1/2 w-max">
      <img class=" min-w-max" src="<?php echo get_template_directory_uri() ?>/assets/images/promo-dashboard-mobile.png" alt="">
    </div>

    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-max">
      <img class=" min-w-max" src="<?php echo get_template_directory_uri() ?>/assets/images/promo-play.png" alt="">
    </div>
  </section>

  <!-- GREETING section -->
  <section class="wrapper overflow-hidden">
    <div class="badge mt-[74px] mb-[18px]">
      Эврика360
    </div>

    <div class="relative chat secondary self-end mb-[20px]">
      — Привет 👋 <br>
      Меня зовут Эврика360, и сейчас я познакомлю тебя с речевой аналитикой для бизнеса!

      <div class="character-bg absolute right-0 top-[6px] -translate-y-full"></div>
      <div class="absolute right-[11px] top-[15px] -translate-y-full">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-wink.png" alt="">
      </div>
    </div>

    <div class="chat self-end mb-[116px]">
      — Что это такое?
    </div>

    <div class="relative h-[173px] mb-4 rounded-xl bg-light-blue-100 border border-light-blue-200">
      <div class="absolute -top-[54px] w-max">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/laptop-mobile.png" alt="">
      </div>
    </div>

    <div class="relative w-fit m-auto mb-[50px]">
      <span class="accent text-center">Листай ниже, чтобы узнать!</span>
      <div class="absolute -right-[3px] bottom-[11px] translate-y-full translate-x-full">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom.png" alt="">
      </div>
    </div>
  </section>

  <!-- DEPARTMENTS section -->
  <section class="bg-pattern bg-light-blue-100 border border-light-blue-200 overflow-hidden">
    <div class="wrapper pt-10 pb-[75px] space-y-10">
      <h3>
        💡 Эврика360 — один сервис для большинства отделов в компании
      </h3>
      <?php include 'parts/dept-slider.php' ?>
    </div>
  </section>

  <!-- IN DETAIL section -->
  <section class="wrapper">
    <div class="flex flex-col gap-6">
      <div class="relative mx-auto mb-[22px] w-fit">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-idea.png" alt="">
        <div class="character-bg absolute w-[120px] h-[120px] top-5 left-[calc(50%_-_8px)] -translate-x-1/2"></div>
        <div class="badge absolute -bottom-[22px] left-1/2 -translate-x-1/2">Эврика360</div>
      </div>

      <div class="chat self-end max-w-[86%]">
        — Можно подробнее? Какие есть возможности?
      </div>

      <div class="chat secondary">
        — Рассказываю!
      </div>

      <div>
        <h3 class="relative mb-[54px]">
          Всё нужное для принятия эффективных бизнес-решений в одном месте

          <div class="absolute right-0 -bottom-8" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-right.png" alt="">
          </div>
        </h3>

        <div class="space-y-6">
          <div class="space-y-2">
            <div class="flex gap-4 items-center">
              <div class="w-12 h-12 flex justify-center items-center rounded-sm bg-light-blue-100">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/manager-emoji.png" alt="">
              </div>
              <p>Руководителю</p>
            </div>
            <p class="text-grey-400">отчёты и динамику изменений</p>
          </div>

          <div class="space-y-2">
            <div class="flex gap-4 items-center">
              <div class="w-12 h-12 flex justify-center items-center rounded-sm bg-light-blue-100">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/sales-head-emoji.png" alt="">
              </div>
              <p>РОПу</p>
            </div>
            <p class="text-grey-400">причины слива лидов и базу знаний
              для обучения</p>
          </div>

          <div class="space-y-2">
            <div class="flex gap-4 items-center">
              <div class="w-12 h-12 flex justify-center items-center rounded-sm bg-light-blue-100">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/marketing-specialist-emoji.png" alt="">
              </div>
              <p>Маркетологу</p>
            </div>
            <p class="text-grey-400">данные по эффективности рекламных кампаний и информацию для исследования ЦА</p>
          </div>
        </div>
      </div>
    </div>


  </section>

  <!-- FEATURES section -->
  <section class="overflow-hidden space-y-4">
    <div class="peer embla feature-tabs-embla">
      <div class="wrapper embla__viewport feature-tabs-embla__viewport">
        <div class="embla__container feature-tabs-embla__container">
          <label class="px-3 shrink-0 w-fit h-[58px] border-b border-b-grey-300 has-[:checked]:border-b-2 has-[:checked]:border-b-orange-400 has-[:checked]:text-orange-400 has-[:checked]:font-bold">
            Отчет для <br> руководителя
            <input class="hidden" name="feature-tabs" type="radio" checked>
          </label>

          <label class="px-3 shrink-0 w-fit h-[58px] border-b border-b-grey-300 has-[:checked]:border-b-2 has-[:checked]:border-b-orange-400 has-[:checked]:text-orange-400 has-[:checked]:font-bold">
            Мониторинг <br> упущенных лидов
            <input class="hidden" name="feature-tabs" type="radio">
          </label>

          <label class="px-3 shrink-0 w-fit h-[58px] border-b border-b-grey-300 has-[:checked]:border-b-2 has-[:checked]:border-b-orange-400 has-[:checked]:text-orange-400 has-[:checked]:font-bold">
            Контроль соблюдения <br> регламентов и скриптов
            <input class="hidden" name="feature-tabs" type="radio">
          </label>

          <label class="px-3 shrink-0 w-fit h-[58px] border-b border-b-grey-300 has-[:checked]:border-b-2 has-[:checked]:border-b-orange-400 has-[:checked]:text-orange-400 has-[:checked]:font-bold">
            Замена ручного <br> контроля качества
            <input class="hidden" name="feature-tabs" type="radio">
          </label>

          <label class="px-3 shrink-0 w-fit h-[58px] border-b border-b-grey-300 has-[:checked]:border-b-2 has-[:checked]:border-b-orange-400 has-[:checked]:text-orange-400 has-[:checked]:font-bold">
            Увеличение продаж
            <input class="hidden" name="feature-tabs" type="radio">
          </label>
        </div>
      </div>
    </div>

    <!-- #1 feature tab -->
    <div class="hidden peer-has-[label:nth-child(1)_:checked]:block bg-light-blue-100 border border-light-blue-200 pt-10 pb-[72px] overflow-hidden">
      <div class="flex flex-col gap-y-8">
        <div class="wrapper space-y-4">
          <h3>Контролируйте состояние компании на одном экране</h3>
          <div class="p-2 description text-dark-blue-300 bg-white rounded-sm border border-light-blue-200">Дaшборд — главный экран для руководителя</div>
        </div>

        <div class="w-fit max-w-[93%] self-end">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard.png" alt="главный экран">
        </div>

        <ul class="wrapper space-y-4">
          <li class="flash-li"><b>Отслеживайте изменения</b> по филиалам, отделам и сотрудникам  </li>
          <li class="flash-li"><b>Будьте уверены</b> в точности данных <b>на 100%</b></li>
          <li class="flash-li">Выявляйте проблемы в собеседованиях, <b>повышайте эффективность работы рекрутеров и ускоряйте найм</b></li>
          <li class="flash-li">Получайте <b>объективную оценку качества делового общения</b>, исключая человеческий фактор</li>
        </ul>
      </div>
    </div>

    <!-- #2 feature tab -->
    <div class="hidden peer-has-[label:nth-child(2)_:checked]:block bg-light-blue-100 border border-light-blue-200 pt-10 pb-[72px] overflow-hidden">
      <div class="flex flex-col gap-y-8">
        <h3 class="wrapper">Выжимайте максимум из каждого обращения</h3>

        <div class="w-fit max-w-[93%] self-end">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-calls.png" alt="главный экран">
        </div>

        <ul class="wrapper space-y-4">
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

    <!-- #3 feature tab -->
    <div class="hidden peer-has-[label:nth-child(3)_:checked]:block bg-light-blue-100 border border-light-blue-200 pt-10 pb-[72px] overflow-hidden">
      <div class="flex flex-col gap-y-8">
        <h3 class="wrapper">Будьте спокойны за качество обработки обращений</h3>

        <div class="w-fit max-w-[93%] self-end">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-call-info.png" alt="главный экран">
        </div>

        <ul class="wrapper space-y-4">
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

    <!-- #4 feature tab -->
    <div class="hidden peer-has-[label:nth-child(4)_:checked]:block bg-light-blue-100 border border-light-blue-200 pt-10 pb-[72px] overflow-hidden">
      <div class="wrapper grid grid-cols-1 gap-6">
        <div class="p-6 space-y-4 bg-white rounded-xl border border-grey-300 bg-light-wave">
          <h3>С Эврика360</h3>
          <ul class="space-y-3">
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

        <div class="p-6 space-y-4 bg-white rounded-xl border border-light-blue-200">
          <h3 class="text-grey-400">Без Эврика360</h3>
          <ul class="space-y-3">
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

    <!-- #5 feature tab -->
    <div class="hidden peer-has-[label:nth-child(5)_:checked]:block bg-light-blue-100 border border-light-blue-200 pt-10 pb-[72px] overflow-hidden">
      <div class="flex flex-col gap-y-8">
        <h3 class="wrapper">Повышайте средний чек без доп.вложений в рекламу</h3>

        <div class="w-fit max-w-[93%] self-end">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-call-analysis.png" alt="главный экран">
        </div>

        <ul class="wrapper space-y-4">
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

  </section>

  <!-- TEST section -->
  <section class="relative wrapper pt-12 pb-[263px] bg-pattern border border-light-blue-200 text-white overflow-hidden text-center">
    <div class="absolute inset-0 -z-20 bg-dark-linear"></div>
    <div class="absolute -bottom-[210px] left-0 right-0 flex justify-center">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/iphone-demo.png" alt="">
    </div>

    <p class="mb-4 font-medium">Пройдите простой тест и определите</p>
    <h4 class="mb-8">
      насколько <span class="text-blue-100">речевая аналитика</span>
      подходит вашему бизнесу
    </h4>
    <button class="btn">Пройти тест</button>
  </section>

  <!-- HOW IT WORKS section -->
  <section></section>

  <!-- EXAMPLE CASE section -->
  <section></section>

  <!-- USEFUL section -->
  <section></section>

  <!-- IMMEDIATE ASSESMENT section -->
  <section></section>

  <!-- REVIEW section -->
  <section></section>

  <!-- FREE DEMO section -->
  <section></section>

  <!-- DATA SECURITY section -->
  <section></section>

  <!-- AUTOMATIZATION section -->
  <section></section>

  <!-- PRICES section -->
  <section></section>

  <!-- ONLINE EXCURSION section -->
  <section></section>
</main>

<?php get_footer(); ?>