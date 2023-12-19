<?php

/**
 * Plugin Name: Multi Video Embed
 * Plugin URI:
 * Author: Eric Hepperle
 * Author URI: EricHepperleDesigns.com
 * Description: Custom Elementor widget plugin to render videos and livestreams from various sources and formats (Rumble, Facebook, YouTube, Vimeo, etc.)
 * Version: 0.1.0
 * License: 
 * License URL:
 * Text Domain: ehw-multi-video-embed 
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class MultiVideoEmbed {

  const VERSION = '0.1.0';
  const ELEMENTOR_MINIMUM_VERSION = '3.0.0';
  const PHP_MINIMUM_VERSION = '7.4';

  private static $_instance = null;


  public function __construct() {

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