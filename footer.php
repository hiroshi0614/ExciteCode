<footer>
  <div class="l-footer p-footer">
    <div class="p-footer__inner">
      <div class="p-footer__left">
        <div class="p-footer__left-wrap">
          <div class="p-footer__logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/logo_2.png")); ?>"
                alt="ExciteCode Automobile ロゴ（サブ）" />
            </a>
          </div>
          <div class="c-sns__list">
            <a href="https://www.facebook.com/?locale=ja_JP" target="_blank" rel="noopener noreferrer"
              class=" c-sns__list-icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/facebook.svg")); ?>"
                alt="facebookのアイコン" />
            </a>
            <a href="https://x.com/?lang=ja" target="_blank" rel="noopener noreferrer" class="c-sns__list-icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/twitter.svg")); ?>" alt="twitterのアイコン" />
            </a>
            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="c-sns__list-icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/instagram.svg")); ?>"
                alt="instagramのアイコン" />
            </a>
          </div>
        </div>
        <p class="p-footer__copyright">©<?php echo wp_date('Y'); ?> ExciteCode Automobile</p>
      </div>
      <div class="p-footer__right">
        <nav class="p-footer__nav">
          <ul class="p-footer__nav-items">
            <li class="p-footer__nav-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a>
            </li>
            <li class="p-footer__nav-item">
              <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">about</a>
            </li>
            <li class="p-footer__nav-item">
              <a href="<?php echo esc_url( home_url( '/service' ) ); ?>">service</a>
            </li>
            <li class="p-footer__nav-item">
              <a href="<?php echo esc_url( home_url( '/works' ) ); ?>">works</a>
            </li>
            <li class="p-footer__nav-item">
              <a href="<?php echo esc_url( home_url( '/news' ) ); ?>">news</a>
            </li>
            <li class="p-footer__nav-item">
              <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">contact</a>
            </li>
            <li class="p-footer__nav-item">
              <a href="#">プライバシーポリシー</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>