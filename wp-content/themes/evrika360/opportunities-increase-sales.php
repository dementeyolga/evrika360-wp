<?php
/*
  Template Name: Возможности - Увеличение продаж
 */
?>

<?php get_header() ?>

<main class="flex flex-col gap-16 lg:gap-[110px] overflow-hidden">
  <!-- Попапы -->
  <?php include 'parts/popups.php' ?>

  <!-- HERO section -->
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
</main>

<?php get_footer() ?>