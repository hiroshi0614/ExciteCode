<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="p-header l-header">
    <div class="p-header__inner">
      <h1 class="p-header__logo">
        <a href="index.html">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/common/logo_1.png")); ?>"
            alt=" ExciteCode Automobile ロゴ" />
        </a>
      </h1>
      <nav class="p-header__nav">
        <ul class="p-header__nav-list">
          <li class="p-header__nav-item u-underline__black">
            <a href="index.html">top</a>
          </li>
          <li class="p-header__nav-item u-underline__black">
            <a href="<?php echo esc_url( home_url( '/page-about.php' ) ); ?>">about</a>
          </li>
          <li class="p-header__nav-item u-underline__black">
            <a href="service.html">service</a>
          </li>
          <li class="p-header__nav-item u-underline__black">
            <a href="works.html">works</a>
          </li>
          <li class="p-header__nav-item u-underline__black">
            <a href="news.html">news</a>
          </li>
          <li class="p-header__nav-item p-header__nav-item--contact u-underline__white">
            <a href="contact.html">
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
          <a href="index.html">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/logo_2.png")); ?>"
              alt="ExciteCode Automobile ロゴ（サブ）" />
          </a>
        </div>
        <nav class="p-header__drawer-nav">
          <ul class="p-header__drawer-list">
            <li class="p-header__drawer-item">
              <a href="index.html">top</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="about.html">about</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="service.html">service</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="works.html">works</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="news.html">news</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="contact.html">contact</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="#" class="c-sns__list-icon" aria-label="Facebook">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/facebook.svg")); ?>" alt="Facebook" />
              </a>
            </li>
            <li class="p-header__drawer-item">
              <a href="#" class="c-sns__list-icon" aria-label="Twitter">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/twitter.svg")); ?>" alt="Twitter" />
              </a>
            </li>
            <li class="p-header__drawer-item">
              <a href="#" class="c-sns__list-icon" aria-label="Instagram">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/instagram.svg")); ?>" alt="Instagram" />
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>