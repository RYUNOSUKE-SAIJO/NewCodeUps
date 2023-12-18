<?php get_header(); ?>

  <main>
    <section class="sub-first-view">
      <div class="sub-first-view__inner">
        <picture class="sub-first-view__slide-img">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign-fv-sp.jpg" media="(max-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign-fv-pc.jpg" alt="黄色の熱帯魚" />
        </picture>
        <div class="sub-first-view__title-wrap">
          <h1 class="sub-first-view__main-title">campaign</h1>
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

    <div class="sub-campaign sub-campaign-layout">
      <div class="sub-campaign__inner inner">
        <div class="sub-campaign__tab-nav tab-nav">
          <div class="tab-nav__tab-area">
            <div class="tab-nav__tab is-active"><a href="<?php echo get_post_type_archive_link('campaign') ?>">all</a></div>
            <?php $genre_terms = get_terms('genre', array('hide_empty'=>false)); ?>
            <?php foreach($genre_terms as $genre_term) : ?>
              <div class="tab-nav__tab"><a href="<?php echo get_term_link( $genre_term, 'genre'); ?>"><?php echo $genre_term->name; ?></a></div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="sub-campaign__cards campaign-cards">

        <!-- ループ開始 -->
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <div class="sub-campaign__card campaign-card campaign-card--wide">
              <!----- アイキャッチ画像 ----->
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage画像" />
              <?php endif; ?>
              <div class="campaign-card__body campaign-card__body--wide">
                <!----- タグ  (taxonomy) ----->
                <?php $category = get_the_category(); ?>
                <?php if ($category[0]) : ?>
                <div class="campaign-card__tag"><?php echo $category[0]->cat_name; ?></div>
                <?php endif; ?>
                <div class="campaign-card__title campaign-card__title--wide">
                  <!----- タイトル ----->
                  <?php the_title(); ?>
                </div>
              </div>
              <div class="campaign-card__info campaign-card__info--wide">
                <div class="campaign-card__content">
                  <div class="campaign-card__description">
                    <p>全部コミコミ(お一人様)</p>
                  </div>
                  <div class="campaign-card__price campaign-card__price--wide">
                    <!----- 価格  (field) ----->
                    <div class="campaign-card__price-left">¥56,000</div>
                    <div class="campaign-card__price-right">¥46,000</div>
                  </div>
                </div>
                <div class="campaign-card__under-block">
                  <p class="campaign-card__text">
                    <!----- 本文 ----->
                    <?php the_content(); ?>
                  </p>
                  <time class="campaign-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                  <p class="campaign-card__contact-text">
                    ご予約・お問い合わせはコチラ
                  </p>
                  <div class="campaign-card__btn-wrap">
                    <!----- ボタン ----->
                    <a href="<?php the_permalink(); ?>" class="btn"><span>contact&nbsp;us</span></a>
                  </div>
                </div>
              </div>
            </div>
        <?php endwhile; endif; ?>
        <!-- ループ終了 -->
        </div>
        <div class="sub-campaign__pagenavi wp-pagenavi">
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

<?php get_footer(); ?>