<?php get_header(); ?>
<main>
  <section>
    <div class="c-sub-mv">
      <div class="c-sub-mv__inner">
        <h2 class="c-sub-mv__title js-fadeUp__left delay">
          service<span>サービス紹介</span>
        </h2>
        <div class="c-sub-mv__img js-fadeUp__bottom">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/service_FV.png")); ?>"
              media="(min-width: 768px)" type="image/jpg">
            <!-- 幅768px以上なら表示 -->
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/service_FV-sp.png")); ?>" alt="サービスページ">
            <!-- それ以外で表示 -->
          </picture>
        </div>
      </div>
    </div>
  </section>

  <div class="p-breadcrumb l-breadcrumb">
    <div class="p-breadcrumb__inner">
      <!-- Breadcrumb NavXTで出力される部分 ここから -->
      <span>
        <a href="index.html">
          <span>top</span>
        </a>
      </span>

      <span>
        <span class="current-item">service</span>
      </span>
      <!-- Breadcrumb NavXTで出力される部分 ここまで -->
    </div>
  </div>

  <div class="p-sub-page-scroll l-sub-page-scroll">
    <div class="p-sub-page-scroll__inner inner">
      <a href="#support" class="p-sub-page-scroll__text">購入サポート</a>
      <a href="#repair" class="p-sub-page-scroll__text">修理・整備</a>
      <a href="#inspection" class="p-sub-page-scroll__text">車検・点検</a>
    </div>
  </div>

  <section>
    <div class="c-sub-section-title l-sub-section-title">
      <div class="c-sub-section-title__inner inner">
        <h2>
          お客様一人一人が求める<br>
          理想のカーライフに寄り添います
        </h2>
        <p>
          様々な輸入車・国産車のメンテナンスのご相談から点検・整備まで、親切かつスピーディな対応を心がけ、あらゆる疑問や不安にお答えします。最新鋭の自社集中工場には、
          四輪アライメントをはじめ最新コンピューターと各ブランドに精通した熟練のサービススタッフを配置、フロントでは車種ブランド別の専用電話回線をご用意しております。
        </p>
      </div>
    </div>
  </section>

  <section>
    <div class="p-sub-service l-sub-service">
      <div class="p-sub-service__inner">
        <div class="p-sub-service__list" id="support">
          <div class="p-sub-service__wrap">
            <div class="p-sub-service__item">
              <h3 class="p-sub-service__title">
                <span>購入サポート</span>
              </h3>
              <p class="p-sub-service__text">
                国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。
              </p>
            </div>
            <picture class="p-sub-service__img">
              <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/sub-service1.png")); ?>"
                media="(min-width: 768px)" type="image/jpg">
              <!-- 幅768px以上なら表示 -->
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/sub-service1-sp.png")); ?>"
                alt="購入サポートの画像">
              <!-- それ以外で表示 -->
            </picture>
          </div>
          <div class="p-sub-service__features">
            <div class="p-sub-service__features-title">
              <p>features<span>特徴</span></p>
            </div>
            <div class="p-sub-service__features-text">
              <p>
                弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
                これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
              </p>
            </div>
          </div>
        </div>

        <div class="p-sub-service__list" id="repair">
          <div class="p-sub-service__wrap">
            <div class="p-sub-service__item">
              <h3 class="p-sub-service__title">
                <span>修理・整備</span>
              </h3>
              <p class="p-sub-service__text">
                高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。
              </p>
            </div>
            <picture class="p-sub-service__img">
              <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/sub-service2.png")); ?>"
                media="(min-width: 768px)" type="image/jpg">
              <!-- 幅768px以上なら表示 -->
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/sub-service2-sp.png")); ?>"
                alt="修理・整備の画像">
              <!-- それ以外で表示 -->
            </picture>
          </div>
          <div class="p-sub-service__features">
            <div class="p-sub-service__features-title">
              <p>features<span>特徴</span></p>
            </div>
            <div class="p-sub-service__features-text">
              <p>
                弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
              </p>
            </div>
          </div>
        </div>

        <div class="p-sub-service__list" id="inspection">
          <div class="p-sub-service__wrap">
            <div class="p-sub-service__item">
              <h3 class="p-sub-service__title">
                <span>車検・点検</span>
              </h3>
              <p class="p-sub-service__text">
                輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいならわたしたちへご相談ください。
              </p>
            </div>
            <picture class="p-sub-service__img">
              <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/sub-service3.png")); ?>"
                media="(min-width: 768px)" type="image/jpg">
              <!-- 幅768px以上なら表示 -->
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/sub-service3-sp.png")); ?>"
                alt="車検・点検の画像">
              <!-- それ以外で表示 -->
            </picture>
          </div>
          <div class="p-sub-service__features">
            <div class="p-sub-service__features-title">
              <p>features<span>特徴</span></p>
            </div>
            <div class="p-sub-service__features-text">
              <p>
                弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
                これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>