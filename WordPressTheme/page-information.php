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
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-info-FV-sp.jpg" media="(max-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-info-FV-pc.jpg" alt="黄色の熱帯魚" />
        </picture>
        <div class="sub-first-view__title-wrap">
          <h1 class="sub-first-view__main-title">information</h1>
        </div>
      </div>
      <picture class="sub-first-view-fish">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-treat-left-sp.svg" media="(max-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-treat-left.svg" alt="キンギョハナダイ">
      </picture>
    </section>

<!----- パンくず ----->
<?php get_template_part('breadcrumb') ?>


    <section class="sub-information sub-information-layout">
      <!----- タブ切り替え ----->
      <div class="sub-information__inner inner">
        <div class="sub-information__tab tab">
          <!----- タブメニュー ----->
          <ul class="tab__menu">
            <li class="tab__menu-item js-tab-menu is-active" data-number="tab01" data-url="/path-to-ライセンス講習"><span class="tab-name1"></span><p>ライセンス<br>講習</p></li>
            <li class="tab__menu-item js-tab-menu" data-number="tab02"><span class="tab-name2"></span><p>ファン<br>ダイビング</p></li>
            <li class="tab__menu-item js-tab-menu" data-number="tab03"><span class="tab-name3"></span><p>体験<br>ダイビング</p></li>
          </ul>
          <!----- タブコンテンツ ----->
          <!----- ACFでグループを利用した場合の書き方 ----->
          <?php $information_1 = get_field('information_1'); ?>
          <?php $information_2 = get_field('information_2'); ?>
          <?php $information_3 = get_field('information_3'); ?>
          <ul class="tab__content">
            <li id="tab01" class="tab__content-item js-tab-content is-active">
              <div class="tab__content-item-left">
                <h3 class="tab__content-item-header">ライセンス講習</h3>
                <p class="tab__content-item-text"><?php echo $information_1['information_text_1']; ?></p>
              </div>
              <div class="tab__content-item-right">
                <img src="<?php echo $information_1['information_img_1']; ?>" alt="透き通る海に浮かぶダイバーたち">
              </div>
            </li>
            <li id="tab02" class="tab__content-item js-tab-content">
              <div class="tab__content-item-left">
                <h3 class="tab__content-item-header">ファンダイビング</h3>
                <p class="tab__content-item-text"><?php echo $information_2['information_text_2']; ?></p>
              </div>
              <div class="tab__content-item-right">
                <img src="<?php echo $information_2['information_img_2']; ?>" alt="マンタと泳ぐダイバー">
              </div>
            </li>
            <li id="tab03" class="tab__content-item js-tab-content">
              <div class="tab__content-item-left">
                <h3 class="tab__content-item-header">体験ダイビング</h3>
                <p class="tab__content-item-text"><?php echo $information_3['information_text_3']; ?></p>
              </div>
              <div class="tab__content-item-right">
                <img src="<?php echo $information_3['information_img_3']; ?>" alt="グループで海上に浮かぶダイバーたち">
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>


  </main>

<?php get_footer(); ?>