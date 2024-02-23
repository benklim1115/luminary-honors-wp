<?php

wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/assets/css/main.css', false, '1.1', 'all');
wp_enqueue_style( 'overrides', get_template_directory_uri() . '/dist/assets/css/overrides.css', false, '1.1', 'all');
wp_enqueue_script( 'flame', get_template_directory_uri() . '/dist/assets/js/flame.js', false, '1.1', 'all');
wp_enqueue_script( 'index', get_template_directory_uri() . '/dist/assets/js/index.js', false, '1.1', 'all');
wp_enqueue_script( 'flame-2', get_template_directory_uri() . '/dist/assets/js/flame-2.js', false, '1.1', 'all');
wp_enqueue_script( 'flame-3', get_template_directory_uri() . '/dist/assets/js/flame-3.js', false, '1.1', 'all');

function register_theme_menus() {
    register_nav_menus(
      array(
        'main-nav' => __( 'Main Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_theme_menus' );

require_once('library/luminary-honors/customizer/logo-upload.php' );
require_once('library/luminary-honors/customizer/customizer-tweaks.php' );
?>
