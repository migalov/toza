<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Source+Sans+3&display=swap" rel="stylesheet">
  <?php wp_head() ?>
  <link rel="shortcut icon" href="<? echo TOZA_IMG_DIR ?>/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="16x16" href="<? echo TOZA_IMG_DIR ?>/favicon/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="32x32" href="<? echo TOZA_IMG_DIR ?>/favicon/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="192x192" href="<? echo TOZA_IMG_DIR ?>/favicon/favicon-192x192.png">
  <link rel="apple-touch-icon" sizes="192x192" href="<? echo TOZA_IMG_DIR ?>/favicon/favicon-192x192.png">
</head>
<body>
 <header class="header">
    <div class="header-wrap container">
      <?php 
        wp_nav_menu(array(
          'theme_location' => 'top',
          'container' => 'nav',
          'container_class' => 'navigation-desktop',
          'menu_class' => null,
          'menu_id' => 'nav'
        ));
      ?>
  </header>
          