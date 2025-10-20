<?php get_header(); ?>
<?php if (function_exists('bcn_display')) { ?>
<div class="p-breadcrumb l-breadcrumb l-breadcrumb--detail">
  <div class="p-breadcrumb__inner" vocab="http://schema.org/" typeof="BreadcrumbList">
    <?php bcn_display(); ?>
  </div>
</div>
<?php } ?>


<div class="l-two-column">
  <main>
    <div class="l-two-column__main">
      <article class="p-news__detail p-news-detail">
        <div class="p-news__detail-category">
          <?php
          $categories = get_the_category();
          if ( ! empty( $categories ) ) {
              foreach( $categories as $category ) {
                  echo '<div class="c-category c-category--news">' . esc_html( $category->name ) . '</div>';
              }
          }
          ?>
        </div>
        <div class="p-news-detail__title">
          <h2><?php the_title(); ?></h2>
        </div>
        <time class="c-date p-news-detail__date"
          datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年n月j日'); ?></time>
        <div class="p-news-detail__img">
          <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('full', ['class' => 'detail__thumbnail']); ?>
          <?php else : ?>
          <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/common/logo_1.png")); ?>"
            alt="NoImage画像" />
          <?php endif; ?>
        </div>
        <div class="p-news-detail__content">
          <?php the_content(); ?>
        </div>
        <div class="p-news-detail__btn">
          <?php
          // 前の記事へのリンク
          $prev_link = get_previous_post_link('%link', '前の記事へ');
          if (!empty($prev_link)) {
            echo str_replace('<a href=', '<a class="c-btn c-btn--prev c-btn--japanese" href=', $prev_link);
          } else {
            // 前の記事がない場合は空のdivを出力
            echo '<div></div>';
          }
          
          // 次の記事へのリンク
          $next_link = get_next_post_link('%link', '次の記事へ');
          if (!empty($next_link)) {
            echo str_replace('<a href=', '<a class="c-btn c-btn--japanese" href=', $next_link);
          } else {
            // 次の記事がない場合も空のdivを出力
            echo '<div></div>';
          }
          ?>
        </div>
      </article>
    </div>
  </main>
  <aside>
    <!-- サイドバー -->
    <div class="l-two-column__aside">
      <div class="c-aside-menu__wrap">
        <div class="c-aside-menu">
          <p class="c-aside-menu__title">最新記事</p>
        </div>
        <?php
        $args = [
            "post_type" => "post",
            "posts_per_page" => 3,
            "orderby" => "date",
            "order" => "DESC",
        ];
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <ul class="c-aside-menu__lists">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="c-aside-menu__list">
            <a href="<?php the_permalink() ?>">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('thumbnail', ['class' => 'c-aside-menu__list-img']); ?>
              <?php else : ?>
              <img class="detail__thumbnail"
                src="<?php echo esc_url(get_theme_file_uri("/images/common/logo_1.png")); ?>" alt="NoImage画像" />
              <?php endif; ?>
              <div class="c-aside-menu__text-wrap">
                <p class="c-aside-menu__text">
                  <?php echo wp_trim_words( get_the_title(), 36, '…' ); ?>
                </p>
                <time class="c-date c-aside-menu__date"
                  datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年n月j日'); ?></time>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
        <?php else : ?>
        <p>記事が投稿されていません</p>
        <?php endif; ?>
      </div>
      <div class="c-aside-menu__wrap">
        <div class="c-aside-menu">
          <p class="c-aside-menu__title">アーカイブ</p>
        </div>
        <ul class="c-aside-menu__lists c-aside-menu__lists--filter">
          <?php wp_get_archives('type=monthly&limit=12'); ?>
        </ul>
      </div>
      <div class="c-aside-menu__wrap">
        <div class="c-aside-menu">
          <p class="c-aside-menu__title">カテゴリー</p>
        </div>
        <ul class="c-aside-menu__lists c-aside-menu__lists--filter">
          <?php
            $categories = get_categories();
            foreach ($categories as $category) {
                echo '<li class="c-aside-menu__list"><a class="c-aside-menu__filter-text" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
            }
          ?>
        </ul>
      </div>
    </div>
  </aside>
</div>
<?php get_template_part('template-parts/contact-parts'); ?>
<?php get_footer(); ?>