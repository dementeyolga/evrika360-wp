<section class="embla feature-price-embla">
  <div class="embla__viewport feature-price-embla__viewport">
    <div class="embla__container">
      <!-- FUNCTIONALITY -->
      <div class="embla__slide">
        <div class="feature-price-slide">
          <div class="table-unit table-heading">
            <?= CFS()->get('prices_additional_features_1_title') ?>
          </div>

          <div class="flex flex-col grow">
            <?php
            $fields = CFS()->get('prices_additional_features_1_points');
            foreach ($fields as $index => $field): ?>
              <div class="table-unit <?php if ($index == count($fields) - 1) echo 'grow' ?>">
                <?= $field['point'] ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>


      <div class="embla__slide">
        <div class="feature-price-slide grid grid-cols-2 gap-[1px]">
          <div class="flex flex-col">
            <div class="table-unit table-heading lg:text-center">
              <?= CFS()->get('prices_additional_features_2_title') ?>
            </div>

            <div class="flex flex-col grow lg:text-center">
              <?php
              $fields = CFS()->get('prices_additional_features_2_points');
              foreach ($fields as $index => $field): ?>
                <div class="table-unit <?php if ($index == count($fields) - 1) echo 'grow' ?>">
                  <?= $field['point'] ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="flex flex-col">
            <div class="table-unit table-heading lg:text-center">
              <?= CFS()->get('prices_additional_features_3_title') ?>
            </div>

            <div class="flex flex-col grow font-bold lg:text-center">
              <?php
              $fields = CFS()->get('prices_additional_features_3_points');
              foreach ($fields as $index => $field): ?>
                <div class="table-unit <?php if ($index == count($fields) - 1) echo 'grow' ?>">
                  <?= $field['point'] ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="embla__buttons hidden">
    <button class="embla__button embla__button--prev feature-price-embla__button--prev" type="button">
    </button>

    <button class="embla__button embla__button--next feature-price-embla__button--next" type="button">
    </button>
  </div>

  <div class="hidden embla__dots feature-price-embla__dots"></div>
</section>