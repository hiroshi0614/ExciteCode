<?php get_header(); ?>
<main>
  <div class="p-404">
    <div class="p-404__inner">
      <div class="p-404__wrap js-fadeUp__bottom">
        <div class="p-404__img-wrap">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/404.png")); ?>"
              media="(min-width: 768px)" type="image/jpg">
            <!-- 幅768px以上なら表示 -->
            <img src="<?php echo esc_url(get_theme_file_uri("./images/common/404-sp.png")); ?>" alt="404ページ">
            <!-- それ以外で表示 -->
          </picture>
          <p class="p-404__title">404 Not Found</p>
        </div>
        <p class="p-404__text">お探しのページはURLが誤っているか、削除された可能性があります。<br>5秒後にTOPページに遷移します</p>
        <div class="p-404__btn">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-btn c-btn--404">TOPへ戻る</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>