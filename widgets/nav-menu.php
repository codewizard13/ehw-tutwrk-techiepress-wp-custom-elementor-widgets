<?php

namespace EHW\ElementorWidgets\Widgets;

use Elementor\Widget_Base;

/**
 * Widget Name: Nav Menu
 * Author: Eric Hepperle
 * Description: Custom Elementor widget plugin to render videos and livestreams from various sources and formats (Rumble, Facebook, YouTube, Vimeo, etc.)
 * Version: 0.1.0
 * Text Domain: ehw-elementor-widgets 
 */

 class Nav_Menu extends Widget_Base {

  public function get_name() {
    return 'ehw-menu';
  }

  public function get_title() {
    return __( 'EHW Menu', 'ehw-elementor-widgets' );
  }

  public function get_icon() {
    // return 'fa fa-menu';
    return 'eicon-nav-menu';
  }

  public function get_categories() {
    return ['ehw', 'basic', 'favorites'];
  }

  public function _register_control() {

  }

  // Front end
  protected function render() {
    echo wp_nav_menu(
      [
        'menu_class' => 'ehw-menu',
      ]
    );

  }

  // Back end
  protected function _content_template() {
    echo wp_nav_menu(
      [
        'menu_class' => 'ehw-menu',
      ]
    );

  }
  
 }