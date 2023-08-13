<?php get_header() ?>
<main>
  <h1>UI Elements</h1>
  <!--<h2>Icons</h2>
  <div class="icons">
    <img class="icon" src="<? echo TOZA_THEME_ROOT ?>/img/icons/Account.svg" alt="">
  </div>
  <div class="popup popup--show">
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
  <h2>Mini-popups</h2>
  <div class="mini-popup">
    <p>На данный  момент в корзине нет товаров.</p>
  </div>-->
  <h2>Product card</h2>
  <div class="container">
    <ul class="product-list">
      <li class="product-card">
        <img class="product-card__preview" src="<? echo TOZA_THEME_ROOT ?>/img/product-image.png" alt="" />
        <div class="product-card-params">
          <div class="product-card__names">
            <span class="product-card__category">Микс</span>
            <h3 class="product-card__title">Ассорти орехов и цукатов</h3>
          </div>
          <div class="product-card__prices">
            <span class="product-card__now-price">490 ₽</span>
            <span class="product-card__old-price">1050 ₽ </span>
            <span class="product-card__price-for-weight">Цена за 300 грамм</span>
          </div>
          <div class="product-card__buttons">
            <a href="#" class="product-card__button btn btn--grey">Подробнее</a>
            <a href="#" class="product-card__button btn btn--primary">Купить</a>
          </div>
        </div>
      </li>
    </ul>
  </div>
  
  
  
  
</main>

<?php get_footer() ?>