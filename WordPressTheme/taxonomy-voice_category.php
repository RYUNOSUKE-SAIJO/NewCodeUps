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
<?php get_template_part('breadcrumb') ?>

    <div class="sub-voice sub-voice-layout">
      <div class="sub-voice__inner inner">
        <!----- tab ----->
        <div class="sub-voice__tab-nav tab-nav">
          <div class="tab-nav__tab-area">
            <!----- get_queried_object();でゲットした内容から、$voice_category_itemに名前部分だけを取得させてる ----->
            <?php
              $voice_category_items = get_queried_object();
              $voice_category_item = $voice_category_items->name;
            ?>
            <!----- カスタム投稿のスラッグ"voice"のリンクを取得 ----->
            <a class="tab-nav__tab" href="<?php echo get_post_type_archive_link('voice') ?>">all</a>
            <?php $genre_terms = get_terms('voice_category', array('hide_empty' => false)); ?>
            <?php foreach ($genre_terms as $genre_term) : ?>
              <!----- 先程取得した、$voice_category_item と $genre_term->name が一致した場合、tab-nav__tab に is-active を付与している ----->
              <a class="tab-nav__tab <?php if ($voice_category_item === $genre_term->name) { echo "is-active"; } ?>" href="<?php echo esc_url(get_term_link($genre_term, 'voice_category')); ?>"><?php echo esc_html($genre_term->name); ?></a>
            <?php endforeach; ?>
          </div>
        </div>

        <!----- voice-cards ----->
        <?php if (have_posts()): ?>
          <ul class="sub-voice__cards voice-cards">
            <!-- ループ開始 -->
            <?php while (have_posts()): the_post(); ?>
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
            <?php endwhile; ?>
            <!-- ループ終了 -->
          </ul>
        <?php else: ?>
          <p class="voice-card--nopost">Coming Soon...</p>
        <?php endif; ?>
        
        <!----- ページネーション ----->
        <div class="sub-voice__pagenavi">
          <?php wp_pagenavi(); ?>
        </div>
      </div>
    </div>


  </main>

<?php get_footer(); ?>