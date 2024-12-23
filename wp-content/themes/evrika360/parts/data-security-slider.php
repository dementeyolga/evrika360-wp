<div class="embla data-security-embla">
  <div class="embla__viewport data-security-embla__viewport">
    <div class="embla__container">

      <?php
      $fields = CFS()->get('safety_slider');
      foreach ($fields as $field): ?>

        <div class="embla__slide">
          <div class="data-security-slide">
            <div class="mb-6">
              <img src="<?= $field['safety_slider_icon'] ?>" alt="">
            </div>

            <p class="h4 mb-4">
              <?= $field['safety_slider_title'] ?>
            </p>

            <p class="text-grey-400">
              <?= $field['safety_slider_text'] ?>
            </p>
          </div>
        </div>

      <?php endforeach; ?>
    </div>
  </div>

  <div class="embla__buttons">
    <button class="rotate-180 embla__button embla__button--prev data-security-embla__button--prev" type="button">
      <?php include 'arrow-right.php' ?>
    </button>

    <button class="embla__button embla__button--next data-security-embla__button--next" type="button">
      <?php include 'arrow-right.php' ?>
    </button>
  </div>

  <div class="embla__dots data-security-embla__dots"></div>
</div>