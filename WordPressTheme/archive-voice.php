<?php get_header(); ?>

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
            <!----- カスタム投稿のスラッグ"campaign"のリンクを取得 ----->
            <a class="tab-nav__tab is-active" href="<?php echo get_post_type_archive_link('voice') ?>">all</a>
            <?php $genre_terms = get_terms( 'voice_category', array( 'hide_empty' => false ) ); ?>
            <?php foreach ( $genre_terms as $genre_term ) : ?>
              <!----- 各タブのリンクを投稿に合わせて取得 ----->
              <a class="tab-nav__tab" href="<?php echo esc_url( get_term_link( $genre_term, 'voice_category' ) ); ?>"><?php echo esc_html( $genre_term->name ); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <!----- voice-cards ----->
        <ul class="sub-voice__cards voice-cards">
          <!-- ループ開始 -->
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <li class="voice-cards__card voice-card">
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
            </li>
          <?php endwhile; endif; ?>
          <!-- ループ終了 -->
        </ul>
        <!----- ページネーション ----->
        <div class="sub-voice__pagenavi wp-pagenavi">
          <?php wp_pagenavi(); ?>
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