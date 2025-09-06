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
    <div class="p-sub-contact__inner p-sub-contact__inner--confirm">
      <p class="p-sub-contact__text">
        入力内容をご確認ください。
      </p>
      <?php echo do_shortcode('[contact-form-7 id="cf9148d" title="入力確認"]'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>