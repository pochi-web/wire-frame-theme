<?php/*
Template Name: Category
*/
?>
<?php get_header();?>
<body>
	<?php
	$categories = get_the_category();
		$tags = get_the_tags();
	?>
	<header>
	<div id="header_layer">
		<h1>
			<?php echo $categories[0]->name;?>の記事一覧
		</h1>
		<?php echo category_description();?>		
			<nav id="header_nav">
			</nav>
		</div><!--END-header_layer-->
	</header>
	<main id="category_main" <?php post_class();?>>
	<?php if(have_posts()):?>
	<?php while(have_posts()):the_post();?>
		
		<section class="articles_index">
			<h2><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h2>
		<time class="date"><?php the_time('Y年n月j日'); ?></time>
		<div class="articles_index_thumbnail">
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail(); ?>
		</a>
		</div>
		<nav id="tag_navigation">	
	<?php if (get_the_tags()) the_tags('<ul id="tag_list"><li class="tag_name">','</li><li class="tag_name">','</li></ul>'); ?>
	</nav>
	</section>
		<?php endwhile;?>
		<?php endif;?>
	</main>
	<?php get_sidebar(); ?>
	<footer>
	<?php get_footer();?>
	<p>テンプレート：archive</p>
	</footer>
</body>
</html>