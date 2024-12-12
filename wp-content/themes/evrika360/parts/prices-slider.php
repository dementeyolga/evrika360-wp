<div class="embla prices-embla">
  <div class="embla__viewport prices-embla__viewport">
    <div class="embla__container">

      <!-- Plan #1 -->
      <div class="embla__slide">
        <div class="prices-slide bg-light-blue-100 border-light-blue-200">
          <p class="h3 w-full flex justify-between font-bold text-blue-100">
            <span><?= CFS()->get('pricing_1_name') ?></span>
            <span><?= CFS()->get('pricing_1_price') ?></span>
          </p>

          <div class="space-y-5">
            <div class="grid grid-cols-2 gap-6">
              <div class="space-y-1">
                <p class="h3 text-grey-500"><?= CFS()->get('pricing_1_checklist_points') ?></p>
                <div class="description">
                  Блоки чек-листа
                </div>
              </div>
              <div class="space-y-1">
                <p class="h3 text-grey-500"><?= CFS()->get('pricing_1_minutes') ?></p>
                <div class="description">
                  Минут
                </div>
              </div>
            </div>

            <div class="space-y-1">
              <p class="h3 text-grey-500"><?= CFS()->get('pricing_1_api_integrations') ?></p>
              <div class="description">
                Интеграции с системами по API
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Plan #2 -->
      <div class="embla__slide">
        <div class="prices-slide bg-green-100 borer border-green-200">
          <div class="w-full flex justify-between font-bold text-green-500">
            <div class="flex items-center gap-2">
              <p class="h3"><?= CFS()->get('pricing_2_name') ?></p>
              <div class="card-badge py-1 bg-dark-blue-600">Popular</div>
            </div>

            <p class="h3"><?= CFS()->get('pricing_2_price') ?></p>
          </div>

          <div class="space-y-5">
            <div class="grid grid-cols-2 gap-6">
              <div class="space-y-1">
                <p class="h3 text-grey-500"><?= CFS()->get('pricing_2_checklist_points') ?></p>
                <div class="description">
                  Блоки чек-листа
                </div>
              </div>
              <div class="space-y-1">
                <p class="h3 text-grey-500"><?= CFS()->get('pricing_2_minutes') ?></p>
                <div class="description">
                  Минут
                </div>
              </div>
            </div>

            <div class="space-y-1">
              <p class="h3 text-grey-500"><?= CFS()->get('pricing_2_api_integrations') ?></p>
              <div class="description">
                Интеграции с системами по API
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Plan #3 -->
      <div class="embla__slide">
        <div class="prices-slide border border-yellow-200 bg-yellow-100">
          <p class="h3 w-full flex justify-between font-bold text-yellow-500">
            <span><?= CFS()->get('pricing_3_name') ?></span>
            <span><?= CFS()->get('pricing_3_price') ?></span>
          </p>

          <div class="space-y-5">
            <div class="grid grid-cols-2 gap-6">
              <div class="space-y-1">
                <p class="h3 text-grey-500"><?= CFS()->get('pricing_3_checklist_points') ?></p>
                <div class="description">
                  Блоки чек-листа
                </div>
              </div>
              <div class="space-y-1">
                <p class="h3 text-grey-500"><?= CFS()->get('pricing_3_minutes') ?></p>
                <div class="description">
                  Минут
                </div>
              </div>
            </div>

            <div class="space-y-1">
              <p class="h3 text-grey-500"><?= CFS()->get('pricing_3_api_integrations') ?></p>
              <div class="description">
                Интеграции с системами по API
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Plan #4 -->
      <div class="embla__slide">
        <div class="prices-slide bg-orange-250 border border-orange-300">
          <p class="h3 w-full flex justify-between font-bold text-orange-400">
            <span><?= CFS()->get('pricing_4_name') ?></span>
            <span class="text-xs text-right"><?= CFS()->get('pricing_4_price') ?></span>
          </p>

          <div class="space-y-5">
            <div class="grid grid-cols-2 gap-6">
              <div class="space-y-1">
                <p class="h3 text-grey-500"><?= CFS()->get('pricing_4_checklist_points') ?></p>
                <div class="description">
                  Блоки чек-листа
                </div>
              </div>
              <div class="space-y-1">
                <p class="h3 text-grey-500"><?= CFS()->get('pricing_4_minutes') ?></p>
                <div class="description">
                  Минут
                </div>
              </div>
            </div>

            <div class="space-y-1">
              <p class="h3 text-grey-500"><?= CFS()->get('pricing_4_api_integrations') ?></p>
              <div class="description">
                Интеграции с системами по API
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="embla__buttons hidden">
    <button class="embla__button embla__button--prev prices-embla__button--prev" type="button">
    </button>

    <button class="embla__button embla__button--next prices-embla__button--next" type="button">
    </button>
  </div>

  <div class="hidden embla__dots prices-embla__dots"></div>

  <p class="mt-5 text-sm">Оплата производится в белорусских рублях по курсу НБ РБ на день оплаты <br> Не является публичной офертой</p>
</div>