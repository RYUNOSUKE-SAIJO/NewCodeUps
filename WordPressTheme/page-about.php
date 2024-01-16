<?php get_header(); ?>

  <main>
    <section class="sub-first-view">
      <div class="sub-first-view__inner">
        <picture class="sub-first-view__slide-img">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-FV-SP.jpg" media="(max-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-FV-PC.jpg" alt="黄色の熱帯魚" />
        </picture>
        <div class="sub-first-view__title-wrap">
          <h1 class="sub-first-view__main-title sub-first-view__main-title--uppercace">about&nbsp;us</h1>
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

    <div class="sub-about about sub-about-layout">
      <div class="about__inner inner">
        <div class="about__view">
          <div class="about__view-vertical about__view-vertical--none">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about1.jpg" alt="屋根上のシーサー" />
          </div>
          <div class="about__view-side about__view-side--wide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about2.jpg" alt="海中の熱帯魚" />
          </div>
        </div>
        <div class="about__content about__content--layout">
          <div class="about__content-left">
            <div class="about__main-title about__main-title--layout">
              <h3>Dive&nbsp;into<br />the&nbsp;Ocean</h3>
            </div>
          </div>
          <div class="about__content-right">
            <div class="about__description about__description--layout">
              <p><span>深海の奇跡、瞬間の美。</span><br>ギャラリーページへようこそ！ここでは、ダイビングの魅力が一眼レフのレンズを通して捉えられた瞬間をお楽しみいただけます。青い海に浮かぶ色とりどりの生態、神秘的な洞窟の中で輝く光。写真が紡ぐ物語で、ダイビングの不思議な世界へご招待します。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-about__fish">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-fish.svg" alt="魚群の装飾" />
      </div>

      <section class="sub-about__gallery gallery gallery-layout">
        <div class="gallery__inner inner">
          <div class="gallery__section-title section-title">
            <p class="section-title__main section-title__main--indent">gallery</p>
            <h2 class="section-title__sub">フォト</h2>
          </div>
          <div class="gallery__wrap">
            <ul class="gallery__container">
              <?php
                $galleryList = SCF::get_option_meta( 'gallery_option', 'gallery-list' );
                foreach ($galleryList as $fields) {
                  $imgUrl = wp_get_attachment_image_src($fields['gallery_item'], 'full');
              ?>
              <li class="gallery__item">
                <?php if ($fields['gallery_item'] === "") { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/noImage.jpg">
                <?php } else { ?>
                  <img src="<?php echo $imgUrl[0]; ?>" alt="ギャラリーの写真">
                <?php
                }
                ?>
              </li>
              <?php } ?>
              </li>
            </ul>
          </div>
          <div class="gallery__modal-block js-gallery__modal-block">
            <div class="gallery__modal-img">
              <img id="popup" src="#">
            </div>
          </div>
        </div>
      </section>

    </div>

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