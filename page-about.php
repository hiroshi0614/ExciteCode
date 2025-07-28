<?php get_header(); ?>
<main>
  <section>
    <div class="c-sub-mv">
      <div class="c-sub-mv__inner">
        <h2 class="c-sub-mv__title js-fadeUp__left delay">
          about<span>私たちについて</span>
        </h2>
        <div class="c-sub-mv__img js-fadeUp__bottom">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/about_FV.png")); ?>"
              media="(min-width: 768px)" type="image/jpg" />
            <!-- 幅768px以上なら表示 -->
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/about_FV-sp.png")); ?>" alt="アバウトページ" />
            <!-- それ以外で表示 -->
          </picture>
        </div>
      </div>
    </div>
  </section>

  <?php if (function_exists('bcn_display')) { ?>
  <div class="p-breadcrumb l-breadcrumb">
    <div class="p-breadcrumb__inner" vocab="http://schema.org/" typeof="BreadcrumbList">
      <!-- Breadcrumb NavXTで出力される部分 ここから -->
      <!-- <span>
        <a href="index.html">
          <span>top</span>
        </a>
      </span>

      <span>
        <span class="current-item">about</span>
      </span> -->
      <?php bcn_display(); ?>
      <!-- Breadcrumb NavXTで出力される部分 ここまで -->
    </div>
  </div>
  <?php } ?>

  <div class="p-sub-page-scroll l-sub-page-scroll">
    <div class="p-sub-page-scroll__inner inner">
      <a href="#philosophy" class="p-sub-page-scroll__text">経営理念</a>
      <a href="#access" class="p-sub-page-scroll__text">アクセス</a>
      <a href="#company" class="p-sub-page-scroll__text">会社概要</a>
    </div>
  </div>

  <section>
    <div class="c-sub-section-title l-sub-section-title">
      <div class="c-sub-section-title__inner inner">
        <h2>
          国境を超え、メーカーを超え<br />
          「型にはまらない」あなただけの歓びを
        </h2>
        <p>
          弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br />
          これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
        </p>
      </div>
    </div>
  </section>

  <section>
    <div id="philosophy" class="p-sub-philosophy l-sub-philosophy">
      <div class="p-sub-philosophy__inner">
        <div class="p-sub-philosophy__wrap">
          <div class="p-sub-philosophy__item">
            <h3 class="c-subPage-title p-sub-philosophy__title">
              <span>経営理念</span>philosophy
            </h3>
            <p class="p-sub-philosophy__text">
              「お客様とは一生涯のお付き合い」をモットーとし、同時に社員一人一人が責任と誇り、使命感を持ち日々の仕事にやりがいと喜びを感じることができる会社を目指します。そういう「社員満足」があってこそ、本当の「お客様の満足」が可能になり、そしてお客様のご満足がさらに社員の満足を高めてくれるからです。心の豊かさは楽やゆとりといったものより仕事の充実感に求めねばなりません。我々は現状に満足することなく挑戦し続けます。
            </p>
            <p class="p-sub-philosophy__name">代表取締役　田中太郎</p>
          </div>
          <picture class="p-sub-philosophy__img">
            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/pprofile.png")); ?>"
              media="(min-width: 768px)" type="image/jpg" />
            <!-- 幅768px以上なら表示 -->
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/profile_sp.png")); ?>" alt="代表取締役の写真" />
            <!-- それ以外で表示 -->
          </picture>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div id="access" class="p-sub-access l-sub-access">
      <div class="p-sub-access__inner inner">
        <h3 class="c-subPage-title p-sub-access__title">
          <span>アクセス</span>access
        </h3>
        <address class="p-sub-access__address">
          <p>
            〒000-0000<br />
            〇〇県△△市□□区▲▲町0-0-0
          </p>
        </address>
        <div class="p-sub-access__map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1594.9388965782057!2d140.87169367286486!3d38.257071947016215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a283dfa3313fd%3A0x7e90ff3176ccb8ac!2z44Kz44OL44Kr44Of44OO44Or44K_44K444Oj44OR44Oz5qCq5byP5Lya56S-IOadseWMl-aUr-ekvg!5e0!3m2!1sja!2sjp!4v1747694888514!5m2!1sja!2sjp"
            style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div id="company" class="p-sub-company l-sub-company">
      <div class="p-sub-company__inner inner">
        <h3 class="c-subPage-title p-sub-company__title">
          <span>会社概要</span>company profile
        </h3>
        <div class="p-sub-company__profile p-sub-company-profile">
          <dl class="p-sub-company-profile__list">
            <dt class="p-sub-company-profile__term">会社名</dt>
            <dd class="p-sub-company-profile__description">
              株式会社Excitecode
            </dd>
          </dl>
          <dl class="p-sub-company-profile__list">
            <dt class="p-sub-company-profile__term">所在地</dt>
            <dd class="p-sub-company-profile__description">
              〒000-0000 〇〇県△△市□□区▲▲町0-0-0
            </dd>
          </dl>
          <dl class="p-sub-company-profile__list">
            <dt class="p-sub-company-profile__term">設立</dt>
            <dd class="p-sub-company-profile__description">
              2015年12月10日
            </dd>
          </dl>
          <dl class="p-sub-company-profile__list">
            <dt class="p-sub-company-profile__term">代表取締役</dt>
            <dd class="p-sub-company-profile__description">田中太郎</dd>
          </dl>
          <dl class="p-sub-company-profile__list">
            <dt class="p-sub-company-profile__term">事業内容</dt>
            <dd class="p-sub-company-profile__description">
              <p>自動車販売（新車、中古車）古物No.第00000000号</p>
              <p>
                自動車整備（国産車、輸入車）陸運局認証工場　認証No.0-0000
              </p>
              <p>輸入車販売（自動車、自動車関連部品）</p>
              <p>保険代理店（ABC損害保険株式会社、DFG損害保険株式会社）</p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="p-sub-company__swiper">
        <div class="swiper js-company-swiper">
          <ul class="swiper-wrapper">
            <li class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/about_slider1.png")); ?>"
                alt="会社紹介スライダー画像1" />
            </li>
            <li class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/about_slider2.png")); ?>"
                alt="会社紹介スライダー画像2" />
            </li>
            <li class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/about_slider3.png")); ?>"
                alt="会社紹介スライダー画像3" />
            </li>
            <li class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/about_slider4.png")); ?>"
                alt="会社紹介スライダー画像4" />
            </li>
            <li class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/about_slider5.png")); ?>"
                alt="会社紹介スライダー画像5" />
            </li>
            <li class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/about_slider6.png")); ?>"
                alt="会社紹介スライダー画像6" />
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>