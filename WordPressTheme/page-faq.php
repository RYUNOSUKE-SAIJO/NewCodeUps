  <!----- 変数にハイフンは使えない・ページのスラッグに使用している名前を（''）内に入れること ----->
<?php
$top = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$privacy_policy = esc_url( home_url( '/privacy-policy/' ) );
$terms_of_service = esc_url( home_url( '/terms-of-service/' ) );
$sitemap = esc_url( home_url( '/sitemap/' ) );
$contact_thanks = esc_url( home_url( '/contact-thanks/' ) );
$contact_error = esc_url( home_url( '/contact-error/' ) );
?>



<?php get_header(); ?>
  <main>
    <section class="sub-first-view">
      <div class="sub-first-view__inner">
        <picture class="sub-first-view__slide-img">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-faq-fv-sp.jpg" media="(max-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-faq-fv-pc.jpg" alt="美しいビーチ" />
        </picture>
        <div class="sub-first-view__title-wrap">
          <h1 class="sub-first-view__main-title sub-first-view__main-title--uppercase">faq</h1>
        </div>
      </div>
      <picture class="sub-first-view-fish">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-treat-left-sp.svg" media="(max-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-treat-left.svg" alt="キンギョハナダイ">
      </picture>
    </section>

<!----- パンくず ----->
<?php get_template_part('breadcrumb') ?>

    <div class="sub-faq sub-faq-layout">
      <div class="sub-faq__inner inner">

<div class="sub-faq__accordion accordion js-accordion">
  <div class="accordion__container">
    <ul class="accordion__list">
      <?php
      $faqData = SCF::get_option_meta('faq_option', 'faq-list');
      if ($faqData && is_array($faqData) && !empty($faqData[0]['question'])) :
        foreach ($faqData as $faqItem) :
      ?>
          <li class="accordion__item js-accordion__item">
            <div class="accordion__title js-accordion__title">
              <p class="accordion__title-text"><?php echo esc_html($faqItem['question']); ?></p>
            </div>
            <div class="accordion__content js-accordion__content">
              <p class="accordion__content-text"><?php echo esc_html($faqItem['answer']); ?></p>
            </div>
          </li>
      <?php
        endforeach; else:
      ?>
          <p class="accordion__content--nopost">Coming Soon...</p>
      <?php endif; ?>
    </ul>
  </div>
</div>




      </div>
    </div>

  </main>

<?php get_footer(); ?>