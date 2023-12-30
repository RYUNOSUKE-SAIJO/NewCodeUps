<?php 

function load_custom_scripts_and_styles() {
  // Favicon
    echo '<link rel="icon" href="' . esc_url(get_site_icon_url()) . '" />';

    // Google Fonts (2つ以上ある場合は１つずつ書く)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@400;700&display=swap');

    // CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), array(), '1.0.0');

    // JavaScript
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true);
    wp_enqueue_script('inview-js', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0.0', true);
    wp_enqueue_script('custom-js', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0.0', true);
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


//カスタム投稿表示件数（キャンペーン）
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_archive('campaign') ) { //カスタム投稿タイプを指定
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
