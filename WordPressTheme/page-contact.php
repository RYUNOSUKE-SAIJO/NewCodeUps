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
    <?php if (function_exists('bcn_display')) : ?>
    <div class="breadcrumb breadcrumb-layout">
      <div class="breadcrumb__inner inner">
        <ul class="breadcrumb__list">
          <?php bcn_display(); ?>
        </ul>
      </div>
    </div>
    <?php endif; ?>

    <div class="sub-contact-page sub-contact-page-layout">
      <div class="sub-contact-page__inner inner">
        <form class="sub-contact-page__form form" action="submit_form.php" method="post">
          <ul class="form__item-list">
            <!----- お名前 ----->
            <li class="form__item form__item--name">
              <label class="form__label" for="name">
                お名前<span class="Form__Label-required">必須</span>
              </label>
              <input class="form__input" type="text" id="name" name="name" placeholder="沖縄 太郎" required>
            </li>
            <!----- メールアドレス ----->
            <li class="form__item form__item--email">
              <label class="form__label" for="email">
                メールアドレス<span class="Form__Label-required">必須</span>
              </label>
              <input class="form__input" type="email" id="email" name="email" placeholder="aaa000@ggmail.com" required>
            </li>
            <!----- 電話番号 ----->
            <li class="form__item form__item--phone">
              <label class="form__label" for="phone">
                電話番号<span class="Form__Label-required">必須</span>
              </label>
              <input class="form__input" type="tel" id="phone" name="phone" placeholder="000-0000-0000" required>
            </li>
            <!----- お問い合わせ項目 ----->
            <li class="form__item form__item--contact">
              <label class="form__label">
                お問い合わせ項目<span class="Form__Label-required">必須</span>
              </label>
              <div class="form__contact-container">
                <label class="form__contact-checkbox checkbox">
                  <input class="form__input" type="checkbox" name="term" value="accept">ダイビング講習について
                  <span class="checkbox__checkmark"></span>
                </label>
                <label class="form__contact-checkbox checkbox">
                  <input class="form__input" type="checkbox" name="term" value="accept">ファンデイビングについて
                  <span class="checkbox__checkmark"></span>
                </label>
                <label class="form__contact-checkbox checkbox">
                  <input class="form__input" type="checkbox" name="term" value="accept">体験ダイビングについて
                  <span class="checkbox__checkmark"></span>
                </label>
              </div>
            </li>
            <!----- キャンペーン ----->
            <li class="form__item form__item--campaign">
              <label class="form__label" for="campaign">キャンペーン</label>
              <select class="form__select form__select--campaign" name="color">
                <option value="">キャンペーン内容を選択</option>
                <option value="whale">ライセンス取得</option>
                <option value="bear">貸切体験ダイビング</option>
                <option value="snake">ナイトダイビング</option>
                <option value="iguana">貸切ファンダイビング</option>
                <span></span>
              </select>
            </li>
            <!----- お問い合わせ内容 ----->
            <li class="form__item form__item--message">
              <label class="form__label" for="message">
                お問い合わせ内容<span class="Form__Label-required">必須</span>
              </label>
              <textarea class="form__textarea" id="message" name="message" rows="4" cols="50" required></textarea>
            </li>
          </ul>
          <!----- チェックボックス ----->
          <label class="form__checkbox checkbox">
            <p class="form__checkbox-text">個人情報の取り扱いについて同意のうえ送信します。</p>
            <input class="form__input" type="checkbox" name="term" value="accept">
            <span class="checkbox__checkmark checkbox__checkmark--big"></span>
          </label>
          <!----- 送信ボタン ----->
          <div class="form__btn">
            <a href="sub-contact-page.html" class="btn"><span>Send</span></a>
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