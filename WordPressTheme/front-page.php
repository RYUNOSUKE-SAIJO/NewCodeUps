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
    <!----- first-view ----->
    <section class="first-view">
      <div class="first-view__inner">
        <!----- オープニングアニメーション ----->
        <div class="opening">
          <span class="opening__mask"></span>
          <img class="opening__logo" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo.svg" alt="ロゴ">
        </div>
        <!----- スワイパー ----->
        <div class="swiper first-view__swiper js-fv-swiper">
          <div class="swiper-wrapper">
            <!----- ACFでグループを利用した場合の書き方 ----->
            <?php $first_view_sp = get_field('first-view_sp'); ?>
            <?php $first_view_pc = get_field('first-view_pc'); ?>
            <?php $first_view_alt = get_field('first-view_alt'); ?>
            <div class="swiper-slide">
              <div class="first-view__slide-img">
                <source srcset="<?php echo $first_view_sp['sp_1']; ?>" media="(max-width: 768px)" />
                <img src="<?php echo $first_view_pc['pc_1']; ?>" alt="<?php echo $first_view_alt['alt_1']; ?>" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="first-view__slide-img">
                <source srcset="<?php echo $first_view_sp['sp_2']; ?>" media="(max-width: 768px)" />
                <img src="<?php echo $first_view_pc['pc_2']; ?>" alt="<?php echo $first_view_alt['alt_2']; ?>" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="first-view__slide-img">
                <source srcset="<?php echo $first_view_sp['sp_3']; ?>" media="(max-width: 768px)" />
                <img src="<?php echo $first_view_pc['pc_3']; ?>" alt="<?php echo $first_view_alt['alt_3']; ?>" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="first-view__slide-img">
                <source srcset="<?php echo $first_view_sp['sp_4']; ?>" media="(max-width: 768px)" />
                <img src="<?php echo $first_view_pc['pc_4']; ?>" alt="<?php echo $first_view_alt['alt_4']; ?>" />
              </div>
            </div>
          </div>
          <div class="first-view__title-wrap">
            <h2 class="first-view__main-title">lagoon</h2>
            <p class="first-view__sub-title">feeling the sea</p>
          </div>
        </div>
      </div>
    </section>

    <!----- campaign ----->
    <section class="campaign campaign-layout">
      <div class="campaign__inner inner">
        <div class="campaign__section-title section-title">
          <p class="section-title__main">campaign</p>
          <h2 class="section-title__sub">キャンペーン</h2>
        </div>
        <ul class="campaign__cards">
          <!----- スワイパー ----->
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
                    <li class="campaign__card campaign-card">
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
                    </>
                  </div>
                  <?php wp_reset_postdata(); ?>
                <?php endwhile; endif; ?>
                <!-- ループ終了 -->
            </div>
          </div>
        </ul>
        <div class="swiper__button-wrap">
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="campaign__btn">
          <a href="<?php echo $campaign; ?>" class="btn"><span>View more</span></a>
        </div>
      </div>
    </section>

    <!----- about ----->
    <section class="about about-layout">
      <div class="about__inner inner">
        <div class="about__section-title section-title">
          <p class="section-title__main">about&nbsp;us</p>
          <h2 class="section-title__sub">私たちについて</h2>
        </div>
        <div class="about__view">
          <div class="about__view-vertical">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about1.jpg" alt="海中のクラゲ" />
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
              <p><span>水の中の幻想、写真で味わう。</span><br>ギャラリーページに足を踏み入れると、水中の幻想が写真から広がります。<br>ダイビングの美と冒険が、写真を通して優しく、けれども力強く伝わる瞬間。まるで水中にいるような錯覚が広がります。</p>
            </div>
            <div class="about__btn">
              <a href="<?php echo $about; ?>" class="btn"><span>View more</span></a>
            </div>
          </div>
        </div>
        <div class="about__sango">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-sango.svg" alt="珊瑚とイソギンチャク" />
        </div>
      </div>
    </section>

    <!----- information ----->
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
                <p>当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
              </div>
              <div class="information__btn">
                <a href="<?php echo $information; ?>" class="btn"><span>View more</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!----- blog ----->
    <section class="blog blog-layout">
      <div class="blog__inner inner">
        <div class="blog__section-title section-title">
          <p class="section-title__main section-title__main--white">Blog</p>
          <h2 class="section-title__sub section-title__sub--white">ブログ</h2>
        </div>
        <div class="blog__cards blog-cards">
        <?php
          $args = [
            'post_type' => 'post',
            'posts_per_page' => 3
          ];
          $blog_query = new WP_Query($args); ?>
          <!-- ループ開始 -->
          <?php if ($blog_query -> have_posts()): while ($blog_query -> have_posts()): $blog_query -> the_post(); ?>
          <li class="blog-cards__card blog-card">
            <a href="<?php the_permalink(); ?>" class="blog-card__link">
              <div class="blog-card__img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php else : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage画像" />
                <?php endif; ?>
              </div>
              <div class="blog-card__body">
                <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                <div class="blog-card__title blog-card__title--resize">
                  <p><?php the_title(); ?></p>
                </div>
                <div class="blog-card__text blog-card__text--narrow">
                  <p><?php echo wp_trim_words(get_the_content(), 80, '…'); ?></p>
                </div>
              </div>
            </a>
          </li>
          <?php endwhile; endif; ?>
          <!--/メインループ -->
        </div>
        <div class="blog__btn">
          <a href="<?php echo $blog; ?>" class="btn"><span>View more</span></a>
        </div>
      </div>
      <div class="blog__fish">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-fish.svg" alt="魚群の装飾" />
      </div>
    </section>

    <!----- voice ----->
    <section class="voice voice-layout">
      <div class="voice__inner inner">
        <div class="voice__section-title section-title">
          <p class="section-title__main">voice</p>
          <h2 class="section-title__sub">お客様の声</h2>
        </div>
        <div class="voice__cards voice-cards">
          <?php
            $args = [
              'post_type' => 'voice',
              'posts_per_page' => 2
            ];
            $voice_query = new WP_Query($args); ?>
          <!-- ループ開始 -->
          <?php if ($voice_query -> have_posts()): while ($voice_query -> have_posts()): $voice_query -> the_post(); ?>
            <div class="voice-cards__card voice-card">
              <div class="voice-card__header">
                <div class="voice-card__header-left">
                  <div class="voice-card__top">
                    <!----- 年代・性別 ----->
                    <div class="voice-card__gender">
                      <p><?php the_field('voice_gender'); ?></p>
                    </div>
                    <!----- タグ（taxonomy） ----->
                    <div class="voice-card__tag">
                      <p><?php echo esc_html( get_the_terms( get_the_ID(), 'voice_category' )[0]->name ); ?></p>
                    </div>
                  </div>
                  <!----- タイトル ----->
                  <div class="voice-card__title">
                    <p><?php the_title(); ?></p>
                  </div>
                </div>
                <div class="voice-card__header-right">
                  <!----- アイキャッチ画像 ----->
                  <div class="voice-card__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage画像" />
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="voice-card__body">
                <!----- 本文 ----->
                <div class="voice-card__text">
                  <p><?php the_field('voice_text'); ?></p>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
          <!-- ループ終了 -->
        </div>
        <div class="voice__btn">
          <a href="<?php echo $voice; ?>" class="btn"><span>View more</span></a>
        </div>
        <div class="voice__fish">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-fish.svg" alt="魚群の装飾" />
        </div>
        <div class="voice__seahorse">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-seahorse.svg" alt="タツノオトシゴの装飾" />
        </div>
      </div>
    </section>

    <!----- price ----->
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
                $priceTable = SCF::get_option_meta( 'price-list_option', 'price-list_1' );
                if ($priceTable) {
                  foreach ($priceTable as $priceItem) {
                    $courseName = esc_html($priceItem['course_1']);
                    $coursePrice = esc_html($priceItem['price_1']);
                ?>
                <div class="price__content-block">
                  <p class="price__content-block"><?php echo $courseName; ?></p>
                  <p class="price__content-price"><?php echo $coursePrice; ?></p>
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
                <?php
                $priceTable = SCF::get_option_meta( 'price-list_option', 'price-list_2' );
                if ($priceTable) {
                  foreach ($priceTable as $priceItem) {
                    $courseName = esc_html($priceItem['course_2']);
                    $coursePrice = esc_html($priceItem['price_2']);
                ?>
                <div class="price__content-block">
                  <p class="price__content-block"><?php echo $courseName; ?></p>
                  <p class="price__content-price"><?php echo $coursePrice; ?></p>
                </div>
                <?php
                  }
                }
                ?>
              </div>
            </div>
            <div class="price__block">
              <div class="price__index">
                <p>ファンダイビング</p>
              </div>
              <div class="price__content">
                <?php
                $priceTable = SCF::get_option_meta( 'price-list_option', 'price-list_3' );
                if ($priceTable) {
                  foreach ($priceTable as $priceItem) {
                    $courseName = esc_html($priceItem['course_3']);
                    $coursePrice = esc_html($priceItem['price_3']);
                ?>
                <div class="price__content-block">
                  <p class="price__content-block"><?php echo $courseName; ?></p>
                  <p class="price__content-price"><?php echo $coursePrice; ?></p>
                </div>
                <?php
                  }
                }
                ?>
              </div>
            </div>
            <div class="price__block">
              <div class="price__index">
                <p>スペシャルダイビング</p>
              </div>
              <div class="price__content">
                <?php
                $priceTable = SCF::get_option_meta( 'price-list_option', 'price-list_4' );
                if ($priceTable) {
                  foreach ($priceTable as $priceItem) {
                    $courseName = esc_html($priceItem['course_4']);
                    $coursePrice = esc_html($priceItem['price_4']);
                ?>
                <div class="price__content-block">
                  <p class="price__content-block"><?php echo $courseName; ?></p>
                  <p class="price__content-price"><?php echo $coursePrice; ?></p>
                </div>
                <?php
                  }
                }
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="price__btn">
          <a href="<?php echo $price; ?>" class="btn"><span>View more</span></a>
        </div>
      </div>
      <div class="price__fish">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-fish.svg" alt="魚群の装飾" />
      </div>
    </section>

    <!----- contact ----->
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

    <!----- to-top ----->
    <div class="to-top js-to-top" id="page-top">
      <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/go-top.svg" alt="トップへボタン" /></a>
    </div>
    
  </main>

<?php get_footer(); ?>
