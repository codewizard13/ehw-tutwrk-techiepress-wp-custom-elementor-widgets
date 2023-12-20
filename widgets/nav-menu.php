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
    // TODO: Add our own category in Elementor
    return ['ehw', 'basic', 'favorites'];
  }

  public function _register_control() {

  }

  protected function render() {
    ?>
      <div>Hello widget</div>
    <?php
  }

  protected function _content_template() {
    ?>
      <div>Hello widget</div>
    <?php
  }

 }
