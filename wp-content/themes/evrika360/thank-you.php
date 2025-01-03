<?php
/*
  Template Name: Спасибо за заявку
 */
?>

<?php get_header('not-fixed'); ?>

<main class="pt-[120px] lg:pt-6 overflow-hidden">
  <!-- Попапы -->
  <?php include 'parts/popups.php' ?>

  <div class="mb-[65px] lg:mb-0 wrapper lg:flex-row lg:gap-5">
    <div class="relative lg:mt-24 flex flex-col gap-y-3 lg:gap-y-12 mb-8">
      <div class="lg:hidden absolute bg-blue-circle -inset-24"></div>

      <h3 class="leading-[140%] lg:text-[40px]/[140%]">Отлично, мы <b>приняли вашу заявку</b> и скоро свяжемся с вами для консультации</h3>

      <p class="lg:text-2xl/[140%]">в рабочее время с 9-00 до 18-00</p>
    </div>

    <div class="hidden lg:block mt-1 max-w-[480px] shrink-0 -mb-6 mr-[29px]">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/discussion.webp" alt="мы приняли вашу заявку">
    </div>
  </div>

  <div class="relative wrapper lg:px-[132px] lg:rounded-2xl bg-dark-blue-500 lg:bg-white-wave-right text-white overflow-hidden">
    <div class="pt-8 lg:pt-6 pb-10 lg:pb-0 lg:flex lg:flex-row lg:gap-[82px]">
      <div class="lg:hidden absolute h-[222px] lg:rounded-2xl bottom-0 right-0 left-0 bg-fade-bottom"></div>

      <div class="hidden lg:flex justify-center items-end shrink-0">
        <img class="max-w-[305px]" src="<?php echo get_template_directory_uri() ?>/assets/images/iphone-instagram-desktop.webp" alt="инстаграм Эврика360">
      </div>

      <div class="lg:pt-3 lg:pb-10">
        <div class="mb-7 lg:mb-[64px] space-y-2">
          <p class="description">
            А пока ждете звонка или сообщения в мессенджер —
          </p>
          <p class="h5 lg:text-2xl/[140%]">
            подписывайтесь на <b>наш Instagram</b>,
          </p>
          <p class="description">
            чтобы узнать ещё больше, чем речевая аналитика может помочь вам и вашей компании
          </p>
        </div>

        <div class="lg:hidden flex justify-center">
          <img class="max-w-[205px]" src="<?php echo get_template_directory_uri() ?>/assets/images/iphone-instagram.webp" alt="инстаграм Эврика360">
        </div>

        <div class="wrapper lg:flex-row lg:items-center max-lg:absolute max-lg:bottom-[38px] max-lg:right-0 max-lg:left-0 gap-4 z-10">
          <div class="p-3 h-fit flex justify-center items-center rounded-xs text-dark-blue-500 bg-white">
            <p>@evrika360com</p>
          </div>

          <a href="https://www.instagram.com/evrika360com" class="p-3 h-fit flex justify-center items-center gap-2 rounded-xs text-white bg-blue-100">
            <div>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/instagram-light-icon.svg" alt="логотип инстаграм">
            </div>
            <p>Подписаться в Instagram</p>
          </a>
        </div>
      </div>
    </div>
  </div>

</main>

<?php get_footer('empty'); ?>