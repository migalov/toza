<?php

  define('TOZA_THEME_ROOT', get_template_directory_uri());
  define('TOZA_IMG_DIR', TOZA_THEME_ROOT . '/img' );

  add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );
  function theme_add_scripts() {
    // подключаем файл стилей темы
    wp_enqueue_style( 'style-css', TOZA_THEME_ROOT . '/css/style.css' );
  }
?>