<?php get_header(); ?>
  <main>
    <section class="sub-first-view">
      <div class="sub-first-view__inner">
        <picture class="sub-first-view__slide-img">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-contact-fv-sp.jpg" media="(max-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-contact-fv-pc.jpg" alt="美しいビーチ" />
        </picture>
        <div class="sub-first-view__title-wrap">
          <h1 class="sub-first-view__main-title">contact</h1>
        </div>
      </div>
      <picture class="sub-first-view-fish">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-treat-left-sp.svg" media="(max-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-treat-left.svg" alt="キンギョハナダイ">
      </picture>
    </section>

      <div class="breadcrumb breadcrumb-layout">
        <div class="breadcrumb__inner inner">
          <ul class="breadcrumb__list">
            <li class="breadcrumb__item"><a href="#">TOP&nbsp;&nbsp;＞</a></li>
            <li class="breadcrumb__item"><a href="#">&nbsp;お問い合わせ&nbsp;&nbsp;＞</a></li>
            <li class="breadcrumb__item"><a href="#">&nbsp;送信完了</a></li>
          </ul>
        </div>
      </div>

    <div class="sub-contact-page sub-contact-page-layout">
      <div class="sub-contact-page__inner inner">
        <div class="sub-contact-page__thanks-message">
          <p class="sub-contact-page__thanks-message-title">お問い合わせ内容を送信完了しました。</p>
          <p class="sub-contact-page__thanks-message-text">このたびは、お問い合わせ頂き<br class="md-none">誠にありがとうございます。
            <br>お送り頂きました内容を確認の上、<br class="md-none">3営業日以内に折り返しご連絡させて頂きます。
            <br>また、ご記入頂いたメールアドレスへ、<br class="md-none">自動返信の確認メールをお送りしております。
          </p>
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