<?php
define('EVRIKA_THEME_DIR_URI', get_template_directory_uri());
define('EVRIKA_THEME_DIR', get_template_directory());

class Evrika360_Theme {
  private static $instance = null;

  private function __construct() {
    add_action('wp_enqueue_scripts', [$this, 'enqueue_styles']);
    add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
    add_action(
      'after_setup_theme',
      [$this, 'add_support']
    );
  }

  public function enqueue_styles() {
    wp_enqueue_style('evrika-theme', get_stylesheet_uri());
    wp_enqueue_style('intl-tel-input', get_template_directory_uri() . '/assets/lib/intl-tel-input/css/intlTelInput.css');
  }

  public function enqueue_scripts() {
    wp_enqueue_script('embla-carousel', get_template_directory_uri() . '/assets/lib/embla-carousel/embla-carousel.umd.js');

    wp_enqueue_script('embla-carousel-autoheight', get_template_directory_uri() . '/assets/lib/embla-carousel/embla-carousel-auto-height.umd.js', array('embla-carousel'),);

    wp_enqueue_script('dept-slider', get_template_directory_uri() . '/assets/js/slider/dept-slider.js', array('embla-carousel', 'embla-carousel-autoheight'), false, true);

    wp_enqueue_script('data-security-slider', get_template_directory_uri() . '/assets/js/slider/data-security-slider.js', array('embla-carousel', 'embla-carousel-autoheight'), false, true);

    wp_enqueue_script('prices-slider', get_template_directory_uri() . '/assets/js/slider/prices-slider.js', array('embla-carousel', 'embla-carousel-autoheight'), false, true);

    wp_enqueue_script('feature-price-slider', get_template_directory_uri() . '/assets/js/slider/feature-price-slider.js', array('embla-carousel', 'embla-carousel-autoheight'), false, true);

    wp_enqueue_script('feature-tabs-slider', get_template_directory_uri() . '/assets/js/slider/feature-tabs-slider.js', array('embla-carousel'), false, true);

    wp_enqueue_script('assessment-tabs-slider', get_template_directory_uri() . '/assets/js/slider/assessment-tabs-slider.js', array('embla-carousel'), false, true);

    wp_enqueue_script('automatization-tabs-slider', get_template_directory_uri() . '/assets/js/slider/automatization-tabs-slider.js', array('embla-carousel'), false, true);

    wp_enqueue_script('owner-service-slider', get_template_directory_uri() . '/assets/js/slider/owner-service-slider.js', array('embla-carousel', 'embla-carousel-autoheight'), false, true);

    wp_enqueue_script('increase-sales-slider', get_template_directory_uri() . '/assets/js/slider/increase-sales-slider.js', array('embla-carousel', 'embla-carousel-autoheight'), false, true);

    wp_enqueue_script('header-scroll', get_template_directory_uri() . '/assets/js/scroll/header-scroll.js', array(), false, true);

    wp_enqueue_script('burger-menu', get_template_directory_uri() . '/assets/js/menu/burger-menu.js', array(), false, true);

    wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu/nav-menu.js', array(), false, true);

    wp_enqueue_script('popups', get_template_directory_uri() . '/assets/js/popups/popups.js', array(), false, true);

    wp_enqueue_script('chat-animation', get_template_directory_uri() . '/assets/js/scroll/chat-animation.js', array(), false, true);

    wp_enqueue_script('callback-popup-validation', get_template_directory_uri() . '/assets/js/popups/callback-popup-validation.js', array('popups'), false, true);

    wp_enqueue_script('intl-tel-input-with-utils', get_template_directory_uri() . '/assets/lib/intl-tel-input/js/intlTelInputWithUtils.min.js', array(), false, true);

    wp_enqueue_script('intl-phone-ru-translation', get_template_directory_uri() . '/assets/lib/intl-tel-input/js/intlTelInputRuTranslation.js', array(), false, true);

    wp_enqueue_script('intl-phone-input', get_template_directory_uri() . '/assets/js/popups/intl-phone-input.js', array('intl-tel-input-with-utils', 'intl-phone-ru-translation', 'popups'), false, true);
  }

  public function add_support() {
    add_theme_support('html5', ['script', 'style']);
    add_theme_support('title-tag');
  }

  public static function get_instance() {
    if (self::$instance == null) {
      self::$instance = new self;
    }
    return self::$instance;
  }
}

Evrika360_Theme::get_instance();
