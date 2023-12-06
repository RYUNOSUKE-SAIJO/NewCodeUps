<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header js-header header-layout">
    <div class="header__inner">
      <h1 class="header__logo">
        <a class="header__logo-link" href="index.html">
          <picture class="header__logo-img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo-sp.svg" alt="CodeUps" media="(max-width: 768px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo.svg" alt="CodeUps" />
          </picture>
        </a>
      </h1>
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
              <a class="header-nav__item-link" href="sub-campaign.html">
                <div class="header-nav__item-wrap">
                  <p>Campaign</p>
                  <p class="header-nav__item-ruby">キャンペーン</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="sub-about.html">
                <div class="header-nav__item-wrap">
                  <p>About us</p>
                  <p class="header-nav__item-ruby">私たちについて</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="sub-information.html">
                <div class="header-nav__item-wrap">
                  <p>Information</p>
                  <p class="header-nav__item-ruby">ダイビング情報</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="sub-blog.html">
                <div class="header-nav__item-wrap">
                  <p>Blog</p>
                  <p class="header-nav__item-ruby">ブログ</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="sub-voice.html">
                <div class="header-nav__item-wrap">
                  <p>Voice</p>
                  <p class="header-nav__item-ruby">お客様の声</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="sub-price.html">
                <div class="header-nav__item-wrap">
                  <p>Price</p>
                  <p class="header-nav__item-ruby">料金一覧</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="sub-faq.html">
                <div class="header-nav__item-wrap">
                  <p>FAQ</p>
                  <p class="header-nav__item-ruby">よくある質問</p>
                </div>
              </a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__item-link" href="sub-contact-page.html">
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
              <a href="sub-campaign.html">キャンペーン</a>
            </li>
            <li class="drawer__item">
              <a href="sub-campaign.html">ライセンス取得</a>
            </li>
            <li class="drawer__item">
              <a href="sub-campaign.html">貸切体験ダイビング</a>
            </li>
            <li class="drawer__item">
              <a href="sub-campaign.html">ナイトダイビング</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="sub-about.html">私たちについて</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="sub-information.html">ダイビング情報</a>
            </li>
            <li class="drawer__item">
              <a href="sub-information.html">ライセンス講習</a>
            </li>
            <li class="drawer__item">
              <a href="sub-information.html">体験ダイビング</a>
            </li>
            <li class="drawer__item">
              <a href="sub-information.html">ファンダイビング</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="sub-blog.html">ブログ</a>
            </li>
          </ul>
          <ul class="drawer__items-right">
            <li class="drawer__item drawer__item--bold">
              <a href="sub-voice.html">お客様の声</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="sub-price.html">料金一覧</a>
            </li>
            <li class="drawer__item">
              <a href="sub-price.html">ライセンス講習</a>
            </li>
            <li class="drawer__item">
              <a href="sub-price.html">体験ダイビング</a>
            </li>
            <li class="drawer__item">
              <a href="sub-price.html">ファンダイビング</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="sub-faq.html">よくある質問</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="sub-privacy-policy.html">プライバシー<br />ポリシー</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="sub-terms-of-service.html">利用規約</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="sub-contact-page.html">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>