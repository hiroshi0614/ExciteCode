<?php get_header(); ?>
<main>
  <section>
    <div class="c-sub-mv">
      <div class="c-sub-mv__inner">
        <h2 class="c-sub-mv__title js-fadeUp__left delay">
          works<span>実績紹介</span>
        </h2>
        <div class="c-sub-mv__img js-fadeUp__bottom">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/sub-works_FV.png")); ?>"
              media="(min-width: 768px)" type="image/jpg">
            <!-- 幅768px以上なら表示 -->
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/sub-works__FV-sp.png")); ?>" alt="実績紹介ページ">
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
        <span class="current-item">works</span>
      </span>
      <!-- Breadcrumb NavXTで出力される部分 ここまで -->
    </div>
  </div>

  <div class="l-sub-works p-sub-works">
    <div class="p-sub-works__inner inner">
      <div class="p-sub-works__menu-wrap p-sub-works-menu__wrap c-category-list__wrap c-category-list__wrap--works">
        <ul class="c-category-list">
          <li class="c-category-list__item js-fadeUp__bottom">
            <p class="c-category-list__text active">
              すべての実績
            </p>
          </li>
          <li class="c-category-list__item js-fadeUp__bottom">
            <p class="c-category-list__text">購入サポート</p>
          </li>
          <li class="c-category-list__item js-fadeUp__bottom">
            <p class="c-category-list__text">
              修理・整備
            </p>
          </li>
          <li class="c-category-list__item js-fadeUp__bottom">
            <p class="c-category-list__text">車検・点検</p>
          </li>
        </ul>
      </div>

      <div class="p-sub-works__wrap">
        <?php
        $args = [
            "post_type" => "works",
            "posts_per_page" => 10
        ];
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <ul class="p-sub-works__list p-works-list">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="p-works-list__item c-works-item c-works-item--archive js-fadeUp__top">
            <a href="<?php the_permalink() ?>">
              <picture class="c-works-item__img">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/logo_1.png")); ?>" alt="NoImage画像" />
                <?php endif; ?>
              </picture>
              <div class="c-works-item__content">
                <?php
                    $taxonomy_terms = get_the_terms($post->ID, 'genre');
                    if ( ! empty( $taxonomy_terms ) ) {
                        foreach( $taxonomy_terms as $taxonomy_term ) {
                            echo '<p class="c-category c-category--works">' . esc_html( $taxonomy_term->name ) . '</p>';
                        }
                    }
                ?>
                <p class="c-works-item__title u-underline__black--works"><?php the_title(); ?></p>
                <time class="c-date c-works-item__date"
                  datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
        <?php else : ?>
        <p>記事が投稿されていません</p>
        <?php endif; ?>


        <div class="p-pagenavi js-fadeUp__top">
          <div class="p-pagenavi__inner">
            <!-- WP-PageNaviで出力される部分 ここから -->
            <?php
              // WP-PageNaviプラグインが有効な場合のみ実行
              if( function_exists('wp_pagenavi') ) {
                wp_pagenavi();
              }
            ?>
            <!-- WP-PageNaviで出力される部分 ここまで -->
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>
<?php get_footer(); ?>