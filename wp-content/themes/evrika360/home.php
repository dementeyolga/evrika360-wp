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
          <div class="space-y-1">
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
          <label class="tab">
            Отчет для <br> руководителя
            <input class="hidden" name="feature-tabs" type="radio" checked>
          </label>

          <label class="tab">
            Мониторинг <br> упущенных лидов
            <input class="hidden" name="feature-tabs" type="radio">
          </label>

          <label class="tab">
            Контроль соблюдения <br> регламентов и скриптов
            <input class="hidden" name="feature-tabs" type="radio">
          </label>

          <label class="tab">
            Замена ручного <br> контроля качества
            <input class="hidden" name="feature-tabs" type="radio">
          </label>

          <label class="tab">
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
  <section class="wrapper py-[60px] pb-[66px] space-y-10 border border-light-blue-200 bg-light-blue-100 bg-white-wave-bottom">
    <div class="chat secondary">— И как работает речевая аналитика?</div>

    <div class="space-y-4">
      <h3>
        Речевая аналитика умеет слушать <b>100% звонков</b> и мгновенно анализировать их!
      </h3>

      <div class="relative accent small">
        А также онлайн-встреч, коммуникаций в <br> торговом зале и переписок в соцсетях или <br>мессенджерах
        <div class="absolute -bottom-10 left-0">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-spiral.png" alt="">
        </div>
      </div>
    </div>

    <button class="btn primary w-full flex gap-2">
      <div>
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/play-arrow-right.png" alt="">
      </div>
      Смотреть видео
    </button>
  </section>

  <!-- EXAMPLE CASE section -->
  <section>
    <div class="wrapper mb-[56px] space-y-16">
      <div class="relative">
        <div class="absolute -bottom-[42px] right-8">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-dotted.png" alt="">
        </div>

        <div class="mb-6">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/case-client.png" alt="клиент">
        </div>

        <div class="mb-4 py-2 px-5 rounded-lg text-white bg-blue-200">
          <h5>
            <b>01.</b> Знакомьтесь, это Антон
          </h5>
        </div>

        <p class="description">
          Антон долго выбирал товар, <br>
          заказал доставку, но <b> заказ пришел <br>
            с опозданием и браком </b>. <br>
          Он звонит в колл-центр магазина.
        </p>
      </div>

      <div class="relative">
        <div class="absolute -bottom-[92px] right-6">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-dotted-spiral.png" alt="">
        </div>

        <div class="mb-6">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/case-operator.png" alt="оператор">
        </div>

        <div class="mb-4 py-2 px-5 rounded-lg text-white bg-blue-200">
          <h5>
            <b>02.</b> А это Марина, оператор колл-центра
          </h5>
        </div>

        <p class="description">
          Она приняла звонок, не поздоровалась,<br> послушала Антона и сказала, <br>
          что это <b>его проблемы</b>, после чего повесила трубку.
        </p>
      </div>

      <div>
        <div class="mb-6">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/case-manager.png" alt="руководитель">
        </div>

        <div class="mb-4 py-2 px-5 rounded-lg text-white bg-blue-200">
          <h5>
            <b>03.</b> А это Вы, руководитель компании
          </h5>
        </div>

        <p class="description">
          Вы не знаете об этой ситуации и вряд ли узнаете, если <b>только Антон не напишет жалобу</b>. <br>
          Но вы точно потеряли <b><i>клиента</i></b>
          и возможность заработать на его рекомендациях своим друзьям и знакомым.
        </p>
      </div>
    </div>

    <div class="mb-10 pt-12 bg-dark-linear border border-light-blue-200">
      <div class="wrapper">
        <div class="mb-8 py-3 px-5 rounded-md text-dark-blue-500 bg-white">
          <h4>
            <b>04.</b> А это речевая аналитика
          </h4>
        </div>

        <p class="mb-6 text-white">
          Сразу после разговора она определит ошибку Марины и пришлёт вам уведомление.
        </p>
        <p class="mb-10 text-white">
          Так вы сохраните клиента, деньги и улучшите скрипты общения, чтобы таких ситуаций больше не возникало.
        </p>

        <div>
          <img class="w-full" src="<?php echo get_template_directory_uri() ?>/assets/images/dialog-demo.png" alt="">
        </div>
      </div>
    </div>

    <div class="wrapper">
      <button class="btn primary">Это интересно, хочу протестировать</button>
    </div>
  </section>

  <!-- USEFUL section -->
  <section class="wrapper pt-10 pb-[56px] bg-light-blue-100 border border-light-blue-200 bg-light-wave-to-top">
    <h3 class="relative mb-20">
      — Я правильно понимаю, что речевая аналитика <b>полезна</b>, когда...
      <div class="absolute left-0 -bottom-[38px]">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-left.png" alt="">
      </div>
    </h3>

    <div class="mb-[30px] space-y-5">
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

    <div class="flex flex-col items-center">
      <div class="-mb-1">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-hand.png" alt="">
      </div>

      <div class="chat">
        — Да, и не только в этом!
      </div>
    </div>
  </section>

  <!-- IMMEDIATE ASSESMENT section -->
  <section class="overflow-hidden">
    <div class="wrapper mt-[26px] mb-[56px] space-y-6">
      <h3 class="relative">
        <b>Эврика360</b> даёт мгновенную объективную оценку работы компании

        <div class="absolute -top-[30px] -left-[21px]">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/crown.png" alt="">
        </div>
      </h3>
      <p>Речевая аналитика минимизирует ручную работу, дополняет ваши текущие отчёты новыми данными и упрощает управление компанией</p>
    </div>

    <div class="peer embla assessment-tabs-embla mb-4">
      <div class="wrapper embla__viewport assessment-tabs-embla__viewport">
        <div class="embla__container assessment-tabs-embla__container">
          <label class="tab">
            Определение <br> причин слива лидов
            <input class="hidden" name="assessment-tabs" type="radio" checked>
          </label>

          <label class="tab">
            HR-помощник
            <input class="hidden" name="assessment-tabs" type="radio">
          </label>

          <label class="tab">
            Изучение ЦА, рынка <br>
            и конкурентов
            <input class="hidden" name="assessment-tabs" type="radio">
          </label>

          <label class="tab">
            Обучение менеджеров
            <input class="hidden" name="assessment-tabs" type="radio">
          </label>
        </div>
      </div>
    </div>

    <!-- #1 assesment tab -->
    <div class="hidden peer-has-[label:nth-child(1)_:checked]:block bg-orange-50 border border-orange-200 pt-10 pb-[90px] overflow-hidden">
      <div class="flex flex-col gap-y-8">
        <h3 class="wrapper">Получайте объективную оценку причин отказа без эмоций менеджера</h3>

        <div class="w-fit max-w-[93%] self-end">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-assessment-reject.png" alt="анализ диалога">
        </div>

        <ul class="wrapper space-y-4">
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

    <!-- #2 assesment tab -->
    <div class="hidden peer-has-[label:nth-child(2)_:checked]:block bg-orange-50 border border-orange-200 pt-10 pb-[90px] overflow-hidden">
      <div class="flex flex-col gap-y-8">
        <h3 class="wrapper">Повышайте эффективность рекрутеров</h3>

        <div class="w-fit max-w-[93%] self-end">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-assessment-reject.png" alt="анализ диалога">
        </div>

        <ul class="wrapper space-y-4">
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

    <!-- #3 assesment tab -->
    <div class="hidden peer-has-[label:nth-child(3)_:checked]:block bg-orange-50 border border-orange-200 pt-10 pb-[90px] overflow-hidden">
      <div class="flex flex-col gap-y-8">
        <h3 class="wrapper">Знайте боли, потребности и возражения своей аудитории</h3>

        <div class="w-fit max-w-[93%] self-end">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-assessment-dictionary.png" alt="словарь">
        </div>

        <ul class="wrapper space-y-4">
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

    <!-- #4 assesment tab -->
    <div class="hidden peer-has-[label:nth-child(4)_:checked]:block bg-orange-50 border border-orange-200 pt-10 pb-[90px] overflow-hidden">
      <div class="flex flex-col gap-y-8">
        <h3 class="wrapper">Ускоряйте обучение и адаптацию новых менеджеров</h3>

        <div class="w-fit max-w-[93%] self-end">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard.png" alt="главный экран">
        </div>

        <ul class="wrapper space-y-4">
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
  </section>

  <!-- REVIEW section -->
  <section>
    <div class="wrapper flex flex-col items-center">
      <div class="mb-6">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-transparent.png" alt="">
      </div>

      <h3 class="mb-5">
        — Звучит интересно. <br>
        Как можно <b>протестировать</b>?
      </h3>

      <div class="mb-[86px] w-fit relative accent small">
        У нас есть предложение!

        <div class="absolute -bottom-[64px] right-10">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-wavy.png" alt="">
        </div>
      </div>
    </div>

    <div class="wrapper py-8 bg-light-blue-100 border border-light-blue-200">
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
  <section class="relative wrapper mt-[75px] pb-[72px] bg-pattern border border-light-blue-200 text-white">
    <div class="absolute inset-0 -z-20 bg-dark-linear"></div>

    <div class="-mt-[75px] mb-[46px] scale-105">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/conference.png" alt="онлайн-демо">
    </div>

    <div class="mb-10 space-y-6">
      <h3>Записывайтесь на <b>бесплатную демонстрацию</b> с экспертом</h3>
      <p>
        За 30 минут на примере звонков вашей компании эксперт покажет, чем будет полезна речевая аналитика, и рассчитает стоимость внедрения.
      </p>
    </div>

    <button class="btn primary">Записаться на демо</button>
  </section>

  <!-- DATA SECURITY section -->
  <section class="overflow-hidden">
    <div class="wrapper mt-[38px] space-y-11">
      <h3 class="relative">
        — А что у вас с <b>безопасностью данных</b>?

        <div class="absolute -bottom-[28px] left-1">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc.png" alt="">
        </div>
      </h3>

      <div class="flex flex-col items-center">
        <div>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-scared.png" alt="">
        </div>

        <div class="chat">
          — Хороший вопрос. Ваши данные под защитой 24/7
        </div>
      </div>
    </div>

    <div class="wrapper -mt-[37px] pt-[85px] pb-[72px] bg-light-blue-100 border border-light-blue-200 bg-light-wave-to-bottom">
      <?php include 'parts/data-security-slider.php' ?>
    </div>
  </section>

  <!-- CASES section -->
  <section class="wrapper pt-[38px] space-y-8">
    <div class="space-y-7">
      <h3 class="relative">— Какие есть примеры <b>использования</b>?

        <div class="absolute left-0 -bottom-8">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc.png" alt="">
        </div>
      </h3>

      <div class="flex flex-col items-center">
        <div>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-secret.png" alt="">
        </div>

        <div class="chat">
          — Речевая аналитика применима в любой сфере, где нужно общаться с клиентами
        </div>
      </div>

      <div class="space-y-6 text-white">
        <!-- Case #1 -->
        <div class="px-4 pt-8 pb-14 rounded-xl border border-orange-100 bg-dark-blue-400 bg-white-wave-bottom-left">
          <div class="card-badge mb-4">Сфера: производство и продажа мебели</div>

          <h4 class="mb-8">Взяли под контроль все звонки и подняли продажи на 27% <b>всего за 3 месяца</b></h4>

          <div class="space-y-6">
            <div class="space-y-1">
              <h2 class="font-medium">
                +27%
              </h2>
              <p>Рост выручки за 3 месяца</p>
            </div>

            <div class="space-y-1">
              <div class="">
                <h2 class="font-medium inline-block">
                  +1900$
                </h2>
                <h4 class="inline-block">/мес</h4>
              </div>

              <p>Экономия на ФОТ отдела контроля качества</p>
            </div>

            <div class="space-y-1">
              <h2 class="font-medium">
                2 <span class="line-through opacity-40 font-normal">5</span>
              </h2>
              <p>Человека в контроле качества</p>
            </div>

            <div class="space-y-1">
              <h2 class="font-medium">
                100%
              </h2>
              <p>Звонков слушают</p>
            </div>
          </div>
        </div>

        <!-- Case #2 -->
        <div class="px-4 pt-8 pb-14 rounded-xl border border-orange-100 bg-dark-blue-400 bg-white-wave-top">
          <div class="card-badge mb-4">Сфера: натяжные потолки</div>

          <h4 class="mb-8">За 1 день выявили халатность менеджеров, обновили штат и повысили конверсию в замер с 6 до 14%</b></h4>

          <div class="space-y-6">
            <div class="space-y-1">
              <h2 class="font-medium">
                +133%
              </h2>
              <p>Рост конверсии в замер</p>
            </div>

            <div class="space-y-1">
              <h2 class="font-medium">
                +118,8%
              </h2>
              <p>Рост среднемесячной выручки</p>
            </div>

            <div class="space-y-1">
              <h2 class="font-medium">
                1 чел
              </h2>
              <p>Контроль качества + речевая аналитика</p>
            </div>

            <div class="space-y-1">
              <h2 class="font-medium">
                -1900$
              </h2>
              <p>Снижение бюджета на рекламу</p>
            </div>
          </div>
        </div>
      </div>

      <button class="btn primary w-full">Протестировать на своих данных</button>
    </div>
  </section>

  <!-- AUTOMATIZATION section -->
  <section class="overflow-hidden">
    <div class="pt-[46px] space-y-[58px]">
      <div class="wrapper flex flex-col gap-6">
        <div class="chat secondary">— Что-нибудь ещё?</div>
        <div class="chat self-end">— Да, есть ещё кое-что...</div>
      </div>

      <div class="wrapper space-y-[22px]">
        <h3>
          <b>Эврика360</b> <br> автоматизирует рутину
        </h3>

        <p class="text-grey-400">
          Делегируйте важные, но скучные задачи речевой аналитике и освободите больше времени для принятия важных управленческих решений
        </p>
      </div>

      <!-- Automatization tabs -->
      <div class="space-y-4">
        <div class="peer embla automatization-tabs-embla">
          <div class="wrapper embla__viewport automatization-tabs-embla__viewport">
            <div class="embla__container automatization-tabs-embla__container">
              <label class="tab">
                Готовые <br> интеграции
                <input class="hidden" name="feature-tabs" type="radio" checked>
              </label>

              <label class="tab">
                Заполнение CRM
                <input class="hidden" name="feature-tabs" type="radio">
              </label>

              <label class="tab">
                Уведомления о <br> критических ситациях
                <input class="hidden" name="feature-tabs" type="radio">
              </label>

              <label class="tab">
                Отчёты и аналитика <br> коммуникаций
                <input class="hidden" name="feature-tabs" type="radio">
              </label>
            </div>
          </div>
        </div>

        <!-- #1 automatization tab -->
        <div class="hidden peer-has-[label:nth-child(1)_:checked]:block bg-light-blue-100 border border-light-blue-200 pt-10 pb-[72px] overflow-hidden">
          <div class="flex flex-col gap-y-8">
            <div class="wrapper space-y-4">
              <h3>Простая интеграция с действующими системами и сервисами</h3>
              <div class="p-2 description text-dark-blue-300 bg-white rounded-sm border border-light-blue-200">Дaшборд — главный экран для руководителя</div>
            </div>

            <div class="w-fit max-w-[93%] self-end">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard-apps.png" alt="главный экран">
            </div>

            <ul class="wrapper space-y-4">
              <li class="flash-li">CRM</li>
              <li class="flash-li">Чаты и мессенджеры</li>
              <li class="flash-li">Телефония</li>
              <li class="flash-li">Индивидуальные интеграции по API</li>
            </ul>
          </div>
        </div>

        <!-- #2 automatization tab -->
        <div class="hidden peer-has-[label:nth-child(2)_:checked]:block bg-light-blue-100 border border-light-blue-200 pt-10 pb-[72px] overflow-hidden">
          <div class="flex flex-col gap-y-8">
            <h3 class="wrapper">Автоматическое заполнение CRM по итогам звонка</h3>

            <div class="w-fit max-w-[93%] self-end">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/bitrix-24.png" alt=",битрикс-24">
            </div>

            <ul class="wrapper space-y-4">
              <li class="flash-li">Экономьте время менеджера на <b>внесении данных</b> после звонка</li>
              <li class="flash-li"><b>Минимизируйте</b> ошибки и пропуски в CRM</li>
              <li class="flash-li">Повышайте <b>эффективность менеджера</b> и шансы на закрытие сделки</li>
              <li class="flash-li"><b>Получайте выводы</b> и рекомендации по итогам звонка
                с помощью ChatGPT</li>
            </ul>
          </div>
        </div>

        <!-- #3 automatization tab -->
        <div class="hidden peer-has-[label:nth-child(3)_:checked]:block bg-light-blue-100 border border-light-blue-200 pt-10 overflow-hidden">
          <div class="flex flex-col gap-y-8">
            <h3 class="wrapper">Простая интеграция с действующими системами и сервисами</h3>

            <ul class="wrapper space-y-4">
              <li class="flash-li">Если менеджер произнес <b>«перезвоню с личного»</b>, вам придет мгновенное уведомление</li>
              <li class="flash-li">Клиент пригрозил, что будет подавать в суд? <br>
                <b>Узнайте об этом раньше</b>, чем менеджер положил трубку, и урегулируйте ситуацию
              </li>
            </ul>

            <div class="w-fit max-w-[80%] self-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/iphone-notification.png" alt="уведомления на телефон">
            </div>
          </div>
        </div>

        <!-- #4 automatization tab -->
        <div class="hidden peer-has-[label:nth-child(4)_:checked]:block bg-light-blue-100 border border-light-blue-200 pt-10 pb-[72px] overflow-hidden">
          <div class="flex flex-col gap-y-8">
            <h3 class="wrapper">Готовые отчёты, адаптированные под вашу роль и потребности компании</h3>

            <div class="w-fit max-w-[93%] self-end">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/dashboard.png" alt="главный экран">
            </div>

            <ul class="wrapper space-y-4">
              <li class="flash-li"><b>Подробная расшифровка</b> каждого звонка с разделением на реплики сотрудника и клиента</li>
              <li class="flash-li"><b>Анализ звонка</b>: в каком тоне состоялся диалог, кто доминировал, кто перебивал и насколько часто</li>
              <li class="flash-li">Узнавайте, как <b>сотрудник презентовал</b> компанию и предложил ли дополнительные товары</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- PRICES section -->
  <section class="wrapper pt-[19px] overflow-hidden">
    <div class="mb-10">
      <h3 class="mb-1 text-center">— Сколько стоит </h3>
      <h3 class="text-center">
        <b class="relative">
          Эврика360?

          <div class="absolute -inset-7 flex justify-center items-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/text-circle.png" alt="">
          </div>
        </b>
      </h3>
    </div>

    <div class="mb-10">
      <?php include 'parts/prices-slider.php' ?>
    </div>
  </section>

  <!-- ONLINE EXCURSION section -->
  <section></section>
</main>

<?php get_footer(); ?>