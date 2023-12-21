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

    $settings = $this->get_settings_for_display();
    $this->add_inline_editing_attributes('label_heading', 'basic');
    $this->add_render_attribute(
      'label_heading',
      [
        'class' => ['advertisement__label-heading'],
      ]
    );

    ?>

    <div class="advertisement">
      <div <?php echo $this->get_render_attribute_string('label_heading') ?> >
        <?php echo $settings['label_heading']; ?>
      </div>

      <div class="advertisement__content">
        <div class="advertisement__content__heading">
          <?php echo $settings['content_heading']; ?>
        </div>
        <div class="advertisement__content__copy">
          <?php echo $settings['content']; ?>
        </div>
      </div>
    </div>


    <?php

  }

  // Back end
  protected function content_template() {
  
  ?>
  
  <h3>{{{ settings.label_heading }}}</h3>

  <?php

  }

  public function get_style_depends() {
    return ['ehw-menu-css'];
  }

  public function get_script_depends() {
    return ['ehw-menu-js'];
  }

 }
