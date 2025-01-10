<?php
/*
  Template Name: Возможности - Контроль качества
 */
?>

<?php get_header() ?>

<main class="flex flex-col gap-16 lg:gap-[110px] overflow-hidden">
  <!-- Попапы -->
  <?php include 'parts/popups.php' ?>

  <!-- HERO секция -->
  <section class="relative overflow-hidden pt-[123px] lg:pt-[247px] pb-[138px] lg:pb-[240px] rounded-b-2xl lg:rounded-b-5xl border border-grey-100 bg-blue-100 text-white bg-circles">
    <div class="wrapper relative z-10">
      <div class="mb-12 lg:mb-[120px]">
        <h1 class="mb-5 lg:mb-8 xl:max-w-[60%]">
          <?= CFS()->get('qa_hero_title_1') ?> <br>

          <span class="w-fit relative">
            <?= CFS()->get('qa_hero_title_2') ?>

            <div class="absolute left-0 right-0 bottom-1 translate-y-full">
              <img class="w-full" src="<?= get_template_directory_uri() ?>/assets/images/text-highlight-bottom-thin.svg" alt="">
            </div>
          </span>

          <?= CFS()->get('qa_hero_title_3') ?>
        </h1>

        <p class="subtitle xl:max-w-[45%]">
          <?= CFS()->get('qa_hero_subtitle') ?>
        </p>
      </div>

      <div class="w-fit flex flex-col gap-5">
        <button class="consultation-modal-toggle btn small dark w-full ml-0">
          <?= CFS()->get('qa_hero_button_text') ?>
        </button>
      </div>
    </div>

    <div class="hidden xl:block xl:wrapper items-center xl:absolute xl:mt-[183px] xl:top-0 xl:bottom-0 xl:left-0 xl:right-0">
      <div class="absolute max-w-[75%] max-h-full bottom-0 -right-[15%]">
        <img src="<?= CFS()->get('qa_hero_image') ?>" alt="консультант">
      </div>
    </div>
  </section>

  <!-- Секция Эврика360 улучшает контроль качества -->
  <section class="py-12 lg:py-20 lg:mx-10 lg:rounded-2xl bg-light-blue-100 border border-light-blue-200 bg-long-curve-to-top overflow-hidden">
    <div class="wrapper">
      <h2 class="mb-6 lg:mb-8 grow">
        <?= CFS()->get('qa_improve_title_1') ?>

        <span class="relative font-bold">
          <?= CFS()->get('qa_improve_title_2') ?>

          <div class="absolute right-0 lg:-right-3 left-0 lg:-left-1 -bottom-1">
            <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc-2.svg" alt="">
            <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc-3.svg" alt="">
          </div>
        </span>

        <br class="hidden lg:block">
        <?= CFS()->get('qa_improve_title_3') ?>
      </h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
        <?php
        $fields = CFS()->get('qa_improve_loop');
        foreach ($fields as $field): ?>
          <div>
            <p class="mb-3 text-lg lg:text-[22px] font-medium">
              <?= $field['qa_improve_loop_title'] ?>
            </p>
            <p class="description text-grey-400">
              <?= $field['qa_improve_loop_description'] ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Секция Сократите расходы -->
  <section class="wrapper">
    <div class="relative">
      <h2 class="relative mt-[110px] lg:mt-12 mb-8 max-w-[77%] md:max-w-[540px]">
        <?= CFS()->get('qa_expense_title') ?>

        <div class="absolute -left-3 right-[25%] md:left-[20%] md:right-[17%] bottom-1 md:bottom-2 translate-y-full -z-10">
          <img class="w-full hidden md:block" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-right-small.svg" alt="">
          <img class="w-full md:hidden max-w-[300px]" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-right.svg" alt="">
        </div>
      </h2>

      <div class="absolute top-0 right-0 z-10">
        <img class="w-[148px] md:w-[204px]" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-ok.webp" alt="персонаж Эврика360">
        <div class="character-bg bg-light-blue-150 w-[153px] h-[153px] md:w-[212px] md:h-[212px] absolute -top-6 left-0"></div>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
      <div class="px-6 pt-6 pb-10 rounded-md shadow-card bg-white">
        <p class="h5 mb-3">
          <?= CFS()->get('qa_expense_manual_title') ?>
        </p>

        <div class="space-y-4">
          <?php
          $items =  CFS()->get('qa_expense_manual_loop');
          foreach ($items as $item): ?>
            <div class="flex gap-3">
              <div class="w-4 mt-1 shrink-0">
                <img class="w-full" src="<?= get_template_directory_uri() ?>/assets/images/flash-icon.svg" alt="">
              </div>

              <p class="description text-grey-400">
                <?= $item['qa_expense_manual_loop_item'] ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="px-6 pt-6 pb-10 rounded-md shadow-card bg-white">
        <p class="h5 mb-3">
          <?= CFS()->get('qa_expense_analytics_title') ?>
        </p>

        <div class="space-y-4">
          <?php
          $items =  CFS()->get('qa_expense_analytics_loop');
          foreach ($items as $item): ?>
            <div class="flex gap-3">
              <div class="w-4 mt-1 shrink-0">
                <img class="w-full" src="<?= get_template_directory_uri() ?>/assets/images/flash-green-icon.svg" alt="">
              </div>

              <p class="description text-grey-400">
                <?= $item['qa_expense_analytics_loop_item'] ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>