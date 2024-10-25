<?php
/*
 Template Name: Thank you Page
 */
?>

<?php get_header('thanks'); ?>

<main class="pt-[120px] bg-blue-circle">
  <div class="mb-[65px] wrapper space-y-6">
    <h3 class="leading-[140%]">Отлично, мы <b>приняли вашу заявку</b> и скоро свяжемся с вами для консультации</h3>

    <p>в рабочее время с 9-00 до 18-00</p>
  </div>


  <div class="relative wrapper pt-8 pb-11 pb-10 bg-dark-blue-500 text-white">
    <div class="absolute h-[222px] bottom-0 right-0 left-0 bg-fade-bottom"></div>

    <div class="mb-7 space-y-2">
      <p class="description">
        А пока ждете звонка или сообщения в мессенджер —
      </p>
      <h5>
        подписывайтесь на <b>наш Instagram</b>,
      </h5>
      <p class="description">
        чтобы узнать ещё больше, чем речевая аналитика может помочь вам и вашей компании
      </p>
    </div>

    <div class="flex justify-center">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/iphone-instagram.png" alt="">
    </div>

    <div class="wrapper absolute bottom-[38px] right-0 left-0 space-y-4 z-10">
      <a class="p-3 flex justify-center items-center rounded-xs text-dark-blue-500 bg-white">
        <p>@evrika360com</p>
      </a>

      <a class="p-3 flex justify-center items-center gap-2 rounded-xs text-white bg-blue-100">
        <div>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/instagram-light-icon.png" alt="">
        </div>
        <p>Подписаться в Instagram</p>
      </a>
    </div>
  </div>
</main>

<?php get_footer('thanks'); ?>