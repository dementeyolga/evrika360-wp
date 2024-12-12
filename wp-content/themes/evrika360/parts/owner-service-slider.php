<div class="embla owner-service-embla">
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

              <div class="lg:absolute lg:right-0 lg:top-0 lg:h-full flex <?php if ($field['owner_features_slider_has_arc']) echo 'justify-center' ?> items-center w-full lg:max-w-[48%] self-end">
                <img class="<?php
                            if ($field['owner_features_slider_has_arc']) {
                              echo 'max-lg:max-w-full max-lg:w-auto max-lg:h-auto max-lg:max-h-[550px] lg:max-h-[360px]';
                            } else {
                              echo 'max-lg:max-w-max max-lg:min-h-[350px] max-lg:max-h-[550px]';
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

  <div class="embla__dots owner-service-embla__dots lg:mt-6 max-lg:mb-20"></div>
</div>