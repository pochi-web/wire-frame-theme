<p class="label">ナビゲーション（location:footer-menu）</p>
<?php wp_nav_menu( array( 
	'theme_location' => 'footer-menu', 
	'container_class' => 'my_extra_menu_class' ) );
?>
<?php wp_footer();?>