<?php
/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
        'html5',
        array( //HTML5でマークアップ
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );



/**
* CSSとJavaScriptの読み込み
*
* @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
*/
function my_script_init()
{
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.1', 'all');
    wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/css/animate.css', array(), null, 'all');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');
    wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), '1.1.2', false);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
    // if( is_single() ){
    //     wp_enqueue_script('sns', get_template_directory_uri() . '/js/sns.js', array( 'jquery' ), '1.0.0', true);
    // }
}
add_action('wp_enqueue_scripts', 'my_script_init');

// function library_scripts() {
//     wp_enqueue_style( 'style_highlight', get_template_directory_uri() . '/css/monokai.css', array(), null, 'all');
//     wp_enqueue_script( 'js_highlight', get_template_directory_uri() . '/js/highlight.pack.js', array());
// }
// add_action( 'wp_enqueue_scripts', 'library_scripts' );


// //コンタクトフォーム７読み込み制限 
// function wpcf7_file_load() {
//     add_filter( 'wpcf7_load_js', '__return_false' );
//     add_filter( 'wpcf7_load_css', '__return_false' );
//     if( is_page( 'otoiawase' ) ){
//     if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
//     wpcf7_enqueue_scripts();
//     }
//     if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
//     wpcf7_enqueue_styles();
//     }
//     }
// }
// add_action( 'template_redirect', 'wpcf7_file_load' );

// add_action( 'bcn_after_fill', function ( $breadcrumb ) {
//     if ( count($breadcrumb->trail) > 0 ) {
//         for ( $i = 0; $i < count($breadcrumb->trail); $i++ ) {
//             if ( 'news' == $breadcrumb->trail[$i]->get_title() ) {
//                 $breadcrumb->trail[$i]->set_template( '' );
//             }
//         }
//     }
//     return $breadcrumb;
// } );