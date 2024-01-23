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
$contact_thanks = esc_url( home_url( '/$contact-thanks/' ) );
$contact_error = esc_url( home_url( '/$contact-error/' ) );
?>


<?php get_header(); ?>
  <main>
    <section class="sub-first-view">
      <div class="sub-first-view__inner">
        <picture class="sub-first-view__slide-img">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-fv-sp.jpg" media="(max-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-fv-pc.jpg" alt="海面から顔を出すダイバー" />
        </picture>
        <div class="sub-first-view__title-wrap">
          <h1 class="sub-first-view__main-title">price</h1>
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

    <div class="sub-price sub-price-layout">
      <div class="sub-price__inner inner">
        <div class="sub-price__table-container">
          <div class="sub-price__table sub-price-table">
            <div class="sub-price-table__container">
              <div class="sub-price-table__header">
                <img class="sub-price-table__header-img"
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-table-header-img-pc.svg" alt="白鯨">
                <p class="sub-price-table__header-title">ライセンス講習</p>
              </div>
              <table id="price01" class="sub-price-table__table">
                <!----- SCF(繰り返し1) ----->
                <?php
                $priceTable = SCF::get_option_meta( 'price-list_option', 'price-list_1' );
                if ($priceTable) {
                  foreach ($priceTable as $priceItem) {
                    $courseName = esc_html($priceItem['course_1']);
                    $coursePrice = esc_html($priceItem['price_1']);
                ?>
                  <tr>
                    <td class="sub-price-table__course"><?php echo $courseName; ?></td>
                    <td class="sub-price-table__price"><?php echo $coursePrice; ?></td>
                  </tr>
                <?php
                  }
                }
                ?>
              </table>
            </div>
            <div class="sub-price-table__container">
              <div class="sub-price-table__header">
                <img class="sub-price-table__header-img"
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-table-header-img-pc.svg" alt="白鯨">
                <p class="sub-price-table__header-title">体験ダイビング</p>
              </div>
              <table id="price02" class="sub-price-table__table">
                <!----- SCF(繰り返し2) ----->
                <?php
                $priceTable = SCF::get_option_meta( 'price-list_option', 'price-list_2' );
                if ($priceTable) {
                  foreach ($priceTable as $priceItem) {
                    $courseName = esc_html($priceItem['course_2']);
                    $coursePrice = esc_html($priceItem['price_2']);
                ?>
                  <tr>
                    <td class="sub-price-table__course"><?php echo $courseName; ?></td>
                    <td class="sub-price-table__price"><?php echo $coursePrice; ?></td>
                  </tr>
                <?php
                  }
                }
                ?>
              </table>
            </div>
            <div class="sub-price-table__container">
              <div class="sub-price-table__header">
                <img class="sub-price-table__header-img"
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-table-header-img-pc.svg" alt="白鯨">
                <p class="sub-price-table__header-title">ファンダイビング</p>
              </div>
              <table id="price03" class="sub-price-table__table">
                <!----- SCF(繰り返し3) ----->
                <?php
                $priceTable = SCF::get_option_meta( 'price-list_option', 'price-list_3' );
                if ($priceTable) {
                  foreach ($priceTable as $priceItem) {
                    $courseName = esc_html($priceItem['course_3']);
                    $coursePrice = esc_html($priceItem['price_3']);
                ?>
                  <tr>
                    <td class="sub-price-table__course"><?php echo $courseName; ?></td>
                    <td class="sub-price-table__price"><?php echo $coursePrice; ?></td>
                  </tr>
                <?php
                  }
                }
                ?>
              </table>
            </div>
            <div class="sub-price-table__container">
              <div class="sub-price-table__header">
                <img class="sub-price-table__header-img"
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-table-header-img-pc.svg" alt="白鯨">
                <p class="sub-price-table__header-title">スペシャルダイビング</p>
              </div>
              <table id="price04" class="sub-price-table__table">
                <!----- SCF(繰り返し4) ----->
                <?php
                $priceTable = SCF::get_option_meta( 'price-list_option', 'price-list_4' );
                if ($priceTable) {
                  foreach ($priceTable as $priceItem) {
                    $courseName = esc_html($priceItem['course_4']);
                    $coursePrice = esc_html($priceItem['price_4']);
                ?>
                  <tr>
                    <td class="sub-price-table__course"><?php echo $courseName; ?></td>
                    <td class="sub-price-table__price"><?php echo $coursePrice; ?></td>
                  </tr>
                <?php
                  }
                }
                ?>
              </table>
            </div>
          </div>
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
                <a href="<?php echo $contact; ?>" class="btn"><span>contact&nbsp;us</span></a>
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