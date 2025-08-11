<?php get_header(); ?>
<main>
  <section>
    <div class="c-sub-mv">
      <div class="c-sub-mv__inner">
        <h2 class="c-sub-mv__title js-fadeUp__left delay">
          NEWS<span>月別一覧</span>
        </h2>
        <div class="c-sub-mv__img js-fadeUp__bottom">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/news_FV.png")); ?>"
              media="(min-width: 768px)" type="image/jpg" />
            <!-- 幅768px以上なら表示 -->
            <img src="<?php echo esc_url(get_theme_file_uri("./images/common/news_FV-sp.png")); ?>" alt="サービス紹介ページ" />
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
        <span class="current-item">news</span>
      </span>
      <!-- Breadcrumb NavXTで出力される部分 ここまで -->
    </div>
  </div>

  <div class="l-sub-news p-sub-news">
    <div class="p-sub-news__inner inner">
      <div class="p-sub-news__menu-wrap p-sub-news-menu__wrap c-category-list__wrap">
        <ul class="p-sub-news-menu__list c-category-list c-category-list--sub-news">
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
      <div class="p-sub-news__wrap">
        <?php if ( have_posts() ) : ?>
        <ul class="p-sub-news__list p-sub-news-list">
          <?php while( have_posts() ) : the_post(); ?>
          <li class="p-sub-news-list__item c-news-item c-news-item--archive js-fadeUp__top">
            <a href="<?php the_permalink() ?>">
              <div class="c-news-item__meta">
                <time class="c-date c-news-item__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date('Y.m.d'); ?>
                </time>


                <div class="c-news-item__category-wrap">
                  <?php
                      $categories = get_the_category();
                      if ( ! empty( $categories ) ) {
                      foreach( $categories as $category ) {
                      echo '<div class="c-category c-category--news">' . esc_html( $category->name ) . '</div>';
                      }
                      } 
                    ?>
                </div>
              </div>
              <div class="c-news-item__title u-underline__black--news">
                <p><?php the_title(); ?></p>
              </div>
            </a>
          </li>
          <?php endwhile;?>
        </ul>
        <?php else : ?>
        <p>
          記事が投稿されていません
        </p>
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
</main>
<?php get_footer(); ?>