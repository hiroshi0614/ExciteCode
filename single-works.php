<?php get_header(); ?>
<main>


  <?php if (function_exists('bcn_display')) { ?>
  <div class="p-breadcrumb l-breadcrumb l-breadcrumb--detail">
    <div class="p-breadcrumb__inner" vocab="http://schema.org/" typeof="BreadcrumbList">
      <?php bcn_display(); ?>
    </div>
  </div>
  <?php } ?>

  <div class="p-works-detail l-works-detail">
    <div class="p-works-detail__inner">
      <?php
        $taxonomy_terms = get_the_terms($post->ID, 'genre');
        if ( ! empty( $taxonomy_terms ) ) {
            foreach( $taxonomy_terms as $taxonomy_term ) {
                echo '<div class="c-category c-category--works">' . esc_html( $taxonomy_term->name ) . '</div>';
            }
        }
      ?>
      <h2 class="p-works-detail__title">
        <?php the_title(); ?>
      </h2>
      <time class="c-date p-works-detail__date"
        datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?>
      </time>
      <picture class="p-works-detail__img">
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full'); ?>
        <?php else : ?>
        <img src="<?php echo esc_url(get_theme_file_uri("/images/common/logo_1.png")); ?>" alt="NoImage画像" />
        <?php endif; ?>
      </picture>
      <div class="p-works-detail__text">
        <?php the_content(); ?>
      </div>
      <div class="p-works-detail__btn">
        <a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="c-btn c-btn--works-detail">
          実績一覧へ戻る
        </a>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/contact-parts'); ?>
</main>
<?php get_footer(); ?>