<footer>
  <div class="l-contact p-contact">
    <div class="p-contact__inner">
      <picture class="p-contact__img">
        <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/footer2.png")); ?>"
          media="(min-width: 768px)" type="image/jpg" />
        <!-- 幅768px以上なら表示 -->
        <img src="<?php echo esc_url(get_theme_file_uri("/images/common/footer_SP.png")); ?>" alt="車が並んでいる画像" />
        <!-- それ以外で表示 -->
      </picture>
      <div class="p-contact__content">
        <div class="p-contact__content-inner">
          <p class="p-contact__text">
            輸入車の購入や修理のご相談など<br />お気軽にお問い合わせください。
          </p>
          <div class="p-contact__btn-wrap">
            <a href="contact.html" class="p-contact__btn"><span><i class="fa-regular fa-envelope"></i>お問い合わせ</span></a>
            <a href="tel:000-0000-0000" class="p-contact__btn p-contact__btn--tel"><span><i
                  class="fa-solid fa-phone"></i>000-0000-0000</span></a>
          </div>
          <p class="p-contact__time">
            受付時間 : 火曜日を除く 10：00〜18：00
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="l-footer p-footer">
    <div class="p-footer__inner">
      <div class="p-footer__left">
        <div class="p-footer__left-wrap">
          <div class="p-footer__logo">
            <a href="index.html">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/logo_2.png")); ?>"
                alt="ExciteCode Automobile ロゴ（サブ）" />
            </a>
          </div>
          <div class="c-sns__list">
            <a href="#" class="c-sns__list-icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/facebook.svg")); ?>"
                alt="facebookのアイコン" />
            </a>
            <a href="#" class="c-sns__list-icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/twitter.svg")); ?>" alt="twitterのアイコン" />
            </a>
            <a href="#" class="c-sns__list-icon">
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
              <a href="index.html">top</a>
            </li>
            <li class="p-footer__nav-item">
              <a href="about.html">about</a>
            </li>
            <li class="p-footer__nav-item">
              <a href="service.html">service</a>
            </li>
            <li class="p-footer__nav-item">
              <a href="works.html">works</a>
            </li>
            <li class="p-footer__nav-item">
              <a href="news.html">news</a>
            </li>
            <li class="p-footer__nav-item">
              <a href="contact.html">contact</a>
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