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
    <?php get_template_part('breadcrumb') ?>

    <div class="sub-price sub-price-layout">
      <div class="sub-price__inner inner">
        <div class="sub-price__table-container">
          <div class="sub-price__table sub-price-table">
          <!----- SCF(繰り返し1) ----->
          <?php
          $priceTable = SCF::get_option_meta('price-list_option', 'price-list_1');
          if ($priceTable && is_array($priceTable) && !empty($priceTable[0]['course_1'])) :
          ?>
            <div class="sub-price-table__container">
              <div class="sub-price-table__header">
                <img class="sub-price-table__header-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-table-header-img-pc.svg" alt="白鯨">
                <p class="sub-price-table__header-title">ライセンス講習</p>
              </div>
              <table id="price01" class="sub-price-table__table">
                <?php foreach ($priceTable as $priceItem) : ?>
                  <?php
                  $courseName = esc_html($priceItem['course_1']);
                  $coursePrice = esc_html($priceItem['price_1']);
                  ?>
                  <tr>
                    <td class="sub-price-table__course"><?php echo $courseName; ?></td>
                    <td class="sub-price-table__price"><?php echo $coursePrice; ?></td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
          <?php endif; ?>
          <!----- SCF(繰り返し2) ----->
          <?php
          $priceTable = SCF::get_option_meta('price-list_option', 'price-list_2');
          if ($priceTable && is_array($priceTable) && !empty($priceTable[0]['course_2'])) :
          ?>
            <div class="sub-price-table__container">
              <div class="sub-price-table__header">
                <img class="sub-price-table__header-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-table-header-img-pc.svg" alt="白鯨">
                <p class="sub-price-table__header-title">体験ダイビング</p>
              </div>
              <table id="price01" class="sub-price-table__table">
                <?php foreach ($priceTable as $priceItem) : ?>
                  <?php
                  $courseName = esc_html($priceItem['course_2']);
                  $coursePrice = esc_html($priceItem['price_2']);
                  ?>
                  <tr>
                    <td class="sub-price-table__course"><?php echo $courseName; ?></td>
                    <td class="sub-price-table__price"><?php echo $coursePrice; ?></td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
          <?php endif; ?>
          <!----- SCF(繰り返し3) ----->
          <?php
          $priceTable = SCF::get_option_meta('price-list_option', 'price-list_3');
          if ($priceTable && is_array($priceTable) && !empty($priceTable[0]['course_3'])) :
          ?>
            <div class="sub-price-table__container">
              <div class="sub-price-table__header">
                <img class="sub-price-table__header-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-table-header-img-pc.svg" alt="白鯨">
                <p class="sub-price-table__header-title">ファンダイビング</p>
              </div>
              <table id="price01" class="sub-price-table__table">
                <?php foreach ($priceTable as $priceItem) : ?>
                  <?php
                  $courseName = esc_html($priceItem['course_3']);
                  $coursePrice = esc_html($priceItem['price_3']);
                  ?>
                  <tr>
                    <td class="sub-price-table__course"><?php echo $courseName; ?></td>
                    <td class="sub-price-table__price"><?php echo $coursePrice; ?></td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
          <?php endif; ?>
          <!----- SCF(繰り返し4) ----->
          <?php
          $priceTable = SCF::get_option_meta('price-list_option', 'price-list_4');
          if ($priceTable && is_array($priceTable) && !empty($priceTable[0]['course_4'])) :
          ?>
            <div class="sub-price-table__container">
              <div class="sub-price-table__header">
                <img class="sub-price-table__header-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-table-header-img-pc.svg" alt="白鯨">
                <p class="sub-price-table__header-title">スペシャルダイビング</p>
              </div>
              <table id="price01" class="sub-price-table__table">
                <?php foreach ($priceTable as $priceItem) : ?>
                  <?php
                  $courseName = esc_html($priceItem['course_4']);
                  $coursePrice = esc_html($priceItem['price_4']);
                  ?>
                  <tr>
                    <td class="sub-price-table__course"><?php echo $courseName; ?></td>
                    <td class="sub-price-table__price"><?php echo $coursePrice; ?></td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>



  </main>

<?php get_footer(); ?>