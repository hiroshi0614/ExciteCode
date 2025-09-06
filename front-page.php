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
              <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="c-btn c-btn--box-none">READ MORE</a>
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
                <a href="<?php echo esc_url( home_url( '/service/#support' ) ); ?>" class="c-btn">READ MORE</a>
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
                <a href="<?php echo esc_url( home_url( '/service/#repair' ) ); ?>" class="c-btn">READ MORE</a>
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
                <a href="<?php echo esc_url( home_url( '/service/#inspection' ) ); ?>" class="c-btn">READ MORE</a>
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
            <?php
            $args = [
                "post_type" => "works",
                "posts_per_page" => 3
            ];
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
            <ul class="p-works__list p-works-list">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li class="p-works-list__item c-works-item js-fadeUp__top">
                <a href="<?php the_permalink() ?>">
                  <div class="c-works-item__img">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full'); ?>
                    <?php else : ?>
                    <img
                      src="<?php echo esc_url(get_theme_file_uri("/images/common/featured-image-horizontal.jpg")); ?>"
                      alt="NoImage画像" />
                    <?php endif; ?>
                  </div>
                  <div class="c-works-item__content">
                    <?php
                    $taxonomy_terms = get_the_terms($post->ID, 'genre');
                    if ( ! empty( $taxonomy_terms ) ) {
                        foreach( $taxonomy_terms as $taxonomy_term ) {
                            echo '<p class="c-category c-category--works">' . esc_html( $taxonomy_term->name ) . '</p>';
                        }
                    }
                    ?>
                    <div class="c-works-item__title u-underline__black--works">
                      <?php the_title(); ?>
                    </div>
                    <div class="c-works-item__text">
                      <?php the_content(); ?>
                    </div>
                    <time class="c-date c-works-item__date"
                      datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.n.j'); ?></time>
                  </div>
                </a>
              </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
            <?php else : ?>
            <p>記事が投稿されていません</p>
            <?php endif; ?>
            <div class="p-works-list__item-btn">
              <a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="c-btn c-btn--box-none">READ MORE</a>
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
              <?php
            $current_category_id = get_queried_object_id();
            $categories = get_categories([
                'orderby' => 'name',
                'order'   => 'ASC',
                // 表示するカテゴリーの数を指定
                'number'  => 5
            ]);

            // 通常投稿一覧ページへのURL
            $home_class = (is_home() || is_front_page()) ? 'active' : '';
            $home_link = sprintf(
                //通常投稿一覧ページへのaタグに付与するクラスを指定できる
                '<li class="c-category-list__item js-fadeUp__bottom"><a class="c-category-list__text %s" href="%s" alt="%s">全てのお知らせ</a></li>',
                $home_class,
                // 通常投稿一覧ページのスラッグを指定
                esc_url(home_url('/news')),
                esc_attr(__('View all posts', 'textdomain'))
            );
            echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

            // カテゴリーのリンク
            if ($categories) {
                foreach ($categories as $category) {
                    // カレントクラスに付与するクラスを指定できる
                    $category_class = ($current_category_id === $category->term_id) ? 'active' : '';
                    $category_link = sprintf(
                        // 各カテゴリーに付与するクラスを指定できる
                        '<li class="c-category-list__item js-fadeUp__bottom"><a class="c-category-list__text %s" href="%s" alt="%s">%s</a></li>',
                        $category_class,
                        esc_url(get_category_link($category->term_id)),
                        esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                        esc_html($category->name)
                    );
                    echo sprintf(esc_html__('%s', 'textdomain'), $category_link);
                }
            }
            ?>
            </ul>
          </div>
          <div class="p-news__wrap">
            <?php
              $args = [
                  "post_type" => "post",
                  "posts_per_page" => 3
              ];
              $the_query = new WP_Query($args);
              ?>
            <?php if ($the_query->have_posts()) : ?>
            <ul class="p-news__list p-news-list">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li class="p-news-list__item c-news-item js-fadeUp__top">
                <a href="<?php the_permalink() ?>">
                  <div class="c-news-item__meta">
                    <time class="c-date c-news-item__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                      <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                    <?php
                      $categories = get_the_category();
                      if ( ! empty( $categories ) ) {
                      foreach( $categories as $category ) {
                      echo '<div class="c-category c-news-item__category">' . esc_html( $category->name ) . '</div>';
                      }
                      } 
                    ?>
                  </div>
                  <div class="c-news-item__title">
                    <p><?php the_title(); ?></p>
                  </div>
                </a>
              </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
            <?php else : ?>
            <p>記事が投稿されていません</p>
            <?php endif; ?>
            <div class="p-news-list__item-btn">
              <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="c-btn c-btn--box-none">READ MORE</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php get_template_part('template-parts/contact-parts'); ?>
</main>
<?php get_footer(); ?>