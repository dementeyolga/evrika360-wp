<?php
/*
  Template Name: Главная
 */
?>

<?php get_header() ?>

<main class="flex flex-col gap-16 lg:gap-[110px] overflow-hidden">
  <!-- Попапы -->
  <?php include 'parts/popups.php' ?>

  <!-- HERO section -->
  <section class="relative overflow-hidden pt-[123px] lg:pt-[227px] pb-[329px] lg:pb-[169px] rounded-b-2xl lg:rounded-b-5xl border border-grey-100 bg-blue-100 text-white bg-circles">
    <div class="wrapper mb-8 lg:mb-[104px]">
      <h1 class="mb-5 md:mb-6"><?= CFS()->get('hero_heading') ?></h1>
      <p class="subtitle"><?= CFS()->get('hero_subheading') ?></p>
    </div>

    <div class="hidden lg:block mb-[64px] bg-blue-fade-left">
      <div class="wrapper py-5">
        <p class="text-xl/[160%]">
          <?= CFS()->get('hero_description') ?>
        </p>
      </div>
    </div>

    <div class="wrapper">
      <button class="consultation-modal-toggle btn ml-0">
        <?= CFS()->get('hero_action_button_text') ?>
      </button>
    </div>

    <div class="lg:hidden absolute -bottom-[152px] left-1/2 -translate-x-1/2 w-max z-10">
      <img class="w-max max-w-[783px]" src="<?= CFS()->get('hero_image_mobile') ?>" alt="изображение главного экрана Эврика360">
    </div>

    <div class="video-promo-toggle group lg:hidden absolute bottom-2 left-1/2 -translate-x-1/2 w-[230px] h-[230px] z-10 hover:cursor-pointer animate-pulse-quick hover:animate-none">
      <img class="group-hover:opacity-0 absolute inset-0 transition-opacity duration-200 z-20" src="<?php echo get_template_directory_uri() ?>/assets/images/promo-play.webp" alt="воспроизвести видео">
      <img class="absolute inset-0 transition-opacity duration-200" src="<?php echo get_template_directory_uri() ?>/assets/images/promo-play-hover.webp" alt="воспроизвести видео">
    </div>

    <div class="hidden lg:block absolute bottom-0 right-0 max-w-[67%]">
      <img src="<?= CFS()->get('hero_image_desktop') ?>" alt="изображение главного экрана Эврика360">

      <div class="video-promo-toggle group absolute bottom-[4%] right-[13.5%] w-[34.17%] aspect-square z-10 hover:cursor-pointer animate-pulse-quick hover:animate-none">
        <img class="group-hover:opacity-0 absolute inset-0 transition-opacity duration-200 z-20" src="<?php echo get_template_directory_uri() ?>/assets/images/promo-play.webp" alt="воспроизвести видео">
        <img class="absolute inset-0 transition-opacity duration-200" src="<?php echo get_template_directory_uri() ?>/assets/images/promo-play-hover.webp" alt="воспроизвести видео">
      </div>
    </div>
  </section>

  <!-- GREETING section -->
  <div class="pb-8 -mb-8 wrapper overflow-hidden xl:overflow-visible pt-[64px] -mt-[64px] xl:flex-row xl:gap-11">
    <div class="hidden xl:block xl:shrink-0 xl:w-[591px] relative h-[173px] xl:h-[565px] rounded-xl xl:rounded-2xl bg-light-blue-100 border border-light-blue-200">
      <div class="absolute top-[70px] left-0 w-max">
        <img class="w-max max-w-[946px]" src="<?= CFS()->get('greeting_image_desktop') ?>" alt="ноутбук с демонстрацией сервиса Эврика360">
      </div>
    </div>

    <div class="relative flex flex-col xl:shrink-0 xl:grow">
      <div class="absolute bg-orange-circle -inset-44 lg:-inset-52 -z-10"></div>

      <div class="badge mt-[74px] xl:mt-[86px] mb-[18px]">
        Эврика360
      </div>

      <div class="relative chat secondary mb-5 xl:mb-8 xl:max-w-[400px]">
        <div class="flex gap-1">
          <?= CFS()->get('greeting_hi') ?>
          <div class="shrink-0 flex items-center max-w-6">
            <img src="<?= CFS()->get('greeting_emoji') ?>" alt="">
          </div>
        </div>

        <?= CFS()->get('greeting_text') ?>

        <div class="character-bg xl:w-[190px] xl:h-[190px] absolute right-0 xl:-right-[112px] top-[6px] xl:top-[47px] -translate-y-full"></div>
        <div class="absolute right-[11px] xl:-right-[90px] top-[15px] xl:top-[71px] -translate-y-full">
          <img class="w-[137px] xl:w-[209px]" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-wink.webp" alt="персонаж Эврика360 подмигивает">
        </div>
      </div>

      <div class="chat self-end mb-[116px] xl:mb-5">
        <?= CFS()->get('greeting_question') ?>
      </div>

      <div class="xl:hidden relative h-[173px] mb-4 rounded-xl bg-light-blue-100 border border-light-blue-200">
        <div class="absolute -top-[54px] w-max sm:w-full sm:flex sm:justify-center">
          <img class="sm:translate-x-6 max-w-[424px]" src="<?= CFS()->get('greeting_image_mobile') ?>" alt="ноутбук с демонстрацией сервиса Эврика360">
        </div>
      </div>

      <div class="relative w-fit mx-auto mb-[50px] xl:mr-0">
        <span class="accent text-center"><?= CFS()->get('greeting_arrow_text') ?></span>
        <div class="absolute -right-[3px] xl:right-[111px] bottom-[11px] xl:-bottom-[11px] translate-y-full translate-x-full">
          <img class="xl:h-[88px]" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom.svg" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- DEPARTMENTS section -->
  <section id="departments" class="pt-[80px] -mt-[80px]">
    <div class="lg:mx-10 lg:rounded-2xl bg-pattern bg-light-blue-100 border border-light-blue-200 overflow-hidden">
      <div class="wrapper pt-10 xl:pt-20 pb-[75px] xl:pb-[150px] space-y-10 xl:space-y-[64px]">
        <div class="relative">
          <div class="absolute left-0 top-0 flex items-center max-w-8">
            <img src="<?= CFS()->get('dept_heading_emoji') ?>" alt="">
          </div>
          <h2 class="indent-9"><?= CFS()->get('dept_heading') ?></h2>
        </div>

        <?php include 'parts/dept-slider.php' ?>
      </div>
    </div>

    <div class="wrapper">
      <button class="video-founders-toggle mt-14 btn primary flex items-center gap-2">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/play-arrow-right.svg" alt="">


        <?= CFS()->get('dept_button_text') ?>
      </button>
    </div>
  </section>

  <!-- IN DETAIL section -->
  <section class="wrapper pt-[64px] -mt-[64px]">
    <div class="flex flex-col gap-6 lg:flex-row lg:gap-[100px]">
      <div class="relative flex flex-col gap-6 lg:w-[448px] lg:shrink-0">
        <div class="absolute bg-orange-circle -inset-60 -z-10"></div>

        <div class="relative mx-auto mb-[22px] w-fit">
          <img class="w-[161px] h-[161px] lg:w-[250px] lg:h-[250px]" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-idea.webp" alt="персонаж Эврика360">
          <div class="character-bg lg:w-[190px] lg:h-[190px] absolute w-[120px] h-[120px] top-5 lg:top-10 left-[calc(50%_-_8px)] -translate-x-1/2"></div>
          <div class="badge absolute -bottom-[22px] left-1/2 -translate-x-1/2">Эврика360</div>
        </div>

        <div class="chat self-end max-w-[86%]">
          <?= CFS()->get('details_question') ?>
        </div>

        <div class="chat secondary">
          <?= CFS()->get('details_answer') ?>
        </div>
      </div>

      <div>
        <div class="relative">
          <h2 class="mb-[54px] lg:mt-[18px] lg:mb-10">
            <?= CFS()->get('details_heading') ?>
          </h2>

          <div class="absolute right-0 -bottom-8 lg:right-6 lg:-bottom-1">
            <img class="lg:w-[263px]" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-right.svg" alt="">
          </div>
        </div>


        <div class="space-y-6">
          <?php
          $fields = CFS()->get('details_advantages');
          foreach ($fields as $field) {
          ?>
            <div class="space-y-2">
              <div class="flex gap-4 lg:gap-6 items-center">
                <div class="w-12 h-12 lg:w-20 lg:h-20 shrink-0 flex justify-center items-center rounded-sm lg:rounded-md bg-light-blue-100">
                  <img class="w-5 lg:w-10" src="<?= $field['emoji'] ?>" alt="">
                </div>
                <div class="flex flex-col gap-1">
                  <p><?= $field['position'] ?></p>
                  <p class="hidden lg:block text-grey-400"><?= $field['advantage'] ?></p>
                </div>
              </div>
              <p class="lg:hidden text-grey-400"><?= $field['advantage'] ?></p>
            </div>

          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES section -->
  <section id="features" class="pt-[130px] -mt-[130px] overflow-hidden space-y-4 lg:space-y-12">
    <div class="peer embla feature-tabs-embla">
      <div class="wrapper embla__viewport feature-tabs-embla__viewport">
        <div class="embla__container feature-tabs-embla__container">
          <?php
          $fields = CFS()->get('feature_tabs');
          foreach ($fields as $index => $field): ?>
            <label class="tab" data-text="<?= $field['label_1'] . ' ' . $field['label_2'] ?>">
              <?= $field['label_1'] ?> <br> <?= $field['label_2'] ?>
              <input class="hidden" name="feature-tabs" type="radio" <?php if ($index == 0) echo 'checked' ?>>
            </label>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Feature tabs -->
    <?php
    $fields = CFS()->get('feature_tabs');
    foreach ($fields as $index => $field): ?>

      <div class="hidden lg:mx-10 peer-has-[label:nth-child(<?= $index + 1 ?>)_:checked]:block">
        <div class="feature-tab">

          <?php if ($field['is_two_text_fields_block'] == 0): ?>

            <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-12">
              <div class="wrapper space-y-4">
                <h3 class="lg:text-2xl/[130%]"><?= $field['title'] ?></h3>
                <?php if (!empty($field['badge'])) { ?>
                  <p class="p-2 w-fit description text-dark-blue-300 bg-white rounded-sm border border-light-blue-200"><?= $field['badge'] ?></p>
                <?php } ?>
              </div>

              <div class="lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center w-fit max-w-[93%] md:max-w-[70%] lg:max-w-[48%] self-end">
                <img src="<?= $field['image'] ?>" alt="демо сервиса Эврика360">
              </div>

              <ul class="wrapper space-y-4 lg:space-y-5">
                <?php
                $features = $field['features'];
                foreach ($features as $feature): ?>
                  <li class="flash-li"><?= $feature['feature'] ?></li>
                <?php endforeach; ?>
              </ul>
            </div>

          <?php else: ?>

            <div class="wrapper grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-8">
              <div class="p-6 space-y-4 lg:space-y-8 bg-white rounded-xl border border-grey-300 bg-light-wave">
                <h3><?= $field['first_block_title'] ?></h3>
                <ul class="space-y-3 lg:space-y-4">

                  <?php
                  $features = $field['first_block_features'];
                  foreach ($features as $feature) {
                  ?>
                    <li class="flash-li"><?= $feature['feature'] ?></li>
                  <?php
                  }
                  ?>

                </ul>
              </div>

              <div class="p-6 space-y-4 lg:space-y-8 bg-white rounded-xl border border-light-blue-200">
                <h3 class="text-grey-400"><?= $field['second_block_title'] ?></h3>
                <ul class="space-y-3 lg:space-y-4">

                  <?php
                  $features = $field['second_block_features'];
                  foreach ($features as $feature) {
                  ?>
                    <li class="flash-li-disabled"><?= $feature['feature'] ?></li>
                  <?php
                  }
                  ?>

                </ul>
              </div>
            </div>

          <?php endif ?>
        </div>
      </div>

    <?php endforeach; ?>
  </section>

  <!-- TEST section -->
  <section class="relative pt-12 pb-[263px] lg:py-0 lg:mx-10 lg:h-[288px] lg:rounded-2xl bg-pattern border border-light-blue-200 text-white overflow-hidden text-center">
    <div class="wrapper lg:flex-row lg:items-center lg:justify-between lg:h-full">
      <div class="absolute inset-0 -z-20 bg-dark-linear"></div>
      <div class="lg:static lg:w-1/4 lg:pt-[29px] max-w-[200px] lg:max-w-[230px] lg:self-start max-lg:absolute -bottom-[105px] max-lg:left-1/2 max-lg:-translate-x-1/2">
        <img class="max-w-full" src="<?= CFS()->get('test_image') ?>" alt="демо сервиса Эврика360">
      </div>

      <div class="lg:w-1/2">
        <p class="mb-4 lg:mb-5 mx-auto font-medium lg:text-2xl/[130%]"><?= CFS()->get('test_title_1') ?></p>
        <h2 class="h4 mb-8 lg:mb-0 mx-auto lg:text-[32px]/[120%]">
          <?= CFS()->get('test_title_2') ?>
        </h2>
      </div>

      <div class="lg:w-1/4 lg:flex lg:justify-end">
        <a href="#popup:marquiz_66e6d33b2fa5030026ac5480" class="btn lg:m-0">
          <?= CFS()->get('test_action_button_text') ?>
        </a>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS section -->
  <section id="how-it-works" class="pt-[100px] -mt-[100px] overflow-hidden">
    <div class="lg:mx-10 lg:rounded-2xl border border-light-blue-200 bg-light-blue-100 bg-white-wave-bottom">
      <div class="wrapper relative pt-[90px] pb-20 space-y-10 lg:space-y-10 lg:pt-20 lg:pb-[110px]">
        <div class="chat secondary lg:mb-[37px]">
          <?= CFS()->get('how_works_question') ?>
        </div>

        <div class="relative space-y-4 lg:w-fit">
          <h2>
            <?= CFS()->get('how_works_answer') ?>
          </h2>

          <div class="relative accent small lg:absolute lg:-top-[124px] lg:-right-[369px] text-end z-10">
            <?= CFS()->get('how_works_next_text') ?>
            <div class="lg:hidden absolute -bottom-10 left-0">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-spiral.svg" alt="">
            </div>
            <div class="hidden lg:block absolute -bottom-[100px] -left-10">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-top-spiral.svg" alt="">
            </div>
          </div>
        </div>

        <button class="consultation-modal-toggle btn primary lg:ml-0">
          <?= CFS()->get('how_works_action_button_text') ?>
        </button>

        <div class="hidden lg:block absolute -right-3 top-[84px] z-0">
          <img class="mb-6 w-[237px]" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-laptop.webp" alt="персонаж Эврика360 с ноутбуком">
          <div class="character-bg w-[264px] h-[264px] bg-white absolute -top-3 -left-2.5 opacity-90 -z-10"></div>

          <div class="badge mx-auto">Эврика360</div>
        </div>
      </div>
    </div>
  </section>

  <!-- EXAMPLE CASE section -->
  <div>
    <div class="wrapper lg:-mt-8 mb-[56px] lg:mb-[120px] flex flex-col gap-16 lg:gap-[94px]">
      <div class="relative flex flex-col lg:flex-row lg:gap-12">
        <div class="mb-6 lg:mb-0 max-w-[450px] lg:w-[466px] lg:shrink-0">
          <img class="w-full lg:hidden" src="<?= CFS()->get('case_buyer_image_mobile') ?>" alt="клиент">
          <img class="w-full hidden lg:block" src="<?= CFS()->get('case_buyer_image_desktop') ?>" alt="клиент">
        </div>

        <div class="lg:w-[350px] lg:mt-[76px] flex flex-col gap-4 lg:gap-6">
          <div class="py-2 px-5 lg:py-3 xs:w-fit rounded-lg text-white bg-blue-200">
            <p class="h5">
              <?= CFS()->get('case_buyer_title') ?>
            </p>
          </div>

          <div class="relative">
            <div class="absolute -bottom-[70px] right-8 lg:-right-24 lg:-bottom-16">
              <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-dotted.svg" alt="">
              <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-dotted-desktop.svg" alt="">
            </div>

            <div class="hidden lg:block absolute -top-4 -left-[22px]">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/quotation-marks-left.svg" alt="">
            </div>

            <p class="description">
              <?= CFS()->get('case_buyer_description') ?>
            </p>
          </div>
        </div>
      </div>

      <div class="relative flex flex-col lg:flex-row lg:gap-12 lg:justify-end">
        <div class="mb-6 lg:mb-0 max-w-[450px] lg:w-[466px] lg:shrink-0 lg:order-2">
          <img class="w-full lg:hidden" src="<?= CFS()->get('case_operator_image_mobile') ?>" alt="оператор">
          <img class="w-full hidden lg:block" src="<?= CFS()->get('case_operator_image_desktop') ?>" alt="оператор">
        </div>

        <div class="lg:w-[350px] lg:mt-[76px] flex flex-col gap-4 lg:gap-6">
          <div class="py-2 px-5 lg:py-3 xs:w-fit rounded-lg text-white bg-blue-200">
            <p class="h5">
              <?= CFS()->get('case_operator_title') ?>
            </p>
          </div>

          <div class="relative">
            <div class="absolute -bottom-[100px] right-4 lg:-left-32 lg:-bottom-[68px]">
              <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-dotted-spiral.svg" alt="">
              <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-dotted-spiral-right.svg" alt="">
            </div>

            <div class="hidden lg:block absolute -top-4 right-0">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/quotation-marks-right.svg" alt="">
            </div>

            <p class="description">
              <?= CFS()->get('case_operator_description') ?>
            </p>
          </div>
        </div>
      </div>

      <div class="relative flex flex-col lg:flex-row lg:gap-12">
        <div class="mb-6 lg:mb-0 max-w-[450px] lg:w-[466px] lg:shrink-0">
          <img class="w-full lg:hidden" src="<?= CFS()->get('case_manager_image_mobile') ?>" alt="руководитель">
          <img class="w-full hidden lg:block" src="<?= CFS()->get('case_manager_image_desktop') ?>" alt="руководитель">
        </div>

        <div class="lg:w-[350px] lg:mt-[76px] flex flex-col gap-4 lg:gap-6">
          <div class="py-2 px-5 lg:py-3 xs:w-fit rounded-lg text-white bg-blue-200">
            <p class="h5">
              <?= CFS()->get('case_manager_title') ?>
            </p>
          </div>

          <div class="relative">
            <div class="hidden lg:block absolute -bottom-[86px] -right-[56px]">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-dotted-spiral-2.svg" alt="">
            </div>

            <div class="hidden lg:block absolute -top-4 -left-[22px]">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/quotation-marks-left.svg" alt="">
            </div>

            <p class="description">
              <?= CFS()->get('case_manager_description') ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-10 pt-12 lg:pt-9 lg:mb-[56px] lg:mx-10 lg:rounded-2xl bg-dark-linear border border-light-blue-200 overflow-hidden">
      <div class="relative wrapper lg:flex-row lg:justify-between">
        <div class="hidden lg:block absolute -right-[84px] -top-5 z-0">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/bg-chat.webp" alt="">
        </div>

        <div class="lg:w-[365px] lg:pb-[57px] z-10">
          <div class="mb-8 lg:mb-[68px] mx-auto lg:ml-0 py-3 px-5 xs:w-fit rounded-md text-dark-blue-500 bg-white">
            <p class="h4">
              <?= CFS()->get('case_analytics_title') ?>
            </p>
          </div>

          <p class="mb-6 text-white">
            <?= CFS()->get('case_analytics_description_1') ?>
          </p>
          <p class="mb-10 lg:mb-0 text-white">
            <?= CFS()->get('case_analytics_description_2') ?>
          </p>
        </div>

        <div class="flex justify-center lg:w-[439px] lg:h-fit lg:self-end lg:mt-8 lg:mr-[113px] lg:z-10">
          <img class="w-full sm:max-w-[70%] lg:hidden" src="<?= CFS()->get('case_analytics_image_mobile') ?>" alt="демо аналиики сервиса Эврика360">
          <img class="w-full hidden lg:block" src="<?= CFS()->get('case_analytics_image_desktop') ?>" alt="демо аналиики сервиса Эврика360">
        </div>
      </div>
    </div>

    <div class="wrapper">
      <button class="consultation-modal-toggle btn primary">
        <?= CFS()->get('case_action_button_text') ?>
      </button>
    </div>
  </div>

  <!-- USEFUL section -->
  <section class="pt-10 pb-[56px] lg:py-[92px] lg:mx-10 lg:rounded-2xl bg-light-blue-100 border border-light-blue-200 bg-light-curve-to-top overflow-hidden">
    <div class="wrapper lg:flex-row lg:justify-between lg:items-center">
      <div class="lg:max-w-[700px]">
        <div class="relative">
          <h2 class="mb-20 lg:mb-14">
            <?= CFS()->get('useful_title_1') ?>
            <span class="relative font-bold">
              <?= CFS()->get('useful_title_2') ?>

              <span class="absolute -left-1 right-0 -bottom-1 translate-y-full">
                <img class="w-full" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-left.svg" alt="">
              </span>
            </span>

            <?= CFS()->get('useful_title_3') ?>
          </h2>
        </div>

        <div class="mb-[30px] space-y-5 lg:space-y-4 lg:max-w-[520px]">
          <?php
          $fields = CFS()->get('useful_cases');
          foreach ($fields as $field): ?>
            <div class="flex gap-6 items-center">
              <div class="shrink-0 w-16 h-16 flex justify-center items-center bg-white rounded-md">
                <img src="<?= $field['useful_cases_icon'] ?>" alt="">
              </div>
              <p><?= $field['useful_cases_text'] ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="flex flex-col items-center lg:mr-[53px]">
        <div class="badge hidden lg:flex mb-6 mx-auto">Эврика360</div>

        <div class="-mb-0.5 relative">
          <img class="ml-[5px] lg:ml-[15px] w-[151px] lg:w-[204px] relative z-10" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-hand.webp" alt="персонаж Эврика360">
          <div class="character-bg w-[153px] h-[153px] lg:w-[207px] lg:h-[207px]  bg-white z-0 absolute -top-2 lg:left-2 opacity-60"></div>
        </div>

        <div class="chat z-20">
          <?= CFS()->get('useful_answer') ?>
        </div>
      </div>
    </div>
  </section>

  <!-- IMMEDIATE assessment section -->
  <section class="overflow-hidden">
    <div class="wrapper mt-[26px] mb-[56px] lg:mb-20 space-y-6 lg:space-y-10">
      <div class="relative lg:mx-auto">
        <h2 class="lg:text-center lg:max-w-[860px]">
          <?= CFS()->get('immediate_title') ?>
        </h2>

        <div class="absolute -top-5 -left-5">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/crown.svg" alt="">
        </div>
        <div class="hidden lg:block absolute -top-4 -right-6">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/crown-right.svg" alt="">
        </div>
      </div>

      <p class="lg:mx-auto lg:text-center lg:max-w-[600px]">
        <?= CFS()->get('immediate_description') ?>
      </p>
    </div>

    <div class="peer embla assessment-tabs-embla mb-4 lg:mb-12">
      <div class="wrapper embla__viewport assessment-tabs-embla__viewport">
        <div class="embla__container assessment-tabs-embla__container">
          <?php
          $fields = CFS()->get('immediate_tabs');
          foreach ($fields as $index => $field): ?>
            <label class="tab" data-text="<?= $field['immediate_tabs_label_1'] . ' ' . $field['immediate_tabs_label_2'] ?>">
              <?= $field['immediate_tabs_label_1'] ?> <br> <?= $field['immediate_tabs_label_2'] ?>
              <input class="hidden" name="assessment-tabs" type="radio" <?php if ($index == 0) echo 'checked' ?>>
            </label>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Assessment tabs -->
    <?php
    $fields = CFS()->get('immediate_tabs');
    foreach ($fields as $index => $field): ?>
      <div class="hidden lg:mx-10 peer-has-[label:nth-child(<?= $index + 1 ?>)_:checked]:block">
        <div class="assessment-tab">
          <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-12">
            <h3 class="wrapper lg:text-2xl/[130%]">
              <?= $field['immediate_tabs_title'] ?>
            </h3>

            <div class="w-fit max-w-[93%] md:max-w-[70%] lg:max-w-[48%] self-end lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center">
              <img src="<?= $field['immediate_tabs_image'] ?>" alt="анализ диалога">
            </div>

            <ul class="wrapper space-y-4 *:text-base/[150%]">
              <?php
              $advantages = $field['immediate_tabs_advantages'];
              foreach ($advantages as $advantage): ?>
                <li class="flash-li">
                  <?= $advantage['immediate_tabs_advantage'] ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </section>

  <!-- REVIEW section -->
  <section class="lg:wrapper-no-flex lg:grid lg:grid-cols-2 lg:items-start lg:gap-5">
    <div class="wrapper flex flex-col items-center lg:items-start lg:mt-0">
      <div class="mb-6 lg:mb-10">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-transparent.webp" alt="логотип речевой аналитики Эврика360">
      </div>

      <h2 class="mb-5 lg:mb-[76px]">
        <?= CFS()->get('review_title') ?>
      </h2>

      <div class="mb-[86px] lg:mb-0 lg:ml-[93px] w-fit relative accent small">
        <?= CFS()->get('review_subtitle') ?>

        <div class="absolute -bottom-[64px] right-10 lg:-bottom-16 lg:-right-[136px]">
          <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-wavy.svg" alt="">
          <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-wavy-desktop.svg" alt="">
        </div>
      </div>
    </div>

    <div class="wrapper py-8 lg:p-8 lg:rounded-md bg-light-blue-100 border border-light-blue-200">
      <p class="h4 mb-8">
        <?= CFS()->get('review_review_title') ?>
      </p>
      <p class="mb-10">
        <?= CFS()->get('review_review_text') ?>
      </p>

      <div class="flex gap-6 items-center">
        <div class="w-[56px] h-[56px] shrink-0">
          <img src="<?= CFS()->get('review_review_author_image') ?>" alt="автор отзыва">
        </div>

        <div class="space-y-1">
          <p>
            <?= CFS()->get('review_review_author_name') ?>
          </p>
          <p class="text-grey-400">
            <?= CFS()->get('review_review_author_position') ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- FREE DEMO section -->
  <section class="relative mt-[75px] pb-[72px] lg:pb-0 lg:mx-10 lg:rounded-2xl bg-pattern border border-light-blue-200 text-white">
    <div class="absolute inset-0 -z-20 bg-dark-linear lg:rounded-2xl"></div>

    <div class="wrapper lg:flex-row lg:gap-16">
      <div class="-mt-[75px] lg:-mt-12 mb-[46px] scale-105 lg:scale-100 lg:-ml-12 shrink-0 flex justify-center items-start">
        <img class="lg:hidden w-full max-w-[400px]" src="<?= CFS()->get('demo_image_mobile') ?>" alt="онлайн-демо сервиса Эврика360">
        <img class="hidden lg:block max-w-[580px]" src="<?= CFS()->get('demo_image_desktop') ?>" alt="онлайн-демо сервиса Эврика360">
      </div>

      <div class="lg:pt-[72px] lg:pb-[90px]">
        <div class="mb-10 lg:mb-[56px] space-y-6 lg:space-y-8">
          <h2>
            <?= CFS()->get('demo_title') ?>
          </h2>
          <p>
            <?= CFS()->get('demo_description') ?>
          </p>
        </div>

        <button class="consultation-modal-toggle btn primary lg:ml-0">
          <?= CFS()->get('demo_button_text') ?>
        </button>
      </div>
    </div>
  </section>

  <!-- DATA SECURITY section -->
  <section class="pt-[64px] -mt-[64px]">
    <div class="relative wrapper mt-[38px] lg:mt-[50px] lg:pb-[68px] space-y-11 lg:items-end">
      <div class="relative">
        <div class="absolute bg-lighter-orange-circle -inset-60 -z-10"></div>

        <h2 class="lg:mr-20 xl:mr-[169px]">
          <?= CFS()->get('safety_title_1') ?> <br class="lg:hidden">
          <span class="relative font-bold">
            <?= CFS()->get('safety_title_2') ?>

            <span class="absolute left-0 -right-2 -bottom-1 translate-y-full block lg:w-[250px]">
              <img class="lg:hidden w-full" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc.svg" alt="">
              <img class="hidden lg:block w-full" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc-desktop.svg" alt="">
            </span>
          </span>
        </h2>
      </div>


      <div class="flex flex-col items-center">
        <div class="relative lg:absolute left-10 bottom-0">
          <img class="relative w-40 lg:w-60 z-10" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-scared.webp" alt="персонаж Эврика360">
          <div class="character-bg w-[140px] h-[140px] lg:w-[210px] lg:h-[210px] absolute top-0 left-2.5 z-0"></div>
        </div>

        <div class="chat">
          <?= CFS()->get('safety_answer') ?>
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
  <section id="cases" class="wrapper space-y-8 pt-[110px] -mt-[110px] overflow-hidden">
    <div class="space-y-7 lg:space-y-9">
      <div class="flex flex-col gap-7 lg:flex-row lg:justify-between lg:gap-5">
        <div class="relative h-fit lg:mt-[120px]">
          <div class="absolute bg-lighter-orange-circle -inset-60 -z-10"></div>

          <h2 class="h-fit">
            <?= CFS()->get('cases_title_1') ?>
            <span class="relative font-bold">
              <?= CFS()->get('cases_title_2') ?>

              <span class="absolute left-0 -right-2 bottom-0 translate-y-full">
                <img class="lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc.svg" alt="">
                <img class="hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/text-highlight-bottom-arc-2.svg" alt="">
              </span>
            </span>

            <?= CFS()->get('cases_title_3') ?>
          </h2>
        </div>


        <div class="flex flex-col items-center lg:max-w-[636px]">
          <div class="relative">
            <img class="w-[150px] lg:w-[220px]" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-secret.webp" alt="персонаж Эврика360">
            <div class="character-bg w-[130px] h-[130px] lg:w-[194px] lg:h-[194px] absolute top-2 left-4 lg:left-5"></div>
          </div>

          <div class="chat">
            <?= CFS()->get('cases_answer') ?>
          </div>
        </div>
      </div>

      <div class="space-y-6 text-white">
        <!-- Case #1 -->
        <div class="px-4 pt-8 pb-14 lg:px-10 lg:pt-8 lg:pb-[58px] lg:grid lg:grid-cols-2 lg:gap-[150px] rounded-xl lg:rounded-2xl border border-orange-100 bg-dark-blue-400 bg-white-wave-bottom-left">
          <div>
            <div class="card-badge mb-4 lg:mb-8"><?= CFS()->get('cases_case_1_badge') ?></div>
            <p class="h4 mb-8"><?= CFS()->get('cases_case_1_description') ?></p>
          </div>

          <div class="space-y-6 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-y-8 lg:gap-x-6">
            <?php
            $fields = CFS()->get('cases_case_1_indicators');
            foreach ($fields as $field): ?>
              <div class="space-y-1">
                <div class="flex gap-1 items-center">
                  <p class="h2 font-medium md:text-[32px]/[130%]">
                    <?= $field['cases_case_1_indicators_title'] ?>

                    <?php if (!empty($field['cases_case_1_indicators_title_crossed'])): ?>
                      <span class="line-through opacity-40 font-normal">
                        <?= $field['cases_case_1_indicators_title_crossed'] ?>
                      </span>
                    <?php endif; ?>
                  </p>

                  <?php if (!empty($field['cases_case_1_indicators_title_small'])): ?>
                    <p class="h4 inline-block">
                      <?= $field['cases_case_1_indicators_title_small'] ?>
                    </p>
                  <?php endif; ?>
                </div>

                <p>
                  <?= $field['cases_case_1_indicators_description'] ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Case #2 -->
        <div class="px-4 pt-8 pb-14 lg:px-10 lg:pt-8 lg:pb-[58px] lg:grid lg:grid-cols-2 lg:gap-[150px] rounded-xl lg:rounded-2xl border border-orange-100 bg-dark-blue-400 bg-white-wave-top">
          <div class="lg:order-2">
            <div class="card-badge mb-4 lg:mb-8"><?= CFS()->get('cases_case_2_badge') ?></div>
            <p class="h4 mb-8"><?= CFS()->get('cases_case_2_description') ?></p>
          </div>

          <div class="space-y-6 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-y-8 lg:gap-x-6">
            <?php
            $fields = CFS()->get('cases_case_2_indicators');
            foreach ($fields as $field): ?>
              <div class="space-y-1">
                <div class="flex gap-1 items-center">
                  <p class="h2 font-medium md:text-[32px]/[130%]">
                    <?= $field['cases_case_2_indicators_title'] ?>

                    <?php if (!empty($field['cases_case_2_indicators_title_crossed'])): ?>
                      <span class="line-through opacity-40 font-normal">
                        <?= $field['cases_case_2_indicators_title_crossed'] ?>
                      </span>
                    <?php endif; ?>
                  </p>

                  <?php if (!empty($field['cases_case_2_indicators_title_small'])): ?>
                    <p class="h4 inline-block">
                      <?= $field['cases_case_2_indicators_title_small'] ?>
                    </p>
                  <?php endif; ?>
                </div>

                <p>
                  <?= $field['cases_case_2_indicators_description'] ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div>
        <button class="test-modal-toggle btn primary lg:mt-[56px]">
          <?= CFS()->get('cases_button_text') ?>
        </button>
      </div>
    </div>
  </section>

  <!-- AUTOMATIZATION section -->
  <section class="overflow-hidden">
    <div class="space-y-[58px] lg:space-y-20">
      <div class="lg:wrapper-no-flex flex flex-col gap-y-[58px] lg:flex-row lg:justify-between lg:gap-x-4">
        <div class="max-lg:wrapper flex flex-col gap-6 lg:w-[440px]">
          <div class="chat secondary"><?= CFS()->get('automate_question') ?></div>
          <div class="chat self-end"><?= CFS()->get('automate_answer') ?></div>
        </div>

        <div class="max-lg:wrapper space-y-[22px] lg:max-w-[565px]">
          <h2>
            <?= CFS()->get('automate_title') ?>
          </h2>

          <p class="text-grey-400">
            <?= CFS()->get('automate_description') ?>
          </p>
        </div>
      </div>

      <!-- Automate tab labels -->
      <div class="space-y-4 lg:space-y-12">
        <div class="peer embla automatization-tabs-embla">
          <div class="wrapper embla__viewport automatization-tabs-embla__viewport">
            <div class="embla__container automatization-tabs-embla__container">
              <?php
              $fields = CFS()->get('automate_tabs');
              foreach ($fields as $index => $field): ?>
                <label class="tab" data-text="<?= $field['automate_tabs_label_1'] . ' ' . $field['automate_tabs_label_2'] ?>">
                  <?= $field['automate_tabs_label_1'] ?> <br> <?= $field['automate_tabs_label_2'] ?>
                  <input class="hidden" name="automatization-tabs" type="radio" <?php if ($index == 0) echo 'checked' ?>>
                </label>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- Automatization tabs -->
        <?php
        $fields = CFS()->get('automate_tabs');
        foreach ($fields as $index => $field): ?>

          <div class="hidden lg:mx-10 peer-has-[label:nth-child(<?= $index + 1 ?>)_:checked]:block">

            <?php if ($field['automate_tabs_image_is_bottom'] == 0): ?>

              <div class="automatization-tab">
                <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-12">
                  <div class="wrapper space-y-4">
                    <h3 class="md:text-2xl/[130%]">
                      <?= $field['automate_tabs_title'] ?>
                    </h3>

                    <?php if (!empty($field['automate_tabs_badge'])) { ?>
                      <p class="p-2 w-fit description text-dark-blue-300 bg-white rounded-sm border border-light-blue-200">
                        <?= $field['automate_tabs_badge'] ?>
                      </p>
                    <?php } ?>
                  </div>

                  <div class="lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center w-fit max-w-[93%] md:max-w-[70%] lg:max-w-[48%] self-end">
                    <img src="<?= $field['automate_tabs_image'] ?>" alt="демонстрация сервиса Эврика">
                  </div>

                  <ul class="wrapper space-y-4 lg:space-y-3">
                    <?php
                    $features = $field['automate_tabs_list'];
                    foreach ($features as $feature): ?>
                      <li class="flash-li">
                        <?= $feature['automate_tabs_list_item'] ?>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>

            <?php else: ?>

              <div class="automatization-tab max-lg:pb-0">
                <div class="lg:max-w-[45.5%] flex flex-col gap-y-8 lg:gap-y-12">
                  <h3 class="wrapper md:text-2xl/[130%]">
                    <?= $field['automate_tabs_title'] ?>
                  </h3>

                  <ul class="wrapper space-y-4 lg:space-y-3">
                    <?php
                    $features = $field['automate_tabs_list'];
                    foreach ($features as $feature): ?>
                      <li class="flash-li">
                        <?= $feature['automate_tabs_list_item'] ?>
                      </li>
                    <?php endforeach; ?>
                  </ul>

                  <div class="lg:absolute lg:right-[37px] lg:bottom-0 lg:h-full lg:flex lg:items-end w-fit max-w-[60%] lg:max-w-[80%] self-center">
                    <img class="lg:max-w-[340px]" src="<?= $field['automate_tabs_image'] ?>" alt="функции сервиса Эврика360">
                  </div>
                </div>
              </div>

            <?php endif ?>
          </div>

        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- PRICES section -->
  <section id="prices" class="pt-[130px] -mt-[130px]">
    <div class="wrapper">
      <div class="lg:mb-[130px] lg:mt-4 lg:flex lg:justify-center lg:items-center">
        <div class="relative mb-10 lg:mb-0 mx-auto lg:ml-0 w-fit flex flex-col lg:flex-row items-center lg:justify-center lg:gap-3">
          <div class="absolute bg-lighter-orange-circle -inset-60 -z-10"></div>

          <h2 class="mb-1 text-center">
            <?= CFS()->get('prices_title_1') ?> <br>

            <span class="relative leading-relaxed lg:block lg:mt-6 lg:w-fit lg:mx-auto font-bold">
              <?= CFS()->get('prices_title_2') ?>

              <span class="absolute -inset-7 lg:-inset-4 lg:-bottom-1 lg:-left-2 flex justify-center items-center">
                <img class="w-full lg:hidden" src="<?php echo get_template_directory_uri() ?>/assets/images/text-circle.svg" alt="">
                <img class="w-full hidden lg:block" src="<?php echo get_template_directory_uri() ?>/assets/images/text-circle-desktop.svg" alt="">
              </span>
            </span>
          </h2>
        </div>

        <div class="hidden lg:block text-blue-100">
          <?php include 'parts/evrika-logo-medium.php' ?>
        </div>
      </div>

      <div class="mb-10 lg:hidden">
        <?php include 'parts/prices-slider.php' ?>
      </div>

      <div class="mb-[88px] hidden lg:block">
        <div class="grid grid-cols-[220px_auto] gap-[38px]">
          <div class="h-fit grid grid-cols-1 gap-[3px]">
            <div class="price-table-unit table-heading">
            </div>
            <div class="price-table-unit table-title">Блоки чек-листа</div>
            <div class="price-table-unit table-title">Минут</div>
            <div class="price-table-unit table-title">Интеграция с системами по API</div>
            <div class="price-table-unit table-title h-[60px] !text-xs">
              Оплата производится в белорусских рублях по курсу НБ РБ на день оплаты <br> Не является публичной офертой
            </div>
          </div>

          <div class="grid grid-cols-4 gap-[5px]">

            <!-- Plan #1 -->
            <div class="grid grid-cols-1 gap-[3px] text-blue-100">
              <div class="price-table-unit table-heading">
                <?= CFS()->get('pricing_1_name') ?>
              </div>
              <div class="price-table-unit bg-light-blue-150"><?= CFS()->get('pricing_1_checklist_points') ?></div>
              <div class="price-table-unit bg-light-blue-150"><?= CFS()->get('pricing_1_minutes') ?></div>
              <div class="price-table-unit bg-light-blue-150"><?= CFS()->get('pricing_1_api_integrations') ?></div>
              <div class="price-table-unit table-heading">
                <?= CFS()->get('pricing_1_price') ?>
              </div>
            </div>

            <!-- Plan #2 -->
            <div class="grid grid-cols-1 gap-[3px] text-green-500">
              <div class="relative price-table-unit table-heading">
                <?= CFS()->get('pricing_2_name') ?>

                <div class="absolute left-0 right-0 bottom-0 py-[9px] flex justify-center h-[120px] bg-green-linear text-dark-blue-500 text-lg -z-10">
                  POPULAR
                </div>
              </div>
              <div class="price-table-unit text-white bg-green-500"><?= CFS()->get('pricing_2_checklist_points') ?></div>
              <div class="price-table-unit text-white bg-green-500"><?= CFS()->get('pricing_2_minutes') ?></div>
              <div class="price-table-unit text-white bg-green-500"><?= CFS()->get('pricing_2_api_integrations') ?></div>
              <div class="price-table-unit table-heading">
                <?= CFS()->get('pricing_2_price') ?>
              </div>
            </div>

            <!-- Plan #3 -->
            <div class="grid grid-cols-1 gap-[3px] text-yellow-500">
              <div class="price-table-unit table-heading">
                <?= CFS()->get('pricing_3_name') ?>
              </div>
              <div class="price-table-unit text-white bg-yellow-500"><?= CFS()->get('pricing_3_checklist_points') ?> </div>
              <div class="price-table-unit text-white bg-yellow-500"><?= CFS()->get('pricing_3_minutes') ?></div>
              <div class="price-table-unit text-white bg-yellow-500"><?= CFS()->get('pricing_3_api_integrations') ?></div>
              <div class="price-table-unit table-heading">
                <?= CFS()->get('pricing_3_price') ?>
              </div>
            </div>

            <!-- Plan #4 -->
            <div class="grid grid-cols-1 gap-[3px] text-orange-400">
              <div class="price-table-unit table-heading">
                <?= CFS()->get('pricing_4_name') ?>
              </div>
              <div class="price-table-unit text-white bg-orange-400"><?= CFS()->get('pricing_4_checklist_points') ?></div>
              <div class="price-table-unit text-white bg-orange-400"><?= CFS()->get('pricing_4_minutes') ?></div>
              <div class="price-table-unit text-white bg-orange-400"><?= CFS()->get('pricing_4_api_integrations') ?></div>
              <div class="price-table-unit table-heading !text-[17px]">
                <?= CFS()->get('pricing_4_price') ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="lg:wrapper">
      <div class="lg:flex lg:gap-6">
        <div class="max-lg:wrapper-no-flex lg:order-2">
          <div class="relative mb-9 lg:mb-0 px-4 py-6 h-fit space-y-6 bg-orange-100-50 rounded-md border border-orange-100">
            <h3 class="h4 lg:text-xl/[130%]"><?= CFS()->get('prices_packets_title') ?></h3>

            <ul class="space-y-2">
              <?php
              $fields = CFS()->get('prices_packets_features');
              foreach ($fields as $field): ?>
                <li class="flash-li"><?= $field['feature'] ?></li>
              <?php endforeach; ?>
            </ul>

            <div class="peer price-more-toggle relative btn primary w-full flex items-center gap-2 hover:cursor-pointer">
              <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/help-circle-icon.svg" alt="">
              </div>
              <?= CFS()->get('prices_packets_button_text') ?>

              <label class="absolute top-0 bottom-0 right-0 left-0">
                <input type="checkbox" class="hidden">
              </label>
            </div>

            <div class="hidden max-lg:peer-has-[:checked]:block mt-6 p-4 space-y-3 rounded-md bg-white shadow-card">
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
                <p class="h5 font-bold"><?= CFS()->get('prices_more_4_price') ?></p>
                <p class="description text-grey-400">
                  <?= CFS()->get('prices_more_4_title') ?>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="max-lg:wrapper lg:grow overflow-hidden">
          <div>
            <?php include 'parts/feature-price-slider.php' ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ONLINE EXCURSION section -->
  <section class="space-y-[60px] lg:space-y-[180px]">
    <div class="wrapper flex flex-col gap-5 lg:flex-row lg:gap-[58px] lg:items-center">
      <div class="flex flex-col items-center shrink-0">
        <div class="relative lg:ml-4">
          <img class="w-[200px] lg:w-[260px]" src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-happy.webp" alt="персонаж Эврика360">
          <div class="character-bg w-[200px] h-[200px] absolute -top-1 left-3 lg:w-[260px] lg:h-[260px]"></div>
        </div>

        <div class="badge -mt-3 lg:hidden">
          Эврика360
        </div>
      </div>

      <div class="relative lg:grow">
        <div class="badge hidden lg:flex mb-8">
          Эврика360
        </div>

        <h2 class="leading-[150%]">
          <?= CFS()->get('excursion_title_1') ?>
        </h2>

        <div class="hidden lg:block absolute -bottom-[124px] right-[180px]">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-bottom-wavy-2.svg" alt="">
        </div>
      </div>
    </div>

    <div class="pt-12 pb-20 lg:pt-20 lg:pb-[65px] lg:mx-10 lg:rounded-2xl bg-light-blue-100 border border-light-blue-200 bg-light-wave-to-top">
      <div class="lg:wrapper-no-flex lg:grid lg:grid-cols-[57%_auto] lg:justify-between">
        <div class="max-lg:wrapper">
          <h2 class="mb-8 lg:mb-12 leading-[140%]">
            <?= CFS()->get('excursion_title_2') ?>
          </h2>

          <ul class="mb-10 lg:mb-[64px] space-y-3 *:text-base/[150%] lg:*:text-xl/[150%]">
            <?php
            $items = CFS()->get('excursion_contents');
            foreach ($items as $item): ?>
              <li class="flash-li">
                <?= $item['excursion_contents_item'] ?>
              </li>
            <?php endforeach; ?>
          </ul>

          <button class="excursion-modal-toggle btn primary lg:ml-0 flex items-center gap-2">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/share-icon.svg" alt="">

            <?= CFS()->get('excursion_button_text') ?>
          </button>
        </div>

        <div class="hidden lg:block 2xl:-mr-[127px] mt-10">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/evrika-excursion.webp" alt="польза сервиса Эврика360 для разных отделов компании">
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>