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
  <section></section>

  <!-- TEST section -->
  <section></section>

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