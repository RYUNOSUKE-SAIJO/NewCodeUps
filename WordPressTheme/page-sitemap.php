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
$contact_thanks = esc_url( home_url( '/$contact-thanks/' ) );
$contact_error = esc_url( home_url( '/$contact-error/' ) );
?>

<?php get_header(); ?>
  <main>
    <section class="sub-first-view">
      <div class="sub-first-view__inner">
        <picture class="sub-first-view__slide-img">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-site-map-fv-sp.jpg" media="(max-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-site-map-fv-pc.jpg" alt="美しいビーチ" />
        </picture>
        <div class="sub-first-view__title-wrap">
          <h1 class="sub-first-view__main-title">site&nbsp;MAP</h1>
        </div>
      </div>
      <picture class="sub-first-view-fish md-none">
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

    <div class="sub-site-map sub-site-map-layout">
      <div class="sub-site-map__inner inner">
        <div class="site-map__container">
          <div class="site-map__left">
            <ul class="site-map__items site-map__items--1">
              <div class="site-map__item site-map__item--navy site-map__item--bold">
                <a href="<?php echo $campaign; ?>">キャンペーン</a>
              </div>
              <li class="site-map__item site-map__item--navy">
                <a href="<?php echo $campaign; ?>_category/campaign_1/">ライセンス取得</a>
              </li>
              <li class="site-map__item site-map__item--navy">
                <a href="<?php echo $campaign; ?>_category/campaign_2/">貸切体験ダイビング</a>
              </li>
              <li class="site-map__item site-map__item--navy">
                <a href="<?php echo $campaign; ?>_category/campaign_3/">ナイトダイビング</a>
              </li>
              <li class="site-map__item site-map__item--navy site-map__item--bold">
                <a href="<?php echo $about; ?>">私たちについて</a>
              </li>
            </ul>
            <ul class="site-map__items site-map__items--2">
              <li class="site-map__item site-map__item--navy site-map__item--bold">
                <a href="<?php echo $information; ?>">ダイビング情報</a>
              </li>
              <li class="site-map__item site-map__item--navy">
                <a href="<?php echo $information; ?>#tab01">ライセンス講習</a>
              </li>
              <li class="site-map__item site-map__item--navy">
                <a href="<?php echo $information; ?>#tab02">体験ダイビング</a>
              </li>
              <li class="site-map__item site-map__item--navy">
                <a href="<?php echo $information; ?>#tab03">ファンダイビング</a>
              </li>
              <li class="site-map__item site-map__item--navy site-map__item--bold">
                <a href="<?php echo $blog; ?>">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="site-map__right">
            <ul class="site-map__items site-map__items--3">
              <li class="site-map__item site-map__item--navy site-map__item--bold">
                <a href="<?php echo $voice; ?>">お客様の声</a>
              </li>
              <li class="site-map__item site-map__item--navy site-map__item--bold">
                <a href="<?php echo $price; ?>">料金一覧</a>
              </li>
              <li class="site-map__item site-map__item--navy">
                <a href="<?php echo $price; ?>#price01">ライセンス講習</a>
              </li>
              <li class="site-map__item site-map__item--navy">
                <a href="<?php echo $price; ?>#price02">体験ダイビング</a>
              </li>
              <li class="site-map__item site-map__item--navy">
                <a href="<?php echo $price; ?>#price03">ファンダイビング</a>
              </li>
              <li class="site-map__item site-map__item--navy">
                <a href="<?php echo $price; ?>#price04">スペシャルダイビング</a>
              </li>
            </ul>
            <ul class="site-map__items site-map__items--4">
              <li class="site-map__item site-map__item--navy site-map__item--bold">
                <a href="<?php echo $faq; ?>">よくある質問</a>
              </li>
              <li class="site-map__item site-map__item--navy site-map__item--bold">
                <a href="<?php echo $privacy_policy; ?>">プライバシー<span><br /></span>ポリシー</a>
              </li>
              <li class="site-map__item site-map__item--navy site-map__item--bold">
                <a href="<?php echo $terms_of_service; ?>">利用規約</a>
              </li>
              <li class="site-map__item site-map__item--navy site-map__item--bold">
                <a href="<?php echo $sitemap; ?>">サイトマップ</a>
              </li>
              <li class="site-map__item site-map__item--navy site-map__item--bold">
                <a href="<?php echo $contact; ?>">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <section class="sub-contact contact sub-contact-layout sub-contact-layout--site-map">
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
      <a href="#">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/go-top.svg" alt="トップへボタン" />
      </a>
    </div>
  </main>

<?php get_footer(); ?>