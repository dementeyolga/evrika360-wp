<?php
/*
  Template Name: Политика конфиденциальности
 */
?>

<?php get_header('not-fixed'); ?>

<main class="max-md:pt-28 max-sm:px-2 wrapper gap-3 md:gap-6">
  <h1 class="mx-auto text-center">Политика конфиденциальности</h1>
  <div class="w-full max-w-[700px] mx-auto">
    <div class="pdf-embed-container">
      <?php the_content() ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>