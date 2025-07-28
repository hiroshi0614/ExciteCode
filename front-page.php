<?php get_header(); ?>
<main>
  <section class="p-mv">
    <div class="p-mv__inner">
      <div class="p-mv__title-wrap">
        <h2 class="p-mv__main-title">あなたの<br />日常が目覚める</h2>
      </div>
      <div class="p-mv__swiper swiper js-mv-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="swiper-img">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/Rectangle1.png")); ?>" alt="メインビジュアル" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/Rectangle2.png")); ?>" alt="メインビジュアル" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/Rectangle3.png")); ?>" alt="メインビジュアル" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/Rectangle4.png")); ?>" alt="メインビジュアル" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="p-slider__text">
      <div class="p-slider__text-content">
        <p>Good life for Good Car</p>
      </div>
      <div class="p-slider__text-content">
        <p>Good life for Good Car</p>
      </div>
      <div class="p-slider__text-content">
        <p>Good life for Good Car</p>
      </div>
    </div>
  </section>

  <section>
    <div class="p-about l-about">
      <div class="p-about__inner inner">
        <div class="p-about-list__item">
          <div class="p-about-list__item-img">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/TOP_1.png")); ?>" alt="道路に駐車した車" />
          </div>
          <div class="p-about-list__item-text-wrap">
            <h3 class="p-about-list__item-title">about us</h3>
            <p class="p-about-list__item-text">
              弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
            </p>
            <div class="p-about-list__item-btn">
              <a href="about.html" class="c-btn c-btn--box-none">READ MORE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="p-service l-service">
      <div class="p-service__inner inner">
        <div class="p-service__title">
          <h2 class="c-section-title js-fadeUp__right">service</h2>
        </div>
        <ul class="p-service__list p-service-list">
          <li class="p-service-list__item">
            <div class="p-service-list__item-img">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/service-top1.png")); ?>" alt="車の画像" />
              <p class="p-service-list__item-number">service</p>
              <p class="p-service-list__item-subtitle">購入サポート</p>
            </div>
            <div class="p-service-list__item-content">
              <p class="p-service-list__item-text">
                国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。
              </p>
              <div class="p-service-list__item-btn">
                <a href="service.html" class="c-btn">READ MORE</a>
              </div>
            </div>
          </li>
          <li class="p-service-list__item">
            <div class="p-service-list__item-img">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/service-top2.png")); ?>" alt="車の画像" />
              <p class="p-service-list__item-number">service</p>
              <p class="p-service-list__item-subtitle">修理・整備</p>
            </div>
            <div class="p-service-list__item-content">
              <p class="p-service-list__item-text">
                高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。
              </p>
              <div class="p-service-list__item-btn">
                <a href="service.html" class="c-btn">READ MORE</a>
              </div>
            </div>
          </li>
          <li class="p-service-list__item">
            <div class="p-service-list__item-img">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/service-top3.png")); ?>" alt="車の画像" />
              <p class="p-service-list__item-number">service</p>
              <p class="p-service-list__item-subtitle">車検・点検</p>
            </div>
            <div class="p-service-list__item-content">
              <p class="p-service-list__item-text">
                輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいなら弊社へご相談ください。
              </p>
              <div class="p-service-list__item-btn">
                <a href="service.html" class="c-btn">READ MORE</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <div class="u-bg__gray">
    <section>
      <div class="l-works p-works">
        <div class="p-works__inner">
          <h2 class="p-works__title c-section-title js-fadeUp__left">
            works
          </h2>
          <div class="p-works__wrap">
            <ul class="p-works__list p-works-list">
              <li class="p-works-list__item c-works-item js-fadeUp__top">
                <a href="works-detail.html">
                  <picture class="c-works-item__img">
                    <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/works_1.png")); ?>"
                      media="(min-width: 768px)" type="image/jpg" />
                    <!-- 幅768px以上なら表示 -->
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/common/worksSP_01.png")); ?>"
                      alt="車に鍵を差している画像" />
                    <!-- それ以外で表示 -->
                  </picture>
                  <div class="c-works-item__content">
                    <p class="c-category c-works-item__category">
                      修理・整備
                    </p>
                    <p class="c-works-item__title u-underline__black--works">
                      車のドアが開けられなくなった｜ドアロックの交換と...
                    </p>
                    <p class="c-works-item__text">
                      弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...
                    </p>
                    <time class="c-date c-works-item__date" datetime="2022-09-02">2022.09.02</time>
                  </div>
                </a>
              </li>
              <li class="p-works-list__item c-works-item js-fadeUp__top">
                <a href="works-detail.html">
                  <picture class="c-works-item__img">
                    <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/works_2.png")); ?>"
                      media="(min-width: 768px)" type="image/jpg" />
                    <!-- 幅768px以上なら表示 -->
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/common/worksSP_02.png")); ?>"
                      alt="板金修理している画像" />
                    <!-- それ以外で表示 -->
                  </picture>
                  <div class="c-works-item__content">
                    <p class="c-category c-works-item__category">
                      修理・整備
                    </p>
                    <p class="c-works-item__title u-underline__black--works">
                      愛車のリアバンパーに傷がついた｜板金修理と塗装で...
                    </p>
                    <p class="c-works-item__text">
                      弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...
                    </p>
                    <time class="c-date c-works-item__date" datetime="2022-08-26">2022.08.26</time>
                  </div>
                </a>
              </li>
              <li class="p-works-list__item c-works-item js-fadeUp__top">
                <a href="works-detail.html">
                  <picture class="c-works-item__img">
                    <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/works_3.png")); ?>"
                      media="(min-width: 768px)" type="image/jpg" />
                    <!-- 幅768px以上なら表示 -->
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/common/worksSP_03.png")); ?>"
                      alt="お客様と従業員が話している画像" />
                    <!-- それ以外で表示 -->
                  </picture>
                  <div class="c-works-item__content">
                    <p class="c-category c-works-item__category">
                      購入サポート
                    </p>
                    <p class="c-works-item__title u-underline__black--works">
                      はじめて輸入車の購入を検討中のお客様｜憧れのBM...
                    </p>
                    <p class="c-works-item__text">
                      弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...
                    </p>
                    <time class="c-date c-works-item__date" datetime="2022-08-20">2022.08.20</time>
                  </div>
                </a>
              </li>
            </ul>
            <div class="p-works-list__item-btn">
              <a href="works.html" class="c-btn c-btn--box-none">READ MORE</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="l-news p-news">
        <div class="p-news__inner inner">
          <div class="p-news__menu-wrap p-news-menu__wrap c-category-list__wrap">
            <h2 class="p-news__title c-section-title js-fadeUp__left">
              news
            </h2>
            <ul class="p-news-menu__list c-category-list c-category-list--news">
              <li class="c-category-list__item js-fadeUp__bottom">
                <p class="c-category-list__text active">
                  すべてのお知らせ
                </p>
              </li>
              <li class="c-category-list__item js-fadeUp__bottom">
                <p class="c-category-list__text">トピックス</p>
              </li>
              <li class="c-category-list__item js-fadeUp__bottom">
                <p class="c-category-list__text">イベント・キャンペーン</p>
              </li>
              <li class="c-category-list__item js-fadeUp__bottom">
                <p class="c-category-list__text">入庫車情報</p>
              </li>
            </ul>
          </div>
          <div class="p-news__wrap">
            <ul class="p-news__list p-news-list">
              <li class="p-news-list__item c-news-item js-fadeUp__top">
                <a href="news-detail.html">
                  <div class="c-news-item__meta">
                    <time class="c-date c-news-item__date" datetime="2022-09-02">
                      2022.09.02
                    </time>
                    <div class="c-category c-news-item__category">
                      <p>トピックス</p>
                    </div>
                    <div class="c-category c-news-item__category">
                      <p>イベント・キャンペーン</p>
                    </div>
                  </div>
                  <div class="c-news-item__title">
                    <p>2022年10月8日・9日・10日の3日間、試乗車フェアを開催します</p>
                  </div>
                </a>
              </li>
              <li class="p-news-list__item c-news-item js-fadeUp__top">
                <a href="news-detail.html">
                  <div class="c-news-item__meta">
                    <time class="c-date c-news-item__date" datetime="2022-08-23">
                      2022.08.23
                    </time>
                    <div class="c-category c-news-item__category">
                      <p>トピックス</p>
                    </div>
                    <div class="c-category c-news-item__category">
                      <p>入庫車情報</p>
                    </div>
                  </div>
                  <div class="c-news-item__title">
                    <p>【入庫車のご案内】メルセデスベンツG 350が入庫しました</p>
                  </div>
                </a>
              </li>
              <li class="p-news-list__item c-news-item js-fadeUp__top">
                <a href="news-detail.html">
                  <div class="c-news-item__meta">
                    <time class="c-date c-news-item__date" datetime="2022-08-07">
                      2022.08.07
                    </time>
                    <div class="c-category c-news-item__category">
                      <p>トピックス</p>
                    </div>
                  </div>
                  <div class="c-news-item__title">
                    <p>お盆休みのご案内</p>
                  </div>
                </a>
              </li>
              <li class="p-news-list__item c-news-item js-fadeUp__top">
                <a href="news-detail.html">
                  <div class="c-news-item__meta">
                    <time class="c-date c-news-item__date" datetime="2022-08-03">
                      2022.08.03
                    </time>
                    <div class="c-category c-news-item__category">
                      <p>トピックス</p>
                    </div>
                    <div class="c-category c-news-item__category">
                      <p>入庫車情報</p>
                    </div>
                  </div>
                  <div class="c-news-item__title">
                    <p>【入庫車のご案内】JEEPラングラー アンリミテッド サハラが入庫しました</p>
                  </div>
                </a>
              </li>
              <li class="p-news-list__item c-news-item js-fadeUp__top">
                <a href="news-detail.html">
                  <div class="c-news-item__meta">
                    <time class="c-date c-news-item__date" datetime="2022-07-26">
                      2022.07.26
                    </time>
                    <div class="c-category c-news-item__category">
                      <p>トピックス</p>
                    </div>
                  </div>
                  <div class="c-news-item__title">
                    <p>半導体不足は輸入車・輸入中古車にどう影響するか</p>
                  </div>
                </a>
              </li>
            </ul>
            <div class="p-news-list__item-btn">
              <a href="news.html" class="c-btn c-btn--box-none">READ MORE</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>