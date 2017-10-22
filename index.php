<?php get_header();?>
<body <?php if(have_posts()):?>
	<?php while(have_posts()):the_post();?>>
	<header>
	<div id="header_layer">
		<h1>
			<?php echo get_the_title();?>
		</h1>
		<?php the_excerpt(); ?>
		<?php
		$categories = get_the_category();
		$tags = get_the_tags();
		if ( !empty( $tags ) || !empty( $categories ) ): ?>
		<nav id="header_nav">
			<ul id="category_nav">
				<?php if(!empty($categories)):
					foreach($categories as $category ):?>

				<li class="category_name">
					<a href="<?php echo get_category_link($category->term_id);?>">
						<?php echo $category->name;?>
					</a>
				</li>
				<?php endforeach;?>
				<?php endif;?>
				<?php if(!empty($tags)):
				foreach($tags as $tag ):?>
				<li class="tag_name">
					<a href="<?php echo get_category_link($tag->term_id);?>">
						<?php echo $tag->name;?>
					</a>
				</li>
				<?php endforeach;?>
				<?php endif;?>
			</ul>
			<?php the_time('Y年n月j日'); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'global-menu' ) );?>
		</nav>
		<?php endif;?>
		</div><!--END-header_layer-->
		<?php the_post_thumbnail(); ?>
	</header>
			

	<main class="<?php post_class();?>">
	<article id="main_article">
		<?php the_content();?>
	</article>
		<?php endwhile;?>
		<?php endif;?>
	</main>
	<?php get_sidebar(); ?>
	<footer>
	<?php get_footer();?>
	</footer>
</body>
</html>