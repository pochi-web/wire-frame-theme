<?php/*
Template Name: Category
*/
?>
<?php get_header();?>
<body>
	<?php
	$categories = get_the_category();
	$category_name = $categories[0]->name;
	?>
	<header>
	<div id="header_layer">
	<?php if(!empty($categories)):?>
		<h1>
			<?php $category_name ;?>カテゴリーの記事一覧
		</h1>
		<?php echo category_description();?>
		<?php else:?>
		<h1>このカテゴリには現在投稿がありません。</h1>
		<?php endif;?>		
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
	<?php if (the_category()) the_category('<ul id="tag_list"><li class="tag_name">','</li><li class="tag_name">','</li></ul>'); ?>
	</nav>
	</section>
		<?php endwhile;?>
		<div style="width:100%; text-align:center;">;
<?php posts_nav_link( ' &#183; ', 'previous page', 'next page' ); ?>
</div>
		<?php endif;?>
	</main>
	<?php get_sidebar(); ?>
	<footer>
	<?php get_footer();?>
	</footer>
</body>
</html>