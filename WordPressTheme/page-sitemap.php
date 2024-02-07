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
<?php get_template_part('breadcrumb') ?>

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

  </main>

<?php get_footer(); ?>