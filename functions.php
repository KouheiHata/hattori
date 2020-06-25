<?php

// Wordpressバージョン情報の削除
remove_action('wp_head','wp_generator');

// ウィジェット
register_sidebar();

// RSSフィード
add_theme_support( 'automatic-feed-links' );

// 概要(抜粋)の文字数
function my_length($length) {
      return 100;
}
add_filter('excerpt_mblength','my_length');

// 概要(抜粋)の省略記号
function my_more($more) {
      return '...';
}
add_filter('excerpt_more', 'my_more');

// 改行埋め
str_replace( "\n", "", get_the_excerpt() ); 

// アイキャッチ有効化
add_theme_support( 'post-thumbnails' );

// Wordpressのご利用ありがとうございますの編集
add_filter('admin_footer_text', 'custom_admin_footer'); 
function custom_admin_footer() { 
    echo 'お困りの場合は、お気軽に<a href="mailto:abuse.zenshin@gmail.com">メールにてお問い合わせ</a>ください。'; 
} 

// 画像alt自動設定
function auto_set_alt($response, $attachment, $meta) {
if (empty($response['alt']))
$response['alt'] = $response['title'];
return $response;
}
add_filter('wp_prepare_attachment_for_js', 'auto_set_alt', 10, 3);

//管理者名を表示しない設定。
function theme_slug_redirect_author_archive() {
    if (is_author() ) {
        wp_redirect( home_url());
        exit;
    }
}
add_action( 'template_redirect', 'theme_slug_redirect_author_archive' );

//西暦和暦変換
function wareki($ymd)
{
list($y,$m,$d) = explode("/",$ymd);
$m = str_pad($m,2,0,STR_PAD_LEFT);
$d = str_pad($d,2,0,STR_PAD_LEFT);
 
$ymd = $y.$m.$d;
if ($ymd <= "19120729") {
$gg = "明治";
$yy = $y - 1867;
} elseif ($ymd >= "19120730" && $ymd <= "19261224") {
$gg = "大正";
$yy = $y - 1911;
} elseif ($ymd >= "19261225" && $ymd <= "19890107") {
$gg = "昭和";
$yy = $y - 1925;
} elseif ($ymd >= "19890108" && $ymd <= "20190430") {
$gg = "平成";
$yy = $y - 1988;
} elseif ($ymd >= "20190501") {
$gg = "令和";
$yy = $y - 2018;
}
 
$strm = ltrim($m, '0');
$strd = ltrim($d, '0');
 
if ($yy == 1) {
$yy = "元";
}
 
$wareki = "{$gg}{$yy}年";
return $wareki;
}


//　改行の時に自動的にPタグが挿入されるのを防ぐ
// remove_filter('the_content', 'wpautop');
// remove_filter( 'the_excerpt', 'wpautop' );

// Remove auto p from Contact Form 7 shortcode output
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
} 

//Jetpack Page Speed Insightモバイル向け対策
function dequeue_devicepx() {
wp_dequeue_script( 'devicepx' );
}
add_action( 'wp_enqueue_scripts', 'dequeue_devicepx', 20 );
 

// サムネイル画像を利用
add_theme_support( 'post-thumbnails', array( 'team' ) );
the_post_thumbnail('medium');

// 不要なウィジェット類を非表示
function example_remove_dashboard_widgets() {
 if (!current_user_can('administrator')) { //管理者以下のユーザーの場合ウィジェットをunsetする
 global $wp_meta_boxes;
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // 最近のコメント
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // 被リンク
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // プラグイン
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // クイック投稿
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // 最近の下書き
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPressブログ
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPressフォーラム
 }
 }
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets');


// ビジュアルエディタ用css使用宣言
add_editor_style( 'editor-style.css' );

//エディタから見出し,h1,h2,h5,h6選択できないようにする
function custom_editor_settings( $initArray ) {
$initArray['body_class'] = 'editor-area';
$initArray['block_formats'] = "段落=p; 見出し3=h3; 見出し4=h4;";//必要なタグを記述
return $initArray;
}
 
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

// 管理者のみ管理バーを表示
function my_function_admin_bar($content) {
  return ( current_user_can("administrator") ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// wp_list_categories にカテゴリースラッグの class が出力
function add_cat_slug_class( $output, $args ) {
    $regex = '/<li class="cat-item cat-item-([\d]+)[^"]*">/';
    $taxonomy = isset( $args['taxonomy'] ) && taxonomy_exists( $args['taxonomy'] ) ? $args['taxonomy'] : 'category';
     
    preg_match_all( $regex, $output, $m );
     
    if ( ! empty( $m[1] ) ) {
        $replace = array();
        foreach ( $m[1] as $term_id ) {
            $term = get_term( $term_id, $taxonomy );
            if ( $term && ! is_wp_error( $term ) ) {
                $replace['/<li class="cat-item cat-item-' . $term_id . '("| )/'] = '<li class="cat-item cat-item-' . $term_id . ' cat-item-' . esc_attr( $term->slug ) . '$1';
            }
        }
        $output = preg_replace( array_keys( $replace ), $replace, $output );
    }
    return $output;
}
add_filter( 'wp_list_categories', 'add_cat_slug_class', 10, 2 );

// 固定ページへの画像相対パス設定
function replaceImagePath($arg) {
	$content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
	return $content;
}  
add_action('the_content', 'replaceImagePath');
