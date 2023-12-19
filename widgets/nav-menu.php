<?php

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

 }