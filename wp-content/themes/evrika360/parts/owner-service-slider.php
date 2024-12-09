<section class="embla owner-service-embla">
  <div class="embla__viewport owner-service-embla__viewport">
    <div class="embla__container">
      <?php
      $fields = CFS()->get('owner_features_slider');
      foreach ($fields as $field): ?>
        <div class="embla__slide">
          <div class="owner-service-slide <?php if ($field['owner_features_slider_has_arc']) echo 'lg:bg-vertical-arc' ?>">
            <div class="lg:max-w-[45.5%] h-full flex flex-col gap-y-6 justify-center">
              <h3>
                <?= $field['owner_features_slider_title'] ?>
              </h3>
              <p class="text-lg lg:text-[26px] text-orange-400 font-semibold">
                <?= $field['owner_features_slider_subtitle'] ?>
              </p>

              <div class="lg:absolute lg:right-0 lg:top-0 lg:h-full lg:flex lg:items-center w-full md:max-w-[70%] lg:max-w-[48%] self-end">
                <img class="<?php
                            if ($field['owner_features_slider_has_arc']) {
                              echo 'max-lg:w-full max-lg:h-auto lg:max-h-[360px]';
                            } else {
                              echo 'max-lg:h-[350px] max-lg:max-w-max ';
                            }
                            ?>
                            " src="<?= $field['owner_features_slider_image'] ?>" alt="демо сервиса Эврика360">
              </div>

              <p class="text-base lg:text-lg"><?= $field['owner_features_slider_description'] ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="embla__buttons">
    <button class="rotate-180 embla__button embla__button--prev owner-service-embla__button--prev" type="button">
      <?php include 'arrow-right.php' ?>
    </button>

    <button class="embla__button embla__button--next owner-service-embla__button--next" type="button">
      <?php include 'arrow-right.php' ?>
    </button>
  </div>

  <div class="embla__dots owner-service-embla__dots !mt-0 max-lg:mb-20"></div>
</section>