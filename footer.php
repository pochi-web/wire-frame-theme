<footer>
<?php wp_nav_menu( array( 'theme_location' => 'global-menu' ) );?>
<div id="copyright">
<p class="copyright_text">&copy;2017&nbsp;webで何か作るブログ</p>
<nav id="total_navigation">
<ul>
<li class="back_to"><a href="<?php echo esc_url( home_url() ); ?>">Homeへ</a></li>
<li class="back_to"><a href="<?php the_permalink();?>#top">Topへ</a></li>
</ul>
</nav>
</div>
<?php wp_footer();?>
</footer>