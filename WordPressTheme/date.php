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
<?php get_template_part('inc/breadcrumb') ?>

    <div class="sub-blog  sub-blog-layout">
      <div class="sub-blog__two-column sub-blog-two-column inner">
        <!----- main-contents ----->
        <div class="sub-blog-two-column__main-contents">
          <ul class="sub-blog-two-column__cards blog-cards blog-cards--two-column">
            <!-- メインループ -->
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
                    <p><?php echo wp_trim_words(get_the_content(), 80, '…'); ?></p>
                  </div>
                </div>
              </a>
            </li>
            <?php endwhile; endif; ?>
            <!--/メインループ -->
          </ul>
          <!----- pagination ----->
          <div class="sub-blog-two-column__pagenavi">
            <?php wp_pagenavi(); ?>
          </div>
        </div>
        <!----- side-contents ----->
        <?php get_sidebar() ?>
      </div>
    </div>


  </main>

<?php get_footer(); ?>