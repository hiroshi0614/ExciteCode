<?php get_header(); ?>
<main>
  <?php get_template_part('/template-parts/mv'); ?>

  <?php if (function_exists('bcn_display')) { ?>
  <div class="p-breadcrumb l-breadcrumb">
    <div class="p-breadcrumb__inner" vocab="http://schema.org/" typeof="BreadcrumbList">
      <?php bcn_display(); ?>
    </div>
  </div>
  <?php } ?>

  <div class="p-sub-contact">
    <div class="p-sub-contact__inner">
      <p class="p-sub-contact__text">
        弊社へのお問い合わせは<br />
        下記フォームより受け付けております。<br />
        担当者が確認後、折り返しご連絡させていただきます。
      </p>
      <?php echo do_shortcode('[contact-form-7 id="9a54801" title="テスト問い合わせフォーム"]'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>