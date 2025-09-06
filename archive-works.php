<?php get_header(); ?>
<main>
  <sect>
    <?php get_template_part('/template-parts/mv'); ?>
    </section>

    <?php if (function_exists('bcn_display')) { ?>
    <div class="p-breadcrumb l-breadcrumb">
      <div class="p-breadcrumb__inner" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </div>
    </div>
    <?php } ?>

    <div class="l-sub-works p-sub-works">
      <div class="p-sub-works__inner inner">
        <div class="p-sub-works__menu-wrap p-sub-works-menu__wrap c-category-list__wrap c-category-list__wrap--works">
          <ul class="c-category-list">
            <?php
          // 現在のページがタクソノミーアーカイブページかどうかをチェック
          $queried_object = get_queried_object();
          $current_term_id = (is_tax() && isset($queried_object->term_id)) ? $queried_object->term_id : null;
          $terms = get_terms([
              // 表示するタクソノミースラッグを記述
              'taxonomy' => 'genre',
              'orderby' => 'name',
              'order'   => 'ASC',
              // 表示するタームの数を指定
              'number'  => 5
          ]);

          // カスタム投稿一覧ページへのURL
          $home_class = (is_post_type_archive()) ? 'active' : '';
          $home_link = sprintf(
              //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
              '<li class="c-category-list__item js-fadeUp__bottom">
              <a class="c-category-list__text %s" href="%s" alt="%s">
              すべての実績
              </a>
              </li>
              ',
              $home_class,
              // カスタム投稿一覧ページのスラッグを指定
              esc_url(home_url('/works')),
              esc_attr(__('View all posts', 'textdomain'))
          );
          echo sprintf(esc_html__('%s', 'textdomain'), $home_link);


          // タームのリンク
            if ($terms) {
                foreach ($terms as $term) {
                    // カレントクラスに付与するクラスを指定できる
                    $term_class = ($current_term_id && $current_term_id === $term->term_id) ? 'active' : '';
                    $term_link = sprintf(
                        // 各タームに付与するクラスを指定できる
                        '<li class="c-category-list__item js-fadeUp__bottom">
                        <a class="c-category-list__text %s" href="%s" alt="%s">%s</a>
                        </li>',
                        $term_class,
                        esc_url(get_term_link($term->term_id)),
                        esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                        esc_html($term->name)
                    );
                    echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
                }
            }
            ?>
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
                  <p class="c-works-item__title--detail u-underline__black--works"><?php the_title(); ?></p>
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

    <?php get_template_part('template-parts/contact-parts'); ?>
</main>
<?php get_footer(); ?>