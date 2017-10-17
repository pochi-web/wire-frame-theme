<?php
//load css file
function theme_style(){
wp_enqueue_style('base',get_template_directory_uri().'/css/base.css',
				 array(
	'element',
	'modifier'
));
wp_enqueue_style('element',get_template_directory_uri().'/css/element.css');
wp_enqueue_style('modifier',get_template_directory_uri().'/css/modifier.css');
wp_enqueue_style('style',get_stylesheet_uri(),'');
};
add_action( 'wp_enqueue_scripts', 'theme_style' );

//define custom menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'ヘッダーメニュー' ),
      'footer-menu' => __( 'フッターメニュー' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


//theme suports

add_theme_support( 'post-thumbnails' ); 
?>