<?php 

function load_custom_scripts_and_styles() {
  // Favicon
  echo '<link rel="icon" href="' . esc_url(get_site_icon_url()) . '" />';

  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@400;700&display=swap');

  // CSS
  wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), array(), '1.0.0');
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');

  // JavaScript
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true);
  wp_enqueue_script('inview-js', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), '1.0.0', true);
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0.0', true);
  wp_enqueue_script('custom-js', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'load_custom_scripts_and_styles');

