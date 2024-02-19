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

<!----- パンくず ----->
<?php get_template_part('inc/breadcrumb') ?>

    <div class="sub-contact-page sub-contact-page-layout">
      <div class="sub-contact-page__inner inner">
        <p class="sub-contact-page__error-message">※必須項目が入力されていません。入力してください。</p>
        <form class="sub-contact-page__form form" action="submit_form.php" method="post">
          <!----- 名前 ----->
          <div class="form__item form__item--name is-active">
            <label class="form__label" for="name">
              お名前<span class="Form__Label-required">必須</span>
            </label>
            <input type="text" id="name" name="name" placeholder="沖縄 太郎" required>
          </div>
          <!----- メールアドレス ----->
          <div class="form__item form__item--email">
            <label class="form__label" for="email">
              メールアドレス<span class="Form__Label-required">必須</span>
            </label>
            <input type="email" id="email" name="email" placeholder="aaa000@ggmail.com" required>
          </div>
          <!----- 電話番号 ----->
          <div class="form__item form__item--phone">
            <label class="form__label" for="phone">
              電話番号<span class="Form__Label-required">必須</span>
            </label>
            <input type="tel" id="phone" name="phone" placeholder="000-0000-0000" required>
          </div>
          <!----- お問い合わせ項目 ----->
          <div class="form__item form__item--contact">
            <label class="form__label">
              お問い合わせ項目<span class="Form__Label-required">必須</span>
            </label>
            <div class="form__contact-container">
              <label class="form__contact-checkbox checkbox">
                <input type="checkbox" name="term" value="accept">ダイビング講習について
                <span class="checkbox__checkmark"></span>
              </label>
              <label class="form__contact-checkbox checkbox">
                <input type="checkbox" name="term" value="accept">ファンデイビングについて
                <span class="checkbox__checkmark"></span>
              </label>
              <label class="form__contact-checkbox checkbox">
                <input type="checkbox" name="term" value="accept">体験ダイビングについて
                <span class="checkbox__checkmark"></span>
              </label>
            </div>
          </div>
          <!----- ドロップダウンメニュー ----->
          <div class="form__item form__item--campaign">
            <label class="form__label" for="campaign">キャンペーン</label>
            <input type="text" id="campaign" name="campaign" placeholder="キャンペーン内容を選択">
            <span></span>
          </div>
          <!----- メッセージ ----->
          <div class="form__item form__item--message">
            <label class="form__label" for="message">
              お問い合わせ内容<span class="Form__Label-required">必須</span>
            </label>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea>
          </div>
          <!----- チェックボックス ----->
          <label class="form__checkbox checkbox">
            <input type="checkbox" name="term" value="accept">個人情報の取り扱いについて同意のうえ送信します。
            <span class="checkbox__checkmark"></span>
          </label>
          <!----- 送信ボタン ----->
          <div class="form__btn">
            <a href="<?php echo $contact; ?>" class="btn"><span>Send</span></a>
          </div>
        </form>
      </div>
    </div>

    <div class="to-top js-to-top" id="page-top">
      <a href="#">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/go-top.svg" alt="トップへボタン" />
      </a>
    </div>
  </main>

  <?php get_footer(); ?>
