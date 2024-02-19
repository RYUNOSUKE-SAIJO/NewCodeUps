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
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-FV-SP.jpg" media="(max-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-FV-PC.jpg" alt="黄色の熱帯魚" />
        </picture>
        <div class="sub-first-view__title-wrap">
          <h1 class="sub-first-view__main-title sub-first-view__main-title--uppercace">about&nbsp;us</h1>
        </div>
      </div>
      <picture class="sub-first-view-fish">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-treat-left-sp.svg" media="(max-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-treat-left.svg" alt="キンギョハナダイ">
      </picture>
    </section>

    <!----- パンくず ----->
    <?php get_template_part('inc/breadcrumb') ?>

    <div class="sub-about about sub-about-layout">
      <div class="about__inner inner">
        <div class="about__view">
          <div class="about__view-vertical about__view-vertical--none">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about1.jpg" alt="屋根上のシーサー" />
          </div>
          <div class="about__view-side about__view-side--wide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about2.jpg" alt="海中の熱帯魚" />
          </div>
        </div>
        <div class="about__content about__content--layout">
          <div class="about__content-left">
            <div class="about__main-title about__main-title--layout">
              <h3>Dive&nbsp;into<br />the&nbsp;Ocean</h3>
            </div>
          </div>
          <div class="about__content-right">
            <div class="about__description about__description--layout">
              <p><span>深海の奇跡、瞬間の美。</span><br>ギャラリーページへようこそ！ここでは、ダイビングの魅力が一眼レフのレンズを通して捉えられた瞬間をお楽しみいただけます。青い海に浮かぶ色とりどりの生態、神秘的な洞窟の中で輝く光。写真が紡ぐ物語で、ダイビングの不思議な世界へご招待します。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-about__fish">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-fish.svg" alt="魚群の装飾" />
      </div>

      <section class="sub-about__gallery gallery">
        <?php
          $galleryList = SCF::get_option_meta( 'gallery_option', 'gallery-list' );
          $hasGalleryItems = false;
          foreach ($galleryList as $fields) {
            if (!empty($fields['gallery_item'])) {
              $hasGalleryItems = true;
              break;
            }
          }
          if ($hasGalleryItems) {
        ?>
        <div class="gallery__inner inner">
          <div class="gallery__section-title section-title">
            <p class="section-title__main section-title__main--indent">gallery</p>
            <h2 class="section-title__sub">フォト</h2>
          </div>
          <div class="gallery__wrap">
            <ul class="gallery__container">
              <?php
                foreach ($galleryList as $fields) {
                  $imgUrl = wp_get_attachment_image_src($fields['gallery_item'], 'full');
              ?>
              <li class="gallery__item">
                <?php if ($fields['gallery_item'] === "") { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/noImage.jpg">
                <?php } else { ?>
                  <img src="<?php echo $imgUrl[0]; ?>" alt="ギャラリーの写真">
                <?php
                }
                ?>
              </li>
              <?php } ?>
            </ul>
          </div>
          <div class="gallery__modal-block js-gallery__modal-block">
            <div class="gallery__modal-img">
              <img id="popup" src="#">
            </div>
          </div>
        </div>
        <?php } ?>
      </section>
    </div>
  </main>

<?php get_footer(); ?>