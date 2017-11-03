<?php
/*
Template Name: Search Page
*/
?>
<?php get_header();?>
<body>
<header>
	<div id="header_layer">
		<h1>404 not found...</h1>
		</div><!--END-header_layer-->
		<?php the_post_thumbnail(); ?>
	</header>
	<main id="category_main" <?php post_class();?>>
	<p>申し訳ありません。ご指定のURLにはファイルがありません。<br>
	どのようなものをお探しでしたか？<br>
	よろしければお聞かせください。</p>
	<?php get_search_form(); ?>
	</main>
	<?php get_footer();?>
</body>
</html>