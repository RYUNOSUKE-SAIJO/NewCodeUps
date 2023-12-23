
<aside class="sub-blog__side-contents side-contents">
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
            'stats_views' => 1,
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

      <div class="wpost-items">
      <?php $recent_query = new WP_Query(
        array(
          'post_type' => 'post',
          'posts_per_page' => 1,
          'orderby' => 'date',
          'order' => 'DESC',
        )
      );
      ?>
      <?php if ($recent_query->have_posts()) : ?>
        <?php while($recent_query->have_posts()) : ?>
          <?php $recent_query->the_post(); ?>
          <!-- wpost-item -->
          <a class="wpost-item" href="<?php the_permalink(); ?>">
            <div class="wpost-item-img">
              <?php if(has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
              <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
              <?php endif; ?>
            </div>
            <div class="wpost-item-body">
              <div class="wpost-item-title"><?php the_title(); ?></div>
            </div><!-- /wpost-item-body -->
          </a><!-- /wpost-item -->

        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

      </div><!-- /wpost-items -->



      <div class="side-contents__voice-container">
        <div class="side-contents__voice-img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/side-contents__voice.jpg" alt="カップル">
        </div>
        <p class="side-contents__voice-tag">30代(カップル)</p>
        <p class="side-contents__voice-title">ここにタイトルが入ります。ここにタイトル</p>
        <div class="side-contents__voice-btn">
          <a href="" class="btn"><span>View more</span></a>
        </div>
      </div>
    </div>
    <!----- キャンペーン記事（新着） ----->
    <div class="side-contents__campaign">
      <div class="side-contents__header side-contents-header">
        <h3 class="side-contents-header__title">キャンペーン</h3>
      </div>
      <ul class="side-contents__campaign-cards">
        <a href="sub-campaign.html" class="side-contents__card-link">
          <li class="side-contents__campaign-card campaign-card campaign-card--resize">
            <img class="campaign-card__img campaign-card__img--resize"
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg" alt="鮮やかな魚群" />
            <div class="campaign-card__body campaign-card__body--resize">
              <div class="campaign-card__title campaign-card__title--center">
                <p>ライセンス取得</p>
              </div>
            </div>
            <div class="campaign-card__info campaign-card__info--shrink">
              <div class="campaign-card__content">
                <div class="campaign-card__description campaign-card__description--letter-spacing">
                  <p>全部コミコミ(お一人様)</p>
                </div>
                <div class="campaign-card__price">
                  <div class="campaign-card__price-left campaign-card__price-left--resize">¥56,000</div>
                  <div class="campaign-card__price-right campaign-card__price-right--resize">¥46,000</div>
                </div>
              </div>
            </div>
          </li>
        </a>
        <a href="sub-campaign.html" class="side-contents__card-link">
          <li class="side-contents__campaign-card campaign-card">
            <img class="campaign-card__img campaign-card__img--resize"
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="透き通る海に浮かぶ船" />
            <div class="campaign-card__body campaign-card__body--resize">
              <div class="campaign-card__title campaign-card__title--center">
                <p>貸切体験ダイビング</p>
              </div>
            </div>
            <div class="campaign-card__info campaign-card__info--shrink">
              <div class="campaign-card__content">
                <div class="campaign-card__description campaign-card__description--letter-spacing">
                  <p>全部コミコミ(お一人様)</p>
                </div>
                <div class="campaign-card__price">
                  <div class="campaign-card__price-left campaign-card__price-left--resize">¥24,000</div>
                  <div class="campaign-card__price-right campaign-card__price-right--resize">¥18,000</div>
                </div>
              </div>
            </div>
          </li>
        </a>
      </ul>
      <div class="side-contents__campaign-btn">
        <a href="sub-campaign.html" class="btn"><span>View more</span></a>
      </div>
    </div>
    <!----- 年別・月別アーカイブ ----->
    <div class="side-contents__archive">
      <div class="side-contents__header side-contents-header side-contents-header--archive">
        <h3 class="side-contents-header__title">アーカイブ</h3>
      </div>
      <ul class="side-contents__archive-years">
        <li class="side-contents__archive-year">
          <details open>
            <summary>2023</summary>
            <ul class="side-contents__archive-months">
              <li class="side-contents__archive-month">
                <details>
                  <summary>3月</summary>
                </details>
              </li>
              <li class="side-contents__archive-month">
                <details>
                  <summary>2月</summary>
                </details>
              </li>
              <li class="side-contents__archive-month">
                <details>
                  <summary>1月</summary>
                </details>
              </li>
            </ul>
          </details>
        </li>
        <li class="side-contents__archive-year">
          <details>
            <summary>2022</summary>
            <ul class="side-contents__archive-months">
              <li class="side-contents__archive-month">
                <details>
                  <summary>3月</summary>
                </details>
              </li>
              <li class="side-contents__archive-month">
                <details>
                  <summary>2月</summary>
                </details>
              </li>
              <li class="side-contents__archive-month">
                <details>
                  <summary>1月</summary>
                </details>
              </li>
            </ul>
          </details>
        </li>
      </ul>
    </div>
  </div>
</aside>