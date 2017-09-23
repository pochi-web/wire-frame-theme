<?php
//load css file
function theme_style(){
wp_enqueue_style('style',get_stylesheet_uri(),'');
}
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

//end of custom menus


?>