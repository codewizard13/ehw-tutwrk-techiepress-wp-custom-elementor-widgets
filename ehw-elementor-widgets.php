<?php

/**
 * Plugin Name: EHW Elementor Widgets
 * Plugin URI:
 * Author: Eric Hepperle
 * Author URI: EricHepperleDesigns.com
 * Description: Custom Elementor widget library
 * Version: 0.1.0
 * License: 
 * License URL:
 * Text Domain: ehw-elementor-widgets 
 */

namespace EHW\ElementorWidgets;

use EHW\ElementorWidgets\Widgets\Nav_Menu;

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
    add_action( 'plugin_loaded', [ $this, 'init_plugin'] );
    add_action( 'elementor/elements/categories_registered', [ $this, 'create_new_category'] );
    add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets'] );
  }

  public function i18n() {
    load_plugin_textdomain( 'ehw-elementor-widgets');
  }

  public function init_plugin() {
    // check php version
    // check elementor installed
    // bring in the widget classes
    // $this->init_widgets();
    // bring in the controls
  }

  public function init_controls() {

  }

  public function init_widgets() {
    // Require the widget class
    require_once __DIR__ . '/widgets/nav-menu.php';

    // Register widget with elementor
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Nav_Menu() );
  }


  public static function get_instance() {
    if ( null == self::$_instance ) {
      self::$_instance = new Self();
    }

    return self::$_instance;
  }


  public function create_new_category( $elements_manager ) {

    $elements_manager->add_category(

      'ehw',
      [
        'title' => __( 'EHW', 'ehw-elementor-widgets' ),
        'icon' => 'fa fa-plug'
      ],

    );


  }




}

EHWElementorWidgets::get_instance();

