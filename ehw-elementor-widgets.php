<?php

/**
 * Plugin Name: EHW Elementor Widgets
 * Plugin URI:
 * Author: Eric Hepperle
 * Author URI: EricHepperleDesigns.com
 * Description: Custom Elementor widget plugin to render videos and livestreams from various sources and formats (Rumble, Facebook, YouTube, Vimeo, etc.)
 * Version: 0.1.0
 * License: 
 * License URL:
 * Text Domain: ehw-elementor-widgets 
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class EHWElementorWidgets {

  const VERSION = '0.1.0';
  const ELEMENTOR_MINIMUM_VERSION = '3.0.0';
  const PHP_MINIMUM_VERSION = '7.4';

  private static $_instance = null;


  public function __construct() {
    add_action( 'init', [ $this, 'i18n'] );
    add_action( 'plugin_loaded', [ $this, 'init_plugin']);
  }

  public function i18n() {
    load_plugin_textdomain( 'ehw-elementor-widgets');
  }

  public function init_plugin() {
    // check php version
    // check elementor installed
    // bring in the widget classes
    // bring in the controls
  }

  public function init_controls() {

  }

  public function init_widgets() {

  }


  public static function get_instance() {
    if ( null == self::$_instance ) {
      self::$_instance = new Self();
    }

    return self::$_instance;
  }

}

EHWElementorWidgets::get_instance();