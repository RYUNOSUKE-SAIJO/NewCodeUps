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


<aside class="side-contents side-contents--layout">
  <div class="side-contents__inner">
    <!----- 人気記事 ----->
    <div class="side-contents__article">
      <div class="side-contents__header side-contents-header">
        <h3 class="side-contents-header__title">人気記事</h3>
      </div>
      <?php
      if ( function_exists('wpp_get_mostpopular') ) {
          wpp_get_mostpopular(array(
            'limit' => 3,
            'range' => 'last24hours',
            'thumbnail_width' => 121,
            'thumbnail_height' => 90,
            'stats_views' => 3,
            'stats_date' => 1,
            'wpp_date' => 'Y-m-d',
            'wpp_start' => '<ul class="wpost-items m_ranking">',
            'wpp_end' => '</ul>',
            'post_html' =>
              '<div class="wpost-item">
                <div class="wpost-item-img">{thumb}</div>
                <div class="wpost-item-body">
                  <div class="wpost-item-date">{date}</div>
                  <div class="wpost-item-title">{title}</div>
                </div>
              </div>'
          ));
      }
      ?>
    </div>
    <!----- 口コミ記事（新着） ----->
    <div class="side-contents__voice">
      <div class="side-contents__header side-contents-header">
        <h3 class="side-contents-header__title">口コミ</h3>
      </div>
      <?php $voice_query = new WP_Query(
        array(
          'post_type' => 'voice',  //voiceから持ってくる
          'posts_per_page' => 1,
          'orderby' => 'date',
          'order' => 'DESC',
        )
      );
      ?>
      <?php if ($voice_query->have_posts()) : ?>
        <?php while($voice_query->have_posts()) : ?>
          <?php $voice_query->the_post(); ?>
          <div class="side-contents__voice-container">
            <div class="side-contents__voice-img">
              <?php if(has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
              <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="<?php the_title(); ?>の画像">
              <?php endif; ?>
            </div>
            <p class="side-contents__voice-tag"><?php the_field('voice_gender'); ?></p>
            <p class="side-contents__voice-title"><?php the_title(); ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    <div class="side-contents__voice-btn">
      <a href="<?php echo $voice; ?>" class="btn"><span>View more</span></a>
    </div>
    </div>
    <!----- キャンペーン記事（新着） ----->
    <div class="side-contents__campaign">
      <div class="side-contents__header side-contents-header">
        <h3 class="side-contents-header__title">キャンペーン</h3>
      </div>
      <ul class="side-contents__campaign-cards">
        
        <?php $campaign_query = new WP_Query(
          array(
            'post_type' => 'campaign',  //campaignから持ってくる
            'posts_per_page' => 2,
            'orderby' => 'date',
            'order' => 'DESC',
          )
        );
        ?>
        <?php if ($campaign_query->have_posts()) : ?>
        <?php while($campaign_query->have_posts()) : ?>
        <?php $campaign_query->the_post(); ?>
        <a href="<?php echo $campaign; ?>" class="side-contents__card-link">
          <li class="side-contents__campaign-card campaign-card campaign-card--resize">
            <div class="campaign-card__img campaign-card__img--resize">
              <!----- アイキャッチ画像 ----->
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full'); ?>
              <?php else : ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage画像" />
              <?php endif; ?>
            </div>
            <!----- タイトル ----->
            <div class="campaign-card__body campaign-card__body--resize">
              <div class="campaign-card__title campaign-card__title--center">
                <p><?php the_title(); ?></p>
              </div>
            </div>
            <div class="campaign-card__info campaign-card__info--shrink">
              <div class="campaign-card__content">
                <div class="campaign-card__description campaign-card__description--letter-spacing">
                  <p>全部コミコミ(お一人様)</p>
                </div>
                <!----- 価格 ----->
                <div class="campaign-card__price">
                  <div class="campaign-card__price-left campaign-card__price-left--resize"><?php the_field('before_sale'); ?></div>
                  <div class="campaign-card__price-right campaign-card__price-right--resize"><?php the_field('after_sale'); ?></div>
                </div>
              </div>
            </div>
          </li>
        </a>
        <?php endwhile; ?>
        <?php endif; ?>
      <?php wp_reset_postdata(); ?>
      </ul>
      <div class="side-contents__campaign-btn">
        <a href="<?php echo $campaign; ?>" class="btn"><span>View more</span></a>
      </div>
    </div>
    <!----- 年別・月別アーカイブ ----->
    <div class="side-contents__archive">
      <div class="side-contents__header side-contents-header side-contents-header--archive">
        <h3 class="side-contents-header__title">アーカイブ</h3>
      </div>
      <div class="side-contents__archive-container">
        <?php
        // 現在の年を取得
        $current_year = date('Y');
        // 過去3年分のアーカイブをループで処理
        for ($year = $current_year; $year >= $current_year - 2; $year--) :
          $archive_link = get_year_link($year);
          // クエリの設定
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'date_query' => array(
              array(
                'year' => $year,
              ),
            ),
          );
          // クエリを実行
          $query = new WP_Query($args);
          // 記事が存在する場合の処理
          if ($query->have_posts()) :
            // この年が現在の年かどうかを判定
            $is_current_year = ($year === $current_year);
        ?>
        <div class="side-contents__archive-year">
          <div class="js-archive" open>
            <div class="side-contents__archive-title js-archive__title">
              <?php echo $year; ?>
            </div>
            <div class="side-contents__archive-months js-archive__content">
              <?php
              // 各月ごとにアーカイブを処理
              for ($month = 12; $month >= 1; $month--) :
                // この月のアーカイブページへのリンクを取得
                $archive_link = get_month_link($year, $month);
                // クエリの設定
                $args = array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'date_query' => array(
                    array(
                      'year' => $year,
                      'month' => $month,
                    ),
                  ),
                );
                // クエリを実行
                $query = new WP_Query($args);
                // 記事が存在する場合の処理
                if ($query->have_posts()) :
                  // 月のラベルを生成
                  $month_label = date('n月', mktime(0, 0, 0, $month, 1, $year)); // 記事数を取得
                  $post_count = $query->found_posts;
                ?>
                <div class="side-contents__archive-month">
                  <a href="<?php echo $archive_link; ?>">
                    <div class="js-archive">
                      <div class="side-contents__archive-title side-contents__archive-title--month js-archive__title"><?php echo $month_label; ?>(<?php echo $post_count; ?>)</div><!-- 記事数を表示 -->
                    </div>
                  </a>
                </div>
              <?php endif; ?>
              <?php endfor; ?>
            <?php wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php endfor; ?>
      <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</aside>