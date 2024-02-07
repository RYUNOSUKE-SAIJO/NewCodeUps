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






<body class="body body--sub-404">

  <?php get_header(); ?>

  <main>
    <div class="sub-404 sub-404-layout">

      <!----- パンくず ----->
      <?php if (function_exists('bcn_display')) : ?>
      <div class="breadcrumb breadcrumb-layout">
        <div class="breadcrumb__inner inner">
          <ul class="breadcrumb__list breadcrumb__list-white">
            <?php bcn_display(); ?>
          </ul>
        </div>
      </div>
      <?php endif; ?>

      <div class="sub-404__inner inner">
        <div class="sub-404__container">
          <h2 class="sub-404__main-title">404</h2>
          <p class="sub-404__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
        </div>
        <div class="sub-404__btn">
          <a href="<?php echo $top; ?>" class="btn btn--sub-404"><span>page&nbsp;TOP</span></a>
        </div>
      </div>
    </div>

    <div class="to-top js-to-top" id="page-top">
      <a href="">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/go-top-white.svg" alt="トップへボタン" />
      </a>
    </div>
  </main>

  <?php get_footer(); ?>

</body>

