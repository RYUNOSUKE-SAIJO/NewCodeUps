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
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign-fv-pc.jpg" media="(max-width: 768px)" />
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
<?php get_template_part('inc/breadcrumb') ?>

    <div class="sub-campaign sub-campaign-layout">
      <div class="sub-campaign__inner inner">
        <!----- タブ ----->
        <div class="sub-campaign__tab-nav tab-nav">
          <div class="tab-nav__tab-area">
            <!----- カスタム投稿のスラッグ"campaign"のリンクを取得 ----->
            <a class="tab-nav__tab is-active" href="<?php echo get_post_type_archive_link('campaign') ?>">all</a>
            <?php $genre_terms = get_terms( 'campaign_category', array( 'hide_empty' => false ) ); ?>
            <?php foreach ( $genre_terms as $genre_term ) : ?>
              <!----- 各タブのリンクを投稿に合わせて取得 ----->
              <a class="tab-nav__tab" href="<?php echo esc_url( get_term_link( $genre_term, 'campaign_category' ) ); ?>"><?php echo esc_html( $genre_term->name ); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="sub-campaign__cards campaign-cards">
        <!-- メインループ開始 -->
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
              <div class="campaign-card__tag">
                <p><?php echo esc_html( get_the_terms( get_the_ID(), 'campaign_category' )[0]->name ); ?></p>
              </div>
                <!----- タイトル ----->
                <div class="campaign-card__title campaign-card__title--wide">
                  <?php the_title(); ?>
                </div>
              </div>
              <div class="campaign-card__info campaign-card__info--wide">
                <div class="campaign-card__content">
                  <div class="campaign-card__description">
                    <p>全部コミコミ(お一人様)</p>
                  </div>
                  <!----- 価格 ----->
                  <?php if ($campaignPrice = get_field('campaign_price')) : ?>
                      <div class="campaign-card__price campaign-card--wide <?php echo empty($campaignPrice['before_sale']) ? 'without-gap' : 'with-gap'; ?>">
                          <?php if (!empty($campaignPrice['before_sale'])) : ?>
                          <div class="campaign-card__price-left"><?php echo $campaignPrice['before_sale']; ?></div>
                          <?php endif; ?>
                          <div class="campaign-card__price-right"><?php echo $campaignPrice['after_sale']; ?></div>
                      </div>
                  <?php endif; ?>
                </div>
                <div class="campaign-card__under-block">
                  <!----- 本文 ----->
                  <p class="campaign-card__text">
                    <?php the_field('campaign_content'); ?>
                  </p>
                  <!----- SALE期間 ----->
                  <time class="campaign-card__date">
                    <?php
                      $group_name = get_field('sale_date');	
                      if( $group_name ): ?>
                      <!-- グループの内容ここから -->
                      <?php echo $group_name['sale_start']; ?>
                      <?php echo $group_name['sale_end']; ?>
                      <!-- グループの内容ここまで -->
                    <?php endif; ?>
                  </time>
                  <p class="campaign-card__contact-text">
                    ご予約・お問い合わせはコチラ
                  </p>
                  <!----- ボタン ----->
                  <div class="campaign-card__btn-wrap">
                    <a href="<?php echo $contact; ?>" class="btn"><span>contact&nbsp;us</span></a>
                  </div>
                </div>
              </div>
            </div>
        <?php endwhile; endif; ?>
        <!-- ループ終了 -->
        </div>
        <!-- ページネーション -->
        <div class="sub-campaign__pagenavi">
          <?php wp_pagenavi(); ?>
        </div>
      </div>
    </div>


  </main>

<?php get_footer(); ?>