<div class="embla increase-sales-embla">
  <div class="embla__viewport increase-sales-embla__viewport lg:mb-6 xl:mb-0">
    <div class="embla__container">
      <?php
      $fields = CFS()->get('sales_features_loop');
      foreach ($fields as $field): ?>
        <div class="embla__slide">
          <div class="increase-sales-slide">
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
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="embla__buttons">
    <button class="rotate-180 embla__button embla__button--prev increase-sales-embla__button--prev" type="button">
      <?php include 'arrow-right.php' ?>
    </button>

    <button class="embla__button embla__button--next increase-sales-embla__button--next" type="button">
      <?php include 'arrow-right.php' ?>
    </button>
  </div>

  <div class="embla__dots increase-sales-embla__dots !mt-0"></div>
</div>