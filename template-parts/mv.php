<?php
if (is_page('about')) {
  $image_pc = '/images/common/about_FV.png';
  $image_sp = '/images/common/about_FV-sp.png';
  $title_jp = '私たちについて';
  $title_en = 'about';
} elseif (is_page('service')) {
  $image_pc = '/images/common/service_FV.png';
  $image_sp = '/images/common/service_FV-sp.png';
  $title_jp = 'サービス紹介';
  $title_en = 'service';
} elseif (is_page('works') || is_post_type_archive('works')) {
  $image_pc = '/images/common/sub-works_FV.png';
  $image_sp = '/images/common/sub-works__FV-sp.png';
  $title_jp = '実績紹介';
  $title_en = 'works';
} elseif (is_page(array('contact', 'confirm', 'complete'))) {
  $image_pc = '/images/common/contact_FV.png';
  $image_sp = '/images/common/contact__FV-sp.png';
  $title_jp = 'お問い合わせ';
  $title_en = 'contact';
} elseif (is_category()) {
  $image_pc = '/images/common/news_FV.png';
  $image_sp = '/images/common/news_FV-sp.png';
  $title_jp = 'カテゴリ別一覧';
  $title_en = 'news';
} elseif (is_date()) {
  $image_pc = '/images/common/news_FV.png';
  $image_sp = '/images/common/news_FV-sp.png';
  $title_jp = '月別一覧';
  $title_en = 'news';
} elseif (is_home()) {
  $image_pc = '/images/common/news_FV.png';
  $image_sp = '/images/common/news_FV-sp.png';
  $title_jp = 'お知らせ';
  $title_en = 'news';
} else {
  $image_pc = '/images/common/about_FV.png';
  $image_sp = '/images/common/about_FV-sp.png';
  $title_jp = 'ページタイトル';
  $title_en = 'page';
}
?>

<div class="c-sub-mv">
  <div class="c-sub-mv__inner">
    <h2 class="c-sub-mv__title js-fadeUp__left delay">
      <?php echo esc_html($title_en); ?><span><?php echo esc_html($title_jp); ?></span>
    </h2>
    <div class="c-sub-mv__img js-fadeUp__bottom">
      <picture>
        <source srcset="<?php echo esc_url(get_template_directory_uri() . $image_pc); ?>" media="(min-width: 768px)"
          type="image/png" />
        <!-- 幅768px以上なら表示 -->
        <img src="<?php echo esc_url(get_template_directory_uri() . $image_sp); ?>"
          alt="<?php echo esc_attr($title_jp); ?>" />
        <!-- それ以外で表示 -->
      </picture>
    </div>
  </div>
</div>