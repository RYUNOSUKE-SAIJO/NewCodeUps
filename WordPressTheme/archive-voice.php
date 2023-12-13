<?php get_header(); ?>

<body>
  <header class="header js-header header-layout">
    <div class="header__inner">
      <div class="header__logo">
        <a class="header__logo-link" href="index.html">
          <picture class="header__logo-img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo-sp.svg" alt="CodeUps" media="(max-width: 768px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo.svg" alt="CodeUps" />
          </picture>
        </a>
      </div>
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
                  <p>information</p>
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
              <a href="sub-voice.html">ダイビング情報</a>
            </li>
            <li class="drawer__item">
              <a href="sub-voice.html">ライセンス講習</a>
            </li>
            <li class="drawer__item">
              <a href="sub-voice.html">体験ダイビング</a>
            </li>
            <li class="drawer__item">
              <a href="sub-voice.html">ファンダイビング</a>
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
              <a href="sub-contact-page.html">利用規約</a>
            </li>
            <li class="drawer__item drawer__item--bold">
              <a href="sub-contact-page.html">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main>
    <section class="sub-first-view">
      <div class="sub-first-view__inner">
        <picture class="sub-first-view__slide-img">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-pc.jpg" media="(max-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-sp.jpg" alt="海に浮かぶ複数人のダイバーたち" />
        </picture>
        <div class="sub-first-view__title-wrap">
          <h1 class="sub-first-view__main-title">voice</h1>
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

    <div class="sub-voice sub-voice-layout">
      <div class="sub-voice__inner inner">
        <!----- tab ----->
        <div class="sub-voice__tab-nav tab-nav">
          <div class="tab-nav__tab-area">
            <a class="tab-nav__tab is-active" href="#">
              <p>all</p>
            </a>
            <a class="tab-nav__tab" href="#">
              <p>ライセンス講習</p>
            </a>
            <a class="tab-nav__tab" href="#">
              <p>ファンダイビング</p>
            </a>
            <a class="tab-nav__tab" href="#">
              <p>体験ダイビング</p>
            </a>
          </div>
        </div>
        <!----- voice-cards ----->
        <ul class="sub-voice__cards voice-cards">
          <li class="voice-cards__card voice-card">
            <div class="voice-card__header">
              <div class="voice-card__header-left">
                <div class="voice-card__top">
                  <div class="voice-card__gender">
                    <p>20代(女性)</p>
                  </div>
                  <div class="voice-card__tag">
                    <p>ライセンス講習</p>
                  </div>
                </div>
                <div class="voice-card__title">
                  <p>ここにタイトルが入ります。ここにタイトル</p>
                </div>
              </div>
              <div class="voice-card__header-right">
                <div class="voice-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-img-1.jpg" alt="麦わら帽子を被った女性" />
                </div>
              </div>
            </div>
            <div class="voice-card__body">
              <div class="voice-card__text">
                <p>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </div>
          </li>
          <li class="voice-cards__card voice-card">
            <div class="voice-card__header">
              <div class="voice-card__header-left">
                <div class="voice-card__top">
                  <div class="voice-card__gender">
                    <p>30代(男性)</p>
                  </div>
                  <div class="voice-card__tag">
                    <p>ファンダイビング</p>
                  </div>
                </div>
                <div class="voice-card__title">
                  <p>ここにタイトルが入ります。ここにタイトル</p>
                </div>
              </div>
              <div class="voice-card__header-right">
                <div class="voice-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-img-2.jpg" alt="ポーズをとっている男性" />
                </div>
              </div>
            </div>
            <div class="voice-card__body">
              <div class="voice-card__text">
                <p>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </div>
          </li>
          <li class="voice-cards__card voice-card">
            <div class="voice-card__header">
              <div class="voice-card__header-left">
                <div class="voice-card__top">
                  <div class="voice-card__gender">
                    <p>20代(女性)</p>
                  </div>
                  <div class="voice-card__tag">
                    <p>体験ダイビング</p>
                  </div>
                </div>
                <div class="voice-card__title">
                  <p>ここにタイトルが入ります。ここにタイトル</p>
                </div>
              </div>
              <div class="voice-card__header-right">
                <div class="voice-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-card-3.jpg" alt="笑顔を浮かべる2人組の女性" />
                </div>
              </div>
            </div>
            <div class="voice-card__body">
              <div class="voice-card__text">
                <p>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </div>
          </li>
          <li class="voice-cards__card voice-card">
            <div class="voice-card__header">
              <div class="voice-card__header-left">
                <div class="voice-card__top">
                  <div class="voice-card__gender">
                    <p>20代(女性)</p>
                  </div>
                  <div class="voice-card__tag">
                    <p>体験ダイビング</p>
                  </div>
                </div>
                <div class="voice-card__title">
                  <p>ここにタイトルが入ります。ここにタイトル</p>
                </div>
              </div>
              <div class="voice-card__header-right">
                <div class="voice-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-card-4.jpg" alt="風に吹かれる長い髪をおさえている女性" />
                </div>
              </div>
            </div>
            <div class="voice-card__body">
              <div class="voice-card__text">
                <p>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </div>
          </li>
          <li class="voice-cards__card voice-card">
            <div class="voice-card__header">
              <div class="voice-card__header-left">
                <div class="voice-card__top">
                  <div class="voice-card__gender">
                    <p>30代(カップル)</p>
                  </div>
                  <div class="voice-card__tag">
                    <p>ファンダイビング</p>
                  </div>
                </div>
                <div class="voice-card__title">
                  <p>ここにタイトルが入ります。ここにタイトル</p>
                </div>
              </div>
              <div class="voice-card__header-right">
                <div class="voice-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-card-5.jpg" alt="ソファーに座るカップル" />
                </div>
              </div>
            </div>
            <div class="voice-card__body">
              <div class="voice-card__text">
                <p>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </div>
          </li>
          <li class="voice-cards__card voice-card">
            <div class="voice-card__header">
              <div class="voice-card__header-left">
                <div class="voice-card__top">
                  <div class="voice-card__gender">
                    <p>20代(女性)</p>
                  </div>
                  <div class="voice-card__tag">
                    <p>ライセンス講習</p>
                  </div>
                </div>
                <div class="voice-card__title">
                  <p>ここにタイトルが入ります。ここにタイトル</p>
                </div>
              </div>
              <div class="voice-card__header-right">
                <div class="voice-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-card-6.jpg" alt="女性の横顔" />
                </div>
              </div>
            </div>
            <div class="voice-card__body">
              <div class="voice-card__text">
                <p>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </div>
          </li>
        </ul>
        <!----- pagination ----->
        <div class="sub-voice__pagenavi wp-pagenavi">
          <a class="page-numbers prev" rel="prev" href="#"></a>
          <span class="page-numbers current">1</span>
          <a class="page-numbers" href="#">2</a>
          <a class="page-numbers" href="#">3</a>
          <a class="page-numbers" href="#">4</a>
          <a class="page-numbers sp-none" href="#">5</a>
          <a class="page-numbers sp-none" href="#">6</a>
          <a class="page-numbers next" href="#"></a>
        </div>
      </div>
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
                <a href="sub-contact-page.html" class="btn"><span>contact&nbsp;us</span></a>
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

  <footer class="footer footer-layout">
    <div class="footer__inner inner">
      <div class="footer__header">
        <div class="footer__logo">
          <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-logo.svg" alt="当サイトのロゴ" /></a>
        </div>
        <div class="footer__sns-logo">
          <div class="footer__facebook">
            <a href="#" rel="noopener noreferrer" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.svg" alt="Facebookのロゴ" /></a>
          </div>
          <div class="footer__instagram">
            <a href="#" rel="noopener noreferrer" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogo.svg" alt="instagramのロゴ" /></a>
          </div>
        </div>
      </div>
      <div class="footer__body">
        <div class="footer__container">
          <div class="footer__left">
            <ul class="footer__items">
              <li class="footer__item footer__item--bold">
                <a href="sub-campaign.html">キャンペーン</a>
              </li>
              <li class="footer__item">
                <a href="sub-campaign.html">ライセンス取得</a>
              </li>
              <li class="footer__item">
                <a href="sub-campaign.html">貸切体験ダイビング</a>
              </li>
              <li class="footer__item">
                <a href="sub-campaign.html">ナイトダイビング</a>
              </li>
              <li class="footer__item footer__item--bold">
                <a href="sub-about.html">私たちについて</a>
              </li>
            </ul>
            <ul class="footer__items footer__items_second">
              <li class="footer__item footer__item--bold">
                <a href="sub-voice.html">ダイビング情報</a>
              </li>
              <li class="footer__item">
                <a href="sub-voice.html">ライセンス講習</a>
              </li>
              <li class="footer__item">
                <a href="sub-voice.html">体験ダイビング</a>
              </li>
              <li class="footer__item">
                <a href="sub-voice.html">ファンダイビング</a>
              </li>
              <li class="footer__item footer__item--bold">
                <a href="sub-blog.html">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="footer__right">
            <ul class="footer__items">
              <li class="footer__item footer__item--bold">
                <a href="sub-voice.html">お客様の声</a>
              </li>
              <li class="footer__item footer__item--bold">
                <a href="sub-price.html">料金一覧</a>
              </li>
              <li class="footer__item">
                <a href="sub-price.html">ライセンス講習</a>
              </li>
              <li class="footer__item">
                <a href="sub-price.html">体験ダイビング</a>
              </li>
              <li class="footer__item">
                <a href="sub-price.html">ファンダイビング</a>
              </li>
            </ul>
            <ul class="footer__items">
              <li class="footer__item footer__item--bold">
                <a href="sub-blog.html">よくある質問</a>
              </li>
              <li class="footer__item footer__item--bold">
                <a href="sub-privacy-policy.html">プライバシー<span><br /></span>ポリシー</a>
              </li>
              <li class="footer__item footer__item--bold">
                <a href="sub-blog.html">利用規約</a>
              </li>
              <li class="footer__item footer__item--bold">
                <a href="sub-contact-page.html">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer__copy-right-wrap">
        <small class="footer__copy-right">
          Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.
        </small>
      </div>
    </div>
  </footer>
</body>

<?php get_footer(); ?>