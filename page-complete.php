<?php get_header(); ?>
<main>
  <section>
    <?php get_template_part('/template-parts/mv'); ?>
  </section>

  <?php if (function_exists('bcn_display')) { ?>
  <div class="p-breadcrumb l-breadcrumb">
    <div class="p-breadcrumb__inner" vocab="http://schema.org/" typeof="BreadcrumbList">
      <?php bcn_display(); ?>
    </div>
  </div>
  <?php } ?>

  <section>
    <div class="p-sub-contact p-sub-contact--thanks">
      <div class="p-sub-contact__inner">
        <h2 class="p-sub-contact__thanks-title">
          THANK YOU FOR CONTACTING US.
        </h2>
        <p class="p-sub-contact__thanks-subtitle">
          お問い合わせありがとうございます。
        </p>
        <p class="p-sub-contact__thanks-text">
          近日中に折り返しご連絡いたします。<br>今しばらくお待ちくださいますよう、よろしくお願い申し上げます。<br>万が一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。<br>今後ともご愛顧賜りますようよろしくお願い申し上げます。
        </p>
        <div class="p-sub-contact__thanks-btn">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-btn c-btn--contact-prev">
            TOPへ戻る
          </a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>