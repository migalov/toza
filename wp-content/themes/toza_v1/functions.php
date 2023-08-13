<?php

  define('TOZA_THEME_ROOT', get_template_directory_uri());
  define('TOZA_IMG_DIR', TOZA_THEME_ROOT . '/img' );

  add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );
  function theme_add_scripts() {
    // подключаем файл стилей темы
    wp_enqueue_style( 'style-css', TOZA_THEME_ROOT . '/css/style.css', array(), null );
    wp_enqueue_style( 'popup-css', TOZA_THEME_ROOT . '/css/popup.css', array(), null );
    wp_enqueue_style( 'header-css', TOZA_THEME_ROOT . '/css/header.css', array(), null );
    wp_enqueue_style( 'normalize-css', TOZA_THEME_ROOT . '/css/normalize.min.css', array(), null );
  }

  function  theme_register_nav_menu () {
    register_nav_menus ( array (
        'top'  =>  'Меню в шапке'
    ));
  }

  add_action ( 'after_setup_theme' , 'theme_register_nav_menu' );
?>