<?php
/*
  Template Name: Решения - для собственника
 */
?>

<?php get_header() ?>

<main class="flex flex-col gap-16 lg:gap-[110px]">
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
</main>

<?php get_footer() ?>