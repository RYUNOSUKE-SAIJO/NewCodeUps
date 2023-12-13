<?php get_header(); ?>

  <main>
    <section class="sub-first-view">
      <div class="sub-first-view__inner">
        <picture class="sub-first-view__slide-img">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog-fv-sp.jpg" media="(max-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog-fv-pc.jpg" alt="黄色の熱帯魚" />
        </picture>
        <div class="sub-first-view__title-wrap">
          <h1 class="sub-first-view__main-title">blog</h1>
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

    <div class="sub-blog-detail  sub-blog-detail-layout">
      <div class="sub-blog-detail__inner inner">
        <!----- main-contents ----->
        <div class="sub-blog-detail__main-contents">
          <time class="sub-blog-detail__date" datetime="2023-11-17">2023/11/17</time>
          <h2 class="sub-blog-detail__header">ライセンス取得</h2>
          <!----- wp想定 ----->
          <div class="sub-blog-detail__content-area">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog-detail-img.jpg" alt="珊瑚礁">
            <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog-detail-img.jpg" alt="珊瑚礁">
            <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            <ul>
              <li>リスト１</li>
              <li>リスト2</li>
              <li>リスト3</li>
            </ul>
            <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
          </div>
          <div class="sub-blog-detail__pagenavi">
            <a class="page-numbers prev" rel="prev" href="#"></a>
            <a class="page-numbers next" href="#"></a>
          </div>
        </div>
        <!----- side-contents ----->
        <aside class="sub-blog__side-contents side-contents">
          <div class="side-contents__inner">
            <div class="side-contents__article">
              <div class="side-contents__header side-contents-header">
                <h3 class="side-contents-header__title">人気記事</h3>
              </div>
              <ul class="side-contents__article-items">
                <li class="side-contents__article-item">
                  <a class="side-contents__article-link" href="#">
                    <div class="side-contents__article-left">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-4.jpg" alt="黄色の熱帯魚">
                    </div>
                    <div class="side-contents__article-right">
                      <time datetime="2023-11-17">2023/11/17</time>
                      <p class="side-contents__article-title">ライセンス取得</p>
                    </div>
                  </a>
                </li>
                <li class="side-contents__article-item">
                  <a class="side-contents__article-link" href="#">
                    <div class="side-contents__article-left">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-2.jpg" alt="ウミガメと泳ぐ">
                    </div>
                    <div class="side-contents__article-right">
                      <time datetime="2023-11-17">2023/11/17</time>
                      <p class="side-contents__article-title">ウミガメと泳ぐ</p>
                    </div>
                  </a>
                </li>
                <li class="side-contents__article-item">
                  <a class="side-contents__article-link" href="#">
                    <div class="side-contents__article-left">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-3.jpg" alt="カクレクマノミ">
                    </div>
                    <div class="side-contents__article-right">
                      <time datetime="2023-11-17">2023/11/17</time>
                      <p class="side-contents__article-title">カクレクマノミ</p>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="side-contents__voice">
              <div class="side-contents__header side-contents-header side-contents-header--voice">
                <h3 class="side-contents-header__title">口コミ</h3>
              </div>
              <div class="side-contents__voice-container">
                <div class="side-contents__voice-img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/side-contents__voice.jpg" alt="カップル">
                </div>
                <p class="side-contents__voice-tag">30代(カップル)</p>
                <p class="side-contents__voice-title">ここにタイトルが入ります。ここにタイトル</p>
                <div class="side-contents__voice-btn">
                  <a href="sub-voice.html" class="btn"><span>View more</span></a>
                </div>
              </div>
            </div>
            <div class="side-contents__campaign">
              <div class="side-contents__header side-contents-header side-contents-header--campaign">
                <h3 class="side-contents-header__title">キャンペーン</h3>
              </div>
              <ul class="side-contents__campaign-cards">
                <a href="sub-campaign.html" class="side-contents__card-link">
                  <li class="side-contents__campaign-card campaign-card campaign-card--resize">
                    <img class="campaign-card__img campaign-card__img--resize"
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg" alt="鮮やかな魚群" />
                    <div class="campaign-card__body campaign-card__body--resize">
                      <div class="campaign-card__title campaign-card__title--center">
                        <p>ライセンス取得</p>
                      </div>
                    </div>
                    <div class="campaign-card__info campaign-card__info--shrink">
                      <div class="campaign-card__content">
                        <div class="campaign-card__description campaign-card__description--letter-spacing">
                          <p>全部コミコミ(お一人様)</p>
                        </div>
                        <div class="campaign-card__price">
                          <div class="campaign-card__price-left campaign-card__price-left--resize">¥56,000</div>
                          <div class="campaign-card__price-right campaign-card__price-right--resize">¥46,000</div>
                        </div>
                      </div>
                    </div>
                  </li>
                </a>
                <a href="sub-campaign.html" class="side-contents__card-link">
                  <li class="side-contents__campaign-card campaign-card">
                    <img class="campaign-card__img campaign-card__img--resize"
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="透き通る海に浮かぶ船" />
                    <div class="campaign-card__body campaign-card__body--resize">
                      <div class="campaign-card__title campaign-card__title--center">
                        <p>貸切体験ダイビング</p>
                      </div>
                    </div>
                    <div class="campaign-card__info campaign-card__info--shrink">
                      <div class="campaign-card__content">
                        <div class="campaign-card__description campaign-card__description--letter-spacing">
                          <p>全部コミコミ(お一人様)</p>
                        </div>
                        <div class="campaign-card__price">
                          <div class="campaign-card__price-left campaign-card__price-left--resize">¥24,000</div>
                          <div class="campaign-card__price-right campaign-card__price-right--resize">¥18,000</div>
                        </div>
                      </div>
                    </div>
                  </li>
                </a>
              </ul>
              <div class="side-contents__campaign-btn">
                <a href="sub-campaign.html" class="btn"><span>View more</span></a>
              </div>
            </div>
            <div class="side-contents__archive">
              <div class="side-contents__header side-contents-header side-contents-header--archive">
                <h3 class="side-contents-header__title">アーカイブ</h3>
              </div>
              <ul class="side-contents__archive-years">
                <li class="side-contents__archive-year">
                  <details open>
                    <summary>2023</summary>
                    <ul class="side-contents__archive-months">
                      <li class="side-contents__archive-month">
                        <details>
                          <summary>3月</summary>
                        </details>
                      </li>
                      <li class="side-contents__archive-month">
                        <details>
                          <summary>2月</summary>
                        </details>
                      </li>
                      <li class="side-contents__archive-month">
                        <details>
                          <summary>1月</summary>
                        </details>
                      </li>
                    </ul>
                  </details>
                </li>
                <li class="side-contents__archive-year">
                  <details>
                    <summary>2022</summary>
                    <ul class="side-contents__archive-months">
                      <li class="side-contents__archive-month">
                        <details>
                          <summary>3月</summary>
                        </details>
                      </li>
                      <li class="side-contents__archive-month">
                        <details>
                          <summary>2月</summary>
                        </details>
                      </li>
                      <li class="side-contents__archive-month">
                        <details>
                          <summary>1月</summary>
                        </details>
                      </li>
                    </ul>
                  </details>
                </li>
              </ul>
            </div>
          </div>
        </aside>
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

<?php get_footer(); ?>