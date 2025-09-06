<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php if (is_404()) : ?>
  <meta http-equiv="refresh" content=" 5; url=<?php echo esc_url(home_url("")); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="p-header l-header">
    <div class="p-header__inner">
      <h1 class="p-header__logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/common/logo_1.png")); ?>"
            alt=" ExciteCode Automobile ロゴ" />
        </a>
      </h1>
      <nav class="p-header__nav">
        <ul class="p-header__nav-list">
          <li class="p-header__nav-item u-underline__black">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a>
          </li>
          <li class="p-header__nav-item u-underline__black">
            <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">about</a>
          </li>
          <li class="p-header__nav-item u-underline__black">
            <a href="<?php echo esc_url( home_url( '/service' ) ); ?>">service</a>
          </li>
          <li class="p-header__nav-item u-underline__black">
            <a href="<?php echo esc_url( home_url( '/works' ) ); ?>">works</a>
          </li>
          <li class="p-header__nav-item u-underline__black">
            <a href="<?php echo esc_url( home_url( '/news' ) ); ?>">news</a>
          </li>
          <li class="p-header__nav-item p-header__nav-item--contact u-underline__white">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
              <span>
                <i class="fa-regular fa-envelope c-icon__mail"></i>
                contact
              </span>
            </a>
          </li>
        </ul>
      </nav>
      <button class="p-header__hamburger js-hamburger" aria-label="メニューを開く">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="p-header__drawer js-drawer">
        <div class="p-header__drawer-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/logo_2.png")); ?>"
              alt="ExciteCode Automobile ロゴ（サブ）" />
          </a>
        </div>
        <nav class="p-header__drawer-nav">
          <ul class="p-header__drawer-list">
            <li class="p-header__drawer-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">about</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="<?php echo esc_url( home_url( '/service' ) ); ?>">service</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="<?php echo esc_url( home_url( '/works' ) ); ?>">works</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="<?php echo esc_url( home_url( '/news' ) ); ?>">news</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">contact</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="https://www.facebook.com/?locale=ja_JP" target="_blank" rel="noopener noreferrer"
                class="c-sns__list-icon" aria-label="Facebook">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/facebook.svg")); ?>" alt="Facebook" />
              </a>
            </li>
            <li class="p-header__drawer-item">
              <a href="https://x.com/?lang=ja" class="c-sns__list-icon" target="_blank" rel="noopener noreferrer"
                aria-label="Twitter">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/twitter.svg")); ?>" alt="Twitter" />
              </a>
            </li>
            <li class="p-header__drawer-item">
              <a href="https://www.instagram.com/" class="c-sns__list-icon" target="_blank" rel="noopener noreferrer"
                aria-label="Instagram">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/instagram.svg")); ?>" alt="Instagram" />
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>