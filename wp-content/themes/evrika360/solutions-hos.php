<?php
/*
  Template Name: Решения - для РОПа
 */
?>

<?php get_header() ?>

<main class="flex flex-col gap-16 lg:gap-[110px] overflow-hidden">
  <!-- Попапы -->
  <?php include 'parts/popups.php' ?>

  <!-- HERO section -->
  <section class="relative overflow-hidden pt-[123px] lg:pt-[227px] pb-[100px] lg:pb-40 rounded-b-2xl lg:rounded-b-5xl border border-grey-100 bg-blue-100 text-white bg-circles">
    <div class="wrapper relative z-10">
      <div class="mb-10">
        <h1 class="mb-10 xl:max-w-[67%]">
          <?= CFS()->get('hos_hero_title_1') ?>

          <span class="w-fit relative">
            <?= CFS()->get('hos_hero_title_2') ?>

            <div class="absolute left-0 right-0 bottom-1 translate-y-full">
              <img class="w-full" src="<?= get_template_directory_uri() ?>/assets/images/text-highlight-bottom-thin.svg" alt="">
            </div>
          </span>

          <?= CFS()->get('hos_hero_title_3') ?>
        </h1>
        <p class="subtitle xl:max-w-[40%]"><?= CFS()->get('hos_hero_subtitle') ?></p>
      </div>

      <div class="w-fit flex flex-col gap-5">
        <button class="consultation-modal-toggle btn small w-full ml-0">
          <?= CFS()->get('hos_hero_button_1_text') ?>
        </button>
        <button class="consultation-modal-toggle btn small dark w-full ml-0">
          <?= CFS()->get('hos_hero_button_2_text') ?>
        </button>
      </div>
    </div>

    <div class="wrapper items-center hidden xl:block xl:absolute xl:mt-[183px] xl:top-0 xl:bottom-0 xl:left-0 xl:right-0">
      <div class="absolute max-w-[80%] 2xl:max-w-[85%] max-h-full bottom-0 -right-[20%] 2xl:-right-[25.6%]">
        <img src="<?= CFS()->get('hos_hero_image') ?>" alt="консультант">
      </div>
    </div>
  </section>

  <!-- QUESTIONS section -->
  <section class="mt-20">
    <div class="pb-20 lg:pt-20 lg:mx-10 lg:rounded-2xl bg-light-blue-100 border border-light-blue-200 bg-light-wave-to-top">
      <div class="wrapper lg:flex-row items-center lg:justify-between gap-8 lg:gap-16">
        <div class="lg:order-2 max-w-[400px] lg:max-w-[589px] -mt-20 lg:-mt-[152px]">
          <img class="lg:hidden" src="<?= CFS()->get('hos_questions_image_mobile') ?>" alt="">
          <img class="hidden lg:block" src="<?= CFS()->get('hos_questions_image_desktop') ?>" alt="">
        </div>

        <div class="md:min-w-[400px]">
          <h2 class="mb-6 lg:mb-12">
            <?= CFS()->get('hos_questions_title') ?>
          </h2>

          <p class="h5 mb-10 lg:mb-16">
            <?= CFS()->get('hos_questions_description') ?>
          </p>

          <button class="consultation-modal-toggle btn primary ml-0 flex items-center gap-2">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/share-icon.svg" alt="">

            <?= CFS()->get('hos_questions_button_text') ?>
          </button>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>