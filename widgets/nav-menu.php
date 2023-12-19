<?php

namespace EHW\ElementorWidgets\Widgets;

use Elementor\Widget_Base;

/**
 * Have the widget code for the Custom Elementor Nav Menu
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
    return ['basic'];
  }

  public function _register_control() {

  }

  protected function render() {

  }

  protected function _content_template() {

  }

 }
