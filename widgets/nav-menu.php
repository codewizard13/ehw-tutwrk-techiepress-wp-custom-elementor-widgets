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

  public function __construct( $data=[] , $args=null ) {
    parent::__construct( $data, $args );

    // wp_enqueue_script();
    wp_enqueue_script( 'ehw-menu-js', plugin_dir_url( __FILE__ ) . '../assets/js/menu.js' );
    wp_enqueue_style( 'ehw-menu-css', plugin_dir_url( __FILE__ ) . '../assets/css/menu.css' );
  }

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

  public function _register_controls() {

    $this->start_controls_section(
      'section_content',
      [
        'label' => 'Settings',
      ]
    );

    $this->add_control(
      'label_heading',
      [
        'label' => 'Label Heading',
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'My Example Heading'
      ]
    );

    $this->add_control(
      'content_heading',
      [
        'label' => 'Content Heading',
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'My Other Example Heading'
      ]
    );

    $this->add_control(
      'content',
      [
        'label' => 'Content',
        'type' => \Elementor\Controls_Manager::WYSIWYG,
        'default' => 'Some example content. Start EDITING Here.'
      ]
    );


    $this->end_controls_section();


  }





  // Front end
  protected function render() {
    echo wp_nav_menu(
      [
        'container' => '',
        'menu_class' => 'ehw-menu',
      ]
    );

  }

  // Back end
  protected function _content_template() {
    echo wp_nav_menu(
      [
        'container' => '',
        'menu_class' => 'ehw-menu',
      ]
    );

  }

  public function get_style_depends() {
    return ['ehw-menu-css'];
  }

  public function get_script_depends() {
    return ['ehw-menu-js'];
  }

 }
