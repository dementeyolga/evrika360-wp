<?php
/*
  Template Name: Решения - для собственника
 */
?>

<?php get_header() ?>

<main class="flex flex-col gap-16 lg:gap-[110px] overflow-hidden">
  <!-- Попапы -->
  <?php include 'parts/popups.php' ?>

  <!-- HERO section -->
  <section class="relative overflow-hidden pt-[123px] lg:pt-[227px] pb-[100px] lg:pb-60 rounded-b-2xl lg:rounded-b-5xl border border-grey-100 bg-blue-100 text-white bg-circles">
    <div class="wrapper relative z-10">
      <div class="mb-10 lg:max-w-[63%]">
        <h1 class="mb-10"><?= CFS()->get('owner_hero_title') ?> <br>
          <span class="block w-fit relative">
            <?= CFS()->get('owner_hero_title_highlight') ?>

            <div class="absolute left-0 right-0 bottom-0 translate-y-full">
              <img class="w-full" src="<?= get_template_directory_uri() ?>/assets/images/text-highlight-bottom-thin.svg" alt="">
            </div>
          </span>
        </h1>
        <p class="subtitle"><?= CFS()->get('owner_hero_subtitle') ?></p>
      </div>

      <div class="w-fit flex flex-col gap-5">
        <button class="consultation-modal-toggle btn small w-full ml-0">
          <?= CFS()->get('owner_hero_button_1_text') ?>
        </button>
        <button class="consultation-modal-toggle btn small dark w-full ml-0">
          <?= CFS()->get('owner_hero_button_2_text') ?>
        </button>
      </div>
    </div>

    <div class="wrapper items-center hidden xl:block xl:absolute xl:mt-[136px] xl:top-0 xl:bottom-0 xl:left-0 xl:right-0">
      <div class="absolute max-w-[60%] max-h-full bottom-0 lg:-right-[11%]">
        <img src="<?= CFS()->get('owner_hero_image') ?>" alt="консультант">
      </div>
    </div>
  </section>

  <!-- ONE SERVICE section -->
  <section class="overflow-hidden max-lg:bg-light-blue-100 max-lg:border max-lg:border-light-blue-200">
    <div class="lg:wrapper">
      <?php include 'parts/owner-service-slider.php' ?>
    </div>
  </section>

  <!-- PAINS section -->
  <section class="wrapper">
    <div class="flex gap-10 items-center">
      <div class="relative hidden lg:block">
        <img class="relative w-64 z-10" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-scared.webp" alt="персонаж Эврика360">
        <div class="character-bg w-[230px] h-[230px] absolute top-0 left-2.5 z-0"></div>
      </div>

      <h2 class="grow relative max-w-[550px] max-lg:mb-6">
        <div class="absolute bg-lighter-orange-circle -inset-60 -z-10"></div>

        <?= CFS()->get('owner_pains_title_1') ?>
        <span class="inline-block relative font-bold">
          <?= CFS()->get('owner_pains_title_2') ?>

          <div class="absolute max-lg:-right-5 lg:left-1/2 lg:-translate-x-1/2 bottom-0 translate-y-1/2">
            <img class="hidden lg:block max-w-[257px]" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc.svg" alt="">
            <img class="lg:hidden max-w-[193px]" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-thin-2.svg" alt="">
          </div>
        </span>
        <?= CFS()->get('owner_pains_title_3') ?>
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
      <?php
      $fields = CFS()->get('owner_pains_cards');
      foreach ($fields as $field): ?>
        <div class="px-6 pt-6 pb-10 rounded-md shadow-card bg-white">
          <p class="h5 mb-3">
            <?= $field['owner_pains_cards_title'] ?>
          </p>

          <p class="description text-grey-400">
            <?= $field['owner_pains_cards_description'] ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- BUSINESS TASKS section -->
  <section class="py-14 lg:mx-10 lg:rounded-2xl bg-light-blue-100 border border-light-blue-200 bg-long-curve-to-top overflow-hidden">
    <div class="wrapper">
      <h2 class="mb-8 grow relative max-w-[550px] max-lg:mb-6">
        <div class="absolute bg-lighter-orange-circle -inset-60 -z-10"></div>

        <?= CFS()->get('owner_business_tasks_title_1') ?>
        <span class="inline-block relative font-bold">
          <?= CFS()->get('owner_business_tasks_title_2') ?>

          <div class="hidden md:block absolute -right-3 -left-1 -bottom-2">
            <img class="" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc-3.svg" alt="">
          </div>
        </span>
        <?= CFS()->get('owner_business_tasks_title_3') ?>
      </h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        $fields = CFS()->get('owner_business_tasks_blocks');
        foreach ($fields as $field): ?>
          <div class="flex flex-col gap-3">
            <div class="shrink-0 w-12 h-12 flex justify-center items-center bg-white rounded-md">
              <img class="w-6 h-6" src="<?= $field['owner_business_tasks_icon'] ?>" alt="">
            </div>

            <div>
              <p class="mb-3 text-lg lg:text-[22px] font-medium">
                <?= $field['owner_business_tasks_title'] ?>
              </p>
              <p class="description">
                <?= $field['owner_business_tasks_description'] ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- AUTOMATED QA section -->
  <section class="wrapper lg:flex-row gap-6 lg:gap-[8%]">
    <div class="relative shrink-0 lg:w-2/5 flex justify-center items-center">
      <div class="absolute bg-orange-circle -inset-32 -z-20"></div>

      <div class="relative w-full flex justify-center">
        <img class="w-[225px] lg:w-[262px]" src="<?= get_template_directory_uri() ?>/assets/images/evrika-laptop.webp" alt="персонаж Эврика360 за ноутбуком">

        <div class="absolute bottom-0 -z-10">
          <img class="lg:hidden" src="<?= get_template_directory_uri() ?>/assets/images/character-bg-beige.webp" alt="">
          <img class="hidden lg:block" src="<?= get_template_directory_uri() ?>/assets/images/character-bg-beige-desktop.webp" alt="">
        </div>
      </div>
    </div>

    <div class="grow">
      <h2 class="mb-6 lg:mb-10 relative">
        <?= CFS()->get('owner_automatization_title_1') ?> <br>
        <span class="inline-block relative font-bold">
          <?= CFS()->get('owner_automatization_title_2') ?>

          <div class="absolute -right-14 bottom-0.5 translate-y-full">
            <img class="w-[183px] lg:w-[263px]" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-right.svg" alt="">
          </div>
        </span>
        <br>
        <?= CFS()->get('owner_automatization_title_3') ?>
      </h2>

      <div class="grid grid-cols-1 gap-4">
        <?php
        $fields = CFS()->get('owner_automatization_advantages');
        foreach ($fields as $field): ?>
          <div class="flex gap-6">
            <div class="shrink-0 w-16 h-16 flex justify-center items-center bg-light-blue-100 rounded-md">
              <img class="w-6 h-6" src="<?= $field['owner_automatization_advantages_icon'] ?>" alt="">
            </div>

            <div>
              <p class="mb-1 text-lg lg:text-[22px] font-medium">
                <?= $field['owner_automatization_advantages_title'] ?>
              </p>
              <p class="description">
                <?= $field['owner_automatization_advantages_description'] ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>