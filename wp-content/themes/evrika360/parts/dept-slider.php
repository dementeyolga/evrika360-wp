<section class="embla dept-embla">
  <div class="embla__viewport dept-embla__viewport">
    <div class="embla__container">
      <?php
      $fields = CFS()->get('dept_slider');
      foreach ($fields as $field) {
      ?>
        <div class="embla__slide">
          <div class="dept-slide">
            <div class="image-container">
              <img src="<?= $field['slide_image']; ?>" alt="">
            </div>
            <div class="content">
              <h3><?= $field['slide_title']; ?></h3>
              <ul>
                <?php
                $advantages = $field['slide_advantages'];
                foreach ($advantages as $advantage) {
                ?>
                  <li class="flash-li"><?= $advantage['slide_advantage']; ?></li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

  <div class="embla__buttons">
    <button class="rotate-180 embla__button embla__button--prev dept-embla__button--prev" type="button">
      <?php include 'arrow-right.php' ?>
    </button>

    <button class="embla__button embla__button--next dept-embla__button--next" type="button">
      <?php include 'arrow-right.php' ?>
    </button>
  </div>

  <div class="embla__dots dept-embla__dots"></div>
</section>