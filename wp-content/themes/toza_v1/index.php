<?php get_header() ?>
<main>
  <h1>UI Elements</h1>
  <h2>Icons</h2>
  <div class="icons">
    <img class="icon" src="<? echo TOZA_THEME_ROOT ?>/img/icons/Account.svg" alt="">
  </div>
  <!--<div class="popup popup--show">-->
  <div class="popup">
    <div class="navigation-mobile">
      <?php 
        wp_nav_menu(array(
          'theme_location' => 'top',
          'container' => null,
          'container_class' => 'navigation-mobile',
          'menu_class' => 'navigation-mobile__list',
          'menu_id' => 'nav'
        ));
      ?>
      <div class="current-user">
        <img class="current-user__avatar" src="<? echo TOZA_THEME_ROOT ?>/img/avatar_user.png" alt="Джин Дуо">
        <div class="current-user-info">
          <span class="current-user-info__title">Джин Дуо</span>
          <a class="current-user-info__email" href="mailto:jin.duo@gmail.com">jin.duo@gmail.com</a>
        </div>
        <ul class="current-user__list">
          <li class="current-user__list-item">
            <a class="current-user__item-link" href="/account"><img class="icon" src="<? echo TOZA_THEME_ROOT ?>/img/icons/Account.svg" alt="Личный кабинет">Личный кабинет</a>
          </li>
          <li class="current-user__list-item">
            <a class="current-user__item-link" href="/logout"><img class="icon" src="<? echo TOZA_THEME_ROOT ?>/img/icons/Exit.svg" alt="Выйти">Выйти</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  
</main>

<?php get_footer() ?>