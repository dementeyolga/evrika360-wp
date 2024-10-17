<?php
define('EVRIKA_THEME_DIR_URI', get_template_directory_uri());
define('EVRIKA_THEME_DIR', get_template_directory());

class Evrika360_Theme {
  private static $instance = null;

  private function __construct() {
    add_action('wp_enqueue_scripts', [$this, 'enqueue_styles']);
  }

  public function enqueue_styles() {
    wp_enqueue_style('evrika-theme', get_stylesheet_uri());
  }

  public static function get_instance() {
    if (self::$instance == null) {
      self::$instance = new self;
    }
    return self::$instance;
  }
}

Evrika360_Theme::get_instance();
