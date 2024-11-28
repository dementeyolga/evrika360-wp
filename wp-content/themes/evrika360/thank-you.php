<?php
/*
  Template Name: Спасибо за заявку
 */
?>

<?php get_header('not-fixed'); ?>

<main class="pt-[120px] lg:pt-6 max-lg:bg-blue-circle">
  <!-- Popup "Заказать Звонок" -->
  <div id="popup-order-call" class="modal hidden z-50 fixed top-0 w-screen h-screen justify-center items-center bg-blur-fade">
    <div class="wrapper max-w-[448px]">
      <div class="relative my-11 px-4 py-6 lg:px-6 lg:py-8 w-full rounded-xl border border-grey-400 bg-white">
        <button class="absolute top-2 right-0 p-4">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/close-circle-grey-icon.png" alt="">
        </button>

        <h4 class="mb-8 md:text-xl/[130%]">
          <b>Заполните форму</b> и <br class="lg:hidden"> закажите <br class="hidden lg:block"> консультацию специалиста
        </h4>

        <form class="mb-4 flex flex-col gap-6" onsubmit="event.preventDefault(); window.location.pathname = '/thank-you'">
          <div class="flex flex-col gap-2">
            <label for="call-name">Ваше имя*</label>
            <input type="text" name="Имя" id="call-name" placeholder="Введите имя" required>
          </div>

          <div class="flex flex-col gap-2">
            <label for="call-phone">Ваш номер телефона*</label>
            <input type="text" name="Телефон" id="call-phone" placeholder="+375 ( _ _ ) _ _ _-_ _-_ _" required>
          </div>

          <div class="flex gap-4 items-center">
            <input type="checkbox" class="relative shrink-0 appearance-none w-6 h-6 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:border after:border-grey-400 after:rounded-sm before:absolute before:inset-1 before:rounded-xs checked:before:bg-blue-100" name="Согласие на обработку персональных данных" id="call-agree-personal-data">
            <label for="call-agree-personal-data" class="text-grey-400">Даю согласие на обработку персональных данных</label>
          </div>

          <button type="submit" class="btn primary w-full">Записаться</button>
        </form>

        <div class="p-4 small-text bg-light-blue-100">
          Или звоните по номеру <a class="underline text-blue-200 font-bold" href="tel:+375 29 388-55-12">+375 29 388-55-12</a>
        </div>
      </div>
    </div>
  </div>

  <div class="mb-[65px] lg:mb-0 wrapper lg:flex-row lg:gap-5">
    <div class="lg:mt-24 flex flex-col gap-y-3 lg:gap-y-12 mb-8">
      <h3 class="leading-[140%] lg:text-[40px]/[140%]">Отлично, мы <b>приняли вашу заявку</b> и скоро свяжемся с вами для консультации</h3>

      <p class="lg:text-2xl/[140%]">в рабочее время с 9-00 до 18-00</p>
    </div>

    <div class="hidden lg:block mt-1 max-w-[480px] shrink-0 -mb-6 mr-[29px]">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/discussion.jpg" alt="">
    </div>
  </div>

  <div class="relative wrapper lg:px-[132px] lg:rounded-2xl bg-dark-blue-500 lg:bg-white-wave-right text-white overflow-hidden">
    <div class="pt-8 lg:pt-6 pb-10 lg:pb-0 lg:flex lg:flex-row lg:gap-[82px]">
      <div class="lg:hidden absolute h-[222px] lg:rounded-2xl bottom-0 right-0 left-0 bg-fade-bottom"></div>

      <div class="hidden lg:flex justify-center items-end shrink-0">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/iphone-instagram-desktop.png" alt="">
      </div>

      <div class="lg:pt-3 lg:pb-10">
        <div class="mb-7 lg:mb-[64px] space-y-2">
          <p class="description">
            А пока ждете звонка или сообщения в мессенджер —
          </p>
          <h5 class="lg:text-2xl/[140%]">
            подписывайтесь на <b>наш Instagram</b>,
          </h5>
          <p class="description">
            чтобы узнать ещё больше, чем речевая аналитика может помочь вам и вашей компании
          </p>
        </div>

        <div class="lg:hidden flex justify-center">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/iphone-instagram.png" alt="">
        </div>

        <div class="wrapper lg:flex-row lg:items-center max-lg:absolute max-lg:bottom-[38px] max-lg:right-0 max-lg:left-0 gap-4 z-10">
          <div class="p-3 h-fit flex justify-center items-center rounded-xs text-dark-blue-500 bg-white">
            <p>@evrika360com</p>
          </div>

          <a href="https://www.instagram.com/evrika360com" class="p-3 h-fit flex justify-center items-center gap-2 rounded-xs text-white bg-blue-100">
            <div>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/instagram-light-icon.png" alt="">
            </div>
            <p>Подписаться в Instagram</p>
          </a>
        </div>
      </div>
    </div>
  </div>

</main>

<?php get_footer('empty'); ?>