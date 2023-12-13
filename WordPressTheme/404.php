<?php get_header(); ?>

  <main>
    <div class="sub-404 sub-404-layout">
      
      <!----- パンくず ----->
      <?php if (function_exists('bcn_display')) : ?>
      <div class="breadcrumb breadcrumb-layout">
        <div class="breadcrumb__inner inner">
          <ul class="breadcrumb__list">
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
          <a href="index.html" class="btn btn--sub-404"><span>page&nbsp;TOP</span></a>
        </div>
      </div>
    </div>

    <div class="to-top js-to-top" id="page-top">
      <a href="#">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/go-top.svg" alt="トップへボタン" />
      </a>
    </div>
  </main>

<?php get_footer(); ?>