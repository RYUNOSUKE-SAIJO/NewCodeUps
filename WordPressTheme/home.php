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

    <div class="sub-blog  sub-blog-layout">
      <div class="sub-blog__inner inner">
        <!----- main-contents ----->
        <div class="sub-blog__main-contents">
          <ul class="sub-blog__cards blog-cards blog-cards--two-column">
            <!-- ループ開始 -->
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
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
                    <p>
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <?php endwhile; endif; ?>
            <!-- ループ終了 -->
          </ul>
          <!----- pagination ----->
          <div class="sub-blog__pagenavi wp-pagenavi">
            <?php wp_pagenavi(); ?>
          </div>
        </div>
        <!----- side-contents ----->
        <?php get_sidebar() ?>
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