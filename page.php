<?php get_header();?>
<main class="<?php post_class();?>">
 <?php if(have_posts()):?>
 	<?php while(have_posts()):the_post();?>
		<?php
			$categories = get_the_category();
			$tags = get_the_tags();
				if(!empty($tags) || !empty($categories) ):?>
				<?php if(!empty($categories)):
					foreach($categories as $category ):?>
					<p class="label">カテゴリ出力</p>
			<ul>
			<li class="category_name">
			<a href="<?php echo get_category_link($category->term_id);?>">
				<?php echo $category->name;?>
			</a>
			</li>
			</ul>
					<?php endforeach;?>
				<?php endif;?>
			<?php if(!empty($tags)):
				foreach($tags as $tag ):?>
				<p class="label">タグ出力</p>
					<ul>
					<li class="tag_name">
					<a href="<?php echo get_category_link($tag->term_id);?>">
						<?php echo $tag->name;?>
					</a>
					</li>
					</ul>
				<?php endforeach;?>
		<?php endif;?>
		<?php endif;?>
 		<?php the_time('Y年n月j日'); ?>
		<?php the_content();?>
	<?php endwhile;?>
<?php endif;?>
</main>
<?php get_sidebar(); ?>
<?php get_footer();?>
