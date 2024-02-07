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
    <?php get_template_part('breadcrumb') ?>

    <div class="sub-blog-single  sub-blog-single-layout">
      <div class="sub-blog-single__sub-blog-two-column sub-blog-two-column inner">
        <div class="sub-blog-two-column__sub-blog-detail sub-blog-detail">
          <div class="sub-blog-detail__content-area">
            <!--メインループ -->
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
              <time class="sub-blog-detail__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
              <h2 class="sub-blog-detail__header"><?php the_title(); ?></h2>
              <?php the_content(); ?>
            <?php endwhile; endif; ?>
            <div class="sub-blog-detail__pagenavi wp-pagenavi">
              <?php if (get_previous_post()):?>
                <?php previous_post_link('%link', '＜'); ?>
                <?php endif; ?>
                <?php if (get_next_post()):?>
                <?php next_post_link('%link', '＞'); ?>
              <?php endif; ?>
              <!--/メインループ -->
            </div>
          </div>
        </div>
        <!----- side-contents ----->
        <?php get_sidebar(); ?>
      </div>
    </div>


  </main>

<?php get_footer(); ?>