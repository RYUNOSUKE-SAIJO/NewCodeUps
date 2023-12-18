<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<?php
$top = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about-us/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$privacy = esc_url( home_url( '/privacy-policy/' ) );
$terms = esc_url( home_url( '/terms-of-service/' ) );
$sitemap = esc_url( home_url( '/sitemap/' ) );
?>

<body>
  <header class="header js-header header-layout">
    <div class="header__inner">
      <?php if (is_front_page()) : ?>
      <h1 class="header__logo">
        <?php else : ?>
        <div class="header__logo">
          <?php endif; ?>
          <a class="header__logo-link" href="<?php echo $top; ?>">
            <picture class="header__logo-img">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo-sp.svg" alt="CodeUps" media="(max-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo.svg" alt="CodeUps" />
            </picture>
          </a>
      <?php if (is_front_page()) : ?>
      </h1>
        <?php else : ?>
          </div>
          <?php endif; ?>
      <div class="header__hamburger hamburger js-hamburger">
        <div class="hamburger__container">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <nav class="header__nav header-nav">
        <div class="header-nav__inner">
          <ul class="header-nav__items">
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="<?php echo $campaign; ?>">
                <div class="header-nav__item-wrap">
                  <p>Campaign</p>
                  <p class="header-nav__item-ruby">キャンペーン</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="<?php echo $about; ?>">
                <div class="header-nav__item-wrap">
                  <p>About us</p>
                  <p class="header-nav__item-ruby">私たちについて</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="<?php echo $information; ?>">
                <div class="header-nav__item-wrap">
                  <p>Information</p>
                  <p class="header-nav__item-ruby">ダイビング情報</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="<?php echo $blog; ?>">
                <div class="header-nav__item-wrap">
                  <p>Blog</p>
                  <p class="header-nav__item-ruby">ブログ</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="<?php echo $voice; ?>">
                <div class="header-nav__item-wrap">
                  <p>Voice</p>
                  <p class="header-nav__item-ruby">お客様の声</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="<?php echo $price; ?>">
                <div class="header-nav__item-wrap">
                  <p>Price</p>
                  <p class="header-nav__item-ruby">料金一覧</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="<?php echo $faq; ?>">
                <div class="header-nav__item-wrap">
                  <p>FAQ</p>
                  <p class="header-nav__item-ruby">よくある質問</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="<?php echo $contact; ?>">
                <div class="header-nav__item-wrap">
                  <p>Contact</p>
                  <p class="header-nav__item-ruby">お問い合わせ</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="header__drawer drawer js-drawer">
      <div class="drawer__inner">
        <div class="drawer__items">
          <ul class="drawer__items-left">
            <li class="drawer__item drawer__item--bold">
              <a href="<?php echo $campaign; ?>">キャンペーン</a>
            </li>
            <li class="drawer__item">
              <a href="<?php echo $campaign; ?>">ライセンス取得</a>
            </li>
            <li class="drawer__item">
              <a href="<?php echo $campaign; ?>">貸切体験ダイビング</a>
            </li>
            <li class="drawer__item">
              <a href="<?php echo $campaign; ?>">ナイトダイビング</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="<?php echo $about; ?>">私たちについて</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="<?php echo $information; ?>">ダイビング情報</a>
            </li>
            <li class="drawer__item">
              <a href="<?php echo $information; ?>">ライセンス講習</a>
            </li>
            <li class="drawer__item">
              <a href="<?php echo $information; ?>">体験ダイビング</a>
            </li>
            <li class="drawer__item">
              <a href="<?php echo $information; ?>">ファンダイビング</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="<?php echo $blog; ?>">ブログ</a>
            </li>
          </ul>
          <ul class="drawer__items-right">
            <li class="drawer__item drawer__item--bold">
              <a href="<?php echo $voice; ?>">お客様の声</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="<?php echo $price; ?>">料金一覧</a>
            </li>
            <li class="drawer__item">
              <a href="<?php echo $price; ?>">ライセンス講習</a>
            </li>
            <li class="drawer__item">
              <a href="<?php echo $price; ?>">体験ダイビング</a>
            </li>
            <li class="drawer__item">
              <a href="<?php echo $price; ?>">ファンダイビング</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="<?php echo $faq; ?>">よくある質問</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="<?php echo $privacy; ?>">プライバシー<br />ポリシー</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="<?php echo $terms; ?>">利用規約</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="<?php echo $contact; ?>">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>