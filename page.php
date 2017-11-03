<?php/*
Template Name: Page
*/
?>
<?php get_header();?>
<body>
<?php if(have_posts()):?><?php while(have_posts()):the_post();?>
	<header>
	<div id="header_layer">
		<h1>
			<?php echo get_the_title();?>
		</h1>
		<p>page.php</p>
		<?php the_excerpt(); ?>
		</div><!--END-header_layer-->
		<?php the_post_thumbnail(); ?>
	</header>
	<main <?php post_class();?>>
	<article id="main_article">
		<?php the_content();?>
	</article>
	</main>
	<?php endwhile;?>
		<?php endif;?>
	<?php get_footer();?>
</body>
</html>