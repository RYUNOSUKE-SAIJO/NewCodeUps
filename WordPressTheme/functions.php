<?php

function load_custom_scripts_and_styles() {
    // Favicon
    echo '<link rel="icon" href="' . esc_url(get_site_icon_url()) . '" />';

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@400;700&display=swap', array(), null );

    // CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), array(), '1.0.0');

    // JavaScript
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true);
    wp_enqueue_script('inview-js', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0.0', true);
    wp_enqueue_script('split-type', 'https://unpkg.com/split-type', array(), null, true);
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js', array(), '3.12.4', true);
    wp_enqueue_script('custom-js-script', get_theme_file_uri('/assets/js/script.js'), array('jquery', 'split-type', 'gsap'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'load_custom_scripts_and_styles');


function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );



	//投稿表示件数（キャンペーン）
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_archive('campaign') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '4' ); //表示件数を指定
    }
		//投稿表示件数（お客様の声）
    if ( $query->is_archive('voice') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '4' ); //表示件数を指定
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );



//Smart Custom Fields(SCF)
/**
 * (1)@param string $page_title ページのtitle属性値
 * (2)@param string $menu_title 管理画面のメニューに表示するタイトル
 * (3)@param string $capability メニューを操作できる権限（manage_options とか）
 * (4)@param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * (5)@param string|null $icon_url メニューに表示するアイコン(調べると出てくる)
 * (6)@param int $position メニューの位置
 */

SCF::add_options_page(
	'料金一覧',
	'料金一覧',
	'manage_options',
	'price-list_option',
	'dashicons-editor-table',
	6
);
SCF::add_options_page(
	'ギャラリー',
	'ギャラリー',
	'manage_options',
	'gallery_option',
	'dashicons-format-gallery',
	7
);
SCF::add_options_page(
	'よくある質問',
	'よくある質問',
	'manage_options',
	'faq_option',
	'dashicons-format-status',
	8
);


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 


// Contact Form7の送信ボタンをクリックした後の遷移先設定
add_action( 'wp_footer', 'add_origin_thanks_page' );
	function add_origin_thanks_page() {
	$thanks = home_url('/contact-thanks/');
		echo <<< EOC
			<script>
				var thanksPage = {
					370: '{$thanks}',
				};
			document.addEventListener( 'wpcf7mailsent', function( event ) {
				location = thanksPage[event.detail.contactFormId];
			}, false );
			</script>
		EOC;
  }


//管理画面のブロックエディターを消去する
function remove_wysiwyg() {
    remove_post_type_support( 'campaign', 'editor' );
    remove_post_type_support( 'voice', 'editor' );
    //複数ある場合は追記する
}
add_action( 'init' , 'remove_wysiwyg' );


function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'ブログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}

function Change_objectlabel() {
	global $wp_post_types;
	$name = 'ブログ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );



//date.phpのアーカイブタイトル変更
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_year()) {
    $title = get_the_time('Y年'); // 年アーカイブのときのタイトル
  } elseif (is_month()) {
    $title = get_the_time('Y年n月'); // 月アーカイブのときのタイトル
  } elseif (is_search()) {
    $title = '検索結果：' . esc_html(get_search_query(false));
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {

  }
  return $title;
});
