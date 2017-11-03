<?php
//load css file
function theme_style(){
wp_enqueue_style('font-aweasome','https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css');
wp_enqueue_style('google-font','https://fonts.googleapis.com/earlyaccess/notosansjapanese.css"');
wp_enqueue_style('base',get_template_directory_uri().'/css/base.css');
wp_enqueue_style('element',get_template_directory_uri().'/css/element.css');
wp_enqueue_style('modifier',get_template_directory_uri().'/css/modifier.css');
wp_enqueue_style('style',get_stylesheet_uri(),'');
};
add_action( 'wp_enqueue_scripts', 'theme_style' );

//define custom menus
function register_my_menus() {
  register_nav_menus(
    array(
      'global-menu' => __( 'グローバルメニュー' ),
      'footer-menu' => __( 'フッターメニュー' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


//theme suports

add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page','excerpt' );
//custom excerpt ending
function new_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>