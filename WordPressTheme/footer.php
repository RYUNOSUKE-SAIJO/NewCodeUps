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
  
  
  <footer class="footer footer-layout" id="footer">
    <div class="footer__inner inner">
      <div class="footer__header">
        <div class="footer__logo">
          <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-logo.svg" alt="当サイトのロゴ" /></a>
        </div>
        <div class="footer__sns-logo">
          <div class="footer__facebook">
            <a href="#" rel="noopener noreferrer" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.svg" alt="Facebookのロゴ" /></a>
          </div>
          <div class="footer__instagram">
            <a href="#" rel="noopener noreferrer" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogo.svg" alt="instagramのロゴ" /></a>
          </div>
        </div>
      </div>
      <div class="footer__body">
        <div class="footer__container">
          <div class="footer__left">
            <ul class="footer__items">
              <li class="footer__item footer__item--bold">
                <a href="<?php echo $campaign; ?>">キャンペーン</a>
              </li>
              <li class="footer__item">
                <a href="<?php echo $campaign; ?>">ライセンス取得</a>
              </li>
              <li class="footer__item">
                <a href="<?php echo $campaign; ?>">貸切体験ダイビング</a>
              </li>
              <li class="footer__item">
                <a href="<?php echo $campaign; ?>">ナイトダイビング</a>
              </li>
              <li class="footer__item footer__item--bold">
                <a href="<?php echo $about; ?>">私たちについて</a>
              </li>
            </ul>
            <ul class="footer__items footer__items_second">
              <li class="footer__item footer__item--bold">
                <a href="<?php echo $information; ?>">ダイビング情報</a>
              </li>
              <li class="footer__item">
                <a href="<?php echo $information; ?>">ライセンス講習</a>
              </li>
              <li class="footer__item">
                <a href="<?php echo $information; ?>">体験ダイビング</a>
              </li>
              <li class="footer__item">
                <a href="<?php echo $information; ?>">ファンダイビング</a>
              </li>
              <li class="footer__item footer__item--bold">
                <a href="<?php echo $blog; ?>">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="footer__right">
            <ul class="footer__items">
              <li class="footer__item footer__item--bold">
                <a href="<?php echo $voice; ?>">お客様の声</a>
              </li>
              <li class="footer__item footer__item--bold">
                <a href="<?php echo $price; ?>">料金一覧</a>
              </li>
              <li class="footer__item">
                <a href="<?php echo $price; ?>">ライセンス講習</a>
              </li>
              <li class="footer__item">
                <a href="<?php echo $price; ?>">体験ダイビング</a>
              </li>
              <li class="footer__item">
                <a href="<?php echo $price; ?>">ファンダイビング</a>
              </li>
            </ul>
            <ul class="footer__items">
              <li class="footer__item footer__item--bold">
                <a href="<?php echo $blog; ?>">よくある質問</a>
              </li>
              <li class="footer__item footer__item--bold">
                <a href="<?php echo $privacy_policy; ?>">プライバシー<span><br /></span>ポリシー</a>
              </li>
              <li class="footer__item footer__item--bold">
                <a href="<?php echo $terms_of_service; ?>">利用規約</a>
              </li>
              <li class="footer__item footer__item--bold">
                <a href="<?php echo $contact; ?>">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer__copy-right-wrap">
        <small class="footer__copy-right">
          Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.
        </small>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>