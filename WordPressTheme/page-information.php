<?php get_header(); ?>
  <main>
    <section class="sub-first-view">
      <div class="sub-first-view__inner">
        <picture class="sub-first-view__slide-img">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-info-FV-sp.jpg" media="(max-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-info-FV-pc.jpg" alt="黄色の熱帯魚" />
        </picture>
        <div class="sub-first-view__title-wrap">
          <h1 class="sub-first-view__main-title">information</h1>
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

    <section class="sub-information sub-information-layout">
      <div class="sub-information__inner inner">
        <div class="sub-information__tab-contents tab-contents">
          <div class="tab-contents__tab-area">
            <input id="tab-1" type="radio" class="tab-btn" name="tab-btn" checked>
            <label for="tab-1" class="tab-contents__tab js-tab-contents__tab"><span class="tab-name1"></span>
              <p>ライセンス<br>講習</p>
            </label>
            <input id="tab-2" type="radio" class="tab-btn" name="tab-btn">
            <label for="tab-2" class="tab-contents__tab js-tab-contents__tab"><span class="tab-name2"></span>
              <p>ファン<br>ダイビング</p>
            </label>
            <input id="tab-3" type="radio" class="tab-btn" name="tab-btn">
            <label for="tab-3" class="tab-contents__tab js-tab-contents__tab"><span class="tab-name3"></span>
              <p>体験<br>ダイビング</p>
            </label>
          </div>
          <!----- ACFでグループを利用した場合の書き方 ----->
          <?php $information_1 = get_field('information_1'); ?>
          <?php $information_2 = get_field('information_2'); ?>
          <?php $information_3 = get_field('information_3'); ?>
          <div class="tab-contents__panel-area">
            <div class="tab-contents__panel js-tab-contents__panel is-active">
              <div class="tab-contents__panel-container">
                <div class="tab-contents__panel-left">
                  <h3 class="tab-contents__panel-header">ライセンス講習</h3>
                  <p class="tab-contents__panel-text"><?php echo $information_1['information_text_1']; ?></p>
                </div>
                <div class="tab-contents__panel-right">
                  <img src="<?php echo $information_1['information_img_1']; ?>" alt="透き通る海に浮かぶダイバーたち">
                </div>
              </div>
            </div>
            <div class="tab-contents__panel js-tab-contents__panel">
              <div class="tab-contents__panel-container">
                <div class="tab-contents__panel-left">
                  <h3 class="tab-contents__panel-header">ファンダイビング</h3>
                  <p class="tab-contents__panel-text"><?php echo $information_2['information_text_2']; ?></p>
                </div>
                <div class="tab-contents__panel-right">
                  <img src="<?php echo $information_2['information_img_2']; ?>" alt="透き通る海に浮かぶダイバーたち">
                </div>
              </div>
            </div>
            <div class="tab-contents__panel js-tab-contents__panel">
              <div class="tab-contents__panel-container">
                <div class="tab-contents__panel-left">
                  <h3 class="tab-contents__panel-header">体験ダイビング</h3>
                  <p class="tab-contents__panel-text"><?php echo $information_3['information_text_3']; ?></p>
                </div>
                <div class="tab-contents__panel-right">
                  <img src="<?php echo $information_3['information_img_3']; ?>" alt="透き通る海に浮かぶダイバーたち">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sub-contact contact sub-contact-layout">
      <div class="contact__inner inner">
        <div class="contact__container">
          <div class="contact__address">
            <div class="contact__logo">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-logo.svg" alt="当サイトのロゴ" />
            </div>
            <div class="contact__block">
              <div class="contact__block-left">
                <p>沖縄県那覇市1-1</p>
                <p>TEL:0120-000-0000</p>
                <p>営業時間:8:30-19:00</p>
                <p>定休日:毎週火曜日</p>
              </div>
              <div class="contact__block-right">
                <div class="contact__iframe-wrap">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.9840673359845!2d127.69933508324004!3d26.229707229979176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56be7db5cbe23%3A0x90ba6df02740ef48!2z44CSOTAyLTAwNjEg5rKW57iE55yM6YKj6KaH5biC5Y-k5bO277yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1693311687571!5m2!1sja!2sjp"
                    width="546" height="296" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="contact__info">
            <div class="contact__info-wrap">
              <div class="contact__section-title section-title">
                <p class="section-title__main section-title__main--contact">
                  contact
                </p>
                <h2 class="section-title__sub section-title__sub--contact">
                  お問い合わせ
                </h2>
              </div>
              <div class="contact__info-text">
                <p>ご予約・お問い合わせはコチラ</p>
              </div>
              <div class="contact__btn">
                <a href="<?php echo $contact; ?>" class="btn"><span>contact&nbsp;us</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact__fish">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-treat-right.svg" alt="魚群の装飾" />
      </div>
    </section>

    <div class="to-top js-to-top" id="page-top">
      <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/go-top.svg" alt="トップへボタン" /></a>
    </div>
  </main>

<?php get_footer(); ?>