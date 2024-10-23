<?php
define('EVRIKA_THEME_DIR_URI', get_template_directory_uri());
define('EVRIKA_THEME_DIR', get_template_directory());

class Evrika360_Theme {
  private static $instance = null;

  private function __construct() {
    add_action('wp_enqueue_scripts', [$this, 'enqueue_styles']);
    add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
  }

  public function enqueue_styles() {
    wp_enqueue_style('evrika-theme', get_stylesheet_uri());
  }

  public function enqueue_scripts() {
    wp_enqueue_script('embla-carousel', get_template_directory_uri() . '/assets/js/slider/embla-carousel.umd.js');

    wp_enqueue_script('embla-carousel-autoheight', get_template_directory_uri() . '/assets/js/slider/embla-carousel-auto-height.umd.js', array('embla-carousel'),);

    wp_enqueue_script('dept-slider', get_template_directory_uri() . '/assets/js/slider/dept-slider.js', array('embla-carousel', 'embla-carousel-autoheight'), false, true);

    wp_enqueue_script('data-security-slider', get_template_directory_uri() . '/assets/js/slider/data-security-slider.js', array('embla-carousel', 'embla-carousel-autoheight'), false, true);

    wp_enqueue_script('prices-slider', get_template_directory_uri() . '/assets/js/slider/prices-slider.js', array('embla-carousel', 'embla-carousel-autoheight'), false, true);

    wp_enqueue_script('feature-tabs-slider', get_template_directory_uri() . '/assets/js/slider/feature-tabs-slider.js', array('embla-carousel'), false, true);

    wp_enqueue_script('assessment-tabs-slider', get_template_directory_uri() . '/assets/js/slider/assessment-tabs-slider.js', array('embla-carousel'), false, true);

    wp_enqueue_script('automatization-tabs-slider', get_template_directory_uri() . '/assets/js/slider/automatization-tabs-slider.js', array('embla-carousel'), false, true);
  }

  public static function get_instance() {
    if (self::$instance == null) {
      self::$instance = new self;
    }
    return self::$instance;
  }
}

Evrika360_Theme::get_instance();
