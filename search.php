<?php
/*
Template Name: Search Page
*/
?>
<?php get_header();?>
<body>
<header>
	<div id="header_layer">
		<h1>
			「<?php the_search_query();?>」の検索結果
		</h1>
		<?php get_search_form(); ?>
		</div><!--END-header_layer-->
		<?php the_post_thumbnail(); ?>
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
		<?php endif;?>
	</main>
	<?php get_footer();?>
</body>
</html>