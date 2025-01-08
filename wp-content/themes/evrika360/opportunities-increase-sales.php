<?php
/*
  Template Name: Возможности - Увеличение продаж
 */
?>

<?php get_header() ?>

<main class="flex flex-col gap-16 lg:gap-[110px] overflow-hidden">
  <!-- Попапы -->
  <?php include 'parts/popups.php' ?>

  <!-- HERO секция -->
  <section class="relative overflow-hidden pt-[123px] lg:pt-[247px] md:pb-[100px] lg:pb-[210px] rounded-b-2xl lg:rounded-b-5xl border border-grey-100 bg-blue-100 text-white bg-circles">
    <div class="wrapper relative z-10">
      <div class="mb-8 lg:mb-[180px]">
        <h1 class="mb-5 lg:mb-8 xl:max-w-[67%]">
          <?= CFS()->get('sales_hero_title_1') ?> <br>

          <span class="w-fit relative">
            <?= CFS()->get('sales_hero_title_2') ?>

            <div class="absolute left-0 right-0 bottom-1 translate-y-full">
              <img class="w-full" src="<?= get_template_directory_uri() ?>/assets/images/text-highlight-bottom-thin.svg" alt="">
            </div>
          </span>

          <?= CFS()->get('sales_hero_title_3') ?>
        </h1>
        <p class="subtitle xl:max-w-[55%]">
          <?= CFS()->get('sales_hero_subtitle') ?>
        </p>
      </div>

      <div class="w-fit flex flex-col gap-5">
        <button class="consultation-modal-toggle btn small dark w-full ml-0">
          <?= CFS()->get('sales_hero_button_text') ?>
        </button>
      </div>
    </div>

    <div class="xl:wrapper items-center md:hidden xl:block xl:absolute xl:mt-[183px] xl:top-0 xl:bottom-0 xl:left-0 xl:right-0">
      <div class="hidden xl:block absolute max-w-[85%] max-h-full bottom-0 -right-[20%]">
        <img src="<?= CFS()->get('sales_hero_image_desktop') ?>" alt="консультант">
      </div>

      <div class="md:hidden">
        <img src="<?= CFS()->get('sales_hero_image_mobile') ?>" alt="консультант">
      </div>
    </div>
  </section>

  <!-- Секиця Эврика 360 помогает продавать -->
  <section class="py-12 lg:py-20 lg:mx-10 lg:rounded-2xl bg-light-blue-100 border border-light-blue-200 bg-long-curve-to-top overflow-hidden">
    <div class="wrapper">
      <h2 class="mb-6 lg:mb-8 grow">
        <?= CFS()->get('sales_help_title_1') ?>
        <span class="relative font-bold">
          <?= CFS()->get('sales_help_title_2') ?>

          <div class="absolute right-0 lg:-right-3 left-0 lg:-left-1 -bottom-1">
            <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc-2.svg" alt="">
            <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc-3.svg" alt="">
          </div>
        </span>
      </h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <?php
        $fields = CFS()->get('sales_help_loop');
        foreach ($fields as $field): ?>
          <div>
            <p class="mb-3 text-lg lg:text-[22px] font-medium">
              <?= $field['sales_help_loop_title'] ?>
            </p>
            <p class="description text-grey-400">
              <?= $field['sales_help_loop_description'] ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Секция пример -->
  <section class="wrapper gap-10 lg:gap-14">
    <h2>
      <?= CFS()->get('sales_case_title_1') ?> <br>
      <span class="relative font-bold">
        <?= CFS()->get('sales_case_title_2') ?>

        <span class="absolute left-0 lg:left-2 right-2 lg:right-[20%] bottom-0.5 translate-y-full">
          <img class="w-full lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-right-small.svg" alt="">
          <img class="w-full hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-right.svg" alt="">
        </span>
      </span>
    </h2>

    <div class="px-6 py-8 lg:px-14 lg:py-12 grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-[120px] *:text-white rounded-xl lg:rounded-2xl border border-orange-100 bg-dark-blue-400 bg-white-wave-bottom-high">
      <div class="space-y-4 lg:space-y-8">
        <div>
          <p class="mb-4 description text-white uppercase">
            <?= CFS()->get('sales_case_solutions_sphere') ?>
          </p>

          <div class="card-badge text-sm lg:text-base mb-4 lg:mb-2">
            <?= CFS()->get('sales_case_problems_title') ?>
          </div>

          <div class="space-y-2">
            <?php
            $items = CFS()->get('sales_case_problems_loop');
            foreach ($items as $item): ?>
              <div class="flex gap-3">
                <div class="w-4 mt-1 shrink-0">
                  <img class="w-full" src="<?= get_template_directory_uri() ?>/assets/images/flash-icon.svg" alt="">
                </div>

                <p class="description">
                  <?= $item['sales_case_problems_loop_item'] ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div>
          <div class="mb-4 lg:mb-2 card-badge text-sm lg:text-base bg-green-500">
            <?= CFS()->get('sales_case_solutions_title') ?>
          </div>

          <div class="space-y-2">
            <?php
            $items = CFS()->get('sales_case_solutions_loop');
            foreach ($items as $item): ?>
              <div class="flex gap-3">
                <div class="w-4 mt-1 shrink-0">
                  <img class="w-full" src="<?= get_template_directory_uri() ?>/assets/images/flash-icon.svg" alt="">
                </div>

                <p class="description">
                  <?= $item['sales_case_solutions_loop_item'] ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="space-y-2">
        <div class="lg:mt-6 card-badge text-sm lg:text-base bg-yellow-500">
          <?= CFS()->get('sales_case_solutions_result_title') ?>
        </div>

        <div class="flex gap-3 lg:gap-2 items-center lg:flex-col lg:items-start">
          <p class="text-[52px]/[130%] lg:text-[110px]/[130%]">
            <?= CFS()->get('sales_case_solutions_result_percent') ?>
          </p>

          <p class="text-sm lg:text-[28px]/[150%]">
            <?= CFS()->get('sales_case_solutions_result_description') ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Секция функций -->
  <section class="wrapper">
    <h2 class="mb-8">
      <?= CFS()->get('sales_features_title_1') ?> <br>
      <span class="relative font-bold">
        <?= CFS()->get('sales_features_title_2') ?>

        <div class="absolute right-0 lg:-right-3 left-0 lg:-left-1 -bottom-2">
          <img class="lg:hidden" src="<?= get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc-2.svg" alt="">
          <img class="hidden lg:block" src="<?= get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc-3.svg" alt="">
        </div>
      </span>
    </h2>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-7">
      <div class="hidden lg:block -ml-[12%]">
        <img src="<?= CFS()->get('sales_features_image') ?>" alt="">
      </div>

      <div class="hidden lg:grid grid-cols-1 gap-6 lg:gap-5">
        <?php
        $fields = CFS()->get('sales_features_loop');
        foreach ($fields as $field): ?>
          <div class="flex flex-col lg:flex-row gap-3 lg:gap-6">
            <div class="shrink-0 w-16 h-16 flex justify-center items-center bg-light-blue-100 rounded-md">
              <img class="w-6 h-6" src="<?= $field['sales_features_loop_icon'] ?>" alt="">
            </div>

            <div>
              <p class="mb-1 text-lg lg:text-[22px] font-medium">
                <?= $field['sales_features_loop_title'] ?>
              </p>
              <p class="description">
                <?= $field['sales_features_loop_description'] ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="lg:hidden">
        <?php include 'parts/increase-sales-slider.php' ?>
      </div>
    </div>


  </section>
</main>

<?php get_footer() ?>