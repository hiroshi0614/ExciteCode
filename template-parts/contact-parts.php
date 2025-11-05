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
          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="p-contact__btn"><span><i
                class="fa-regular fa-envelope"></i>お問い合わせ</span></a>
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