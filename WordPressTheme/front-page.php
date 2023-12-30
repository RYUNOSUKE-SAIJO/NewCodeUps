<?php get_header(); ?>

  <main>
    <section class="first-view">
      <div class="first-view__inner">
        <div class="swiper first-view__swiper js-fv-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture class="first-view__slide-img">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/first-view-sp.jpg" media="(max-width: 768px)" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/first-view.jpg" alt="ウミガメ" />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="first-view__slide-img">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-sp-1.jpg" media="(max-width: 768px)" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-pc-1.jpg" alt="綺麗なビーチ" />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="first-view__slide-img">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-sp-2.jpg" media="(max-width: 768px)" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-pc-2.jpg" alt="海に浮かぶ船" />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="first-view__slide-img">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-sp-3.jpg" media="(max-width: 768px)" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-pc-3.jpg" alt="海中を泳ぐウミガメ" />
              </picture>
            </div>
          </div>
          <div class="first-view__title-wrap">
            <h2 class="first-view__main-title">diving</h2>
            <p class="first-view__sub-title">into the ocean</p>
          </div>
        </div>
      </div>
    </section>

    <section class="campaign campaign-layout">
      <div class="campaign__inner inner">
        <div class="campaign__section-title section-title">
          <p class="section-title__main">campaign</p>
          <h2 class="section-title__sub">キャンペーン</h2>
        </div>
        <div class="campaign__cards">
          <div class="swiper mySwiper campaign__swiper js-campaign-swiper">
            <div class="swiper-wrapper">
                <?php
                $args = [
                  'post_type' => 'campaign',
                  'posts_per_page' => 8
                ];
                $campaign_query = new WP_Query($args); ?>
                <!-- ループ開始 -->
                <?php if ($campaign_query -> have_posts()) : ?>
                  <?php while ($campaign_query -> have_posts()) : ?>
                  <?php $campaign_query -> the_post(); ?>
                  <div class="swiper-slide">
                    <div class="campaign__card campaign-card">
                      <!----- アイキャッチ画像 ----->
                      <div class="campaign-card__img">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('full'); ?>
                          <?php else : ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage画像" />
                        <?php endif; ?>
                      </div>
                      <div class="campaign-card__body">
                        <!----- タグ  (taxonomy) ----->
                        <div class="campaign-card__tag">
                          <p><?php echo esc_html( get_the_terms( get_the_ID(), 'campaign_category' )[0]->name ); ?></p>
                        </div>
                        <!----- タイトル ----->
                        <div class="campaign-card__title">
                          <p><?php the_title(); ?></p>
                        </div>
                      </div>
                      <div class="campaign-card__info">
                        <div class="campaign-card__content">
                          <div class="campaign-card__description">
                            <p>全部コミコミ(お一人様)</p>
                          </div>
                          <!----- 価格 ----->
                          <div class="campaign-card__price">
                            <div class="campaign-card__price-left"><?php the_field('before_sale'); ?></div>
                            <div class="campaign-card__price-right"><?php the_field('after_sale'); ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php wp_reset_postdata(); ?>
                <?php endwhile; endif; ?>
                <!-- ループ終了 -->
            </div>
          </div>
        </div>
        <div class="swiper__button-wrap">
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="campaign__btn">
          <a href="sub-campaign.html" class="btn"><span>View more</span></a>
        </div>
      </div>
    </section>

    <section class="about about-layout">
      <div class="about__inner inner">
        <div class="about__section-title section-title">
          <p class="section-title__main">about&nbsp;us</p>
          <h2 class="section-title__sub">私たちについて</h2>
        </div>
        <div class="about__view">
          <div class="about__view-vertical">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about1.jpg" alt="屋根上のシーサー" />
          </div>
          <div class="about__view-side">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about2.jpg" alt="海中の熱帯魚" />
          </div>
        </div>
        <div class="about__content">
          <div class="about__content-left">
            <div class="about__main-title">
              <h3>Dive&nbsp;into<br />the&nbsp;Ocean</h3>
            </div>
          </div>
          <div class="about__content-right">
            <div class="about__description">
              <p>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
            <div class="about__btn">
              <a href="sub-about.html" class="btn"><span>View more</span></a>
            </div>
          </div>
        </div>
        <div class="about__sango">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-sango.svg" alt="珊瑚とイソギンチャク" />
        </div>
      </div>
    </section>

    <section class="information information-layout">
      <div class="information__inner inner">
        <div class="information__section-title section-title">
          <p class="section-title__main">information</p>
          <h2 class="section-title__sub">ダイビング情報</h2>
        </div>
        <div class="information__container">
          <div class="information__left">
            <div class="information__left-img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information.jpg" alt="海を泳ぐ黄色の熱帯魚" />
            </div>
          </div>
          <div class="information__right">
            <div class="information__body">
              <div class="information__title">
                <p>ライセンス講習</p>
              </div>
              <div class="information__text">
                <p>
                  当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                </p>
              </div>
              <div class="information__btn">
                <a href="sub-information.html" class="btn"><span>View more</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog blog-layout">
      <div class="blog__inner inner">
        <div class="blog__section-title section-title">
          <p class="section-title__main section-title__main--white">Blog</p>
          <h2 class="section-title__sub section-title__sub--white">ブログ</h2>
        </div>
        <div class="blog__cards blog-cards">
          <div class="blog-cards__card blog-card">
            <a href="sub-blog.html" class="blog-card__link">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-1.jpg" alt="珊瑚礁" />
              </div>
              <div class="blog-card__body">
                <time class="blog-card__date" datetime="2023-11-27">2023.11.17</time>
                <div class="blog-card__title">
                  <p>ライセンス取得</p>
                </div>
                <div class="blog-card__text">
                  <p>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="blog-cards__card blog-card">
            <a href="sub-blog.html" class="blog-card__link">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-2.jpg" alt="ウミガメ" />
              </div>
              <div class="blog-card__body">
                <time class="blog-card__date" datetime="2023-11-27">2023.11.17</time>
                <div class="blog-card__title">
                  <p>ウミガメと泳ぐ</p>
                </div>
                <div class="blog-card__text">
                  <p>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="blog-cards__card blog-card">
            <a href="sub-blog.html" class="blog-card__link">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-3.jpg" alt="カクレクマノミ" />
              </div>
              <div class="blog-card__body">
                <time class="blog-card__date" datetime="2023-11-27">2023.11.17</time>
                <div class="blog-card__title">
                  <p>カクレクマノミ</p>
                </div>
                <div class="blog-card__text">
                  <p>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="blog__btn">
          <a href="sub-blog.html" class="btn"><span>View more</span></a>
        </div>
      </div>
      <div class="blog__fish">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-fish.svg" alt="魚群の装飾" />
      </div>
    </section>

    <section class="voice voice-layout">
      <div class="voice__inner inner">
        <div class="voice__section-title section-title">
          <p class="section-title__main">voice</p>
          <h2 class="section-title__sub">お客様の声</h2>
        </div>
        <div class="voice__cards voice-cards">
          <div class="voice-cards__card voice-card">
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
          </div>
          <div class="voice-cards__card voice-card">
            <div class="voice-card__header">
              <div class="voice-card__header-left">
                <div class="voice-card__top">
                  <div class="voice-card__gender">
                    <p>20代(男性)</p>
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
          </div>
        </div>
        <div class="voice__btn">
          <a href="sub-voice.html" class="btn"><span>View more</span></a>
        </div>
        <div class="voice__fish">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-fish.svg" alt="魚群の装飾" />
        </div>
        <div class="voice__seahorse">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-seahorse.svg" alt="タツノオトシゴの装飾" />
        </div>
      </div>
    </section>

    <section class="price price-layout">
      <div class="price__inner inner">
        <div class="price__section-title section-title">
          <p class="section-title__main">price</p>
          <h2 class="section-title__sub">料金一覧</h2>
        </div>
        <div class="price__container">
          <picture class="price__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price.jpg" alt="海中を泳ぐウミガメ" media="(max-width: 768px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.jpg" alt="海中を漂う赤い小魚の群れ" />
          </picture>
          <div class="price__body">
            <div class="price__block">
              <div class="price__index">
                <p>ライセンス講習</p>
              </div>
              <div class="price__content">
                <?php
                $priceTable = SCF::get_option_meta( 'price-list_option', 'price_list_1' );
                if ($priceTable) {
                  foreach ($priceTable as $priceItem) {
                    $course = esc_html($priceItem['course_1']);
                    $price = esc_html($priceItem['price_1']);
                ?>
                <div class="price__content-block">
                  <p class="price__content-block"><?php echo $course; ?></p>
                  <p class="price__content-price"><?php echo $price; ?></p>
                </div>
                <?php
                  }
                }
                ?>
              </div>
            </div>
            <div class="price__block">
              <div class="price__index">
                <p>体験ダイビング</p>
              </div>
              <div class="price__content">
                <div class="price__content-block">
                  <p>ビーチ体験ダイビング(半日)</p>
                  <p class="price__content-price">¥7,000</p>
                </div>
                <div class="price__content-block">
                  <p>ビーチ体験ダイビング(1日)</p>
                  <p class="price__content-price">¥14,000</p>
                </div>
                <div class="price__content-block">
                  <p>ボート体験ダイビング(半日)</p>
                  <p class="price__content-price">¥10,000</p>
                </div>
                <div class="price__content-block">
                  <p>ボート体験ダイビング(1日)</p>
                  <p class="price__content-price">¥18,000</p>
                </div>
              </div>
            </div>
            <div class="price__block">
              <div class="price__index">
                <p>ファンダイビング</p>
              </div>
              <div class="price__content">
                <div class="price__content-block">
                  <p>ビーチダイビング(2ダイブ)</p>
                  <p class="price__content-price">¥14,000</p>
                </div>
                <div class="price__content-block">
                  <p>ボートダイビング(2ダイブ)</p>
                  <p class="price__content-price">¥18,000</p>
                </div>
                <div class="price__content-block">
                  <p>スペシャルダイビング(2ダイブ)</p>
                  <p class="price__content-price">¥24,000</p>
                </div>
                <div class="price__content-block">
                  <p>ナイトダイビング(1ダイブ)</p>
                  <p class="price__content-price">¥10,000</p>
                </div>
              </div>
            </div>
            <div class="price__block">
              <div class="price__index">
                <p>スペシャルダイビング</p>
              </div>
              <div class="price__content">
                <div class="price__content-block">
                  <p>貸切ダイビング(2ダイブ)</p>
                  <p class="price__content-price">¥24,000</p>
                </div>
                <div class="price__content-block">
                  <p>1日ダイビング(3ダイブ)</p>
                  <p class="price__content-price">¥32,000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="price__btn">
          <a href="sub-price.html" class="btn"><span>View more</span></a>
        </div>
      </div>
      <div class="price__fish">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-fish.svg" alt="魚群の装飾" />
      </div>
    </section>

    <section class="contact contact-layout">
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