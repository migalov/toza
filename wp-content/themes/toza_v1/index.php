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
        // wp_nav_menu(array(
        //   'theme_location' => 'top',
        //   'container' => null,
        //   'container_class' => 'navigation-mobile',
        //   'menu_class' => 'navigation-mobile__list',
        //   'menu_id' => 'nav'
        // ));
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
  <div class="container">
  <h2>Product card</h2>
    <ul class="product-list">
      <li class="product-card">
        <img class="product-card__preview" src="<? echo TOZA_THEME_ROOT ?>/img/product-image.png" alt="" />
        <ul class="product-card__shortcut-list">
          <li class="shortcut shortcut--new">
            <img src="<? echo TOZA_THEME_ROOT ?>/img/shortcuts/New.svg" alt="" srcset="">
            <span class="shortcut__text">Новинка</span>
            <svg class="shortcut__triangle" xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
              <path d="M4 4L0 0H4V4Z" />
              <path d="M4 4L0 0H4V4Z" fill="black" fill-opacity="0.3"/>
            </svg>
          </li>
          <li class="shortcut shortcut--hit">
            <img src="<? echo TOZA_THEME_ROOT ?>/img/shortcuts/Bestseller.svg" alt="" srcset="">
            <span class="shortcut__text">Хит продаж</span>
            <svg class="shortcut__triangle" xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
              <path d="M4 4L0 0H4V4Z" />
              <path d="M4 4L0 0H4V4Z" fill="black" fill-opacity="0.3"/>
            </svg>
          </li>
        </ul>
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
    <!--
    <h2>Shortcuts</h2>
    <div class="shortcuts-list">
      <div class="shortcut shortcut--new">
        <img src="<? echo TOZA_THEME_ROOT ?>/img/shortcuts/New.svg" alt="" srcset="">
        <span class="shortcut__text">Новинка</span>
        <svg class="shortcut__triangle" xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
          <path d="M4 4L0 0H4V4Z" />
          <path d="M4 4L0 0H4V4Z" fill="black" fill-opacity="0.3"/>
        </svg>
      </div>
      <div class="shortcut shortcut--no-allowed">
        <img src="<? echo TOZA_THEME_ROOT ?>/img/shortcuts/NotAllowed.svg" alt="" srcset="">
        <span class="shortcut__text">Отсутствует</span>
        <svg class="shortcut__triangle" xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
          <path d="M4 4L0 0H4V4Z" />
          <path d="M4 4L0 0H4V4Z" fill="black" fill-opacity="0.3"/>
        </svg>
      </div>
      <div class="shortcut shortcut--hit">
        <img src="<? echo TOZA_THEME_ROOT ?>/img/shortcuts/Bestseller.svg" alt="" srcset="">
        <span class="shortcut__text">Хит продаж</span>
        <svg class="shortcut__triangle" xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
          <path d="M4 4L0 0H4V4Z" />
          <path d="M4 4L0 0H4V4Z" fill="black" fill-opacity="0.3"/>
        </svg>
      </div>
      <div class="shortcut shortcut--limited">
        <img src="<? echo TOZA_THEME_ROOT ?>/img/shortcuts/Limited.svg" alt="" srcset="">
        <span class="shortcut__text">Ограничено</span>
        <svg class="shortcut__triangle" xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
          <path d="M4 4L0 0H4V4Z" />
          <path d="M4 4L0 0H4V4Z" fill="black" fill-opacity="0.3"/>
        </svg>
      </div>
      
      <div class="shortcut shortcut--delivery">
        <img src="<? echo TOZA_THEME_ROOT ?>/img/shortcuts/Delivery.svg" alt="" srcset="">
        <span class="shortcut__text">Только доставка</span>
        <svg class="shortcut__triangle" xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
          <path d="M4 4L0 0H4V4Z" />
          <path d="M4 4L0 0H4V4Z" fill="black" fill-opacity="0.3"/>
        </svg>
      </div>
      <div class="shortcut shortcut--pickup">
        <img src="<? echo TOZA_THEME_ROOT ?>/img/shortcuts/Pickup.svg" alt="" srcset="">
        <span class="shortcut__text">Только самовывоз</span>
        <svg class="shortcut__triangle" xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
          <path d="M4 4L0 0H4V4Z" />
          <path d="M4 4L0 0H4V4Z" fill="black" fill-opacity="0.3"/>
        </svg>
      </div>
      <div class="shortcut shortcut--gift">
        <img src="<? echo TOZA_THEME_ROOT ?>/img/shortcuts/GiftDiscount.svg" alt="" srcset="">
        <span class="shortcut__text">Новогодняя скидка</span>
        <svg class="shortcut__triangle" xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
          <path d="M4 4L0 0H4V4Z" />
          <path d="M4 4L0 0H4V4Z" fill="black" fill-opacity="0.3"/>
        </svg>
      </div>
    </div>
    <h2>Features</h2>
    <ul class="features-list">
      <li class="feature-item">
        <img class="feature-item__icon" src="<? echo TOZA_THEME_ROOT ?>/img/features/motocycle.svg" alt="">
        <div class="feature-item__text">
          <h3 class="feature-item__title">Быстрая доставка</h3>
          <p class="feature-item__description">В пределах города Балашихи и других близлежащих городов мы осуществяем бесперебойную доставку продуктов</p>
        </div>
      </li>
      <li class="feature-item">
        <img class="feature-item__icon" src="<? echo TOZA_THEME_ROOT ?>/img/features/motocycle.svg" alt="">
        <div class="feature-item__text">
          <h3 class="feature-item__title">Быстрая доставка</h3>
          <p class="feature-item__description">В пределах города Балашихи и других близлежащих городов мы осуществяем бесперебойную доставку продуктов</p>
        </div>
      </li>
      <li class="feature-item">
        <img class="feature-item__icon" src="<? echo TOZA_THEME_ROOT ?>/img/features/motocycle.svg" alt="">
        <div class="feature-item__text">
          <h3 class="feature-item__title">Быстрая доставка</h3>
          <p class="feature-item__description">В пределах города Балашихи и других близлежащих городов мы осуществяем бесперебойную доставку продуктов</p>
        </div>
      </li>
    </ul>-->
    <h2>Checkboxes</h2>
    <ul class="checkboxes">
      <li>
        <label class="checkbox-container">Three
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <label class="radio-container">Three
          <input type="radio">
          <span class="checkmark"></span>
        </label>
      </li>
    </ul>
    <!--<form class="form" action="/" method="post">
        <h5>Подпишитесь на уведомления, чтобы не пропустить новости о новых товарах</h5>
        <label class="form__input">
          <input class="form__input-text" type="text">
          <span class="form__input-placeholder">Введите email</span>
        </label>
      <input type="submit" value="" />
    </form>-->
  </div>
  
  
  
  
</main>

<?php get_footer() ?>